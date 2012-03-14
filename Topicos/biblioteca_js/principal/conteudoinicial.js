/*
<sumário>
	ALLBRAX - CREATIVE E-GOV SOLUTIONS.
	Todos os direitos reservados.
	Equipe			:	Campos dos Goytacazes	
	Nome do módulo	:	conteudoinicial.js
	Data de início	:	19/04/2011
	Descrição		:	página com programação javascript do Slide da página inicial.
	</sumário>
*/

$J(function(){
         $J("#slides ul").cycle({
            fx: 'fade',
            speed: 2500,
            timeout: 5000,
            prev : '#prev',
            next : '#next',
            pager : '#pager'
         })      
      })
