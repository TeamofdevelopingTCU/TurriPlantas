
function validateFieldsValues() {
    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ\s]*$/);
    var count = document.getElementById('countValues').value;

    for (var i = 0; i < count; i++) {

        var fieldValue = document.getElementById('txtValueEs' + i);
        if (fieldValue.value.length > 2) {
            if (!regularExpChar.test(fieldValue.value)) {
                document.getElementById('txtErrorEs' + i).innerHTML = "*Solo caracteres";
                document.getElementById('txtErrorEs' + i).style.visibility = "visible";
                return false;
            } else {
                document.getElementById('txtErrorEs' + i).style.visibility = "hidden";
            }
        } else {
            document.getElementById('txtErrorEs' + i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorEs' + i).style.visibility = "visible";
            return false;
        }

        var fieldValueEn = document.getElementById('txtValueEn' + i);
        if (fieldValueEn.value.length > 2) {
            if (!regularExpChar.test(fieldValueEn.value)) {
                document.getElementById('txtErrorEn' + i).innerHTML = "*Solo caracteres";
                document.getElementById('txtErrorEn' + i).style.visibility = "visible";
                return false;
            } else {
                document.getElementById('txtErrorEn' + i).style.visibility = "hidden";
            }
        } else {
            document.getElementById('txtErrorEn' + i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorEn' + i).style.visibility = "visible";
            return false;
        }

    }
    return true;
}

function validateFieldsProduct() {
    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ\s]*$/);
    var count = document.getElementById('countProducts').value;

    for (var i = 0; i < count; i++) {

        var fieldProductEs = document.getElementById('txtProductEs' + i);
        alert(fieldProductEs.value);
        if (fieldProductEs.value.length > 2) {
            if (!regularExpChar.test(fieldProductEs.value)) {
                document.getElementById('txtErrorEs' + i).innerHTML = "*Solo caracteres";
                document.getElementById('txtErrorEs' + i).style.visibility = "visible";
                return false;
            } else {
                document.getElementById('txtErrorEs' + i).style.visibility = "hidden";
            }
        } else {
            document.getElementById('txtErrorEs' + i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorEs' + i).style.visibility = "visible";
            return false;
        }

        var fieldProductEn = document.getElementById('txtProductEn' + i);
        if (fieldProductEn.value.length > 2) {
            if (!regularExpChar.test(fieldProductEn.value)) {
                document.getElementById('txtErrorEn' + i).innerHTML = "*Solo caracteres";
                document.getElementById('txtErrorEn' + i).style.visibility = "visible";
                return false;
            } else {
                document.getElementById('txtErrorEn' + i).style.visibility = "hidden";
            }
        } else {
            document.getElementById('txtErrorEn' + i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorEn' + i).style.visibility = "visible";
            return false;
        }

    }
    return true;
}


function validateFieldsNewProduct() {
    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ\s]*$/);

    var fieldNameProductEs = document.getElementById('txtNameProductEs');
    var fieldNameProductEn = document.getElementById('txtNameProductEn');

    if (fieldNameProductEs.value.length > 2) {
        if (!regularExpChar.test(fieldNameProductEs.value)) {
            document.getElementById('txtErrorEs').innerHTML = "*Solo caracteres";
            document.getElementById('txtErrorEs').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorEs').style.visibility = "hidden";
        }
    } else {
        document.getElementById('txtErrorEs').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEs').style.visibility = "visible";
        return false;
    }

    if (fieldNameProductEn.value.length > 2) {
        if (!regularExpChar.test(fieldNameProductEn.value)) {
            document.getElementById('txtErrorEn').innerHTML = "*Solo caracteres";
            document.getElementById('txtErrorEn').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorEn').style.visibility = "hidden";
        }
    } else {
        document.getElementById('txtErrorEn').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEn').style.visibility = "visible";
        return false;
    }

    return true;
}

