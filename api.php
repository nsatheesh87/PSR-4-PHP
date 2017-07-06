<?php
/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
require_once __DIR__.'/vendor/autoload.php';

require_once __DIR__.'/src/app.php';

$app = new Sociomantic\appFactory();

$kernel = $app::make();

$response = $kernel->handle();

exit;
$response->send();
$kernel->terminate($request, $response);
