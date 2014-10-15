
<!-- Se inicia el login se crea el contenedor -->
<div id="containerlog" class="container jumbotron" style="margin-top:20px;">
            <div class="row">
        		<form id="login" class="border-radio form-group" action="../Acreditacion/index.php" onclick="">
                	                  
            <!-- Se crea vista para dispositivos extra small -->
					<div id="visiblexs" class="visible-xs-block xs">
                    			<legend> Sistema de Acreditacion </legend>
                                <div id="usuarioxs" class="centro">
                                   <!-- <label for="" class="border-radius">Usuario</label> -->
                                    <input type="text" class="form-control" required="required" placeholder="User">
                                </div>
                                
                                <div id="passwordxs" class="">
                                    <!-- <label for="" class="">Password</label> -->
                                    <input type="password" class="form-control" required="required" placeholder="Password">
                                </div>

                                <div  id="botonxs" class="">
                                    <input type="submit" class="btn btn-default btn-lg" value="Acceso">
                                </div>
                                <div id="recuperaxs">
                                <a  href="../Acreditacion/recuperacontrasela.php">Olvide mi contraseña</a>
                                </div>
                     </div>
                                
            <!-- Se crea la vista para dispositivos small -->
                       
        			<div id="visiblesm" class="visible-sm-block container">
                                
		                                <div class="row">
		                                	<div class="centro">
		                                		 <legend><h3><strong>Sistema de Acreditacion</strong></h3></legend>
		                                	</div>
		                                </div>
                                
                                    	<div id="usuariosm" class="">
                                        	<div id="imglog" class="col-sm-3">
                                             	<img class="img-responsive" src="../acreditacion/img/candado.gif" alt="">
                                            </div>
                                            
                                        	<div id="logsm" class="col-sm-9">
                                            		<div id="nombresm" class="form-inline centro">
                                                        Usuario
                                                        <input type="text" class="form-control" required="required">
                                                    </div>
                                                    
                                                    <div  id="passwordsm"class="form-inline centro">
                                                        Password 
                                                        <input type="password" class="form-control" required="required">
                                                     </div>
                                            </div>        

                                        </div>

                                            <div id="botonsm" class="">

                                                     	<div class="col-sm-4">
                                                     		<a  href="../Acreditacion/recuperacontrasela.php">Olvide mi contraseña</a>
                                                     	</div>
                                                     	<div class="col-sm-4">
                                                     		<input type="submit" class="btn btn-default btn-lg " value="Acceso">
                                                     	</div>      
                                            </div>
                                            
                                     	
                          
                     </div>


                    <!-- Se crea la vista para dispositivos middle y large -->
        			<div id="visiblesmd" class="visible-md-block visible-lg-block form-inline">
        				 	<div id="usuariomd" class="">
                                    <label for="" class="">Usuario</label>
                                    <input type="text" class="form-control" required="required">
                                </div>
                                
                                <div id="passwordmd" class="">
                                    <label for="" class="">Password</label>
                                    <input type="password" class="form-control" required="required">
                                </div>

                                <div id="botonmd" class="">
                                    <input type="submit" class="btn btn-primary " value="Acceso">
                             </div>
        			</div>
        			
                                
        		</form>
       		</div>
</div>