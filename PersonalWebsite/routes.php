<?php 
// require_once CORE.'Router.php';
// require_once CORE.'Controller.php';
require_once ROOT.'bootstrap.php';
require_once CONTROLLERS.'HomeController.php'; 
require_once CONTROLLERS.'PortfolioController.php'; 


// $homeController = new HomeController();
// Router::get('/', function() use ($homeController){
//     $homeController->index();
// });

$portfolioController = new PortfolioController();
Router::get('/', function() use ($portfolioController){
    $portfolioController->index();
});


