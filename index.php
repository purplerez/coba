<?php 
require "./inc/conf.php";
//require "./inc/func.php";
require "./inc/data.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Aplikasi Raport <?php echo  $skl['nama']; ?> </title>
	</head>
	<link rel=stylesheet type=text/css href="./css/bootstrap.css" />
	<style>
		body {
			//background : url('./images/bg01.png');
			color : black;
			background : #F2F2F2;
		}
	</style>
	<body>
	
		 <div align=center style="height : 300px; width : 450px; margin : 0 auto; margin-top : 50px;">
		<a href="options.php"><img src="./upload/<?php echo $skl['logo']; ?>" border=0 style="width:50%;" title="Klik untuk masuk ke Menu Sekolah"/></a>
			<?php if(isset($_GET['error'])) { ?>
			<div style="font : bold 13px Tahoma, Helvetica; color : red; padding : 7px;">
			<?php	$er = $_GET['error'];
					if ($er ==1) echo "Username / Password salah"; 
					else if ($er == 2) echo "Silahkan Pilih Menu Terlebih dahulu";
			?>
			</div>
			<?php		}
				?>
				
			
		</div>	
		<div align=center style="width : 100%; margin : 0 auto; color : #999; Font-size : 14pt; font-family : georgia;">
			<strong>Siapakah anda ? </strong>
				<div align=center style="padding-top : 20px;height : 120px; background : white;width : 100%; margin : 10px auto;">
					<center>
					<a href="" class="btn btn-primary" style="margin : 0 20px; width : 80px; font-size : 20pt;  height : 60px; padding-top : 35px;" >Siswa </a>
					
					<a href="" class="btn btn-primary" style="width : 80px; font-size : 20pt;  height : 60px; padding-top : 35px;" > Guru </a>
					</center>
					
				</div>
			</div>		
	</body>
</html>