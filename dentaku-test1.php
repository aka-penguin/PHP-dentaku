<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


 <title>電卓</title>

</head>
<body>
 
<form action="dentaku-test1.php" method="post">

 
<?php

if (isset($_POST ["iko-ru"])) {
 if($_POST ["keisan"] == "÷"){
 $_display = $_POST ["_sahen"] / $_POST ["_2keta"];
 echo '<input type="text" value=' .$_display.' name="_2keta">';
 }
 if($_POST ["keisan"] == "×"){
 $_display = $_POST ["_sahen"] * $_POST ["_2keta"];
 echo '<input type="text" value=' .$_display.' name="_2keta">';
 }
 
 if($_POST ["keisan"] == "－"){
 $_display = $_POST ["_sahen"] - $_POST ["_2keta"];
 echo '<input type="text" value=' .$_display.' name="_2keta">';
 }
 
 if($_POST ["keisan"] == "＋"){
 $_display = $_POST ["_sahen"] + $_POST ["_2keta"];
 echo '<input type="text" value=' .$_display.' name="_2keta">';
 }
}

else{

 if (isset($_POST ["keisan"])) {
 if (isset($_POST ["_sahen"])) {
 echo '<div id="sahen"><input type="text" value=' .$_POST ["_sahen"].' name="_sahen"></div>';
 echo '<div id="keisan"><input type="text" value=' .$_POST ["keisan"].' name="keisan"></div>';
 if (isset($_POST ["_2keta"])){
 $_display = $_POST ["_2keta"] . $_POST ["main"] ;
 echo '<input type="text" value=' .$_display.' name="_2keta">';
 }
 else {echo '<input type="text" value="' .$_POST ["main"].'" name="_2keta">';
 }
 }
 else{
 echo '<div id="keisan"><input type="text" value=' .$_POST ["_2keta"].' name="_sahen"></div>';
 echo '<input type="text" value=' .$_POST ["keisan"].' name="keisan">';
 }
 }

 else{
 if (isset($_POST ["main"])) {
 if (isset($_POST ["_2keta"])){
 $_display = $_POST ["_2keta"] . $_POST ["main"] ;
 echo '<input type="text" value=' .$_display.' name="_2keta">';
 //echo $_2keta; echo $_POST ["main"];//
 }
 else {
 echo '<input type="text" value="' .$_POST ["main"].'" name="_2keta">';
 }
 }
 
 else{
 echo '<input type="text" value="0" name="display">';
 }
 }
}

?>
<br>
 <input type="submit" value="CE" name="ce">
 <input type="submit" value="C" name="c">
 <input type="submit" value="BS" name="bs">
 <input type="submit" value="÷" name="keisan"> <br>
 <input type="submit" value="7" name="main">
 <input type="submit" value="8" name="main">
 <input type="submit" value="9" name="main">
 <input type="submit" value="×" name="keisan"> <br>
 <input type="submit" value="4" name="main">
 <input type="submit" value="5" name="main">
 <input type="submit" value="6" name="main">
 <input type="submit" value="－" name="keisan"> <br>
 <input type="submit" value="1" name="main">
 <input type="submit" value="2" name="main">
 <input type="submit" value="3" name="main">
 <input type="submit" value="＋" name="keisan"> <br>
 <input type="submit" value="±" name="pm">
 <input type="submit" value="0" name="main">
 <input type="submit" value="." name="main">
 <input type="submit" value="＝" name="iko-ru">
</form>

</body>
</html>