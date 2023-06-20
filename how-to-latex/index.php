<?php
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>LaTeX開発環境を整える -Claud LaTeX-</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <style>
        body {
            margin:50px;
        }

        table,td {
            border: solid 1px;
            border-collapse: collapse;
            padding: 2px 10px;
        }

        th{
            border: solid 1px;
            border-bottom: double;
            border-collapse: collapse;
            padding: 2px 10px;
            text-align: center;
            font-weight: bold;
        }

        pre {
            padding: 2px;
            border: solid 1px #d3d3d3;
            font-size: 100%;
            width: auto;
            font-family: 'MS Gothic', monospace;
        }

        pre.pre1 {
            padding: 2px;
            border: solid 2px #86F9C5;
            font-size: 100%;
            width: auto;
            font-family: 'MS Gothic', monospace;
        }

        h2 {
            width: 800px;
            background: #D6FF58;
            padding: 7px;
        }

        h3 {
            width: 800px;
            background: #86F9C5;
            padding: 5px;
        }

        p {
            text-indent: 1em;
        }


    </style>
</head>
<body>
<h1>LaTeX開発環境を整える -Claud LaTeX-</h1>
<ol>
    <li><a href="#Introduction">はじめに</a></li>
    <li><a href="#Signup">「Claud LaTeX」のアカウント登録</a></li>
    <li><a href="#Download7Zip">7-zipのダウンロード</a></li>
    <li><a href="#Install7Zip">7-zipのインストール</a></li>
    <li><a href="#ExtractPleiades">Pleiadesの解凍</a></li>
    <li><a href="#RunEclipse">eclipseの起動</a></li>
