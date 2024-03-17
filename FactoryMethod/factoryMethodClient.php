<?php

require_once 'autoloader.php';

use FactoryMethod\BarbieHospital;
use FactoryMethod\BarbieStudio;

$barbieStudio = new BarbieStudio();

$barbieSeamstress = $barbieStudio->createBarbie('Silk dress and glasees');

$barbieStudio->play();
$barbieSeamstress->work();

$barbieHospital = new BarbieHospital();

$barbieDoctor = $barbieHospital->createBarbie('coat and stethoscope');

$barbieHospital->play();
$barbieDoctor->work();