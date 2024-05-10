<?php
$password = readline("entrez votre mot de passe : ");
$word = str_split($password);
$stringTab = str_split('abcdefghijklmnopqrstuvwxyz');
function getKey(array $word, array $alph): array
{
    $tab = [];
    for ($i = 0; $i < count($word); $i++) {
        for ($y = 0; $y < count($alph); $y++) {
            if ($word[$i] === $alph[$y]) {
                $tab[] = $y;
            }
        }
    }

    return $tab;
}

function getRepalceWord(array $keyWord, $alp): string
{
    $alpReverse = array_reverse($alp);
    $wordReverse = [];
    for ($i = 0; $i < count($keyWord); $i++) {
        foreach ($alpReverse as $key => $value) {
            if ($keyWord[$i] === $key) {
                $wordReverse[] = $value;
            }
        }
    }
    return implode($wordReverse);
}

$key = getKey($word, $stringTab);
print_r($key);

echo getRepalceWord($key, $stringTab);
