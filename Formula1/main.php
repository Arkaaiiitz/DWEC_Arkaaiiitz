<?php
    require_once "Monoplaza.php";
    require_once "FAcademy.php";
    require_once "F4.php";
    require_once "F3.php";
    require_once "F2.php";
    require_once "F1.php";

    $piloto1FAcademy = new FAcademy("Rolly", "Inglaterra", 8, "Ferrari", 4, 742);
    echo $piloto1FAcademy;
    $piloto2FAcademy = new FAcademy("Lewis", "Inglaterra", 44, "Mercedes", 7, 105);
    echo $piloto2FAcademy;
    $piloto3FAcademy = new FAcademy("Max", "Países Bajos", 1, "Red Bull", 3, 437);
    echo $piloto3FAcademy;

    $piloto1F4 = new F4("Charles", "Mónaco", 16, "Ferrari", 0, "Italia");
    echo $piloto1F4;
    $piloto2F4 = new F4("Lando", "Inglaterra", 4, "McLaren", 0, "Inglaterra");
    echo $piloto2F4;
    $piloto3F4 = new F4("Fernando", "España", 14, "Aston Martin", 2, "Roma");
    echo $piloto3F4;

    $piloto1F3 = new F3("Carlos", "España", 2, "Williams", 0, "Ferrari Driver Academy");
    echo $piloto1F3;
    $piloto2F3 = new F3("Oscar", "Australia", 7, "McLaren", 0, "Red Bull Junior Academy");
    echo $piloto2F3;
    $piloto3F3 = new F3("George", "Inglaterra", 17, "Mercedes", 0, "Mercedes Junior Team");
    echo $piloto3F3;

    $piloto1F2 = new F2("Pierre", "Francia", 10, "Alpine", 2, true);
    echo $piloto1F2;
    $piloto2F2 = new F2("Esteban", "Francia", 22, "Haas", 0, false);
    echo $piloto2F2;
    $piloto3F2 = new F2("Yuki", "Japón", 4, "Racing Bulls", 0, false);
    echo $piloto3F2;

    $piloto1F1 = new F1("Lance", "Canadá", 18, "Aston Martin", 0, "Petronas");
    echo $piloto1F1;
    $piloto2F1 = new F1("Alexander", "Tailandia", 10, "Williams", 0, "Oracle");
    echo $piloto2F1;
    $piloto3F1 = new F1("Nico", "Alemania", 4, "Sauber", 0, "Shell");
    echo $piloto3F1;

?>