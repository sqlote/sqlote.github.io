<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["precioContado"])) {
    $precioContado = $_POST["precioContado"];
    
    // Simular cotizaciones de interés
    $cotizaciones = array(
        "BANCARIZADA 12 SOLICITADO" => $precioContado * 1.845, 
        "BANCARIZADA 12 CTAS" => ($precioContado * 1.845) / 12,
        "BANCARIZADA 6 SOLICITADO" => $precioContado * 1.355, 
        "BANCARIZADA 6 CTAS" => ($precioContado * 1.355) / 6,
        "BANCARIZADA 3 SOLICITADO" => $precioContado * 1.18, 
        "BANCARIZADA 3 CTAS" => ($precioContado * 1.18) / 3,
        // SUCREDITO 3 Y 6
        // "SUCREDITO 6 SOLICITADO" => $precioContado * 1.1799, 
        // "SUCREDITO 6 CTAS" => ($precioContado * 1.1799) / 6,
        // "SUCREDITO 3 SOLICITADO" => $precioContado * 1.1399, 
        // "SUCREDITO 3 CTAS" => ($precioContado * 1.1399) / 3,
        "NARANJA PLAN Z" => $precioContado * 1.05,
        "NARANJA PLAN Z 3 CTAS" => ($precioContado * 1.05) / 3,
    );

    echo json_encode($cotizaciones);
}
?>
