<?php

declare(strict_types=1);

namespace App;

use App\Exception\AppException;
use Throwable;

require_once 'src/Utils/debug.php';
require_once 'src/Controller.php';

$configuration = require_once 'config/config.php';

try {
    Controller::initConfiguration($configuration);
    (new Controller())->run();
} catch (AppException $e) {
    echo '<h1>Error</h1>';
    echo '<h3>' . $e->getMessage() . '</h3>';
} catch (Throwable $e) {
    echo '<h1>Error</h1>';
    echo '<h3>Something went wrong, please try late</h1>';
}
