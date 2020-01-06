<?php
include 'config/func.php';
$id=$_GET['id'];
$serve = $_SERVER['HTTP_HOST'];
$string = keywo(''.$spath.'/sitemap_index.xml');
// Remove the colon ":" in the <xxx:yyy> to be <xxxyyy>
$string = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $string);
$string = str_replace("https://$dpath", "http://$serve/sitemap", $string);

$xml = simplexml_load_string($string);
//print_r ($xml);
header('Content-type: text/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach ($xml->sitemap as $val) {
    $url = $val->loc;
    $url = str_replace("genres", "genre", $url);
    $url = str_replace("&", "&amp;", $url);
    $url = str_replace("https://animeindo.net", "https://nontonanime.live", $url);
    $date = $val->lastmod;
    $freq = $val->changefreq;
    $pri = $val->priority;
    echo '<sitemap>
		<loc>'.$url.'</loc>
		<lastmod>'.date("Y-m-d").'</lastmod>
	</sitemap>';
    

}
echo '</sitemapindex>';
// Output

?>