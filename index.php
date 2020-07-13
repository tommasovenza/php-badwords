<?php 

$badword = $_GET['parola_da_cancellare'];

$lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Voluptatum, esse ' . $badword . ' architecto consectetur excepturi, ducimus nam accusantium quidem repellendus, 
inventore rem fugiat sequi odit quisquam labore rerum temporibus fugit quam?';

var_dump($lorem);

$parolaCancellata = 'expedita'


//  commento in php
?>

<h2> ecco la badwords cancellata: "<?php echo $parolaCancellata ?>"</h2>




 