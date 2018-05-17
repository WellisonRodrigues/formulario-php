function enviardados() {

    var texto = document.getElementById("texto").value;
    var textoGrande = document.getElementById("texto_grande").value;
    var data = document.getElementById("data").value;

    // var data='789/99/09876';
    if (/[^a-z ]/.test(texto)) {
        alert("Campo texto deve conter somente letras minusculas e espaços");
        document.getElementById("texto").focus();
        return false;
    }
    if (texto.length > 144) {
        alert("Campo texto deve conter no maximo 144 caracteres");
        document.getElementById("texto").focus();
        return false;
    }
    if (/[^A-Z0-9 ]/.test(textoGrande)) {
        alert("Campo texto grande deve conter somente letras maiusculas,numeros e espaços");
        document.getElementById("texto_grande").focus();
        return false;
    }
    if (textoGrande.length > 255) {
        alert("Campo texto grande deve conter no maximo 255 caracteres");
        document.getElementById("texto_grande").focus();
        return false;
    }
}