<?php
/* Smarty version 3.1.33, created on 2021-01-11 13:51:41
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/cashflow/cashflow.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffc821d33e7a8_97504923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f786383675e35f3f42dacce9ec71c71a95334d29' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/cashflow/cashflow.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc821d33e7a8_97504923 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
</li>
    <li class="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cash Flow'),$_smarty_tpl ) );?>
</li>
</ul>
<!-- END BREADCRUMB -->                
<div class="page-title">
    <h2><span class="fal fa-cash-register"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cash Flow'),$_smarty_tpl ) );?>
</h2>
    <ul class="panel-controls">
        <li><a href="javascript:void(0);" onClick="pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
')" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Refresh'),$_smarty_tpl ) );?>
" id="btn-reset" class="panel-refresh"><span class="far fa-refresh"></span></a></li>
    </ul>
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

                                            <div class="col-md-3 col-xs-12">  
                                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type'),$_smarty_tpl ) );?>
 </label>
                                                <select class="form-control selectpicker" id="tipo" name="tipo">
                                                    <option value="CASH_BASIS"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cash Basis'),$_smarty_tpl ) );?>
</option>
                                                    <option value="ACCRUAL_BASIS"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Accrual Basis'),$_smarty_tpl ) );?>
</option>
                                                </select>
                                            </div>


                                            <div class="col-md-2 col-xs-12"> 
                                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Initial Date'),$_smarty_tpl ) );?>
 </label>
                                                <input type="text" class="form-control" DATE-START readonly="readonly" id="data1" name="data_1" placeholder="00/00/0000" />
                                            </div>
                                            <div class="col-md-2 col-xs-12"> 
                                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Final Date'),$_smarty_tpl ) );?>
 </label>
                                                <input type="text" class="form-control" DATE-END readonly="readonly" id="data2" name="data_2" placeholder="00/00/0000" />
                                            </div>

                                            <div class="pull-right col-md-4 col-xs-12" style="margin-top:25px">  
                                                <div class="btn btn-primary filter-button" id="btnSearch" style="margin-right:7px">
                                                    <i class="fal fa-filter"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Filter'),$_smarty_tpl ) );?>

                                                </div>
                                                <div class="btn btn-default" id="btnPrint" style="display:none;">
                                                    <i class="far fa-print"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Print'),$_smarty_tpl ) );?>

                                                </div>

                                                <div class="pull-right btn btn-default" id="btnDownloadPdf" style="display:none;">
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
    <?php echo '<script'; ?>
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
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
}
}
