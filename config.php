<?php
class Conectar {
    private $host;
    private $user;
    private $pass;
    public function conexion ($localhost, $root, $blank) {
        addslashes($this->host = $localhost);
        addslashes($this->user = $root);
        addslashes($this->pass = $blank);
        $con = mysql_connect($this->host, $this->user, $this->pass);
        $db = mysql_select_db('Daniel');
        mysql_query('SET NAMES "utf8"');
        if(!$con){
           ?>
        <h1>No se pudo conectar a la base de datos</h1>
        <?php
        }
    }
}
?>