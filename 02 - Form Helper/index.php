<?php

// require('Form.php');

/*
function __autoload($class){ // Deprecated
    var_dump('autoload appelé');
    die();
}
*/

spl_autoload_register( function ($class) {
    include $class . '.php';
});

/*

ou pour appeler une fonction

spl_autoload_register( 'nom_de_la_fonction' );

ou pour appeler une fonction static dans une classe

require 'chemin vers la classe .. php';
spl_autoload_register( array( 'Nom de la classe', 'nom de la fonction))



*/
?>
<form action="#" method="post">
<?php
$form = new Form([
    'username' => 'Rogey'
    ]);

echo $form->input('username');
echo $form->input('password');
echo $form->submit();
?>
</form>
<form action="#" method="post">

<?php
$form = new Form($_POST);

echo $form->input('username');
echo $form->input('password');
echo $form->input('email');
echo $form->submit();
?>
</form>