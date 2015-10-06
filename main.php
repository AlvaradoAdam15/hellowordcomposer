<?php

require_once __DIR__ . "/vendor/autoload.php";

use Com\Iesebre\Dam2\adamalvarado\hellowordcomposer\Hello;

$greetings = new Hello();
$greetings->say_hello();