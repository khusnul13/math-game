<?php
session_start();
$a = rand(0,20);
$b = rand(0,20);
if($_SESSION['lives'] <= 0){
    echo $_SESSION['lives']; 
    header("Location: end.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Math Game</title>
</head>
<body align = center>
	<center>
        <form action = "" method = "post" style="width:50%;">
			<fieldset>
				<legend>Math Game</legend>
                    <div class="form-group">
                        Hallo <?php echo $_SESSION['name']; ?>, tetap semangat ya… you can do the best!!</p>
                        Lives : <?php echo $_SESSION['lives']; ?> | Score : <?php echo $_SESSION['score']; ?></p>
                    </div>
                    <div class="form-group">
                        Berapakah <?php echo $a; ?> + <?php echo $b; ?> =</label> <input class="form-control"  name="isi" placeholder="Masukkan Jawaban" type="number" required>
                        <input type="hidden" name="a" value="<?php echo $a; ?>">
                        <input type="hidden" name="b" value="<?php echo $b; ?>">
                    </div>
                    
                    <div class="form-group">
                        <p><button class="btn btn-info" name="jawab" type="submit" value="jawab">jawab!</button></p>
                    </div>
			</fieldset>
        </form>
	</center>
</body>
</html>
<?php 
echo $jawaban;
if($_POST['jawab']){
    if($_POST['isi'] == $_POST['a']+$_POST['b']){
        $_SESSION['score'] += 10;
        header("Location: nilai.php?result=success");
    }else{
        $_SESSION['lives'] -= 1;
        $_SESSION['score'] -= 2;
        if($_SESSION['lives'] > 0){
            header("Location: nilai.php?result=failed");
        }
        
    }
}
?>