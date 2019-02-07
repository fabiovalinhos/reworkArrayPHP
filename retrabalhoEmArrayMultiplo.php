<?php

$inicioArray = Array
(
    'file' => Array
        (
            'name' => Array
                (
                    0 => 'google',
                    1 => 'Modelo_de carta',
                    2 => 'modelo_de_tabela'
                ),

            'type' => Array
                (
                    0 => 'application/pdf',
                    1 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    2 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                ),

            'tmp_name' => Array
                (
                    0 => '/tmp/php9jKtVA',
                    1 => '/tmp/phpGEN2Uv',
                    2 => '/tmp/phpviDDUq'
                ),

            'error' => Array
                (
                    0 => 0,
                    1 => 0,
                    2 => 0
                ),

            'size' => Array
                (
                    0 => 94645,
                    1 => 13297,
                    2 => 7044
                )

        )

);

echo '<pre>';
print_r ($inicioArray);
echo '</pre>';

// $contValue= count($this->data['file']['name']);
//             for ($cont = 0; $cont < $contValue;  $cont++) {

//                 $newArray['name'] = $this->data['file']['name'][$cont];
//                 $arraySuperior[] = $newArray;

//                 $newArray['type'] = $this->data['file']['type'][$cont];
//                 $arraySuperior[] = $newArray;

//                 $newArray['tmp_name'] = $this->data['file']['tmp_name'][$cont];
//                 $arraySuperior[] = $newArray;
//             }


$contValue= count($inicioArray['file']['name']);

echo $contValue;
for ($cont = 0; $cont < $contValue;  $cont++) {

    ${'newArray' . $cont}['name'] = $inicioArray['file']['name'][$cont];
    $arraySuperior[] = ${'newArray' . $cont};

    ${'newArray' . $cont}['type'] = $inicioArray['file']['type'][$cont];
    $arraySuperior[] = ${'newArray' . $cont};

    ${'newArray' . $cont}['tmp_name'] = $inicioArray['file']['tmp_name'][$cont];
    $arraySuperior[] = ${'newArray' . $cont};


    ${'arrayResult' . $cont}['filter'] = end($arraySuperior);

    $new[] = ${'arrayResult' . $cont};

}



echo '<pre>';
print_r ($new);
echo '</pre>';


?>