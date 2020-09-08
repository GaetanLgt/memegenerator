<?php

function bddconnect()
{
    try {
        return new PDO('mysql:host=localhost;dbname=memegenerator', 'root');
    } catch (PDOException $e) {
        echo 'echec de la connexion : '.$e->getMessage();
        die();
    }
}