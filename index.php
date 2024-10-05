<?php
// Setăm un titlu și un conținut dinamic pentru pagina noastră
$title = "Pagina mea PHP";
$content = "Bine ai venit pe site-ul meu web!";

?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $content; ?></p>
</body>
</html>
