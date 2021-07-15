<?php
require '../models/pedidos.model.php';
class Reportes
{
    public function sendReporteEmail($detalle)
    {
        $dPedidos = ModelPedidos::mdlGetDetallePedido($detalle["id"]);
        $mailto = $detalle["email"];
        $nombre = $detalle["nombre"];
        $apellido = $detalle["apellido"];
        $codigo = $detalle["codigo"];
        $mailSubject = "Detalle del Pedido: " . $codigo;
        $total = 0.00;
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: crisrodam1996@gmail.com' . "\r\n" .
            'Reply-To: crisrodam1996@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        // Additional headers
        $message = "
            <html>
                <head>
                    <title>Detalle del pedido</title>
                </head>
                <body>
                <h1>Te saludamos, " . $nombre . " " . $apellido . "</h1>
                <p>Su pedido con código <strong>" . $codigo  ."</strong> se ha procesado correctamente</p>
                <h3>A continuación mostraremos los detalles del pedido</h3>
                <table border='1' style='text-align: center;'>
                <thead>
                    <tr>
                        <th style='padding: 5px 10px;'> Producto </th>
                        <th style='padding: 5px 10px;'> Cantidad </th>
                        <th style='padding: 5px 10px;'> Precio </th>
                        <th style='padding: 5px 10px;'> Subtotal </th>
                    </tr>
                </thead>
                <tbody>
                ";
        for ($i = 0; $i < count($dPedidos); $i++) {
            $message .=  "
                            <tr>
                                <td>" . $dPedidos[$i]["nombre_producto"] . "</td>
                                <td>" . $dPedidos[$i]["cantidad"] . "</td>
                                <td> $ " . $dPedidos[$i]["precio"] . "</td>
                                <td> $ " . number_format((float)($dPedidos[$i]["precio"] *  $dPedidos[$i]["cantidad"]),2) . "</td>
                            </tr>
                            ";
                            $total = $total + ($dPedidos[$i]["precio"] * $dPedidos[$i]["cantidad"]);
        }
        $message .= "<tr>
        <td colspan='3'><strong>Total</strong></td>
        <td>$ " . number_format((float)($total),2) . "</td>
        </tr>
        </tbody>
        </table>
        <br>
        <br>
        <strong>Recuerda que:</strong>
        <p>Si tienes dudas nos puedes contactar en ###########</p>
        <br>
        <strong>Te saluda cordialmente,</strong>
        <p>Asociación ASOPAGUA</p>
        </body>
        </html>";

        // Mail it
        mail($mailto, $mailSubject, $message, $headers);
        echo json_encode($dPedidos);
    }
}
if (isset($_POST["detalles"])) {
    $sendEmail = new Reportes();
    $sendEmail->sendReporteEmail($_POST["detalles"]);
}
