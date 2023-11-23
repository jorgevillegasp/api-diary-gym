<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Acerca de  Laravel

Laravel es un marco de aplicación web con una sintaxis elegante y expresiva. Creemos que el desarrollo debe ser una experiencia agradable y creativa para que sea verdaderamente satisfactorio. Laravel elimina las complicaciones del desarrollo al facilitar las tareas comunes utilizadas en muchos proyectos web, como por ejemplo:

- [Motor de enrutamiento simple y rápido](https://laravel.com/docs/routing).
- [Potente contenedor de inyección de dependencia](https://laravel.com/docs/container).
- Múltiples back-ends para [sesiones ](https://laravel.com/docs/session) y almacenamiento [en caché.](https://laravel.com/docs/cache) .
- [Base de datos ORM](https://laravel.com/docs/eloquent) expresiva e intuitiva ..
- [Migraciones de esquemas](https://laravel.com/docs/migrations)independientes de la base de datos.
- [Robusto procesamiento de trabajos en segundo plano](https://laravel.com/docs/queues).
- [Transmisión de eventos en tiempo real](https://laravel.com/docs/broadcasting).

Laravel es accesible, potente y proporciona las herramientas necesarias para aplicaciones grandes y sólidas.

## Requisitos

El proyecto requiere de las siguientes paquetes:

- [MySql](https://www.mysql.com/downloads/).
- [php](https://www.php.net/downloads.php) 8.1.0 o superior.

- [Composer](https://getcomposer.org/) 2.2.0 o superior.

Puede instalar los paquetes ya intalados que trae LARAGON o XAMPP

Se recomienda utilizar Laragon ya que es mas facil de actualizar php y mysql de ser necesario.

- [Laragon](https://laragon.org/download/index.html).

- [XAMPP](https://www.apachefriends.org/es/download.html).

## Ejecucion de comando

Una vez clonado el proyecto tiene que seguir los siguientes pasos.

*  Paso 1. Instalar dependencias con Composer

Es necesario instalar todas las dependencias para ello ubicate en la carpeta raíz deL proyecto, abre una terminal de comandos y ejecuta la instrucción:

```bash
  composer install
```
* Paso 2. Crear un nuevo archivo .env

Cuando se clona con Git un repositorio de Laravel por seguridad y de manera predeterminada el archivo .env no se agrega al proyecto es por eso que al clonar un proyecto es necesario generar un archivo nuevo. Escribe en la terminal:
luego copie y pege el .env.example y quitele el .example quedando solo .env

```bash
    cp .env.example .env
```

Este comando creará una copia del archivo .env.example llamando al archivo nuevo .env, es necesario que le agregues la información de la base de datos que creaste en el punto anterior como nombre, contraseña, usuario, etc., también si tu proyecto necesita alguna variable global es necesario agregarla en este archivo.

* Paso 3. Generar una key nueva

Desde la terminal de comandos ejecuta la instrucción:

```bash
    php artisan key:generate
```

y se creará una clave única que es necesaria para que la app funcione correctamente.

* Paso 4. Correr las migraciones

Para correr las migraciones desde la terminal de comandos ejecuta la siguiente instrucción:

```bash
    php artisan migrate
```

Al correr este comando todas las tablas que requiere tu aplicación en Laravel se crearán en la base de datos.

* Paso 6. Agregar los seed.

Este paso es solamente para los proyectos los cuales tengan seeds y quieran correrlos. Desde la terminal y ejecuta el comando:

```bash
    php artisan db:seed
```

De esta manera la base de datos se llenará con toda la información que se encuentre en los seed.

¡Y listo! Has clonado el proyecto Laravel de manera fácil y rápida.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Observaciones

Si te sale un error al ejecutar "composer install" sobre PHP

```bash
Failed to download guzzlehttp/psr7 from dist: The zip extension and unzip/7z commands are both missing, skipping.
The php.ini used by your command-line PHP is: C:\laragon\bin\php\php-8.2.4-Win32-vs16-x64\php.ini
```

Este error se produce cuando falta la extensión zip en su instalación de PHP. Para solucionarlo, puede seguir los siguientes pasos:



* Abra el archivo php.ini mencionado en el mensaje de error.


* Busque la línea que comienza con ";extension=zip" y elimine el punto y coma al principio de la línea para descomentar la extensión.


* Guarde y cierre el archivo php.ini.


* Reinicie su servidor web y ejecute el comando "composer install" nuevamente.


Si sigue recibiendo errores, también puede intentar instalar manualmente la extensión zip en su instalación de PHP. Puede encontrar información sobre cómo hacerlo en la documentación oficial de PHP.


## Análisis estático con Psalm

[Psalm](https://psalm.dev/) es una herramienta de análisis estático para PHP que ayuda a detectar posibles errores, mejorar la calidad del código y garantizar mejores prácticas de desarrollo.

### Beneficios:

- **Detecta errores temprano:** Identifica errores en el código antes de la ejecución, ayudando a prevenir fallos en tiempo de ejecución.

- **Mejora la calidad del código:** Proporciona sugerencias para limpiar y mejorar el código, reduciendo posibles errores y mejorando la legibilidad.

- **Fomenta buenas prácticas:** Ayuda a seguir estándares de codificación y mejores prácticas para un código más robusto y mantenible.

### Cómo usar:

1. **Instalación:**
   ```bash
   composer require --dev vimeo/psalm

2. **Ejecucion:**
   ```bash
   ./vendor/bin/psalm
