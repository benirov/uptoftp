<?php

namespace Traits\jsonResponser;

trait JsonResponser
{
	public function emptyResponse()
	{
		
		echo json_encode(['code' => 404, 'message' => "la consulta no devolvio valores"]);
	}

	public function successResponse($data)
	{
		
		echo json_encode(['code' => 200, 'message' => "la consulta fue exitosa", 'data' => $data]);
	}
}