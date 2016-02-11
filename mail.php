<meta http-equiv='refresh' content='20; url=http://cdls.by/lp/server/index.html'>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['tel'])) {$tel = $_POST['tel']; if ($tel == '') {unset($tel);}}
 
if (isset($tel)){ //Если эти поля заполнены то..
 
$address = "v.karasik@cd-life.by"; // куда отправлять
$mes = "Серверное оборудование"; // тема письма
$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nИмя:$name\r\nТелефон:$tel\r\n","From: v.karasik@cd-life.by\r\n"); // тело письма
if ($send == 'true') 
{echo "";} // здесь может быть сообщение пользователю, если его нет, и выводится тело документа
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Заполните пожалуйста все поля отмеченные звездочкой"; //здесь выводится сообщение, если поля name и tel не заполнены
}
?>
<body class="thank">
	<div>
		<h1>Спасибо! В ближайшее время с вами свяжется наш менеджер!</h1>
		<p>Кроме серверов мы предлагаем широкий выбор решений для бизнеса</p>
		<a class="catalog" href="http://cdls.by/">Ознакомится с каталогом</a><br/>
		<a class="back" href="http://cdls.by/lp/server/index.html">Вернуться назад</a>
	</div>
</body>