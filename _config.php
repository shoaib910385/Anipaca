
<?php 
// === Database Connection ===
$servername = "localhost"; // from "Server: localhost:3306"
$username   = "animetoons_user";
$password   = "Stalker@123";
$database   = "animetoons_animetoons_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

$websiteTitle = "AnimeToons";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = "https://files.catbox.moe/bci5lu.png";
$contactEmail = "support@animetoons.site";

$version = "1.0.2";

$discord = "https://dcd.gg";
$github = "https://github.com";
$telegram = "https://t.me/thedrxnet";
$instagram = "https://www.instagram.com"; 

// all the api you need
$zpi = "https://idknsjsn.vercel.app/api"; //https://github.com/PacaHat/zen-api
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

//If you want faster loading speed just put // before the first proxy and remove slashes from this one 
//$proxy = "https://your-hosted-proxy.com/proxy?url="; //https://github.com/PacaHat/shrina-proxy


$banner = $websiteUrl . "/public/images/banner.png";

    
