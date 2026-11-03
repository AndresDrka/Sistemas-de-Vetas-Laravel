Este repositorio contiene el diseño, la arquitectura y el desarrollo de un Sistema de Gestión de Ventas e Inventario desarrollado con el framework Laravel, PHP y una estructura relacional en SQL. El proyecto está enfocado en resolver las necesidades operativas de comercios, permitiendo el control estricto de existencias, transacciones de ventas y reportería básica.

Características del Proyecto

• Módulo de Inventario: Control completo de stock de productos, categorías y alertas de existencias.
• Módulo de Ventas: Procesamiento lógico de transacciones en tiempo real.
• Estructura Relacional Avanzada: Base de datos SQL optimizada mediante restricciones de llaves foráneas y consistencia de datos para evitar pérdidas de información (incluye scripts .sql y modelo de Workbench .mwb).
• Interfaz Dinámica: Integración fluida con plantillas estructuradas y Bootstrap para una experiencia de usuario limpia y responsiva.

Tecnologías y Herramientas Utilizadas

• Backend: PHP 7+ / Laravel Framework
• Base de Datos: SQL (Arquitectura relacional, scripts de migración y modelado de datos)
• Frontend: Bootstrap, Plantillas HTML5/CSS3
• Control de Versiones: Git / GitHub

Enfoque de Arquitectura y Lógica (Análisis de Sistemas)

El sistema fue estructurado bajo el patrón Modelo-Vista-Controlador (MVC), garantizando la separación de responsabilidades:
1. Modelado de Datos: Creación de una estructura de base de datos normalizada para evitar la redundancia, manejando tablas interconectadas para clientes, ventas, detalles de ventas y productos.
2. Lógica de Negocio: Controladores dedicados a procesar cálculos de transacciones, validación de formularios del lado del servidor y control estricto de accesos.
3. Capa de Presentación: Vistas organizadas mediante componentes reutilizables utilizando el motor de plantillas de Laravel.
Proyecto diseñado y desarrollado como parte del portafolio técnico en Análisis y Desarrollo de Sistemas de Información (ADSI).
