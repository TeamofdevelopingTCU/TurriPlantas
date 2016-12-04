function validateFields() {
    regularExpChar = new RegExp(/^[a-zA-Z\s]*$/);
    var name = document.getElementById('Name');
    var telephone = document.getElementById('Telephone');
    var email = document.getElementById('Email');
    var comment = document.getElementById('Comments');
    
    if (name.value.length > 2) {
        if (!regularExpChar.test(name.value)) {
            document.getElementById('error1').innerHTML = "*Solo caracteres";
            document.getElementById('error1').style.visibility = "visible";
            flag = 1;
        } else {
            document.getElementById('error1').style.visibility = "hidden";
        }
    } else {
        document.getElementById('error1').style.visibility = "visible";
        document.getElementById('error1').innerHTML = "*Espacio vacío o inferior al mínimo";
        flag = 1;
    }
    if(telephone.value.length < 2){
        document.getElementById('error2').style.visibility = "visible";
        document.getElementById('error2').innerHTML = "*Espacio vacío o inferior al mínimo";
        flag = 1;
    }else{
        document.getElementById('error2').style.visibility = "hidden";
    }
    if(email.value.length < 2){
        document.getElementById('error3').style.visibility = "visible";
        document.getElementById('error3').innerHTML = "*Espacio vacío o inferior al mínimo";
        flag = 1;
    }else{
         document.getElementById('error3').style.visibility = "hidden";
    }
    if(comment.value.length < 2){
        document.getElementById('error4').style.visibility = "visible";
        document.getElementById('error4').innerHTML = "*Espacio vacío o inferior al mínimo";
        flag = 1;
    }else{
         document.getElementById('error4').style.visibility = "hidden";
    }
    
    if (flag === 1) {
        return false;
    }
    return true;
}
