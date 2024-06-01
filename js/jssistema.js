function mostrarOcultarContenido() { //PARA MOSTRAR LOS DEMAS JUEGOS AL MOMENTO DE DAR CLICK AL BOTON 
    var div = document.getElementById('div1');
    if (div.style.display === 'none') { //SI EL DOCUMENTO ESTA ESCONDIDO MUESTRA
      div.style.display = 'block'; //MUESTRA TODO EL CONTENIDO
    } else {    //SI NO ESTA ESCONDIDO ESTE DEBE ESTAR MOSTRANDO 
      div.style.display = 'none'; //OCULTA TODO EL CONTENIDO
    }
}

function mostrarVentana() { //PARA MOSTRAR EL MODAL QUE ES LO QUE HAY DENTRO DEL CARRITO
    var modal = document.getElementById("miModal"); //ESE MODAL LO PASAMOS A UNA VARIABLE PARA MANEJARLOS
    modal.style.display = "block"; //MOSTRAMOS EN PANTALLA EL MODAL EN BLOQUE
}

function cerrarVentana() { //PARA CERRAR EL MODAL CUANDO ESTE ABIERTO CON LA X 
    var modal = document.getElementById("miModal"); //ESE MODAL LO PASAMOS A UNA VARIABLE PARA MANEJARLOS
    modal.style.display = "none"; //CERRAMOS EL MODAL O LO DELCARAMOS COMO NULO PARA QUE NO LO MUESTRE
}

//VARIABLES PARA EL CARRITO
var carrito = []; //CREAMOS UN ARRGELO PARA CARRITO
var total = 0; //UN TOTAL QUE SERA LA SUMA DE LOS JUEGOS QUE AGREGAMOS AL CARRITO

//AGREGAR UN PRODUCTO AL CARRITO 
function agregarAlCarrito(nombre, precio) { //FUNCION PARA AGREGAR AL CARRITO EL NOMBRE Y PRECIO
    carrito.push({ nombre, precio });   //SE ENVIARA EL NOMBRE Y PRECIO DAL CARRITO
    total += precio;    //Y AL TOTAL SE VA A ACTUALIZAR DEPENDE DE LO QUE SE LE AGREGUE AL CARRITO

  //ACTUALIZAMOS SU INTERFAZ
    actualizarCarrito();
    
    //MOSTRAMOS UNA SEÑAL EN PANTALLA MAS EL NOMBRE DEL JUEGO
    alert('Producto agregado al carrito: ' + nombre);
}

//FUNCION DE VACIAR EL CARRITO
function vaciarCarrito() { //CUANDO PRESIONEMOS EL BOTON DE VACIAR CARRITO
    carrito = []; //LIMPIAMOS EL ARREGLO CARRITO
    total = 0;  //Y EL TOTAL LO LIMPIAMOS DANDOLE DE PARAMETRO 0

    //ACTUALIZAMOS SU INTERFAZ
    actualizarCarrito();
}

//FUCION DE REALIZAR LA COMPRA 
function realizarCompra() { //CUANDO PRESIONAMOS EL BOTON DE REALIZAR LA COMPRA 
    alert('Compra realizada con éxito. Total: $' + total.toFixed(2)); //MANDAMOS UNA ALERTA EN PANTALLA DE QUE LA COMPRA SE REALIZO CON EXITO Y MOSTRAMOS EL TOTAL
    vaciarCarrito(); //VACIAMOS EL CARRITO 
}

//FUNCION PARA ACTUALIZAR LA INTERFAZ DEL CARRITO
function actualizarCarrito() { 
    var cartItemsElement = document.getElementById('cart-items'); //DECLARAMOS UNA VARIABLE PARA CADA ELEMENTO
    var cartTotalElement = document.getElementById('cart-total'); //DECLARAMOS UNA VARIABLE PARA EL TOTAL DE ELEMTOS

    //LIMPIAMOS EL CONTENIDO ACTUAL DEL CARRITO 
    cartItemsElement.innerHTML = '';

    //ACTUALIZAMOS SU LISTA ACTUAL DEL CARRITO 
    carrito.forEach(function (producto) { //AL MOMENTO DE AGREGAR UN ELEMENTO AL CARRITO
      var li = document.createElement('li'); //DECLARAMOS UNA VARIABLE EN EL CUAL SERA UNA LISTA
      li.textContent = producto.nombre + ' - $' + producto.precio.toFixed(2); //AGREGAMOS LA LISTA DEL PRODUCTO EN EL CUAL TIENE NOMBRE Y SU PRECIO
      cartItemsElement.appendChild(li); 
    });

    //ACTUALIZAMOS EL TOTAL DEL CARRITO
    cartTotalElement.textContent = total.toFixed(2);
}