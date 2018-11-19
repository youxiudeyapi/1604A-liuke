<?php 
header("content-type:text/html;charset=utf8");
$pdo = new PDO('mysql:host=localhost;dbname=seven','root','root');
$sql = "SELECT * FROM goodss";
$data=$pdo->query($sql)->fetchAll();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<marquee behavior="" direction="">学习使我快乐！</marquee>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<td>编号</td>
			<td>商品名称</td>
			<td>商品分类</td>
			<td>销售价格</td>
			<td>商品库存</td>
		</tr>
		<?php foreach ($data as $key => $value): ?>
		<tr>
			<td><?=$value['goods_id']?></td>
			<td><?=$value['goods_name']?></td>
			<td><?=$value['goods_type']?></td>
			<td><?=$value['goods_prace']?></td>
			<td><?=$value['goods_stock']?></td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>