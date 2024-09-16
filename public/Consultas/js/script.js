


// let datosForm = document.getElementById('form-citas').value

//     const obtNombre=document.getElementsByName('nombre');
//     const obtCedula=document.getElementsByName('cedula');
//     const obtTelefono=document.getElementsByName('telefono');
//     const obtCorreo=document.getElementsByName('correo');
//     const obtConsulta=document.getElementsByName('tipo_consulta');
//     const obtFecha=document.getElementsByName('fecha_consulta');
//     const obtMedico=document.getElementsByName('medico_asignado');

//     let validarForm = true;
//     function aceptarForm(){
//         if(inputNombre == ""){
//             validarForm = false;
//             console.log('Dato necesario');
//         }
    
//         if(validarForm){
//             document.getElementById('form-citas').style.display="none";
//             document.getElementById('consulta-exitosa').style.display="inline flex";
//             console.log("Ingresó a la funcion");
    
//         }
//     }
    
    

    

//     const inputNombre = obtNombre.value;
//     const inputCedula = obtCedula.value;
//     const inputTelefono = obtTelefono.value;
//     const inputCorreo = obtCorreo.value;
//     const inputConsulta = obtConsulta.value;
//     const inputFecha = obtFecha.value;
//     const inputMedico = obtMedico.value;

   



document.getElementById('form-citas').addEventListener('submit', function(event){
    event.preventDefault();

    const obtNombre=document.getElementsByName('nombre');
    const obtCedula=document.getElementsByName('cedula');
    const obtTelefono=document.getElementsByName('telefono');
    const obtCorreo=document.getElementsByName('correo');
    const obtConsulta=document.getElementsByName('tipo_consulta');
    const obtFecha=document.getElementsByName('fecha_consulta');
    const obtMedico=document.getElementsByName('medico_asignado');

    let validarForm = true;

    const inputNombre = obtNombre.value;
    const inputCedula = obtCedula.value;
    const inputTelefono = obtTelefono.value;
    const inputCorreo = obtCorreo.value;
    const inputConsulta = obtConsulta.value;
    const inputFecha = obtFecha.value;
    const inputMedico = obtMedico.value;

    if(inputNombre == ""){
        validarForm = false;
        console.log('Dato necesario');
    }

    if(validarForm){
        document.getElementById('form-citas').style.display="none";
        document.getElementById('consulta-exitosa').style.display="inline flex";
        console.log("Ingresó a la funcion");

    }
    
})

    



