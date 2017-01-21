<?php

include '../BusinessAdmin/PlantAdminBusiness.php';

if (isset($_POST['optionUpdate'])) {

    $count = $_POST['count'];
    for ($i = 0; $i <= $count; $i++) {
        $idPlant = $_POST['id' . $i];
        $namePlantEs = $_POST['txtPlantEs' . $i];
        $namePlantEn = $_POST['txtPlantEn' . $i];
        $variety = $_POST['cbVarieties' . $i];

        $plantBusiness = new PlantAdminBusiness();
        $currentPlantEs = new Plant($idPlant, $namePlantEs, "", 1, $variety);
        $currentPlantEn = new Plant($idPlant, $namePlantEn, "", 1, $variety);
        $plants = array($currentPlantEs, $currentPlantEn);
        $result = $plantBusiness->updatePlants($plants);
        if ($result != true) {
            header('location: ../PresentationAdmin/adminInformationPlant.php?errorUpdate=errorUpdate');
        } else {
            header('location: ../PresentationAdmin/adminInformationPlant.php?success=success');
        }
    }
} else if (isset($_POST['optionDelete'])) {

    $idPlant = $_POST['idPlant'];
    $plantBusiness = new PlantAdminBusiness();
    $result = $plantBusiness->deletePlant($idPlant);
    if ($result == true) {
        header('location: ../PresentationAdmin/adminCreateDeletePlant.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeletePlant.php?errorDelete=error');
    }
} else if (isset($_POST['optionCreate'])) {

    if (strlen($_POST['txtNamePlantEs']) > 0 && strlen($_POST['txtNamePlantEn']) > 0 &&
            strlen($_POST['cbVarieties']) > 0) {

        $namePlantEs = $_POST['txtNamePlantEs'];
        $namePlantEn = $_POST['txtNamePlantEn'];
        $variety = $_POST['cbVarieties'];

        $arrayPlant = array($namePlantEs, $namePlantEn, $variety);
        $plantBusiness = new PlantAdminBusiness();
        $result = $plantBusiness->createPlant($arrayPlant);
        if ($result != true) {
            header('location: ../PresentationAdmin/adminCreateDeletePlant.php?errorCreate=error');
        } else {
            header('location: ../PresentationAdmin/adminCreateDeletePlant.php?successCreate=success');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeletePlant.php?error=error');
    }
}
