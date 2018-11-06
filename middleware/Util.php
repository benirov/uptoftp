<?php
namespace middleware\Util;

class util
{
	public function Validate($datauser, $fieldRequire)
	{
		$flag = true;
		foreach($fieldRequire as $key)
		{
			if($datauser[$key] == '')
			{
				$flag = false;
			}
		}

		return $flag;
	}
}

?>