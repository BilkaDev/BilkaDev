<?php
declare(strict_types=1);

namespace App;

class View
{
    public function render(array $params): void
    {
        $about = $params['about'];
        require_once "templates/layout.php";
    }
}