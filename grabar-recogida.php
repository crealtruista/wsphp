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
                <span>Grabar Recogida</span>
            </h1>
            <h4><span>Graba o modifica una solicitud de recogida en el sistema de la agencia de transporte. </span> </h4>
        </center>
        <!-- formulario para requerir los parametros a consultar en el webservice -->
        <form action="#" method="POST" class="agregar-tarea1">
            <div class="campo1">
                <label for="">  </label>
                <input type="text" placeholder="Usuario *" name="usuario" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["usuario"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="Password *" name="pass" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["pass"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="Recogida Numero *" name="recogida" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["recogida"];}?>" required>
                <label for="">  </label>
                <input type="text" placeholder="DepartamentoCod" name="dcode" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dcode"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="Articulo Codigo *" name="acode" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["acode"];}?>" required> 
            </div>

            <div class="campo1">
                <label for=""></label>
                <input type="text" placeholder="Vehiculo Codigo *" name="vcod" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["vcod"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="Hora Maxima *" name="hmax" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["hmax"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="Hora Maxima 2" name="hmax2" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["hmax2"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="Hora Minima *" name="hmin" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["hmin"];}?>" required>
                <label for="">  </label>
                <input type="text" placeholder="Hora Minima 2" name="hmin2" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["hmin2"];}?>" > 
            </div>

             <div class="campo1">
                <label for=""></label>
                <input type="date" placeholder="Fecha Salida *" name="fecha" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["fecha"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="Observaciones Recogida" name="observaR" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["observaR"];}?>" >
                <label for="">  </label>
                <input type="text" placeholder="Observaciones Entrega" name="observaE" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["observaE"];}?>" > 
                <label for="">  </label>
                <input type="text" placeholder="Referencia 1" name="refe1" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["refe1"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="Referencia 2" name="refe2" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["refe2"];}?>">
                 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <input type="text" placeholder="Nombre Remitente *" name="rnombre" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rnombre"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="Direccion Remitente *" name="rdir" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rdir"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="Poblacion Remitente *" name="rpob" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rpob"];}?>" required>
                <label for="">  </label>
                <input type="text" placeholder="Codigo Postal Remitente *" name="cpr" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["cpr"];}?>" required>
                <label for="">  </label>
                <input type="text" placeholder="Pais Remitente" name="rpais" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rpais"];}?>" > 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <input type="text" placeholder="Telefono Remitente" name="rtelf" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rtelf"];}?>" > 
                <label for="">  </label>
                <input type="text" placeholder="Email Remitente" name="remail" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["remail"];}?>" > 
                <label for="">  </label>
                <input type="text" placeholder="Contacto Remitente" name="rcon" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rcon"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="Nombre Destinatario *" name="dnombre" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dnombre"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="Direccion Destinatario *" name="ddir" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["ddir"];}?>" required>
            </div>

            <div class="campo1">
                 
                <label for="">  </label>
                <input type="text" placeholder="Poblacion Destinatario *" name="dpob" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dpob"];}?>" required>
                <label for="">  </label>
                <input type="text" placeholder="Codigo Postal Destinatario *" name="cpd" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["cpd"];}?>" required>
                <label for="">  </label>
                <input type="text" placeholder="Pais Destinatario" name="dpais" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dpais"];}?>" > 
                <label for="">  </label>
                <input type="text" placeholder="Telefono Destinatario" name="dtelf" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dtelf"];}?>" >
                <label for="">  </label>
                <input type="text" placeholder="Email Destinatario" name="demail" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["demail"];}?>">
            </div>

            <div class="campo1">
                
                <label for="">  </label>
                <input type="text" placeholder="Contacto Destinatario" name="dcont" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dcont"];}?>" > 
                <label for="">  </label>
                <input type="text" placeholder="Identificacion Destinatario " name="dide" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dide"];}?>"> 
                <label for="tarea"></label>
                <select name="ride" required>
                    <option value="true" selected>IdenticaciónRequerida</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="">  </label>
                <input type="number" placeholder="Bultos *" name="bultos" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["bultos"];}?>" required > 
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="Alto 0.00" name="alto" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["alto"];}?>" >
                <label for="">  </label>
            </div>

            <div class="campo1">
                <label for="tarea"></label>
                <input type="number"  step="0.01" placeholder="Ancho 0.00" name="ancho" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["ancho"];}?>" >
                <label for="">  </label>
                <input type="number" placeholder="Largo 0.00" step="0.01" name="largo" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["largo"];}?>" >
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="Peso 0.00" name="peso" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["peso"];}?>" required >
                <label for="tarea"></label>
                <select name="sabe" required>
                    <option value="true" selected>Sabado Entrega</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select> 
                <label for="">  </label>
                <select name="retorno" required>
                    <option value="true" selected>RetornoCon </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>  
            </div>

            <div class="campo1">
 
                <label for="">  </label>
                <select name="gori" required>
                    <option value="true" selected>Gestion Origen </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="gdes" required>
                    <option value="true" selected>Gestion Destino </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="econ" required>
                    <option value="true" selected>EnvioControl</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="">  </label>
                <input type="number"  placeholder="Reembolso" name="reembolso" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["reembolso"];}?>" > 
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="VMercancia 0.00" name="valorm" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["valorm"];}?>" >
                
            </div>

            <div class="campo1">
                <label for="tarea"></label>
                <input type="number"  step="0.01" placeholder="Anticipo" name="anticipo" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["anticipo"];}?>" >
                <label for="tarea"></label>
                <input type="number"  step="0.01" placeholder="DuaValor" name="duav" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["duav"];}?>" >
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
        $dcode = $_POST["dcode"];
        $acode = $_POST["acode"];

        if ($_POST['alto'] == ""){
            $alto = "0";
        }else{
            $alto = $_POST['alto'];           
        }
        if ($_POST['ancho'] == ""){
            $ancho = "0";
        }else{
            $ancho = $_POST['ancho'];           
        }
        if ($_POST['largo'] == ""){
            $largo = "0";
        }else{
            $largo = $_POST['largo'];           
        }
        if ($_POST['reembolso'] == ""){
            $reembolso = "0";
        }else{
            $reembolso = $_POST['reembolso'];           
        }
        if ($_POST['valorm'] == ""){
            $valorm = "0";
        }else{
            $valorm = $_POST['valorm'];           
        }
        if ($_POST['anticipo'] == ""){
            $anticipo = "0";
        }else{
            $anticipo = $_POST['anticipo'];           
        }
        if ($_POST['duav'] == ""){
            $duav = "0";
        }else{
            $duav = $_POST['duav'];           
        }

    //url donde se invoca el webservice a consumir
    $wsdl="http://www3.ubilop.com/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_RecogidaNumero' => $recogida, 
    '_DepartamentoCodigo' => $dcode, '_ArticuloCodigo' => $acode, '_VehiculoCodigo' => $_POST["vcod"], 
    '_HoraMaxima' => $_POST["hmax"], '_HoraMaxima2' => $_POST["hmax2"], '_HoraMinima' => $_POST["hmin"],
    '_HoraMinima2' => $_POST["hmin2"], '_FechaRecogida' => $_POST["fecha"], '_ObservacionesRecogida' => $_POST["observaR"],
    '_ObservacionesEntrega' => $_POST["observaE"], '_Referencia1' => $_POST["refe1"], '_Referencia2' => $_POST["refe2"],
    '_RNombre' => $_POST["rnombre"], '_RDireccion' => $_POST["rdir"], '_RPoblacion' => $_POST["rpob"], '_RCodigoPostal' => $_POST["cpr"],
    '_RPais' => $_POST["rpais"], '_RTelefono' => $_POST["rtelf"], '_REmail' => $_POST["remail"], '_RContacto' => $_POST["rcon"], '_DNombre' => $_POST["dnombre"], 
    '_DDireccion' => $_POST["ddir"], '_DPoblacion' => $_POST["dpob"], '_DCodigoPostal' => $_POST["cpd"], '_DPais' => $_POST["dpais"],
    '_DTelefono' => $_POST["dtelf"], '_DEmail' => $_POST["demail"], '_DContacto' => $_POST["dcont"], 
    '_DIdentificacion' => $_POST["dide"], '_DIdentificacionRequerida' => $_POST["ride"], '_Bultos' => $_POST["bultos"],
    '_Alto' => $alto, '_Ancho' => $ancho, '_Largo' => $largo, '_Peso' => $_POST["peso"],
    '_SabadoEntrega' => $_POST["sabe"], '_RetornoCon' => $_POST["retorno"], '_GestionOrigen' => $_POST["gori"], '_GestionDestino' => $_POST["gdes"], 
    '_EnvioControlCon' => $_POST["econ"], '_Reembolso' => $reembolso, '_ValorMercancia' => $valorm, 
    '_Anticipo' => $anticipo, '_DuaValor' => $duav);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('GrabarRecogida', $param);
   
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
                                $result= $resultado['GrabarRecogidaResult'];
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

                                echo "<tr border='1'><td width='15%'>4.Valor: </td><td width='85%'>";
                                    echo $result['Value'];
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