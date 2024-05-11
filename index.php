<?php
require 'vendor/autoload.php';

$word = readline("entrez un mot : ");


if (!(int)$word) {
    $encryptword = new App\Controller\CryptController($word);
    echo $encryptword->getWordReversed();
} else {
    echo "essayez avec une chaîne de caractère";
}
