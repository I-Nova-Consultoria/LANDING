<?php include "head.php" ?>

<?php include "header.php" ?>

<!-- APRESENTACAO TOPO -->
<div class="apresentacaoTopo">
  <div class="containerBloco">
    <div class="clearfix"></div>
	
	<img class="visible-xs" src="imagens/logoAprova.png"/>
    <div class="col-md-6 ilustracao"><img src="imagens/ilustracaoBanner.png"/></div>
    <div class="col-md-6 areaForm">
	  <img class="hidden-xs" src="imagens/logoAprova.png"/>
	  <h1>APROVE SEU CRÉDITO E<br/>ESCOLHA ONDE QUER MORAR!</h1>
	  <span>GRATUITO, RÁPIDO E SEGURO!</span>
	  
	  <div class="formCredito"> 
	    <div class="clearfix"></div>
        <label>Preencha o cadastro e nós vamos<br/>entrar em contato com você!</label>	  
	    <form>
	      <!--<input type="hidden" name="iptAceite" id="iptNome" value=""/>-->
          <div>
            <input type="text" name="nome" id="iptNome" value="" placeholder="Nome"/>
          </div>
        
          <div>
            <input type="text" value="" name="telefone" id="iptTelefone" maxlength="9" placeholder="Telefone"/>
          </div>
        
          <div>
            <input type="text" name="email" id="iptEmail" value="" placeholder="E-mail" />
          </div>
        
          <div>
            <select name="regiao" id="iptRegiao">
		      <option value="">Região onde você mora</option>
		      <option value="3195">Baixada</option>
		      <option value="3380">Campo Grande</option>
		      <option value="3173">Z. Norte / Oeste</option>
		    </select>
          </div>
        
          <div>
            <select name="empresa" id="iptEmpresa">
		      <option value="">Selecione a empresa que você trabalha</option>
              <option value="35608">Alpha e Estrela Transportes</option>
              <option value="35609">Ambev</option>
              <option value="35610">Associação dos Funcionários Municipais de Niterói</option>
              <option value="35611">Atento do Brasil</option>
              <option value="35613">CBMERJ</option>
              <option value="35614">Chefe de Gabinete do Pref. de Niterói</option>
              <option value="35615">Conlogas</option>
              <option value="35616">Viton 44</option>
              <option value="35617">FIMATEC</option>
              <option value="35618">Fiocruz</option>
              <option value="35619">Governo do Estado do Rio de Janeiro</option>
              <option value="35620">Granfino</option>
              <option value="35621">M. DIAS BRANCO S.A. FABRICA PIRAQUÊ</option>
              <option value="35622">Petrobras</option>
              <option value="35623">Prefeitura de Duque de Caxias</option>
              <option value="35624">Prefeitura de Queimados</option>
              <option value="35626">Prefeitura Guarda Civil RJ Ordem Pública - Guarda Civil</option>
              <option value="35627">Prefeitura Municipal de Nova Iguaçu</option>
              <option value="35628">Rede Globo</option>
              <option value="35630">Refit Refinaria</option>
              <option value="35631">Reserva Natural Guaracamp</option>
              <option value="35632">Rica Alimentos</option>
              <option value="35634">Secretaria do Estado da Casa Civil e Governança</option>
              <option value="35635">Secretário es. Da ref do Rio de Janeiro</option>
              <option value="35636">TRANSURB S.A.</option>
              <option value="35637">VITÓRIA LOG</option>			
		    </select>
          </div>
		  
		  <div>
		    <font class="mensagem" style="color:#FFF;"></font>
		  </div>
        
          <div>
            <input type="button" value="QUERO MINHA CARTA DE CRÉDITO!" class="animated pulse infinite" onclick="javascript:chama();" />
          </div>
        </form>
	  </div>
	</div>	
	
	<div class="clearfix"></div>
	
	<div class="areaCorrespondente"><img src="imagens/logoCaixa.png"/> <label>SOMOS CORRESPONDENTES DA CAIXA</label></div>
	
  </div>
</div>

<!-- PARCEIRO CREDITO -->
<div class="parceiroCredito">
  <div class="containerBloco">
    <label>SOMOS O MAIOR PARCEIRO DE CRÉDITO IMOBILIARIO DA CAIXA ECONÔMICA FEDERAL</label>
    <span>JÁ SÃO MAIS DE 20 MIL CRÉDITOS APROVADOS!</span>	
  </div>
</div>

