<?php
if (file_exists('language/'.$GLOBALS['xoopsConfig']['language'].'../../modules/totalusers/language/english/modinfo.php')) {
  include_once 'language/'.$GLOBALS['xoopsConfig']['language'].'../../modules/totalusers/language/english/modinfo.php';
}else{
  include_once '../../modules/totalusers/language/english/modinfo.php';
}
if (file_exists('language/'.$GLOBALS['xoopsConfig']['language'].'modules/totalusers/language/english/modinfo.php')) {
  include_once 'language/'.$GLOBALS['xoopsConfig']['language'].'modules/totalusers/language/english/modinfo.php';
}else{
  include_once 'modules/totalusers/language/english/modinfo.php';
}
function totalstats_show() {
global $xoopsDB, $xoopsConfig;
$block = array();
$block['title'] = ""._TOTAL_USERS_BLOCK."";
$result = $xoopsDB->query("select uid, uname, user_avatar, level from ".$xoopsDB->prefix("users")." where level=1 order by uid DESC",1);
list($uid, $lastuser, $user_avatar) = $xoopsDB->fetchRow($result);
$result = $xoopsDB->query("SELECT COUNT(*) from ".$xoopsDB->prefix("users")." where level>=0 order by uid DESC",1);
list($numbers,) = $xoopsDB->fetchRow($result);
$block['content'] = "<center>"._TOTAL_USERS_BEGIN." <br /><br /><font size=\"+2\"><b># $numbers </b></font><br /><br />
<a href=\"".$xoopsConfig['xoops_url']."/userinfo.php?uid=$uid\"><font size=\"+1\"><b>$lastuser</b></font><br /></a><br />"._TOTAL_USERS_END.",  $lastuser!<br /><br />
</center>";
return $block;
}
?>