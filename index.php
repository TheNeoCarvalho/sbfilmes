<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SbFilmes</title>
<meta name="keywords" content="web store, products, free templates, website templates, CSS, HTML" />
<link href="css/template_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="jquery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		}
		
	});
</script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
    	  <h1><a href="index.php">SBFilmes</a></h1>
    	</div>
        
        <div id="header_right">
          <div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Pesquisar" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
      </div> <!-- END -->
    </div> <!-- END de header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" class="selected">Home</a></li>
            <li><a href="filmes.php" >Filmes</a>
                <ul>
                    <li><a href="#">Ação</a></li>
                    <li><a href="#">Animação</a></li>
                    <li><a href="#">Nacional</a></li>
              </ul>
            </li>
            <li><a href="#">Lançamentos</a>
          <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
                    <li><a href="#">Sub menu 4</a></li>
                    <li><a href="#">Sub menu 5</a></li>
              </ul>
            </li>
            <li><a href="admin/index.php">Área Restrita</a></li>
            <li><a href="minhaconta.php">Minha Conta</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
    	  <div class="cleaner"></div>
     
        
        <div id="sidebar">
        	<h3>Categorias</h3>
            <ul class="sidebar_menu">
			    <li><a href="#">Categoria de filmes</a></li>                         
		  </ul>
          <h3>Noticias</h3>
            <p>Noticias de filmes, lançamentos e outras novidades do cinema.</p>
            <div id="newsletter">
                <form action="#" method="get">
                  <input type="text" value="Inscreva-se" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="subscribe" value="Inscreva-se" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div> <!-- END of sidebar -->
        
        <div id="content">
        	<h2>Lançamentod de </h2>
        	<div class="col col_14 product_gallery">
            	<a href="filmedetai.php"><img src="images/product/01.jpg" alt="Product 01" /></a>
                <h3>Nome do filme</h3>
                <p class="product_price">R$</p>
              <a href="alugarfilme.php" class="add_to_cart">Alugar</a>
            </div>        	
            <a href="#" class="more float_r">Ver Todos</a>
            <div class="cleaner h50"></div>
            
            <h2>Top 10 Filmes</h2>
          <div class="col col_14 product_gallery">
            	<a href="filmedetai.php"><img src="images/product/04.jpg" alt="Product 04" /></a>
                <h3>Nome do Filme</h3>
                <p class="product_price">R$</p>
                <a href="alugarfilme.php" class="add_to_cart">Alugar</a>
          </div>        	
            <a href="#" class="more float_r">Ver Todos</a>
            
<div class="cleaner"></div>
      </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="templatemo_footer">
    	<div class="col col_16">
        	<h4>Categorias</h4>
            <ul class="footer_menu">
			    <li>Ação</li>
                <li>Comédia</li>				
              <li>Animação</li>
              <li>Nacional</li>				
		  </ul>  
        </div>
        <div class="col col_16">
          <h4>Paginas</h4>
          <ul class="footer_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Filmes</a></li>
            <li><a href="#">Lançamentos</a></li>
            <li><a href="admin/index.php">Área Restrita</a></li>
          </ul>
        </div>
        <div class="col col_16">
          <h4>Social</h4>
          <ul class="footer_menu">
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">LinkedIn</a></li>
          </ul>
        </div>
      <div class="cleaner h40"></div>
		<center>
			Copyright © 2048 Your Company Name | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
		</center>
    </div> <!-- END of footer -->   
   
</div>

</body>
</html>
