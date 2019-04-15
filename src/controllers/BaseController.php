<?php
	namespace App\controllers;

	class BaseController {
		protected function response_ok($response, $label, $data) {
			$data = array(
				'error' => false,
				'data' => [
					$label => $data
				]
			);

			return $response->withJson($data);
		}
	}