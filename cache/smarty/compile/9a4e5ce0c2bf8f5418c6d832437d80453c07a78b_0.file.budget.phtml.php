<?php
/* Smarty version 3.1.33, created on 2021-08-06 22:22:52
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/budget/budget.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610de06ca11d18_53980568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a4e5ce0c2bf8f5418c6d832437d80453c07a78b' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/budget/budget.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610de06ca11d18_53980568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
echo '<script'; ?>
>

    var dataCondominium = {
        logo: "<?php echo $_smarty_tpl->tpl_vars['dataCondominium']->value->imagem_logo;?>
",
        decricao: "<?php echo $_smarty_tpl->tpl_vars['dataCondominium']->value->descricao;?>
",
        cnpj: "<?php echo $_smarty_tpl->tpl_vars['dataCondominium']->value->cnpj;?>
"
    };

<?php echo '</script'; ?>
>


<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
</li>
    <li class="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Budget Forecast'),$_smarty_tpl ) );?>
</li>
</ul>
<!-- END BREADCRUMB -->                
<div class="page-title">
    <h2><span class="fal fa-chart-line"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Budget Forecast'),$_smarty_tpl ) );?>
</h2>
    </div>
<!-- PAGE CONTENT WRAPPER -->
<!-- FORM -->

<div class="page-content-wrap" id="boxMovement" style="min-height:650px;">
    <div class="row">
        <div class="col-md-12"> 
            <div class="page-content-wrap" >


                <div class="row">
                                        <div class="col-md-12 section-content-page">
                        <div class="panel panel-default pull-left">
                            <form id="form_search" class="form-horizontal">
                                <input type="hidden" id="qSearch" value="" />
                                <div class="panel-heading">
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-md-2 col-xs-12">  
                                                <label class="control-label" for="ano"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Year'),$_smarty_tpl ) );?>
</label>
                                                <select class="form-control selectpicker" id="ano" name="ano" data-live-search="true">
                                                    <?php ob_start();
echo smarty_modifier_date_format(time(),"%Y");
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('anoNow', $_prefixVariable2);?>
                                                    <?php
$_smarty_tpl->tpl_vars['ano'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ano']->step = 1;$_smarty_tpl->tpl_vars['ano']->total = (int) ceil(($_smarty_tpl->tpl_vars['ano']->step > 0 ? $_smarty_tpl->tpl_vars['anoNow']->value+1+1 - ($_smarty_tpl->tpl_vars['anoNow']->value-10) : $_smarty_tpl->tpl_vars['anoNow']->value-10-($_smarty_tpl->tpl_vars['anoNow']->value+1)+1)/abs($_smarty_tpl->tpl_vars['ano']->step));
if ($_smarty_tpl->tpl_vars['ano']->total > 0) {
for ($_smarty_tpl->tpl_vars['ano']->value = $_smarty_tpl->tpl_vars['anoNow']->value-10, $_smarty_tpl->tpl_vars['ano']->iteration = 1;$_smarty_tpl->tpl_vars['ano']->iteration <= $_smarty_tpl->tpl_vars['ano']->total;$_smarty_tpl->tpl_vars['ano']->value += $_smarty_tpl->tpl_vars['ano']->step, $_smarty_tpl->tpl_vars['ano']->iteration++) {
$_smarty_tpl->tpl_vars['ano']->first = $_smarty_tpl->tpl_vars['ano']->iteration === 1;$_smarty_tpl->tpl_vars['ano']->last = $_smarty_tpl->tpl_vars['ano']->iteration === $_smarty_tpl->tpl_vars['ano']->total;?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
"                                                	
                                                            <?php if ($_smarty_tpl->tpl_vars['ano']->value == $_smarty_tpl->tpl_vars['anoNow']->value) {?>
                                                            selected
                                                            <?php }?> 
                                                            ><?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
</option>
                                                    <?php }
}
?> 
                                                </select>
                                            </div>

                                            <div class="col-md-2 col-xs-12">  
                                                <label class="control-label" for="mes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Month'),$_smarty_tpl ) );?>
</label>
                                                <select class="form-control select" multiple="multiple" id="mes" name="mes[]" data-live-search="true">
                                                    <option disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getMonths']->value, 'desc', false, 'mes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->value => $_smarty_tpl->tpl_vars['desc']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                                </select>
                                            </div>


                                            <div class="col-md-2 col-xs-12">  
                                                <label class="control-label" for="tipo_movimento"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Movement'),$_smarty_tpl ) );?>
</label>
                                                <select class="form-control selectpicker" id="tipo_movimento" name="tipo_movimento">
                                                    <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'All'),$_smarty_tpl ) );?>
</option>
                                                    <option value="D"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Expenses'),$_smarty_tpl ) );?>
</option>
                                                    <option value="R"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Revenues'),$_smarty_tpl ) );?>
</option>                                                	
                                                </select>
                                            </div>


                                            <div class="col-md-2 col-xs-12" style="margin-top:25px">  
                                                <div class="btn btn-primary filter-button" disabled id="btnSearch">
                                                    <i class="fal fa-filter"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Filter'),$_smarty_tpl ) );?>

                                                </div>
                                            </div> 


                                            <div class="pull-right col-md-4 col-xs-12" id="contentBtn">  
                                                <div class="pull-right btn btn-success" id="btnAdd" disabled data-toggle="modal" data-target="#itemModal">
                                                    <i class="fas fa-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>

                                                </div>
                                                <div class="pull-right btn btn-info" id="btnEdit">
                                                    <i class="fas fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );?>

                                                </div>
                                                <div class="pull-right btn btn-default" id="btnPrint">
                                                    <i class="far fa-print"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Print'),$_smarty_tpl ) );?>

                                                </div>
                                                <div class="pull-right btn btn-default" id="btnDownloadPdf">
                                                    <i class="far fa-file-pdf-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'PDF'),$_smarty_tpl ) );?>

                                                </div>

                                            </div>



                                        </div>                 
                                    </div>

                                    <br>

                                </div>
                            </form>
                            <div class="panel-body">
                                <h4 id="label_filtro"></h4> 
                                <div class="row"> 
                                    <div id="result"></div>                                        		 
                                    <div class="clear hr"></div>
                                </div>

                            </div>
                        </div>
                    </div>                                     
                </div>
            </div>

            <p class="clear">


        </div>
    </div>
</div>

<p class="clear"> 
    <input type="hidden"  name="id" value="" id="id"/>  
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/add.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>   
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/edit.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>   
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable5."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
}
}
