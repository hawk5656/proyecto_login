
<!-- Se inicia el login se crea el contenedor -->
<div id="containerlog" class="container jumbotron" style="margin-top:20px;">
            <div class="row">
            
<!-- .............................................Se crea la vista para dispositivos extra small...........................................................-->

                <form id="login" class="border-radio form-group" action="" method="post" name="login_form"  >
                                          
                        <div id="visiblexs" class="visible-xs-block xs">
                                    <legend> Sistema de Acreditacion </legend>
                                    <div id="usuarioxs" class="centro">
                                       <!-- <label for="" class="border-radius">Usuario</label> -->
                                        <input type="text" class="form-control" placeholder="User" name="email">
                                    </div>
                                    
                                    <div id="passwordxs" class="">
                                        <!-- <label for="" class="">Password</label> -->
                                        <input type="password" class="form-control"  placeholder="Password" name="password" id="password" >
                                    </div>
    
                                    <div  id="botonxs" class="">
                                        <input type="submit" class="btn btn-default btn-lg" value="Acceso" onclick="return revisamov(this.form.email, this.form.password);" >
                                    </div>
                                    <div id="recuperaxs olvide">
                                    <a  href="../index.php?opcion=2">Olvide mi contraseña</a>
                                    </div>
                         </div>
                             
                   </form>
                         
<!-- .............................................Se crea la vista para dispositivos small .............................................................-->
                       
                <form id="login" class="border-radio form-group" action="../code_files/process_login.php" method="post" name="login_form">
                                        
        
                               
                            <div id="visiblesm" class="visible-sm-block container">
                                        
                                        
                                            <div class="row">
                                                    <div class="centro" style="margin:0;">
                                                         <legend><h3><strong>Sistema de Acreditacion</strong></h3></legend>
                                                    </div>
                                                </div>
                                        
                                                <div id="usuariosm" class="">
                                                    <div id="imglog" class="col-sm-3">
                                                        <img class="img-responsive" src="../img/candado.gif" alt="">
                                                    </div>
                                                    
                                                    <div id="logsm" class="col-sm-9">
                                                            <div id="nombresm" class="form-inline centro">
                                                                Usuario
                                                                <input type="text" class="form-control" required="required" name="email">
                                                            </div>
                                                            
                                                            <div  id="passwordsm"class="form-inline centro">
                                                                Password 
                                                                <input type="password" class="form-control" required="required" name="password" id="password" >
                                                             </div>
                                                             
                                                                   <div id="botonsm" class="" >
                                                                        
                                                                        <div class="col-sm-4">
                                                                            <input type="submit" class="btn btn-default btn-lg " value="Acceso" onclick="return formhash(this.form, this.form.password);">
                                                                        </div>      
                                                                        <div class="col-sm-8 olvide">
                                                                            <a  href="../index.php?opcion=2">Olvide mi contraseña</a>
                                                                        </div>
                                                                    </div>
                                                              </div>        
        
                                                    </div>       
                             </div>
        
                       </form>

<!-- .............................................Se crea la vista para dispositivos Medianos.............................................................-->

                <form id="login" class="border-radio form-group" action="../code_files/process_login.php" method="post" name="login_form">
        
                            <div id="visiblemd" class="visible-md container">
                                       <div class="row">
                                                <div class="centro">
                                                     <legend><h3><strong>Sistema de Acreditacion</strong></h3></legend>
                                                </div>
                                        </div>
                                            
                                        <div id="usuariomd" class="">
                                             <div id="imglog" class="col-md-3">
                                                        <img class="img-responsive" src="../img/candado.gif" alt="">
                                                    </div>
                                                    
                                                    <div id="logmd" class="col-md-9">
                                                            
                                                           <div id="nombremd" class="form-inline centro">
                                                               <label> Usuario </label>
                                                                <input type="text" class="form-control" required="required" name="email">
                                                           </div>
                                                            
                                                           <div  id="passwordmd"class="form-inline centro">
                                                           		<label>Password </label>
                                                                <input type="password" class="form-control" required="required" name="password" id="password" >
                                                            </div>
                                                            
                                                            <div id="botonmd" class="">
                                                                <div class="col-md-4">
                                                                    <input type="submit" class="btn btn-default btn-md" value="Acceso" onclick="return formhash(this.form, this.form.password);">
                                                                </div>  
                                                                <div class="col-md-8 olvide">
                                                                    <a  href="../index.php?opcion=2">Olvide mi contraseña</a>
                                                                </div>
                                                                    
                                                            </div>
                                                             
                                                     </div>        
        
                                               </div>
                            
                              </div>
        
                       </form>

<!-- .............................................Se crea la vista para dispositivos Pantalla larga.......................................................-->

                <form id="login" class="border-radio form-group" action="../code_files/process_login.php" method="post" name="login_form">
                            
        
                              <div id="visiblesm" class="visible-lg container">
                                       <div class="row">
                                                <div class="centro">
                                                     <legend><h3><strong>Sistema de Acreditacion</strong></h3></legend>
                                                </div>
                                        </div>
                                            
                                        <div id="usuariolg" class="">
                                             <div id="imglog" class="col-lg-3">
                                                        <img class="img-responsive" src="../img/candado.gif" alt="">
                                                    </div>
                                                    
                                                    <div id="loglg" class="col-lg-9">
                                                            
                                                           <div id="nombrelg" class="form-inline centro">
                                                               <label> Usuario </label>
                                                                <input type="text" class="form-control" required="required" name="email">
                                                           </div>
                                                            
                                                           <div  id="passwordlg"class="form-inline centro">
                                                           <label>Password </label>
                                                                <input type="password" class="form-control" required="required" name="password" id="password" >
                                                            </div>
                                                            
                                                            <div id="botonlg" class="">
                                                                <div class="col-lg-4">
                                                                    <input type="submit" class="btn btn-default btn-lg" value="Acceso" onclick="return formhash(this.form, this.form.password);">
                                                                </div>  
                                                                <div class="col-lg-6 olvide">
                                                                    <a  href="../index.php?opcion=2">Olvide mi contraseña</a>
                                                                </div>
                                                                    
                                                            </div>
                                                             
                                                     </div>        
        
                                               </div>
                            
                              </div>
                        </form>
 
       		</div>
</div>