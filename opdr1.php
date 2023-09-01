<?php
date_default_timezone_set("Europe/Amsterdam");

$today = date("j F Y");

$monthDay = date("dS");

$weekDay = date("l");
$weekNumber = date("wS");

$month = date("F");
$monthTotal = date("t");

$year = date("Y");
$leapyear = date("L");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "Het is vandaag: $today <br>";
echo "Vandaag is het de $monthDay dag van het jaar <br>";
echo "$weekDay is de $weekNumber dag van de week <br>";
echo "De maand $month heeft in totaal $monthTotal dagen. <br>";

if ($leapyear = 0) {
    echo "Het jaar $year is geen schrikkeljaar.";
} else {
    echo "Het jaar $year is een schrikkeljaar.";
};

?>
</body>
</html>