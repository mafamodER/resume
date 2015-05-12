<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<title>Мое резюме</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>

<img align="center" class="img-rounded img-responsive" alt="Состав резюме" src="/img/dv001.jpeg">


<div class="table-responsive">
<table class="table table-hover" width="70%" border="0">
<caption align="center"><h1 class="text-center">Мое резюме</h1></caption>
	<td><b>Дата написания:</b></td>
	<td> 05.05.2015</td>
	<tr>
	<td class="active"><b>ФИО:</b></td>
	<td> <a class="btn btn-info btn-block" href="http://vk.com/s.agafonov" role="button">Агафонов Станислав Игоревич</a></td>
	</tr>
	<tr>
		<td><b>Дата рождения:</b></td>
		<td>12.11.1992</td>
	</tr>
	<tr>
		<td><b>Город проживания:</b></td>
		<td>Харьков</td>
	</tr>
	<tr>
		<td><b>Образование:</b></td>
		<td>Полное высшее</td>
	</tr>
	<tr>
		<td><b>Специальность:</b></td>
		<td>Компьютерные системы и сети</td>
	</tr>
	<tr>
		<td><b>Название учебного завидения:</b></td>
		<td>Харьковский Национальный Университет Радиоэлектроники</td>
	</tr>
	<tr>
		<td><b>Годы обучения:</b></td>
		<td>2009-2014</td>
	</tr>
	<tr>
		<td><b>Дополнительное образования:</b></td>
		<td>Компьютерная академия ШАГ(html,photoshop,3d max)<p>International House</td>
	</tr>
	

<?php
// Простой способ инициализации массива
$names[0]="Агафонов Станислав Игоревич";
$names[1]="12.11.1992";
$names[2]="Полное высшее";
$names[3]="Компьютерн системы и сети";
$names[4]="Харьковский Национальный Университет Радиоэлектроники";
$names[5]="2009-2014";
$names[6]="Компьютерная академия ШАГ, International House";
$names[7]="Харьков";
$names[8]="05.05.15";
?>


<div class="table-responsive">
<table class="table table-hover" width="70%" border="0">
<caption align="center"><h1 class="text-center">Мое резюме с использованием ассоциативного массива</h1></caption>
	<td><b>Дата написания:</b></td>
	<td><?php echo $names[8]?></td>
	<tr>
	<td class="active"><b>ФИО:</b></td>
	<td><?php echo $names[0]?></td>
	</tr>
	<tr>
		<td><b>Дата рождения:</b></td>
		<td><?php echo $names[1]?></td>
	</tr>
	<tr>
		<td><b>Город проживания:</b></td>
		<td><?php echo $names[7]?></td>
	</tr>
	<tr>
		<td><b>Образование:</b></td>
		<td><?php echo $names[2]?></td>
	</tr>
	<tr>
		<td><b>Специальность:</b></td>
		<td><?php echo $names[3]?></td>
	</tr>
	<tr>
		<td><b>Название учебного завидения:</b></td>
		<td><?php echo $names[4]?></td>
	</tr>
	<tr>
		<td><b>Годы обучения:</b></td>
		<td><?php echo $names[5]?></td>
	</tr>
	<tr>
		<td><b>Дополнительное образования:</b></td>
		<td><?php echo $names[6]?></td>
	</tr>
	<tr>
		<td><b>Желаемая должность:</b></td>
		<td>
<?php 
$name[11] = 'Станислав';
$letterArray = array('А', 'Е', 'Ё', 'И', 'О', 'У', 'Ы', 'Э', 'Ю', 'Я');
if (in_array($name[11], $letterArray)) {
 echo "Junior PHP";   // гласная
} else {
 echo "Intern PHP";   // согласная
}

?></td>
	</tr>


</table>
</div>




</body>

</html>