<?php
require_once("config.php");
$conectar = new Conectar;
$conectar->conexion('localhost', 'root', '');
class Registrar {
    private $nombre;
    private $correo;
    private $contra;
    private $confirmar;
    private $cedula;
    private $empresa;
    private $direccion;
    private $telefono;
    public function __construct($name, $mail, $pass, $repeat, $id, $emp, $adress, $phone) {
        $this->nombre = addslashes($_POST[$name]);
        $this->correo = addslashes($_POST[$mail]);
        $this->contra = addslashes($_POST[$pass]);
        $this->confirmar = addslashes($_POST[$repeat]);
        $this->cedula = addslashes($_POST[$id]);
        $this->empresa = addslashes($_POST[$emp]);
        $this->direccion = addslashes($_POST[$adress]);
        $this->telefono = addslashes($_POST[$phone]);
    }
    public function registro() {
        if(isset($this->nombre) && !empty($this->nombre) && isset($this->correo) && !empty($this->correo)
        && isset($this->contra) && !empty($this->contra) && isset($this->confirmar) && !empty($this->confirmar)
        && isset($this->cedula) && !empty($this->cedula) && isset($this->empresa) && !empty($this->empresa)
        && isset($this->direccion) && !empty($this->direccion) && isset($this->telefono) && !empty($this->telefono)) {
            mysql_query("INSERT INTO usuarios (nombre_usuario, correo_usuario, contra_usuario, rpt_usuario, cedula_usuario,
            empresa_usuario, direccion_usuario, telefono_usuario) VALUES('$this->nombre', '$this->correo', '$this->contra', '$this->confirmar',
            '$this->cedula', '$this->empresa', '$this->direccion', '$this->telefono')");
        }
    }
    public function bienvenida() {
        ?>
        <h1>Registro exitoso</h1> <br/>
        <h2>Redirigiendo...</h2>
        <script>
            setTimeout(function(){
                location.href="index.php";
            }, 3000);
        </script>
        <?php
    }
}
$registro = new Registrar('nombreUsuario', 'correoUsuario', 'contraUsuario', 'rptUsuario', 'cedulaUsuario', 'empresaUsuario', 'direccionUsuario', 'telefonoUsuario');
$registro->registro();
$registro->bienvenida();
?>