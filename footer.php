<!-- CSS -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
<!--<link href="css/style.css" type="text/css" rel="stylesheet" />-->	
<link href="css/style.css?v=1.1.1.3" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/animate.css" type="text/css" media="screen" />	

<!-- JS -->
<script language="javascript" src="js/jquery-latest.js"></script>		
<script defer language="javascript" src="js/controle.js?v=1.2.1.4"></script>
<script defer language="javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<script src="js/jquery.mask.min.js" type="text/javascript"></script>

<!-- ROLAGEM DA PÁGINA --> 
<script>
  $('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
  });
  
  function rolarPagina(elemento)
  {
    var target = $(elemento);
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }	
  }
 
    $(document).ready(function()
    {    
	
	  var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
      },
      spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
          }
      };  
    
      $('#iptTelefone').mask(SPMaskBehavior, spOptions);
	
	  $('.arrowUpSite').click(function(){
	    rolarPagina("body");
	  });	  
	
	  $('.callToAction').click(function()
      {
	    rolarPagina('.apresentacaoTopo');
	  });
	  
	  
        jQuery(window).scroll( function(){
			
            /* Check the location of each desired element */
            //jQuery('#segundaTela').each( function(i){
                
                //var secaoImagemTopo = jQuery('.apresentacaoTopo').offset().top + jQuery('.apresentacaoTopo').outerHeight();
                var secaoCredito = jQuery('.creditoImobiliario').offset().top + jQuery('.creditoImobiliario').outerHeight();
				
                var secaoEmpreendimento = jQuery('.areaEmpreendimentos').offset().top + jQuery('.areaEmpreendimentos').outerHeight();
				
                var secaoImagemRodape = jQuery('.areaPassos').offset().top + jQuery('.areaPassos').outerHeight();
                var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();
                
                /* If the object is completely visible in the window, fade it it */				
                //if( bottom_of_window > secaoImagemTopo ){ jQuery('.apresentacaoTopo .ilustracao img').addClass('animated pulse'); }
                if( bottom_of_window > secaoImagemRodape ){ jQuery('.areaPassos img').addClass('animated pulse'); }
				
                if( bottom_of_window > secaoCredito ){ jQuery('.creditoImobiliario').addClass('animated bounce'); }
				
                if( bottom_of_window > (secaoEmpreendimento-700) ){ jQuery('.ip1').addClass('animated slideInLeft'); jQuery('.ip3').addClass('animated slideInRight'); }
				                
            //}); 
        });	  
	  
    });	  
</script>
<!-- FIM ROLAGEM DA PÁGINA --> 
    <script language="javascript">
      function chama(){
		var empresa = document.getElementById('iptEmpresa').value;
		var regiao = document.getElementById('iptRegiao').value;
		var telefone = document.getElementById('iptTelefone').value;
		var nome = document.getElementById('iptNome').value;
		var email = document.getElementById('iptEmail').value;
		var ddd = "";
		var numero = "";
		
		if(empresa!="" && telefone.length>=14 && nome!="" && email!="" && ValidaEmail(email) && regiao!=""){
		  ddd = telefone.substr(1,2);
		  numero = telefone.substr(4,telefone.length);
		  
		  $('.mensagem').html('Enviando...aguarde');
		  
		  setTimeout(function(){ 
		    $('.mensagem').html('');
			$('#iptNome').val('');
			$('#iptTelefone').val('');
			$('#iptEmail').val('');
			$('#iptEmpresa').val('');
			$('#iptRegiao').val('');		

		    $('.mensagem').html('Enviado!');			
		  },3000);
		  
		  setTimeout(function(){ $('.mensagem').html(''); },6000);
		  
		}else{
		   if(nome==""){
			 $('.mensagem').html('Informe o nome.');
			 $('#iptNome').focus();
			 
		  }else if(telefone.length<14){
			 $('.mensagem').html('Informe um telefone válido.'); 
			 $('#iptTelefone').focus();
			 
		  }else if(email==""){
			 $('.mensagem').html('Informe um e-mail.');  
			 $('#iptEmail').focus();
			 
		  }else if(!ValidaEmail(email)){
			 $('.mensagem').html('Informe um e-mail válido.');  
			 $('#iptEmail').focus();
			 
		  }else if(regiao==""){
			 $('.mensagem').html('Selecione a região.'); 
			 $('#iptRegiao').focus(); 
			 
		  }else if(empresa==""){		
			 $('.mensagem').html('Selecione a Empresa.');  
			 $('#iptEmpresa').focus(); 	 
		  }
		}
		  
        var ret = hc_envia_mensagem(
          empresa,
          nome,
          email,
          ddd,
          numero,
		  '',
		  regiao,
		  'Landing Page'
		  );
		  
        //alert(ret);*/
		
        /* ATENÇÃO: para não aparecer alerta com o ticket, coloque '//' (duas barras) na linha anterior. */
      }
	  
	  $('document').ready(function()
	  {
		  jQuery('.apresentacaoTopo .ilustracao img').addClass('animated pulse');
		  
		  /*
           $.ajax({
              type:'GET',
              url:'https://servicodados.ibge.gov.br/api/v1/localidades/estados/33/municipios',
              dataType: "json",
              success:function(callback){				  
				if(callback.length>0){
				  var i = 0; 

                  var option = '<option value="">Região onde você mora</option>';				  
		          
                  for(var i = 0; i<callback.length; i++)
                  {			  
				    option += '<option value="'+callback[i]['id']+'">'+callback[i]['nome']+'</option>';
	              }	
				  $('#iptRegiao').html(option).show();
		          
			    }			
              },
              error: function(error) { 
    	        console.log(error);	  
              }
           });		*/
	  });
	  
    </script>

    <script src="https://inova.housecrm.com.br/track/origem.js"></script>
    <script language="javascript">
        var hc_dominio_chat = "inova.housecrm.com.br"; //dominio nao pode conter http://
        var hc_https = 1;
    </script>  
  
<div class="areaPassos">
  <div class="containerBloco">	
	<div class="row">
	  <div class="col-md-5"><img src="imagens/passos/ilustracao.png"/></div>
	  <div class="col-md-7">
	    <h2>O QUE VOCÊ ESTÁ<br/>ESPERANDO?</h2>
		<label>VOCÊ ESTÁ A TRÊS PASSOS DE CONQUISTAR O SEU SONHO!</label>
		
		<ul>
          <li><strong>1)</strong> Entregue a <strong>documentação</strong>
		  <p>Carteira de Identidade e CPF   /   Comprovante de residência atualizado (30 dias)   /   Certidão de Estado Civil (nascimento, casamento ou averbação do divórcio)   /   Certidão de nascimento dos filhos   /   Sendo casado, documentação completa do cônjuge   /   Comprovante de renda formal (três últimos contracheques)    /   Imposto de Renda + recibo de entrega (se declarar)   /   Carteira de trabalho completa</p>
		  </li>
          
          <li><strong>2) Aprovação do crédito</strong>, de forma rápida,<br/>descomplicada e gratuita</li>
          
          <li><strong>3)</strong> Hora de escolher o imóvel e<br/>preparar o <strong>open house!</strong></li>
	
	      <button class="callToAction animated pulse infinite">QUERO MINHA CARTA DE CRÉDITO!</button>
        </ul>
		
	  </div>
	  
	  <div class="clearfix"></div>
    </div>  
	
  </div>  
</div>  
<div class="rodape">COPYRIGHT ₢ 2020 I.NOVA I TODOS OS DIREITOS RESERVADOS.</div>