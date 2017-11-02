$(document).ready(function() {
	comeca();
})
	var timerI = null;
	var timerR = false;

	function para(){
		if(timerR){
			clearTimeout(timerI);
			timerR = false;
		}
	}

	function comeca(){
		para();
		lista();
	}

	function lista(){
		$.ajax({
			url: "../paginas/sys/lista.php";
			success: function(textStatus){
				$("#lista").html(textStatus);//mostra o resultado da paginna lista.php
			}
		})
		timerI = setTimeout("lista()", 1000);//tempo de espera para atualizar de novo
		timerR = true;
	}