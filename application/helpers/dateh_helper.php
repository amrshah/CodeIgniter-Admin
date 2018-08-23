

<?php 




class Date
{
	public static function fromLong($longDate)
	{
		return date('Y-m-d', $longDate);
	}
}


?>