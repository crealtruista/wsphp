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
                <span>Historial Estados Envios por Fecha</span>
            </h1>
            <h4>
                <span>Devuelve un listado de los envíos cuyos estados han sufrido modificaciones en un rango de fechas.</span> 
            </h4>
        </center>
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
                <label for="tarea">Desde:</label>
                <input type="date" placeholder="FechaDesde" name="fdesde" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["fdesde"];}?>" required> 
                <label for="tarea">Hasta:</label>
                <input type="date" placeholder="FechaHasta" name="fhasta" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["fhasta"];}?>" required>
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
        $fdesde = $_POST["fdesde"];
        $fhasta = $_POST["fhasta"];

    //url donde se invoca el webservice a consumir
    $wsdl="http://www3.ubilop.com/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_FechaDesde' => $fdesde, '_FechaHasta' => $fhasta);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('HistorialEstadosEnvioPorFecha', $param);
   
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
                                $result= $resultado['HistorialEstadosEnvioPorFechaResult'];
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
                                    if (isset($result['Value']['EnvioInfoWSVO'])){ 
                                        $result1=$result['Value']['EnvioInfoWSVO']; 
                                        echo "<table class'table' border='1' style=' border-collapse: collapse;' >
                                            <tr border='1'><td width='20%'>Fecha: </td>
                                            <td width='20%'>Albaran Numero </td><td width='20%'>Referencia1 </td>
                                            <td width='20%'>Referencia2 </td><td width='20%'>Estado </td></tr>";
                                        // Expresion que valida si el WSVO es un conjunto de Array
                                        if($result1[0] == null) {                                                                                                                                
                                                echo "<tr border='1'><td width='20%'>".$result1['Fecha']."</td>";
                                                echo "<td width='20%'>".$result1['AlbaranNumero']."</td>";
                                                echo "<td width='20%'>"; 
                                                        if ($result1['Referencia1'] != ""){
                                                           echo $result1['Referencia1'];
                                                        } 
                                                    echo "</td>";
                                                    echo "<td width='20%'>"; 
                                                        if ($result1['Referencia2'] != ""){
                                                           echo $result1['Referencia2'];
                                                        }
                                                echo "<td width='20%'>".$result1['Estado']."</td></tr>";

                                         } else { 
                                             // ciclo que recorre el cunjuto de array      
                                                for($i=0;$i<count($result1);$i++){
                                                    echo "<tr border='1'><td width='20%'>".$result1[$i]['Fecha']."</td>";
                                                    echo "<td width='20%'>".$result1[$i]['AlbaranNumero']."</td>";
                                                    echo "<td width='20%'>"; 
                                                        if ($result1[$i]['Referencia1'] != ""){
                                                           echo $result1[$i]['Referencia1'];
                                                        } 
                                                    echo "</td>";
                                                    echo "<td width='20%'>"; 
                                                        if ($result1[$i]['Referencia2'] != ""){
                                                           echo $result1[$i]['Referencia2'];
                                                        } 
                                                    echo "</td>";
                                                    echo "<td width='20%'>".$result1[$i]['Estado']."</td></tr>";	
                                                }
                                        } 
                                    }
                                                           
                                echo "</table></center> </br></br><pre> "; 

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