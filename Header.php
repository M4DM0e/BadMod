<?php
/*
#*##*##*##*##*##*##*##*##*##*##*##*##*# 
#*#                  			    #*#               
#*#  Coded by MrSqar Yemeni hacker  #*#
#*#      							#*#
#*#     mail : mrsqar@gmail.com		#*#
#*#  			 or 				#*#
#*#        FerzY3@yahoo.com	    	#*#
#*#									#*#
#*#      	MaDe In YeMeN			#*#
#*#									#*#
#*# Note: Don't change my copyright #*#
#*#  		 please , ok ? 			#*#
#*# 								#*#
#*# 								#*#
#*##*##*##*##*##*##*##*##*##*##*##*##*#
*/

// clear the screen
$uname = php_uname();
if(preg_match("/Linux/",$uname)){
// if OS = linux do this command	
	system("clear");
	} else {
// else do this command	
		system("cls");
		}
/////|| Variables go ||\\\\\\
$version = "v2.0";
$op_system = php_uname();
if(preg_match("/Linux/",$op_system)){
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
}else{
// no color in windows 
$white = "";
$black = "";
$yellow = "";
$orange = "";
$blue   = "";
$lblue  = "";
$cln    = "";
$green  = "";
$fgreen = "";
$red    = "";
$magenta = "";
$bluebg = "";
$lbluebg = "";
$greenbg = "";
$lgreenbg = "";
$yellowbg = "";
$lyellowbg = "";
$redbg = "";
$grey = "";
$cyan = "";
$bold   = "";
$nbold = "";
}
$end = $bold.$orange."-==============================================================================-"."\n";
echo $red.$bold."                                 __________"."\n";
echo "                              .~#########%%;~."."\n";
echo "                             /############%%;`\ "."\n";
echo "                            /######/~\/~\%%;,;,\ "."\n";
echo "                           |#######\    /;;;;.,.|"."\n";
echo "                           |#########\/%;;;;;.,.|"."\n";
echo "                  XX       |##/~~\####%;;;/~~\;,|       XX"."\n";
echo "                XX..X      |#|  o  \##%;/  o  |.|      X..XX"."\n";
echo $white."              XX.....X     |##\____/##%;\____/.,|     X.....XX"."\n";
echo "         XXXXX.....XX      \#########/\;;;;;;,, /      XX.....XXXXX"."\n";
echo "        X |......XX%,.@      \######/%;\;;;;, /      @#%,XX......| X"."\n";
echo "        X |.....X  @#%,.@     |######%%;;;;,.|     @#%,.@  X.....| X"."\n";
echo "        X  \...X     @#%,.@   |# # # % ; ; ;,|   @#%,.@     X.../  X"."\n";
echo "         X# \.X        @#%,.@                  @#%,.@        X./  #"."\n";
echo $black."          ##  X          @#%,.@              @#%,.@          X   #"."\n";
echo "        , '# #X            @#%,.@          @#%,.@            X ##"."\n";
echo "           `###X             @#%,.@      @#%,.@             ####'"."\n";
echo "          . ' ###              @#%.,@  @#%,.@              ###`'"."\n";
echo "            . ';'                @#%.@#%,.@                ;'` ' ."."\n";
echo "              '                    @#%,.@                   ,."."\n";
echo $yellow.$bold."                         -============================-                "."\n";
echo $yellow.$bold."                          | Name   ".$green."|".$red." BadMod bot $version ".$yellow."|                "."\n";
echo $yellow.$bold."                          | Author ".$green."|".$blue." MrSqar        ".$yellow."  |                "."\n";
echo $yellow.$bold."                          | From   ".$green."|".$white." Yemen           ".$yellow."|                "."\n";
echo $yellow.$bold."                          | Team   ".$green."|".$green." SysteM_CrasherS ".$yellow."|                "."\n";
echo $yellow.$bold."                         -============================-                "."\n";
echo $yellow.$bold."\n       		              STARTING  "; 
sleep(1);print $red.".";sleep(1);print $white.".";sleep(1);print $black.".\n";
echo $end;
?>
