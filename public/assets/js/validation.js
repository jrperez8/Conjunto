//const btnConfirmar = document.getElementById('confirmar')

const total_anual = 1440000
const valor_cuota = 120000
var total_pagos = 0

function Enero(){ 
    
    var estEnero = document.getElementById('enero').value
    if (estEnero == 1 ){
        var pagoEnero = valor_cuota    
        
        alert("Pago Enero")   
    } else if (estEnero == 2 || estEnero == 3){
        var pagoEnero = 0
    }    
    
    return pagoEnero

}

function Febrero (){

    var estFebrero = document.getElementById('febrero').value
    if (estFebrero == 1){
        var pagoFebrero = valor_cuota
        alert("Pago febrero") 
    } else if (estFebrero == 2 || estFebrero == 3){
        var pagoFebrero = 0
    }

    return pagoFebrero
}

function Marzo (){

    var estMarzo = document.getElementById('marzo').value
    if (estMarzo == 1){
        var pagoMarzo = valor_cuota
        alert("Pago marzo") 
    } else if (estMarzo == 2 || estMarzo == 3){
        var pagoMarzo = 0
    }

    return pagoMarzo
}

function Abril (){

    var estAbril = document.getElementById('abril').value
    if (estAbril == 1){
        var pagoAbril = valor_cuota
        alert("Pago abril") 
    } else if (estAbril == 2 || estAbril == 3){
        var pagoAbril = 0
    }

    return pagoAbril
}

function Mayo (){

    var estMayo = document.getElementById('mayo').value
    if (estMayo == 1){
        var pagoMayo = valor_cuota
        alert("Pago mayo") 
    } else if (estMayo == 2 || estMayo == 3){
        var pagoMayo = 0
    }

    return pagoMayo
}

function Junio (){

    var estJunio = document.getElementById('junio').value
    if (estJunio == 1){
        var pagoJunio = valor_cuota
        alert("Pago junio") 
    } else if (estJunio == 2 || estJunio == 3){
        var pagoJunio = 0
    }

    return pagoJunio
}

function Julio (){

    var estJulio = document.getElementById('julio').value
    if (estJulio == 1){
        var pagoJulio = valor_cuota
        alert("Pago julio") 
    } else if (estJulio == 2 || estJulio == 3){
        var pagoJulio = 0
    }

    return pagoJulio
}

function Agosto (){

    var estAgosto = document.getElementById('agosto').value
    if (estAgosto == 1){
        var pagoAgosto = valor_cuota
        alert("Pago agosto") 
    } else if (estAgosto == 2 || estAgosto == 3){
        var pagoAgosto = 0
    }

    return pagoAgosto
}

function Septiembre (){

    var estSeptiembre = document.getElementById('septiembre').value
    if (estSeptiembre == 1){
        var pagoSeptiembre = valor_cuota
        alert("Pago septiembre") 
    } else if (estSeptiembre == 2 || estSeptiembre == 3){
        var pagoSeptiembre = 0
    }

    return pagoSeptiembre
}

function Octubre (){

    var estOctubre = document.getElementById('octubre').value
    if (estOctubre == 1){
        var pagoOctubre = valor_cuota
        alert("Pago octubre") 
    } else if (estOctubre == 2 || estOctubre == 3){
        var pagoOctubre = 0
    }

    return pagoOctubre
}

function Noviembre (){

    var estNoviembre = document.getElementById('noviembre').value
    if (estNoviembre == 1){
        var pagoNoviembre = valor_cuota
        alert("Pago noviembre") 
    } else if (estNoviembre == 2 || estNoviembre == 3){
        var pagoNoviembre = 0
    }

    return pagoNoviembre
}

function Diciembre (){

    var estDiciembre = document.getElementById('diciembre').value
    if (estDiciembre == 1){
        var pagoDiciembre = valor_cuota
        alert("Pago diciembre") 
    } else if (estDiciembre == 2 || estDiciembre == 3){
        var pagoDiciembre = 0
    }

    return pagoDiciembre
}

function resultado (){
    total_pagos = Enero() + Febrero() + Marzo() + Abril () + Mayo () + Junio () + Julio () + Agosto () + Septiembre () + Octubre () + Noviembre () + Diciembre ()
    alert("Total pagado: $ " + total_pagos)
    saldo_restante = total_anual - total_pagos
    alert ("El Saldo restante por pagar es: $ " +saldo_restante)
}

   


 
  
    






