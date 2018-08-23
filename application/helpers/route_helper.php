<?php 


class Route
{
	public static function add($slug, $mapto )
	{
		return $routes[$slug] = $mapto ;
	}
}



?>