<html>
<head>
<title>EduForm</title>
<style type="text/css">
    <?php include 'Bottone_abbassa_css.php';?>
</style>
</head>
<body>

<?php
$mittente=$_POST ['mit'];
$destinatario="francesco.corsaro.psi@gmail.com";
$oggetto="richiesta news-letter";
$corpo=$_POST['name'];
$mail_headers = "From:$mittente " .  " <" .  $mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();
mail($destinatario, $oggetto, $corpo, $mail_headers);




echo " <p>il messaggio è stato inviato correttamente <br /></p>";

echo"<a href=\"dsa3.php\"><button class=\"button\">Indietro</button></a>";

?>
</body>
</html>