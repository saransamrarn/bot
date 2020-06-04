<?php
set_time_limit(0);
date_default_timezone_set('Asia/Bangkok');
require_once('bot.php');

$bot = new bot($_POST);
if ($bot->command['action'] == 'checkbot') {
   $bot->checkbot();
   exit;
} else {
   $bot->savelog('Bot Start with runcount : '.$bot->runCount);
   while ($bot->login()) {
      $bot->work();
      $bot->get_newprofile();
   }
}
?>
