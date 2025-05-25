<?php 

$conn = new mysqli("localhost", "user", "pass", "db_name"); //just like $conn = new mysqli("localhost", "root", "", "anipaca");


if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    echo("Database connection failed.");
}

$websiteTitle = "Anipaca";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "Anipaca@gmail.com";

$version = "1.0.2";

$discord = "https://dcd.gg/Anipaca";
$github = "https://github.com/Anipaca";
$telegram = "https://t.me/Anipaca";
$instagram = "https://www.instagram.com/Anipaca"; 

// all the api you need
$zpi = "https://zen-api.vercel.app/api"; //https://github.com/PacaHat/zen-api
//$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

//If you want faster loading speed just put // before the first proxy and remove slashes from this one 
$proxy = "https://proxy.vercel.app/proxy?url="; //https://github.com/PacaHat/shrina-proxy


$banner = $websiteUrl . "/public/images/banner.png";

    
