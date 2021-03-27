<?php  
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class NewBank {
	public function __invoke(Request $req, Response $res){
		$results = "";

		if( strcmp($req->getHeader("Content-Type")[0],"application/json") === 0 ){
			
			$requestBody = json_decode(file_get_contents("php://input"),true);
			$requestFieldsSent = count($requestBody);

			if( $requestFieldsSent === 7 ){

				$bank = new Bank;
				$lastId = $bank->lastId()[0]["id"] + 1;
				settype($lastId, "string");
				$requestBody["id_privado"] = "bnzlkd.ttt".$lastId;

				foreach($requestBody as $key => $value)
					if( is_string($value) ) $requestBody[$key] = CleanInput::tags($value);

				if( $bank->new($requestBody) ) $results = "!Enhorabuena, insersion realizada correctamente!";
				else $results = "!No pudimos almacenar tu banco!";
			}
			else $results = "!Parece que has enviado informacion de mas!";
		}
		
		$res->withHeader("Content-Type","application/json");
		$res->getBody()->write(json_encode($results));

		return $res;
	}
}

/*
	Estructura de una insersion
		{
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