function validateFieldsVariety() {
    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ\s]*$/);
    var count = document.getElementById('countVariety').value;

    for (var i = 0; i < count; i++) {

        var fieldProductEs = document.getElementById('txtVarietyEs' + i);
        alert(fieldProductEs.value);
        if (fieldProductEs.value.length > 2) {
            if (!regularExpChar.test(fieldProductEs.value)) {
                document.getElementById('txtErrorEs' + i).innerHTML = "*Solo caracteres";
                document.getElementById('txtErrorEs' + i).style.visibility = "visible";
                return false;
            } else {
                document.getElementById('txtErrorEs' + i).style.visibility = "hidden";
            }
        } else {
            document.getElementById('txtErrorEs' + i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorEs' + i).style.visibility = "visible";
            return false;
        }

        var fieldProductEn = document.getElementById('txtVarietyEn' + i);
        if (fieldProductEn.value.length > 2) {
            if (!regularExpChar.test(fieldProductEn.value)) {
                document.getElementById('txtErrorEn' + i).innerHTML = "*Solo caracteres";
                document.getElementById('txtErrorEn' + i).style.visibility = "visible";
                return false;
            } else {
                document.getElementById('txtErrorEn' + i).style.visibility = "hidden";
            }
        } else {
            document.getElementById('txtErrorEn' + i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorEn' + i).style.visibility = "visible";
            return false;
        }

    }
    return true;
}

function validateFieldsNewVariety() {
    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ_.,()\s]*$/);

    var fieldNameVarietyEs = document.getElementById('txtNameVarietyEs');
    var fieldNameVarietyEn = document.getElementById('txtNameVarietyEn');

    if (fieldNameVarietyEs.value.length > 2) {
        if (!regularExpChar.test(fieldNameVarietyEs.value)) {
            document.getElementById('txtErrorEs').innerHTML = "*Solo caracteres";
            document.getElementById('txtErrorEs').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorEs').style.visibility = "hidden";
        }
    } else {
        document.getElementById('txtErrorEs').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEs').style.visibility = "visible";
        return false;
    }

    if (fieldNameVarietyEn.value.length > 2) {
        if (!regularExpChar.test(fieldNameVarietyEn.value)) {
            document.getElementById('txtErrorEn').innerHTML = "*Solo caracteres";
            document.getElementById('txtErrorEn').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorEn').style.visibility = "hidden";
        }
    } else {
        document.getElementById('txtErrorEn').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEn').style.visibility = "visible";
        return false;
    }

    return true;
}


function validateFieldsPlant() {
    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ_.,()\s]*$/);
    var count = document.getElementById('countPlant').value;
    for (var i = 0; i < count; i++) {

        var fieldPlantEs = document.getElementById('txtPlantEs' + i);
        if (fieldPlantEs.value.length > 2) {
            if (!regularExpChar.test(fieldPlantEs.value)) {
                document.getElementById('txtErrorEs' + i).innerHTML = "*Solo caracteres";
                document.getElementById('txtErrorEs' + i).style.visibility = "visible";
                return false;
            } else {
                document.getElementById('txtErrorEs' + i).style.visibility = "hidden";
            }
        } else {
            document.getElementById('txtErrorEs' + i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorEs' + i).style.visibility = "visible";
            return false;
        }

        var fieldPlantEn = document.getElementById('txtPlantEn' + i);
        if (fieldPlantEn.value.length > 2) {
            if (!regularExpChar.test(fieldPlantEn.value)) {
                document.getElementById('txtErrorEn' + i).innerHTML = "*Solo caracteres";
                document.getElementById('txtErrorEn' + i).style.visibility = "visible";
                return false;
            } else {
                document.getElementById('txtErrorEn' + i).style.visibility = "hidden";
            }
        } else {
            document.getElementById('txtErrorEn' + i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorEn' + i).style.visibility = "visible";
            return false;
        }

    }
    return true;
}

function validateFieldsNewPlant() {
    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ_.,()\s]*$/);

    var fieldNamePlantEs = document.getElementById('txtNamePlantEs');
    var fieldNamePlantEn = document.getElementById('txtNamePlantEn');

    if (fieldNamePlantEs.value.length > 2) {
        if (!regularExpChar.test(fieldNamePlantEs.value)) {
            document.getElementById('txtErrorEs').innerHTML = "*Solo caracteres";
            document.getElementById('txtErrorEs').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorEs').style.visibility = "hidden";
        }
    } else {
        document.getElementById('txtErrorEs').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEs').style.visibility = "visible";
        return false;
    }

    if (fieldNamePlantEn.value.length > 2) {
        if (!regularExpChar.test(fieldNamePlantEn.value)) {
            document.getElementById('txtErrorEn').innerHTML = "*Solo caracteres";
            document.getElementById('txtErrorEn').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorEn').style.visibility = "hidden";
        }
    } else {
        document.getElementById('txtErrorEn').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEn').style.visibility = "visible";
        return false;
    }

    return true;
}

