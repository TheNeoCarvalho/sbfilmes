<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SBFilmes</title>
<meta name="keywords" content="web store, contact page, form, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store Theme, Contact Form, free CSS template provided by templatemo.com" />
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

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
    	  <h1><a href="index.php">sbFilmes</a></h1>
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
                  <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div> <!-- END of sidebar -->
        
        <div id="content">
        	<h2>Informações de contato</h2>
			
            <div class="col col_13">
            <p>Etiam eget leo nisl. Morbi magna enim, lobortis vitae condimentum. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
            <div id="contact_form">
               <form method="post" name="contact" action="#">
                    
                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner h10"></div>
						
                    <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner h10"></div>
                        
                    <label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />
                    <div class="cleaner h10"></div>
        
                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>
 					
					<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
					
                </form>
            </div>
		</div>
        <div class="col col_13">
        	<h5>Location One</h5>
            111-303 Fusce nec ante at odio blandit, <br />
            In vitae lacus in purus interdum, 10640<br />
            Nam rhoncus, diam a mollis tempor<br /><br />
			<strong>Phone:</strong> 010-225-1800<br />
            <strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a> <br />
            <div class="cleaner divider"></div>
			
			<div class="cleaner h30"></div>
			
            <h5>Location Two</h5>
            120-300 Duis lacinia dictum, <br />
            Ullamcorper mattis magna non, 15520<br />
            Maecenas a diam, a mollis magna<br /><br />
			<strong>Phone:</strong> 010-226-1200<br />
            <strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a> <br />           
        </div>
        
        <div class="cleaner h30"></div>
        
        <iframe width="660" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14&amp;output=embed"></iframe>
            
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