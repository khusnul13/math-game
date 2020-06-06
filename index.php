<?php
session_start();
if($_GET['index']=='login'){
    session_unset();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Math Game</title>
</head>
<body align = center>
	<center>
        <?php 
            if(!isset($_SESSION['email'])){
        ?>
        <!-- =================================================================== -->
			<form action = "" method = "post" style="width:50%;">
				<fieldset>
					<legend>Math Game</legend>
                        <div class="form-group">
                            <input class="form-control"  name="name" placeholder="Masukkan Nama" type="text" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Masukkan Email" type="email" required>
                        </div>
                        <div class="form-group">
                            <p><input id="start" class="btn btn-info" name="start" type="submit" value="START!"></p>
                        </div>
				</fieldset>
            </form>
        <!-- =================================================================== -->
        <?php
        } else {
        ?>
        <!-- =================================================================== -->
            <form action = "" method = "post" style="width:50%;">
				<fieldset>
					<legend>Math Game</legend>
                        <div class="form-group">
                            <p>Hallo <?php echo $_SESSION['name'] ?> , selamat datang kembali di permainan ini!!!</p>
                            <p>Bukan anda? <a class="primary" href="?index=login">(klik di sini)</a></p>
                        </div>
                        <div class="form-group">
                            <input id="start" class="btn btn-info" name="start" type="submit" value="START!">
                        </div>
				</fieldset>
            </form>
        <!-- =================================================================== -->
        <?php
        }
		?>
	</center>   
</body>
</html>
<?php

if(isset($_POST['start'])){
    if(!isset($_SESSION['email'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
    }
    $_SESSION['lives'] = 5;
    $_SESSION['score'] = 0;
    header('Location: soal.php');
}
?>

