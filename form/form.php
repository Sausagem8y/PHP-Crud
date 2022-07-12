<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>

<form action="process_form.php" method="post">
    <input name="user">

    <input name="password" type="password">

    <button>Send</button>

</form>
    
</body>
</html>