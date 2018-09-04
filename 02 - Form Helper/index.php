<?php

require('Form.php');
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
echo $form->submit();
?>
</form>