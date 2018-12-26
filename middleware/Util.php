<?php
namespace middleware\Util;

class util
{
	public function Validate($datauser, $fieldRequire)
	{
		$flag = true;
		$fields = [];
		foreach($fieldRequire as $key)
		{
			if($datauser[$key] == '')
			{
				array_push($fields, $key);
				$flag = false;
			}
		}
		// array_push($fields, $flag);
		return [$fields, $flag];
	}
}

?>