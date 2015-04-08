<?php
require_once('config.php');
$conectar = new Conectar;
$conectar->conexion('localhost', 'root', '');
class Validar {
    private $nombre;
    private $correo;
    private $contra;
    private $confirmar;
    private $cedula;
    private $empresa;
    private $direccion;
    private $telefono;
    public function validacion($name, $mail, $pass, $rpt, $id, $emp, $adress, $phone) {
        $this->nombre = addslashes($_POST[$name]);
        $this->correo = addslashes($_POST[$mail]);
        $this->contra = addslashes($_POST[$pass]);
        $this->confirmar = addslashes($_POST[$rpt]);
        $this->cedula = addslashes($_POST[$id]);
        $this->empresa = addslashes($_POST[$emp]);
        $this->direccion = addslashes($_POST[$adress]);
        $this->telefono = addslashes($_POST[$phone]);
        $sql = mysql_query("SELECT * FROM usuarios WHERE nombre_usuario ='$this->nombre'");
        $sql2 = mysql_query("SELECT * FROM usuarios WHERE contra_usuario ='$this->contra'");
        $sql3 = mysql_query("SELECT * FROM usuarios WHERE correo_usuario ='$this->correo'");
        if(strlen($this->nombre) == 0 && strlen($this->correo) == 0 && strlen($this->contra) == 0 && strlen($this->confirmar) == 0
        && strlen($this->cedula) == 0 && strlen($this->empresa) == 0 && strlen($this->direccion) == 0 && strlen($this->telefono) == 0){
            echo 'incompleto';
        } else if (strlen($this->nombre) == 0) {
            echo 'incompleto1';
        } else {
            if (strlen($this->correo) == 0) {
                echo 'incompleto2';
            } else if (strlen($this->contra) == 0) {
                echo 'incompleto3';
            } else {
                if (strlen($this->confirmar) == 0) {
                    echo 'incompleto4';
                } else if (strlen($this->cedula) == 0) {
                    echo 'incompleto5';
                } else {
                    if (strlen($this->empresa) == 0) {
                        echo 'incompleto6';
                    } else if (strlen($this->direccion) == 0) {
                        echo 'incompleto7';
                    } else {
                        if (strlen($this->telefono) == 0) {
                            echo 'incompleto8';
                        } else if (!filter_var($this->correo, FILTER_VALIDATE_EMAIL)) {
                            echo 'correo_invalido';
                        } else {
                            if (mysql_num_rows($sql) > 0) {
                                echo 'usuario_existente';
                            } else if ($this->contra !== $this->confirmar) {
                                echo 'no_coinciden';
                            } else {
                                if (mysql_num_rows($sql2) == 0) {
                                    echo 'clave_incorrecta';
                                } else if (mysql_num_rows($sql3) > 0) {
                                    echo 'correo_existente';
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
$validar = new Validar;
$validar->validacion('nombreUsuario', 'correoUsuario', 'contraUsuario', 'rptUsuario', 'cedulaUsuario', 'empresaUsuario', 'direccionUsuario', 'telefonoUsuario');
?>