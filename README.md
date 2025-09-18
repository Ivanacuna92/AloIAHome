Perfecto. Aquí tienes una guía **bien estructurada y detallada** para que puedas dejarla como `README.md` del proyecto **Aloia**. La finalidad es que cualquier desarrollador pueda entender claramente cómo está organizado el sistema, cómo colaborar con él y cómo mantener la coherencia en el futuro.

---

## 🧠 Aloia — Guía de Organización del Proyecto

Este proyecto representa el frontend y backend ligero del sitio web de \[Aloia.ai], construido en PHP puro con una estructura modular y escalable. Aquí encontrarás las instrucciones precisas sobre cómo está organizado y cómo debe mantenerse o ampliarse correctamente.

---

### 📁 Estructura General del Proyecto

```bash
aloia-refactor/
├── api/                 # Endpoints expuestos para comunicación externa (ej. Webhooks)
│   └── webhook.php
├── controllers/         # Lógica del backend (controladores)
│   └── ContactController.php
├── includes/            # Configuración global y constantes reutilizables
│   └── config.php
├── models/              # Clases que representan modelos de negocio (MVC-lite)
│   └── Contact.php
├── public_html/         # Directorio público, sirve todo desde aquí
│   ├── assets/          # Archivos estáticos (CSS, JS, imágenes)
│   │   ├── css/
│   │   │   └── main.css
│   │   ├── js/
│   │   │   └── main.js
│   │   └── img/
│   │       ├── aloia.png, fondo1.jpg, etc.
│   ├── index.php        # Punto de entrada del sitio
│   └── partials/        # Componentes visuales reutilizables
│       ├── layout/      # Encabezado, pie de página y componentes persistentes
│       │   ├── head.php
│       │   ├── header.php
│       │   ├── footer.php
│       │   └── chatwidget.php
│       └── sections/    # Secciones del landing o página
│           ├── hero.php
│           ├── voicebot.php
│           ├── pains.php
│           ├── authority.php
│           ├── questions.php
│           └── superpowers.php
```

---

### 🔧 Reglas de Organización

#### 1. `includes/config.php`

* Contiene constantes como `IMG_PATH`, `CSS_PATH`, `JS_PATH`.
* Define `$current_path` y `$page_title` dinámicos.
* Debe ser `require_once` desde el inicio de cada archivo principal (como `index.php`).

#### 2. `public_html/index.php`

* Solo debe incluir componentes visuales (partials) en orden.
* **NO debe tener lógica de negocio directa.**
* Usa `include()` para cargar `head`, `header`, `sections`, `footer`.

```php
require_once __DIR__ . '/../includes/config.php';
include 'partials/layout/head.php';
include 'partials/layout/header.php';
// ...
include 'partials/layout/footer.php';
```

#### 3. `partials/layout/`

* Todo lo que se **repite** entre páginas.
* Aquí van:

  * `head.php` — metadatos y links a assets.
  * `header.php` — menú de navegación.
  * `footer.php` — pie de página.
  * `chatwidget.php` — widget flotante o de soporte.

#### 4. `partials/sections/`

* Cada sección del contenido principal.
* Si el sitio tiene nuevas páginas, sus secciones también deben estar aquí.
* Ejemplo de nombres:

  * `hero.php`, `voicebot.php`, `features.php`, `testimonials.php`, etc.

#### 5. `assets/`

* Organización estricta por tipo:

  * `css/` → estilos (incluye `main.css` global o específicos).
  * `js/` → scripts necesarios (por sección o global).
  * `img/` → todas las imágenes. Usa nombres descriptivos y en minúsculas.

#### 6. `controllers/` y `models/`

* Aquí se maneja la lógica de backend en formato tipo MVC:

  * `controllers/` — archivos que procesan datos del usuario (ej. formularios).
  * `models/` — clases para representar entidades (ej. `Contact`, `Lead`, etc.).

#### 7. `api/`

* Rutas que pueden ser consumidas por servicios externos (webhooks, integraciones).
* Deben estar validadas y separadas del frontend.

---

### ⚙️ Buenas prácticas para futuras extensiones

* ✅ **Cada página nueva** (ej. `nosotros.php`) debe tener su propio archivo y cargar los componentes comunes desde `partials/layout/`.
* ✅ **Cada nueva sección** se debe guardar en `partials/sections/` y usarse mediante `include`.
* ✅ **Todas las rutas a imágenes, JS y CSS** deben generarse dinámicamente desde `IMG_PATH`, `JS_PATH`, `CSS_PATH` en `config.php`.

```php
<img src="<?= IMG_PATH ?>aloia.png" alt="Aloia">
<link rel="stylesheet" href="<?= CSS_PATH ?>main.css">
<script src="<?= JS_PATH ?>main.js"></script>
```

* ❌ **No duplicar código HTML** entre archivos.
* ✅ Modularizar todo lo repetible.
* ✅ Utilizar nombres descriptivos y en inglés para archivos (ej. `hero.php`, `footer.php`, etc.).

---

### 🧪 Entorno local

* Utiliza **XAMPP**, **MAMP** o cualquier servidor PHP local.
* Servir el proyecto desde la raíz pública:
  `http://localhost/aloia-refactor/public_html/`

---

### 🚀 Despliegue en producción

* Sube **solo el contenido de `public_html/`** como raíz web.
* Asegúrate de que `includes/`, `controllers/`, `models/`, y `api/` **no sean accesibles públicamente**.
* Actualiza rutas en `config.php` si tu servidor no parte desde la raíz (`/`).

---

¿Quieres que te genere este README en `.md` ya listo para que lo copies o subas?
