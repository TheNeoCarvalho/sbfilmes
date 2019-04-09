<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SbFilmes</title>
<meta name="keywords" content="web store, products, free templates, website templates, CSS, HTML" />
<link href="../css/template_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/ddsmoothmenu.css" />

<script type="text/javascript" src="../jquery/jquery-1.8.3.min.js"></script>
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

<link rel="stylesheet" type="text/css" href="../css/styles.css" />
<script language="javascript" type="text/javascript" src="../scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/slideitmoo-1.1.js"></script>
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
    	<div>
        <h1 align="center">SBFilmes - Área Administrativa</a></h1>
        </div>
        
        <div id="header_right">
          
      </div> <!-- END -->
    </div> <!-- END of header -->
  <!-- end of templatemo_menu -->
    
  <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
    	  <div class="cleaner"></div>
     
          <!-- END of sidebar -->
        
  <div id="content" align="center">
        	<h2>Autenticação de Usuário</h2>
        	
          <div class="cleaner h50">
            <form id="form1" name="form1" method="post" action="">
              <label>Usuário
              <input type="text" name="usuario" id="usuario" />
              </label>
              <div class="cleaner"></div>
                        <label><br />
                        Senha
                        <input type="password" name="senha" id="senha" />
</label>
              <p>&nbsp;</p>
            </form>
      </div>       	
           
<div class="cleaner"></div>
      </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="templatemo_footer">
      <center>
			Copyright © 2013 | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
		</center>
    </div> <!-- END of footer -->   
   
</div>

</body>
</html>
