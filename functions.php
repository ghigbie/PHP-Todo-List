<?php

function dump_die($item){
    echo '<pre>';
    die(var_dup($item));
    echo '</pre>';
};
