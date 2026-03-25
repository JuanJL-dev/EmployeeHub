# EmployeeHub API & Dashboard 🏢

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql)
![JavaScript](https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

El presente proyecto documenta el desarrollo de una **API REST** robusta para la gestión de empleados y departamentos, junto con un **Dashboard web** creado en HTML, CSS y JavaScript puro para consumir y probar la API de forma visual.

---

## 🛠️ Justificación de la Tecnología Utilizada

### Backend (API REST)
* **Framework:** PHP 8.2 + Laravel 11
* **Base de Datos:** MySQL 8.0
* **Pruebas:** Thunder Client 

### Frontend (Dashboard HTML + CSS + JS puro)
El Dashboard fue desarrollado como parte del proceso de validación de la API, demostrando que los endpoints responden correctamente ante operaciones reales ejecutadas desde un cliente diferente a Thunder Client.
* **Sin dependencias externas:** No requiere instalación de npm, node_modules ni herramientas de compilación.
* **Portabilidad total:** Un único archivo `.html` funciona en cualquier computadora con navegador moderno.
* **Transparencia del código:** El código es completamente legible y verificable. Cada llamada a la API es visible directamente en el JavaScript.
* **Fetch API Nativa:** JavaScript moderno incluye la API Fetch que permite realizar peticiones HTTP (GET, POST, PUT, DELETE) sin librerías adicionales.

---

## 🚀 Instalación paso a paso

```bash
# 1 — Clonar el repositorio
git clone [https://github.com/JuanJL-dev/EmployeeHub.git](https://github.com/JuanJL-dev/EmployeeHub.git)
cd employeehub_laravel

# 2 — Instalar dependencias PHP
composer install

# 3 — Copiar archivo de entorno
cp .env.example .env

# 4 — Generar clave de la aplicación
php artisan key:generate

# 5 — Configurar .env con tus credenciales MySQL
#     Edita DB_DATABASE, DB_USERNAME y DB_PASSWORD

# 6 — Crear la base de datos en MySQL
mysql -u root -p -e "CREATE DATABASE employeehub_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# 7 — Ejecutar migraciones para crear las tablas
php artisan migrate

# 8 — Iniciar el servidor
php artisan serve

El servidor quedará disponible en: `http://localhost:8000`

---

## Endpoints disponibles

### Departamentos
| Método | Ruta | Descripción |
|--------|------|-------------|
| GET | `/api/v1/departamentos` | Listar todos |
| POST | `/api/v1/departamentos` | Crear nuevo |
| GET | `/api/v1/departamentos/{id}` | Obtener por ID |
| PUT | `/api/v1/departamentos/{id}` | Actualizar |
| DELETE | `/api/v1/departamentos/{id}` | Eliminar |
| GET | `/api/v1/departamentos/{id}/empleados` | Empleados del departamento |

### Empleados
| Método | Ruta | Descripción |
|--------|------|-------------|
| GET | `/api/v1/empleados` | Listar todos |
| POST | `/api/v1/empleados` | Crear nuevo |
| GET | `/api/v1/empleados/{id}` | Obtener por ID |
| PUT | `/api/v1/empleados/{id}` | Actualizar |
| DELETE | `/api/v1/empleados/{id}` | Baja lógica |

---

## Estructura del proyecto

```
employeehub_api/
├── app/
│   ├── Http/
│   │   ├── Controllers/Api/
│   │   │   ├── DepartamentoController.php
│   │   │   └── EmpleadoController.php
│   │   └── Requests/
│   │       ├── StoreDepartamentoRequest.php
│   │       ├── UpdateDepartamentoRequest.php
│   │       ├── StoreEmpleadoRequest.php
│   │       └── UpdateEmpleadoRequest.php
│   └── Models/
│       ├── Departamento.php
│       └── Empleado.php
├── database/migrations/
│   ├── ..._create_departamentos_table.php
│   └── ..._create_empleados_table.php
├── routes/
│   └── api.php
├── .env.example
├── composer.json
└── README.md
```

