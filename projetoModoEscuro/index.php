<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste Modo Escuro</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: sans-serif;
		}

		body,html{
			height: 100%;
		}

		.container{
			max-width: 1000px;
			margin: 0 auto;
			padding: 0 2%;
		}

		header{
			background: inherit;
			color: black;
			font-size: 20px;
			font-weight: bold;
			text-align: center;
			padding: 30px 0;
			position: fixed;
			width: 100%;
			z-index: 2;
		}

		.main{
			background: inherit;
			color: inherit;
			z-index: 1;
			position: relative;
			width: 100%;
			height: 100%;
			text-align: justify;
			padding-top: 120px;
		}

		.main .container p{
			margin: 10px 0;
			line-height: 30px;
		}

		input{
			right: 100px;
			position: absolute;
			z-index: 2;
			width: 100px;
			height: 30px;
			-webkit-appearance: none;
			background: linear-gradient(0deg,#333,#000);
			outline: 0;
			border-radius: 20px;
			box-shadow: 0 0 0 3px #353535, 0 0 0 3px #3e3e3e, inset 0 0 10px rgb(0, 0, 0), 0 5px 10px rgba(0, 0, 0, .5), inset 0 0 10px rgba(0, 0, 0, .2); 
		}

		input::before{
			content: '';
			position: absolute;
			top: 0;
			width: 60px;
			height: 30px;
			background: linear-gradient(0deg,#000,#6b6b6b);
			border-radius: 20px;
			box-shadow: 0 0 0 1px #232323;
			transform: scale(.98, .96);
			transition: .5s;
		}

		input:checked::before{
			left: 40px;
		}

		input::after{
			content: '';
			position: absolute;
			top: calc(50% - 2px);
			width: 4px;
			height: 4px;
			background: linear-gradient(0deg,#6b6b6b,#000);
			border-radius: 50%;
			transition: .5s;
		}

		input:checked::after{
			background: green;
			left: 0px;
			box-shadow: 0 0 5px green,0 0 15px green;	
		}

		input:checked{
			background: linear-gradient(0deg,green,#685);
		} 

		.dark{
			background: #222;
			color: white;
		}

		.sun{
			background: inherit;
			color: inherit;
		}

	</style>
</head>
<body>
	<header>
		<p>MINHA LOGOMARCA</p>
	</header>

	<div class="main">
		<div class="container">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div><!-- container -->
		<div class="btn-modo">
			<form method="post">
				<input type="checkbox" id="switch" name="che">
			</form>
		</div><!-- btn-modo -->
	</div><!-- main -->

	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">

		$(function(){
			//elementos
			const btnC = $('#switch');
			const elemento = $('header, .main');
			const niteMode = localStorage.getItem('darkMode');
			//se existir
			if(niteMode){
			//adiciona a class e deixa checado
				elemento.addClass('dark');
				btnC.prop('checked', true);
			}

			$('#switch').click(function(){
				//ao clicar remove o sun e add dark
				elemento.removeClass('sun');
				elemento.addClass('dark');
				//se estiver checado e for fark cria o storage
				if(btnC.is(':checked')&&elemento.attr('class') == 'dark'){
					localStorage.setItem('darkMode',true);
				}else{
					//se nao for checado remove a class dark e apaca o darkmode
					localStorage.removeItem('darkMode');
					elemento.removeClass('dark');
					elemento.addClass('sun');
				}

			});

		});
	</script>
</body>
</html>