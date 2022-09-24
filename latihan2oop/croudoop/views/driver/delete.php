<?php

include 'app/controllers/drivercontroller.php';

$driver = new drivercontroller();

if (isset($_GET['id_driver'])) {
    $id_driver = $_GET['id_driver'];

$driver->delete($id_driver);

}

?>