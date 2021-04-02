<?php
// BY BRoK - @X_BRK - @i_BRK //
flush();

ob_start();

set_time_limit(0);

error_reporting(0);

ob_implicit_flush(1);

date_default_timezone_set('Asia/Damascus');

$get_toke = file_get_contents('info.php');

$get_token = explode("\n", $get_toke);

$url_info = file_get_contents("https://api.telegram.org/bot$get_token[0]/getMe");

$json_info = json_decode($url_info);

$user = $json_info->result->username;

$bot_id = $json_info->result->id;

$admin = $get_token[1];

$brokbot = "@SS0OOS";

$API_KEY = $get_token[0];

define('API_KEY',$API_KEY);

function bot($method,$datas=[]){$x_BRK = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$x_BRK";
$x_BRKjson = file_get_contents($url); return json_decode($x_BRKjson);}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$i_BRK = $admin; 
$x_BRK = file_get_contents("x_BRK.txt");
$x_BRK0 = file_get_contents("x_BRK0.txt");
$x_BRK1= file_get_contents("x_BRK1.txt");
$x_BRK5 = file_get_contents("x_BRK2.txt");
$x_BRK6 = file_get_contents("x_BRK3.txt");
$x_BRK20 = json_decode(file_get_contents('php://input'));
$x_BRK18 = $update->message;
$chat_id = $x_BRK18->chat->id;
$text = $x_BRK18->text;
$data = $x_BRK20->callback_query->data;
$x_BRK12 = $x_BRK20->callback_query->message->chat->id;
$x_BRK14 =  $x_BRK20->callback_query->message->message_id;
$x_BRK15 = $x_BRK18->from->first_name;
$x_BRK16 = $x_BRK18->from->username;
$x_BRK11 = $x_BRK18->from->id;
$x_BRK2 = explode("\n",file_get_contents("x_BRK4.txt"));
$x_BRK3 = count($x_BRK2)-1;
if ($x_BRK18 && !in_array($x_BRK11, $x_BRK2)) {
    file_put_contents("x_BRK4.txt", $x_BRK11."\n",FILE_APPEND);
  }
