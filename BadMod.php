#!/usr/bin/env php
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

// V2 - fixed bug [ Linux id permission ]
$op_system = php_uname();
if(@preg_match("/Linux/",$op_system)){
	$oP = 0;
}else{
	$oP = 1;
}

########################################
#//||||||||||| check root |||||||||||\\#
########################################
if($oP == 0){
$root = @shell_exec("id");
if (!preg_match("/root/",$root)){
		@system("clear");
		$red    = "\e[91m";
		echo $red."\n[~] please run script as root "."\n\n";
		exit;
	}
}
/// End


##########################################
#//|||||||||||~ check curl ~|||||||||||\\#
##########################################
if(!extension_loaded('curl')) {
		if($oP == 0){
		@system("clear");
		$red    = "\e[91m";
		$white = "\e[97m";
		$green  = "\e[92m";
		echo $red."\n    [~] curl is not installed pls install it by this command "."\n";
		echo $white."	   -[ ".$green."sudo apt-get install php-curl ".$white."]-\n";
		echo " 		install it for you ? (y/n) : ";
		$install = @trim(fgets(STDIN,1024));
		if ($install == "y"){
		$install = "sudo apt-get install php-curl -y";
		@system("$install");
		exit();
			} else {
#########################################
#//||||||||||| exit script |||||||||||\\#
#########################################		
				exit();
				
				}
}else{
		@system("cls");
		echo "\n    [~] curl is not installed pls install it by this command "."\n";
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
require("Functions.php");
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
###############################################
#//||||||||||||||  array  end ||||||||||||||\\#
###############################################



start1 : echo $bold.$fgreen;
echo "\n   [1] Get all server sites  \n";
echo "\n   [2] Ip generator \n";
echo "\n   [3] import sites from txt \n";
echo "\n   [4] Scan single site  \n\n";
start2 : echo $white."   [(Exec)]>: ";
$chos = trim(fgets(STDIN,1024));
switch($chos){
###################
#// option 1 go \\#
################### 
case 1 : 	
GetIp : echo $green."   [+] Enter server ip or target url without [http/https] : ";
$target = fgets(STDIN,1024);
$target = trim($target);
if(empty($target)){
echo "    Error !! \n";
goto GetIp;	
}
if(preg_match("/http/",$target)){
$ip = gethostbyname($target);	
}else{
$ip = $target;	
}
reverseiplookup($ip);
break;
#################### 
#// end option 1 //#
#################### 


################### 
#// option 2 go \\#
################### 
 case 2 :
echo "\n";
echo $bold.$green."   [~] How much ? : ";
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
if(!preg_match("/http/",$expl)){
$expl = "http://".$expl;	
}else{
$expl = $expl;	
}
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
$contents = @file_get_contents($file);
if(!preg_match("/Version/",$contents) OR !preg_match("/Espresso/",$contents) OR !preg_match("/Event/",$contents)){
$pattern = @preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if(@preg_match_all($pattern, $contents, $matches)){
if(@preg_match("/WordPress/",$matches[0][0])){
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
echo wp_filemanager($expl);
echo downloads_manager($expl);
echo wp_easycart($expl);
echo $red."  [Vulns] -===============- ".$green.$rslt."\n";
echo $blue."\n -========================================- "."\n"; 

}
elseif(@preg_match("/option=/",$source) OR @preg_match("/index.php?option/",$source) OR @preg_match("/Joomla/",$source) ){
echo $blue."\n -========================================- "."\n";
echo $red. "  Target : ".$green.$expl."\n";
echo $red. "  [CMS] -============================- ".$green." joomla \n";
echo joom_ver($expl);
echo joom_down($expl);
echo com_fabrik($expl);
echo yj_sql($expl);
echo com_squadmanagement($expl);
echo com_jomcomdev($expl);
echo com_ccnewsletter($expl);
echo com_spmoviedb($expl);
echo com_expautospro($expl);
echo com_checklist($expl);
echo com_bookpro($expl);
echo com_jticketing($expl);
echo com_realpin($expl);
echo com_invitex($expl);
echo com_visualcalendar($expl);
echo com_fireboard($expl);
echo com_jgive($expl);
echo com_niceajaxpoll($expl);
echo com_jefaqpro($expl);
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

#####################
#// option 4 start\\#
#####################
case 4 : 
echo $green."   [+] Enter target url : ";
$target = fgets(STDIN,1024);
$target = trim($target);
echo "\n";
echo $end;
echo "\n";
echo robots($target);
echo subdomains($target);
echo reversedns($target);
echo cms_detecter($target);

break;
###################
#// option 4 end\\#
###################



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
