
<?php
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

if(isset($_POST['submit'])) {
    $file = "data.json";
    $arr = array(
        'date'	=> date("Y-m-d H:i"),
        'fname'     => $_POST['fname'],
        'lname'    => $_POST['lname'],
        'contact'    => $_POST['contact'],
    );
    $json_string = json_encode($arr);
    file_put_contents("/var/www/data/".date("Ymd-Hi-").generate_string($permitted_chars,8).".json", $json_string);
#    echo $json_string;
}
?>
<!doctype html>
<html>
<head>
     <meta name="viewport" content="width=device-width">
     <meta name="viewport" content="initial-scale=1.0">
     <meta name="mobile-web-app-capable" content="yes">
     <meta name="apple-mobile-web-app-capable" content="yes" />
     <meta name="apple-mobile-web-app-status-bar-style" content="black" />
<style>
body {
	margin:20px;
	padding:0px;
	background-color: white;
	color: black;
}
body, div, td, p, button {
	font: 20px/1.4em Verdana, Geneva, Helvetica, sans-serif;
}
</style>
<title>Gästeregistrierung</title>
</head>
<body>
<h2><strong>Vielen Dank für Ihre Registrierung</strong></h2>
<p>
<a href="/">Klicken Sie hier um einen weiteren Gast zu registrieren.</a>

<p><strong>Informationen nach Art. 13 DSGVO &uuml;ber die Verarbeitung Ihrer personenbezogenen Daten finden Sie <a href="/dsgvo">hier.</a></strong></p>
</body>
