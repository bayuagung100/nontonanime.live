<?php

/*
* Script Fungsi Untuk Grabbing Content
*/

// Fungsi Untuk Mengambil Semua Kontent
// Dari Website Yang Mau Kita Ambil
// Kode HTML nya

function grab2($url){$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch,CURLOPT_ENCODING,'gzip');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$header[] = "Accept-Language: en";
$header[] = "User-Agent: Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en) AppleWebKit/534.1+ (KHTML, Like Gecko) Version/6.0.0.141 Mobile Safari/534.1+";
$header[] = "Pragma: no-cache";
$header[] = "Cache-Control: no-cache";
$header[] = "Accept-Encoding: gzip,deflate";
$header[] = "Content-Encoding: gzip";
$header[] = "Content-Encoding: deflate";
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$load = curl_exec($ch);
curl_close($ch);
return $load;
}


function opera($url){$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch,CURLOPT_ENCODING,'gzip');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$header[] = "Accept-Language: en";
$header[] = "User-Agent: Opera/9.80 (J2ME/MIDP; Opera Mini/4.2 19.42.55/19.892; U; en) Presto/2.5.25";
$header[] = "Pragma: no-cache";
$header[] = "Cache-Control: no-cache";
$header[] = "Accept-Encoding: gzip,deflate";
$header[] = "Content-Encoding: gzip";
$header[] = "Content-Encoding: deflate";
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$load = curl_exec($ch);
curl_close($ch);
return $load;}


function grab($url){$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch,CURLOPT_ENCODING,'gzip');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$header[] = "Accept-Language: en";
$header[] = "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3
";
$header[] = "Pragma: no-cache";
$header[] = "Cache-Control: no-cache";
$header[] = "Accept-Encoding: gzip,deflate";
$header[] = "Content-Encoding: gzip";
$header[] = "Content-Encoding: deflate";
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$load = curl_exec($ch);
curl_close($ch);
return $load;}

function nokia($url){$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch,CURLOPT_ENCODING,'gzip');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$header[] = "Accept-Language: en";
$header[] = "User-Agent: Nokia6020/2.0 (04.90) Profile/MIDP-2.0 Cofiguration/CLDC-1.1";
$header[] = "Pragma: no-cache";
$header[] = "Cache-Control: no-cache";
$header[] = "Accept-Encoding: gzip,deflate";
$header[] = "Content-Encoding: gzip";
$header[] = "Content-Encoding: deflate";
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$load = curl_exec($ch);
curl_close($ch);
return $load;}

// Fungsi Untuk Mengambil Ukuran
// Suatu File Dalam Bytes
function ukuranbytes($url) {
$data = get_headers($url, true);
if(isset($data['Content-Length']))
return (int)$data['Content-Length'];
}

// Format Untuk Mengubah
// Waktu Video YouTube
function waktuyt($duration) {
$duration = str_replace('PT', '', $duration);
$duration = str_replace('H', 'Hour ', $duration);
$duration = str_replace('M', 'Min ', $duration);
$duration = str_replace('S', 'Sec', $duration);
return $duration;
}

// Fungsi Untuk Mengubah Tanggal YouTube
function tanggalyt($date) {
$date = substr($date,0,10);
$date = explode('-',$date);
$mn = date('F',mktime(0,0,0,$date[1]));
$dates = ''.$date[2].' '.$mn.' '.$date[0].'';
return $dates;
}


// Fungsi Untuk Mengubah Ukuran
// Bytes Menjadi KB, MB, GB dll
function ukuran($size) {
$filesizename=array(" Bytes"," KB"," MB"," GB"," TB"," PB"," EB"," ZB"," YB");
return $size ? round($size/pow(1024,($i=floor(log($size,1024)))),2).$filesizename[$i] : '0 Bytes';
}

// Fungsi Untuk Mengambil Kontent
// Dengan Batasan Awal Dan Akhir
// Funsgi Ini Menggunakan Explode
function potong($content,$start,$end) {
$ro = explode($start, $content);
$ru = explode($end, $ro[1]);
return $ru[0];
}

// Fungsi Untuk Menghilangkan Karakter Tertentu
// Hanya A-Z, a-z, 1-9
// Mereplace Spasi Menjadi Strip
function bersih($q) {
$q = strip_tags($q);
$q = preg_replace('/[^A-Za-z0-9_\s-]/','',$q);
$q = str_replace(' ', '-', $q);
return $q;
}
function bersihkecil($q) {
$q = strip_tags($q);
$q = preg_replace('/[^A-Za-z0-9_\s-]/','',$q);
$q = strtolower($q);
$q = str_replace(' ', '-', $q);
return $q;
}
function bersihbesar($q) {
$q = strip_tags($q);
$q = preg_replace('/[^A-Za-z0-9_\s-]/','',$q);
$q = strtoupper($q);
$q = str_replace(' ', '-', $q);
return $q;
}
function bersihbesarawal($q) {
$q = strip_tags($q);
$q = preg_replace('/[^A-Za-z0-9_\s-]/','',$q);
$q = ucwords($q);
$q = str_replace(' ', '-', $q);
return $q;
}
function bersihbesarpertama($q) {
$q = strip_tags($q);
$q = preg_replace('/[^A-Za-z0-9_\s-]/','',$q);
$q = ucfirst($q);
$q = str_replace(' ', '-', $q);
return $q;
}

// Fungsi Untuk Menghapus Strip Menjadi Spasi
function kotor($q) {
$q = str_replace('-', ' ', $q);
return $q;
}
function kotorkecil($q) {
$q = str_replace('-', ' ', $q);
$q = strtolower($q);
return $q;
}
function kotorbesar($q) {
$q = str_replace('-', ' ', $q);
$q = strtoupper($q);
return $q;
}
function kotorbesarawal($q) {
$q = str_replace('-', ' ', $q);
$q = ucwords($q);
return $q;
}
function kotorbesarpertama($q) {
$q = str_replace('-', ' ', $q);
$q = ucfirst($q);
return $q;
}

function keywo($url) {
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
$hasil = str_replace(urldecode('%0A'), '', $hasil);
curl_close($data);
return $hasil;
} 
$spath ='http://animeindo.moe/';
$dpath ='https://nontonanime.live/';
$fp = 'https://www.facebook.com/youtubemusikclub/' ; 
$namaFp ='Nonton Anime 21';

$prodomain = 'stafaband.one'; 
$jsavelink = 'https://yourjavascript.com/013735911014/devgrab.js';
?>