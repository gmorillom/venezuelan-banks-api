<?php  
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Unnecesary {
	public function __invoke(Request $req, Response $res, $args){
		$results = "";

		if( is_string($args["id"]) ){
				
			$args["id"] = CleanInput::tags($args["id"]);
			$bank = new Bank;

			if( $bank->delete($args["id"]) ) $results = "Enhorabuena eliminacion exitosa";
			else $results = "No se pudo completar la eliminacion";
		}
		else $results = "Datos no admitidos";

		$res->withHeader("Content-Type","application/json");
		$res->getBody()->write($results);

		return $res;
	}
}
?>