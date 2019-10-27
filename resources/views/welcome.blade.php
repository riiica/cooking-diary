<?php echo '<?xml version="1.0" encoding="Shift_JIS"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
@if(app('env') == 'production')
    <link href="{{ secure_asset('css/css.css') }}" rel="stylesheet">
@else
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
@endif
<title>ねこ好きSEのお料理日記</title>
</head>
<body>
<div id="pagebody">

	<!-- ヘッダ -->
	<div id="header"><h1><a href="index.html"><img src="{{ asset('images/catwalk.png') }}" alt="cat" width=50 height=50/>
	ねこ好きSEのお料理日記</a></h1></div>

	<!-- メインメニュー -->
	<ul id="menu">
		<li id="menu01"><a href="xxx.html">Home</a></li>
		<li id="menu02"><a href="xxx.html">お料理</a></li>
		<li id="menu03"><a href="xxx.html">スイーツ</a></li>
		<li id="menu04"><a href="xxx.html">パン</a></li>
		<li id="menu05"><a href="xxx.html">写真</a></li>
	</ul>

	<!-- サブメニュー（左カラム） -->
	<div id="submenu">
		<div id="submenu_header">作成月</div>
		<ul id="submenu_body">
			<li><a href="xxx.html">2019年11月</a></li>
			<li><a href="xxx.html">2019年10月</a></li>
		</ul>
	</div>

	<!-- コンテンツ（中央と右の2カラム） -->
	<div id="content">
		<!-- ニュース（中央カラム） -->
		<div id="news">
			<h2>ニュース</h2>
			<h3>お料理日記サイトがオープン！！</h3>
			<p>
			本サイト管理人のHanaCatです！
			作った料理の写真やレシピをアップしていきます^^
			今晩のおかずに困ったら是非参考にしてみてくださいね～
			</p>
			<p><img src="{{ asset('images/footStamp.png') }}" alt="cat" width=50 height=50/></p>
			<hr />
		</div>
		<!-- ピックアップ（右カラム） -->
		<div id="pickup">
			<h2>シチュエーション別</h2>
			<ul>
				<li><a href="xxx.html">お弁当の１品</a></li>
				<li><a href="xxx.html">普段のメイン料理</a></li>
				<li><a href="xxx.html">スープ</a></li>
				<li><a href="xxx.html">記念日料理</a></li>
				<li><a href="xxx.html">普段のスイーツ</a></li>
				<li><a href="xxx.html">手渡ししやすいスイーツ</a></li>
				<li><a href="xxx.html">バレンタイン用スイーツ</a></li>
			</ul>
		</div>
	</div>

	<!-- フッタ -->
	<div id="footer"><address><img src="{{ asset('images/tereruneko.png') }}" alt="cat" width=30 height=30/>
	<img src="{{ asset('images/tereruneko.png') }}" alt="cat" width=30 height=30/>
	<img src="{{ asset('images/tereruneko.png') }}" alt="cat" width=30 height=30/></address></div>

</div>
</body>
</html>
