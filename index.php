<?php
require_once('functions.php');
?>
 
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
</head>
<body>
<?php

$employees[0]['salary'] = 2147483647; 
$employees[0]['type'] = 'student';
$employees[1]['salary'] = 2147483647; 
$employees[1]['type'] = 'student';
$employees[2]['salary'] = 2147483647; 
$employees[2]['type'] = 'student';
$employees[3]['salary'] = 2147483647; 
$employees[3]['type'] = 'corona';
$employees[4]['salary'] = 2147483647; 
$employees[4]['type'] = 'corona';
$employees[5]['salary'] = 2147483647; 
$employees[5]['type'] = '';
$employees[6]['salary'] = 2147483647; 
$employees[6]['type'] = '';
$employees[7]['salary'] = 2147483647; 
$employees[7]['type'] = 'corona';
$employees[8]['salary'] = 2147483647; 
$employees[8]['type'] = 'corona';
$employees[9]['salary'] = 2147483647; 
$employees[9]['type'] = 'corona';

?>

<h1>Jeff Bezos je můj šéf</h1>

<?php 

    for ($i=0; $i < 10; $i++) { ?>
        
        <p>
            Hrubá mzda&nbsp<?= $employees[$i]['type'] ?>: <?= $employees[$i]['salary'] ?>
        </p>
        
        <p>
            Čistá mzda normal: <?= cleanSalaryComplex($employees[$i]['salary']);?>
        </p>

        <p>
            Čistá mzda student: <?= cleanSalaryComplex($employees[$i]['salary'], 'student');?>
        </p>

        <p>
            Čistá mzda normal během corony: <?= cleanSalaryComplex($employees[$i]['salary'], 'corona');?>
        </p> 

<?php } ?>

</body>
</html>
