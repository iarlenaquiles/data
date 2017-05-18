<?php
    $data = date("D", mktime(0, 0, 0, 2, 23, 2017));
    $mes = date('M');
    $dia = date('d');
    $ano = date('Y');

    $semana = array(
        'Sun' => 'Dom',
        'Mon' => 'Seg',
        'Tue' => 'Ter',
        'Wed' => 'Qua',
        'Thu' => 'Qui',
        'Fri' => 'Sex',
        'Sat' => 'Sáb'
    );

    echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";
?>
