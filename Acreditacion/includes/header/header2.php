<style>
/*--------------- html-elements.css*/
/** Imágenes**/
  img {
	border: 0;
}

/*--------------- layout.css */
/** body / cuerpo **/
  body {
	/*margin: 0 auto;*/
    margin: 5px;	
}
#page, #closure-blocks {
	/*
     * Si deseas un página de ancho fijo y centrada en la ventana,
     * esta es la forma estandar para hacerlo. Veáse también en el archivo ie.css.
     * Para IE5 es necesario forzar el centradoel div.
     */ 
  
	margin: 0 auto;
	padding: 0 15px 0 15px;
	width:970px;
	
}
/** header / encabezado **/
  #header {
	width: 970px;
	clear:both;
}
#header-inner {
}
#logo-title {

}
#logo {
	margin-top:1160px;
	float: left;
}
#wrap_title {
	margin:0px;
	padding:0px;
	width: 970px;
	height: 54px;
	clear:both;
}
#title {
	height: 54px;
	float: left;
	width: 730px;
	clear:both;
	padding: 0px;
}
#aux_title {
	float:right;
	width: 240px;
	height: 54px;
	overflow:hidden;
}

/*--------------- drudg.css*/
/** Encabezados / headings **/

#title h1, #title h1 a {
	padding-left:10px;
	line-height:60px;
}

/*--------------- local.css*/

/** Título de la página **/
#title {
	background: #16325c url(header/bg_titulo.png) no-repeat top;
}
#title h1, #title h1 a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: normal;
	color:#fff;
	text-decoration:none;
	margin:0;
}
</style>
</head>
<body>
<div id="page">
  <div id="page-inner">
    <div id="header">
      <div id="header-inner" class="clear-block">
        <div id="sign">

          <div id="bloque_logo" >
            <div id="logout">
              		<a href="cierra.php">Cerrar Sesi&oacute;n</a>
                    </div>
          </div>
          <div id="wrap_sign_aux">  
          </div>
          <!-- Termina wrap_sign_aux-->
        </div>
        <!-- Termina sign-->
                <div id="wrap_title">

                    <div id="title">
            <h1> <a href="http://www.cucea.udg.mx/" title="Inicio" rel="home"> Centro Universitario de Ciencias Económico Administrativas</a> </h1>
          </div>
          <!-- Termina title-->
                              <div id="aux_title"> <a href="/" title="Inicio" rel="home"> <img src="header/logo1.png" alt="Inicio" height="55" id="logo-image"/></a> </div>

          <!-- Termina Aux-->
                  </div>
        <!-- Termina Wrap_title-->
                        
                               
              </div>
    </div>
    <!-- Termina header-inner, Termina header -->
      </div>
</div>
<!-- Termina page-inner, Termina page -->
</body>

