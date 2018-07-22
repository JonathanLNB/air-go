<?
	class baseDatos extends mysqli{
		var $bloque;
		var $numeRegistros;
		function baseDatos($server, $user, $pwd, $bd){
			$this->connect($server, $user, $pwd, $bd);
        }
		function cierraBD(){
			$this->close();
		}
		function consulta($query){
			$this->bloque = $this->query($query);
			if($this->error > "") {
                echo $query;
                echo $this->error;
                exit();
            }
			if(strpos(strtoupper($query), "SELECT") !== false)
				$this->numeRegistros = $this->bloque->num_rows;
			else
				$this->numeRegistros = $this->affected_rows;

		}
		function obtiRegiArreglo(){
			return $this->bloque->fetch_array();
		}
		function obtiRegiObjeto(){
			return $this->bloque->fetch_object();
		}
	}
	$objeBD = new baseDatos($_SESSION['servidor'], $_SESSION['uDB'], $_SESSION['pDB'], $_SESSION['nDB']);
?>