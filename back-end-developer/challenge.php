<?php
namespace Linio;

class Challenge
{
	public function procesar($numeros){
		$resultado = array();
		foreach ($numeros as $n) {
			$salida = '';

			$rem3 = $n % 3;
			$rem5 = $n % 5;
			$remainders = $rem3 . $rem5;

			switch($remainders){
				case "00":
				$salida = "\nLinianos";
				break;
				case "01":
				$salida = "\nLinio";
				break;
				case "02":
				$salida = "\nLinio";
				break;
				case "03":
				$salida = "\nLinio";
				break;
				case "04":
				$salida = "\nLinio";
				break;
				case "10":
				$salida = "\nIT";
				break;
				case "20":
				$salida = "\nIT";
				break;
				default:
				$salida = "\n$n";
				break;
			}
			$resultado[] = $salida;
		}
		return $resultado;
	}
}
?>