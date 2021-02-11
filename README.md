# LaravelDepartments
proyecto usando framework laravel

# Tabla de contenidos.
---------------------------

 1. ¿Qué necesitas para probar este proyecto?.
 2. Pasos para probar este proyecto.


# 1. ¿Qué necesitas para probar este proyecto?.
----------------------------
Necesitas tener una base de datos instalada en tu máquina, da igual la que sea, MySQL, PostgreSQL, etc...

Necesitas tener instalado Laravel, esto lo debes hacer usando composer.

Tener instalado php en la version 7 en adelante.


# 2. Pasos para probar el proyecto.
Primero debes crearte una DB y dejarla en principio solo creada.

Después debes de modificar los datos del archivo .env que se encuentra en el directorio raiz, para adaptarlos a los de tu base de datos.

Debes de crearte un proyecto nuevo laravel y coger la carpeta vendor y copiarla en el raiz de este proyecto.

Una vez hecho esto en el directorio raiz debes de hacer: php artisan migrate , esto hará que se creen las tablas necesarias en nuestra DB.

Ya tan solo nos queda lanzar el proyecto, para esto abriremos otra terminal y ejecutaremos el comando php artisan serve

Si todo esta bien, se lanzara la aplicación y podremos ir a comprobarla a la URL que nos ha devuelto el comando que será normalmente localhost:8000/employees o localhost:8000/departments

Con esto se podrá probar la aplicacion

En la apliacación podrás crear, consultar y borrar departamentos y empleados.
