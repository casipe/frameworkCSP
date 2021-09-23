<?php
/* Smarty version 3.1.33, created on 2021-09-06 23:02:30
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/index/dashboard.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6136c836d65409_53002597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e173d5edc6fecd214e3cc3519215c617e9e2db9' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/index/dashboard.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136c836d65409_53002597 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>   
    var dataInadimplente = <?php echo $_smarty_tpl->tpl_vars['datas']->value['dataInadimplente'];?>

    var dataFaturamento = <?php echo $_smarty_tpl->tpl_vars['datas']->value['dataFaturamento'];?>

<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_assignInScope('quantitativo', $_smarty_tpl->tpl_vars['datas']->value['quantitativo']);?> 
<div id="dashboard">
    <div class="col-md-12">
        <div class="col-md-3 blue">
            <div class="widget widget-default widget-item-icon link" onclick="pageLoad('./block')">
                <div class="widget-item-left blue">
                    <span class="fa fa-th-large"></span>
                </div>
                <div class="widget-data blue">
                    <div class="widget-int num-count"><?php if (isset($_smarty_tpl->tpl_vars['quantitativo']->value['totalBloco'])) {
echo intval($_smarty_tpl->tpl_vars['quantitativo']->value['totalBloco']);
}?></div>
                    <div class="widget-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Blocks'),$_smarty_tpl ) );?>
</div>
                    <div class="widget-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de bloco cadastrado'),$_smarty_tpl ) );?>
</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget widget-default widget-item-icon link" onclick="pageLoad('./unit')">
                <div class="widget-item-left red">
                    <span class="fa fa-house-user"></span>
                </div>
                <div class="widget-data red">
                    <div class="widget-int num-count"><?php if (isset($_smarty_tpl->tpl_vars['quantitativo']->value['totalUnidade'])) {
echo intval($_smarty_tpl->tpl_vars['quantitativo']->value['totalUnidade']);
}?></div>
                    <div class="widget-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Units'),$_smarty_tpl ) );?>
</div>
                    <div class="widget-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de unidade cadastrada'),$_smarty_tpl ) );?>
</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget widget-default widget-item-icon">
                <div class="widget-item-left green">
                    <span class="fa fa-users"></span>
                </div>
                <div class="widget-data green">
                    <div class="widget-int num-count"><?php if (isset($_smarty_tpl->tpl_vars['quantitativo']->value['totalMorador'])) {
echo intval($_smarty_tpl->tpl_vars['quantitativo']->value['totalMorador']);
}?></div>
                    <div class="widget-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Dwellers'),$_smarty_tpl ) );?>
</div>
                    <div class="widget-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de morador cadastrado'),$_smarty_tpl ) );?>
</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="widget widget-default widget-item-icon link" onclick="pageLoad('./user')">
                <div class="widget-item-left text-warning">
                    <span class="fa fa-user-lock"></span>
                </div>
                <div class="widget-data text-warning">
                    <div class="widget-int num-count"><?php if (isset($_smarty_tpl->tpl_vars['quantitativo']->value['totalUsuario'])) {
echo intval($_smarty_tpl->tpl_vars['quantitativo']->value['totalUsuario']);
}?></div>
                    <div class="widget-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Users'),$_smarty_tpl ) );?>
</div>
                    <div class="widget-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de usuário de acesso do condomínio'),$_smarty_tpl ) );?>
</div>
                </div>
            </div>
        </div>
    </div>
    <div class="hr clear"></div>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'LANCAMENTOS,TESOURARIA'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?>

    <div class="col-md-12">    

        <div class="col-md-6">
            <div class="resultGraph text-center">
                <canvas id="graficoFaturamento"></canvas>
            </div>
        </div>

        <div class="col-md-6">
            <div class="resultGraph text-center">
                <canvas id="graficoInadimplencia"></canvas>
            </div>
        </div>

    </div>
    <?php }?>
    <div id="footer">&nbsp;</div>
</div>





<?php }
}
