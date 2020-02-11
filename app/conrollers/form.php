<?php

function forma()
{
    print "<form class='w-25 m-auto' method='post'><label class='d-block'>Vardas</label><input class='d-block' name='name' type='text'><label class='d-block'>Emailas</label>
<input class='d-block' name='email' type='email'><button class='d-block mt-3' name='button' type='submit'>Submit</button></form>";
    var_dump($_POST);
    if (isset($_POST['button'])) {
        if (!empty($_POST['email']) && !empty($_POST['name'])) {
            print "Tavo el.pastas yra: " . $_POST['email'] . "<br>" . "Tavo vardas yra: " . $_POST['name'] . "<br>";
        } else {
            print "klaidingai ivesti duomenys";
        }
    }
}
