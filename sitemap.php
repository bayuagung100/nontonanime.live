<?php
include 'config/func.php';
$id=$_GET['num'];
$serve = $_SERVER['HTTP_HOST'];
$string = keywo(''.$spath.'/'.$id.'.xml');
// Remove the colon ":" in the <xxx:yyy> to be <xxxyyy>

$string = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $string);

$string = str_replace("https://$dpath", "http://$serve/nonton", $string);

$string = str_replace("nonton/</loc>", "</loc>", $string);

$string = str_replace("nonton/genres</loc>", "</loc>", $string);

$xml = simplexml_load_string($string);
//print_r ($xml);
header('Content-type: text/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($xml->url as $val) {
        $url = $val->loc;

        $url = str_replace("nonton/genres", "genre", $url);
        $url = str_replace("nonton/anime", "anime", $url);
        $url = str_replace("nonton/anime-ongoing", "anime-ongoing", $url);
        $url = str_replace("nonton/popular-series", "popular-series", $url);
        $url = str_replace("nonton/sample-page", "", $url);
        $url = str_replace("anime-list", "", $url);
        $url = str_replace("nonton/movie-list", "", $url);

        $url = str_replace("nonton/category/uncategorized", "", $url);
        $url = str_replace("&", "&amp;", $url);
        $url = str_replace("https://animeindo.net", "https://nontonanime.live", $url);
        $url = explode(".html", $url);
        $url = $url[0];
        echo $url;
        $date = $val->lastmod;
        $freq = $val->changefreq;
        $pri = $val->priority;
        echo '<url>
        <loc>'.$url.'</loc>
        <lastmod>'.date("Y-m-d").'</lastmod>
    </url>';
    

}
echo '</urlset>';
// Output

?>