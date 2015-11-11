 function GuardarSucursal()
        {
        	var id = $("#idSucursal").val();
        	var nombre=$("#nombreSucursal").val();
        	var provincia=$("#provincia").val();
        	var direccion=$("#direccion").val();
        	var localidad=$("#localidad").val();
        	
        	        	
        	
        	
        		var funcionAjax = $.ajax({url:"nexo.php", type:"post",
					data:
					{
						id:id,
						nom:nombre,
						pro:provincia,
						dire:direccion,
						loca:localidad,
						queHago:"GuardarSucursal"

				}
			});

        		funcionAjax.done(function(resultado){

						//console.log(resultado);						
						Mostrar('RegistrarSucursal');														
					});
						
							
					funcionAjax.fail(function(resultado){	
						alert("No se ha dado de alta");
		
					});	
        	
        	}


   function modificarSucursal(valor)
		{	
			Mostrar('RegistrarSucursal');
			 		
			
			var funcionAjax = $.ajax({
					url:"nexo.php", type:"POST",
					data:
					{
						queHago:"TraerSucursal",
						id:valor

					}
				});				


			   		funcionAjax.done(function(resultado){	

			  			var su = JSON.parse(resultado);
					
			 		 	$("#idSucursal").val(su.idSucursal);
			 		 	$("#nombreSucursal").val(su.nombre);
						$("#provincia").val(su.provincia);			 		 	
			 		 	$("#direccion").val(su.direccion);
			 		 	$("#localidad").val(su.localidad);	
			 		 	// if(inv.sexo == "F")
        //     					$('input:radio[name="sexo"][value="F"]').prop('checked', true);
       	// 					 else
        //     					$('input:radio[name="sexo"][value="M"]').prop('checked', true);				 		 			
			 		 		
								
			 		 	
						
												
					});
						
							
							
			 		funcionAjax.fail(function(resultado){	
			 			alert("No se ha modificado");
		
			 		});						
		}


  //  function borrarInvitado(valor)
		// {
		  	  
		//   var funcionAjax = $.ajax({ type:"post",url:"php/operaciones.php",
		// 			data:
		// 			{
		// 				queHago:"borrar",
		// 				id:valor

		// 			}
		// 		});

		// 			funcionAjax.done(function(resultado){

		// 				console.log(resultado);						
		// 				Mostrar('MostrarGrilla');														
		// 			});
						
							
		// 			funcionAjax.fail(function(resultado){	
		// 				alert("No se ha borrado");
		
		// 			});		 	
			
	 // 	}

	  function borrarUsuario(valor)
		{
		  	  
		  var funcionAjax = $.ajax({ 
		  	type:"post",
		  	url:"nexo.php",
			data:{
				queHago:"borrarUsuario",
				id:valor

					}
				});

					funcionAjax.done(function(resultado){

						console.log(resultado);		
						alert("Borrado correctamente");				
						Mostrar('MostrarGrilla');														
					});
						
							
					funcionAjax.fail(function(resultado){	
						alert("No se ha borrado");
		
					});		 	
			
	 	}


function modificarUsuario(valor)
		{	
			Mostrar('RegistrarUsuario');
			 		
			
			var funcionAjax = $.ajax({
					url:"nexo.php", type:"POST",
					data:
					{
						queHago:"TraerUsuario",
						id:valor

					}
				});
				


			   		funcionAjax.done(function(resultado){	

			  			var user = JSON.parse(resultado);
						
						alert(user.sexo);
			 		 	$("#idUsuario").val(user.id);
			 		 	$("#nombreUsuario").val(user.nombre);
						$("#mail").val(user.mail);		 								
			 		 	$("#contraseña").val(user.contraseña);
																		
					});
						
							
			 		funcionAjax.fail(function(resultado){	
			 			alert("No se ha modificado");
		
			 		});						
		}


 function GuardarUsuario()
        {
        	var id = $("#idUsuario").val();
        	var nombre=$("#nombreUsuario").val();
        	var mail=$("#mail").val();
        	var contra=$("#contraseña").val();
        
        	
        	        	
        	
        	
        	var funcionAjax = $.ajax({url:"nexo.php", type:"post",
					data:
					{
						id:id,
						nom: nombre,
						mail:mail,						
						contra: contra,
						queHago:"GuardarUsuario"

				}
			});

        		funcionAjax.done(function(resultado){

						console.log(resultado);						
						Mostrar('RegistrarUsuario');														
					});
						
							
					funcionAjax.fail(function(resultado){	
						alert("No se ha dado de alta");
		
					});	
        	
        	}

  function CambiarContraUsuario()
  {

  		var mail = $('#mail').val();
  		var contra = $('#contra').val();
  		var contra2 = $('#contraConfirmar').val();

  		var funcionAjax = $.ajax({
					url:"nexo.php", type:"POST",
					data:
					{
						queHago:"TraerUsuarioPorMail",
						mail:mail,
						contra:contra,
						contra2:contra2

					}
				});
				


			   		funcionAjax.done(function(resultado){	

			  			console.log(resultado);
			  			if(resultado == true)
			  				alert("Cambiada con exito");
			  			else
			  				alert("No se pudo cambiar");
																		
					});
						
							
			 		funcionAjax.fail(function(resultado){	
			 			alert("No se ha modificado");
		
			 		});						


  }



