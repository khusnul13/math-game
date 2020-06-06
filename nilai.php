<?php
session_start();
if($_GET['result'] == 'success'){
    $result = "Hallo ".$_SESSION['name']." Selamat jawaban Anda benar…";
} else if($_GET['result'] == 'failed'){
    $result = "Hallo ".$_SESSION['name']." Sayang jawaban Anda salah… tetap semangat ya !!!";
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
                    <?php echo $result; ?></p>
                    Lives : <?php echo $_SESSION['lives']; ?> | Score : <?php echo $_SESSION['score']; ?></p>
                </div>        
                <div class="form-group">
                    <a href="soal.php" class="btn btn-info">Soal Selanjutnya</a>
                </div>
		</fieldset>
	</form>
    <!-- =================================================================== -->
	</center>
</body>
</html>