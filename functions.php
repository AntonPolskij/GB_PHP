<?php

function sum(float $x, float $y): float 
{
    return $x + $y;
}

function diff(float $x, float $y): float
{
    return $x - $y;

}

function multi(float $x, float $y): float
{
    return $x * $y;

}

function div(float $x, float $y): ?float
{
    return $y != 0 ? $x / $y : null;

}