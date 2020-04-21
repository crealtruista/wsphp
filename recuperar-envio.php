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
                <span>Recuperar Envio</span>
            </h1>
            <h4>
                <span>Devuelve un envío previamente grabado por el cliente en base a parámetros de búsqueda. </span> 
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
                <label for="tarea">Referencia 1:</label>
                <input  type="text" placeholder="Referencia 1" name="refe1" class="nombre-tarea"> 
            </div>
            <div class="campo">
                <label for="tarea">Referencia 2:</label>
                <input  type="text" placeholder="Referencia 1" name="refe2" class="nombre-tarea"> 
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
        $albaran = $_POST["albaran"];
        $refe1 = $_POST["refe1"];
        $refe2 = $_POST["refe2"];

           //url del webservice
    $wsdl="http://www3.ubilop.com:8081/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_AlbaranNumero' => $albaran, '_Referencia1' => $refe1, '_Referencia2' => $refe2);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('RecuperarEnvio', $param);
   
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