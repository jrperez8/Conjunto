//const btnConfirmar = document.getElementById('confirmar')

const total_anual = 1440000
const valor_cuota = 120000
var total_pagos = 0

function Enero(){ 
    
    var estEnero = document.getElementById('enero').value
    if (estEnero == 1 ){
        var pagoEnero = valor_cuota    
        
        alert("dentro de Enero")   
    } else if (estEnero == 2 || estEnero == 3){
        var pagoEnero = 0
    }    
    
    return pagoEnero

}

function Febrero (){

    var estFebrero = document.getElementById('febrero').value
    if (estFebrero == 1){
        var pagoFebrero = valor_cuota
        alert("dentro de febrero") 
    } else if (estFebrero == 2 || estFebrero == 3){
        var pagoFebrero = 0
    }

    return pagoFebrero
}

function Marzo (){

    var estMarzo = document.getElementById('marzo').value
    if (estMarzo == 1){
        var pagoMarzo = valor_cuota
        alert("dentro de marzo") 
    } else if (estMarzo == 2 || estMarzo == 3){
        var pagoMarzo = 0
    }

    return pagoMarzo
}

function Abril (){

    var estAbril = document.getElementById('abril').value
    if (estAbril == 1){
        var pagoAbril = valor_cuota
        alert("dentro de abril") 
    } else if (estAbril == 2 || estAbril == 3){
        var pagoAbril = 0
    }

    return pagoAbril
}

function Mayo (){

    var estMayo = document.getElementById('mayo').value
    if (estMayo == 1){
        var pagoMayo = valor_cuota
        alert("dentro de mayo") 
    } else if (estMayo == 2 || estMayo == 3){
        var pagoMayo = 0
    }

    return pagoMayo
}

function Junio (){

    var estJunio = document.getElementById('junio').value
    if (estJunio == 1){
        var pagoJunio = valor_cuota
        alert("dentro de junio") 
    } else if (estJunio == 2 || estJunio == 3){
        var pagoJunio = 0
    }

    return pagoJunio
}

function resultado (){
    total_pagos = Enero() + Febrero() + Marzo() + Abril () + Mayo () + Junio ()
    alert("Total pagado: $ " + total_pagos)
}

   


 
  
    






