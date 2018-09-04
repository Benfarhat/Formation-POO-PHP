<?php
namespace NS;

use NS\Autoloader;
use NS\rep\a\A;
use NS\rep\b\B;
use NS\rep\b\A as C;

require 'Autoloader.php';

Autoloader::register();
/*
Pour infos, les namespace permettent également d'éviter les conflits de noms de class
Donc avec cela on peut utiliser plusieurs foit la classe A dans plusieurs Namespace différents
Notez qu'avant cela, on donnait des noms de classes très longues
*/
echo A::msg();
echo "<hr>";
echo B::msg();
echo "<hr>";
echo C::msg();
echo "<hr>";
echo rep\b\A::msg();