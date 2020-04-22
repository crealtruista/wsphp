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
                <span>Borrar Envio</span>
            </h1>
            <h4>
                <span>Elimina un envío previamente documentado por el cliente en el sistema de la agencia de transporte.</span> 
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
                <label for="tarea">Albaran:</label>
                <input  type="text" placeholder="Albaran" name="albaran" class="nombre-tarea" required> 
            </div>
            <div class="campo enviar">
                <input type="submit" name="submit" class="boton nueva-tarea" value="Consultar">
            </div>
            
        </form>
        
    <?php
    //requerimos la libreria nusoap para manejo de webservice con php
    require_once('inc/funciones/nusoap.php');
	    if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
        //captura de parametros
		$usuario = $_POST["usuario"];
        $pass = $_POST["pass"];
        $albaran = $_POST["albaran"];

    //url donde se invoca el webservice a consumir
    $wsdl="http://www3.ubilop.com/factws/IntegraCF.asmx?wsdl";
 
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_AlbaranNumero' => $albaran);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('BorrarEnvio', $param);
   
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
                                //se imprime la respuesta consultada al metodo
                                print_r($resultado);
                                // funcion para pocisionar el scroll al final de la pagina
                                echo "<script language='javascript'>";
                                echo "window.scroll({ top: 2500, left: 0, behavior: 'smooth' });";
                                echo "</script>";
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