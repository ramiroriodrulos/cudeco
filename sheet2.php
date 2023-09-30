<?php 
session_start();
require_once('validarSesion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cudeco</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/ico">
</head>

<body>
   
<?php include 'header.php'?>

<section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 p-2">
                <div class="card bg-danger text-center text-white">
                        <h3>1ª Parte: el uso de las palabras</h3>
                    </div>
                    <form action="cuestionario.php" method="POST">
                        <hr>
                        <div class="card bg-secondary text-center text-white">
                            <h3>1.- Sonidos de cosas y animales </h3>
                         </div>

                        <div class="card-body">
                              <div class="row">
                                   <div class="col-sm-12">
                                     
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="am" name="am">
                                       <label class="form-check-label" for="am">¡am!</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="cuacua" name="cuacua">
                                       <label class="form-check-label" for="cuacua">cua-cuá</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="muu" name="muu">
                                       <label class="form-check-label" for="muu">muu</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="quiquiriqui" name="quiquiriqui">
                                       <label class="form-check-label" for="quiquiriqui">qui-qui-ri-quí</label>
                                      </div>

                                    </div>


                                 </div>
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="ay" name="ay">
                                      <label class="form-check-label" for="ay">¡ay!   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="guauguaubabau" name="guauguaubabau">
                                       <label class="form-check-label" for="guauguaubabau">guau-guau/ba-bau</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="piopio"  name="piopio">
                                       <label class="form-check-label" for="piopio">pio-pío</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="rumrum" name="rumrum">
                                       <label class="form-check-label" for="rumrum">rum-rum(coche)</label>
                                      </div>

                                    </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="beemee" name="beemee">
                                      <label class="form-check-label" for="beemee">bee/mee   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="miau" name="miau">
                                       <label class="form-check-label" for="miau">miau</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="pum" name="pum">
                                       <label class="form-check-label" for="pum">¡pum!</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="tutu" name="tutu">
                                       <label class="form-check-label" for="tutu">tu-tú</label>
                                      </div>


                                   <div class="col-sm-12">                                     
                                    <hr>

                                     <div class="card bg-secondary text-center text-white">
                                       <h3>2.- Animales de verdad y de juguete </h3>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="abeja" name="abeja">
                                       <label class="form-check-label" for="inlineCheckbox1">abeja</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="conejo" name="conejo">
                                       <label class="form-check-label" for="inlineCheckbox2">conejo</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="lobo" name="lobo">
                                       <label class="form-check-label" for="inlineCheckbox2">lobo</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="pingüino" name="pingüino" >
                                       <label class="form-check-label" for="inlineCheckbox3">pingüino</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="animal" name="animal" >
                                       <label class="form-check-label" for="inlineCheckbox1">animal</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="cucaracha" name="cucaracha" >
                                       <label class="form-check-label" for="inlineCheckbox2">cucaracha</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="mariposa" name="mariposa" >
                                       <label class="form-check-label" for="inlineCheckbox2">mariposa</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="pollito" name="pollito" >
                                       <label class="form-check-label" for="inlineCheckbox3">pollito</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="araña" name="araña" >
                                       <label class="form-check-label" for="inlineCheckbox1">araña</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="elefante" name="elefante" >
                                       <label class="form-check-label" for="inlineCheckbox2">elefante</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="mono" name="mono" >
                                       <label class="form-check-label" for="inlineCheckbox2">mono</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="rana" name="rana" >
                                       <label class="form-check-label" for="inlineCheckbox3">rana</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="ardilla" name="ardilla" >
                                       <label class="form-check-label" for="inlineCheckbox1">ardilla</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="foca" name="foca" >
                                       <label class="form-check-label" for="inlineCheckbox2">foca</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="mosca" name="mosca" >
                                       <label class="form-check-label" for="inlineCheckbox2">mosca</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="ratón/rata" name="ratón/rata" >
                                       <label class="form-check-label" for="inlineCheckbox3">ratón/rata</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="ballena" name="ballena" >
                                       <label class="form-check-label" for="inlineCheckbox1">ballena</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="gallina" name="gallina" >
                                       <label class="form-check-label" for="inlineCheckbox2">gallina</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="mosquito" name="mosquito" >
                                       <label class="form-check-label" for="inlineCheckbox2">mosquito</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="sapo" name="sapo" >
                                       <label class="form-check-label" for="inlineCheckbox3">sapo</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="bicho" name="bicho" >
                                       <label class="form-check-label" for="inlineCheckbox1">bicho</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">gato</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">oso</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">tigre</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">burro   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">gusano</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">oveja</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">tortuga</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">caballo   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">hipopótamo</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">pájaro</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">vaca</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">cebra   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">hormiga</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">pato</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">víbora</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">chancho   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">Jirafa</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">pavo</label>
                                      </div>

                                      

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">ciervo/bambi   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">lechuza</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">perro</label>
                                      </div>

                                      
                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">cocodrilo   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">león</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">pescado/pez</label>
                                      </div>

                                      
                                    </div>


                                     <div class="col-sm-12">                                     
                                    <hr>

                                     <div class="card bg-secondary text-center text-white">
                                       <h3>3.- Vehículos de verdad y de juguete </h3>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">ambulancia   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">barco</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">cochecito de bebé</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">tractor</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">auto   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">bicicleta/bici</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">helicóptero</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">tren</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">auto de policía   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">camión</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">micro/colectivo</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">triciclo</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">avión   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">camión de bomberos</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">moto</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">taxi</label>
                                      </div>

                                    </div>



                                    <div class="col-sm-12">                                     
                                    <hr>

                                     <div class="card bg-secondary text-center text-white">
                                       <h3>4.- Alimentos y bebidas </h3>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">aceituna   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">comida/papa</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">maní</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">salsa</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">agua   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">dulce</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">manteca</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">sandía</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">alfajor   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">durazno</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">manzana</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">soda/gaseosa</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">arroz   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">empanada</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">mate</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">sopa</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">atún   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">fideos</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">melón</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">té</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">azúcar   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">frutilla</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">mermelada</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">tomate</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">banana   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">galletita</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">milanesa</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">torta</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">café   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">gelatina</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">naranja</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">tortilla</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">calabaza   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">hamburguesa/Paty</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">pan</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox3">uvas</label>
                                      </div>

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">caramelo   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">helado</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                      <label class="form-check-label" for="inlineCheckbox2">papas fritas</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                      <label class="form-check-label" for="inlineCheckbox2">vainilla</label>
                                      </div>

                                      

                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">carne   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">hielo</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">papas</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">yogurt</label>
                                      </div>

                                      
                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">cereales   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">huevo</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">pescado</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">zanahoria</label>
                                      </div>

                                      
                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">chicle   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">jamón</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">pizza</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">zapallo</label>
                                      </div>

                                      
                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">choclo   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">jugo</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">pochoclo</label>
                                      </div>

                                      
                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">chocolatada   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">leche</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">pollo</label>
                                      </div>

                                      
                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">chocolate   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">lentejas</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">queso</label>
                                      </div>

                                      
                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">chupetín   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">licuado</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">sal</label>
                                      </div>

                                      
                                    </div>

                                    <div class="col-sm-12">                                     
                                    
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox1">coca   </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">limonada</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="" name="" >
                                       <label class="form-check-label" for="inlineCheckbox2">salchicha/pancho</label>
                                      </div>
                                 
                                    </div>
                              </div> 
                             </div>
                             <div class="card-footer text-center">
                            <button type="submit" class="btn btn-danger btn-lg">Completar</button>
                          </div>
                           <hr>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <?php include 'footer.php'?>
    </section>



    <script src="js/bootstrap.min.js"></script>
</body>

</html>