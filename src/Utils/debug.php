<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');
function dump($data)
{

    echo '<div style="
            padding: 0 10px;
            background: lightblue
            display: inline-block;
            border: 1px solid #000;
            "
        >
        <pre>';
    print_r($data);
    echo '
        </pre>
</div>';
}
