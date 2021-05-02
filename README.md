Configuracion de apache:
	- Ir a /etc/apache2/sites-available/000-default.conf
	- Añadir:
		DocumentRoot /var/www/laravel-vue
       		<Directory /var/www/laravel-vue>
               		Options Indexes FollowSymLinks MultiViews
                	AllowOverride All
                	Order allow,deny
                	allow from all
       		</Directory>

	- Reiniciar demonio apache


Para ver la vista del formulario de empresas hay que ir a la ruta localhost/resources/form.blade.php

Para ver la vista del gestor de empresas hay que ir a la ruta localhost/resources/gestor.blade.php

