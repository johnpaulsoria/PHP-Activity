<link rel="stylesheet" href="style.css">
<?php
    require_once('function.php');

    if(isset($_POST['create'])){
    $fullname = $_POST['fullname'];
	$gender = $_POST['gender'];
	$sql = "INSERT INTO phpacts (fullname, gender) VALUES(?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$fullname, $gender]);
	}
?>


<form action="index.php" method="post">
    <div class="main">
	<h1>USER INFORMATION</h1>
    <label for="fullname">Full Name</label><br>
    <input type="text" name="fullname" class="input" required><br><br>

    <label>Gender</label><br>
    
    <label for="gender">Male</label>
    <input type="radio" name="gender" value="Male" checked>
    
    <label for="gender">Female</label>
    <input type="radio" name="gender" value="Female" checked><br><br>
    
    <input type="submit" name="create" class="btn" value="Submit Form">
    </div>
</form>