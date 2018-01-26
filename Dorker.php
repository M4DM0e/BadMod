<?php
$uname = php_uname();
if(preg_match("/Linux/",$uname)){
// if OS = linux do this command	
	system("clear");
	
	} else {
// else do this command	
		system("cls");
		
		}
$version = "v1.0";
$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\e[0;94m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";
$nbold = "\e[1;97m";
echo $yellow.$bold;
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
$countryName = array(
"AD",
"AE",
"AF",
"AG",
"AI",
"AL",
"AM",
"AN",
"AO",
"AQ",
"AR",
"AS",
"AT",
"AU",
"AW",
"AZ",
"BA",
"BB",
"BD",
"BE",
"BF",
"BG",
"BH",
"BI",
"BJ",
"BM",
"BN",
"BO",
"BR",
"BS",
"BT",
"BV",
"BW",
"BY",
"BZ",
"CA",
"CC",
"CF",
"CG",
"CH",
"CI",
"CK",
"CL",
"CM",
"CN",
"CO",
"COM",
"CR",
"CS",
"CU",
"CV",
"CX",
"CY",
"CZ",
"DE",
"DJ",
"DK",
"DM",
"DO",
"DZ",
"EC",
"EDU",
"EE",
"EG",
"EH",
"ER",
"ES",
"ET",
"FI",
"FJ",
"FK",
"FM",
"FO",
"FR",
"FX",
"GA",
"GB",
"GD",
"GE",
"GF",
"GH",
"GI",
"GL",
"GM",
"GN",
"GOV",
"GP",
"GQ",
"GR",
"GS",
"GT",
"GU",
"GW",
"GY",
"HK",
"HM",
"HN",
"HR",
"HT",
"HU",
"ID",
"IE",
"IL",
"IN",
"INT",
"IO",
"IQ",
"IR",
"IS",
"IT",
"JM",
"JO",
"JP",
"KE",
"KG",
"KH",
"KI",
"KM",
"KW",
"KZ",
"LA",
"LB",
"LC",
"LI",
"LK",
"LR",
"LS",
"LT",
"LU",
"LV",
"LY",
"MA",
"MC",
"MD",
"MG",
"MIL",
"MK",
"ML",
"MM",
"MN",
"MO",
"MQ",
"MR",
"MS",
"MT",
"MU",
"MV",
"MW",
"MX",
"MY",
"MZ",
"NA",
"NE",
"NET",
"NG",
"NI",
"NL",
"NO",
"NP",
"NR",
"NT",
"NU",
"NZ",
"OM",
"ORG",
"PA",
"PE",
"PH",
"PK",
"PL",
"PN",
"PT",
"PW",
"PY",
"QA",
"RE",
"RO",
"RU",
"RW",
"SA",
"SB",
"SC",
"SD",
"SE",
"SG",
"SI",
"SK",
"SL",
"SM",
"SN",
"SO",
"SR",
"SU",
"SY",
"SZ",
"TD",
"TG",
"TH",
"TJ",
"TK",
"TM",
"TN",
"TO",
"TR",
"TV",
"TW",
"TZ",
"UA",
"UG",
"UY",
"UZ",
"VE",
"VU",
"WS",
"YE",
"YT",
"YU",
"ZM",
"ZR",
"ZW",
);
echo "                             _________-----_____ "."\n";
echo "                  _____------           __      ----_ "."\n";
echo "           ___----             ___------              \ "."\n";
echo "              ----________        ----                 \ "."\n";
echo "                          -----__    |             _____) "."\n";
echo "                               __-                /     \ "."\n";
echo "                   _______-----    ___--          \    /)\ "."\n";
echo "             ------_______      ---____            \__/  / "."\n";
echo "                          -----__    \ --    _          /\ "."\n";
echo "                                 --__--__     \_____/   \_/\ "."\n";
echo "     _____             _                ----|   /          | "."\n";
echo "    |  __ \           | |                   |  |___________| "."\n";
echo "    | |  | | ___  _ __| | _____ _ __        |  | ((_(_)| )_) "."\n";
echo "    | |  | |/ _ \| '__| |/ / _ \ '__|       |  \_((_(_)|/(_) "."\n";
echo "    | |__| | (_) | |  |   <  __/ |          \             ( "."\n";
echo "    |_____/ \___/|_|  |_|\_\___|_| $version      \_____________) "."\n\n";
echo "    -=========================================================-\n";
echo $yellow.$bold."                         - Author : MrSqar         -                "."\n";
echo $yellow.$bold."                         - From : Yemen            -                "."\n";
echo "    -=========================================================-\n";
echo $green."\n      [1]- Mix for all world country [".$yellow."if u have dork".$green."] \n";
echo $green."\n      [2]- Mix for all world country [".$yellow."if u haven't dork".$green."] \n";
echo $green."\n      [3]- sites for a custm country \n";
start : echo $white."\n      <(Exec)$: ";
$sel1 = trim(fgets(STDIN,1024));
switch($sel1){
// case 1 start 
case 1 :
echo $yellow.$bold."\n      Enter the dork : ";
$dork = trim(fgets(STDIN,1024));
echo "\n\n";
$counter = count($countryName);
$gino = bing("$dork");
$sites = @array_map("site", $gino);
$ss = @array_unique($sites);
$done = @implode("\n", $ss) . "\n";
echo @implode("\n", $ss) . "\n";	
break;
// end case 1 

// case 2 start 
case 2 :
echo $green."\n      [1]- Sql injection \n";
echo $green."\n      [2]- wordpress - joomla sites \n";
echo $green."\n      [3]- joomla file upload \n";
echo $white."\n      <(Exec)$: ";
$dork = trim(fgets(STDIN,1024));
if($dork == 1){
$gino = bing("view.php?id=");
$sites = @array_map("site", $gino);
$ss = @array_unique($sites);
$done = @implode("\n", $ss) . "\n";
echo @implode("\n", $ss) . "\n";	
}
		elseif($dork == 2){
echo $yellow."\n   -===============[ Wordpress sites ]===============- \n\n";
echo $red;
$gino = bing("\"powered by wordpress\"");
$sites = @array_map("site", $gino);
$ss = @array_unique($sites);
$done = @implode("\n", $ss) . "\n";
echo @implode("\n", $ss) . "\n";
echo $yellow."\n   -===============[ End Wordpress ]===============- \n\n";
echo $yellow."\n   -===============[ joomla sites ]===============- \n\n";
echo $red;
$gino = bing("\"powered by joomla\"");
$sites = @array_map("site", $gino);
$ss = @array_unique($sites);
$done = @implode("\n", $ss) . "\n";
echo @implode("\n", $ss) . "\n";
echo $yellow."\n   -===============[ End joomla ]===============- \n\n";
		}
		elseif($dork == 3){
$gino = bing("inurl:viewtable?cid=");
$sites = @array_map("site", $gino);
$ss = @array_unique($sites);
$done = @implode("\n", $ss) . "\n";
echo @implode("\n", $ss) . "\n";
}
break;
// end case 2	

// case 3 start
case 3:
echo $yellow.$bold."\n      Enter the dork : ";
$dork = trim(fgets(STDIN,1024));
echo $yellow.$bold."\n      Enter country name [ example :ye] : ";
$cn = trim(fgets(STDIN,1024));
$gino = bing("$dork site:$cn");
$sites = @array_map("site", $gino);
$ss = @array_unique($sites);
$done = @implode("\n", $ss) . "\n";
echo @implode("\n", $ss) . "\n";
break;
// end case 3 

// end switch
default:
echo $red."\n      Invild select \n ";
goto start;	
break;
	
	}
?>
