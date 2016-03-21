

	function fijarMenuSuperior(){
		var altura = $('.navbar-static-top').offset().top;
		$(window).on('scroll',function(){
			if($(window).scrollTop() > altura ){
				$('.navbar').addClass('menu-fixed');
			}else{
				$('.navbar').removeClass('menu-fixed');
			}
		}); 
	}
	
	function generarPopover(){
		$("#loginPopover").popover({
		    html : true, 
		    content: function() {
		      return $('#divLoginPopover').html();
		    },
		    animation: true,
		   
		});
		
		
	}

	function cerrarPopover(){

			$('#cerrarPopover').click(function(){
				alert('hola');
			});
		
	}

	function eventoRegistro(){

		$(document).on("click", ".boton-registro", function(){
			registro();
	    })

	}

	function eventoInicio(){
		$('#eventoInicio').click(function(){
			inicio();
		});
	}

	var registro = function() {
    	$.ajax({
    	    // la URL para la petición
    	    url : 'registro.php',
    	 
    	   // la información a enviar
    	   // (también es posible utilizar una cadena de datos)
			   //  data : { id : 123 },
    	 
    	   // especifica si será una petición POST o GET
    	    type : 'GET',
    	 
    	   // el tipo de información que se espera de respuesta
			   // dataType : 'json',
    	 
    	    // código a ejecutar si la petición es satisfactoria;
    	    // la respuesta es pasada como argumento a la función
    	    success : function(result){
			      	$('#container').html(result);
        	},
    	 
    	    // código a ejecutar si la petición falla;
    	    // son pasados como argumentos a la función
    	    // el objeto de la petición en crudo y código de estatus de la petición
    	    error : function(xhr, status) {
    	        alert('Disculpe, existió un problema');
    	    },
    	 
    	    // código a ejecutar sin importar si la petición falló o no
    	    complete : function(xhr, status) {
    	    	$("#loginPopover").click();
    	    }
    	});
    }

    var inicio = function() {
    	$.ajax({
    	    // la URL para la petición
    	    url : 'inicio.php',
    	 
    	   // la información a enviar
    	   // (también es posible utilizar una cadena de datos)
			   //  data : { id : 123 },
    	 
    	   // especifica si será una petición POST o GET
    	    type : 'GET',
    	 
    	   // el tipo de información que se espera de respuesta
			   // dataType : 'json',
    	 
    	    // código a ejecutar si la petición es satisfactoria;
    	    // la respuesta es pasada como argumento a la función
    	    success : function(result){
			      	$('#container').html(result);
        	},
    	 
    	    // código a ejecutar si la petición falla;
    	    // son pasados como argumentos a la función
    	    // el objeto de la petición en crudo y código de estatus de la petición
    	    error : function(xhr, status) {
    	        alert('Disculpe, existió un problema');
    	    },
    	 
    	    // código a ejecutar sin importar si la petición falló o no
    	    complete : function(xhr, status) {
    	    	
    	    }
    	});
	}
