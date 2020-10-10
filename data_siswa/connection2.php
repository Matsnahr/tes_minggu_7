<?php

try {
    $dbt = new PDO("mysql:host=localhost;dbname=tes_7","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);

}catch (Exception $error) {
    echo $error->getMessage();
}

$Tim=$dbt->query("select * from tim");

$nama_tim=$Tim->fetchAll();