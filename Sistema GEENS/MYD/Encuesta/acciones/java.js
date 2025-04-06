let contraseña = document.getElementById('contraseña');
let togglecontraseña = document.getElementById('toggle');


        function showHide(){
            if(contraseña.type === 'contraseña'){
                contraseña.setAttribute('type', 'text');
                togglecontraseña.classList.add('hide');
            }
            else{
                contraseña.setAttribute('type', 'contraseña');
                togglecontraseña.classList.remove('hide');
            }
        }