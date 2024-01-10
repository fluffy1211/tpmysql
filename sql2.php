<?php

$connexion = new mysqli('localhost:3306', 'root', 'root', 'php_shop')

$req = 'SELECT TOP 20
        FROM `villes_france_free`
        WHERE `ville_nom`';

$connexion->query($req);
