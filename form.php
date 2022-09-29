
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>


<div class="formbox">
    <?php



echo "Merci " . $_POST['first_name'] . " " . $_POST['last_name'] . " de nous avoir contacté à propos de " .  $_POST['subject'] . ".<br>";
echo "Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['telephone'] . " dans les plus brefs délais pour traiter votre demande:<br><br>";
echo '<div class="formMsg">';
echo $_POST['user_message'];
echo "</div>";


?>
    </div>




</body>

</html>