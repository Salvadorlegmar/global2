Configuracion de apache:
	- Ir a /etc/apache2/sites-available/000-default.conf
	- Añadir:
		DocumentRoot /var/www/global2/laravel-vue
       		<Directory /var/www/global2/laravel-vue>
               		Options Indexes FollowSymLinks MultiViews
                	AllowOverride All
                	Order allow,deny
                	allow from all
       		</Directory>

	- Reiniciar demonio apache

Para lanzar el servidor hay que ejecutar antes de nada "php artisan serve"

Para ver la vista del formulario de empresas hay que ir a la ruta localhost:8000/form

Para ver la vista del gestor de empresas hay que ir a la ruta localhost:8000/gestor

con el comando: 'php artisan migrate:refresh' en el repositorio he migrado la estructura de la base de datos "companies" a mi BBDD MySQL local.

Al rellenar un nuevo Formulario con una nueva empresa, este se almacenará en la tabla "companies" y al mismo tiempo
se creará un PDF con los datos deL formulario y se enviará un correo al driver de correo "log" y se limpiará 
el formulario.
