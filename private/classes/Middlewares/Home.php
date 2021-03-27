<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Home{
	
	public function __invoke(Request $req, Response $res){
		
		$documentation = file_get_contents("public/documentation.html");
		$res->getBody()->write($documentation);

		return $res;
	}

}
?>