</ol>
<hr />
<ol>
    <h2 id="Introduction"><li>はじめに</li></h2>
    <p>
        Windowsのローカル上にLaTeXの開発環境を整えるのはめんどくさいので、簡単にブラウザ上で動く「<a href="https://cloudlatex.io/" target="_blank" rel="noopener noreferrer">Claud LaTeX</a>」というサービスを使います。
    </p>
    <h2 id="Signup"><li>「Claud LaTeX」のアカウント登録</li></h2>
    <p>はじめに、Claud LaTeXのアカウント登録をします。<a href="https://cloudlatex.io/" target="_blank" rel="noopener noreferrer">Claud LaTeXのトップページ</a>へアクセスしてください。</p>
    <div style="text-align: center">
        <img src="images/01.png" width="800px" /><br />
        <caption>
            図1: Claud LaTeXのトップページ
        </caption>
    </div>
    <p>「アカウント登録」に行き、「Claud LaTeXのみ登録する」に進みます。</p>
    <div style="text-align: center">
        <img src="images/02.png" width="800px" /><br />
        <caption>
            図2: アカウント登録の選択
        </caption>
    </div>
    <p>
        次にJavaで開発できるバージョンのpleiadesを選択します．
        図3のようにWindows版でJavaが含まれているものを選択してください．
        これでダウンロードが始まるはずです．
    </p>
    <div style="text-align: center">
        <img src="images/03.png" width="500px" /><br />
        <caption>
            図3: Java版Pleiadesを選択
        </caption>
    </div>
    <h2 id="Download7Zip"><li>7-zipのダウンロード</li></h2>
    <p>次に7-zipをダウンロードします．
        このアプリケーションはzipファイルを解凍する時に用いられます．
        zipファイルを解凍するアプリケーションは数々ありますが，他のアプリケーションではうまくpleiadesを解凍できないことが知られています．
        理由はpleiadesのフォルダ階層が非常に深いため，7-zip以外の解凍アプリケーションでは正しく解凍できないというエラーが発生するためです．
        このためpleiadesの公式サイトではこの7-zipで解凍することを強く進めています．
    </p>
    <p>では7-zipのサイトへ行きましょう．図4のようにgoogleで7-zipと検索するともっとも最上位で見つかると思います．もしくは<a href="https://sevenzip.osdn.jp/">こちらのサイト</a>へアクセスしてください．</p>
    <div style="text-align: center">
        <img src="images/04.png" width="500px" /><br />
        <captio6n>
            図4: 7-zipの検索
            </caption>
    </div>
    <p>次に7-zipのバージョンを選択します．図5のように64ビットx64版を選択してください．</p>
    <div style="text-align: center">
        <img src="images/05.png" width="800px" /><br />
        <caption>
            図5: 7-zipのバージョンを選択
        </caption>
    </div>
    <h2 id="Install7Zip"><li>7-zipのインストール</li></h2>
    <p>次に7-zipをインストールしていきます．
        図6のようにダウンロードしたインストーラファイルをダブルクリックしてください．</p>
    <div style="text-align: center">
        <img src="images/06.png" width="300px" /><br />
        <caption>
            図6: 7-zipのインストーラを選択
        </caption>
    </div>
    <p>インストールに先立ち，ユーザアカウント制御の確認画面が現れます．
        図7のように，はいを選択してください．
    </p>
    <div style="text-align: center">
        <img src="images/07.png" width="500px" /><br />
        <caption>
            図7: ユーザアカウント制御画面
        </caption>
    </div>
    <p>7-zipのインストール先を指定します．
        図8ではデフォルトのままの様子を表しています．
        インストール先を指定後，Installボタンを押してください．
    </p>
    <div style="text-align: center">
        <img src="images/08.png" width="500px" /><br />
        <caption>
            図8: 7-zipのインストール先を選択
        </caption>
    </div>
    <p>7-zipのインストールが終わりますと図9のようになりますのでCloseボタンを押してください．</p>
    <div style="text-align: center">
        <img src="images/09.png" width="500px" /><br />
        <caption>
            図9: 7-zipのインストールが完了
        </caption>
    </div>
    <h2 id="ExtractPleiades"><li>Pleiadesの解凍</li></h2>
    <p>次にPleiadesの解凍を7-zipで行います．
        まずは図10のようにpleiadesの圧縮ファイルを右クリックしてください．
        そうすると現れるポップアップメニューの中から，その他のオプションを表示を選択します．
    </p>
    <div style="text-align: center">
        <img src="images/10.png" width="500px" /><br />
        <caption>
            図10: Pleiadesの圧縮ファイルを選択
        </caption>
    </div>
    <p>図11のように，さらに現れるポップアップメニューの中から7-zipを選択し，さらに展開を選択します．</p>
    <div style="text-align: center">
        <img src="images/11.png" width="800px" /><br />
        <caption>
            図11: Pleiadesの圧縮ファイルを7-zpiで展開
        </caption>
    </div>
    <p>次に解凍先を指定します．図12のように右上にあるボタンを選択します．</p>
    <div style="text-align: center">
        <img src="images/12.png" width="800px" /><br />
        <caption>
            図12: 解凍先を選択
        </caption>
    </div>
    <p>その結果現れる図13のようなフォルダセレクタにより，解凍先を指定します．
        ここではCドライブの直下を指定しています．
        このとき注意してほしいことは，前に述べたようにpleiadesのフォルダ階層は非常に深いため，<b>あまり深いところに解凍しないこと</b>が挙げられます．
        今回のように<b>どこかのドライブの直下に置くこと</b>をお勧めします．
    </p>
    <div style="text-align: center">
        <img src="images/13.png" width="500px" /><br />
        <caption>
            図13: Cドライブを選択
        </caption>
    </div>
    <p>
        図14のように解凍先を確認しましたらOKボタンを押します．
        これで回答が始まるはずです．
    </p>
    <div style="text-align: center">
        <img src="images/14.png" width="800px" /><br />
        <caption>
            図14: 解凍先を確認
        </caption>
    </div>
    <h2 id="RunEclipse"><li>eclipseの起動</li></h2>
    <p>図15では解凍されたフォルダを示しています．</p>
    <div style="text-align: center">
        <img src="images/15.png" width="500px" /><br />
        <caption>
            図15: 解凍されたpleiadesフォルダ
        </caption>
    </div>
    <p>eclipseの実行ファイルは図16に示す位置にあります．
        フォルダをだどって行き，eclipseの実行ファイルをダブルクリックしてください．
    </p>
    <div style="text-align: center">
        <img src="images/16.png" width="500px" /><br />
        <caption>
            図16: eclipseの実行ファイル
        </caption>
    </div>
    <p>スプラッシュ画面(アプリの起動時に現れる画面のこと)初回起動ではかなり時間(1分くらい?)がかかります．
        スプラッシュ画面ののち，図17のようにワークスペースの位置を指定でいるウィンドウが現れます．
        図17ではデフォルトのままになっています．
        ワークスペースを指定しましたら起動を押してください．
    </p>
    <div style="text-align: center">
        <img src="images/17.png" width="800px" /><br />
        <caption>
            図17: ワークスペースの確認と起動
        </caption>
    </div>
    <p>図18ではeclipseが起動した様子を表しています．
        以上の手順で日本語化され，加えてJavaの開発環境が整っているeclipseがインストールされます．</p>
    <div style="text-align: center">
        <img src="images/18.png" width="800px" /><br />
        <caption>
            図18: eclipseの起動後
        </caption>
    </div>
</ol>
</body>
</html>
