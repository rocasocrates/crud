<?php namespace Models;



class Conexion
{
    private $datos = array(

    	'host' => 'localhost',
    	'user' => 'root',
    	'pass' => 'segymant',
    	'db' => 'proyecto'


    );

    private $con;

    public function __construct()

    {
    	$this->con = new \mysqli($this->datos['host'],
    									$this->datos['user'],
    								    $this->datos['pass'],
    									$this->datos['db']);
    }

    public function consultaSimple($sql)

	{
		$this->con->query($sql);
	}

	public function consultaRetorno($sql)
	{
		return $this->con->query($sql);
	}

}

  ?>