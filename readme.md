<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Admin Panel Test
Test de Panel de Administración en Laravel

## Requerimientos
1. PHP >= 7.0.0
2. Mysql
3. Composer
4. XAMPP

## Instalación
1. Descargar la Base de Datos  -> <a href="https://drive.google.com/file/d/1nFsWaTS5H0QwFU5REcplbz_zO6nGvI7Q/view?usp=sharing" target="_blank">Base de Datos</a>

2. Crear un usuario root de mysql con el nombre "logan" y con el password "xm3n"

CREATE USER 'logan'@'localhost' IDENTIFIED BY 'xm3n';<br>
GRANT ALL PRIVILEGES ON * . * TO 'logan'@'localhost';<br>
FLUSH PRIVILEGES;

3. El proyecto ya tiene incluido el archivo .env de conexion a la base de datos con las credenciales (es una prueba).

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=marvel<br>
DB_USERNAME=logan<br>
DB_PASSWORD=xm3n<br>

4. Situarse en el proyecto y descargar las dependencias de composer ejecutando el comando "composer install".

4. Iniciar el proyecto ejecutando el comando "php artisan serve".

5. Ir al navegador en http://localhost:8000

## Dudas
mauriciogonzalez1234@gmail.com
