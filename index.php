<?php
    require_once 'Person.php';

    $userName = new Person("M'Bappé", "Kylian", "Paris", "30-12-1998");

    echo $userName -> identity();
    echo '<br>';
    echo $userName -> age() . ' ans';
?>