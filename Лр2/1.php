<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Трофимов Д.А.</title>
</head>
<body>
<?php
$name = $_POST['name'];
$email = $_POST['pass'];
$year = $_POST['year'];
$textarea = $_POST['textarea'];
if(isset($_POST["choose"]))
{
    $choose = $_POST["choose"];
}
if(isset($_POST["num"]))
{
    $num = $_POST["num"]; 
}
if(isset($_POST["pol"]))
{
    $pol = $_POST["pol"];
    
}
if(isset($_POST["day"]))
{
    $day = $_POST["day"];    
}
if(isset($_POST["month"]))
{
    $month = $_POST["month"];    
}

$aDoor = $_POST['comp'];

  $N = count($aDoor);

  
  for($i=0; $i < $N; $i++)
  {
   $comp= $aDoor[$i];
  }

if(isset($_FILES["file"]))
{
  $img = $_FILES["file"];
}
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("dimatrofimov51@gmail.com", "Заявка с сайта", "Имя:".$name. "\nПароль: ".$email. "\nВыбор получать спам или нет: ".$choose."\nКоличество писем: ".$num."\nПол: ".$pol."\nДата рожения: ".$day." ".$month." ".$year."\nВаши пожелания: ".$textarea."\nУвлечения: ".$comp ,"From: dimatrofimov51@gmail.com \r\n"))
 {     echo "Сообщение успешно отправлено";
} else {
    echo "При отправке сообщения возникли ошибки";
}?>
</body>
</html>
