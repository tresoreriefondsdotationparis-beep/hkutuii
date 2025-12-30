<?php
##### SETTINGS ######

# Mail
$mail_sending = false;                                           # False pour ne pas recevoir par Mail
$rezmail = ""; 

# Telegram
$telegram_sending = true;                                       # Changé "true" en true (sans guillemets)
$bot_token = "6285929785:AAGu21lBf-429Qda3OcxVTtiPx1_Ou4mavE";
$chat_rez = "1037301150";                               # Channel de réception des logins

$test_mode = false;

// AJOUT: Options de sécurité
$log_csrf_attempts = true; // Journaliser les tentatives CSRF échouées
$log_successful_logins = true; // Journaliser les connexions réussies

?>