<?php

use PhpParser\Node\Stmt\Echo_;

$output = null;
exec('php artisan inspire',$output,$return);
// print_r($return);
// print_r($output);
for($i = 0; $i < count($output); $i++){
    print_r($output[$i] . "\n");
}
?>