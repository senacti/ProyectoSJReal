# Proyecto SJReal
Este proyecto es una aplicación web desarrollada con Laravel 10.0 para el backend y Angular 17 para el frontend. El desarrollo del software se enfoca en facilitar los modulos de inventario, hospedaje y ventas del hotel sjReal inncluyendo el modulo de PQRS.

## Tabla de Contenidos

- [Características](#características)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Uso](#uso)
- [Contribuir](#contribuir)
- [Licencia](#licencia)

## Características

- **Laravel 10.0**: Framework PHP para el backend.
- **Angular 17**: Framework TypeScript para el frontend.
- **Autenticación y Autorización**: Implementación de JWT para la autenticación.// en proceso de aprendizaje 
- **CRUD Completo**: Funcionalidades de crear, leer, actualizar y eliminar.
- **API RESTful**: Endpoints bien definidos y documentados.
- **Interfaz de Usuario**: Desarrollada con Angular usando tailwind para el diseño.

## Requisitos

- **PHP >= 8.1**
- **Composer**
- **Node.js >= 18.x**
- **Angular CLI**
- **MySQL o cualquier otra base de datos compatible**

## Instalación

### Backend (Laravel 10.0)

1. Clonar el repositorio:
    ```sh
    git clone git@github.com:senacti/ProyectoSJReal.git 
    cd backSJReal
    ```

2. Instalar dependencias de Composer:
    ```sh
    composer install
    ```
3. Crear un archivo `.env` basado en `.env.example` y configurar la conexión a la base de datos:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```
#  en proceso..
4. Ejecutar migraciones y seeders:
    ```sh
    php artisan migrate --seed
    ```

5. Iniciar el servidor de desarrollo:
    ```sh
    php artisan serve
    ```

### Frontend (Angular 17)

1. Navegar a la carpeta del frontend:
    ```sh
    cd FrontSJReal
    ```

2. Instalar dependencias de npm:
    ```sh
    npm install
    ```

3. Iniciar el servidor de desarrollo de Angular:
    ```sh
    ng serve
    ```

## Configuración

Asegúrate de configurar correctamente las variables de entorno en el archivo `.env` para Laravel y en `src/environments/environment.ts` para Angular.

### Configuración de Laravel (.env)

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:TuClaveGenerada
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sjreal
DB_USERNAME=root
DB_PASSWORD=