
<?php
$pages = scandir('pages/');


if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages))
{
    $page = $_GET['page'];
}else{
    $page ='home';

}

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Aplication de tchate</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include 'body/topbar.php';


?>
        <div class="container">
         <?php
         include 'pages/'.$page.'.php';
         
         ?>





        </div>
</body>
</html>