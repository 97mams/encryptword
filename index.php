<?php
require 'vendor/autoload.php';

$word = readline("entrez un mot");


if (!(int)$word) {
    $cryptword = new App\Controller\CryptController($word);
    echo $cryptword;
} else {
    echo "essayez avec une chaîne de caractère";
}
