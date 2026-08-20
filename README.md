# Proyecto PHP — Métodos GET y POST

## Descripción

Proyecto académico sencillo desarrollado en PHP para practicar el envío y recepción de datos utilizando los métodos HTTP `GET` y `POST`.

La página principal utiliza parámetros GET para seleccionar una sección y contiene un formulario de contacto que envía el nombre y el correo electrónico mediante POST a `contacto.php`.

## Tecnologías utilizadas

- PHP
- HTML5
- HTTP GET
- HTTP POST

## Archivos principales

```text
proyecto-php/
├── index.php
├── contacto.php
└── README.md
```

## Funcionalidades

- Navegación mediante parámetros GET.
- Lectura de `$_GET['seccion']`.
- Formulario de contacto.
- Envío de datos mediante POST.
- Lectura de `$_POST['nombre']` y `$_POST['correo']`.
- Página de respuesta con los datos recibidos.

## Requisitos

- PHP 7.4 o superior.

También se puede utilizar XAMPP, WAMP o MAMP.

## Instalación

```bash
git clone https://github.com/melmanchikito/proyecto-php.git
cd proyecto-php
```

## Ejecución

Con el servidor integrado de PHP:

```bash
php -S localhost:8000
```

Luego abre:

```text
http://localhost:8000
```

## Ejemplos de uso

### GET

Al seleccionar una opción del menú, la URL puede verse así:

```text
http://localhost:8000/index.php?seccion=Inicio
```

PHP obtiene el valor mediante:

```php
$_GET['seccion']
```

### POST

El formulario envía `nombre` y `correo` a:

```text
contacto.php
```

mediante el método POST.

## Nota de seguridad

En una aplicación real, los valores recibidos desde `$_GET` y `$_POST` deben validarse y escaparse antes de insertarlos en HTML para evitar problemas como XSS.

## Capturas de pantalla

Puedes agregar capturas en `docs/` y referenciarlas desde el README.

## Contribuciones

Proyecto académico individual. Se aceptan mejoras mediante pull requests.

## Autor

Germán Machado — [GitHub](https://github.com/melmanchikito)
