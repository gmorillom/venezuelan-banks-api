<?php  
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Changes {
	public function __invoke(Request $req, Response $res){
		$results = "";

		if( strcmp($req->getHeader("Content-Type")[0],"application/json") === 0 ){

			$requestBody = json_decode(file_get_contents("php://input"),true);
			$requestFieldsSent = count($requestBody);

			if( $requestFieldsSent === 8 ){

				foreach($requestBody as $key => $value)
					if( is_string($value) ) $requestBody[$key] = CleanInput::tags($value);

				$bank = new Bank;

				if( $bank->update($requestBody) ) $results = "Enhorabuena se han actualizado tus datos";
				else $results = "Lo sentimos no se pudieron actualizar los datos";
			}
			else $results = "!Parece que has enviado informacion de mas!";
		}
		else $results = "Datos no admitidos";

		$res->withHeader("Content-Type","application/json");
		$res->getBody()->write(json_encode($results));

		return $res;
	}
}

/*		
	Estructura de una actualizacion
		{
			"id_privado":string,
    		"nombre":string,
    		"estado":boolean,
    		"codigo":string,
    		"privado":boolean,
    		"web":string,
        	"telefono":string,
        	"email":string
		}
*/
?>