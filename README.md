# laravel v5.6 Framework PHP

## Comenzando 🚀

_Instrucciones para hacer funcioanar la aplicacion web CRUD._


### Pre-requisitos 📋

_Software y dependencias que se deben instalar_

_Gestor de BD_

```
PostgreSQL v10
```
ó
```
MySQL
```
_Gestor de Paquetes_
```
Composer
```

### Modo Desarrollo ⌨️

_Una vez descargado el proyecto e instaladas las dependencias se procede a ejecutar los siguientes comandos dentro de este por consola_

_Actualizar composer dentro del proyecto_

```
C:\Desktop\CRUD\Prueba> composer update
```

## Configuración DB para distintos gestores ⚙️

_En archivo .env esta la configuración para escoger BD y en .env.exampe ejemplos para postgresql y mysql_

_MySQL_
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba
DB_USERNAME=root
DB_PASSWORD=''
```

_PostgreSQL_
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=prueba
DB_USERNAME=postgres
DB_PASSWORD=''
```

_crear la base de datos "Prueba" en el gestor de base de datos que se escoja_

_Ejecutar migraciones, php artisan migrate para que se cree las tablas involucrada en el desarrollo_

```
C:\Desktop\CRUD\Prueba> php artisan migrate
```

_Ejecutar servidor de desarrollo_

```
C:\Desktop\CRUD\Prueba> php artisan serve
```
_url para acceder a aplicación, http://localhost:8000/_

