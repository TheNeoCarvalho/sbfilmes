<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store Theme - FAQs</title>
<meta name="keywords" content="web store, FAQs, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store Theme, FAQs, free CSS template provided by templatemo.com" />
<link href="../css/template_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/ddsmoothmenu.css" />

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/ddsmoothmenu.js">

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

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
    	  <h1><a href="index.php">sbfilmes</a></h1>
   	  </div>
        
        <div id="header_right">
            <ul id="language">
                <li></li>
              <li></li>
              <li></li>
                <li></li>
            </ul>
          <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Pesquisar" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" class="selected">Home</a></li>
            <li>
              <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
              </ul>
            </li>
            <li><a href="../about.html">Locações</a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
                    <li><a href="#">Sub menu 4</a></li>
                    <li><a href="#">Sub menu 5</a></li>
              </ul>
            </li>
            <li><a href="#" >Reservas</a></li>
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Sair</a></li>
           
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	<div id="sidebar">
   	    <h3>Menu</h3>
            <ul class="sidebar_menu">
			    <li><a href="#">Cadastrar Categoria</a></li>
                <li><a href="#">Cadastrar Filme</a></li>				
                <li><a href="#">Reservas</a></li>
                <li><a href="#">Devoluções</a></li>				
            	<li><a href="#">Locações</a></li>
                <li><a href="cad_categoria.php">Cadastro Categoria</a></li>     
                <li><a href="#">Integer interdum</a></li>				
                <li><a href="#">Maecenas a diam</a></li>
				<li><a href="#">Nullam in semper</a></li>
				
			</ul>
            
          
        </div> <!-- END of sidebar -->
        
        <div id="content" class="faq">
        	<h2>Painel Administrador
          <span style="font: 12px Arial; float: right"><?php echo "<b>Usuario:</b>".$_SESSION['usuario'];?></span>
          </h2>
            <h3>&nbsp;</h3>
      </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="templatemo_footer">
    	<div class="col col_16">
        	<div class="col col_16">
              <h4>Categorias</h4>
        	  <ul class="footer_menu">
                <li>Ação</li>
        	    <li>Comédia</li>
        	    <li>Animação</li>
        	    <li>Nacional</li>
      	    </ul>
      	  </div>
        	<h4>&nbsp;</h4>
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