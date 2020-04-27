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
                <span>Historial Estados Envio</span>
            </h1>
            <h4>
                <span>Devuelve un listado de los estados por los que ha pasado un envío desde su entrada en la red. </span> 
            </h4>
        </center>
        <!-- formulario para requerir los parametros a consultar en el webservice -->
        <form action="#" method="POST" class="agregar-tarea">
            
            <div class="campo">
                <label for="tarea">Usuario:</label>
                <input type="text" placeholder="Usuario" name="usuario" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["usuario"];}?>" required>
                <label for="tarea">Password:</label>
                <input type="text" placeholder="Password" name="pass" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["pass"];}?>" required> 
            </div>
            <div class="campo">
                <label for="tarea">Albaran:</label>
                <input  type="text" placeholder="Albaran" name="albaran" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["albaran"];}?>" required> 
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
        $albaran = $_POST["albaran"];

    //url donde se invoca el webservice a consumir
    $wsdl="http://www3.ubilop.com/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_AlbaranNumero' => $albaran);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('HistorialEstadosEnvio', $param);
   
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
                                $result= $resultado['HistorialEstadosEnvioResult'];
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
                                echo "<tr border='1'><td width='25%'>4.Value: </td><td width='75%'>";
                                echo gettype($result['Value']);
                        echo "</td></tr></table> </br></br> ";

                        
                            // Validamos si Value viene con datos 
                            if (isset($result['Value']['EstadoInfoWSVO'])){ 
                                $result1=$result['Value']['EstadoInfoWSVO']; 
                                echo "<table border='1' style=' border-collapse: collapse;' >
                                    <tr border='1'><td width='20%'>Fecha Hora: </td>
                                    <td width='20%'>Estado </td><td width='20%'>Detalle Estado </td></tr>";
                                // Expresion que valida si el WSVO es un conjunto de Array
                                if($result1[0] == null) {                                                                                                                                
                                        echo "<tr border='1'><td width='20%'>".$result1['FechaHora']."</td>";
                                        echo "<td width='20%'>".$result1['Estado']."</td>";
                                        echo "<td width='20%'>";
                                            if ($result1['DetalleEstado'] != ""){
                                             echo $result1['DetalleEstado'];
                                         }
                                         echo "</td></tr>";

                                 } else { 
                                     // ciclo que recorre el cunjuto de array      
                                        for($i=0;$i<count($result1);$i++){
                                        echo "<tr border='1'><td width='20%'>".$result1[$i]['FechaHora']."</td>";
                                        echo "<td width='20%'>".$result1[$i]['Estado']."</td>";
                                        echo "<td width='20%'>";
                                            if ($result1[$i]['DetalleEstado'] != ""){
                                             echo $result1[$i]['DetalleEstado'];
                                         }
                                         echo "</td></tr>";
                                        }
                                } 
                            }
                                                   
                        echo "</table></center> </br></br><pre> ";                              
                                //var_dump($result['Value']);

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