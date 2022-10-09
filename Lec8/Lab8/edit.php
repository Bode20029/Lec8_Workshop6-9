<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute(); 
$row = $stmt->fetch();
?>
<html>
<head><meta charset="utf-8">
</head>
<form action="update.php" method="post">
<h3>ชื่่อสมาชิก: <?=$row["username"]?> <input type="hidden" name="username" value=<?=$row["username"]?>></h3>
รหัสผ่าน : <input type="password" name="password"><br>
ชื่อ-สกุล : <input type="text" name="name"><br>
ที่อยู่ : <br>
<textarea name="address" rows="3" cols="40"></textarea><br>
เบอร์โทร: <input type="number" name="mobile"><br>
อีเมล: <input type="text" name="email"><br>

<input type="submit" value="แก้ไข">
</form>
</body>
</html>