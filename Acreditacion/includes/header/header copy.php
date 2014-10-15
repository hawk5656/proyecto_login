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

#page {
	/*
     * Si deseas un página de ancho fijo y centrada en la ventana,
     * esta es la forma estandar para hacerlo. Veáse también en el archivo ie.css.
     * Para IE5 es necesario forzar el centrado del div.
     */
    margin: 10 auto;
	padding: 0 15px 0 140px;
	width:970px;
	
}
html>body #page {
	/*
     * Si deseas un página de ancho fijo y centrada en la ventana,
     * esta es la forma estandar para hacerlo. Veáse también en el archivo ie.css.
     * Para IE5 es necesario forzar el centrado del div.
     */
  
	margin: 0 auto;
	padding: 0 15px 0 15px;
	width:970px;
	
}
/** header / encabezado **/
  #header {
	width: 990px;
	clear:both;
}
#header-inner {
}

#bloque_logo{
	width:970px;
	height:90px;
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
	float:left;
	width: 240px;
	height: 60px;
	background-color:#16325C;
}

html>body #aux_title {
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
	background: #16325c url(/cvu2/includes/header/bg_titulo.png) no-repeat top;
}
#title h1, #title h1 a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: normal;
	color:#fff;
	text-decoration:none;
	margin:0;
}

#logout
{
margin-top: -14px;
text-align:right;
font-size:13px;
}

</style>

</head>
<body>
<div id="page">
  <div id="page-inner">
    <div id="header">
      <div id="header-inner" class="clear-block">
        <div id="sign">

          <div id="bloque_logo" > <a href="http://udg.mx" title="Universidad de Guadalajara" > <img src="/cvu2/includes/header/logo1.jpg" alt="Universidad de Guadalajara" /> </a> 
          <div id="logout">
              		Bienvenid@ <?php session_start(); echo $_SESSION['correo']; ?>
                    <a href="/cvu2/cierra.php">Cerrar Sesi&oacute;n</a>
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
                              <div id="aux_title"> <a href="http://www.cucea.udg.mx" title="Inicio" rel="home"> <img src="/cvu2/includes/header/logo1.png" alt="Inicio" id="logo-image"/></a> </div>

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

