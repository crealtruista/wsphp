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
                    <center>                  
                        <table border="1" style=" border-collapse: collapse;" >
                        <?php
                             $result= $resultado['ServidorInformacionResult'];
                             $result1= $result['Value'];

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

                                echo "<tr border='1'><td width='15%'>4.Version: </td><td width='85%'>";
                                    echo $result1['Version'];
                                echo "</td></tr>";

                                echo "<tr border='1'><td width='15%'>5.estado: </td><td width='85%'>";
                                    echo $result1['ServidorEstado'];
                                echo "</td></tr>";

                                echo "<tr border='1'><td width='15%'>6.Agencia: </td><td width='85%'>";
                                    echo $result1['AgenciaNombre'];
                                echo "</td></tr>";

                                echo "<tr border='1'><td width='15%'>7.Servidor: </td><td width='85%'>";
                                    echo $result1['FACTServerServidor'];
                                echo "</td></tr></table></center> </br></br><pre> ";                              
                                //var_dump($resultado);

                               //se imprime la respuesta consultada al metodo
                               print_r($resultado);
                               
                            
                        ?> 
                   </pre>
                </ul>
        </div>

          
    </main>
</div><!--.contenedor-->

