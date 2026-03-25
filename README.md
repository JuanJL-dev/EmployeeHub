<div align="center">

<!-- Animated Banner -->
<img src="https://readme-typing-svg.demolab.com?font=JetBrains+Mono&weight=700&size=32&duration=2500&pause=1000&color=36BCF7&center=true&vCenter=true&width=800&lines=🚀+EmployeeHub+API;Sistema+de+Gestión+de+Empleados;Laravel+11+%2B+MySQL+Backend;Dashboard+Vanilla+JavaScript;Proyecto+Full+Stack+MVC" alt="Typing Animation" />

<br/>

<!-- Status Badges -->
<img src="https://img.shields.io/badge/Estado-Activo-22c55e?style=for-the-badge&logo=checkmarx&logoColor=white"/>
<img src="https://img.shields.io/badge/Versión-1.0.0-3b82f6?style=for-the-badge"/>
<img src="https://img.shields.io/badge/Licencia-MIT-a855f7?style=for-the-badge"/>
<br/><br/>

<!-- Tech Badges -->
<img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
<img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
<img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>
<img src="https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>
<img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>
<img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>

</div>

---

## 📌 Descripción General

**EmployeeHub** es un sistema de gestión de empleados y departamentos que combina una **API RESTful robusta** con un **dashboard web interactivo**, construido sobre una arquitectura MVC limpia con Laravel 11.

> 💡 Diseñado para ser ligero, escalable y fácilmente extensible sin depender de frameworks frontend.

### ✨ Características principales

| Característica | Detalle |
|---|---|
| 🔗 **API REST** | Endpoints versionados bajo `/api/v1/` |
| 🖥️ **Dashboard Web** | Interfaz construida con HTML, CSS y JavaScript puro |
| 🏗️ **Arquitectura MVC** | Separación clara de responsabilidades |
| ✅ **Validación** | Form Requests personalizados por entidad |
| 🔄 **Relaciones** | Empleados ↔ Departamentos mediante Eloquent ORM |
| 🗂️ **Migraciones** | Control de versiones de base de datos con Artisan |

---

## ⚙️ Tecnologías Utilizadas

<div align="center">
<img src="https://skillicons.dev/icons?i=laravel,php,mysql,js,html,css&theme=dark" height="65"/>
</div>

<br/>

| Tecnología | Versión | Rol |
|---|---|---|
| ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white) | `11.x` | Framework backend / API |
| ![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white) | `8.2+` | Lenguaje de servidor |
| ![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white) | `8.0+` | Motor de base de datos |
| ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black) | ES6+ | Lógica del dashboard (Fetch API) |
| ![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white) | 5 | Estructura del dashboard |
| ![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white) | 3 | Estilos del dashboard |

---

## 🧠 Arquitectura del Sistema

```
┌─────────────────────────────────────────────────────────────┐
│                     ARQUITECTURA MVC                        │
│                                                             │
│   ┌──────────┐    HTTP     ┌─────────────┐    Query         │
│   │ Dashboard│ ─────────► │ Controller  │ ──────────►  DB  │
│   │  (View)  │ ◄───────── │  (Lógica)   │ ◄──────────      │
│   └──────────┘   JSON     └─────────────┘    Model         │
│                                  │                          │
│                           FormRequest                       │
│                           (Validación)                      │
└─────────────────────────────────────────────────────────────┘
```

| Capa | Archivo | Responsabilidad |
|---|---|---|
| **Model** | `Departamento.php`, `Empleado.php` | Lógica de datos y relaciones Eloquent |
| **Controller** | `DepartamentoController.php`, `EmpleadoController.php` | Lógica de negocio y respuestas JSON |
| **View** | Dashboard HTML | Consumo de la API desde el navegador |
| **Request** | `Store/UpdateRequest.php` | Validación de entradas del usuario |

---

## 🚀 Instalación y Configuración

### Requisitos previos

- PHP `>= 8.2`
- Composer `>= 2.x`
- MySQL `>= 8.0`
- Laravel CLI

### Pasos de instalación

**1. Clonar el repositorio**

```bash
git clone https://github.com/JuanJL-dev/EmployeeHub.git
cd employeehub_laravel
```

**2. Instalar dependencias PHP**

```bash
composer install
```

**3. Configurar variables de entorno**

```bash
cp .env.example .env
```

Editar `.env` con las credenciales de tu base de datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=employeehub_db
DB_USERNAME=root
DB_PASSWORD=tu_password
```

**4. Generar clave de aplicación**

```bash
php artisan key:generate
```

**5. Crear la base de datos**

```bash
mysql -u root -p -e "CREATE DATABASE employeehub_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

**6. Ejecutar migraciones**

```bash
php artisan migrate
```

**7. Iniciar el servidor de desarrollo**

```bash
php artisan serve
```

> 🌐 La aplicación estará disponible en: **http://localhost:8000**

---

## 📡 Documentación de la API

> Base URL: `http://localhost:8000/api/v1`

### 🏢 Departamentos

| Método | Endpoint | Descripción | Body requerido |
|---|---|---|---|
| `GET` | `/departamentos` | Listar todos los departamentos | ❌ |
| `POST` | `/departamentos` | Crear un nuevo departamento | ✅ |
| `GET` | `/departamentos/{id}` | Obtener departamento por ID | ❌ |
| `PUT` | `/departamentos/{id}` | Actualizar departamento | ✅ |
| `DELETE` | `/departamentos/{id}` | Eliminar departamento | ❌ |
| `GET` | `/departamentos/{id}/empleados` | Listar empleados del departamento | ❌ |

<details>
<summary>📄 Ejemplo de body para <code>POST /departamentos</code></summary>

