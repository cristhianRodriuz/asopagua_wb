<?php
include_once '../controllers/pedidos.controller.php';
include_once '../models/pedidos.model.php';
class AjaxPedidos{
    public function ajaxGetPedido($idPedido){
        $res = ControllerPedidos::ctrGetPedido($idPedido);
        echo json_encode($res);
    }
    public function ajaxGetDetallePedido($idPedido){
        $res = ControllerPedidos::ctrGetDetallePedido($idPedido);
        echo json_encode($res);
    }
    public function ajaxDeletePedido($idPedido){
        $res = array("verificado" =>ControllerPedidos::ctrDeletePedido($idPedido));
        echo json_encode($res);
    }
    public function ajaxSetEstadoPedido($idPedido,$estado){
        $res = array("verificado" =>ControllerPedidos::ctrSetEstadoPedido($idPedido,$estado));
        echo json_encode($res);
    }
    public function ajaxNuevoPedido($idCliente,$detallePedido,$totalPago){
        $res = ControllerPedidos::ctrAddNuevoPedido($idCliente,$detallePedido,$totalPago);
        echo json_encode($res);
    }
}

if(isset($_POST["idPedido"])){
    $getPedido = new AjaxPedidos();
    $getPedido->ajaxGetPedido($_POST["idPedido"]);
}
if(isset($_POST["getDetallePedido"])){
    $getDetallePedido = new AjaxPedidos();
    $getDetallePedido->ajaxGetDetallePedido($_POST["getDetallePedido"]);
}
if(isset($_POST["cmbPedidoPerId"])){
    $setEstadoPedido = new AjaxPedidos();
    $setEstadoPedido->ajaxSetEstadoPedido($_POST["cmbPedidoPerId"],$_POST["newEstado"]);
    // echo json_encode($_POST["newEstado"]);
}
if(isset($_POST["deletePedidoPerId"])){
   $deletePedido = new AjaxPedidos();
   $deletePedido->ajaxDeletePedido($_POST["deletePedidoPerId"]);
}
if(isset($_POST["nuevo_pedido"])){
    $nuevoPedido = new AjaxPedidos();
    $nuevoPedido->ajaxNuevoPedido($_POST["clienteReg"],$_POST["detalle_pedido"],$_POST["totalPago"]);
}