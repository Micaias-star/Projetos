<?php
// este Json transforma o json em array
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Micaias","idade":"23"}]';

$data = json_decode($json, true);   //se não colocar o "true" ele transforma tudo em objeto.

var_dump ($data);  


?>