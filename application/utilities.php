  <!-- ! utilities.php v1.0.1 | MIT License | github.com/StephaneJDeschamps/MVC_base_starter_website  -->

<?php

// Utilities functions
function debug($variable)
{
    echo '<pre>'.print_r($variable, true).'</pre>';
}
// $test = 'coucou';
// var_dump($test);
// debug($test);


function secure_test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function error($err='')
{
    $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
    exit('<div id="error">
                <p>'.$mess.'</p>
                <p>Cliquez <a href="./UserController.class.php">ici</a> pour revenir au formulaire</p>
                </div>
          ');
}