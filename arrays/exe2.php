<?php

$notas = [7.5, 8.2, 6.8, 9, 5.5];

$media = array_sum($notas) / count($notas);

$maiorNota = max($notas);

$notasAprovadas = array_filter($notas, function ($nota) {
    return $nota >= 7;
});

$notasAprovadasString = implode(', ', $notasAprovadas);

$todasAprovadas = true;

foreach ($notas as $nota) {
    if ($nota <= 7) {
        $todasAprovadas = false;
        break;
    }
}

echo "Média: $media" . PHP_EOL;
echo "Maior nota: $maiorNota" . PHP_EOL;
echo "Notas aprovadas: $notasAprovadasString" . PHP_EOL;
echo "Todas aprovadas? " . var_export($todasAprovadas, true);

?>