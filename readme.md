<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Admin Panel Test
Test de Panel de Administración en Laravel

## Requerimientos
1. PHP >= 7.0.0
2. Mysql
3. Composer
4. XAMPP

## Instalación
1. Descargar la bd -> <a href="https://drive.google.com/file/d/1k_RlCRWdJ6qhxKzSgWd3al9K-cezhTNu/view?usp=sharing" target="_blank">Base de Datos</a>

2. Crear un usuario root de mysql con el nombre logan

CREATE USER 'logan'@'localhost' IDENTIFIED BY 'xm3n';
GRANT ALL PRIVILEGES ON * . * TO 'logan'@'localhost';
FLUSH PRIVILEGES;

3. El proyecto ya tiene incluido el archivo .env de conexion a la base de datos con las credenciales (es una prueba).

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=marvel
DB_USERNAME=logan
DB_PASSWORD=xm3n

4. Situarse en el proyecto y correr el comando php artisan serve.

5. Ir al navegador en http://localhost:8000

## Dudas
mauriciogonzalez1234@gmail.com
