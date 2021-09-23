<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/details.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9de3434_54770589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3a11292cc5ad4bc766d052f831fae26dabf3c6' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/details.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9de3434_54770589 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="h-title"><i class="fal fa-info-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'General Data'),$_smarty_tpl ) );?>
</h4>
<hr>
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable15=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable15."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/dashboard.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('datas'=>$_smarty_tpl->tpl_vars['datasDashboard']->value), 0, true);
?> 

<fieldset class="scheduler-border">
    <legend class="scheduler-border"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Details'),$_smarty_tpl ) );?>
</legend>
    <div class="col-md-12 col-xs-12 card-detail">
        <div class="form-group">
            <div class="col-md-12 col-xs-12">

                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value->bloco_descricao)) {
echo $_smarty_tpl->tpl_vars['datas']->value->bloco_descricao;
}?>
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value->status)) {?>
                        <?php if (intval($_smarty_tpl->tpl_vars['datas']->value->status) == '1') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Inactive'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php }?>
                    </div>
                </div>
                
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Number'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value->numero)) {
echo $_smarty_tpl->tpl_vars['datas']->value->numero;
}?>
                    </div>
                </div>
                
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Floor'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value->andar)) {
echo $_smarty_tpl->tpl_vars['datas']->value->andar;
}?>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 col-xs-12">
                
                 <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type of Apportionment'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['tipoRateio']->value)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['tipoRateio']->value == 'FI') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Per Ideal Fraction'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Per unit'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php }?>
                    </div>
                </div>
                
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total Unit Area'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value->total_area_unidade)) {
echo number_format($_smarty_tpl->tpl_vars['datas']->value->total_area_unidade,2,",",".");
}?>
                    </div>
                </div>
                
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Ideal Fraction'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value->fracao_ideal)) {
echo number_format($_smarty_tpl->tpl_vars['datas']->value->fracao_ideal,3,",",".");
}?> <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value->fracao_ideal_perc)) {?> &nbsp; (<?php echo number_format($_smarty_tpl->tpl_vars['datas']->value->fracao_ideal_perc,3,",",".");?>
%)<?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>    


<fieldset class="scheduler-border">
    <legend class="scheduler-border"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Owner'),$_smarty_tpl ) );?>
</legend>
    <?php if (!empty($_smarty_tpl->tpl_vars['Owner']->value->nome)) {?>
    <div class="col-md-12 col-xs-12 card-detail">
        <div class="form-group">
            <div class="col-md-9 col-xs-12">

                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Name'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php echo $_smarty_tpl->tpl_vars['Owner']->value->nome;?>

                    </div>
                </div>

                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label">
                        <?php if (!empty($_smarty_tpl->tpl_vars['Owner']->value->cnpj)) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'F.T.I.N'),$_smarty_tpl ) );?>
:
                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'SSN'),$_smarty_tpl ) );?>
: 
                        <?php }?>
                    </label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['Owner']->value->cnpj)) {?>                                
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['mask'][0], array( array('m'=>'##.###.###./####-##','v'=>$_smarty_tpl->tpl_vars['Owner']->value->cnpj),$_smarty_tpl ) );?>
                                
                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['mask'][0], array( array('m'=>'###.###.###-##','v'=>$_smarty_tpl->tpl_vars['Owner']->value->cpf),$_smarty_tpl ) );?>

                        <?php }?>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Genre'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['Owner']->value->sexo)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['Owner']->value->sexo == "M") {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Male'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Female'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php }?>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['Owner']->value->status)) {?>
                        <?php if (intval($_smarty_tpl->tpl_vars['Owner']->value->status) == '1') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Inactive'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php }?>
                    </div>
                </div>                
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-9 col-xs-12">
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Marital Status'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['Owner']->value->estado_civil)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['Owner']->value->estado_civil == "SOLTEIRO") {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Not Married'),$_smarty_tpl ) );?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['Owner']->value->estado_civil == "CASADO") {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Married'),$_smarty_tpl ) );?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['Owner']->value->estado_civil == "VIUVO") {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Widower'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Other'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php }?>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Telephone'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['Owner']->value->telefone)) {
echo $_smarty_tpl->tpl_vars['Owner']->value->telefone;
}?>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cell Phone'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['Owner']->value->celular)) {
echo $_smarty_tpl->tpl_vars['Owner']->value->celular;
}?>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 info-content">
                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Email'),$_smarty_tpl ) );?>
</label>
                    <div class="info-data">
                        <?php if (!empty($_smarty_tpl->tpl_vars['Owner']->value->email)) {
echo $_smarty_tpl->tpl_vars['Owner']->value->email;
}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>    
    <div class="row">
        <div class="alert alert-info alert-small" role="alert">
            <i class="far fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit without linked owner'),$_smarty_tpl ) );?>
.
        </div>
    </div>
    <?php }?>
</fieldset>



<?php }
}
