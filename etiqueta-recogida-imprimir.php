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
                <span>Etiqueta Recogida Imprimir PDF</span>
            </h1>
            <h4>
                <span>Devuelve la o las etiquetas correspondientes a la solicitud de Recogida.</span> 
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
                <label for="tarea">Recogida #:</label>
                <input type="text" placeholder="Recogida Numero" name="recogida" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["recogida"];}?>" required> 
                <label for="tarea">Cuadrante:</label>
                <input type="text" placeholder="Cuadrante Inicial" name="cuadrante" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["cuadrante"];}?>" required>
            </div>
            <center><div class="">
                <label for="tarea">Etiqueta Termica:</label>
                <select name="etiqueta">
                    <option value="true" selected>Si</option> 
                    <option value="false">No</option>
                </select>
                
            </div></center>
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
        $cuadrante = $_POST["cuadrante"];
        $etiqueta = $_POST["etiqueta"];

    //url donde se invoca el webservice a consumir
    $wsdl="http://www3.ubilop.com/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_RecogidaNumero' => $recogida, '_CuadranteInicial' => $cuadrante, '_EtiquetaTermica' => $etiqueta);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('EtiquetaRecogidaImprimirPDF', $param);
   
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
                                $result= $resultado['EtiquetaRecogidaImprimirPDFResult'];
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

                                echo "<tr border='1'><td width='15%'>4.Value: </td><td width='85%'>";
                                $value = $result['Value'];
                                    if($value != null){
                                        echo "<a href='$value' target='_blank'>".$value."</a></br></br>";
                                        echo "<iframe width='100%' height='400' src='$value'> </iframe></br></br>";
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