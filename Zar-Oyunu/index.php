
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zar Oyunu</title>
    <style type="text/css">
#ana_div{
    height: 350px;
    width: 960px;
    margin-right: auto;
    margin-left: auto;
    background-color: darkgray;;
}
.div{
float:left;
display: inline-block;
height: 200px;
width: 450px;
margin: 10px;
color:#FFF;

}
.btn {
height: 40px;
width: 80px;
background-color: mediumseagreen;
border:0px solid;
border-radius: 6px;

}
.btn:hover{
background-color: red;
opacity: 0.6;

}
form{
    margin-top: 60px;
}
input{
    border:2px solid;
    border-radius: 4px;
    box-shadow: 3px 3px 3px #000;
}

    </style>
</head>
<body bgcolor="lightgray"> <br> <br> <br>
<center><h1>ZAR OYUNUNA HOŞGELDİNİZ</h1></center>
<div id="ana_div">
<div align="center" class="div" id="div"> <br>
<form method="POST">
<font color="black" face="tahoma">1.İSİM :</font> <input type="text" name="isim1" required> <br> <br> <br>
<font color="black" face="tahoma">2.İSİM :</font> <input type="text" name="isim2" required> <br> <br> <br>
<input class="btn" type="submit" value="BAŞLA" name="gonder">

</form>

</div>

<div class="div" id="div2">
<code>
<center><h1><u><font color="red">KURALLAR:</font></u></h1><br></center>
1.İlk önce oyuna başlamadan önce isimlerinizi yazınız...<br>
2.İlk isim solda ki zarı - ikinci isim ise sağdaki zarı temsil etmektedir...<br>
3.Başla butonuna bastıktan sonra oyun sayfasına yönlendirileceksiniz ve zar at butonuna basarak oyuna başlayacaksınız... <br>
4.En büyük sayı atan kazanır.<br>
5.Gelecek olan zar sayıları tamamen rastgeledir. Bol Şanslar. İyi Oyunlar... <br>

</code>



</div> <br> <br> <br>

<?php 
session_start();
if(isset($_POST['gonder'])){
    $isim1=$_POST['isim1'];
    $isim2=$_POST['isim2'];
    $_SESSION['isim1']=$isim1;
    $_SESSION['isim2']=$isim2;
    header("Location:zar-oyunu.php");
}





?>    







</body>
</html>