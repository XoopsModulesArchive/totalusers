<?php
$modversion['name'] = ''._TOTAL_USERS_MODULE.'';
$modversion['version'] = 1;
$modversion['description'] = "";
$modversion['credits'] = "";
$modversion['author'] = "<a href=\"http://www.danordesign.com\">Danordesign</a>";
$modversion['help'] = "";
$modversion['license'] = "GPL";
$modversion['official'] = 0;
$modversion['image'] = "images/total-users_logo.gif";
$modversion['dirname'] = "totalusers";

// Menu
$modversion['hasMain'] = 0;

// Admin
$modversion['hasAdmin'] = 0;

//Block
$modversion['blocks'][1]['file'] = "total_stats.php";
$modversion['blocks'][1]['name'] =  ''._TOTAL_USERS_BLOCK.'';
$modversion['blocks'][1]['description'] =  ''._TOTAL_USERS_BLOCK.'';
$modversion['blocks'][1]['show_func'] = "totalstats_show";
?>