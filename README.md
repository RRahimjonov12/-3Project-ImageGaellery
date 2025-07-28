# 📷 PHP Image Gallery

A simple and clean **PHP-powered image gallery** web application that dynamically displays images with titles and descriptions. Perfect for photographers, travelers, or anyone who wants to showcase a collection visually.

---

## ✨ Features

- ✅ Dynamic image listing using PHP arrays
- 🖼️ Individual image pages with detailed descriptions
- 📂 Organized folder structure (`images/`, `views/`, `inc/`, `styles/`)
- 💅 Custom and simple CSS styling
- 🔗 URL-based image access using GET parameters

---

## 📁 Project Structure

```text
.
├── gallery.php               # Main gallery listing page
├── image.php                # Image detail page
├── images/                  # Stored image files
├── inc/                     # PHP includes (functions and data)
├── styles/                  # CSS files
└── views/                   # Header and footer layout
---

## 🧠 PHP Functions & Concepts You Learned

This project helped me practice and understand the following PHP concepts:

### 📌 PHP Built-in Functions
| Function / Concept      | Description |
|-------------------------|-------------|
| `include()` / `include_once()` | Include external PHP files (for modular code like `header.php`, `footer.php`, and `functions`) |
| `$_GET`                 | Get values from the URL query string (like `filename=...`) |
| `http_build_query()`    | Builds a URL-encoded query string from an associative array |
| `rawurlencode()`        | Encodes filenames for safe use in image URLs |
| `empty()`               | Checks if a variable is empty |
| `echo`                  | Prints output to HTML |
| `foreach()`             | Loops over associative arrays (used in gallery) |

### 🔐 Custom Helper Functions
| Function | Description |
|---------|-------------|
| `e($value)` | A custom function (defined in `functions.inc.php`) to escape HTML using `htmlspecialchars()` for security |

```php
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
