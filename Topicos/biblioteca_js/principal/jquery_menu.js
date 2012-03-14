/*
<sumário>
	ALLBRAX - CREATIVE E-GOV SOLUTIONS.
	Todos os direitos reservados.
	Equipe			:	Campos dos Goytacazes	
	Nome do módulo	:	jquery_menu.js
	Data de início	:	19/04/2011
	Descrição		:	página com programação javascript do Slide da página inicial.
	</sumário>
*/
	
	$J(function (){
			$J("h4 h3").hide();
			$J("h4").click(function() {
			$J("h4 h3").slideUp();
			$J(this).next().slideToggle('fast', function() {
			$J(this).parent().next().not('li:visible').slideDown("slow");
		return false
				})
			})
		})
