<?php

class Utils
{

	public static function deleteSession($name)
	{
		if (isset($_SESSION[$name])) {
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}

		return $name;
	}

	public static function isAdmin()
	{
		if (!isset($_SESSION['admin'])) {
			header("Location:" . base_url);
		} else {
			return true;
		}
	}

	public static function isIdentity()
	{
		if (!isset($_SESSION['identity'])) {
			header("Location:" . base_url);
		} else {
			return true;
		}
	}

	public static function showWorkers()
	{
		require_once 'models/worker.php';
		$worker = new Worker();
		$worker = $worker->getAll();
		return $worker;
	}
     
	public static function codeId2()
	{
		$randomnumber = rand(1000, 9999);
		return $randomnumber;
	}

	 // random codigo 
	public function codeId($length = 16)
	{
		$randomnumber = "";
		if ($length > 0) {
			while (strlen($randomnumber) < $length) {
				$randnum = mt_rand(0, 61);
				if ($randnum < 10) {
					$randomnumber .= chr($randnum + 48);
				} elseif ($randnum < 36) {
					$randomnumber .= chr($randnum + 55);
				} else {
					$randomnumber .= chr($randnum + 61);
				}
			}
		}
		return $randomnumber;
	}


	public static function statsCarrito()
	{
		$stats = array(
			'count' => 0,
			'total' => 0
		);

		if (isset($_SESSION['carrito'])) {
			$stats['count'] = count($_SESSION['carrito']);

			foreach ($_SESSION['carrito'] as $producto) {
				$stats['total'] += $producto['precio'] * $producto['unidades'];
			}
		}

		return $stats;
	}

	public static function showStatus($status)
	{
		$value = 'Pendiente';

		if ($status == 'confirm') {
			$value = 'Pendiente';
		} elseif ($status == 'preparation') {
			$value = 'En preparación';
		} elseif ($status == 'ready') {
			$value = 'Preparado para enviar';
		} elseif ($status = 'sended') {
			$value = 'Enviado';
		}

		return $value;
	}
}
