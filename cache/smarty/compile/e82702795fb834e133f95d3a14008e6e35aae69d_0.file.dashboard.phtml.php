<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/dashboard.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9df9d03_95194631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e82702795fb834e133f95d3a14008e6e35aae69d' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/dashboard.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9df9d03_95194631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php echo '<script'; ?>
>   
    var datasReserva = <?php echo $_smarty_tpl->tpl_vars['datas']->value['datasReserva'];?>

    var datasFaturamento = <?php echo $_smarty_tpl->tpl_vars['datas']->value['datasFaturamento'];?>

<?php echo '</script'; ?>
>

<div class="page-content-wrap"> 
    <div class="row">
        <div class="col-md-12 col-xs-12">

            <div class="col-md-6">
                <div class="resultGraph text-center">
                    <canvas id="canvas"></canvas>
                </div>
            </div>

            <div class="col-md-6 atividade">
                <div class="panel-body list-group border-bottom" style="padding-left: 0px !important;">
                    <span class="list-group-item active"><span class="fa fa-dollar"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Atividade'),$_smarty_tpl ) );?>
</span>
                    <span class="list-group-item"><span class="fa fa-file-invoice-dollar"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total Fatura Regular'),$_smarty_tpl ) );?>
 / <?php echo smarty_modifier_date_format(time(),'%Y');?>
 <span class="badge bg-green" id="totalContaRegular"></span></span> 
                    <span class="list-group-item"><span class="far fa-frown"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total Fatura Vencida'),$_smarty_tpl ) );?>
 <span class="badge badge-danger">R$ <?php echo number_format($_smarty_tpl->tpl_vars['datas']->value['totalTotaFaturaVencida'],2,",",".");?>
</span></span>
                    <span class="list-group-item"><span class="fa fa-calendar"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de Reserva'),$_smarty_tpl ) );?>
 <span class="badge badge-default"><?php echo $_smarty_tpl->tpl_vars['datas']->value['qtdTotalReserva'];?>
</span></span>
                    <span class="list-group-item"><span class="far fa-calendar"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reserva Pendente'),$_smarty_tpl ) );?>
 <span class="badge bg-blue"><?php echo $_smarty_tpl->tpl_vars['datas']->value['qtdTotalReservaPendente'];?>
</span></span>
                    <span class="list-group-item"><span class="fa fa-users"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de Visitante'),$_smarty_tpl ) );?>
 <span class="badge bg-gray"><?php echo $_smarty_tpl->tpl_vars['datas']->value['totalVisitante'];?>
</span></span>
                </div>
            </div> 
        </div>
    </div>
</div>
<br class="clear">
<hr>
<?php }
}
