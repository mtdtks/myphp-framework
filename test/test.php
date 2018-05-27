<?php
/**
 * Created by IntelliJ IDEA.
 * User: lbtmplz
 * Date: 2018/05/27
 * Time: 22:05
 */

require 'testClass.php';


$c = new testClass();
$c->register();

$br = '<BR>';


echo 'test' . $br . 'test';
function test()
{
    $br = '<BR>';

    echo 'test.' . $br . 'test';

}
//register();

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type"
    content="text/html; charset=utf-8" />
  <title>Index Page</title>
  <style>
h1 { font-size:18pt; font-weight:bold; color:gray; }
    body { font-size:13pt; color:gray; margin:5px; 25px; }
  </style>
</head>
<body>
  <h1>Hello!</h1>
  <p>this is sample web page.</p>
  <?php test(); ?>


</body>
</html>
