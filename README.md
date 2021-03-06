# PHP Simple Translator [![Tweet](https://img.shields.io/twitter/url/http/shields.io.svg?style=social)](https://twitter.com/intent/tweet?text=Free%20simple%20website%20translator%20on%20GitHub%20(PHP)!%20&url=https://github.com/KalinkaGit/PHP-Simple-Translator&via=github&hashtags=GitHub,developers,PHP)
![GitHub All Releases](https://img.shields.io/github/downloads/Kalinkagit/PHP-Simple-Translator/total) ![GitHub issues](https://img.shields.io/github/issues/Kalinkagit/PHP-Simple-Translator)
<br/>PHP Simple Translator is a very simple PHP code to translate your website. (this is my first OOP project, thank you for being kind :p)

## Installation

> Requirement : PHP 5.6+

Just move all files and folders in `src` to your `includes` folder as in `example`.<br/>
Add your languages in `lang` folder, follow the `example_lang.txt`.

## Examples
### Basics
You just need to put these lines in your php files:
```php
<?php
    require_once(__DIR__ . "/path/to/translation.php");

    $translate = new Translator("YOUR_LANGUAGE"); // For example: en (like en.txt).
?>
```
You can use a cookie or a DB to retrieve the language of the user, like this:

```php
<?php 
    require_once(__DIR__ . '/path/to/translation.php');

    if (isset($_COOKIE["lang"]) && in_array($_COOKIE["lang"], array("YOUR_LANGUAGE1", "YOUR_LANGUAGE2"))) { // Check if the cookie exist and if the lang of the cookie exist too.
        $translate = new Translator($_COOKIE["lang"]);
    } else { // Doesn't exist or not valid.
        setcookie("lang", "en", time() + 3600 * 24 * 30 * 12); // create the cookie.
        $translate = new Translator("YOUR_LANGUAGE");
    }
?>
```
> `en` & `fr` are the names of the TXT files in `lang` folder.

To translate something you just need to use an echo function like this :
```php
<?= $translate->trans("Home"); ?>
```
## License
PHP-Simple-Translator is licensed under the MIT License.

## Contributing
An issue ? Let us know !
