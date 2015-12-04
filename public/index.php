<?php
error_reporting(-1);

use Barter\Core\Application;
require_once realpath(__DIR__ . '/../src/Config/start.php');


$app = new Application();
$app->getSlimInstance()->get('/', function () use ($app) {
    $app->getSlimInstance()->render("index.php");
});
$app->getSlimInstance()->run();
//
//exit();
//
//// Load application config
//$yaml_parser = new Parser();
//$config = $yaml_parser->parse(file_get_contents(realpath(SRC_PATH . '/Config/application.yml')));
////$config["log.writer"] = new Barter\Config\LogWriter(); //Additional default config
//
//// Initialize app and config
//$app = new \Slim\Slim($config);
//$app->setName("Barter site");
//
//// Set views path
//$views_path = $app->config('templates.path');
//if ($views_path != "./templates") {
//    $app->config('templates.path', realpath(SRC_PATH . "/" . $views_path));
//    $views_path = $app->config('templates.path');
//}
//
//// Load additional environment variables
//$env_config = $yaml_parser->parse(
//    file_get_contents(SRC_PATH . '/Config/Environments/' . $app->config('mode') . '.yml'));
//
//$app->config($env_config);
//
//// Only invoked if mode is "production"
//$app->configureMode('production', function () use ($app, $yaml_parser) {
//
//});
//
//// Only invoked if mode is "development"
//$app->configureMode('development', function () use ($app) {
//
//});
//
//
//// Routes
//$app->get('/', function () use ($app) {
//    $app->render("index.php");
//});
//
//$app->get('/items', function () {
//});
//
//$app->get('/items/:id', function ($id) {
//});
//
//$app->post('/items', function () {
//});
//
//$app->put('/items/:id', function () {
//});
//
//$app->delete('/items/:id', function () {
//});
//
//$app->run();