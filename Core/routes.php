<?php

namespace Core;

$routes = [
	'/app/index',
	'/app/login',
	'/app/register',
	'/app/logout'
	];

foreach ($routes as $route) {
		$args = explode('/', $route);
		Router::connect($route, ['controller' => $args[1], 'action' => $args[2]]);
}
