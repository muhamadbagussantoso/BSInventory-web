<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
</head>

<body>

    <ul>
    	<?php foreach ($result as $key => $value) :?>

	<li><?= $key?> </li>
	<li><?= $value->user_id ?></li>

<?php endforeach; ?>


</ul>

</body>
</html>
