<?php
    //se incluyen las funciones, cabecera y barra de menu
    
    include 'inc/funciones/funciones.php';
    include 'inc/templates/header.php';
    include 'inc/templates/barra.php';
?>

<div class="contenedor">
    <?php
    //se incluye el menu lateral a la plantilla
    include 'inc/templates/sidebar.php';
    ?>
    <main class="contenido-principal">

         <center>
            <h1>WebService Actual: 
                <span>Servidor Información.</span>
            </h1>
            <h4>
                <span>Devuelve información del estado actual del servidor. </span> 
            </h4>
        </center>
        
    <?php
    //requerimos la libreria nusoap para manejo de webservice con php
        require_once('inc/funciones/nusoap.php');

    //url donde se invoca el webservice a consumir
    $wsdl="http://www3.ubilop.com/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('ServidorInformacion');

    ?>

        <h2>Resultado de la Solicitud:</h2>
            <div class="listado-pendientes">
                <ul>
                    <pre>
                        <?php
                                print_r($resultado);

                        ?>       
                   </pre>
                </ul>
        </div>

          
    </main>
</div><!--.contenedor-->

