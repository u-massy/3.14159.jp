<?php
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <?php /*<link rel="icon" href="/image/favicon.ico">*/?>
    <title>This site is 3.14159.jp</title>
    <style>
        *{
            transition: all 0.6s;
        }

        html {
            height: 100%;
        }

        body{
            font-family: 'Lato', sans-serif;
            color: #888;
            margin: 0;
        }

        #main{
            display: table;
            width: 100%;
            height: 100vh;
            text-align: center;
        }

        .fof{
            display: table-cell;
            vertical-align: middle;
            overflow:hidden;
        }

        .fof h1{
            font-size: 60px;
            display: inline-block;
            margin-top: -15px;
            padding-right: 12px;
            animation: type .5s alternate infinite;
        }
        .fof h2{
            font-size: 40px;
            padding-right: 12px;
        }

        @keyframes type{
            from{box-shadow: inset -3px 0 0 #888;}
            to{box-shadow: inset -3px 0 0 transparent;}
        }
    </style>
</head>
<body>
<div id="main">
    <div class="fof">
        <h2>This site is</h2>
        <h1>3.14159.jp</h1>
        <p>Contact: info(AT)3.14159.jp</p>
        <p>Replace (AT) with @</p>
</div>
</body>
</html>







