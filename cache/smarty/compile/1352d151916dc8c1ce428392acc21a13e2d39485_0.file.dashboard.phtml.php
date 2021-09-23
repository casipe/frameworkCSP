<?php
/* Smarty version 3.1.33, created on 2021-08-06 22:23:44
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/myplan/dashboard.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610de0a0b0e698_08808405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1352d151916dc8c1ce428392acc21a13e2d39485' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/myplan/dashboard.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610de0a0b0e698_08808405 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <div class="col-md-4">
        <div class="widget widget-default widget-item-icon link" onclick="pageLoad('./condominium')">
            <div class="widget-item-left green">
                <span class="fa fa-building"></span>
            </div>
            <div class="widget-data green">
                <div class="widget-int num-count"><?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalCondominio)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalCondominio;
}?></div>
                <div class="widget-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Condominiums'),$_smarty_tpl ) );?>
</div>
                <div class="widget-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de condomínio cadastrado'),$_smarty_tpl ) );?>
</div>
            </div>
        </div>
    </div>
   
    <div class="col-md-4">
        <div class="widget widget-default widget-item-icon link" onclick="pageLoad('./unit')">
            <div class="widget-item-left red">
                <span class="fa fa-house-user"></span>
            </div>
            <div class="widget-data red">
                <div class="widget-int num-count"><?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalUnidade)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalUnidade;
}?></div>
                <div class="widget-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Units'),$_smarty_tpl ) );?>
</div>
                <div class="widget-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de unidade cadastrado'),$_smarty_tpl ) );?>
</div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="widget widget-default widget-item-icon link" onclick="pageLoad('./user')">
            <div class="widget-item-left text-warning">
                <span class="fa fa-users" style="font-size: 50px!important;"></span>
            </div>
            <div class="widget-data text-warning">
                <div class="widget-int num-count"><?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalUsuario)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalUsuario;
}?></div>
                <div class="widget-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Users'),$_smarty_tpl ) );?>
</div>
                <div class="widget-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de usuário cadastrado'),$_smarty_tpl ) );?>
</div>
            </div>
        </div>
    </div>
</div>
<?php }
}
