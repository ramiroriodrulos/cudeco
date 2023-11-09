<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap en HTML</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
   

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card text-white bg-success mb-3 text-center ">
                        <h3> Datos del Niño o la Niña </h3>
                    </div>
                    <form action="controladores/registro.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre1">Nombre (no es necesario el apellido)</label>
                                        <input type="text" class="form-control" name="nombre1" id="nombre1" placeholder="digite primer nombre" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre2">Fecha nacimiento </label>
                                        <input type="text" class="form-control" name="Fecha1" id="Fecha1" placeholder=" fecha ">
                                        
                                        <label for="nombre2">Edad </label>
                                        <input type="text" class="form-control" name="Edad1" id="Edad1" placeholder=" edad"> 


                                    </div>

                                    <div class="form-group">
                                        <label for="apellido1">Sexo</label>
                                        <input type="text" class="form-control" name="sex1" id="sex1" placeholder="digite sexo" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido2">Lugar de nacimiento</label>
                                        <input type="text" class="form-control" name="nac1" id="nac1" placeholder="cuidad">
                                    </div>

                                    <div class="form-group">
                                        <label for="documento">¿Cuantos niños hay en tu familia? </label>
                                        <input type="text" class="form-control" name="nin1" id="nin1" placeholder="número" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido2">¿Quienes viven con el niño/a?</label>
                                        <input type="text" class="form-control" name="conv1" id="conv1" placeholder="describir">
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido2">Orden de nacimiento del niño</label>                                        
                                    </div>
                                                                      
                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="ord1" id="flexRadioDefault1">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Primero
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="ord1" id="flexRadioDefault2" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Segundo
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="ord1" id="flexRadioDefault3" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Tercero
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="ord1" id="flexRadioDefault4" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Otro
                                       </label>
                                       </div>


                                    <div class="form-group">
                                        <label for="apellido2">¿Con quien pasa el niño la mayor parte del día ?</label>                                        
                                    </div>
                                                                      
                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="fam1" id="flexRadioDefault5">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Mama 
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="fam1" id="flexRadioDefault6" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Papa 
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="fam1" id="flexRadioDefault7" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Abuelo/a
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="fam1" id="flexRadioDefault8" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Otro
                                       </label>
                                       </div>

                                     <div class="form-group">
                                        <label for="apellido2">¿El niño asiste a la guardería?</label>                                                                        </div>
                                                                      
                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="rta1" id="flexRadioDefault9">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Si
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="rta1" id="flexRadioDefault10" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                       </label>
                                       </div>

                                       <div class="form-group">
                                        <label for="apellido2">En caso que sí asista</label>                                                                        </div>
                                                                      
                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="time1" id="flexRadioDefault11">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Hace menos de 6 meses
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="time1" id="flexRadioDefault12" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Hace más de 6 meses
                                       </label>
                                       </div>
                                     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="time1" id="flexRadioDefault13" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Mas de una año
                                       </label>
                                       </div>

                                       <div class="form-group">
                                        <label for="apellido1">Horas al dia</label>
                                        <input type="text" class="form-control" name="HorasXdia" id="hr" placeholder="Ingrese un número" required>
                                       </div>

                                       <div class="form-group">
                                        <label for="apellido1">Veces por semana </label>
                                        <input type="text" class="form-control" name="VecesXsemana" id="VxS" placeholder="Ingrese un número" required>
                                       </div>
                                       <hr>
                               

                                </div>
                            </div>
                        
                        <div class="card bg-secondary text-center text-white">
                            <h3>Contacto con otras lenguas  </h3>
                         </div>
                         <hr>

                         <div class="form-group">
                              <label for="apellido2">¿El niño/a tiene contacto con lenguas que no sea el español?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="otrasl" id="flexRadioDefault14">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="otrasl" id="flexRadioDefault15" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>

                            <label for="apellido2">En caso que así sea </label>                                                                        </div>
                                                                      
                                       <
                                       <div class="form-group">
                                        <label for="apellido1">¿Con qué lenguas tiene contacto?</label>
                                        <input type="text" class="form-control" name="HorasXdia" id="apellido1" placeholder="detallar" required>
                                       </div>

                                       <div class="form-group">
                                        <label for="apellido1">¿Desde que edad?</label>
                                        <input type="text" class="form-control" name="VecesXsemana" id="apellido1" placeholder="Ingrese número" required>
                                       </div>  

                                       <div class="form-group">
                                        <label for="apellido1">¿Con quienes las habla ?</label>
                                        <input type="text" class="form-control" name="VecesXsemana" id="apellido1" placeholder="detallar" required>
                                       </div>  
                                       <hr>
                                
                         <div class="card bg-secondary text-center text-white">
                            <h3>Información relativa a la salud del niño o la niña  </h3>
                         </div>
                         <hr>

                         <div class="form-group">
                              <label for="apellido2">¿Nacio antes de los nueve meses?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta2" id="flexRadioDefault16">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta2" id="flexRadioDefault17" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>
                            
                                       <div class="form-group">
                                        <label for="apellido1">¿Con cunatas semanas de gestación?</label>
                                        <input type="text" class="form-control" name="sem2" id="apellido1" placeholder=" ingrese numero" required>
                                       </div>

                                       <div class="form-group">
                                        <label for="apellido1">¿Cuanto peso al nacer?</label>
                                        <input type="text" class="form-control" name="pes" id="apellido1" placeholder="Ingrese número" required>
                                       </div>  


                            <div class="form-group">
                              <label for="apellido2">¿Tuvo alguna enfermedad al nacer, problema de audición o lenguaje?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta3" id="flexRadioDefault18">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta3" id="flexRadioDefault19" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>
                            
                              <div class="form-group">
                              <label for="apellido1">Describir el problema</label>
                              <input type="text" class="form-control" name="desc1" id="apellido1" placeholder=" Texto" required>
                              </div>             
               
                            
                           <div class="form-group">
                              <label for="apellido2">¿Ha sufrido infecciones en el oído ?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta4" id="flexRadioDefault20">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta4" id="flexRadioDefault21" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>
                            
                              <div class="form-group">
                              <label for="apellido1">¿Cuantas por año ? </label>
                              <input type="text" class="form-control" name="HorasXdia" id="apellido1" placeholder=" Texto" required>
                              </div> 

                           <div class="form-group">
                              <label for="apellido2"> ¿Ha tenido problemas de salud importante antes, durante o despues del nacimiento ?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta5" id="flexRadioDefault22">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta5" id="flexRadioDefault23" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>
                            
                              <div class="form-group">
                              <label for="apellido1">Describir el problema  </label>
                              <input type="text" class="form-control" name="HorasXdia" id="apellido1" placeholder=" Texto" required>
                              </div> 
                              <hr>   

                           
                    <div class="card bg-secondary text-center text-white">
                      <h3> Datos de los padres </h3>
                    </div>
                    <form action="controladores/registro.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre1">Nombre de la Madre</label>
                                        <input type="text" class="form-control" name="nombre2" id="nombre1" placeholder="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Edad de la Madre</label>
                                        <input type="text" class="form-control" name="ed2" id="nombre1" placeholder="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Lugar de origen de la Madre</label>
                                        <input type="text" class="form-control" name="orig2" id="nombre1" placeholder="" required>
                                    </div>
                             

                                    <div class="form-group">
                                        <label for="nombre1">Nombre del Padre</label>
                                        <input type="text" class="form-control" name="nombre3" id="nombre1" placeholder="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Edad del padre</label>
                                        <input type="text" class="form-control" name="ed3" id="nombre1" placeholder="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Lugar de origen del padre</label>
                                        <input type="text" class="form-control" name="orig3" id="nombre1" placeholder="" required>
                                    </div>

                              <div class="form-group">
                              <label for="apellido2"> Persona que ha contestado el cuestionario </label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta7" id="flexRadioDefault25">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Madre 
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rta7" id="flexRadioDefault26" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               Padre 
                              </label>
                             </div>
                            
                              <div class="form-group">
                              <label for="apellido1">Otro </label>
                              <input type="text" class="form-control" name="HorasXdia" id="apellido1" placeholder=" especificar" required>
                              </div> 
                              <hr>  


                         <div class="card bg-secondary text-center text-white">
                      <h3> Ocupación </h3>
                    </div>
                    <form action="controladores/registro.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre1"> MADRE Ocupación </label>
                                        <input type="text" class="form-control" name="moc" id="nombre1" placeholder="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Breve descrición</label>
                                        <input type="text" class="form-control" name="mdes" id="nombre1" placeholder="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">PADRE Ocupación</label>
                                        <input type="text" class="form-control" name="poc" id="nombre1" placeholder="" required>
                                    </div>
                             

                                    <div class="form-group">
                                        <label for="nombre1">Breve descrición</label>
                                        <input type="text" class="form-control" name="pdesc" id="nombre1" placeholder="" required>
                                    </div>



                    <div class="col-md-8">
                    
                    <form action="controladores/registro.php" method="post">

                        <hr>
                        <div class="card bg-secondary text-center text-white">
                            <h3>Nivel de instrucción del Padre (Escolaridad) </h3>
                         </div>
                         <hr>

                        <div class="card-body">
                              <div class="row">
                                   <div class="col-sm-12">
                                     
                                      <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="pop1" id="flexRadioDefault27">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Primaria incompleta
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="pop1" id="flexRadioDefault28" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Primaria completa
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="pop1" id="flexRadioDefault29" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Secundaria Incompleta
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="pop1" id="flexRadioDefault30" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Secundaria Completa
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="pop1" id="flexRadioDefault31">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Terciario incompleto
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="pop1" id="flexRadioDefault32" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Terciario completo
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="pop1" id="flexRadioDefault33">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Universitario incompleto
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="pop1" id="flexRadioDefault34" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Universitario completo
                                       </label>
                                       </div>


                                      
                                   <div class="col-sm-12">                                     
                                    <hr>

                                     <div class="card bg-secondary text-center text-white">
                                       <h3> Nivel de instrucción del Madre (Escolaridad) </h3>
                                      </div>
                                      <hr>
                                            
                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="mom1" id="flexRadioDefault35">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Primaria incompleta
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="mom1" id="flexRadioDefault36" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Primaria completa
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="mom1" id="flexRadioDefault37" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Secundaria Incompleta
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="mom1" id="flexRadioDefault38" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Secundaria Completa
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="mom1" id="flexRadioDefault39">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Terciario incompleto
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="mom1" id="flexRadioDefault40" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Terciario completo
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="mom1" id="flexRadioDefault41">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Universitario incompleto
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="mom1" id="flexRadioDefault42" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Universitario completo
                                       </label>
                                       </div>




                                    </div>

                                                                          
                                    </div>


                        </div>
                        <hr>
                        <div class="card-footer text-center text-center">
                            <button type="submit" class="card text-white text-center bg-warning mb-3">Registrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>



    <script src="js/bootstrap.min.js"></script>
</body>

</html>