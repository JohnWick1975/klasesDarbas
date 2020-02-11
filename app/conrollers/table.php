<?php

function table($data)
{
    print "<table class='text-center m-auto'>";
    foreach (array_keys($data[0]) as $value) {
        print '<th class="border border-dark p-3">' . $value . '</th>';
    }
    foreach ($data as $users) {
        print '<tr class="border border-dark p-3">';
        foreach ($users as $user) {
            print '<td class="border border-dark p-3">' . $user . '</td>';
        }
        print '</tr>';
    }
    print "</table>";
}

