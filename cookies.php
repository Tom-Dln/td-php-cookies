<?php

// Partie Theme du Site

if (!isset($_COOKIE['theme_color'])) {
    // Première Visite
    setcookie('theme_color','light', time()+3600*24*7, '/');
    $theme = 'light';
} else {
    // Récupération du Choix Utilisateur
    if (isset($_POST['dark']) || ($_COOKIE['theme_color'] == 'dark' && !isset($_POST['light']))) {
        $theme = 'dark';
        setcookie('theme_color','dark', time()+3600*24*7, '/');
    } else {
        $theme = 'light';
        setcookie('theme_color','light', time()+3600*24*7, '/');
    }
}

// Partie Authentification du Site

require_once __DIR__ . '/data.php';

if (!isset($_COOKIE['connected'])) {
    // Première Visite
    setcookie('connected', 'false', time()+3600*24*7, '/');
}

$test = '';

if ( isset($_POST['form_login']) && isset($_POST['form_password']) ) {
    $test = 'ok';
    foreach ($users as $key => $value) {
        if (($value['login'] == $_POST['form_login']) && ($value['password'] == $_POST['form_password'])) {
            $test = 'validation';
            setcookie('connected', 'true', time()+3600*24*7, '/');
        }
    }

}






?>