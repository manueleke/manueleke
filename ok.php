<?php
$conexion=mysqli_connect('localhost','root','','invernadero')
 ?>
<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link type="text/css" rel="stylesheet" href=style2.css />
    <link type="text/css" rel="stylesheet" href=style3.css />
    <link type="text/css" rel="stylesheet" href=style4.css />
    <meta charset="UTF-8">
    <title>Monitoreo de invernadero automático</title>
    <link rel="icon" href="logo.png" >

</head>

<body>

    <div class="contenedor">
        <h1>
            <center>Monitoreo de Invernadero Automático
            </center>
        </h1>
    </div>
    <div class="descripcion">
        <p> Se ha almacenado y analizado los datos de diferentes
            sistemas de protección de un invernadero
            automatizado.
            La idea de este proyecto surge a causa de el
            mercado, lo que obliga a los invernaderos a
            reducir sus desperdicios.
            Dichos desperdicios se deben principalmente a
            los cambios de clima, la sequedad, las aves del
            área, entre otros.<br>
            Las 3 medidas de protección propuestas por el
            gobierno con la finalidad de reducir la merma
            son:<br>
            <strong>|Protección día y noche</strong><br>
            <strong>Protección contra la fauna</strong><br>
            <strong>Protección contra la sequía</strong>
        </p>

    </div>
   <div class="eventos">
            <h3>Cantidad de eventos</h3>
            <p>Luego de 2 semanas de uso del sistema de protección propuesto por el gobierno, hemos logrado recopilar los siguientes datos:<br>  
                  Se han detectado en total, una cantidad de 44 activaciones.<br>
                  Se detectaron 14 activaciones del toldo nocturno.<br>
                  Se detectaron 7 activaciones del sistema de riego por la sequedad del suelo.<br>
                  Se detectaron 23 activaciones del toldo anti-aves.<br>
                  Teniendo un promedio aproximado de 4 activaciones por día.</p>
           </div>
  
  <div class="humedad">
        <style>
            * {
                text-align: center;
            }
        </style>
            <center><h3>Niveles De Humedad</h3></center>
            <table>
              <tr>
                    <th>FECHA<</th>
                    <th>INICIO<</th>
                    <th>FIN</th>
                    <th>HUMEDAD INICIAL</th>
                    <th>HUMEDAD FINAL</th>
                </tr>

                <tr>
                    <td>03/04/23</td>
                    <td>18:34</td>
                    <td>20:04</td>
                    <td>3 PH</td>
                    <td>8 PH</td>
                </tr>
                <tr>
                    <td>05/04/23</td>
                    <td>16:40</td>
                    <td>18:10</td>
                    <td>5 PH</td>
                    <td>7 PH</td>
                </tr>
                <tr>
                    <td>07/04/23</td>
                    <td>19:30</td>
                    <td>21:00</td>
                    <td>1 PH</td>
                    <td>9 PH</td>
                </tr>
                <tr>
                    <td>09/04/23</td>
                    <td>23:00</td>
                    <td>00:30</td>
                    <td>4 PH</td>
                    <td>7 PH</td>
                </tr>
                <tr>
                    <td>11/04/23</td>
                    <td>13:00</td>
                    <td>14:30</td>
                    <td>2 PH</td>
                    <td>8 PH</td>
                </tr>
                <tr>
                    <td>13/04/23</td>
                    <td>17:23</td>
                    <td>18:53</td>
                    <td>1 PH</td>
                    <td>7 PH</td>
                </tr>
                <tr>
                    <td>15/04/23</td>
                    <td>21:50</td>
                    <td>23:20</td>
                    <td>4 PH</td>
                    <td>9 PH</td>
                </tr>
          </table>
    </div>
    <div class="grid">
        <div class="dia">
            <h3>
                <center>Protección Día y Noche</center>
            </h3>
        </div>
        <div class="fauna">
            <h3>Protección contra la fauna</h3>
        </div>
        <div class="sequedad">
            <h3>Protección contra la sequía</h3>
        </div>
        <div class="desdia">
          <p>Su función es detectar la luz solar mediante sensores. Si hay poca luz, este activará un sistema automático en donde abrirá un toldo que lo protegerá del frío nocturno.               Cuando la luz sea suficiente, se volverá a abrir el toldo cobertor.</p>
        </div>

        <div class="desfauna">
            <p>Su función es percibir, seres vivos que puedan causarle daño a las flores. El sistema ocupa un sensor de
                proximidad para percibir movimiento de un ave en las flores. Si detecta algún ave, el sistema deberá
                desprender un toldo sobre las flores para protegerlas de este hasta el momento en que el ave se va. </p>
        </div>


        <div class="dessequedad">
            <p>Su función es, mediante sensores, detectar bajos niveles de agua en el suelo. Si los sensores perciben
                una baja humedad, éste activará un grifo que libere agua para humedecer el suelo. Cuando el suelo tenga
                una humedad adecuada para las plantas, los sensores cerrarán el grifo.</p>
        </div>
    </div>
         

    
  <button onclick="showBox1(1)"><strong>Ver resultados sensor luz</strong></button>
	<button onclick="showBox2(2)"><strong>Ver resultados sensor fauna</strong></button>
	<button onclick="showBox3(3)"><strong>Ver resultados sensor humedad</strong></button>


  <div class="tablas">
    <div class="box"id="box1">
       <div>
      <div class="resdia">
      <h1>Resultados del sistema de protección día y noche</h1>
        <p>La protección día y noche, se basa en un sensor que detecta la escases de luz, al detectarla, este despliega una carpa que cubre el invernadero con el fin de evitar el cambio de                 temperatura<br>
            Teniendo activa la protección de día y noche, hemos podido registrar un total de 14 activaciones en 2 semanas, lo cual nos ha servido para evitar los repentinos                                     cambios de temperatura en el ambiente que afecta al invernadero y produce perdidas de los cultivos. </p>
      </div>
         
         <div class="eventosdia">
        <h3>Activaciones</h3>
        <p>A la fecha se han registrado 44 eventos del sistema de protección del invernadero<br>
            De los eventos totales, 14 de ellos fueron de las activaciones del toldo que mide la luminosidad</p>
      </div>

          <img src="luz repre.png" class="box1img" />
         
    <div class= "contenedor3">
      <div class="tabladia">
        <h3>Registros de sensor</h3>
         <table>
                <tr>
                    <th>FECHA</th>
                    <th>APERTURA TOLDO</th>
                    <th>CIERRE TOLD></th>
                </tr>
                <?php
                $sql="SELECT * from sensor luz";
                $result=mysqli_query($conexion)

                while($mostrar=mysqli_fetch_array($result)){
                    ?>
                <tr>
                    <td><?php echo $mostrar['Fecha'] ?></td>
                    <td><?php echo $mostrar['Apertura toldo'] ?></td>
                    <td><?php echo $mostrar['Cierre toldo'] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
      </div>
      
      
      <div class="grafluz">
      <img src="grafico luz.png" class="img1" width="1000px" height="400x"/>
      </div>
       </div>
    </div>
    </div>
    <div class="box"id="box2">
      <div>
        <div class="resfau">
      <h1>Resultados del sistema de protección contra la fauna</h1>
        <p>La función del sistema contra la fauna, es desprender un toldo sobre las plantas la distancia necesaria para alejar el peligro. Posterior al peligro se retrae. Todo este sistema funciona con sensores de proximidad<br>
        Teniendo activa esta defensa hemos podido registrar 23 eventos con un promedio aproximado de 1.6 actvaciones diarias durante 2 semanas</p>
        </div>

      <div class="eventosfauna">
        <h3>Activaciones</h3>
        <p>A la fecha se han registrado 44 eventos del sistema de protección del invernadero<br>
            De los eventos totales, 23 de ellos fueron de las activaciones del toldo anti-aves.</p>
      </div>

        <img src="sensor fauna.png">
        
    <div class="contenedor2">
      <div class="tablafauna">   
        <style>
            * {
                text-align: center;
            }
        </style>
        <h3>Registros de sensor</h3>
         <table>
                <tr>
                    <th>FECHA</th>
                    <th>APERTURA TOLDO</th> 
                    <th>DISTANCIA</th>
                </tr>
                <?php
                $sql="SELECT * from sensor fauna";
                $result=mysqli_query($conexion)

                while($mostrar=mysqli_fetch_array($result)){
                    ?>
                <tr>
                    <td><?php echo $mostrar['Fecha'] ?></td>
                    <td><?php echo $mostrar['Apertura toldo'] ?></td>
                    <td><?php echo $mostrar['distancia'] ?></td>
                </tr>
                <?php
                }
                ?>
          
            </table>
      </div>
      
      <div class="graffau"><center>
      <img src="grafico fauna.png" class="img2" width="700px" height="400px"/></center>
      </div>
    </div>
      </div>
    </div>
    
    <div class="box"id="box3">
      <div>
       
      <div class="reseq">
      <h1>Resultados Del Sistema De Protección Contra La Sequía</h1>
        <p>La protección contra la sequía, se basa en un sensor que detecta la escases de humedad en el suelo, al detectarla, éste abre un grifo que regará las plantas hasta alcanzar una humedad con la que puedan sobrevivir. Cuando alcancen esta humedad, los sensorees la detectarán y cerrarán los sistemas de riego<br>
            Teniendo activa la protección contra la sequia hemos podido registrar un total de 7 activaciones en 2 semanas, lo cual nos ha servido para evitar que las plantas se sequen y no pasen a ser merma. </p>
      </div>
      
      <div class="activ">
        <h3>Activaciones</h3>
        <p>A la fecha se han registrado 44 eventos del sistema de protección del invernadero<br>
            De los eventos totales, 7 de ellos fueron de las activaciones del sistema que riega las plantas</p>
      </div>
        
        <img src="sequia repre.png">
   
        <div class="contenedor4">
      <div class="tablaseq" id=sh >
        <h3>Registros de sensor</h3>
         <table>
                <tr>
                    <th>FECHA</th>
                    <th>Apertura de toldo</th>
                    <th>Nivel de Humedad</th>
                </tr>
                <?php
                $sql="SELECT * from sensor luz";
                $result=mysqli_query($conexion)

                while($mostrar=mysqli_fetch_array($result)){
                    ?>
                <tr>
                    <td><?php echo $mostrar['Fecha'] ?></td>
                    <td><?php echo $mostrar['Apertura toldo'] ?></td>
                    <td><?php echo $mostrar['Nivle de Humedad'] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        <img src="graf.sen.png"  class="img3"  width="800px" height="400px"/>
      </div>
    </div>
    </div>
    
  </div>

<script src="tablas.js"></script>
  
</body>

</html>