<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>    
<body>
<?php


$stmt = $pdo->prepare("SELECT * FROM member");

$stmt->execute();

?>
<?php while ($row = $stmt->fetch()) : ?>



<h2><?=$row["name"]?></h2>
Username: <?=$row["username"]?><br>
ที่อยู่: <?=$row["address"]?> <br><br>
อีเมล: <?=$row["email"]?> <hr>
<?php endwhile; ?>
</div>

</body>
</html>