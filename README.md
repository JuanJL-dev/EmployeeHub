# 🚀 EmployeeHub API & Dashboard 🏢

<p align="center">
  <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&size=28&duration=2000&pause=800&color=36BCF7&center=true&vCenter=true&width=700&lines=EmployeeHub+API;Sistema+de+Gestión+de+Empleados;Laravel+%2B+MySQL+Backend;Dashboard+con+JavaScript+Puro;Proyecto+Full+Stack" />
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php"/>
  <img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql"/>
  <img src="https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3"/>
</p>

---

## 📌 Descripción

**EmployeeHub** es un sistema completo que incluye:

- 🔹 API REST para gestión de empleados y departamentos  
- 🔹 Dashboard web para consumir la API  
- 🔹 Arquitectura basada en MVC  
- 🔹 Integración frontend-backend sin frameworks  

---

## ⚙️ Tecnologías

<p align="center">
  <img src="https://skillicons.dev/icons?i=laravel,php,mysql,js,html,css&theme=dark" height="60"/>
</p>

---

## 🧠 Arquitectura del Sistema


MVC (Model - View - Controller)


- **Model:** Manejo de datos  
- **Controller:** Lógica de negocio  
- **View:** Dashboard HTML  

---

## 🚀 Instalación

```bash
# Clonar repositorio
git clone https://github.com/JuanJL-dev/EmployeeHub.git
cd employeehub_laravel

# Instalar dependencias
composer install

# Configurar entorno
cp .env.example .env

# Generar clave
php artisan key:generate

# Configurar base de datos en .env
# DB_DATABASE=employeehub_db
# DB_USERNAME=root
# DB_PASSWORD=tu_password

# Crear base de datos
mysql -u root -p -e "CREATE DATABASE employeehub_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Migraciones
php artisan migrate

# Ejecutar servidor
php artisan serve
🌐 Servidor
http://localhost:8000
📡 Endpoints disponibles
🏢 Departamentos
Método	Ruta	Descripción
GET	/api/v1/departamentos	Listar todos
POST	/api/v1/departamentos	Crear nuevo
GET	/api/v1/departamentos/{id}	Obtener por ID
PUT	/api/v1/departamentos/{id}	Actualizar
DELETE	/api/v1/departamentos/{id}	Eliminar
GET	/api/v1/departamentos/{id}/empleados	Empleados del departamento
👨‍💼 Empleados
Método	Ruta	Descripción
GET	/api/v1/empleados	Listar todos
POST	/api/v1/empleados	Crear nuevo
GET	/api/v1/empleados/{id}	Obtener por ID
PUT	/api/v1/empleados/{id}	Actualizar
DELETE	/api/v1/empleados/{id}	Baja lógica
📊 Dashboard

El sistema incluye un dashboard que permite:

📥 Consultar datos en tiempo real
➕ Crear registros
✏️ Editar información
❌ Eliminar registros

Todo mediante Fetch API (JavaScript nativo).

🧪 Pruebas

Puedes probar la API con:

Thunder Client
Postman
Dashboard integrado
📁 Estructura del Proyecto
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
🧩 Características Técnicas
✔ API RESTful
✔ Validación con FormRequest
✔ Relaciones entre entidades
✔ Migraciones versionadas
✔ Código limpio
✔ Arquitectura MVC
📈 Posibles Mejoras
🔐 Autenticación con JWT o Sanctum
⚛️ Frontend con React o Vue
☁️ Deploy en servidor
🧪 Testing automatizado
👨‍💻 Autor

Juan Luis Cortés Matus