function validateNewFieldsAdministrator() {
    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ_.,()\s]*$/);

    var fieldName = document.getElementById('txtName');
    var fieldUserName = document.getElementById('txtUserName');
    var fieldPassword = document.getElementById('password');
    var fieldEmail = document.getElementById('txtEmail');

    if (fieldName.value.length > 2) {
        if (!regularExpChar.test(fieldName.value)) {
            document.getElementById('txtErrorName').innerHTML = "*Solo caracteres";
            document.getElementById('txtErrorName').style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorName').style.visibility = "hidden";
        }
    } else {
        document.getElementById('txtErrorName').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorName').style.visibility = "visible";
        return false;
    }

    if (fieldEmail.value.length < 2) {
        document.getElementById('txtErrorEmail').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEmail').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorEmail').style.visibility = "hidden";
    }
    if (fieldUserName.value.length < 2) {
        document.getElementById('txtErrorUserName').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorUserName').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorUserName').style.visibility = "hidden";
    }
    if (fieldPassword.value.length < 2) {
        document.getElementById('txtErrorPassword').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorPassword').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorPassword').style.visibility = "hidden";
    }


    return true;
}


function validateFieldsAdministrator() {
    regularExpChar = new RegExp(/^[a-zA-Z_áéíóúñ_.,()\s]*$/);
    var count = document.getElementById('countAdmin').value;

    for (var i = 0; i < count; i++) {
        var fieldName = document.getElementById('txtName'+i);
        var fieldUserName = document.getElementById('txtUserName'+i);
        var fieldPassword = document.getElementById('password'+i);
        var fieldEmail = document.getElementById('txtEmail'+i);

        if (fieldName.value.length > 2) {
            if (!regularExpChar.test(fieldName.value)) {
                document.getElementById('txtErrorName'+i).innerHTML = "*Solo caracteres";
                document.getElementById('txtErrorName'+i).style.visibility = "visible";
                return false;
            } else {
                document.getElementById('txtErrorName'+i).style.visibility = "hidden";
            }
        } else {
            document.getElementById('txtErrorName'+i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorName'+i).style.visibility = "visible";
            return false;
        }

        if (fieldEmail.value.length < 2) {
            document.getElementById('txtErrorEmail'+i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorEmail'+i).style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorEmail'+i).style.visibility = "hidden";
        }
        if (fieldUserName.value.length < 2) {
            document.getElementById('txtErrorUserName'+i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorUserName'+i).style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorUserName'+i).style.visibility = "hidden";
        }
        if (fieldPassword.value.length < 2) {
            document.getElementById('txtErrorPassword'+i).innerHTML = "*espacio vacío";
            document.getElementById('txtErrorPassword'+i).style.visibility = "visible";
            return false;
        } else {
            document.getElementById('txtErrorPassword'+i).style.visibility = "hidden";
        }
    }

    return true;
}

function validateFieldsHistory() {

    var fieldHistoryEs = document.getElementById('txtHistoryEs');
    var fieldHistoryEn = document.getElementById('txtHistoryEn');
 
    if (fieldHistoryEs.value.length < 2) {
        document.getElementById('txtErrorEs').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEs').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorEs').style.visibility = "hidden";
    }
    if (fieldHistoryEn.value.length < 2) {
        document.getElementById('txtErrorEn').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEn').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorEn').style.visibility = "hidden";
    }
    
    return true;
}

function validateFieldsMission() {

    var fieldMissionEs = document.getElementById('txtMissionEs');
    var fieldMissionEn = document.getElementById('txtMissionEn');
 
    if (fieldMissionEs.value.length < 2) {
        document.getElementById('txtErrorEs').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEs').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorEs').style.visibility = "hidden";
    }
    if (fieldMissionEn.value.length < 2) {
        document.getElementById('txtErrorEn').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEn').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorEn').style.visibility = "hidden";
    }
    return true;
}

function validateFieldsCharacteristics() {

    var fieldCharacteristicsEs = document.getElementById('txtCharacteristicsEs');
    var fieldCharacteristicsEn = document.getElementById('txtCharacteristicsEn');
 
    if (fieldCharacteristicsEs.value.length < 2) {
        document.getElementById('txtErrorEs').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorsEs').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorEs').style.visibility = "hidden";
    }
    if (fieldCharacteristicsEn.value.length < 2) {
        document.getElementById('txtErrorEn').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEn').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorEn').style.visibility = "hidden";
    }
    return true;
}



function validateFieldsView() {

    var fieldViewEs = document.getElementById('txtViewEs');
    var fieldViewEn = document.getElementById('txtViewEn');
 
    if (fieldViewEs.value.length < 2) {
        document.getElementById('txtErrorEs').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEs').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorEs').style.visibility = "hidden";
    }
    if (fieldViewEn.value.length < 2) {
        document.getElementById('txtErrorEn').innerHTML = "*espacio vacío";
        document.getElementById('txtErrorEn').style.visibility = "visible";
        return false;
    } else {
        document.getElementById('txtErrorEn').style.visibility = "hidden";
    }
    return true;
}