$x_BRK9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$x_BRK0&user_id=".$x_BRK11);
$x_BRK10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$x_BRK1&user_id=".$x_BRK11);
if($x_BRK18 && (strpos($x_BRK9,'"status":"left"') or strpos($x_BRK9,'"Bad Request: USER_ID_INVALID"') or strpos($x_BRK9,'"status":"kicked"') or strpos($x_BRK10,'"status":"left"') or strpos($x_BRK10,'"Bad Request: USER_ID_INVALID"') or strpos($x_BRK10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- عذرا عزيزي يجب عليك الاشتراك في قناة البوت اولا

$x_BRK0
$x_BRK1",
]);return false;}
if($text == "/start" and $x_BRK11 == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- اهلا بك في قائمة اوامر الادمن',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- قناة الاشتراك الاجباري الاولى' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"x_BRK0"],['text'=>'- حذف قناة' ,'callback_data'=>"x_BRK1"]],
[['text'=>'قناة الاشتراك الاجباري الثانيه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"x_BRK2"],['text'=>'- حذف قناة' ,'callback_data'=>"x_BRK3"]],
[['text'=>'- - عرض قنوات الاشتراك الاجباري' ,'callback_data'=>"x_BRK4"]],
[['text'=>'- قائمة الاذاعه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- اذاعه بلتوجيه' ,'callback_data'=>"x_BRK5"],['text'=>'- اذاعة نص' ,'callback_data'=>"x_BRK6"]],
[['text'=>'- عدد المشتركين' ,'callback_data'=>"x_BRK7"]],
[['text'=>'- التواصل' ,'callback_data'=>"x_BRK"]],
[['text'=>'- تفعيل التواصل' ,'callback_data'=>"x_BRK11"],['text'=>'- تعطيل التواصل' ,'callback_data'=>"x_BRK12"]],
   ] 
   ])
]);
}
if($data == "x_BRK" ){
bot('EditMessageText',[
'chat_id'=>$x_BRK12,
'message_id'=>$x_BRK14,
"text"=>'- اهلا بك في قائمة اوامر الادمن',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- قناة الاشتراك الاجباري الاولى' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"x_BRK0"],['text'=>'- حذف قناة' ,'callback_data'=>"x_BRK1"]],
[['text'=>'قناة الاشتراك الاجباري الثانيه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"x_BRK2"],['text'=>'- حذف قناة' ,'callback_data'=>"x_BRK3"]],
[['text'=>'- - عرض قنوات الاشتراك الاجباري' ,'callback_data'=>"x_BRK4"]],
[['text'=>'- قائمة الاذاعه' ,'callback_data'=>"x_BRK"]],
[['text'=>'- اذاعه بلتوجيه' ,'callback_data'=>"x_BRK5"],['text'=>'- اذاعة نص' ,'callback_data'=>"x_BRK6"]],
[['text'=>'- عدد المشتركين' ,'callback_data'=>"x_BRK7"]],
[['text'=>'- التواصل' ,'callback_data'=>"x_BRK"]],
[['text'=>'- تفعيل التواصل' ,'callback_data'=>"x_BRK11"],['text'=>'- تعطيل التواصل' ,'callback_data'=>"x_BRK12"]],
   ] 
   ])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK0"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل معرف القناة الاولى',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK0");
}
if($text and $x_BRK == "x_BRK0" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم حفظ $text كقناة اولى للاشتراك الاجباري
- تأكد من رفع البوت ادمن بلقناة" ,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK0.txt","$text");
unlink("x_BRK.txt");
}
if($data == "x_BRK1"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم حذف القناة الاولى',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK0.txt");
}
if($data == "x_BRK2"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل معرف القناة الثانيه',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK1");
}
if($text and $x_BRK == "x_BRK1" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم حفظ $text كقناة ثانيه للاشتراك الاجباري
- تأكد من رفع البوت ادمن بلقناة" ,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK1.txt","$text");
unlink("x_BRK.txt");
}
if($data == "x_BRK3"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم حذف القناة الثانيه',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK1.txt");
}
if($data == "x_BRK4"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>"- هذه هي قائمة قنوات الاتشراك الاجباري
1 => $x_BRK0
- - - - - 
2 => $x_BRK1",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK5"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل الرساله ليتم توجيهها لجميع المشتركين',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK2");
}
if($x_BRK18 and $x_BRK == "x_BRK2" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم توجيه الرساله ل$x_BRK3 مشترك",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
for($i=0;$i<count($x_BRK2); $i++){
bot('forwardMessage', [
'chat_id'=>$x_BRK2[$i],
'from_chat_id'=>$x_BRK11,
'message_id'=>$x_BRK18->message_id
]);
unlink("x_BRK.txt");
}
}
if($data == "x_BRK6"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل النص الان ليتم نشره لجميع المشتركين',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK3");
}
if($text and $x_BRK == "x_BRK3" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم نشر رسالتك ل$x_BRK3 مشترك" ,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
for($i=0;$i<count($x_BRK2); $i++){
bot('sendMessage', [
'chat_id'=>$x_BRK2[$i],
'text'=>$text
]);
unlink("x_BRK.txt");
}
}
if($data == "x_BRK7"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>"- عدد مشتركين البوت $x_BRK3",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK11"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم تفعيل التواصل',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK3.txt","x_BRK");
}
if($x_BRK18 and $x_BRK6 == "x_BRK" and $x_BRK11 != $i_BRK){
bot('forwardMessage', [
'chat_id'=>$i_BRK,
'from_chat_id'=>$x_BRK11,
'message_id'=>$x_BRK18->message_id
]);
}
if($x_BRK18 and $x_BRK6 == "x_BRK" and $x_BRK11 == $i_BRK){
bot('sendMessage',[
'chat_id'=>$x_BRK18->reply_to_message->forward_from->id,
    'text'=>$text,
    ]);
}
if($data == "x_BRK12"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم تعطيل التواصل',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK3.txt");
}
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
- مرحباً عزيزي 𓃠
- في بوت الزخرفةه الحديث ، 𓆈
- يمكنك تصميم او زخرفةه اسمك بأحترافيةه  𓅷 
- تحكم في الازرار في الاسفل 𓃠
━━━━━━━━━━━━━━━━━━━━
𝑾𝒆𝒍𝒄𝒐𝒎𝒆 𝒕𝒐 𝒅𝒊𝒄𝒓𝒆𝒕𝒊𝒐𝒏 𝒃𝒐𝒕 𝒄𝒉𝒐𝒊𝒄𝒆 𝒇𝒓𝒐𝒎 𝒃𝒆𝒍𝒍𝒐𝒘 𓅰
- تم صنع هذا البوت من خلال : $brokbot
",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- زغرفة اسمك، 🦄!','callback_data'=>'ww']],
[['text'=>'- شهور السنه مرتبه، 🦄!','callback_data'=>'SS'],['text'=>'- اسماء قنوات ممطروقه، 🦄!','callback_data'=>'JN']],
[['text'=>'- اسماء تمبلر جاهزه، 🦄!','callback_data'=>'oh']],
[['text'=>'- اسماء ببجي جاهزه، 🦄!','callback_data'=>'hh'],['text'=>'- الرموز، 🦄!','callback_data'=>'vv']],
[['text'=>'- بايوات انستا مرتبه، 🦄!','callback_data'=>'xnx']],
],
])
]);
}
if($data == "start" ){
bot('sendmessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
- مرحباً عزيزي 𓃠
- في بوت الزخرفةه الحديث ، 𓆈
- يمكنك تصميم او زخرفةه اسمك بأحترافيةه  𓅷 
- تحكم في الازرار في الاسفل 𓃠
━━━━━━━━━━━━━━━━━━━━
𝑾𝒆𝒍𝒄𝒐𝒎𝒆 𝒕𝒐 𝒅𝒊𝒄𝒓𝒆𝒕𝒊𝒐𝒏 𝒃𝒐𝒕 𝒄𝒉𝒐𝒊𝒄𝒆 𝒇𝒓𝒐𝒎 𝒃𝒆𝒍𝒍𝒐𝒘 𓅰
- تم صنع هذا البوت من خلال : $brokbot
",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- زغرفة اسمك، 🦄!','callback_data'=>'ww']],
[['text'=>'- شهور السنه مرتبه، 🦄!','callback_data'=>'SS'],['text'=>'- اسماء قنوات ممطروقه، 🦄!','callback_data'=>'JN']],
[['text'=>'- اسماء تمبلر جاهزه، 🦄!','callback_data'=>'oh']],
[['text'=>'- اسماء ببجي جاهزه، 🦄!','callback_data'=>'hh'],['text'=>'- الرموز، 🦄!','callback_data'=>'vv']],
[['text'=>'- بايوات انستا مرتبه، 🦄!','callback_data'=>'xnx']],
],
])
]);
}
if($data == "hh"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
- زهـべـراءゞ

- ماكـゞـس᥊

- سـ々ـارهゞ

- جيـべـفاراヾ

- محاربـべـةةヾ

- حنوشـヾـةゞ

- قناصـヾـةべ

- بـ々ـوتヾ

头مصيبه头

头حليوه头

头جنازه头

头نفسيه头

头ريـان头

头وكـحه头

头طـفله头

头لـجين头

头بطاطه头

头سـاره头
﹎﹎﹎﹎﹎﹎﹎﹎﹎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"h1"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "h1"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
دشت杉سرو

بشت杉عسل

دشت杉نور

زنو杉خطر

ردح杉زين

ابي杉جلد

جلد杉لكل

نته杉كفو

لا杉تضحك

هـبـاش〆

طـــرب〆

ضيعتگگ〆

صـــاص〆

خــطر〆

سكلولو〆

يـونيو〆

رعـــب〆

صـعــب〆

بنسلين〆

حشـيـش〆

خــروف〆

كــفـن〆

شـامبو〆

حجيえفنش

شيخえفنش

نوكえفنش

يولえفنش
﹎﹎﹎﹎﹎﹎﹎﹎﹎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "SS"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
1- 𝒀𝒂𝒏𝒂𝒚𝒊𝒓 .✨💕
2- 𝑭𝒊𝒃𝒓𝒖𝒂𝒚𝒊𝒓.🍭💘
3- 𝑴𝒂𝒓𝒔.✨💕
4- 𝑨𝒃𝒓𝒊𝒍.🍭💘
5- 𝑴𝒂𝒚𝒘.✨💕
6- 𝒀𝒖𝒏𝒊𝒖.🍭💘
7- 𝒀𝒖𝒍𝒊𝒖.✨💕
8- 𝑨??𝒉𝒔𝒕𝒖𝒔.🍭💘
9- 𝑺𝒊??𝒕𝒂𝒎𝒃𝒂𝒓.✨💕
10- 𝑶𝒄𝒕𝒐𝒃𝒆𝒓.🍭💘
11- 𝑵𝒐𝒗𝒎𝒊𝒃𝒊𝒓.✨💕
12- 𝑫𝒊𝒔𝒂𝒎𝒃𝒊𝒓 .🍭💘',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "JN"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
〞𓄼𝐌𝐀𝐘𝐀𝐑༒ﻣـيـٵڕ𓄹〝

〞𓄼𝐊𝐀𝐃𝐈༒ڪـٵډي 𓄹〝

〞𓄼𝐀𝐘𝐀𝐑༒ٵيــٲڕ𓄹〝

〞𓄼𝐑𝐀𝐍𝐔𝐀༒ڕنــﯠﮫ𓄹〝

 〞𓄼𝐖𝐀𝐉𝐀𝐃༒ﯢﺟــډ𓄹〝

〞𓄼𝐊𝐀𝐑𝐌𝐀𝐍༒ڪـٵڔﻣـن𓄹〝
﹎﹎﹎﹎﹎﹎﹎﹎﹎
',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"D"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "D"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
:   ˹𝘾𝘼𝙍𝙊𝙇𝙄𝙉𝙀˼ 𓄧 .
:   ˹𝘾𝙍𝙔𝙎𝙏𝘼𝙇˼ 𓄧 .
:   ˹𝙇𝘼𝙐𝙍𝙀𝙉˼ 𓄧 .
:   ˹𝙆𝘼𝙈𝙄𝙇𝘼˼ 𓄧 .
:   ˹𝘿𝘼𝙉𝘼˼ 𓄧 .
:   ˹𝙍𝙄𝙏𝘼˼ 𓄧 .
: ...................
',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"D1"],['text'=>'السابق ♡︎','callback_data'=>"JN"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "D1"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
- هدو۽☾ .
- نازليہ ☾ .
- غنوۿہ ☾ .
- ڪيࢪّليہ ☾ .
- لـ ڪاࢪّلۄس ☾ .
.....................
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"D2"],['text'=>'السابق ♡︎','callback_data'=>"D"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "D2"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
˼‏تـٰالـينٰ𓃠 ˹
˼‏فرزدقـٰ𓃠 ˹
˼‏يٰـاقـوتْ𓃠 ˹
˼‏نـجـمۿ 𓃠 ˹
˼‏بْـلوتٰــو 𓃠 ˹
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"D3"],['text'=>'السابق ♡︎','callback_data'=>"D2"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "D3"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
〖ڪادي𖤍᭄〗 

〖ۿـيلدا𖤍᭄〗 

〖ٺـﯛنـيـآ𖤍᭄〗 

〖يـﯛلٱنـډ𖤍᭄〗 

〖ࢪّيـﻧـآډآ𖤍᭄〗
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"D4"],['text'=>'السابق ♡︎','callback_data'=>"D3"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "D4"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
⌯ ꙰ډآﻣــلٲٲ 💕  ||  𖣂 
⌯ ꙰ډيــلارآ 💕  ||  𖣂 
⌯ ꙰نـيلـﯛفڕ 💕 ||  𖣂 
⌯ ꙰نـٱڕفيـڼ 💕 ||  𖣂 
⌯ ꙰ﮪـــٱﺯآل 💕 ||  𖣂
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"D5"],['text'=>'السابق ♡︎','callback_data'=>"D3"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "D5"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
⊱# ﭴـۧﮫِـنـٰ̲ـمۧيهہۦ،⁞ 💕ء

⊱# ﻣـڲسـٰ̲يـڪيـﮫۦ، ⁞ ،🇲🇽ء

⊱# ـٱﭴـٰ̲ـنبـۧيـﮫۦ، ⁞ ،🇺🇸ء

⊱# بږطـٰ̲انـيـﮫۦ، ⁞ ،🇳🇿ء

⊱# ؏ـڕاﻗـٰ̲ـيـﮫۦ، ⁞ ،🇮🇶ء

⊱# سنـٰ̲ڣـۅږﮪۦ، ⁞ ،🐹ء
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'السابق ♡︎','callback_data'=>"D4"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "oh"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
٭ هٰلٖا֣و حـٓبي اختر ما تريد ! 💞↗️ ܰ.
- W𝒆𝒍𝒍 𝒔𝒆𝒏𝒅 𝒚𝒐𝒖𝒓 𝒏𝒂𝒎𝒆 𓇼 .
',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'اسماء تمبلر شباب 🦄💸،','callback_data'=>"qq"],['text'=>'اسماء بنات تمبلر 🦄💸،','callback_data'=>"zz"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
}
if($data == "qq"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
𓆩𝑵𝒂𝒛𝒂𝒓𓆪 🖤.
𓆩𝑴𝒐𝒉𝒂𝒎𝒆𝒅𓆪 🖤.
𓆩𝑲𝒂𝒓𝒂𝒓𓆪 🖤. 
𓆩𝑨𝒉𝒎𝒆𝒅𓆪 🖤.
𓆩𝑨𝒅𝒂𝒎𓆪 🖤.
𓆩𝑯𝒖𝒔𝒔𝒊𝒆𝒏𓆪 🖤.
𓆩𝑨𝒍𝒐𝒔𝒉𓆪 🖤.
𓆩𝑹𝒂𝒔𝒐𝒖𝒍𓆪 🖤.
𓆩𝑨𝒃𝒐𝒅𝒆𓆪 🖤.
𓆩𝑴𝒖𝒔𝒕𝒂𝒇𝒂𓆪 🖤.
𓆩𝑴𝒂𝒉𝒅𝒊𓆪 🖤.
𓆩𝑸𝒂𝒔𝒂𝒎𓆪 🖤.
𓆩𝑹𝒂𝒔𝒉𝒂𝒅𓆪 🖤.
𓆩𝑨𝒅𝒏𝒂𝒏𓆪 🖤.
𓆩𝑺𝒂𝒓𝒎𝒂𝒅𓆪 🖤.
𓆩𝑯𝒂𝒔𝒂𝒏𓆪 🖤.
𓆩𝒌𝒉𝒂𝒍𝒆𝒅𓆪 🖤.
𓆩𝑶𝒎𝒂𝒓𓆪 🖤.
𓆩𝑯𝒂𝒛𝒂𝒎𓆪 🖤.
𓆩𝑯𝒂𝒕𝒂𝒎𓆪 🖤.
𓆩𝑶𝒔𝒂𝒎𝒂𓆪 🖤.
𓆩𝑯𝒂𝒅𝒐𓆪 🖤.
𓆩𝑯𝒂𝒊𝒅𝒂𝒓𓆪 🖤.
𓆩𝑮𝒉𝒂𝒍𝒆𝒃𓆪 🖤.
𓆩𝑨𝒌𝒓𝒂𝒎𓆪 🖤.
𓆩𝑯𝒂𝒔𝒐𝒏𝒆𓆪 🖤.
𓆩𝑯𝒂𝒎𝒐𝒅𝒊𓆪 🖤.
𓆩𝒗𝒊𝒓𝒐𝒔𓆪 🖤.
𓆩𝑶𝒓𝒂𝒔𓆪 🖤.
𓆩𝑺𝒂𝒍𝒊𝒉𓆪 🖤.
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f1"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f1"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
-𓆪𝗔𝗠𝗔𝗔𝗥.𖤐𓆩
-𓆪𝗠𝗔𝗟𝗘𝗞.𖤐𓆩
-𓆪𝗔𝗬𝗔𝗗.𖤐𓆩
-𓆪𝗥𝗔𝗙𝗜𝗗.𖤐𓆩 
-𓆪𝗦𝗕𝗔𝗛.𖤐𓆩 
-𓆪𝗔𝗕𝗔𝗦.𖤐𓆩
-𓆪𝗛𝗔𝗕𝗜𝗕.𖤐𓆩
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f2"],['text'=>'السابق ♡︎','callback_data'=>"qq"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f2"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
• ﴾𝔸𝔹𝔸𝕊𝕊﴿ ✬
• ﴾𝕆𝕋ℍ𝕄𝔸ℕ﴿  ✬
• ﴾ℍ𝔸𝔻𝔼ℝ﴿ ✬
• ﴾𝕊𝕀𝕁𝔸𝔻﴿ ✬
• ﴾𝔸ℍ𝕄𝔼𝔻﴿ ✬
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f3"],['text'=>'السابق ♡︎','callback_data'=>"f1"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f3"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
⌯『𝐀𝐋𝐈』𖤍᭄𓄹
⌯『𝐋𝐁𝐍𝐀 』𖤍᭄𓄹
⌯『𝐀𝐒𝐄𝐄𝐋』𖤍᭄𓄹
⌯『𝐒𝐇𝐄𝐑𝐄𝐍』𖤍᭄𓄹
⌯『𝐌𝐔𝐒𝐓𝐀𝐅𝐀』𖤍᭄𓄹
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f4"],['text'=>'السابق ♡︎','callback_data'=>"f2"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f4"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
╰𝐇𝐬𝐨༆︎╮
╰𝐀𝐥𝐥𝐨༆︎╮
╰𝐀𝐛𝐨𝐝༆︎╮
╰𝐀𝐛𝐚𝐬༆︎╮
╰𝐇𝐚𝐦𝐨𝐝༆︎╮
╰𝐀𝐡𝐦𝐞𝐝༆︎╮
....................
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f5"],['text'=>'السابق ♡︎','callback_data'=>"f3"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f5"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
- 𓊆 𝘼𝙈𝙀𝙍 𓊇 𖤍‌
- 𓊆 𝘼𝙃𝙈𝙀𝘿 𓊇 𖤍‌
- 𓊆 𝙈𝙊𝙃𝘼𝙈𝙀𝘿 𓊇 𖤍‌
- 𓊆 𝙃𝙐𝙎𝙎𝙀𝙄𝙉 𓊇 𖤍‌
- 𓊆 𝙊𝙈𝘼𝙍 𓊇 𖤍‌
- 𓊆 𝘼𝙇𝙄 𓊇 𖤍‌
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f6"],['text'=>'السابق ♡︎','callback_data'=>"f4"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f6"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
- ❝ ⌊𝗗𝗔𝗡𝗡𝗬 𖨬 🇺🇸.
- ❝ ⌊𝗠𝗔𝗬𝗞𝗟 𖨬 🇺🇸.
- ❝ ⌊𝗘𝗩𝗔𝗡 𖨬 🇺🇸.
- ❝ ⌊𝗝𝗢𝗡𝗬𖨬 🇺🇸.
- ❝ ⌊𝗧𝗢𝗠 𖨬 🇺🇸.
........................
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f7"],['text'=>'السابق ♡︎','callback_data'=>"f5"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f7"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
“𝐌𝐎𝐇𝐀𝐌𝐄𝐃”༆
“𝐇𝐔𝐒𝐒𝐄𝐈𝐍”༆
“𝐀𝐊𝐈𝐋”༆
“𝐙𝐀𝐈𝐃”༆
- ........................
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f8"],['text'=>'السابق ♡︎','callback_data'=>"f6"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f8"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
⌯ ˹𝙆𝙖𝙧𝙖˼ ♕︎.
⌯ ˹𝙉𝙖𝙖𝙧˼ ♕︎.
⌯ ˹𝙂𝙢𝙧˼ ♕︎.
⌯ ˹𝘿𝙚𝙫˼ ♕︎.
⌯ ˹𝙀𝙫𝙖˼ ♕︎.
.................
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f9"],['text'=>'السابق ♡︎','callback_data'=>"f7"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f9"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
「𝘔𝘦𝘳𝘰 𐃣.
「𝘋𝘢𝘦𝘷 𐃣.
「𝘌𝘷𝘢 𐃣.
「𝘋𝘮𝘢𝘳 𐃣.
「𝘑𝘮𝘳𝘢 𐃣.
  ...............
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f10"],['text'=>'السابق ♡︎','callback_data'=>"f8"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f10"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
•〘 𝗔𝗛𝗠𝗘𝗗 𓅂 〙
•〘 𝗠𝗢𝗛𝗔𝗠𝗘𝗗 𓅂 〙
•〘 𝗦𝗔𝗝𝗔𝗗 𓅂 〙
•〘 𝗛𝗨𝗦𝗦𝗘𝗜𝗡 𓅂 〙
•〘 𝗦𝗔𝗜𝗙 𓅂 〙
•〘 𝗔𝗟𝗦𝗛 𓅂 〙
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f11"],['text'=>'السابق ♡︎','callback_data'=>"f9"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f11"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
𓂄‌‌‌𝐀𝐥𝐢 #𝟏 ‌‏𓂁
𓂄‌‌‌𝐒𝐚𝐢𝐟 #𝟏 ‌‏𓂁
𓂄‌‌‌𝐒𝐚𝐥𝐚𝐦 #𝟏 ‌‏𓂁
𓂄‌‌‌𝐒𝐝𝐚𝐚𝐦 #𝟏 ‌‏𓂁
𓂄‌‌‌𝐀𝐡𝐦𝐞𝐝 #𝟏 ‌‏𓂁
𓂄‌‌‌𝐇𝐮𝐬𝐬𝐞𝐢𝐧 #𝟏 ‌‏𓂁
𓂄‌‌‌𝐌𝐨𝐡𝐚𝐦𝐞𝐝 #𝟏 ‌‏𓂁
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f12"],['text'=>'السابق ♡︎','callback_data'=>"f10"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f12"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
- 𝙼𝙾𝙷𝙰𝙼𝙼𝙴𝙳🇮🇶➢
- 𝙷𝚄𝚂𝚂𝙴𝙸𝙽🇮🇶➢
- 𝙰𝙷𝙼𝙴𝙳🇮🇶➢
- 𝚂𝙰𝙻𝙰𝙼🇮🇶➢
- 𝙰𝙼𝙴𝚁🇮🇶➢
- 𝚂𝙰𝙼𝚁🇮🇶➢
- 𝙰𝙱𝙾𝙳🇮🇶➢
- 𝙰𝙻𝙸🇮🇶➢
..................
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي ♡︎','callback_data'=>"f13"],['text'=>'السابق ♡︎','callback_data'=>"f11"]],
[['text'=>'رجوع ♡︎','callback_data'=>"back"]],
]])
]);
} 
if($data == "f13"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
𓆩𝚁𝙾𝙽𝙴𓆪  🇺🇸.
 𓆩𝙴𝚅𝙰𝙽𓆪  🇺🇸.
 𓆩𝙹𝙰𝙺𓆪  🇺🇸.
 𓆩𝚃𝙾𝙼𓆪  🇺🇸.
 𓆩𝙹𝙾𝙽𓆪  🇺🇸.
_________
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"f14"],['text'=>'السابق ♡︎','callback_data'=>"f12"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "f14"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
𓆩𝙰𝙷𝙼𝙸𝙳𓆪🎗️ ꙰
𓆩𝙰𝙻𝙾𝚂𝙷𓆪🎗️ ꙰
𓆩𝚂𝙰𝙹𝙰𝙳𓆪🎗️ ꙰
𓆩𝚂𝙱𝙰𝙰𝙷𓆪🎗️ ꙰
𓆩𝙷𝙰𝙸𝚃𝙷𝙼𓆪🎗️ ꙰
𓆩𝙷𝚄𝚂𝚂𝙴𝙸𝙽𓆪🎗️ ꙰
𓆩𝙼𝚄𝙷𝙰𝙼𝙼𝙰𝙳𓆪🎗️ ꙰ 
_________
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>' السابق 🦄💸','callback_data'=>"f13"]],
[['text'=>' رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "zz"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
𓆩𝑻𝒂𝑩𝒐𓆪 💞.
𓆩𝑺𝒂𝒇𝒐𓆪 💞.
𓆩𝑻𝒐𝒎𝒂𓆪 💞.
𓆩𝒁𝒂𝒉𝒐𓆪 💞.
𓆩𝑲𝒂𝒎𝒂𝒓𓆪 💞.
𓆩𝑮𝒉𝒂𝒔𝒔𝒂𝒒𓆪 💞.
𓆩𝑭𝒂𝒕𝒎𝒊𝒂𓆪 💞.
𓆩𝑯𝒂𝒅𝒐𓆪 💞.
𓆩𝑯𝒂𝒃𝒐𓆪 💞.
𓆩𝑩𝒂𝒏𝒐𓆪 💞.
𓆩𝑫𝒖𝒉𝒐𓆪 💞.
𓆩𝑱𝒂𝒏𝒐𓆪 💞.
𓆩𝑹𝒆𝒎𝒆𓆪💞.
𓆩𝑯𝒂𝒋𝒂𝒓𓆪 💞.
𓆩𝑨𝒚𝒂𓆪 💞.
𓆩𝑺𝒉𝒂𝒉𝒂𝒅𓆪 💞.
𓆩𝑹𝒂𝒈𝒉𝒂𝒅𓆪 💞.
𓆩𝒁𝒂𝒊𝒏𝒂𝒃𓆪 💞.
𓆩𝑨𝒚𝒂𝒕𓆪 💞.
𓆩𝑴𝒂𝒓𝒊𝒆𝒎𓆪 💞.
𓆩𝑯𝒂𝒘𝒓𝒂𝒂𓆪 💞.
𓆩𝑭𝒂𝒕𝒆𓆪 💞.
𓆩𝑫𝒂𝒏𝒐𓆪 💞.
𓆩𝑮𝒉𝒂𝒅𝒂𓆪 💞.
𓆩𝒁𝒂𝒊𝒏𝒂𓆪 💞.
𓆩𝑹𝒖𝒂𝒚𝒅𝒂𓆪 💞.𓆩
𝑩𝒂𝒏𝒆𝒆𝒏𓆪 💞.
𓆩𝑴𝒆𝒎𝒆𓆪 💞.
𓆩𝑵𝒂𝒃𝒂𓆪 💞.
𓆩𝑵𝒂𝒅𝒂𓆪 💞.
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z1"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z1"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
𓄼 𝘚 𝘖 𝘚 ༆ 𓄹.
𓄼 𝘛 𝘖 𝘛 ༆ 𓄹.
𓄼 𝘕 𝘖 𝘕 ༆ 𓄹.
𓄼 𝘍 𝘖 𝘍 ༆ 𓄹.
𓄼 𝘑 𝘖 𝘑  ༆ 𓄹.
𓄼 𝘒 𝘖 𝘒 ༆ 𓄹.
𓄼 𝘛 𝘕 𝘖 ༆ 𓄹.
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z2"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"zz"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z2"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
•˹𝙻𝚈𝙽𝙽˼⛈💞.
•˹𝙽𝙾𝙾𝚁˼⛈💞.
•˹𝚂𝙰𝙼𝙰𝚁˼⛈💞.
•˹𝙽𝙾𝚁𝙷𝙰𝙽˼⛈💞.
•˹𝙺𝙰𝚆𝚃𝙷𝙴𝚁˼⛈💞.
   •˹𝚃𝙰𝙱𝙰𝚁𝙰𝚀˼⛈💞.
     •˹𝚂𝙰𝙱𝚁𝙴𝙴𝙽˼⛈💞
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z3"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z1"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z3"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
•𝙼𝙰𝚁𝚈𝙰𝙼⋆  🧚🏻‍♀♥️ .

•𝙱𝙰𝚃𝙾𝙻⋆ 🧚🏻‍♀♥️ .

•𝙰𝙼𝙾𝙽⋆  🧚🏻‍♀♥️ .

•𝚉𝙰𝙽𝙾𝚂𝙷𝙰⋆ 🧚🏻‍♀♥️ .

•𝚉𝙰𝙷𝚁𝙰𝙰⋆  🧚🏻‍♀♥️ .

•𝙱𝙰𝙽𝙴𝙽⋆ 🧚🏻‍♀♥️ .
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z4"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z2"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z4"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
⌯ ˹ʀɴᴏѕʜ˼❀ .

⌯ ˹ᴍᴇᴍᴏ˼❀ .

⌯ ˹ʜᴏʀᴇ˼ ❀ .

⌯ ˹ѕᴀʀᴀ˼ ❀ .

⌯ ˹ѕᴏѕ˼  ❀ .
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z5"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z3"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z5"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
• 【тαвαяκ】✭
• 【sнɪмα】✭
• 【иαвα】✭
• 【ᴊαииατ】✭
• 【єαsмєи】✭
• 【fєτємα】✭
• 【ĸαωτнαя】✭
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z6"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z4"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z6"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
『𓆩 𝚃𝙱𝙾 𓆪』𐂂𓄹
『𓆩 𝙷𝙽𝙾 𓆪』 𐂂𓄹
『𓆩 𝙰𝙽𝙾 𓆪』𐂂𓄹
『𓆩 𝙰𝚉𝙾 𓆪』𐂂𓄹
『𓆩 𝙳𝙷𝙾 𓆪』𐂂𓄹
『𓆩 𝙰𝚂𝙾 𓆪』𐂂𓄹
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z7"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z5"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z7"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
𓄼ʳᵃⁿᵉᵃ.
‹ 𓄼ʰᵒʳ.
‹ 𓄼ⁿⁿᵒ.
‹  𓄼ˢᵃʳᵃ.
‹  𓄼ˢᵉʰᵃᵐ.
‹  𓄼ʰᵃᵈᵉʳ.
‹ 𓄼ᵐⁿᵃʳ.
‹  𓄼ᵃʳᵒᵃ.
‹  𓄼ᵐᵃˡⁱᵈ.
‹ 𓄼ⁿⁿˢʰ.
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z8"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z6"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z8"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
𝄇 𝗦𝗢𝗦𝗢𝆹𝅥𝅮 𝄆💘
𝄇 𝗡𝗢𝗡𝗔𝆹𝅥𝅮 𝄆💘
𝄇 𝗝𝗢𝗝𝗔 𝆹𝅥𝅮  𝄆💘
𝄇 𝗠𝗘𝗠𝗔𝆹𝅥𝅮𝄆💘
𝄇 𝗞𝗢𝗞𝗔𝆹𝅥𝅮 𝄆💘
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z9"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z7"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z9"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
- ʰᵈᵒ ،💒💕

- ᶬᵉᶬ ،💒💕

- ᴬᵞᴬ ،💒💕

- ᴬˢᵒ ،💒💕

- ᶠᵒˢ ،💒💕

- ˢᵉᶮ ،💒💕
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z10"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z8"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z10"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
• мαяɪαм🚴🏽‍♀️💞..
 • zαyиαв🚴🏽‍♀️💞..
  • sαяαн🚴🏽‍♀️💞..
   • zαняα🚴🏽‍♀️💞..
    • sнαɪмαα🚴🏽‍♀️💞.
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z11"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z9"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z11"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
ᯓ 𝙄𝙏𝙎 - 𝗔 𝗦 𝗢 𓍰 .💕
ᯓ 𝙄𝙏𝙎 - 𝗧 𝗕 𝗢 𓍰 .💕
ᯓ 𝙄𝙏𝙎 - 𝗔 𝗡 𝗢 𓍰 .💕
ᯓ 𝙄𝙏𝙎 - 𝗕 𝗡 𝗢 𓍰 .💕
ᯓ 𝙄𝙏𝙎 - 𝗥 𝗡 𝗢 𓍰 .💕
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z12"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z10"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z12"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
˹ᴀɴᴏᴏ˼ ❀ ꙰ .”

 ˹ᴛɴᴏᴏ˼❀ ꙰ .”

 ˹ᴛʙᴏᴏ˼❀ ꙰ .”

 ˹ᴊɴᴏᴏ˼❀ ꙰ .”

 ˹ʜᴅᴏᴏ˼❀ ꙰ .”
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z13"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z11"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z13"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
⌯ ˢʰᵃʰᵃᵈ . 
⌯ ᵃᵉʳⁿᵃʳᵈ . 
⌯ ˢᵃᵈᵉᵍ . 
⌯ ʰⁱⁿᵒᵒ . 
⌯ ⁿᵒᵒʳ . 
⌯ ᵃˡᵃᵃ . 
⌯ ᵃʰᵐᵉᵈ . 
⌯ ᵃʷˢ .
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z14"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z12"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z14"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
⌯ 𝗧𝗢𝗧𝗔 𓋜𐂂، 

⌯ 𝗭𝗢𝗞𝗔𓋜𐂂،

⌯ 𝗟𝗜𝗡𝗔 𓋜𐂂،

⌯ 𝗛𝗔𝗡𝗔 𓋜𐂂،

⌯ 𝗭𝗢𝗭𝗔 𓋜𐂂،
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z15"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z13"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z15"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
⌯˹𝙼𝙰𝚁𝚈𝙰𝙼˼ ⸙.
⌯˹𝚃𝙰𝙱𝙰𝚁𝙺˼ ⸙.
⌯˹𝚉𝙰𝚈𝙽𝙰𝙱˼ ⸙.
⌯˹𝚉𝙰𝙷𝚁𝙰˼ ⸙.
⌯˹𝚁𝙴𝙰𝙼˼ ⸙.
⌯˹𝙳𝙾𝙷𝙰˼ ⸙.
⌯˹𝚂𝙰𝙹𝙰˼ ⸙.
⌯˹𝙰𝚂𝙴𝙻˼ ⸙.
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z16"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z14"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z16"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
- 𝑎𝑠𝑜 𐇲.
- 𝑎𝑛𝑜 𐇲.
- 𝑡𝑏𝑜 𐇲.
- 𝑡𝑛𝑜 𐇲.
- 𝒛𝒉𝒐 𐇲.
- 𝒛𝒏𝒐 𐇲.
- 𝒉𝒅𝒐 𐇲.
- 𝒉𝒃𝒐 𐇲
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z17"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z15"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z17"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
𖥻 𓆩𝙍𝙚𝙚𝙢𓆪،𖤍
𖥻 𓆩𝙕𝙖𝙮𝙣𝙖𝙗𓆪،𖤍
𖥻 𓆩𝙁𝙖𝙩𝙚𝙢𝙖𓆪،𖤍
𖥻 𓆩𝙍𝙖𝙤𝙖𝙣𓆪،𖤍
𖥻 𓆩𝙅𝙖𝙣𝙖𝙩𓆪،𖤍
𖥻 𓆩𝙕𝙖𝙝𝙧𝙖𓆪،𖤍
𖥻 𓆩𝙉𝙤𝙨𝙖𓆪،𖤍
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z18"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z16"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z18"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
- 𝙎 𝘼 𝙉 𝘿 𝙍 𝙄 𝙇 𝘼 : 🇺🇸Ꮠ
- 𝙍 𝘽 𝘼 𝙉 𝙕 𝙇 : 🇺🇸Ꮠ
- 𝙉 𝘼 𝙍 𝙏 𝙊 : 🇺🇸Ꮠ
- 𝙎 𝘼 𝙇 𝙇 𝙔 : 🇺🇸Ꮠ
- 𝙅 𝙀 𝙍 𝙔 : 🇺🇸Ꮠ
- 𝙏 𝙊 𝙈 : 🇺🇸Ꮠ
- 𝘽 𝙀 𝙉 : 🇺🇸Ꮠ
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z19"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z17"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z19"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
	..................
𓂐 𝙀𝙇𝙄𝙕𝘼𝘽𝙀𝙏𝙃 𖠛.
𓂐 𝘼𝙈𝘼𝙉𝘿𝘼 𖠛 .
𓂐 𝘼𝙉𝘿𝙍𝙀𝘼 𖠛 .
𓂐 𝙀𝙈𝙀𝙇𝙔 𖠛 .
𓂐𝙀𝙍𝙄𝙆𝘼 𖠛 .
𓂐 𝙀𝙑𝘼 𖠛 .
𓂐 𝘼𝙈𝙔  𖠛 .
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"z20"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z18"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "z20"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
‹ 𝑯𝑱𝑶| 🇮🇶،
‹ 𝑺𝑱𝑶 | 🇮🇶،
‹ 𝑨𝑺𝑶| 🇮🇶،
‹ 𝑨𝑵𝑶| 🇮🇶،
‹ 𝑨𝑭𝑶| 🇮🇶،
‹ 𝑻𝑩𝑶| 🇮🇶،
‹ 𝒁𝑵𝑶| 🇮🇶،
‹ 𝒁𝑯𝑶| 🇮??،
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"z19"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "vv"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
- 𖣨 ، ෴ ، 𖡺  ، 𖣐 ، ✜ ، ✘ ، 𖡻 ،
- ༄ ، ༺༻ ، ༽༼ ،  ╰☆╮،  
- ɵ̷̥̥᷄ˬɵ̷̥̥᷅ ، ‏⠉̮⃝ ، ࿇࿆ ، ꔚ، ま ، ☓ ،
{𓆉 . 𓃠 .𓅿 . 𓃠 . 𓃒 . ?? . 𓃱 . 𓅓 . 𐂃  . ꕥ  . ⌘ . ♾ .    ꙰  .  . ᤑ .  ﾂ .
____
✦ ,✫ ,✯, ✮ ,✭ ,✰, ✬ ,✧, ✤, ❅ , 𒀭,✵ , ✶ , ✷ , ✸ , ✹ ,⧫, . 𐂂 }

-〘 𖢐 ، 𒍦 ، 𒍧 ، 𖢣 ، 𝁫 ، 𒍭 ، 𝁅 ، 𝁴 ، 𒍮 ، 𝁵 ، 𝀄 ، 𓏶 ، 𓏧 ، 𓏷 ، 𓏯 ، 𓏴 ، 𓏳 ، 𓏬 ، 𓏦 ، 𓏵 ، 𓏱 ، ᳱ ، ᯼ ، 𐃕 ، ᯥ ، ᯤ ، ᯾ ، ᳶ ، ᯌ ، ᢆ ،

 ᥦ ، ᨙ ، ᨚ  ، ᨔ  ، ⏢ ، ⍨ ، ⍃ ، ⏃ ، ⍦ ، ⏕ ، ⏤ ، ⏁ ، ⏂ ، ⏆ ، ⌳ ، ࿅ ، ࿕ ، ࿇ ، ᚙ ، ࿊ ، ࿈ ، ྿ ،
 ࿂ ، ࿑ ،  ᛥ ، ࿄ ، 𐀁 ، 𐀪 ، 𐀔 ، 𐀴 ، 𐀤 ، 𐀦 ، 𐀂 ، 𐀣 ، 𐀢 ، 𐀶 ، 𐀷 ، 𐂭 ، 𐂦 ، 𐂐 ، 𐂅 ، 𐂡 ، 𐂢 ، 𐂠 ، 𐂓 ، 𐂑 ، 𐃸 ، 𐃶 ، 𐂴 ، 𐃭 ، 𐃳 ، 𐃣 ، 𐂰 ، 𐃟 ، 𐃐 ، 𐃙 ، 𐃀 ، 𐇮 ، 𐇹 ، 𐇲 ، 𐇩 ، 𐇪 ، 𐇶 ، 𐇻 ، 𐇡 ، 𐇸 ، 𐇣 ، 𐇤 ، 𐎅 ، 𐏍 ، 𐎃 ، 𐏒 ، 𐎄 ، 𐏕 〙.


╔ ╗. 𓌹  𓌺 .〝  〞. ‹ ›  .「  」. ‌‏𓂄‏ ‌‌‏𓂁
〖 〗. 《》 .  < > . « »  . ﹄﹃

₁ ₂ ₃ ₄ ₅ ₆ ₇ ₈ ₉ ₀
𝟏 𝟐 𝟑 𝟒 𝟓 𝟔 𝟕 𝟖 𝟗 𝟎
𝟭 𝟮 𝟯 𝟰 𝟱 𝟲 𝟳 𝟴 𝟵 𝟬
①②③④⑤⑥⑦⑧⑨⓪
❶❷❸❹❺❻❼❽❾⓿
⓫⓬⓭⓮⓯⓰⓱⓲⓳⓴
———————×———————
 𝟶 𝟷 𝟸 𝟹 𝟺 𝟻 𝟼 𝟽 𝟾  𝟿
 𝟘 𝟙  𝟚  𝟛  𝟜  𝟝  𝟞  𝟟  𝟠 𝟡
 𝟬 𝟭  𝟮  𝟯  𝟰  𝟱   𝟲  𝟳  𝟴  𝟵  
 𝟎  𝟏  𝟐  𝟑  𝟒   𝟓   𝟔  𝟕   𝟖   𝟗
０ １ ２ ３ ４ ５ ６ ７８９
———————×———————
.....
.
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "cc"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
ڪݪخـرا .
نجَبـيہ .
؏ـمرჂ̤ .
ۿـا .
ـلا .
حَياتـჂ̤ .
سَـرسَحي .
ڪياتۿهۃ .
فدوۿهۃ .
حَبيبـჂ̤ .
حَبيبتـჂ̤ .
مَڪدࢪ .
حَيوانۿهۃ .
ﺂوڪيـۃ .
ۿـلو .
وَلـჂ̤ .
ههههۃ .
لَـطيف .
لَطيفهۃ .
رﯢحـيہ .
راحتـჂ̤ .
ڪݪبـيہ .
ﺂنام .
ﺂڪل .
طالـ؏ .
طالعهۃ .
مَۃ ﺂدرჂ̤ .
شَڪو ؟ .
؏َـليهۃ .
؏َـليَك .
ﺂوفـٰہ .
ﺂمـﯢ؏ .
حَبڪـٰہ .
حَبجـٰہ .
ﺂحـح .
يـﺂჂ̤ .
بـﺂჂ̤ .
نـﺂنـჂ̤ .
ﺂبـﯢﺳـہ .
ﺂڪࢪط .
ﺂ؏ـضـہ .
يَـۃ فِـدﯢا
ۿـواჂ̤ .
ساعۿۃ .
دَقيقهۃ .
لَحضهۃ .
ﺂمـوتہ .
غَصيتہ .
يـما .
قَنـﺂتـჂ̤ .
بـۅتـჂ̤ .
مݪصَقاتہ .
مُسـﺂبقهۃ .
ﺂسمـჂ̤ .
نتعَࢪفـہ ؟.
ࢪاحتـჂ̤ .
ﺂنـჂ̤ .
ﺂنتـჂ̤ .
؏ـشقيہ .
وݪيدჂ̤ .
بنَيتيہ .
طِفݪتيہ .
تَـعي .
وَݪـيہ .
موتبيڪہ .
موتبيجہ .
موتعَليڪہ .
نصعَد ؟.
صۅتَڪ .
صۅتِجہ .
ﺂبـوسـہ.
نَعَست .
ﺂجيت.
نجَبـჂ̤ .
ڪݪزَقہ .
نَـعـال .
زَࢪبـۿهۃ .
زاحفَۿهۃ .
حَڪـہ .
ﮪـہلاﯠﯠ
ههيہلآﯛﯛ
أههہـﯠﯠ
شنـيہ 
هآيـہ
يـ؏
أﯠﯠ؏
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- التالي ! 🦄💸','callback_data'=>"g1"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "g1"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
؏ـليڪ
 أ උـبڪ
أنيہ 
شبيڪ
يڪول 
لآ
بسہ 
ليشہ 
أڪرۿڪ
أڪول
أڪلڪ
أڪلج
شلونڪ
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[     
[['text'=>'- التالي ! 🦄💸','callback_data'=>"cc1"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"cc"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "cc1"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
ﺎﻟلهۂَ .
ﺣــِلاﯛتيہ .
ٵڪوݪك .
شــ؏ـليه .
ٵڪﯙلـﭻ .
اﻧـييہ .
פـلوٰ .
ٵࢪيد .
ٵࢪوحـہ .
ا؏ـࢪفہ .
ٵدࢪيہ .
آ؏ـشقـجہ .
ﭑ؏ـشقڪہ .
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[     
[['text'=>'- التالي ! 🦄💸','callback_data'=>"cc2"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"g1"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "cc2"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
متتـــہ 
؏ـــشقجٰہ 
ڪيـيوتـہ
ڪـافــيہۛ 
بـ؏ـد 
ليـشہ
ۿﮧـﺎ 
ـآحنهٰــہ 
؏ـليك 
حــبيہ 
؏ـنيہ 
ﮪۛـوِٰاي  
؏ـليۿ 
؏ــيني
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[     
[['text'=>'- التالي ! 🦄💸','callback_data'=>"cc3"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"cc1"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "cc3"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
تفضـࢦيہ
تفضـࢦ           פـباببهـہ
פـباب            פـاسـﯢب
ﺂنسهـۃ‏            آميٰـטּ
ﺑـسـہ             ضَݪـ؏ـييہ
ضَݪـ؏ـتيـہ       ؏َـندʊ̤
ﺂجتمـا؏         ٵჂ̤
شــჂ̤              ݪَـ؏ـد
؏ـفيهۿ         ڪـﯢمهۃ‏
ڪثـﯿࢪ          ٲﯢڪييـہ
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[     
[['text'=>'- التالي ! 🦄💸','callback_data'=>"cc4"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"cc2"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "cc4"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
ע 
ليـشـہٰ 
مِہטּ 
مِمـححِـہٰ 
ههههہ 
واللــہٰ
؏َيـﯠﯢنڪك . 
رﯠﯢحڪكَ . 
حتـرﯠﯢحَ . 
؏َـمرڪك . 
اﯠﯢفَ . 
جـمـ؏ـﮫـہ
مـبارڪـهـہ 
ـاٌلحمډ للۿ 💗. 
مــنــﹻـو 
آتـرخـصــہ 
اتمۂــنى 
ﺎتـﯡب . 
ﭑحنۿ 
ﺂﺣﺣَـم . 
د؏ۛـم . 
دقـِـِۧيۧقـِـِهہ. 
ډلينييہَ .
ﻏﻏِـادرييہَ .
حبچـჂَ̤ 
ٲפـبج 
حــچي
حـاڕِهۃ
بـاردۿ`
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[     
[['text'=>'- التالي ! 🦄💸','callback_data'=>"cc5"],['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"cc3"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "cc5"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
• ھھݪـﯠ
• شلـﯛنڪہ
• شلـﯛنجهہ
• ٲلحـﻣډ للّْهہ
• يـٱ ࢪّبـــہ
• تـﻣـاﻣـہۧ
• زيـنۿۂ
• شَـنـﯛ؟
• ݪيٓش‏ـہ
• ؏ــزهہ
• خـࢪّبـہ 
• يڵهہ ؏ـاديـہ،
• شڪډ ؏ـيبـہ
• مُـحـࢪّ۾ 
• نـُلـطمـہ
• زيـاࢪّهہ
• حـࢪّٲ۾
• ارگـصـہۧ
• ٲسبـحہَۧ
• ٲرڪضـہۧ
• زاحـفـہۧ
• زاحـفـهہۧ
• مُـتاحـہ،
• مُـتاحۿۂ،
• فـاۿيـهہ،
•ـــــــــــــــــ
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[     
[['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"cc4"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
} 

 if($data == "ww"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text' => "
~ حسنا عزيزي ارسل اسمك الان
~ يمكنك ارساله بلانكليزي او بلعربي",

]);
}
if($text and $text != "/start" ){
  file_put_contents("BRoKxxxT.txt","non");
   $count = count($text); 
   $k = strtolower('a','𝐴',$k); 
 $k = str_replace('b','𝐵',$k); 
 $k = str_replace('c','𝐶',$k); 
 $k = str_replace('d','𝐷',$k); 
 $k = str_replace('e','𝐸',$k); 
 $k = str_replace('f','𝐹',$k); 
 $k = str_replace('g','𝐺',$k); 
 $k = str_replace('h','𝐻',$k); 
 $k = str_replace('i','𝐼',$k); 
 $k = str_replace('j','𝐽',$k); 
 $k = str_replace('k','𝐾',$k); 
 $k = str_replace('l','𝐿',$k); 
 $k = str_replace('m','𝑀',$k); 
 $k = str_replace('n','𝑁',$k); 
 $k = str_replace('o','𝑂',$k); 
 $k = str_replace('p','𝑃',$k); 
 $k = str_replace('q','𝑄',$k); 
 $k = str_replace('r','𝑅',$k); 
 $k = str_replace('s','𝑆',$k); 
 $k = str_replace('t','𝑇',$k); 
 $k = str_replace('u','𝑈',$k); 
 $k = str_replace('v','𝑉',$k); 
 $k = str_replace('w','𝑊',$k); 
 $k = str_replace('x','𝑋',$k); 
 $k = str_replace('y','𝑌',$k); 
 $k = str_replace('z','𝑍',$k);
 $k = str_replace('ض','ضّ',$k);
$k = str_replace('ص','صٌ',$k); 
$k = str_replace('ث','ثّ',$k); 
$k = str_replace('ق','قِ',$k); 
$k = str_replace('ف','فِّ',$k); 
$k = str_replace('غ','غٌ',$k); 
$k = str_replace('ع','عٌ',$k); 
$k = str_replace('ه','هِ',$k); 
$k = str_replace('خ','خَ',$k); 
$k = str_replace('ح','حٌ',$k); 
$k = str_replace('ج','جِ',$k); 
$k = str_replace('ش','شٍ',$k); 
$k = str_replace('س',' س',$k); 
$k = str_replace('ي','يِّ',$k); 
$k = str_replace('ب','بِ',$k);
$k = str_replace('ل','لَ',$k); 
$k = str_replace('ا','أّ',$k); 
$k = str_replace('ت','تّ',$k); 
$k = str_replace('ن','نِ',$k); 
$k = str_replace('ك','ګ',$k); 
$k = str_replace('م','مَ',$k); 
$k = str_replace('ة',' ةّ',$k); 
$k = str_replace('ء','ء',$k); 
$k = str_replace('ظ','ظّ',$k); 
$k = str_replace('ط','طّ',$k); 
 $k = str_replace('ذ','ذّ',$k); 
$k = str_replace('د','دِ',$k); 
$k = str_replace('ز','زِّ',$k); 
$k = str_replace('ر','ڒٍ',$k); 
$k = str_replace('و','وِ',$k); 
$k = str_replace('ى','ىّ',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k
   ]); 
   $k = $text;
$k = str_replace('a','𝐀',$text); 
 $k = str_replace('b','𝐁',$k); 
 $k = str_replace('c','𝐂',$k); 
 $k = str_replace('d','𝐃',$k); 
 $k = str_replace('e','𝐄',$k); 
 $k = str_replace('f','𝐅',$k); 
 $k = str_replace('g','𝐆',$k); 
 $k = str_replace('h','𝐇',$k); 
 $k = str_replace('i','𝐈',$k); 
 $k = str_replace('j','𝐉',$k); 
 $k = str_replace('k','𝐊',$k); 
 $k = str_replace('l','𝐋',$k); 
 $k = str_replace('m','𝐌',$k); 
 $k = str_replace('n','𝐍',$k); 
 $k = str_replace('o','𝐎',$k); 
 $k = str_replace('p','𝐏',$k); 
 $k = str_replace('q','𝐐',$k); 
 $k = str_replace('r','𝐑',$k); 
 $k = str_replace('s','𝐒',$k); 
 $k = str_replace('t','𝐓',$k); 
 $k = str_replace('u','𝐔',$k); 
 $k = str_replace('v','𝐕',$k); 
 $k = str_replace('w','𝐖',$k); 
 $k = str_replace('x','𝐗',$k); 
 $k = str_replace('y','𝐘',$k); 
 $k = str_replace('z','𝐙',$k);
 $k = str_replace('ض','ض֮',$k);
$k = str_replace('ص','ص֓',$k); 
$k = str_replace('ث','ثֻ',$k); 
$k = str_replace('ق','ق֯',$k); 
$k = str_replace('ف','ف֛',$k); 
$k = str_replace('غ','غؒ',$k); 
$k = str_replace('ع','عٌ',$k); 
$k = str_replace('ه','هٞ',$k); 
$k = str_replace('خ','خ٘٘٘٘٘٘٘٘٘٘',$k); 
$k = str_replace('ح','حٟ',$k); 
$k = str_replace('ج','جۤ',$k); 
$k = str_replace('ش','شۨ',$k);
$k = str_replace('س','سܱܰ',$k); 
$k = str_replace('ي','يަ',$k); 
$k = str_replace('ب','ب߬',$k); 
$k = str_replace('ل','ل',$k); 
$k = str_replace('ا','اࠗ',$k); 
$k = str_replace('ت','ت',$k); 
$k = str_replace('ن','نۨۨۨۨۨۨۨۨ',$k); 
$k = str_replace('م','مࣩ',$k); 
$k = str_replace('ك','ك๊',$k); 
$k = str_replace('ظ','ظ້',$k); 
$k = str_replace('ط','ط็',$k); 
$k = str_replace('ذ','ذྃ',$k); 
$k = str_replace('ء','ء',$k); 
$k = str_replace('ؤ','ؤ',$k); 
$k = str_replace('ر','ر',$k); 
$k = str_replace('ى','ى',$k); 
$k = str_replace('ة','ة',$k); 
$k = str_replace('و','୨و',$k); 
$k = str_replace('ز','ز',$k); 
$k = str_replace('ظ',' ظ',$k); 
$k = str_replace('د','د',$k); 
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k
   ]); 
   $k = $text;
   $k = str_replace('a','𝖆',$text); 
 $k = str_replace('b','𝖇',$k); 
 $k = str_replace('c','𝖈',$k); 
 $k = str_replace('d','𝖉',$k); 
 $k = str_replace('e','𝖊',$k); 
 $k = str_replace('f','𝖋',$k); 
 $k = str_replace('g','𝖌',$k); 
 $k = str_replace('h','𝖍',$k); 
 $k = str_replace('i','𝖎',$k); 
 $k = str_replace('j','𝖏',$k); 
 $k = str_replace('k','𝖐',$k); 
 $k = str_replace('l','𝖑',$k); 
 $k = str_replace('m','𝖒',$k); 
 $k = str_replace('n','𝖓',$k); 
 $k = str_replace('o','𝖔',$k); 
 $k = str_replace('p','𝖕',$k); 
 $k = str_replace('q','𝖖',$k); 
 $k = str_replace('r','𝖗',$k); 
 $k = str_replace('s','𝖘',$k); 
 $k = str_replace('t','𝖙',$k); 
 $k = str_replace('u','𝖚',$k); 
 $k = str_replace('v','𝖛',$k); 
 $k = str_replace('w','𝖜',$k); 
 $k = str_replace('x','𝖝',$k); 
 $k = str_replace('y','𝖞',$k); 
 $k = str_replace('z','𝖟',$k);
 $k = str_replace('ض','ضُ',$k);
$k = str_replace('ص','صّ',$k); 
$k = str_replace('ث','ثُ',$k); 
$k = str_replace('ق','قً',$k); 
$k = str_replace('ف','فَ',$k); 
$k = str_replace('غ','غً',$k); 
$k = str_replace('ع','ْع ',$k); 
$k = str_replace('ه','هہ',$k); 
$k = str_replace('خ','خہ',$k); 
$k = str_replace('ح','حہ',$k); 
$k = str_replace('ج','جہ',$k); 
$k = str_replace('ش','شہ',$k); 
$k = str_replace('س',' سہ',$k); 
$k = str_replace('ي','يہ',$k); 
$k = str_replace('ب','بہ',$k);
$k = str_replace('ل','لَ',$k); 
$k = str_replace('ا','آ',$k); 
$k = str_replace('ت','تہ',$k); 
$k = str_replace('ن','نہ',$k); 
$k = str_replace('ك','كہ',$k); 
$k = str_replace('م','مہ',$k); 
$k = str_replace('ة',' ةّ',$k); 
$k = str_replace('ء','ء',$k); 
$k = str_replace('ظ','ظہ',$k); 
$k = str_replace('ط','طہ',$k); 
 $k = str_replace('ذ','ذّ',$k); 
$k = str_replace('د','دِ',$k); 
$k = str_replace('ز','زِّ',$k); 
$k = str_replace('ر','ڒٍ',$k); 
$k = str_replace('و','وِ',$k); 
$k = str_replace('ى','ىّ',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k
   ]); 
  $k = $text;
$k = str_replace('a','ᴬ',$text); 
 $k = str_replace('b','ᴮ',$k); 
 $k = str_replace('c','ᶜ',$k); 
 $k = str_replace('d','ᴰ',$k); 
 $k = str_replace('e','ᴱ',$k); 
 $k = str_replace('f','ᶠ',$k); 
 $k = str_replace('g','ᴳ',$k); 
 $k = str_replace('h','ᴴ',$k); 
 $k = str_replace('i','ᴵ',$k); 
 $k = str_replace('j','ᴶ',$k); 
 $k = str_replace('k','ᴷ',$k); 
 $k = str_replace('l','ᴸ',$k); 
 $k = str_replace('m','ᴹ',$k); 
 $k = str_replace('n','ᴺ',$k); 
 $k = str_replace('o','ᴼ',$k); 
 $k = str_replace('p','ᴾ',$k); 
 $k = str_replace('q','ᵟ',$k); 
 $k = str_replace('r','ᴿ',$k); 
 $k = str_replace('s','ˢ',$k); 
 $k = str_replace('t','ᵀ',$k); 
 $k = str_replace('u','ᵿ',$k); 
 $k = str_replace('v','ᵛ',$k); 
 $k = str_replace('w','ᵂ',$k); 
 $k = str_replace('x','ˣ',$k); 
 $k = str_replace('y','ᵞ',$k); 
 $k = str_replace('z','ᶻ',$k);
 $k = str_replace('ض','᎗ᘞ̇',$k);
$k = str_replace('ص',' ᎗ᘗ',$k); 
$k = str_replace('ث','᎗̇̈ɹ ',$k); 
$k = str_replace('ق','',$k); 
$k = str_replace('ف','',$k); 
$k = str_replace('غ','᎗ϛ',$k); 
$k = str_replace('ع','᎗ჺ',$k); 
$k = str_replace('ه','᎗බ',$k); 
$k = str_replace('خ','ᓘ',$k); 
$k = str_replace('ح','ᓗ',$k); 
$k = str_replace('ج','ᓗฺ',$k); 
$k = str_replace('س',' ᎗ɹɹɹ',$k); 
$k = str_replace('ش','᎗ɹ̇̈ɹɹ',$k); 
$k = str_replace('ي',' ᎗̤ɹ',$k); 
$k = str_replace('ب','᎗̣ɹ ',$k);
$k = str_replace('ل','⅃',$k); 
$k = str_replace('ا','Ȋ',$k); 
$k = str_replace('ت','᎗̈ɹ',$k); 
$k = str_replace('ن','᎗̇ɹ',$k); 
$k = str_replace('ك','ܭ',$k); 
$k = str_replace('م','ᓄ',$k); 
$k = str_replace('ة',' ᎗Ꭷ',$k); 
$k = str_replace('ء','ء',$k); 
$k = str_replace('ظ','᎗̇Ь',$k); 
$k = str_replace('ط','᎗Ь',$k); 
 $k = str_replace('ذ','ذّ',$k); 
$k = str_replace('د','ↄ',$k); 
$k = str_replace('ز','j',$k); 
$k = str_replace('ر','ڒٍ',$k); 
$k = str_replace('و','g',$k); 
$k = str_replace('ى','ىّ',$k);
   bot('sendMessage',[
    'chat_id'=>$chat_id,
        'text'=>$k
   ]);
   $k = $text;
   $k = str_replace('a','𝙰',$text); 
 $k = str_replace('b','𝙱',$k); 
 $k = str_replace('c','𝙲',$k); 
 $k = str_replace('d','𝙳',$k); 
 $k = str_replace('e','𝙴',$k); 
 $k = str_replace('f','𝙵',$k); 
 $k = str_replace('g','𝙶',$k); 
 $k = str_replace('h','𝙷',$k); 
 $k = str_replace('i','𝙸',$k); 
 $k = str_replace('j','𝙹',$k); 
 $k = str_replace('k','𝙺',$k); 
 $k = str_replace('l','𝙻',$k); 
 $k = str_replace('m','𝙼',$k); 
 $k = str_replace('n','𝙽',$k); 
 $k = str_replace('o','𝙾',$k); 
 $k = str_replace('p','𝙿',$k); 
 $k = str_replace('q','𝚀',$k); 
 $k = str_replace('r','𝚁',$k); 
 $k = str_replace('s','𝚂',$k); 
 $k = str_replace('t','𝚃',$k); 
 $k = str_replace('u','𝙺',$k); 
 $k = str_replace('v','𝚅',$k); 
 $k = str_replace('w','𝚆',$k); 
 $k = str_replace('x','𝚇',$k); 
 $k = str_replace('y','𝚈',$k); 
 $k = str_replace('z','𝚉',$k);
 $k = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$k);
$k = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$k); 
$k = str_replace('ث','ث̲ꫭـﮧ',$k); 
$k = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$k); 
$k = str_replace('ف','فـٌٍ๋ۤ͜ﮧ',$k); 
$k = str_replace('غ','غـّٰ̐ہٰٰ',$k); 
$k = str_replace('ع','عٌ',$k); 
$k = str_replace('ه','ھہ',$k); 
$k = str_replace('خ','خ̲ﮧ',$k); 
$k = str_replace('ح','ح̲ꪳـﮧ',$k); 
$k = str_replace('ج','ج̲ꪸـﮧ',$k); 
$k = str_replace('ش','ش̲ꪾـﮧ',$k); 
$k = str_replace('س','سـ̷ٰٰﮧْ',$k); 
$k = str_replace('ي','يـِٰ̲ﮧ',$k); 
$k = str_replace('ب','ب̲ꪰـﮧْ',$k);
$k = str_replace('ل','لٍُـّٰ̐ہ',$k); 
$k = str_replace('ا','أّ',$k); 
$k = str_replace('ت','تـٰۧﮧ',$k); 
$k = str_replace('ن','نٰ̲̐ـﮧْ',$k); 
$k = str_replace('ك','كـِّﮧْٰٖ',$k); 
$k = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$k); 
$k = str_replace('ة',' ةً',$k); 
$k = str_replace('ء','ء',$k); 
$k = str_replace('ظ','ظَـ๋͜ﮧْ',$k); 
$k = str_replace('ط','ط̲꫁ـﮧ',$k); 
 $k = str_replace('ذ','ذٖ',$k); 
$k = str_replace('د','دُ',$k); 
$k = str_replace('ز','ژٰ',$k); 
$k = str_replace('ر','ڒٍ',$k); 
$k = str_replace('و','ﯛ૭',$k); 
$k = str_replace('ى','ىّ',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k
   ]);
   $k = $text;
$k = str_replace('a','𝒂',$text); 
 $k = str_replace('b','𝒃',$k); 
 $k = str_replace('c','𝒄',$k); 
 $k = str_replace('d','𝒅',$k); 
 $k = str_replace('e','𝒆',$k); 
 $k = str_replace('f','𝒇',$k); 
 $k = str_replace('g','𝒈',$k); 
 $k = str_replace('h','𝒉',$k); 
 $k = str_replace('i','𝒊',$k); 
 $k = str_replace('j','𝒋',$k); 
 $k = str_replace('k','𝒌',$k); 
 $k = str_replace('l','𝒍',$k); 
 $k = str_replace('m','𝒎',$k); 
 $k = str_replace('n','𝒏',$k); 
 $k = str_replace('o','𝒐',$k); 
 $k = str_replace('p','𝒑',$k); 
 $k = str_replace('q','𝒒',$k); 
 $k = str_replace('r','𝒓',$k); 
 $k = str_replace('s','𝒔',$k); 
 $k = str_replace('t','𝒕',$k); 
 $k = str_replace('u','𝒖',$k); 
 $k = str_replace('v','𝒗',$k); 
 $k = str_replace('w','𝒘',$k); 
 $k = str_replace('x','𝒙',$k); 
 $k = str_replace('y','𝒚',$k); 
 $k = str_replace('z','𝒛',$k);
 $k = str_replace('ض','ضُ',$k);
$k = str_replace('ص','صّ',$k); 
$k = str_replace('ث','ثُ',$k); 
$k = str_replace('ق','قً',$k); 
$k = str_replace('ف','فَ',$k); 
$k = str_replace('غ','غً',$k); 
$k = str_replace('ع','ْع ',$k); 
$k = str_replace('ه','هہ',$k); 
$k = str_replace('خ','خہ',$k); 
$k = str_replace('ح','حہ',$k); 
$k = str_replace('ج','جہ',$k); 
$k = str_replace('ش','شہ',$k); 
$k = str_replace('س',' سہ',$k); 
$k = str_replace('ي','يہ',$k); 
$k = str_replace('ب','بہ',$k);
$k = str_replace('ل','لَ',$k); 
$k = str_replace('ا','آ',$k); 
$k = str_replace('ت','تہ',$k); 
$k = str_replace('ن','نہ',$k); 
$k = str_replace('ك','كہ',$k); 
$k = str_replace('م','مہ',$k); 
$k = str_replace('ة',' ةّ',$k); 
$k = str_replace('ء','ء',$k); 
$k = str_replace('ظ','ظہ',$k); 
$k = str_replace('ط','طہ',$k); 
 $k = str_replace('ذ','ذّ',$k); 
$k = str_replace('د','دِ',$k); 
$k = str_replace('ز','زِّ',$k); 
$k = str_replace('ر','ڒٍ',$k); 
$k = str_replace('و','وِ',$k); 
$k = str_replace('ى','ىّ',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k
        ]);
$k = $text;
$k = str_replace('a','𝑎',$text); 
 $k = str_replace('b','𝑏',$k); 
 $k = str_replace('c','𝑐',$k); 
 $k = str_replace('d','𝑑',$k); 
 $k = str_replace('e','𝑒',$k); 
 $k = str_replace('f','𝑓',$k); 
 $k = str_replace('g','𝑔',$k); 
 $k = str_replace('h','ℎ',$k); 
 $k = str_replace('i','𝑖',$k); 
 $k = str_replace('j','𝑗',$k); 
 $k = str_replace('k','𝑘',$k); 
 $k = str_replace('l','𝑙',$k); 
 $k = str_replace('m','𝑚',$k); 
 $k = str_replace('n','𝑛',$k); 
 $k = str_replace('o','𝑜',$k); 
 $k = str_replace('p','𝑝',$k); 
 $k = str_replace('q','𝑞',$k); 
 $k = str_replace('r','𝑟',$k); 
 $k = str_replace('s','𝑠',$k); 
 $k = str_replace('t','𝑡',$k); 
 $k = str_replace('u','𝑢',$k); 
 $k = str_replace('v','𝑣',$k); 
 $k = str_replace('w','𝑤',$k); 
 $k = str_replace('x','𝑥',$k); 
 $k = str_replace('y','𝑦',$k); 
 $k = str_replace('z','𝑧',$k);
 $k = str_replace('ض','᎗ᘞ̇',$k);
$k = str_replace('ص',' ᎗ᘗ',$k); 
$k = str_replace('ث','᎗̇̈ɹ ',$k); 
$k = str_replace('ق','',$k); 
$k = str_replace('ف','',$k); 
$k = str_replace('غ','᎗ϛ',$k); 
$k = str_replace('ع','᎗ჺ',$k); 
$k = str_replace('ه','᎗බ',$k); 
$k = str_replace('خ','ᓘ',$k); 
$k = str_replace('ح','ᓗ',$k); 
$k = str_replace('ج','ᓗฺ',$k); 
$k = str_replace('س',' ᎗ɹɹɹ',$k); 
$k = str_replace('ش','᎗ɹ̇̈ɹɹ',$k); 
$k = str_replace('ي',' ᎗̤ɹ',$k); 
$k = str_replace('ب','᎗̣ɹ ',$k);
$k = str_replace('ل','⅃',$k); 
$k = str_replace('ا','Ȋ',$k); 
$k = str_replace('ت','᎗̈ɹ',$k); 
$k = str_replace('ن','᎗̇ɹ',$k); 
$k = str_replace('ك','ܭ',$k); 
$k = str_replace('م','ᓄ',$k); 
$k = str_replace('ة',' ᎗Ꭷ',$k); 
$k = str_replace('ء','ء',$k); 
$k = str_replace('ظ','᎗̇Ь',$k); 
$k = str_replace('ط','᎗Ь',$k); 
 $k = str_replace('ذ','ذّ',$k); 
$k = str_replace('د','ↄ',$k); 
$k = str_replace('ز','j',$k); 
$k = str_replace('ر','ڒٍ',$k); 
$k = str_replace('و','g',$k); 
$k = str_replace('ى','ىّ',$k);
   bot('sendMessage',[
    'chat_id'=>$chat_id,
      'text'=>$k
        ]);
        $k = $text;
$k = str_replace('a','𝗔',$text); 
 $k = str_replace('b','𝗕',$k); 
 $k = str_replace('c','𝗖',$k); 
 $k = str_replace('d','𝗗',$k); 
 $k = str_replace('e','𝗘',$k); 
 $k = str_replace('f','𝗙',$k); 
 $k = str_replace('g','𝗚',$k); 
 $k = str_replace('h','𝗛',$k); 
 $k = str_replace('i','𝗜',$k); 
 $k = str_replace('j','𝗝',$k); 
 $k = str_replace('k','𝗞',$k); 
 $k = str_replace('l','𝗟',$k); 
 $k = str_replace('m','𝗠',$k); 
 $k = str_replace('n','𝗡',$k); 
 $k = str_replace('o','𝗢',$k); 
 $k = str_replace('p','𝗣',$k); 
 $k = str_replace('q','𝗤',$k); 
 $k = str_replace('r','𝗥',$k); 
 $k = str_replace('s','𝗦',$k); 
 $k = str_replace('t','𝗧',$k); 
 $k = str_replace('u','𝗨',$k); 
 $k = str_replace('v','𝗩',$k); 
 $k = str_replace('w','𝗪',$k); 
 $k = str_replace('x','𝗫',$k); 
 $k = str_replace('y','𝗬',$k); 
 $k = str_replace('z','𝗭',$k);
 $k = str_replace('ض','ضُ',$k);
$k = str_replace('ص','صّ',$k); 
$k = str_replace('ث','ثُ',$k); 
$k = str_replace('ق','قً',$k); 
$k = str_replace('ف','فَ',$k); 
$k = str_replace('غ','غً',$k); 
$k = str_replace('ع','ْع ',$k); 
$k = str_replace('ه','هہ',$k); 
$k = str_replace('خ','خہ',$k); 
$k = str_replace('ح','حہ',$k); 
$k = str_replace('ج','جہ',$k); 
$k = str_replace('ش','شہ',$k); 
$k = str_replace('س',' سہ',$k); 
$k = str_replace('ي','يہ',$k); 
$k = str_replace('ب','بہ',$k);
$k = str_replace('ل','لَ',$k); 
$k = str_replace('ا','آ',$k); 
$k = str_replace('ت','تہ',$k); 
$k = str_replace('ن','نہ',$k); 
$k = str_replace('ك','كہ',$k); 
$k = str_replace('م','مہ',$k); 
$k = str_replace('ة',' ةّ',$k); 
$k = str_replace('ء','ء',$k); 
$k = str_replace('ظ','ظہ',$k); 
$k = str_replace('ط','طہ',$k); 
 $k = str_replace('ذ','ذّ',$k); 
$k = str_replace('د','دِ',$k); 
$k = str_replace('ز','زِّ',$k); 
$k = str_replace('ر','ڒٍ',$k); 
$k = str_replace('و','وِ',$k); 
$k = str_replace('ى','ىّ',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k
        ]);
   $k = $text;
$k = str_replace('a','𝓐',$text); 
 $k = str_replace('b','𝓑',$k); 
 $k = str_replace('c','𝓒',$k); 
 $k = str_replace('d','𝓓',$k); 
 $k = str_replace('e','𝓔',$k); 
 $k = str_replace('f','𝓕',$k); 
 $k = str_replace('g','𝓖',$k); 
 $k = str_replace('h','𝓗',$k); 
 $k = str_replace('i','𝓘',$k); 
 $k = str_replace('j','𝓙',$k); 
 $k = str_replace('k','𝓚',$k); 
 $k = str_replace('l','𝓛',$k); 
 $k = str_replace('m','𝓜',$k); 
 $k = str_replace('n','𝓝',$k); 
 $k = str_replace('o','𝓞',$k); 
 $k = str_replace('p','𝓟',$k); 
 $k = str_replace('q','𝓠',$k); 
 $k = str_replace('r','𝓡',$k); 
 $k = str_replace('s','𝕾',$k); 
 $k = str_replace('t','𝓣',$k); 
 $k = str_replace('u','𝓤',$k); 
 $k = str_replace('v','𝓥',$k); 
 $k = str_replace('w','𝓦',$k); 
 $k = str_replace('x','𝓧',$k); 
 $k = str_replace('y','𝓨',$k); 
 $k = str_replace('z','𝓩',$k);
   bot('sendMessage',[
    'chat_id'=>$chat_id,
      'text'=>$k
  ]);
   
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"~ تم زغرفة الاسم $text بنجاح",
'reply_markup'=>json_encode(['inline_keyboard' => [
[['text'=>'~ Back','callback_data'=>"back"]],
]])
]);
} 
if($data == "xnx"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
🧸𓂇| 𝒏𝒂𝒎𝒆 :
🧸𓂇| 𝒂𝒈𝒆 : 
🧸𓂇| 𝒇𝒓𝒐𝒎 :        

                              - الذي يتعاملُ مع الحياة بقلبهِ
                            تخدشهُ ألتفاصيل الصغيره .🖤.
        ••━━━━━━━━━━━━••
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"R1"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "R1"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
❤️𖣂| 𝙽𝙰𝙼𝙴 :
❤️𖣂| 𝙰𝙶𝙴  : 
❤️𖣂| 𝙵𝚁𝙾𝙼  :        

                - محادثات عميقة مع الأشخاص المناسبين
                            مليئة بالذكريات تلاشت .🖤..
        ••━━━━━━━━━━━━••
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"R2"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "R2"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
🎀⍆| 𝓷𝓪𝓶𝓮  :
🎀⍆| 𝓪𝓰𝓮   : 
🎀⍆| 𝓯𝓻𝓸𝓶  :        

          ᶧ  - من گـد ماصفنت بلمعة الخـد
          ᶧ  يمكن حسبت رمـوشها شكد .🖤.                  
        ••━━━━━━━━━━━━••
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"R3"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "R3"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
🐼𖢐| 𝖓𝖆𝖒𝖊 :
🐼𖢐| 𝖆𝖌𝖊 : 
🐼𖢐| 𝖋𝖗𝖔𝖒 :        

         ᶧ - هو أنتي صرتي بكُل الأغاني .
         ᶧ لو الأغاني. نكتبت ألـج. ? .🤍.                     
        ••━━━━━━━━━━━━••
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"R4"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "R4"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
✨𖡱| ₙₐₘₑ :
✨𖡱| ₐGₑ : 
✨𖡱| 𝆑ᵣₒₘ :        

         ᶧ - - جميع مآ مررتُ بـهِ سيـختفي . 
         ᶧ إنها مسأله قرون فقـط .🖤. .                     
        ••━━━━━━━━━━━━••
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"R5"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "R5"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
🍟𖤗| 𝕹𝕬𝕸𝕰  :
🍟𖤗| 𝕬𝕲𝕰  : 
🍟𖤗| 𝕱𝕽𝕺𝕸  :        

         ᶧ - - ألي يسمعني اسولف بي يكولي يهنياله  
         ᶧ لا والله يهنيالي اني عليه .🤍.                     
        ••━━━━━━━━━━━━••
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"R6"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "R6"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
💜Ξ| 𝓝𝓐𝓜 𝓔  :
💜Ξ| 𝓐𝓖 𝓔  : 
💜Ξ| 𝓕𝓡𝓞𝓜  :        

         ᶧ - - أيجوز أن يُحب المرء مدينة . 
         ᶧ لأن قلبهُ في إحدى أحيائها .🤍..                     
        ••━━━━━━━━━━━━••
   ',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"R7"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "R7"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'     
💛✟| 𝘕𝘈𝘔𝘌 :
💛✟| 𝘈𝘎𝘌 : 
💛✟| 𝘍𝘙𝘖𝘔 :        

         ᶧ - - تلجأ الى العزله . لكنك تعلم في دآخلك . .
         ᶧ انك تريد أن يعثر أحدهم عليك .🖤                    
        ••━━━━━━━━━━━━••
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"R8"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "R8"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
💞✿| ᴺᴬᴹᴱ :
💞✿| ᴬᴳᴱ : 
💞✿| ᶠᴿᴼᴹ :        

         ᶧ - - - سنضلُ نحفرُ بالجدار . أما فتَحنا   . .
         ᶧ ثغرة للنورِ . أما مُتنا على الجدار .🖤                    
        ••━━━━━━━━━━━━••
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'التالي 🦄💸','callback_data'=>"R9"]],
[['text'=>'رجوع 🦄💸','callback_data'=>"back"]],
]])
]);
} 
if($data == "R9"){
mkdir("zkref/$useree");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
🍫✹| 𝘕𝘈𝘔𝘌 :
🍫✹| 𝘈𝘎𝘌 : 
🍫✹| 𝘍𝘙𝘖𝘔 :        

         ᶧ - - ‏وإن نظرتُ لعيناكِ شعرتُ بأني في  .
         ᶧ وطنٍ في حُضنٍ قد إحتواني .🖤                    
        ••━━━━━━━━━━━━••
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
  [['text'=>'-  الى الخلف ! 🦄💸','callback_data'=>"R8"]],
[['text'=>'- ألرجـوع . 🦄💸','callback_data'=>"back"]],
]])
]);
}
if($data=="back"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
- مرحباً عزيزي 𓃠
- في بوت الزخرفةه الحديث ، 𓆈
- يمكنك تصميم او زخرفةه اسمك بأحترافيةه  𓅷 
- تحكم في الازرار في الاسفل 𓃠
━━━━━━━━━━━━━━━━━━━━
𝑾𝒆𝒍𝒄𝒐𝒎𝒆 𝒕𝒐 𝒅𝒊𝒄𝒓𝒆𝒕𝒊𝒐𝒏 𝒃𝒐𝒕 𝒄𝒉𝒐𝒊𝒄𝒆 𝒇𝒓𝒐𝒎 𝒃𝒆𝒍𝒍𝒐𝒘 𓅰
- تم صنع هذا البوت من خلال : $brokbot
",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- زغرفة اسمك، 🦄!','callback_data'=>'ww']],
[['text'=>'- شهور السنه مرتبه، 🦄!','callback_data'=>'SS'],['text'=>'- اسماء قنوات ممطروقه، 🦄!','callback_data'=>'JN']],
[['text'=>'- اسماء تمبلر جاهزه، 🦄!','callback_data'=>'oh']],
[['text'=>'- اسماء ببجي جاهزه، 🦄!','callback_data'=>'hh'],['text'=>'- الرموز، 🦄!','callback_data'=>'vv']],
[['text'=>'- بايوات انستا مرتبه، 🦄!','callback_data'=>'xnx']],
]
])
]);
}