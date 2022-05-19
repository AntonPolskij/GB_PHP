<?php
require_once 'functions.php';


function mathOperations(float $x, float $y, string $operations): ?float {
     return $operations($x,$y);
}

echo mathOperations(4,5,'diff');