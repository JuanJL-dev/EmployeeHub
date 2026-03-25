<<<<<<< HEAD
# EmployeeHub
=======
# EmployeeHub API 🏢

API REST para la gestión de empleados y departamentos.  
**Framework:** PHP 8.2 + Laravel 11 · **BD:** MySQL · **Pruebas:** Thunder Client

---

## Requisitos previos

| Herramienta | Versión mínima | Descarga |
|---|---|---|
| PHP | 8.2 | https://www.php.net/downloads |
| Composer | 2.x | https://getcomposer.org/download/ |
| MySQL | 8.0 | https://dev.mysql.com/downloads/ |
| Laravel CLI | 11.x | `composer global require laravel/installer` |

---

## Instalación paso a paso

```bash
# 1 — Clonar el repositorio
git clone https://github.com/tu-usuario/employeehub-api.git
cd employeehub-api

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

# 7 — Ejecutar migraciones
php artisan migrate

# 8 — Iniciar el servidor
php artisan serve
```

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
>>>>>>> ba3ca78 (Primer commit)
