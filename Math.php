<?php

class Math
{
	public static $valor = 10;

	//quando o método é estático não precisa instanciar
	public static function somar($x, $y)
	{
		return self::valor;
	}	
}