<?php

header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');

/* NHKの地震情報をゴニョゴニョして貰う方法 by nirot1r */

$imageBaseURL = "http://www3.nhk.or.jp/sokuho/jishin/"; /* 1 */

$rawReportXML = mb_convert_encoding(file_get_contents("http://www3.nhk.or.jp/sokuho/jishin/data/JishinReport.xml"), "UTF-8", "SJIS"); /* 2 */

/* 3 */
$dump = explode("\n", $rawReportXML, 2);
$rawReportXML = '<?xml version="1.0" encoding="UTF-8" ?>' . $dump[1];
$xmlData = new SimpleXMLElement($rawReportXML);

$latestItemURL = $xmlData->record[0]->item[10]["url"]; /* 4 */

$rawLatestEarthquake = mb_convert_encoding(file_get_contents($latestItemURL), "UTF-8", "SJIS"); /* 5 */;

/* 3 */
$dump = explode("\n", $rawLatestEarthquake, 2);
$rawLatestEarthquake = '<?xml version="1.0" encoding="UTF-8" ?>' . $dump[1];
$earthquakeXMLData = new SimpleXMLElement($rawLatestEarthquake);

$earthquake = $earthquakeXMLData->Earthquake; /* 6 */

var_dump($rawLatestEarthquake);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1;">
    <title>NHKの地震情報をゴニョゴニョして貰う方法 by nirot1r</title>
</head>
<body>

<h1><?= $earthquake["Time"] ?>に発生した地震</h1>
<p>
    震源 : <?= $earthquake["Epicenter"] ?><br />
    震源の深さ : <?= $earthquake["Depth"] ?><br />
    マグニチュード : <?= $earthquake["Magnitude"] ?><br />
    最大震度 : <?= $earthquake["Intensity"] ?>
</p>

<h2>震度マップ(概況)</h2>
<img src="<?= $imageBaseURL . $earthquake->Detail ?>" />

<h2>震度マップ(拡大)</h2>
<img src="<?= $imageBaseURL . $earthquake->Local ?>" />

<h2>震度マップ(広域)</h2>
<img src="<?= $imageBaseURL . $earthquake->Global ?>" />

</body>
</html>
