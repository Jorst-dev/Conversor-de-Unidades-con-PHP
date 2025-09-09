<?php

require_once __DIR__ . '/Conversor.php';

$resultado = '';
$formula = '';

if (isset($_POST['valor']) && isset($_POST['conversion'])) {
    $valor = (float)$_POST['valor'];
    $conversion = $_POST['conversion'];

    switch ($conversion) {
        case 'CtoF':
            $resultado = Conversor::celsiusAFahrenheit($valor);
            $formula = "F = (C × 9/5) + 32";
            break;
        case 'CtoK':
            $resultado = Conversor::celsiusAKelvin($valor);
            $formula = "K = C + 273.15";
            break;
        case 'FtoC':
            $resultado = Conversor::fahrenheitACelsius($valor);
            $formula = "C = (F - 32) × 5/9";
            break;
        case 'FtoK':
            $resultado = Conversor::fahrenheitAKelvin($valor);
            $formula = "K = (F - 32) × 5/9 + 273.15";
            break;
        case 'KtoC':
            $resultado = Conversor::kelvinACelsius($valor);
            $formula = "C = K - 273.15";
            break;
        case 'KtoF':
            $resultado = Conversor::kelvinAFahrenheit($valor);
            $formula = "F = (K - 273.15) × 9/5 + 32";
            break;
    }
}

// Carga el HTML y reemplaza los valores dinámicos
$html = file_get_contents(__DIR__ . '/templates/form.html');
$html = str_replace('{{resultado}}', $resultado, $html);
$html = str_replace('{{formula}}', $formula, $html);

echo $html;
