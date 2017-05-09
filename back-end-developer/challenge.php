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
				$salida = "Linianos";
				break;
				case "01":
				$salida = "Linio";
				break;
				case "02":
				$salida = "Linio";
				break;
				case "03":
				$salida = "Linio";
				break;
				case "04":
				$salida = "Linio";
				break;
				case "10":
				$salida = "IT";
				break;
				case "20":
				$salida = "IT";
				break;
				default:
				$salida = "$n";
				break;
			}
			$resultado[] = $salida;
		}
		return $resultado;
	}
}
?>