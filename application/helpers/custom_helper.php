<?php

function notify ($msg, $type = 'danger'){
    return '<div class="alert alert-'.$type.'">'.$msg.'</div>';
}


?>