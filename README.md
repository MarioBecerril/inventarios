
# 💊 Inventarios - Gestión de Farmacias y Medicamentos

**Inventarios** es una aplicación web completa desarrollada con **Laravel 10** y **PHP 8**.
  Diseñada para la gestión eficiente de inventarios de farmacias, incluyendo medicamentos, ventas y una sección adicional de tareas.
  El sistema incluye autenticación de usuarios, CRUD completos y manejo de imágenes, con una interfaz amigable e intuitiva.

## 📦 Repositorio

🔗 [GitHub - MarioBecerril/inventarios](https://github.com/MarioBecerril/inventarios)

---

## 🚀 Características Principales

- ✅ **CRUD de Farmacias y Medicamentos**  
  Administración completa con relaciones y secciones para registrar ventas.

- 🔐 **Autenticación de Usuarios**  
  Implementación de rutas protegidas, middleware y gestión de sesiones.

- 📊 **DataTables**  
  Integración con paginación eficiente controlada desde el backend para una mejor experiencia al listar elementos.

- 📝 **Gestión de Tareas (To-Do List)**  
  - Control de tareas pendientes y completadas  
  - Filtro específico para mostrar únicamente tareas pendientes  
  - Gestión de imágenes asociadas a cada tarea (subida, edición y visualización)

---

## 🛠️ Requisitos Previos

- PHP >= 8.1
- Composer
- Node.js >= 16
- MySQL u otro sistema de base de datos compatible

---

## ⚙️ Instalación Local

Sigue los pasos para correr este proyecto en tu entorno local:

1. **Clonar el repositorio**  
   ```bash
   git clone https://github.com/MarioBecerril/inventarios.git
   cd inventarios
   ```

2. **Instalar dependencias de PHP**  
   ```bash
   composer install
   ```

3. **Instalar dependencias de Node.js**  
   ```bash
   npm install
   ```

4. **Copiar y configurar el archivo `.env`**  
   ```bash
   cp .env.example .env
   ```
   Luego edita el archivo `.env` con tus credenciales locales. Ejemplo:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=inventarios
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generar la clave de aplicación**  
   ```bash
   php artisan key:generate
   ```

6. **Crear el enlace simbólico al almacenamiento**  
   Esto permite el acceso a las imágenes subidas:
   ```bash
   php artisan storage:link
   ```

7. **Compilar los archivos de assets (JS y CSS)**  
   ```bash
   npm run build
   ```

8. **Iniciar el servidor de desarrollo**  
   ```bash
   php artisan serve
   ```
   
