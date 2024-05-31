<?php
// Параметры для подключения
$db_host = "localhost"; 
$db_base = 'art_galleries'; // имя БД
$db_user = "root"; // логин БД
$db_password = ""; // пароль БД

// Подключение к базе данных
try {
    $connection = new PDO("mysql:host=$db_host; dbname=$db_base", $db_user, $db_password);
} catch (PDOException $e) {
    echo "Подключение не установлено!" ;
}
$connection->exec("set names utf8");

// Получение данных из всех галерей
$tretyakovGallery = $connection->query('SELECT * FROM tretyakovgallery')->fetchAll(PDO::FETCH_ASSOC);
$uffiziGallery = $connection->query('SELECT * FROM galleriadegliuffizi')->fetchAll(PDO::FETCH_ASSOC);
$hermitageMuseum = $connection->query('SELECT * FROM thehermitagemuseum')->fetchAll(PDO::FETCH_ASSOC);
$oldMastersGallery = $connection->query('SELECT * FROM oldmastersgallery')->fetchAll(PDO::FETCH_ASSOC);

$galleries = [
    ["name" => "Tretyakov Gallery", "file" => "images/TretyakovGallery.png", "data" => $tretyakovGallery, "link" => "TretyakovGallery.php", "class" => "gal1"],
    ["name" => "Galleria degli Uffizi", "file" => "images/GalleriadegliUffizi.png", "data" => $uffiziGallery, "link" => "GalleriadegliUffizi.php", "class" => "gal2"],
    ["name" => "The Hermitage Museum", "file" => "images/TheHermitageMuseuminStPetersburg.png", "data" => $hermitageMuseum, "link" => "TheHermitageMuseuminStPetersburg.php", "class" => "gal3"],
    ["name" => "Old Masters Gallery", "file" => "images/OldMastersGallery.png", "data" => $oldMastersGallery, "link" => "OldMastersGallery.php", "class" => "gal4"],
];

?>