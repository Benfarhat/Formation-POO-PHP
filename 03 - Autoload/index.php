<?php
namespace NS;

use NS\Autoloader;
use NS\rep\a\A;
use NS\rep\b\B;

require 'Autoloader.php';

Autoloader::register();

echo A::msg();
echo "<hr>";
echo B::msg();