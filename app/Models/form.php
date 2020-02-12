<?php

namespace form;

class Form
{
    public function RegForm()
    {
        print "
        <form method='post'>
        <input type='text' name='username' placeholder='username'>
        <input type='email' name='email' placeholder='email'>
        <input type='password' name='password' placeholder='password'>
        <button type='submit' name='sent'>Sent</button>
        <button type='submit' name='edit'>Edit</button>
        </form>
        ";
    }

}
$form = new Form();
?>