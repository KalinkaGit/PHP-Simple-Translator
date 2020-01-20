<?php

class Translator {

    private $language;

    public function __construct($newLang) {
        $this->language = $newLang;
    }

    private function getFile() {
        return explode("\n", file_get_contents(__DIR__ . "\lang\\" . $this->language . ".txt"));
    }

    public function trans($str) {
        foreach ($this->getFile() as $line) {
            if ($str === explode('=', $line)[0]) {
                return explode('=', $line)[1];
            }
        }
    }

}

?>