<?php

function forma()
{
    print "<form method='post'><label>Vardas</label><input name='name' type='text'><label>Emailas</label>
<input name='email' type='email'><button name='button' type='submit'>Submit</button>";
    var_dump($_POST);
    if (isset($_POST['button'])) {
        if (!empty($_POST['email']) && !empty($_POST['name'])) {
            print "Tavo el.pastas yra: " . $_POST['email'] . "<br>" . "Tavo vardas yra: " . $_POST['name'] . "<br>";
        } else {
            print "klaidingai ivesti duomenys";
        }
    }
}