<?php

function metai($data, $data2)
{
    print"<select class=''>";
    for ($i = $data; $i <= $data2; $i++) {
        print "<option value='$data'>" . $data . "</option>";
        $data++;
    }
    print "</select>";
}