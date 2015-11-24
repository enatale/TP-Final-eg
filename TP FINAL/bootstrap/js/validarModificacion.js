	function enviar() {
		var usuario = $('#usuario').val();
		var nombre = $('#nombre').val();
		var apellido = $('#apellido').val();
		var telefono = $('#telefono').val();
		var pass_1 = $('#pass_1').val();
		var pass_2 = $('#pass_2').val();
		var continua = true;
		
		if(usuario==""){
			$('#usuario').attr('style', 'background:#FF4A4A');
			continua = false;
		}
		if(nombre==""){
			$('#nombre').attr('style', 'background:#FF4A4A');
			continua = false;
		}
		if(apellido==""){
			$('#apellido').attr('style', 'background:#FF4A4A');
			continua = false;
		}
		if(telefono==""){
			$('#telefono').attr('style', 'background:#FF4A4A');
			continua = false;
		}
		if(pass_1!=pass_2){
			$('#pass_2').attr('style', 'background:#FF4A4A');
			continua = false;
		}
		if(pass_1!=""&&pass_2!=""&&pass_1==pass_2){
			alert("entro");
			$('#contrasena').val(pass_1);
		}
		if(continua){
			document.formModificar.submit();
		}
	}
	
	$(function(){
		$('#pass_1').keyup(function(){
			$('#pass_1').attr('style', 'background:white');
		});
		$('#pass_2').keyup(function(){
			$('#pass_2').attr('style', 'background:white');
		});
		$('#apellido').keyup(function(){
			$('#apellido').attr('style', 'background:white');
		});
		$('#nombre').keyup(function(){
			$('#nombre').attr('style', 'background:white');
		});
		$('#usuario').keyup(function(){
			$('#usuario').attr('style', 'background:white');
		});
		$('#telefono').keyup(function(){
			$('#telefono').attr('style', 'background:white');
		});
	});