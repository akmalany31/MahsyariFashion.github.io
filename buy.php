<!DOCTYPE html>
<html>
	<head><div class="wrapper">
		<title> MahSyar'i Fashion : Happiness Is Yours</title>
		<img src="MahSyar'i Fashion.png" width="1195" height="640"></a>
		<style type="text/css">
		body {
				color: #964B00;
				background-color: bg.png;
				background-position: center;
				background-image: url('bg5.png');
				font-family: Comic Sans MS;
				margin: 0px;}
		h3, h2{
				color: #964B00;
				font-family: Comic Sans MS;}
		.link:hover{
				color: red;}
		.link:link{
				color: brown;}
		.link:active{
				color: green;}
		.link:visited{
				background: yellow;}
		nav {
				color: #ffffff;
				background-color: #FFA07A;	
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
		.wrapper {
				width: 1195px;
				margin: 20px auto;
				border: 2px solid #964B00;
				background-color: #FFEFD5;}
		.courses {
				float: left;
				width: 820px;
				border-right: 1px solid #eeeeee;
				border-left: 2px solid #FFA07A;
				border-right: 2px solid #FFA07A;}	
		courses {
				float: right;
				width: 780px;
				border-right: 1px solid #eeeeee;}
		.sidebar {
				float: left;
				width: 190px}
		.element{
				text-align:center;
        		width: 820px;}
		footer {
				clear: both;
				font-family: Comic Sans MS;
				color: #ffffff;
				background-color: #FFA07A;	
				height: 120px;}
		</style>
		</head>
	<body>
			<header>
			<p align="center"><marquee direction=left scrolldelay=32><font color="964B00"><br>Welcome To MahSyar'i Fashion : Happiness Is Yours</marquee></font></p>
				<nav><center>
					<ul>
						<li><a href="h1.html">HOME</a></li>
						<li><a href="h2.html">PROFILE</a></li>
						<li><a href="h3.html">CONTACT</a></li>
						<li><a href="tutorial.html">HOW TO BUY</a></li>
					</ul>
				</nav>
			</header>
			<aside>	
				<section class="sidebar">
					<br><h3><center>Kategori</h3><center>
						<ul>
							<li><DIV Align="Left"><a class="link" href="h4.html">   Top </a><br>
							<li><DIV Align="Left"><a class="link" href="h4.1.html"> Skrit </a><br>
							<li><DIV Align="Left"><a class="link" href="h4.2.html"> Long Dress </a><br>	
						</ul>
				</section>
			</aside>
			<section class="courses">
			<h2><p align="center">Data Pembelian</p></font></h2>
<table align="center">
<?php
	echo "<tr><td>Nama<td>: ".$_POST["nama"];
	echo "<tr><td>Nama Produk<td>: ".$_POST["produk"];
	echo "<tr><td>Harga<td>: ".$_POST["harga"];
	echo "<tr><td>Jumlah<td>: ".$_POST["jumlah"];
	if($_POST["kurir"] == 1){
		echo "<tr><td>Ongkos Kirim<td>: JNE, Rp 28.000 (2-4 hari)";
	}
	elseif ($_POST["kurir"] == 2) {
		echo "<tr><td>Ongkos Kirim<td>: JNT, Rp 25.000 (3-4 hari)";
	}
	else{
		echo "<tr><td>Ongkos Kirim<td>: MahSyar'i Express, Rp 20.000 (4-6 hari)";
	}
	echo "<tr><td>Total Harga <td> : ".$_POST["tharga"];
	echo "<tr><td>E-mail<td>: ".$_POST["email"];
	echo "<tr><td>Telepon/Handphone<td>: ".$_POST["nohp"];
	echo "<tr><td>Alamat Lengkap<td>: ".$_POST["alamat"];
	echo "<tr><td>Kode Pos<td>: ".$_POST["kodepos"];
?>
</table>
<br><br> <center><b><blockquote><font size=4>Pembayaran Adalah Total Harga Keseluruhan.<br>Transfer Pembayaran:</b><br><br>
<table>
	<tr><td align="center">
	<tr><td align="center"><font size=3>BNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align="center"><font size=3>BJB
	<tr><td align="center"><font size=3>084559799&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align="center"><font size=3>09912421112</tr>
	<tr><td align="center"><font size=3>Annisa Hukmu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <td align="center"><font size=3>Annisa Hukmu
</table>
	<br><blockquote><p>Terima kasih Telah Berbelanja di MahSyar'i Fashion.<br>Silahkan Tunggu Konfirmasi Pesanan Melalui E-mail Anda.<br><br><br><br><br>
</td>
</content>
</table>	
</section>
			<aside>
				<section class=".courses">
					<br><center><h3>Rekomendasi</h3>
					<a href="h5.2.html">
						<img src="atasan2.jpg"width=8.8% height=2.5%><br><br>
						<a href="h5.12.html">
						<img src="rok2.jpg"width=8.8% height=2.5%><br><br>
						<a href="h5.18.html">
						<img src="gamis2.jpg"width=8.8% height=2.5%> <br><br></a>
				</section>
			</aside>
			<footer><center><br>
				Copyright &copy; 2020 MahSyar'i Fashion : Toko Online Baju Muslim dan Busana Muslim<br>
				Bandung - Jawa Barat<br>
				INDONESIA</center><br></td>
			</footer>
		</div>
	</body>
</html>