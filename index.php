<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores Institucionales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="coop1504-tab-scroll">
    <button onclick="scrollTabs(-1)" class="coop1504-scroll-btn left">&lt;</button>
    
    <div class="coop1504-tabs">
    <?php
    // Supongamos que tienes un arreglo con los títulos de las pestañas y su contenido asociado
    $tabs = [
        "Integridad" => "La integridad es fundamental en nuestras acciones y decisiones...",
        "Respeto" => "El respeto por la diversidad y la dignidad de cada individuo...",
        "Responsabilidad" => "Nos comprometemos con nuestras responsabilidades sociales y ambientales...",
        "Innovación" => "Fomentamos la innovación para mejorar continuamente...",
        "Excelencia" => "Buscamos la excelencia en todo lo que hacemos...",
        "Trabajo en Equipo" => "El trabajo en equipo es esencial para lograr nuestros objetivos...",
        "Sostenibilidad" => "Promovemos prácticas sostenibles en todas nuestras operaciones...",
        "Compromiso" => "Nuestro compromiso con los clientes y la comunidad guía nuestras acciones.",
        "Honestidad" => "Actuamos con honestidad y transparencia en todo momento.",
        "Empatía" => "Entendemos y valoramos las necesidades y sentimientos de los demás.",
        "Diversidad" => "Celebramos la diversidad y fomentamos un ambiente inclusivo.",
        "Calidad" => "Nos esforzamos por ofrecer productos y servicios de alta calidad.",
        "Inclusión" => "Promovemos la inclusión, asegurando que todos se sientan bienvenidos.",
    ];

    foreach ($tabs as $title => $content) {
        echo '<button class="coop1504-tablinks" onclick="openTab(event, \'' . htmlspecialchars($title) . '\')">' . htmlspecialchars($title) . '</button>';
    }
    ?>
    </div>
    
    <button onclick="scrollTabs(1)" class="coop1504-scroll-btn right">&gt;</button>
</div>

<?php
foreach ($tabs as $title => $content) {
    echo '<div id="' . htmlspecialchars($title) . '" class="coop1504-tabcontent">';
    echo '<h3>' . htmlspecialchars($title) . '</h3>';
    echo '<p>' . htmlspecialchars($content) . '</p>';
    echo '</div>';
}
?>

<script src="js.js"></script>
</body>
</html>
