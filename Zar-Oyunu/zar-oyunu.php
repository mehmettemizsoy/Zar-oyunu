<?php 
session_start();
if(isset($_SESSION['isim1'])){
    
}

?>
<!DOCTYPE html>
<html>
<head> 
    <title>Zar Oyunu</title>  
   <style type="text/css">
.ana{
    width: 1200px;
    padding: 5%;
}
.sol{
    width: 200px; height: 400px; float: left;
}
.orta{
    width: 800px; height: 400px; float: left;
}
.sag{
    width: 200px; height: 400px; float: right;
}

.btn{
    height: 40px;
    width: 80px;
    background-color: mediumseagreen;
    border: 0px solid;
    border-radius: 6px;
}

.btn:hover{
    background-color: red;
    opacity: 0.6;
}
#sol
{
    float: left;
    width: 50%;
    height: 100%;
    background: red;
}
#sag 
{
    float: left;
    width: 50%;
    height: 100%;
    background:blue;
    
}
body{
    background-color: lightgrey;
}
fieldset{
background-color: darkgrey;
width: 50%;
border: 1px solid;
border-radius: 8px;

}
legend{
    border: 2px solid;
    border-radius: 6px;
    background-color: white;
    font-family: sans-serif;
}
   </style> 

</head>
<body>

<div class="ana">
<?php
$zar1=rand(1,6);
$zar2=rand(1,6);
$isim1=$_SESSION['isim1'];
$isim2=$_SESSION['isim2'];

?>

<div class="sol">

<center><font color="darkgreen">Yeşil Taraf</font>
<fieldset stlye="height: 100px;">  <br>

    İsim : <?php echo $isim1; ?>
    Attığı Zar: <?php echo $zar1;
    
?>

</fieldset> </center>


</div>
<div class="orta" align="center">
		<fieldset>
		<form action="" method="post">
			<input class="btn" type="submit" value="Zar At" name="zar">&nbsp;&nbsp;
			<input class="btn" style="background-color: darkred;" type="submit" value="Çıkış" name="cıkıs">
		 	<?php 
		 	if (isset($_POST['cıkıs'])) { 
		 		session_destroy();
		 		header("Location:index.php");
		 	}
		 	 ?>
			<br><br>
			
<?php 

			
			if (isset($_POST['zar'])) {
				
				echo "<img src='img/$zar1.png' height='150' width='150'>"."&nbsp;";
				echo "<img src='img/$zar2.png' height='150' width='150'><br><br>";
				if ($zar1>$zar2) { 
					echo "<font color='darkgreen'>"."TEBRİKLER ".$isim1." Siz Kazandınız.. "."</font>";
				}elseif ($zar2>$zar1) {
					echo "<font color='darkred'>"."TEBRİKLER ".$isim2." Siz Kazandınız.. "."</font>";
				}
				else{
					echo "<font color='black'>"."Üzgünüm Beraber Kaldınız "."</font>";
				}
			}

		
			 ?>
		</form>
		</fieldset>
		<?php 

		echo "<br>";
		

		 ?>
	</div>





</div>


<div class="sag">

<center><font color="darkred">Kırmızı Taraf</font>
<fieldset style="height:100px;"> <br>   
İsim: <?php echo $isim2; ?> <br> <br>
Attığı Zar : <?php  echo $zar2; ?>


</fieldset> </center>


</div>

</div>

</body>


</html>













