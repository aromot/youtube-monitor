<?php

/**
 * modif en cours... pas sûr qu'on le garde ensuite.
 */

class MyDateTime extends DateTime
{

}

echo "+-----------------+\n";
echo "| YouTube Monitor |\n";
echo "+-----------------+\n";
echo "\n";

$dt = new MyDateTime();
echo "Date & time: ".dt->format('Y-m-d H:i:s')."\n";
echo "\n";

echo "Here are the channels...\n";
