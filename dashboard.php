<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<script>
  alert('Successfully logged in. Welcome to the dashboard.');
</script>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

    <?php echo "<h1> Welcome ".$_SESSION['username']." To Dashboard.<br>
    You will be redirected shortly. </h1>" ?>
    <h2><a href="logout.php">Logout</a></h2>

</body>
</html>