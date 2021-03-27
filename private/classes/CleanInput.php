<?php
final class CleanInput {

	/**
	*@param {string} $content [[Una cadena de caracteres normal]]
	*@param {string} $allow_these [[Cadena de etiquetas html que no quiera borrar]]
	*/
	public static function tags( string $content,string $allow_these = "<br>" ) : string
	{
		return strip_tags($content,$allow_these);
	}

	/**
	*@param {string} $content [[Cadena de caracteres normal]]
	*@param {string} $delete_these [[Una cadena de caracteres que quiero eliminar al final]]
	*/
	public static function atEnd( string $content,string $delete_these = "" ) : string
	{
		/*
			###Si no especifico el segundo parametro rtrim() por defecto eliminara:

			" " (ASCII 32 (0x20)), un espacio ordinario.
			"\t" (ASCII 9 (0x09)), un tabulador.
			"\n" (ASCII 10 (0x0A)), una nueva línea (line feed).
			"\r" (ASCII 13 (0x0D)), un retorno de carro.
			"\0" (ASCII 0 (0x00)), el byte NULL.
			"\x0B" (ASCII 11 (0x0B)), un tabulador vertical.
		*/
		return rtrim($content,$delete_these);
	}

	/**
	*@param {string} $content [[Cadena normal de caracteres]]
	*/
	public static function justScriptTags( string $content ) : string
	{
		$regExp = "/(<script|<\?php)(.*)(<\/script>|\?>)?/";
		return preg_replace($regExp,"",$content);
	}
}
?>