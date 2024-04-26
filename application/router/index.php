<?php
// index.php

include 'SiswaController.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

$siswaController = new SiswaController();

switch ($action) {
    case 'process':
        $siswaController->processForm();
        break;
    default:
        $siswaController->showForm();
        break;
}
?>
