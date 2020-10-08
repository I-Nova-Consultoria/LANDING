//CAPTION
function insereCaption(objeto,valor)
{
   if(document.getElementById(objeto).value==""){
      document.getElementById(objeto).value = valor;
   }
}

function removeCaption(objeto,valor)
{
   if(document.getElementById(objeto).value==valor){
      document.getElementById(objeto).value = "";
   }
}

function enviaContato()
{
	var nome = $('#nome').val();
	var telefone = $('#telefone').val();
	var email = $('#email').val();
	var assunto = $('#assunto').val();	
	
	$('.mensagemStatus').css({'text-align':'center'});
	
	
    
	if(nome!="" && telefone!="" && email!="" && assunto!=""){
	  $('.formularioContato input[type=submit]').prop("disabled", true);
	
	  $('.mensagemStatus').css({'color':'#000000'});
	  $('.mensagemStatus').html('Aguarde por gentileza..sua mensagem está sendo enviada.');
	  
	  gtag('event', 'conversion', {
      'send_to': 'AW-952833925/E_ryCLyN0bQBEIWvrMYD'
      });
  
      $.ajax({
          type:'POST',
          url:'../wp-content/themes/fineglass/envia-email.php',
          dataType: "json",
          data:{
    		nome: nome,
			telefone: telefone,
			email: email,
			assunto: assunto
    	  },
          success:function(callback){		
    	    console.log(callback);
			
            $('.mensagemStatus').css({'color':'#007E33'});
	        $('.mensagemStatus').html('Mensagem enviada com sucesso!');		
			 
    	    $('.formularioContato input[type=submit]').prop("disabled", false); 						
          },
          error: function(error) {
             console.log(error);
			 
	         $('.mensagemStatus').css({'color':'#CC0000'});
	         $('.mensagemStatus').html('Falha ao enviar mensagem. Tente novamente mais tarde.');
	
			 $('.formularioContato input[type=submit]').prop("disabled", false); 
          }
      });
	  
  }else{
	$('.mensagemStatus').css({'color':'#CC0000'});
	$('.mensagemStatus').html('Preencha corretamente os campos.');  	
  }		
  
  return false;
}

function validaEnvioForm()
{
  var valido = false;
  $('.mensagemStatus').html('');
  $('.mensagemStatus').css({'color':'#CC0000'});
  
   if($('#nome').val()!="" && $('#assunto').val()!="" && $('#espaco').val()!="" && $('#email').val()!="" && ValidaEmail($('#email').val()) && $('#mensagem').val()!=""){
	 //valido = true;
	 
	 $('.mensagemStatus').css({'color':'#007E33'});
     $('.mensagemStatus').html("Enviando contato..."); 
  }else{	  
	 if($('#nome').val()==""){
       $('.mensagemStatus').html("Digite o nome!"); 
	   $('#nome').focus();
	   
	}else if($('#email').val()==""){
       $('.mensagemStatus').html("Digite o e-mail!"); 
	   $('#email').focus(); 
	   
    }else if(!ValidaEmail($('#email').val())){
       $('.mensagemStatus').html("E-mail inválido!"); 
	   $('#email').focus(); 		
		
	}else if($('#assunto').val()==""){
       $('.mensagemStatus').html("Digite o assunto!"); 
	   $('#assunto').focus(); 
	   
    }else if($('#espaco').val()==""){
       $('.mensagemStatus').html("Selecione a casa de eventos desejada!"); 
	   $('#espaco').focus(); 
	   
    }else if($('#mensagem').val()==""){
       $('.mensagemStatus').html("Digite a mensagem!"); 
	   $('#mensagem').focus(); 
    }
  }
  
  return valido;
}

function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if ((whichCode == 13) || (whichCode == 0) || (whichCode == 8)) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}

function ValidaEmail(email){
	
  if ((email.length != 0) && ((email.indexOf("@") < 1) || (email.indexOf('.') < 2)))
  {
     return 0;
  }else{
     return 1;
  }
}


//MOSTRA E OCULTA UM OBJETO
function mostraObjeto(objeto)
{

	if(document.getElementById(objeto).style.display == "block" || document.getElementById(objeto).style.display == "inline-grid"){
	 $('#'+objeto).hide('slow'); 	
   }else{	
     $('#'+objeto).show(1000);
     document.getElementById(objeto).style.display = "block";
   }
}

function ocultaObjeto(objeto)
{    
    $('#'+objeto).hide('slow');
    //document.getElementById(objeto).style.display = "none";
}


function utf8_decode(str_data) {
  //  discuss at: http://phpjs.org/functions/utf8_decode/
  // original by: Webtoolkit.info (http://www.webtoolkit.info/)
  //    input by: Aman Gupta
  //    input by: Brett Zamir (http://brett-zamir.me)
  // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: Norman "zEh" Fuchs
  // bugfixed by: hitwork
  // bugfixed by: Onno Marsman
  // bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // bugfixed by: kirilloid
  //   example 1: utf8_decode('Kevin van Zonneveld');
  //   returns 1: 'Kevin van Zonneveld'

  var tmp_arr = [],
    i = 0,
    ac = 0,
    c1 = 0,
    c2 = 0,
    c3 = 0,
    c4 = 0;

  str_data += '';

  while (i < str_data.length) {
    c1 = str_data.charCodeAt(i);
    if (c1 <= 191) {
      tmp_arr[ac++] = String.fromCharCode(c1);
      i++;
    } else if (c1 <= 223) {
      c2 = str_data.charCodeAt(i + 1);
      tmp_arr[ac++] = String.fromCharCode(((c1 & 31) << 6) | (c2 & 63));
      i += 2;
    } else if (c1 <= 239) {
      // http://en.wikipedia.org/wiki/UTF-8#Codepage_layout
      c2 = str_data.charCodeAt(i + 1);
      c3 = str_data.charCodeAt(i + 2);
      tmp_arr[ac++] = String.fromCharCode(((c1 & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
      i += 3;
    } else {
      c2 = str_data.charCodeAt(i + 1);
      c3 = str_data.charCodeAt(i + 2);
      c4 = str_data.charCodeAt(i + 3);
      c1 = ((c1 & 7) << 18) | ((c2 & 63) << 12) | ((c3 & 63) << 6) | (c4 & 63);
      c1 -= 0x10000;
      tmp_arr[ac++] = String.fromCharCode(0xD800 | ((c1 >> 10) & 0x3FF));
      tmp_arr[ac++] = String.fromCharCode(0xDC00 | (c1 & 0x3FF));
      i += 4;
    }
  }

  return tmp_arr.join('');
}

function alternaDisplayObjeto(objeto)
{
    if(document.getElementById(objeto).style.display=="block"){
	    ocultaObjeto(objeto);
   }else{
        mostraObjeto(objeto);
   }   
}