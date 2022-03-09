<?php require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library/PHPWine/PHPWine.php'; ?>
<?php 

use \PHPWine\VanillaFlavour\Wine\Optimizer\Html as Optimizer;
use \PHPWine\VanillaFlavour\Wine\Optimizer\Enhancers as OptimizerCare; 

$html     = new Optimizer();
$enhancer = new OptimizerCare();

