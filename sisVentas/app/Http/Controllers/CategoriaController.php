<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use sisVentas\Http\Request;
use sisVentas\Models\Categoria;//AGREGAR MI MODELO APP-SISVENTAS
use Illuminate\Support\Facades\Redirect;//PARA HACER UNAS REDIRECCIONES
use sisVentas\Http\Request\CategoriaFormRequest;//NUESTRO FORMULARIO REQUEST
use DB;//TRABAJAR CON LA CLASE DB DE LARAVEL 

class CategoriaController extends Controller
{
 public function __construct(){

 }  
 public function index(Request $request)){
    if($request)
    {
        $query=trim($request->get('serchText'));
        $categorias=DB::table('categoria')->where('nombre','LIKE','%'.$query.'%')
        ->where('condicion','=','1')
        ->orderBy('idcategoria','desc')
        ->paginate(7);
        return view('almacen.categoria.index',["categorias"=>$categorias,"serchText"=>$query]);
    }
 }  
 public function create(){
        return view("almacen.categoria.create");

 }
 public function store(CategoriaFormRequest $request){
        $categoria=new categoria;
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->condition='1';
        $categoria->save();
        return Redirect::to ('almacen/categoria');

 }
 public function show($id){
        return view("almacen.categoria.show",["categorias"=>categoria::findOrfail($id)]);

 }
 public function edit($id){
    return view("almacen.categoria.edit",["categorias"=>categoria::findOrfail($id)]);
 }
 public function update(CategoriaFormRequest $request, $id){
    $categoria=categoria::findOrfail($id);
    $categoria=nombre=$request->get('nombre');
    $categoria->descripcion=$request->get('descripcion');
    $categoria->update();
    return Redirect::to('almacen/categoria');
 public function destroy($id){
    $categoria=categoria::findOrfail($id);
    $categoria->condicion='0';
    $categoria->update();
    return Redirect::to('almacen/categoria');
 }

}
