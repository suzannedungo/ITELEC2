<?php

require_once 'authentication/admin-class.php';

$admin = new ADMIN();
if(!$admin->isUserLoggedIn())
{
    $admin->redirect('../../');
}
$stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id" =>$_SESSION['adminSession']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/style.css">
</head>
<body>
    <div class="container">
    <h1 class="welcome"> WELCOME <?php echo $user_data['email']?></h1>
    
    <div class="fg">
        <button><a href="authentication/admin-class.php?admin_signout" class="bp">SIGN OUT</a></button>
    </div>

    <div class="jmc">
        <img src="../../src/img/jm.png" alt="jmc"width=250px height= 200px>
    </div>

        <p class="xmas"> Whenever I see...</p>
    </div>

</body>
</html>