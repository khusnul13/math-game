<?php
session_start();
if($_SESSION['lives'] > 0){
    echo $_SESSION['lives']; 
    header("Location: soal.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Math Game</title>
</head>
<body align = center>
	<center>
    <!-- =================================================================== -->
	<form action = "" method = "post" style="width:50%;">
		<fieldset>
			<legend>Math Game</legend>
                <div class="form-group">
                    Hello, <?php echo $_SESSION['name']; ?>… Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.</p>
                    Score : <?php echo $_SESSION['score']; ?></p>
                </div>        
                <div class="form-group">
                    <a href="index.php" class="btn btn-info">Main Lagi</a>
                </div>
        </fieldset>
	</form>
    <!-- =================================================================== -->    
	</center>
</body>
</html>