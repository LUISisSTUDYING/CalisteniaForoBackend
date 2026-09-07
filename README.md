# Calisthenics Forum API REST (Backend)

Esta es la API REST para la plataforma Calistenia Tarija, construida con **Laravel 12**, **SQLite** y protegida con **Laravel Sanctum**.

## Guía de Instalación

Sigue estos pasos para levantar el backend en tu entorno local:

### 1. Requisitos Previos
- **PHP** >= 8.2
- **Composer** instalado
- Habilitar la extensión de SQLite en tu archivo `php.ini` (usualmente descomentando `extension=pdo_sqlite` y `extension=sqlite3`).

### 2. Instalación Paso a Paso

Abre tu terminal y ejecuta los siguientes comandos en orden:

```bash
# 1. Clonar el repositorio (si aplica) y entrar a la carpeta
cd CalisteniaForoBackend

# 2. Instalar las dependencias de Composer
composer install

# 3. Crear el archivo de entorno copiando el de ejemplo
cp .env.example .env
```

### 3. Configuración de Base de Datos
Abre el archivo `.env` que acabas de crear y asegúrate de que la configuracion de la base de datos apunte a SQLite con la ruta absoluta correcta de tu sistema:

```env
DB_CONNECTION=sqlite
DB_DATABASE=C:\ruta\absoluta\a\tu\proyecto\CalisteniaForoBackend\database\database.sqlite
```
*(Crea el archivo vacío `database.sqlite` dentro de la carpeta `database/` si aún no existe).*

### 4. Inicializar y Levantar Servidor

Ejecuta los siguientes comandos para finalizar la configuración:

```bash
# 1. Generar la clave de la aplicación
php artisan key:generate

# 2. Ejecutar las migraciones e insertar los datos de prueba (Seeders)
php artisan migrate:fresh --seed

# 3. Levantar el servidor local
php artisan serve
```

¡Listo! El servidor debería estar corriendo en `http://localhost:8000`.

---

## Credenciales de Prueba (Seeders)

La base de datos se inicializa con 15 ejercicios, 15 rutinas y 2 usuarios para que puedas probar la API de inmediato:

- **Administrador** (Permisos totales):
  - Email: `admin@calisthenics.com`
  - Password: `password123`

- **Usuario Regular** (Solo lectura):
  - Email: `user@calisthenics.com`
  - Password: `password123`