<!-- CREDITO IMOBILIARIO -->
<div class="creditoImobiliario">
  <div class="containerBloco">
    <div class="clearfix"></div>
	
    <h2>SEU CRÉDITO IMOBILIÁRIO APROVADO EM ATÉ 24H</h2>
	
	<div class="clearfix"></div>
	
	<!-- ITEM -->
	<div class="col-md-4">
	  <div class="itemCredito">
	    <img src="imagens/creditoimobiliario/01.png"/>
		<label><span>CUIDAMOS</span><br/>DE TUDO PARA VOCÊ</label>
		<p>Nossos facilitadores ajudarão a ter seu Crédito Aprovado e nossos I.novadores, a escolher o melhor lugar para você morar.</p>
	  </div>
	</div>
	
	<!-- ITEM -->
	<div class="col-md-4 divMeio">
	  <div class="itemCredito">
	    <img src="imagens/creditoimobiliario/02.png"/>
		<label><span>A CONSULTA É GRÁTIS</span><br/> E SEM BUROCRACIA!</label>
		<p>Com apenas algumas informações e documentos básicos, o Aprova Fácil consulta seu limite de forma automática.</p>
	  </div>
	</div>
	
	<!-- ITEM -->
	<div class="col-md-4">
	  <div class="itemCredito">
	    <img src="imagens/creditoimobiliario/03.png"/>
		<label><span>QUALIDADE</span> COM<br/> VARIEDADE DE PREÇO!</label>
		<p>Nossa parceira I.Nova é o maior Shopping de imóveis do Rio de Janeiro. Todos os empreendimentos das maiores construtoras num só lugar.</p>
	  </div>
	</div>
	
	<div class="clearfix"></div>
	
	<button class="callToAction animated pulse infinite">QUERO MINHA CARTA DE CRÉDITO!</button>
	
  </div>
</div>

<!-- AREA PERGUNTA -->
<div class="areaPergunta">
  <div class="containerBloco">
    <h2>VOCÊ PODE ESTAR SE PERGUNTANDO...</h2>
	
	<div class="clearfix"></div>
	
	<!-- ITEM -->
	<div class="col-md-6">
	  <div class="itemPergunta">
		<label>“SERÁ QUE EU TENHO DIREITO<br/>AO CRÉDITO IMOBILIÁRIO?”</label>
		<p><span>Provavelmente sim!</span><br/>Você pode utilizar o seu FGTS e o programa “Minha Casa, Minha Vida”, que tornou possível a realização do sonho de comprar seu imóvel novo!</p>
	  </div>
	</div>
	
	<!-- ITEM -->
	<div class="col-md-6">
	  <div class="itemPergunta">
		<label>“MAS SERÁ QUE EU<br/>CONSIGO PAGAR?”</label><p><span>Consegue!</span><br/>São as menores taxas e entradas parceladas em até 36X, tornando o seu sonho realidade!</p>
	  </div>
	</div>
	
	<div class="clearfix"></div>
	
  </div>
</div>

<!-- AREA EMPREENDIMENTOS -->
<div class="areaEmpreendimentos">
  <div class="containerBloco">
    <h2>OS MELHORES EMPREENDIMENTOS DA REGIÃO</h2>
    <h3>COM PRESTAÇÕES A PARTIR DE <span>R$499</span> MORANDO...</h3>
	
	<div class="clearfix"></div>
	
	<!-- ITEM -->
	<div class="col-md-4">
	  <div class="itemEmpreendimento ip1">
	    <img class="logoE" src="imagens/empreendimentos/logo1.png"/>
	    <img class="ilustracao" src="imagens/empreendimentos/ilustracao1.jpg"/>
		<p>Primeiro bairro planejado de Nova Iguaçu, localizado bem pertinho do novo Ginásio, o conviva fica em uma região de fácil acesso e com uma variedade de transportes, comercio e serviços à disposição. Mais praticidade e economia de tempo no seu dia a dia. Mais tranquilidade e qualidade de vida para você.</p>
	  </div>
	</div>
	
	<!-- ITEM -->
	<div class="col-md-4">
	  <div class="itemEmpreendimento ip2">
	    <img class="logoE" src="imagens/empreendimentos/logo2.png"/>
	    <img class="ilustracao" src="imagens/empreendimentos/ilustracao2.jpg"/>
		<p>O encontro do verde com a qualidade de vida. E o seu reencontro com a liberdade. Tudo o que você sempre sonhou para transformar a sua vida está aqui no Residencial Cedro Rosa. Condomínio fechado com apartamentos de 2 quartos em Campo Grande, todos com vaga de garagem.</p>
	  </div>
	</div>
	
	<!-- ITEM -->
	<div class="col-md-4">
	  <div class="itemEmpreendimento ip3">
	    <img class="logoE" src="imagens/empreendimentos/logo3.png"/>
	    <img class="ilustracao" src="imagens/empreendimentos/ilustracao3.jpg"/>
		<p>Condomínio fechado com apartamentos de 2 quartos na região do Engenho de Dentro, com elevador e opções de suite e varanda, todos com vaga de garagem. Conforto, tranquilidade, segurança e área de lazer completa com piscina para a diversão de sua família em qualquer momento e sem sair de casa.</p>
	  </div>
	</div>
	
	<div class="clearfix"></div>
	
	<h2 class="titulo2">E COM TODA INFRAESTRUTURA QUE VOCÊ MERECE!</h2>
	
	<div class="row containerInfra">
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra1.png"/></div><label>PISCINA</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra2.png"/></div><label>ACADEMIA</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra largeIcon"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra3.png"/></div><label>CHURRASQUEIRA</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra largeIcon"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra4.png"/></div><label>INTERNET WI-FI</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra largeIcon"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra5.png"/></div><label>SAUNA</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra largeIcon"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra6.png"/></div><label>SALÃO DE FESTAS</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra largeIcon"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra7.png"/></div><label>PLAYGROUND</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra8.png"/></div><label>CICLOVIA</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra largeIcon"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra9.png"/></div><label style="top:-4px;">QUADRA DE<br/>ESPORTES</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra largeIcon"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra10.png"/></div><label>ESPAÇO GOURMET</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra largeIcon"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra11.png"/></div><label>PET PARK</label></div></div>
	  
	  <!-- ITEM -->
	  <div class="col-md-3 col-sm-4 col-xs-6"><div class="itemInfra largeIcon"><div class="ilustracaoInfra"><img src="imagens/empreendimentos/infra12.png"/></div><label>E MUITO MAIS!</label></div></div>
	  
	  <div class="clearfix"></div>
	</div>
	
  </div>
