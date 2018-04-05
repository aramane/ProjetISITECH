<?php

class GenererCode
{
	function Code($length = 7) 
	{
		$date = date('Y-m');
	    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $code = 'LOC-'.$date.'-';
	    
	    for ($i = 0; $i < $length; $i++)
	    {
	        $code .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $code;
	}
}

// TEST
$co = new GenererCode();
$c = $co->Code();

echo $c;

?>