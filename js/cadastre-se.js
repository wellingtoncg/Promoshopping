$(document).ready(function(){
	
	//Máscaras
	//$("#telefone").mask("(99) 99999-9999");
	//$('.phone_with_ddd').mask('(00) 0000-0000');
	
	//botãoa cadatrar
	$("#cadastrar").click(function(){	
		
		//alert('cadastrar clique');
		
		nome = $("#nome").val();
		telefone = $("#telefone").val();
		email = $("#email").val();
		senha = $("#senha").val();
		resenha = $("#resenha").val();
		
		//alert('nome=' + nome);
		
		//Valida campo "nome"
		if (nome == '') {
			$('#display_error1').hide('fast');
			$("#display_error1").html('Nome completo não informado');
			$('#display_error1').show('slow');
			$("#nome").focus();
			//$("#nome").css('background-color','#F76A78');
			return false;
		} else {
			//$("#nome").css('background-color','#FFF');
		}
		
		//Valida campo "telefone"
		//reTelefone = /^[0-9]{10,11}$/;
		if (telefone == ''){
			$('#display_error1').hide('fast');
			$("#display_error1").html('Telefone não informado corretamente. Formato (xx) xxxx-xxxxx');
			$('#display_error1').show('slow');
			$("#telefone").focus();
			//$("#telefone").css('background-color','#F76A78');
			return false;
		} else {
			//$("#telefone").css('background-color','#FFF');
		}
		
		//Valida campo "email"
		//reEmail = /^[\w-]+(\.[\w-]+)*@(([A-Za-z\d][A-Za-z\d-]{0,61}[A-Za-z\d]\.)+[A-Za-z]{2,6}|\[\d{1,3}(\.\d{1,3}){3}\])$/;
		//if ( !reEmail.test(email) ){
		
		if (email == ''){
			$('#display_error1').hide('fast');
			$("#display_error1").html('Email não informado corretamente');
			$('#display_error1').show('slow');
			$("#email").focus();
			//$("#email").css('background-color','#F76A78');
			return false;
		} else {
			//$("#email").css('background-color','#FFF');
		}
		
		//Valida campo "senha"
		reCampoSenha = /^[\S]{6,8}$/;
		if (!reCampoSenha.test(senha)){
			$('#display_error1').hide('fast');
			$("#display_error1").html('Senha não informada corretamente. Entre 6 e 8 caracteres.');
			$('#display_error1').show('slow');
			$("#senha").focus();
			//$("#senha").css('background-color','#F76A78');
			return false;
		} else {
			//$("#senha").css('background-color','#FFF');
		}
		
		//Valida campo "resenha"
		if (!reCampoSenha.test(resenha)){
			$('#display_error1').hide('fast');
			$("#display_error1").html('Repetição de Senha não informada corretamente. Entre 6 e 8 caracteres.');
			$('#display_error1').show('slow');
			$("#resenha").focus();
			//$("#resenha").css('background-color','#F76A78');
			return false;
		} else {
			//$("#resenha").css('background-color','#FFF');
		}
		
		//Valida campo "resenha"
		if (senha != resenha){
			$('#display_error1').hide('fast');
			$("#display_error1").html('O campo Senha e Repetição de Senha devem ser iguais. Entre 6 e 8 caracteres.');
			$('#display_error1').show('slow');
			$("#resenha").focus();
			//$("#resenha").css('background-color','#F76A78');
			return false;
		} else {
			//$("#resenha").css('background-color','#FFF');
		}

		var dataString = 'nome=' + nome + '&telefone=' + telefone + '&email=' + email + '&senha=' + senha;
		
		$.ajax({
			type: "POST",
			url: "cadastrar.php",
			data: dataString,
			cache: false,
			beforeSend: function(){ $("#cadastrar").val('Validando...');},
			success: function(data){
				//alert(data.trim().length);
				if (data.trim().length == 0) {
					$("body").load("index.php?ok").hide().fadeIn(1500).delay(6000);
					//or
					window.location.href = "index.php?ok";				
				} else {
					$('#display_error').hide('fast');
					$("#display_error").html(data);
					$('#display_error').show('slow');
					$("#cadastrar").val('Cadastrar-se');
					return false;
				}
			},
			afterSend: function(){ $("#cadastrar").val('Cadastrar-se');}
		});

		return false;
	});
	
	//botão login
	$("#login").click(function(){	
	
		//alert('login clique');
		
		email = $("#email").val();
		password = $("#password").val();
		
		//Valida campo "usuário"
		if (email == '') {
			$('#display_error2').hide('fast');
			$("#display_error2").html('Email não informado');
			$('#display_error2').show('slow');
			$("#email").focus();
			//$("#email").css('background-color','#F76A78');
			return false;
		} else {
			//$("#email").css('background-color','#FFF');
		}
		
		//Valida campo "senha"
		if (password == '') {
			$('#display_error2').hide('fast');
			$("#display_error2").html('Senha não informada');
			$('#display_error2').show('slow');
			$("#password").focus();
			//$("#password").css('background-color','#F76A78');
			return false;
		} else {
			//$("#password").css('background-color','#FFF');
		}
		
		var dataString = 'email=' + email + '&password=' + password;
		
		$.ajax({
			type: "POST",
			url: "login.php",
			data: dataString,
			cache: false,
			beforeSend: function(){ $("#login").val('Validando...');},
			success: function(data){
				if (data.trim() != 'ERRO') {
					$("body").load("index.php").hide().fadeIn(1500).delay(6000);
					//or
					window.location.href = "index.php";
				} else {
					$('#display_error').hide('fast');
					$("#display_error").html('Usuário/Senha informados não conferem.');
					$('#display_error').show('slow');
					$("#login").val('Entrar');
					return false;
				}
			}
		});
		return false;
	});
});