</div>

<!-- ÁREA MAPA -->
<div class="areaMapa">
  <div class="containerBloco">
	
    <div class="caixaEmpreendimento">
	  <label>EMPREENDIMENTOS<br/>NO RIO DE JANEIRO</label>
	  <ul>
	    <li><div></div>BAIXADA (5.505 UNIDADES)</li>
	    <li><div></div>ZONA OESTE (9.295 UNIDADES)</li>
	    <li><div></div>ZONA NORTE (2.160 UNIDADES)</li>
	    <li><div></div>SÃO GONÇALO (2.460 UNIDADES)</li>
	  </ul>
	</div>	
	  
	<img src="imagens/mapa.jpg"/>
	
	<div class="clearfix"></div>
  </div>
</div>

<!-- AREA CONSTRUTORAS -->
<div class="areaConstrutoras">
  <div class="containerBloco">
    <h2>AS MELHORES CONSTRUTORAS VOCÊ ENCONTRA AQUI</h2>
	<h3>SÃO MAIS DE 5.300 OPÇÕES DE IMÓVEIS!</h3>
	
	<div class="linha1 hidden-xs">
	  <img src="imagens/construtoras/01.png"/>
	  <img src="imagens/construtoras/02.jpg"/>
	  <img src="imagens/construtoras/03.jpg"/>
	  <img style="width:60px;" src="imagens/construtoras/04.jpg"/>
	  <img src="imagens/construtoras/05.jpg"/>
	  <img src="imagens/construtoras/06.jpg"/>
	  <img style="width:60px;" src="imagens/construtoras/07.jpg"/>
	  <img src="imagens/construtoras/08.jpg"/>
	  <img src="imagens/construtoras/09.jpg"/> 
	</div>
	
	<div class="linha2 hidden-xs">
	  <img src="imagens/construtoras/10.jpg"/>
	  <img src="imagens/construtoras/11.jpg"/>
	  <img src="imagens/construtoras/12.jpg"/>
	  <img style="width:110px;" src="imagens/construtoras/13.jpg"/>
	  <img src="imagens/construtoras/14.jpg"/>
	  <img src="imagens/construtoras/15.jpg"/>
	</div>
	
	<div class="linha1 visible-xs">
	  <img src="imagens/construtoras/01.png"/>
	  <img src="imagens/construtoras/02.jpg"/>
	  <img src="imagens/construtoras/03.jpg"/>
	  <img style="width:60px;" src="imagens/construtoras/04.jpg"/>
	  <img src="imagens/construtoras/05.jpg"/>
	  <img src="imagens/construtoras/06.jpg"/>
	  <img style="width:60px;" src="imagens/construtoras/07.jpg"/>
	  <img style="width:60px;" src="imagens/construtoras/08.jpg"/>
	  <img src="imagens/construtoras/09.jpg"/> 	  
	  <img style="width:60px;" src="imagens/construtoras/10.jpg"/>
	  <img src="imagens/construtoras/11.jpg"/>
	  <img src="imagens/construtoras/12.jpg"/>
	  <img style="width:50px;" src="imagens/construtoras/13.jpg"/>
	  <img src="imagens/construtoras/14.jpg"/>
	  <img style="width:50px;" src="imagens/construtoras/15.jpg"/>
	</div>
	
	<div class="clearfix"></div>
	
  </div>
</div>

<?php include "footer.php" ?>

  </body>
</html>