<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
        $cents = 'Privet';
        echo '<h2>Результат:</h2>';
        echo '<p>', $cents,' ', $name, '.</p>';


}
?>