# Catálogo de Productos Laravel

Este proyecto es un **CRUD de productos** desarrollado en Laravel, pensado para aprendizaje, prácticas universitarias o como base para aplicaciones de catálogo, gestión de inventario y ejemplos del patrón MVC moderno en Laravel.

## 🎯 Objetivos

- Demostrar la estructura básica de un proyecto Laravel con rutas, modelos, migraciones, controladores y vistas Blade.
- Implementar un CRUD funcional (Crear, Listar, Editar, Eliminar productos) usando SQLite como base de datos.
- Aplicar estilos modernos y tecnología frontend básica (CSS) para mejorar experiencia de usuario.
- Versionar el código y buenas prácticas usando Git y GitHub.

## 📦 Instalación y primeros pasos

1. **Clona el repositorio:**
   ```sh
   git clone https://github.com/krosty1722/catalogo-laravel.git
   cd catalogo-laravel
   ```

2. **Instala las dependencias PHP de Laravel:**
   ```sh
   composer install
   ```

3. **Configura el entorno (`.env`) y la base de datos SQLite:**

   Copia el archivo base de configuración y crea la base de datos vacía:
   ```sh
   copy .env.example .env  # (Windows)
   # o
   cp .env.example .env    # (Linux/Mac)
   ```

   Luego ejecuta (Windows):
   ```sh
   type nul > database\database.sqlite
   ```
   O manualmente crea el archivo vacío `database/database.sqlite`.

   Edita el archivo `.env` y verifica estas líneas:
   ```
   DB_CONNECTION=sqlite
   DB_DATABASE=database/database.sqlite
   ```

   > **👀 TIP:** Si usas Windows y tienes errores de conexión, puedes poner la ruta absoluta:
   > `DB_DATABASE=C:/ruta/completa/a/catalogo-laravel/database/database.sqlite`

4. **Genera la clave de aplicación de Laravel:**
   ```sh
   php artisan key:generate
   ```

5. **Ejecuta las migraciones para crear las tablas:**
   ```sh
   php artisan migrate
   ```

6. **Corre el servidor de desarrollo:**
   ```sh
   php artisan serve
   ```
   Y abre [http://127.0.0.1:8000](http://127.0.0.1:8000) en tu navegador.

---

## 🖥️ Funcionalidades

- Listado central de productos con tabla moderna y botones de acción.
- Añadir productos nuevos, editar existentes, y eliminar.
- Mensajes automáticos de éxito para todas las acciones.
- Interfaz estilizada y responsive, lista para presentación.
- Migración y modelo producto incluido.

---
