<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store Theme - Product Details</title>
<meta name="keywords" content="web store, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store Theme is a free CSS template provided by templatemo.com." />
<link href="css/template_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
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

<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1></div>
        
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
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="filmes.php" >Filmes</a><a href="#">Sub menu 1</a><ul><li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
              </ul>
            </li>
            <li><a href="#">Lançamentos</a><a href="#">Sub menu 1</a><ul><li><a href="#">Sub menu 2</a></li>
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
        	<h2>Detalhes do Filme</h2>
            <div class="col col_13">
        	<a  rel="lightbox[portfolio]" href="images/product/10_I.jpg" title="Lady Shoes"><img src="images/product/10.jpg" alt="Image 10" /></a>            </div>
      <div class="col col_13 no_margin_right">
                <table>
                    <tr>
                        <td height="30" width="160">Price:</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td height="30">Availability:</td>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <td height="30">Model:</td>
                        <td>Product 14</td>
                    </tr>
                    <tr>
                        <td height="30">Manufacturer:</td>
                        <td>Apple</td>
                    </tr>
                    <tr><td height="30">Quantity</td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="alugarfilme.php" class="add_to_cart">Alugar</a>
			</div>
            <div class="cleaner h30"></div>
            
            <h5><strong>Descriçaõ do produto</strong></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl, et semper lectus augue blandit tellus. Quisque id bibendum libero.</p>	
            
            <div class="cleaner h50"></div>
            
            <h4>Outros produtos</h4>
        	<div class="col col_14 product_gallery">
            	<a href="filmedetai.php"><img src="images/product/01.jpg" alt="Product 01" border="0" /></a>
              <h3>Nome do Filme</h3>
                <p class="product_price">R$ 100</p>
                <a href="Categoria de filmes" class="add_to_cart">Alugar</a>            </div>        	
<div class="col col_14 product_gallery">
            	<a href="filmedetai.php"><img src="images/product/02.jpg" alt="Product 02" /></a>
        <h3>Nome do Filme</h3>
              <p class="product_price">R$ 200</p>
                <a href="Categoria de filmes" class="add_to_cart">Alugar</a>            </div>        	
      <div class="col col_14 product_gallery no_margin_right"><a href="productdetail.html"><a href="productdetail.html"><a href="productdetail.html"></a><a href="filmedetai.php"><img src="images/product/03.jpg" alt="Product 03" width="151" height="198" /></a></a></a>
        <h3>Nome do Filme</h3>
        <p class="product_price">R$ 120</p>
                <a href="Categoria de filmes" class="add_to_cart">Alugar</a>            </div>
<a href="#" class="more float_r">Ver todosl</a>
            
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