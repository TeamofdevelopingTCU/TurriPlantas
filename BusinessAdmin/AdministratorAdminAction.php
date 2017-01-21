<?php

include '../BusinessAdmin/AdministratorAdminBusiness.php';

if (isset($_POST['optionUpdate'])) {

    $count = $_POST['count'];
    for ($i = 0; $i <= $count; $i++) {
        $idAdmin = $_POST['idAdministrator' . $i];
        $name = $_POST['txtName' . $i];
        $email = $_POST['txtEmail' . $i];
        $userName = $_POST['txtUserName' . $i];
        $password = $_POST['password' . $i];

        $adminBusiness = new AdministratorAdminBusiness();
        $administrator = new Administrator($idAdmin, $name, $userName, $password, $email);
        $result = $adminBusiness->updateAdministrator($administrator);
        if ($result != true) {
            header('location: ../PresentationAdmin/adminInfomationAdministrator.php?errorUpdate=errorUpdate');
        } else {
            header('location: ../PresentationAdmin/adminInfomationAdministrator.php?success=success');
        }
    }
} else if (isset($_POST['optionDelete'])) {

    $idAdmin = $_POST['idAdministrator'];
    $adminB = new AdministratorAdminBusiness();
    $result = $adminB->deleteAdministrator($idAdmin);
    if ($result == true) {
        header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?errorDelete=error');
    }
} else if (isset($_POST['optionCreate'])) {

    if (strlen($_POST['txtName']) > 0 && strlen($_POST['txtEmail']) > 0 &&
            strlen($_POST['txtUserName']) > 0 && strlen($_POST['password']) > 0) {

        $name = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $userName = $_POST['txtUserName'];
        $password = $_POST['password'];

        $administrator = new Administrator(0, $name, $userName, $password, $email);
        $adminB = new AdministratorAdminBusiness();
        $result = $adminB->addAdministrator($administrator);
        if ($result != true) {
            header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?errorCreate=error');
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?successCreate=success');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?error=error');
    }
} else if (isset($_POST['login'])) {

    if (strlen($_POST['txtUser']) > 0 && strlen('txtPassword') > 0) {

        $userName = $_POST['txtUser'];
        $password = $_POST['txtPassword'];

        $adminB = new AdministratorAdminBusiness();
        $result = $adminB->login($userName, $password);

        if ($result == 1) {

            if (@session_start() == false) {
                session_start();
                $_SESSION['userName'] = $userName;
            } else {
                $_SESSION['userName'] = $userName;
            }

            header('location: ../PresentationAdmin/indexAdmin.php');
        } else {
            header('location: ../PresentationAdmin/login.php?errorCreate=error');
        }
    } else {
        header('location: ../PresentationAdmin/login.php.php?error=error');
    }
}
