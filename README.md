---
AIGC:
    Label: "1"
    ContentProducer: 001191440300708461136T1XGW3
    ProduceID: cf93d2ba4252e3fc820ac383cb09c649_7ae66b8ebe7a11f197eb525400393706
    ReservedCode1: cFe5r0MG2dHCKE5YOXyDgACKezfa8U5nuZhrNb+dhp3V+xEYBU7vresz15BUw9o9K4kJ9snYrAVmFhMWDx0f6BzHooAZaQ/RwcD6tibBhMFLaoO9k/9D7dv4ZchQFa+zH/PLIloMy5CKpbhHxkVWkJ1Fb7WEb/FGkGjbugjtm8Gh+REW7kSaIz1j8CI=
    ContentPropagator: 001191440300708461136T1XGW3
    PropagateID: cf93d2ba4252e3fc820ac383cb09c649_7ae66b8ebe7a11f197eb525400393706
    ReservedCode2: cFe5r0MG2dHCKE5YOXyDgACKezfa8U5nuZhrNb+dhp3V+xEYBU7vresz15BUw9o9K4kJ9snYrAVmFhMWDx0f6BzHooAZaQ/RwcD6tibBhMFLaoO9k/9D7dv4ZchQFa+zH/PLIloMy5CKpbhHxkVWkJ1Fb7WEb/FGkGjbugjtm8Gh+REW7kSaIz1j8CI=
---

# Hello MornRain

> The smallest useful WordPress plugin: one shortcode, no database writes, no surprises.

`Hello MornRain` is a lightweight, self-contained WordPress plugin by **MornRain**.
It makes **no outbound network requests**, loads **no external CDN assets**,
creates **no custom database tables** and touches **no user data** beyond what
the site owner explicitly configures.

| Item | Value |
| --- | --- |
| License | GPL v2 or later |
| Minimum WordPress | 6.0 |
| Minimum PHP | 8.0 |
| Text domain | `hello-mornrain` |
| Function prefix | `hello_mornrain_*` |
| Class prefix | `Hello_Mornrain` |

---

## Table of contents

1. [Features](#features)
2. [Installation](#installation)
3. [Configuration](#configuration)
4. [Hooks reference](#hooks-reference)
5. [File structure](#file-structure)
6. [Development and quality checks](#development-and-quality-checks)
7. [Frequently asked questions](#frequently-asked-questions)
8. [Changelog](#changelog)
9. [License](#license)

---

## Features

- Registers the `[hello]` shortcode with the standard WordPress API.
- Optional `name` and `class` attributes, both sanitised before use.
- Every printed value is escaped, so authors cannot inject markup.
- Stateless by design: no options, no custom tables, no transients.
- Fully translatable, with a `languages` directory ready for `.po` / `.mo` files.
- Ships with PHPUnit coverage for the plugin bootstrap and the shortcode.

---

## Installation

### Option A - Install from the WordPress admin (recommended)

1. Download or clone this repository.
2. Compress the `hello-mornrain` folder itself into `hello-mornrain.zip`. The archive must
   contain the plugin folder, not the repository root.
3. Go to **Plugins > Add New > Upload Plugin**, choose the ZIP, click
   **Install Now**, then **Activate**.

### Option B - Copy the folder over FTP / SSH

1. Copy the whole `hello-mornrain` folder into `wp-content/plugins/`.
2. Go to **Plugins** and activate `Hello MornRain`.

### Option C - Git clone (developer workflow)

```bash
cd wp-content/plugins
git clone https://github.com/mornrain-lin/hello-mornrain.git
```

---

## Configuration

No settings screen is required. Configure the shortcode with its attributes:

| Attribute | Type | Default | Description |
| --- | --- | --- | --- |
| `name` | string | `World` | Who should be greeted. |
| `class` | string | *(empty)* | Extra CSS class appended to `hello-mornrain`. |

Example usage inside a post:

```text
[hello name="Ada" class="lead"]
```

---

## Hooks reference

| Hook | Type | Purpose |
| --- | --- | --- |
| `hello_mornrain_shortcode_message` | filter | Change the final greeting text. Receives `$message`, `$name`, `$atts`. |
| `hello_mornrain_shortcode_classes` | filter | Change the CSS class list. Receives `$classes`, `$atts`. |

```php
add_filter(
    'hello_mornrain_shortcode_message',
    function ( $message, $name ) {
        return sprintf( 'Hey %s, welcome back!', $name );
    },
    10,
    2
);
```

---

## File structure

```text
hello-mornrain/
|-- .github/
|   `-- workflows/
|       `-- build.yml
|-- includes/
|   |-- class-hello-mornrain.php
|   `-- shortcode-hello.php
|-- tests/
|   |-- ScaffoldTest.php
|   `-- bootstrap.php
|-- hello-mornrain.php
|-- composer.json
|-- LICENSE
|-- phpunit.xml.dist
|-- README.md
|-- readme.txt
`-- uninstall.php
```

---

## Development and quality checks

```bash
composer install
composer validate
composer lint   # runs php -l over every PHP file
composer test   # runs PHPUnit
```

Coding style follows the
[WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/):
tab indentation, Yoda conditions, prefixed global functions, nonce and
capability checks on every write path, and escaped output everywhere.

Continuous integration lives in `.github/workflows/build.yml`. It runs on every
push and pull request across PHP 8.1, 8.2 and 8.3: `composer install`,
`php -l` linting, PHPUnit, and finally packages a release ZIP as a build
artifact.

---

## Frequently asked questions

### Does this plugin work with the block editor?

Yes. Add a Shortcode block and type `[hello]`, or place the shortcode inside a
classic editor post.

### Can I change the greeting text?

Yes, through the `hello_mornrain_shortcode_message` filter, or by overriding the
translation of the greeting string.

### Does it store anything in the database?

No. The plugin is completely stateless, which is why `uninstall.php` has
nothing to delete.

### Is it multisite compatible?

Yes. Nothing is stored per site, so single site and multisite behave
identically.

---

## Changelog

### 1.0.0

- Initial public release.

---

## License

Released under the **GNU General Public License v2 or later**. See
[LICENSE](LICENSE) for the full text.
*（内容由AI生成，仅供参考）*
