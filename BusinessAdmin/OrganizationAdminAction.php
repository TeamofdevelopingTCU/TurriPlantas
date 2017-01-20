<?php
include '../BusinessAdmin/OrganizationAdminBusiness.php';
$option = $_POST['option'];

if($option == 'history'){
    
    $historyEs = $_POST['txtHistoryEs'];
    $historyEn = $_POST['txtHistoryEn'];
    
    if(strlen($historyEs) > 10 && strlen($historyEn) >= 10){
        
        $arrayHistory = array($historyEs,$historyEn);
        $organization = new OrganizationAdminBusiness();
        $result = $organization->updateHistoryOrganization($arrayHistory);
                
        if($result == true){
             header('location: ../PresentationAdmin/adminInformationHistory.php?success=success');
        }else{
             header('location: ../PresentationAdmin/adminInformationHistory.php?errorUpdate=errorUpdate');
        }       
        
    }else{
         header('location: ../PresentationAdmin/adminInformationHistory.php?errorData=error');
    }
}else if($option == 'mission'){
    
    $missionEs = $_POST['txtMissionEs'];
    $missionEn = $_POST['txtMissionEn'];
    
    if(strlen($missionEs) > 10 && strlen($missionEn) >= 10){
        
        $arrayMission = array($missionEs,$missionEn);
        $organization = new OrganizationAdminBusiness();
        $result = $organization->updateMissionOrganization($arrayMission);
                
        if($result == true){
             header('location: ../PresentationAdmin/adminInformationMission.php?success=success');
        }else{
             header('location: ../PresentationAdmin/adminInformationMission.php?errorUpdate=errorUpdate');
        }       
        
    }else{
         header('location: ../PresentationAdmin/adminInformationMission.php?errorData=error');
    }
}else if($option == 'view'){
    
    $viewEs = $_POST['txtViewEs'];
    $viewEn = $_POST['txtViewEn'];
    
    if(strlen($viewEs) > 10 && strlen($viewEn) >= 10){
        
        $arrayView = array($viewEs,$viewEn);
        $organization = new OrganizationAdminBusiness();
        $result = $organization->updateViewOrganization($arrayView);
                
        if($result == true){
             header('location: ../PresentationAdmin/adminInformationView.php?success=success');
        }else{
             header('location: ../PresentationAdmin/adminInformationView.php?errorUpdate=errorUpdate');
        }       
        
    }else{
         header('location: ../PresentationAdmin/adminInformationView.php?errorData=error');
    }
}else if($option == 'values'){
    
    $count = $_POST['count'];
    $arrayValuesEs = [];
    $arrayValuesEn = [];
    for($i = 0; $i < $count; $i++){
        $nameEs = 'txtValueEs'.$i;
        $nameEn = 'txtValueEn'.$i;
        $valueEs = $_POST[$nameEs];
        $valueEn = $_POST[$nameEn];
        array_push($arrayValuesEs, $valueEs);
        array_push($arrayValuesEn, $valueEn);
    }
    $valuesEs = "";   
    $max =  sizeof($arrayValuesEs);
    for($j = 0; $j < $max; $j++){        
        if($j < $max-1){
            $valuesEs .= $arrayValuesEs[$j].';';
            $valuesEn .= $arrayValuesEn[$j].';';
        }else{
            $valuesEs .= $arrayValuesEs[$j];
            $valuesEn .= $arrayValuesEn[$j];
        }   
    }
    
    $arrayValues = array($valuesEs,$valuesEn);
    
    if(strlen($valuesEs) > 5 && strlen($valuesEn) > 5){
        
        $arrayView = array($viewEs,$viewEn);
        $organization = new OrganizationAdminBusiness();
        $result = $organization->updateValuesOrganization($arrayValues);
                
        if($result == true){
             header('location: ../PresentationAdmin/adminInformationValues.php?success=success');
        }else{
             header('location: ../PresentationAdmin/adminInformationValues.php?errorUpdate=errorUpdate');
        }       
        
    }else{
         header('location: ../PresentationAdmin/adminInformationValues.php?errorData=error');
    }
}else if($option == 'characteristics'){
    
    $characteristicsEs = $_POST['txtCharacteristicsEs'];
    $characteristicsEn = $_POST['txtCharacteristicsEn'];
    
    if(strlen($characteristicsEs) > 10 && strlen($characteristicsEn) > 10){
        
        $arrayCharacteristics = array($characteristicsEs,$characteristicsEn);
        $organization = new OrganizationAdminBusiness();
        $result = $organization->updateCharacteristicsOrganization($arrayCharacteristics);
                
        if($result == true){
             header('location: ../PresentationAdmin/adminInformationCharacteristics.php?success=success');
        }else{
             header('location: ../PresentationAdmin/adminInformationCharacteristics.php?errorUpdate=errorUpdate');
        }       
        
    }else{
         header('location: ../PresentationAdmin/adminInformationCharacteristics.php?errorData=error');
    }
}

