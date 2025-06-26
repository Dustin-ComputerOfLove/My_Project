<?php 

$DefaultController = "";
if(isset($_GET['controller'])) {
    $DefaultController = $_GET['controller'];
}
$listControllers = ['default', 'user', 'product', 'order', 'cart', 'checkout'];

if(in_array($DefaultController,$listControllers)) {
    $DefaultController = ucfirst(strtolower($DefaultController));
}
if(!empty($DefaultController)) {
    $controllerFile = "" . strtolower($DefaultController) . "_controller.php";
    header('location: ' . $controllerFile);
}





