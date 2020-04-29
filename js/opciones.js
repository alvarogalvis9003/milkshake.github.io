(async() => {const {value: sedes} = await Swal.fire({
	title:"#QuedateEnCasa!",
   text:"Realiza tu pedido Vía WhatsApp",
   
   // html:
	icon:"info",
   // confirmButtonText:
  
   footer:'<a class="iconify" href="https://www.ubereats.com/co/cali/food-delivery/milkshake-caney/S0qZHF5wQ7eYob8lbEhYqQ"  data-icon="simple-icons:ubereats" data-inline="false"></a> ',
             
   
   // width:
   // padding:
   // background:
   // grow:
   backdrop:'true',
   // timer:
   // timerProgressBar:
   // toast:
   // position:
   allowOutsideClick:'true',
   allowEscapeKey:'true',
   allowEnterKey:'true',
   stopKeydownPropagation:'false',

	input:'select',
	inputPlaceholder:'Seleciona tu Sede',
    inputValue:'',
	inputOptions:{
		3174762749:'Milkshake Caney',
		3156854209:'Milkshake Perro',
		3116920160:'Milkshake Bogota',
		3175920160:'Milkshake Palmira',
		3175380208:'Milkshake la 70',
		3167566144:'Milkshake Envigado',
		3148431060:'Milkshake Refugio',
		3153288100:'Milkshake la flora',
		3183851004:'Milkshake Andes',
		3043312802:'Milkshake Calazans',
		3168375349:'Milkshake Bello',
		3014772078:'Milkshake Pereira',
		3206803367:'Milkshake Tulua',
      3044772517:'Milkshake Manizales',
      3104132319:'Milkshake Villa Colombia',
      3007712078:'Milkshake Floridablanca - Santander',
      3054855656:'Milkshake Barranquilla',
      3217579222:'San Antonio de Pereira - Antioquia',
      3043762197:'Popayan',
      3202535138:'Cerrito',
      3113957083:'Neiva',
		},
	
   
   //  customClass:
   // 	container:
   // 	popup:
   // 	header:
   // 	title:
   // 	closeButton:
   // 	icon:
   // 	image:
   // 	content:
   // 	input:
   // 	actions:
   // 	confirmButton:
   // 	cancelButton:
   // 	footer:	

   // showConfirmButton:
   // confirmButtonColor:
   // confirmButtonAriaLabel:

    showCancelButton:true,
   cancelButtonText:'Cancelar',
    cancelButtonColor:'#cb3234',
    cancelButtonAriaLabel:'Cancelar',
   
    buttonsStyling:true,
    showCloseButton:true,
   closeButtonAriaLabel:'Cerrar Alerta',


   imageUrl:"img/mani2.jpg",
   imageWidth:'600px',
   // imageHeight:
    imageAlt:'Mega Snickers',

});
if (sedes){
	Swal.fire({
		title: `Whatsapp ${sedes}`,
		text:"Tu Sabor Favorito Hecho Malteada",
		icon:"info",
		footer:'Reserva Para Tus Fechas Especiales',
		
	});

	}	
})()




