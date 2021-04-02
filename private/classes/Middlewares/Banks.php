<?php  
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Banks {

	public function __invoke(Request $req, Response $res, $args){
		$results = [];

		if( !empty($args) && settype($args["id"],"string") ){
			
			$bank = new Bank;
			$privateId = "ttt".$args["id"];
			$results = $bank->find($privateId);
		}
		else{
			$bank = new Bank;
			$results = $bank->find();
		}

		$res->withHeader("Content-Type","application/json");
		$res->getBody()->write(utf8_decode(json_encode($results)));

		return $res;
	}
}
?>