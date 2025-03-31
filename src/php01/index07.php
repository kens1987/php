<?php

function getTriangleArea($base,$height)
{
  return $base*$height/2;
}
function getSquareArea($base,$height)
{
  return $base*$height;
}
function getTrapezoidArea($upperBase,$lowerBase,$height)
{
  return ($upperBase+$lowerBase)*$height/2;
}

echo getTriangleArea(10,10) . "\n";
echo getSquareArea(10,10) . "\n";
echo getTrapezoidArea(10,10,10) ;