```json
{
  "nombre": "Ingeniería de Software",
  "descripcion": "Departamento de desarrollo y arquitectura"
}
```

</details>

---

### 👨‍💼 Empleados

| Método | Endpoint | Descripción | Body requerido |
|---|---|---|---|
| `GET` | `/empleados` | Listar todos los empleados | ❌ |
| `POST` | `/empleados` | Crear un nuevo empleado | ✅ |
| `GET` | `/empleados/{id}` | Obtener empleado por ID | ❌ |
| `PUT` | `/empleados/{id}` | Actualizar datos del empleado | ✅ |
| `DELETE` | `/empleados/{id}` | Baja lógica del empleado | ❌ |

<details>
<summary>📄 Ejemplo de body para <code>POST /empleados</code></summary>

```json
{
  "nombre": "Juan Luis",
  "apellido": "Cortés Matus",
  "email": "juan@empresa.com",
  "departamento_id": 1,
  "cargo": "Desarrollador Backend",
  "fecha_ingreso": "2024-01-15"
}
```

</details>

---

## 📊 Dashboard Web

El dashboard permite gestionar toda la información del sistema directamente desde el navegador, sin necesidad de herramientas externas.

| Funcionalidad | Descripción |
|---|---|
| 📥 **Consultar** | Visualización de empleados y departamentos en tiempo real |
| ➕ **Crear** | Formularios para registrar nuevos empleados y departamentos |
| ✏️ **Editar** | Actualización de registros existentes |
| ❌ **Eliminar** | Baja lógica de empleados y eliminación de departamentos |

> Toda la comunicación con la API se realiza mediante **Fetch API** nativa de JavaScript.

---

## 📁 Estructura del Proyecto

```
employeehub_api/
│
├── 📂 app/
│   ├── 📂 Http/
│   │   ├── 📂 Controllers/Api/
│   │   │   ├── 📄 DepartamentoController.php
│   │   │   └── 📄 EmpleadoController.php
│   │   └── 📂 Requests/
│   │       ├── 📄 StoreDepartamentoRequest.php
│   │       ├── 📄 UpdateDepartamentoRequest.php
│   │       ├── 📄 StoreEmpleadoRequest.php
│   │       └── 📄 UpdateEmpleadoRequest.php
│   └── 📂 Models/
│       ├── 📄 Departamento.php
│       └── 📄 Empleado.php
│
├── 📂 database/
│   └── 📂 migrations/
│       ├── 📄 ..._create_departamentos_table.php
│       └── 📄 ..._create_empleados_table.php
│
├── 📂 routes/
│   └── 📄 api.php
│
├── 📄 .env.example
├── 📄 composer.json
└── 📄 README.md
```

---

## 🧩 Características Técnicas

<div align="center">

| ✔ Característica | Descripción |
|---|---|
| ✅ API RESTful | Diseño basado en estándares REST con respuestas JSON |
| ✅ Validación con FormRequest | Reglas de validación desacopladas del controlador |
| ✅ Relaciones Eloquent | `hasMany` / `belongsTo` entre Empleados y Departamentos |
| ✅ Migraciones versionadas | Control de esquema de base de datos con `php artisan migrate` |
| ✅ Baja lógica | Los empleados no se eliminan físicamente, solo se desactivan |
| ✅ Arquitectura MVC | Código organizado y mantenible |
| ✅ Código limpio | Separación clara de responsabilidades en cada capa |
| ✅ API Versionada | Endpoints bajo `/api/v1/` para facilitar evolución futura |

</div>

---

## 🧪 Herramientas de Prueba

Puedes probar la API con cualquiera de estas herramientas:

| Herramienta | Tipo | Link |
|---|---|---|
| 🖥️ **Dashboard integrado** | Web | `http://localhost:8000` |
| ⚡ **Thunder Client** | Extensión VS Code | [Descargar](https://www.thunderclient.com/) |
| 📬 **Postman** | Aplicación | [Descargar](https://www.postman.com/downloads/) |
| 🌐 **cURL** | Terminal | Nativo en Unix/macOS |

---

## 📈 Mejoras Futuras

| Prioridad | Mejora | Descripción |
|---|---|---|
| 🔴 Alta | 🔐 Autenticación | Implementar JWT o Laravel Sanctum |
| 🟠 Media | ⚛️ Frontend moderno | Migrar dashboard a React o Vue.js |
| 🟠 Media | 🧪 Testing | Pruebas unitarias y de integración con PHPUnit |
| 🟡 Baja | ☁️ Deploy | Despliegue en servidor (Railway, Render, AWS) |
| 🟡 Baja | 📊 Reportes | Exportación a PDF/Excel de empleados |
| 🟢 Extra | 🔔 Notificaciones | Alertas por correo al crear/modificar empleados |

---

## 👥 Autores

<div align="center">

| | Nombre | Rol |
|---|---|---|
| 👨‍💻 | **Juan Luis Cortés Matus** | Desarrollador Full Stack |
| 👩‍💻 | **Alondra Monserrat Galindo Ledezma** | Desarrolladora Full Stack |
| 👨‍💻 | **César Oswaldo Medina Ornelas** | Desarrollador Full Stack |

</div>

---

<div align="center">

**¿Encontraste un bug o tienes una sugerencia?**

[![Issues](https://img.shields.io/badge/Abrir_Issue-GitHub-181717?style=for-the-badge&logo=github)](https://github.com/JuanJL-dev/EmployeeHub/issues)
[![Pull Requests](https://img.shields.io/badge/Pull_Request-Contribuir-22c55e?style=for-the-badge&logo=github)](https://github.com/JuanJL-dev/EmployeeHub/pulls)

<br/>

*Hecho con ❤️ — EmployeeHub © 2025*

</div>
