<html>
<head><meta charset="utf-8">
</head>
<body>
<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php while ($row = $stmt->fetch()) 
{ ?>
        username:  <?=$row ["username"]?><br>
        ชื่อสมาชิก: <?=$row ["name"]?><br>
        ที่อยู่: <?=$row ["address"]?><br>
        อีเมล์: <?=$row ["email"]?><br>
        
        <?php echo "<a href='edit.php?username=" . $row ["username"] . "'>แก้ไข</a>";?>
<?php echo "<hr>";?>
<?php } ?>
</body>
</html>