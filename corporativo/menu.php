	  <div class="navbar-header">
	     <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		   <span class="sr-only">Navegação responsiva</span>
		   <span class="icon-bar"></span>
		   <span class="icon-bar"></span>
		   <span class="icon-bar"></span>
		 </button>
		 <a href="<?php echo site_url(); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo.png"/></a>	

		 <a href="https://api.whatsapp.com/send?phone=5521987241609" style="text-align: right; margin-top: 10px; margin-right:5px;" class="visible-sm visible-xs" target="_blank"><img style="width:34px;" class="whatsappTopo" src="<?php echo get_template_directory_uri(); ?>/imagens/redes/whatsapp.png" alt="WhatsApp"/></a>
		 <a href="tel:+552131241927" class="visible-sm visible-xs" style="text-align: right; margin-top: 10px;"><img class="telefoneTopo" style="width:34px;" src="<?php echo get_template_directory_uri(); ?>/imagens/telefone.png"/></a>
		 
		 <!-- MENU MOBILE -->
         <div class="menuMobile animated">
		   <ul>
		     <li><a href="<?php echo site_url(); ?>">HOME</a></li>
		     <li><a href="<?php echo site_url(); ?>/sobre-nos">SOBRE NÓS</a></li>
		     <li><a href="<?php echo site_url(); ?>/envidracamento">ENVIDRAÇAMENTO</a></li>
			 
			 <!--
			 <li><a href="javascript:void;" id="espacoMenu">ENVIDRAÇAMENTO <span class="caret"></span>
			 <div class="subMenuMobile">
			   <ul>
                 <li><a href="<?php echo site_url(); ?>/envidracamento-de-sacadas/">SACADAS</a></li>
                 <li><a href="<?php echo site_url(); ?>/envidracamento-de-varandas/">VARANDAS</a></li>
			   </ul>
			 </div></a></li>-->
			 
		     <li><a href="<?php echo site_url(); ?>/nosso-sistema">NOSSO SISTEMA</a></li>
		     <li><a href="<?php echo site_url(); ?>/projetos">PROJETOS</a></li>
		     <li><a href="<?php echo site_url(); ?>/contato">CONTATO</a></li>
		   </ul>
		 </div>	
		 
	  </div>
	  <div id="navbarCollapse" class="collapse navbar-collapse animated visible-md visible-lg">
	    <ul class="nav navbar-nav">		  
		  <li><a href="<?php echo site_url(); ?>/sobre-nos" <?php echo $pagina=="sobre"?"class='active'":""; ?>>SOBRE NÓS<hr></hr></a></li>		  
		  <li><a href="<?php echo site_url(); ?>/envidracamento" <?php echo $pagina=="envidracamento"?"class='active'":""; ?>>ENVIDRAÇAMENTO<hr></hr></a></li>
		  <!--
		  <li role="presentation" class="dropdown">
		    <a class="dropdown-toggle <?php echo $pagina=="envidracamento"?"active":""; ?>" href="#" role="button" aria-haspopup="true" aria-expanded="false">
			  ENVIDRAÇAMENTO<hr></hr>
			</a>
            <ul class="dropdown-menu">
			  <li><div class="pointerMenu"></div></li>
              <li><a href="<?php echo site_url(); ?>/envidracamento-de-sacadas/">SACADAS</a></li>
              <li><a href="<?php echo site_url(); ?>/envidracamento-de-varandas/">VARANDAS</a></li>
            </ul>
		  </li>-->
		  
		  <li><a href="<?php echo site_url(); ?>/nosso-sistema" <?php echo $pagina=="nosso-sistema"?"class='active'":""; ?>>NOSSO SISTEMA<hr></hr></a></li>
		  <li><a href="<?php echo site_url(); ?>/projetos" <?php echo $pagina=="projetos"?"class='active'":""; ?>>PROJETOS<hr></hr></a></li>
		  <li><a href="<?php echo site_url(); ?>/contato" <?php echo $pagina=="contato"?"class='active'":""; ?>>CONTATO<hr></hr></a></li>
	    </ul>
	  </div>