function validar(value, inputName){
    if(value.trim() === ''){
        swal("Campo vacío", `El campo ${inputName} esta vacío.`, "error");
        return false;
    }
    return true;
}