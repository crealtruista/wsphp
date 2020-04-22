<?php
    //se incluyen las funciones, cabecera y barra de menu
    
    include 'inc/funciones/funciones.php';
    include 'inc/templates/header.php';
    include 'inc/templates/barra.php';
?>

<div class="contenedor">
    <?
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
                <input type="text" placeholder="Usuario *" name="usuario" class="nombre-tarea" required> 
                <label for="">  </label>
                <input type="text" placeholder="Password *" name="pass" class="nombre-tarea" required> 
                <label for="">  </label>
                <input type="text" placeholder="Albaran Numero *" name="albaran" class="nombre-tarea" required>
                <label for="">  </label>
                <input type="text" placeholder="DepartamentoCod" name="dcode" class="nombre-tarea">
                <label for="">  </label>
                <input type="text" placeholder="Articulo Codigo *" name="acode" class="nombre-tarea" required> 
            </div>

             <div class="campo1">
                <label for=""></label>
                <input type="date" placeholder="Fecha Salida *" name="fecha" class="nombre-tarea" required> 
                <label for="">  </label>
                <input type="text" placeholder="Observaciones" name="observa" class="nombre-tarea" > 
                <label for="">  </label>
                <input type="text" placeholder="Referencia 1" name="refe1" class="nombre-tarea">
                <label for="">  </label>
                <input type="text" placeholder="Referencia 2" name="refe2" class="nombre-tarea">
                <label for="">  </label>
                <input type="text" placeholder="Nombre Destinatario*" name="dnombre" class="nombre-tarea" required> 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <input type="text" placeholder="Vía Destinatario" name="dvia" class="nombre-tarea"> 
                <label for="">  </label>
                <input type="text" placeholder="Direccion Destino*" name="ddes" class="nombre-tarea" required> 
                <label for="">  </label>
                <input type="text" placeholder="Numero Destinatario" name="dnum" class="nombre-tarea" required>
                <label for="">  </label>
                <input type="text" placeholder="Piso Destinatario" name="dpis" class="nombre-tarea">
                <label for="">  </label>
                <input type="text" placeholder="Población Destino *" name="dpob" class="nombre-tarea" required> 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <input type="text" placeholder="Codigo Postal *" name="codep" class="nombre-tarea" required> 
                <label for="">  </label>
                <input type="text" placeholder="Pais" name="dpais" class="nombre-tarea"> 
                <label for="">  </label>
                <input type="text" placeholder="Telefono" name="dtelf" class="nombre-tarea" >
                <label for="">  </label>
                <input type="text" placeholder="Email" name="demail" class="nombre-tarea">
                <label for="">  </label>
                <input type="text" placeholder="Persona Contacto" name="dcont" class="nombre-tarea" > 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <input type="text" placeholder="Identificacion D " name="dide" class="nombre-tarea"> 
                <label for="tarea"></label>
                <select name="ride" required>
                    <option value="true" selected>IdenticaciónRequerida</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="Alto 0.00" name="alto" class="nombre-tarea" >
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="Ancho 0.00" name="ancho" class="nombre-tarea" >
                <label for="">  </label>
                <input type="number" placeholder="Largo 0.00" step="0.01" name="largo" class="nombre-tarea" > 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <input type="number" placeholder="Bultos " name="bultos" class="nombre-tarea" required > 
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="Peso 0.00" name="peso" class="nombre-tarea" >
                <label for="tarea"></label>
                <select name="portes" required>
                    <option value="true" selected>Portes Debido </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="sabe" required>
                    <option value="true" selected>Sabado Entrega</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select>
                <label for="tarea"></label>
                <select name="acuse" required>
                    <option value="true" selected>AcuseCon</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select> 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <select name="retorno" required>
                    <option value="true" selected>RetornoCon </option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select> 
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
                <label for="tarea"></label>
                <select name="ealba" required>
                    <option value="true" selected>EscaneoAlbaranCliente</option> 
                    <option value="true" >Si</option> 
                    <option value="false">No</option>
                </select> 
            </div>

            <div class="campo1">
                <label for="">  </label>
                <input type="number" step="0.01" placeholder="Reembolso 0.00" name="reembolso" class="nombre-tarea" > 
                <label for="">  </label>
                <input type="number"  step="0.01" placeholder="Valor 0.00" name="valor" class="nombre-tarea" >
                <label for="tarea"></label>
                <select name="venvio" required>
                    <option value="true" selected>Valorar Envio </option> 
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

    //url donde se invoca el webservice a consumir
    $wsdl="http://www3.ubilop.com/factws/IntegraCF.asmx?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando los parámetros a un array
    $param=array('_Usuario'=>$usuario, '_Clave' => $pass, '_AlbaranNumero' => $albaran, 
    '_DepartamentoCodigo' => $dcode, '_ArticuloCodigo' => $acode, '_Fecha' => $_POST["fecha"], 
    '_Observaciones' => $_POST["observa"], '_Referencia1' => $_POST["refe1"], '_Referencia2' => $_POST["refe2"],
    '_DNombre' => $_POST["dnombre"], '_DVia' => $_POST["dvia"], '_DDireccion' => $_POST["ddes"], '_DNumero' => $_POST["dnum"], 
    '_DPiso' => $_POST["dpis"], '_DPoblacion' => $_POST["dpob"], '_DCodigoPostal' => $_POST["codep"], '_DPais' => $_POST["dpais"],
    '_DTelefono' => $_POST["dtelf"], '_DEmail' => $_POST["demail"], '_DContacto' => $_POST["dcont"], 
    '_DIdentificacion' => $_POST["dide"], '_DIdentificacionRequerida' => $_POST["ride"], '_Alto' => $_POST["alto"], 
    '_Ancho' => $_POST["ancho"], '_Largo' => $_POST["largo"], '_Bultos' => $_POST["bultos"], '_Peso' => $_POST["peso"],
    '_PortesDebido' => $_POST["portes"], '_SabadoEntrega' => $_POST["sabe"], '_AcuseCon' => $_POST["acuse"], 
    '_RetornoCon' => $_POST["retorno"], '_GestionOrigen' => $_POST["gori"], '_GestionDestino' => $_POST["gdes"], 
    '_EnvioControlCon' => $_POST["econ"], '_EscaneoAlbaranClienteCon' => $_POST["ealba"], '_Reembolso' => $_POST["reembolso"],
    '_Valor' => $_POST["valor"], '_ValorarEnvio' => $_POST["venvio"]);

    //llamando al método y pasándole el array con los parámetros
    $resultado = $client->call('GrabarEnvio', $param);
   
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