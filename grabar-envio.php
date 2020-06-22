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
                <span>Grabar Envio</span>
            </h1>
            <h4><span>Graba o modifica un envío en el sistema de la agencia de transporte.</span> </h4>
        </center>
        <!-- formulario para requerir los parametros a consultar en el webservice -->
        <form action="#" method="POST" class="agregar-tarea1">
            <div class="campo1">
                <label for="">  </label>
                <input type="text" placeholder="_Usuario *" name="usuario" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["usuario"];}?>"  required> 
                <label for="">  </label>
                <input type="text" placeholder="_Password *" name="pass" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["pass"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="_AlbaranNumero *" name="albaran" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["albaran"];}?>" required>
                <label for="">  </label>
                <input type="text" placeholder="_DepartamentoCod" name="dcode" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dcode"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="_ArticuloCodigo *" name="acode" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["acode"];}?>" required> 
            </div>

             <div class="campo1">
                <label for=""></label>
                <input type="date" placeholder="_FechaSalida *" name="fecha" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["fecha"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="_Observaciones" name="observa" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["observa"];}?>" > 
                <label for="">  </label>
                <input type="text" placeholder="_Referencia1" name="refe1" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["refe1"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="_Referencia2" name="refe2" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["refe2"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="_RNombre" name="rnombre" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rnombre"];}?>" > 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <input type="text" placeholder="_RVia" name="rvia" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rvia"];}?>"> 
                <label for="">  </label>
                <input type="text" placeholder="_RDireccion" name="rdes" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rdes"];}?>"> 
                <label for="">  </label>
                <input type="text" placeholder="_RNumero" name="rnum" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rnum"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="_RPiso" name="rpis" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rpis"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="_RPoblacion" name="rpob" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rpob"];}?>"> 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <input type="text" placeholder="_RCodigoPostal" name="rcodep" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rcodep"];}?>" > 
                <label for="">  </label>
                <input type="text" placeholder="_RPais" name="rpais" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rpais"];}?>"> 
                <label for="">  </label>
                <input type="text" placeholder="_RTelefono" name="rtelf" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rtelf"];}?>" >
                <label for="">  </label>
                <input type="text" placeholder="_REmail" name="remail" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["remail"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="_RContacto" name="rcont" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["rcont"];}?>" > 
            </div>

            <div class="campo1">
            <label for="tarea"></label>
                <select name="rinter" required>
                    <option value="false" selected>_RInternacional</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select> 
                <label for="">  </label>
                <input type="text" placeholder="_DNombre" name="dnombre" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dnombre"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="_DVia" name="dvia" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dvia"];}?>"> 
                <label for="">  </label>
                <input type="text" placeholder="_DDireccion*" name="ddes" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["ddes"];}?>"required> 
                <label for="">  </label>
                <input type="text" placeholder="_DNumero" name="dnum" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dnum"];}?>">
                
            </div>

            <div class="campo1">
            <label for="">  </label>
                <input type="text" placeholder="_DPiso" name="dpis" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dpis"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="_DPoblacion*" name="dpob" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dpob"];}?>"required> 
                <label for="">  </label>
                <input type="text" placeholder="_DCodigoPostal*" name="codep" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["codep"];}?>" required> 
                <label for="">  </label>
                <input type="text" placeholder="_DPais" name="dpais" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dpais"];}?>"> 
                <label for="">  </label>
                <input type="text" placeholder="_DTelefono" name="dtelf" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dtelf"];}?>" >
                
            </div>

            <div class="campo1">
            <label for="">  </label>
                <input type="text" placeholder="_DEmail" name="demail" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["demail"];}?>">
                <label for="">  </label>
                <input type="text" placeholder="_DContacto" name="dcont" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["dcont"];}?>" > 
                <label for="">  </label>
                <input type="text" placeholder="_DIdentificacion" name="dide" class="nombre-tarea"> 
                <label for="tarea"></label>
                <select name="ride" class="nombre-tarea"  required>
                    <option value="false" selected>_IdenticaciónRequerida</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="dinter" class="form-control" required>
                    <option value="false" selected>_DInternacional</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                
            </div>

            <div class="campo1">
            <label for="">  </label>
                <input type="number"  step="0.01" placeholder="_Alto 0.00" name="alto" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["alto"];}?>" >
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="_Ancho 0.00" name="ancho" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["ancho"];}?>" >
                <label for="">  </label>
                <input type="number" placeholder="_Largo 0.00" step="0.01" name="largo" class="nombre-tarea"
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["largo"];}?>" > 
                <label for="">  </label>
                <input type="number" placeholder="_Bultos " name="bultos" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["bultos"];}?>" required > 
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="_Peso 0.00" name="peso" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["peso"];}?>" required >

            </div>

            <div class="campo1">
                <label for="">  </label>
                <select name="retorno" required>
                    <option value="false" selected>_RetornoCon </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select> 
                <label for="">  </label>
                <select name="gori" required>
                    <option value="false" selected>_GestionOrigen </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="gdes" required>
                    <option value="false" selected>_GestionDestino </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="econ" required>
                    <option value="false" selected>_EnvioControl</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="ealba" required>
                    <option value= "false"  selected>_EscaneoAlbaranCliente</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select> 
            </div>

            <div class="campo1">
            <label for="tarea"></label>
                <select name="portes" required>
                    <option value="false" selected>_PortesDebido </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="sabe" required>
                    <option value="false" selected>_SabadoEntrega</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="acuse" required>
                    <option value="false" selected>_AcuseCon</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select> 
                <label for="">  </label>
                <input type="number" step="0.01" placeholder="_Reembolso 0.00" name="reembolso" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["reembolso"];}?>"> 
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="_Valor 0.00" name="valor" class="nombre-tarea" 
                value= "<?php if(isset($_POST['submit'])) {echo $_POST["valor"];}?>">
                
            </div>
            <div class="campo1">
            <label for="tarea"></label>
                <select name="venvio" required>
                    <option value="false" selected>_ValorarEnvio </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="generecogida" required>
                    <option value="false" selected>_GenerarRecogida </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
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
        if ($_POST['valor'] == ""){
            $valor = "0";
        }else{
            $valor = $_POST['valor'];           
        }

    //url donde se invoca el webservice a consumir
    $wsdl="http://www3.ubilop.com/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_AlbaranNumero' => $albaran, 
    '_DepartamentoCodigo' => $dcode, '_ArticuloCodigo' => $acode, '_Fecha' => $_POST["fecha"], 
    '_Observaciones' => $_POST["observa"], '_Referencia1' => $_POST["refe1"], '_Referencia2' => $_POST["refe2"],
    '_RNombre' => $_POST["rnombre"], '_RVia' => $_POST["rvia"], '_RDireccion' => $_POST["rdes"], '_RNumero' => $_POST["rnum"], 
    '_RPiso' => $_POST["rpis"], '_RPoblacion' => $_POST["rpob"], '_RCodigoPostal' => $_POST["rcodep"], '_RPais' => $_POST["rpais"],
    '_RTelefono' => $_POST["rtelf"], '_REmail' => $_POST["remail"], '_RContacto' => $_POST["rcont"], '_RInternacional' => $_POST["rinter"],
    '_DNombre' => $_POST["dnombre"], '_DVia' => $_POST["dvia"], '_DDireccion' => $_POST["ddes"], '_DNumero' => $_POST["dnum"], 
    '_DPiso' => $_POST["dpis"], '_DPoblacion' => $_POST["dpob"], '_DCodigoPostal' => $_POST["codep"], '_DPais' => $_POST["dpais"],
    '_DTelefono' => $_POST["dtelf"], '_DEmail' => $_POST["demail"], '_DContacto' => $_POST["dcont"], 
    '_DIdentificacion' => $_POST["dide"], '_DIdentificacionRequerida' => $_POST["ride"], '_DInternacional' => $_POST["dinter"], '_Alto' => $alto, 
    '_Ancho' => $ancho, '_Largo' => $largo, '_Bultos' => $_POST["bultos"], '_Peso' => $_POST["peso"],
    '_PortesDebido' => $_POST["portes"], '_SabadoEntrega' => $_POST["sabe"], '_AcuseCon' => $_POST["acuse"], 
    '_RetornoCon' => $_POST["retorno"], '_GestionOrigen' => $_POST["gori"], '_GestionDestino' => $_POST["gdes"], 
    '_EnvioControlCon' => $_POST["econ"], '_EscaneoAlbaranClienteCon' => $_POST["ealba"], '_Reembolso' => $reembolso,
    '_Valor' => $valor, '_ValorarEnvio' => $_POST["venvio"], '_GenerarRecogida' => $_POST["generecogida"]);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('GrabarEnvio2', $param);
   
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
                                $result= $resultado['GrabarEnvio2Result'];
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