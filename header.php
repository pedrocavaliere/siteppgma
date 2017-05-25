<script type="text/javascript">
	var cont = 0;
	function resizeText(multiplier) {
	if (cont >= 4){
		if (multiplier==1){
			return; //não permite o usuário aumentar o tamanho original da letra mais do que quatro vezes
		}
	}
	else if (cont <= -2){
		if (multiplier==-1){
			return; //não permite o usuário diminuir o tamanho original da letra mais do que duas vezes
		}
	}
	var elementos = document.getElementsByClassName("conteudo");
	for (var i = 0; i < elementos.length; i++){			
		var elemento = elementos[i];
    		var currentSize = elemento.style.fontSize || 1;
	   		elemento.style.fontSize = ( parseFloat(currentSize) + (multiplier * 0.2)) + "em";
	}
	cont+=multiplier;
}</script>

