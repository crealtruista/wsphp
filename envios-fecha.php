<?php
    //se incluyen las funciones, cabecera y barra de menu
    
    include 'inc/funciones/funciones.php';
    include 'inc/templates/header.php';
    include 'inc/templates/barra.php';
?>

<div class="contenedor">
    <?php
        include 'inc/templates/sidebar.php';
    ?>
    <main class="contenido-principal">

         <center>
            <h1>WebService Actual: 
                <span>Envios por Fecha</span>
            </h1>
            <h4>
                <span>Devuelve un listado de los envíos grabados por el usuario en un rango de fechas.</span> 
            </h4>
        </center>
        <form action="#" method="POST" class="agregar-tarea">
            <div class="campo">
                <label for="tarea">Usuario:</label>
                <input type="text" placeholder="Usuario" name="usuario" class="nombre-tarea" required> 
                <label for="tarea">Password:</label>
                <input type="text" placeholder="Password" name="pass" class="nombre-tarea" required> 
            </div>
            <div class="campo">
                <label for="tarea">Desde:</label>
                <input type="date" placeholder="FechaDesde" name="fdesde" class="nombre-tarea" required> 
                <label for="tarea">Hasta:</label>
                <input type="date" placeholder="FechaHasta" name="fhasta" class="nombre-tarea" required>
            </div>
            <div class="campo enviar">
                <input type="submit" name="submit" class="boton nueva-tarea" value="Consultar">
            </div>
        </form>
        
        
<?php
require_once('inc/funciones/nusoap.php');
	if(isset($_POST["submit"]) && !empty($_POST["submit"])) {

        //capturar parametros
		$usuario = $_POST["usuario"];
        $pass = $_POST["pass"];
        $fdesde = $_POST["fdesde"];
        $fhasta = $_POST["fhasta"];

           //url del webservice
    $wsdl="http://www3.ubilop.com:8081/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_FechaDesde' => $fdesde, '_FechaHasta' => $fhasta);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('EnviosPorFecha', $param);
   
    //si ocurre algún error al consumir el Web Service
    if ($client->fault) { // si
        $error = $client->getError();
    if ($error) { // Hubo algun error

            echo 'Error:  ' . $client->faultstring;
        }
        
        die();
    }
        
		
	}
?>

        <h2>Resultado de la Solicitud:</h2>
            <div class="listado-pendientes">
                <ul>
                    <pre>
                        <?php
	                        if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
                               //imprimir el resultado de la consulta del metodo
                                print_r($resultado);
                            }else{
                                echo "<h2>Consulte el fomulario para obtener un resultado:</h2>";
                            }
                        ?>       
                   </pre>
                </ul>
        </div>

          
    </main>
</div><!--.contenedor-->

<?php
    include 'inc/templates/footer.php';
?>