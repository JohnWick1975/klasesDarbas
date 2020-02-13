<?php

namespace table;

class Table
{
    public function GetAllUsersAllDate($array)
    {
        print"<table><tr>";
        foreach ($array[0] as $key=> $value) {
            print '<th>' . $key . '</th>';
        }
        print '</tr>';
        foreach ($array as $userdata) {
            print '<tr>';
            foreach ($userdata as $data) {
                print '<td>' . $data . '</td>';
            }
            print '</tr>';
        }
        print "</table>";

    }
}
$table = new Table();