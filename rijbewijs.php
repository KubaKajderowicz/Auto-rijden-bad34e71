<?php

$legalage = 16.5;
echo "Hoe oud ben je? \n";

$age = readline();

if ($age < $legalage) {
    echo "Helaas je mag nog niet beginnen met rijlessen...";
    die();
}

echo "Je mag beginnen met rijlessen!";

