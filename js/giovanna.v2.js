  
$(document).ready(function(){

    $('.superheader-giovanna-home').parallax({imageSrc: path_giovanna.img_path + 'banner-1.jpg'});
    $('.superheader-giovanna-empresa').parallax({imageSrc: path_giovanna.img_path + 'banner-2.jpg'});
    $('.superheader-giovanna-rotas').parallax({imageSrc: path_giovanna.img_path + 'banner_equipamentos.png'});
    $('.superheader-giovanna-servicos').parallax({imageSrc: path_giovanna.img_path + 'banner_servicos.jpg'});
    $('.superheader-giovanna-orcamento').parallax({imageSrc: path_giovanna.img_path + 'banner_orcamento.jpg'});


    $('.menu').slicknav({
		appendTo:'.slicknav-responsivo',
		label: ''
	});

    $('.overlay').hover(

        function(){
            $(this).next().css( "filter", " blur(10px)" );
            $(this).next().css( "-webkit-filter", "blur(10px)" );
            $(this).next().next().css( "-webkit-filter", "blur(10px)" );
            var imagem =  path_giovanna.img_path + 'botaomenos.png';
            $(this).next().next().next().children( "img" ).attr("src", imagem);
            


            
        },
        function(){
            $(this).next().css( "filter", " blur(0)" );
            $(this).next().css( "-webkit-filter", "blur(0)" );
            $(this).next().next().css( "-webkit-filter", "blur(0)" );
            var imagem =  path_giovanna.img_path + 'botaomais.png';
            $(this).next().next().next().children( "img" ).attr("src", imagem);
            
        }

    );

	/*$('#page-logo').prependTo('.slicknav_menu');*/
    


   /* Executa a requisição quando o campo CEP perder o foco */
   $('#ninja_forms_field_34').blur(function(){
            /*dev   20 */
           /* Configura a requisição AJAX */
           $.ajax({
                url : path_giovanna.template_path + 'consultar-cep.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cep=' + $('#ninja_forms_field_34').val(), /* dado que será enviado via POST */
                /*dev   20 */
                /*test   131 */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        /*dev   16 */
                        $('#ninja_forms_field_39').val(data.rua);
                        /*dev   17 */
                        $('#ninja_forms_field_50').val(data.bairro);
                        /*dev   18 */
                        $('#ninja_forms_field_53').val(data.cidade);
                        /*dev   19 */
                        $('#ninja_forms_field_56').val(data.estado);
                        /*dev    */ 
                        $('#ninja_forms_field_42').focus();
                    }
                }
           });   
   return false;    
   });

   $('#ninja_forms_field_65').blur(function(){
            /*dev  70 */
           /* Configura a requisição AJAX */
           $.ajax({
                url : path_giovanna.template_path + 'consultar-cep.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cep=' + $('#ninja_forms_field_65').val(), /* dado que será enviado via POST */
                /*dev 70   */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        /*dev 55  */
                        $('#ninja_forms_field_70').val(data.rua);
                        /*dev  59 */
                        $('#ninja_forms_field_81').val(data.bairro);
                        /*dev   62*/
                        $('#ninja_forms_field_84').val(data.cidade);
                        /*dev   67 */
                        $('#ninja_forms_field_87').val(data.estado);
                        /*dev   67 */
                        $('#ninja_forms_field_73').focus();
                    }
                }
           });   
   return false;    
   });


});

 $( function() {
    $( "#tabs" ).tabs({
          active: 0
        });
  } );
  

