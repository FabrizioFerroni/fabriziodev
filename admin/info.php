<?php
/**
 * Función para detectar el sistema operativo, navegador y versión del mismo
 */
$info=detect();
 
echo "Sistema operativo: ".$info["os"];
echo "<br>";
echo "<br>";
echo "Navegador: ".$info["browser"];
echo "<br>";
echo "<br>";
echo "Versión: ".$info["version"];
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo "<br>";
 
/**
 * Funcion que devuelve un array con los valores:
 *	os => sistema operativo
 *	browser => navegador
 *	version => version del navegador
 */
function detect()
{
	$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
	$os=array("WIN","MAC","LINUX");
 
	# definimos unos valores por defecto para el navegador y el sistema operativo
	$info['browser'] = "OTHER";
	$info['os'] = "OTHER";
 
	# buscamos el navegador con su sistema operativo
	foreach($browser as $parent)
	{
		$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
		$f = $s + strlen($parent);
		$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
		$version = preg_replace('/[^0-9,.]/','',$version);
		if ($s)
		{
			$info['browser'] = $parent;
			$info['version'] = $version;
		}
	}
 
	# obtenemos el sistema operativo
	foreach($os as $val)
	{
		if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
			$info['os'] = $val;
	}
 
	# devolvemos el array de valores
	return $info;
}
?>