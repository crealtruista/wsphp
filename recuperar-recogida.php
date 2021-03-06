<?php
    //se incluyen las funciones, cabecera y barra de menu
    
    include 'inc/funciones/funciones.php';
    include 'inc/templates/header.php';
    include 'inc/templates/barra.php';
?>

<div class="contenedor">
    <?php
       //se incluye el menu lateral
        include 'inc/templates/sidebar.php';
    ?>
    <main class="contenido-principal">

         <center>
            <h1>WebService Actual: 
                <span>Recuperar Recogida</span>
            </h1>
            <h4>
                <span>Devuelve una solicitud de recogida previamente grabada por el cliente en base a parámetros de búsqueda. </span> 
            </h4>
        </center>
        <!-- formulario para requerir los parametros a consultar en el webservice -->
        <form action="#" method="POST" class="agregar-tarea">
            
            <div class="campo">
                <label for="tarea">Usuario:</label>
                <input type="text" placeholder="Usuario *" name="usuario" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["usuario"];}?>" required>
                <label for="tarea">Password:</label>
                <input type="text" placeholder="Password *" name="pass" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["pass"];}?>" required> 
            </div>
            <div class="campo">
                <label for="tarea">Recogida #:</label>
                <input  type="text" placeholder="Recogida Numero" name="recogida" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["recogida"];}?>" required>
                <label for="tarea">Referencia 1:</label>
                <input  type="text" placeholder="Referencia 1" name="refe1" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["refe1"];}?>"> 
            </div>
            <div class="campo">
                <label for="tarea">Referencia 2:</label>
                <input  type="text" placeholder="Referencia 2" name="refe2" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["refe2"];}?>"> 
            </div>
            <div class="campo enviar">
                <input type="submit" name="submit" class="boton nueva-tarea" value="Consultar">
            </div>
            
        </form>
        
    <?php
         //requerimos la libreria nusoap para manejo de webservice con php
        require_once('inc/funciones/nusoap.php');
	    if(isset($_POST["submit"]) && !empty($_POST["submit"])) {

        //capturar parametros
		$usuario = $_POST["usuario"];
        $pass = $_POST["pass"];
        $recogida = $_POST["recogida"];
        $refe1 = $_POST["refe1"];
        $refe2 = $_POST["refe2"];

    //url donde se invoca el webservice a consumir
    $wsdl="http://www3.ubilop.com/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_RecogidaNumero' => $recogida, '_Referencia1' => $refe1, '_Referencia2' => $refe2);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('RecuperarRecogida', $param);
   
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
                <center> 
                    <table border="1" style=" border-collapse: collapse;" >
                        <?php
	                        if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
                                $result= $resultado['RecuperarRecogidaResult'];
                                //se imprime la respuesta consultada al metodo en Lista
                                echo "<tr ><td width='15%'>1.Ok: </td><td width='85%'>";
                                    echo $result['Ok'];
                                echo "</td></tr>";

                                echo "<tr border='1'><td width='15%'>2.Error: </td><td width='85%'>";
                                    echo $result['CodigoError'];
                                echo "</td></tr>";

                                echo "<tr border='1'><td width='15%'>3.Info: </td><td width='85%'>";
                                    echo $result['Info'];
                                echo "</td></tr>";
                                       // Validamos si Value viene con datos 
                                if (isset($result['Value'])){ 
                                    $result1=$result['Value']; 
                                    echo "<tr border='1'><td width='25%'>4.Value: </td><td width='75%'>";
                                        echo gettype($result['Value']);
                                    echo "</td></tr>";
                                    //ciclo for que recorre array asociativo e imprime cada llave y valor del objeto Value
                                    for($i=0;$i<count($result1);$i++){
                                        current($result1);
                                        echo "<tr border='1'><td width='25%'>";
                                        echo key($result1); 
                                        echo "</td><td width='75%'>";
                                            echo $result1[key($result1)];
                                        echo "</td></tr>";
                                        next($result1);                                      
                                    }
                                }  
                                echo "</td></tr></table></center> </br></br><pre> ";                              
                                //var_dump($resultado);

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