<?php

	//Authentication needed
	$app->group('/api', function(\Slim\App $app) {
		$app->get('/events', \EventsController::class . ':index');
	});