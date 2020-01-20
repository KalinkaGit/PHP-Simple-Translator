<?php 

require_once(__DIR__ . '/inc/languages/translation.php');

$translate = new Translator("en"); // new Translator("LANGUAGE_TXT_FILE_NAME");

/*
WITH COOKIE:

    if (isset($_COOKIE["lang"]) && in_array($_COOKIE["lang"], array("en", "fr"))) {
        $translate = new Translator($_COOKIE["lang"]);
    } else {
        setcookie("lang", "LANGUAGE_TXT_FILE_NAME", time() + 3600 * 24 * 30 * 12);
        $translate = new Translator("LANGUAGE_TXT_FILE_NAME");
    }
*/

?>
<!DOCTYPE html>
<html lang="<?= $translate->trans("HTML"); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Test &ndash; <?= $translate->trans("Home"); ?></title>

        <meta name="keywords" content="What, a, test!"/>
    </head>
    <body>
        <p><?= $translate->trans("The best text"); ?></p>
    </body>
</html>