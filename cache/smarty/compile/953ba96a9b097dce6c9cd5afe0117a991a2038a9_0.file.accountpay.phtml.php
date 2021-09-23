<?php
/* Smarty version 3.1.33, created on 2021-01-11 13:52:11
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/accountpay/accountpay.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffc823b292b07_93612149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953ba96a9b097dce6c9cd5afe0117a991a2038a9' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/accountpay/accountpay.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc823b292b07_93612149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
echo '<script'; ?>
>
    var addEdit = true;
<?php echo '</script'; ?>
>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
</li> 
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Entries'),$_smarty_tpl ) );?>
</li>
    <li><a href="javascript:void(0);" onClick="pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Pay'),$_smarty_tpl ) );?>
</a></li>                    
    <li class="active"><?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'add') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );
}?></li>

</ul>
<!-- END BREADCRUMB -->                

<div class="page-title">                    
    <h2><span class="fal fa-calculator"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Entry'),$_smarty_tpl ) );?>
</h2>
    <div class="panel-controls pull-right">                                    											
        <a href="javascript:pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
')" class="btn btn-default" >
            <span class="fal fa-arrow-left"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Back'),$_smarty_tpl ) );?>

        </a>
        <a href="javascript:pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['action_controller']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'edit') {?>?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['datas']->value->id;
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable2,'iv'=>'accountpay'),$_smarty_tpl ) );
}?>')" 
           class="btn btn-info" style="margin-right: 15px" >
            <span class="fal fa-sync-alt"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Refresh'),$_smarty_tpl ) );?>

        </a>  
        <?php if ($_smarty_tpl->tpl_vars['action_controller']->value != 'add') {?>
        <a href="javascript:pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/add')" class="btn btn-success" >
            <span class="fal fa-plus"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>

        </a>
        <?php }?>
    </div>	
</div>  


<!-- PAGE CONTENT WRAPPER -->
<!-- FORM -->
<form id="formItem" class="form-horizontal" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['action_controller']->value;
if ($_smarty_tpl->tpl_vars['action_controller']->value <> 'add') {?>?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>" accept-charset="UTF-8" enctype="multipart/form-data">
    <?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'edit') {?>
    <input type="hidden" name="valor" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->valor)) {
echo number_format($_smarty_tpl->tpl_vars['datas']->value->valor,2,",",'');
}?>" />
           <?php }?>
           <input type="hidden" class="form-control" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id)) {
ob_start();
echo $_smarty_tpl->tpl_vars['datas']->value->id;
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable3,'iv'=>'accountpay'),$_smarty_tpl ) );
}?>" />
    <input type="hidden"  id="isTitulo"  name="isTitulo" value="<?php echo intval($_smarty_tpl->tpl_vars['isTitulo']->value);?>
" />	
    <div class="page-content-wrap"> 
        <div class="row">
            <div class="col-md-12">


                <div class="page-content-wrap" style="margin-bottom:70px"> 
                    <div class="row">

                                                <div class="col-md-7 section-content-page">

                            <div class="panel panel-default pull-left">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'add') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );
}?> / <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Pay'),$_smarty_tpl ) );?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status)) {?> -
                                        <span style="color:#000;">[<span id="statusPayment">                                    

                                                <?php if ($_smarty_tpl->tpl_vars['datas']->value->status == 'PEN') {?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pending Approval'),$_smarty_tpl ) );?>

                                                <?php } elseif ($_smarty_tpl->tpl_vars['datas']->value->status == 'APR') {?>
                                                <span class="green"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Approved'),$_smarty_tpl ) );?>
</span>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['datas']->value->status == 'REJ') {?>
                                                <span class="red"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Rejected'),$_smarty_tpl ) );?>
</span>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['datas']->value->status == 'CTD') {?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Paid Out'),$_smarty_tpl ) );?>

                                                <?php } elseif ($_smarty_tpl->tpl_vars['datas']->value->status == 'CAN') {?>
                                                <span class="red"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Canceled'),$_smarty_tpl ) );?>
</span>            
                                                <?php } else { ?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'In Processing'),$_smarty_tpl ) );?>
     
                                                <?php }?> 

                                            </span>]</span>
                                        <?php }?>
                                    </h3> 
                                </div>
                                <div class="panel-body">
                                    <div class="row">                                   

                                        <div class="form-group">
                                            <div class="col-md-8 col-xs-12">
                                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                                                <input type="text" class="form-control uppercase" id="descricao" name="descricao" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_tipo_documento)) {
echo $_smarty_tpl->tpl_vars['datas']->value->descricao;
}?>" 
                                                       <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                                       maxlength="100" required/>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-4 col-xs-12">                                            
                                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
 </label>
                                                <input type="text" class="form-control" placeholder="0.00"
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->valor)) {
echo number_format($_smarty_tpl->tpl_vars['datas']->value->valor,2,",",'');
}?>"                                                        
                                                       <?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'edit') {?>readonly="readonly" <?php } else { ?> MASCARA-MOEDA id="valor"  name="valor"  <?php }?> 
                                                       <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                                       maxlength="18" required/>
                                            </div>

                                            <div class="col-md-4 col-xs-12">                                            
                                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Movement Date'),$_smarty_tpl ) );?>
 </label>
                                                <input type="text" class="form-control date-picker-today" readonly="readonly" id="data_movimento" name="data_movimento" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->data_movimento)) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value->data_movimento,"%d/%m/%Y");
} else {
echo smarty_modifier_date_format(time(),"%d/%m/%Y");
}?>" 
                                                       <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                                       maxlength="10" required/>
                                            </div>


                                            <div class="col-md-4 col-xs-12">                                            
                                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document Number'),$_smarty_tpl ) );?>
 </label>
                                                <input type="text" class="form-control" id="numero_documento" name="numero_documento" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->numero_documento)) {
echo $_smarty_tpl->tpl_vars['datas']->value->numero_documento;
}?>" 
                                                       <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                                       maxlength="30"/>
                                            </div>

                                        </div>


                                        <div class="clear hr"></div>


                                        <div class="row">

                                            <div class="col-md-4 col-xs-12" style="margin-left:-10px">  
                                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document Type'),$_smarty_tpl ) );?>
</label>
                                                <select class="form-control select" id="id_tipo_documento" name="id_tipo_documento" data-show-subtext="true" 
                                                        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                                        data-live-search="true">
                                                        <option  selected value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['listDocumentType']->value) && count($_smarty_tpl->tpl_vars['listDocumentType']->value)) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listDocumentType']->value, 'documentType', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['documentType']->value) {
?>
                                                    <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['documentType']->value->id;
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable4,'iv'=>'documenttype'),$_smarty_tpl ) );?>
" 
                                                            <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_tipo_documento) && $_smarty_tpl->tpl_vars['datas']->value->id_tipo_documento == $_smarty_tpl->tpl_vars['documentType']->value->id) {?>
                                                            selected
                                                            <?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['documentType']->value->descricao;?>

                                                </option>                                                
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </select>
                                            <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('documenttype')"></span>
                                        </div>



                                        <div class="col-md-4 col-xs-12">  
                                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
</label>
                                            <select class="form-control select" id="id_plano_conta" name="id_plano_conta" data-show-subtext="true" 
                                                    <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                                    data-live-search="true">
                                                    <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	
                                                <?php if (isset($_smarty_tpl->tpl_vars['listManagementAccount']->value) && count($_smarty_tpl->tpl_vars['listManagementAccount']->value)) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listManagementAccount']->value, 'mAccount', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['mAccount']->value) {
?>
                                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['mAccount']->value->id;
$_prefixVariable5 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable5,'iv'=>'managementaccount'),$_smarty_tpl ) );?>
" 
                                                        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_plano_conta) && $_smarty_tpl->tpl_vars['datas']->value->id_plano_conta == $_smarty_tpl->tpl_vars['mAccount']->value->id) {?>
                                                        selected
                                                        <?php }?>
                                                        >
                                                        <?php echo $_smarty_tpl->tpl_vars['mAccount']->value->descricao;?>

                                            </option>                                                
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                        </select>
                                        <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('managementaccount')"></span>
                                    </div>


                                    <div class="col-md-4 col-xs-12">  
                                        <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank Account'),$_smarty_tpl ) );?>
</label>
                                        <select class="form-control select" data-show-subtext="true" 
                                                <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?>
                                                disabled="disabled" 
                                                <?php } else { ?>
                                                id="id_banco_conta" name="id_banco_conta"
                                                <?php }?>
                                                data-live-search="true">
                                                <option selected value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>
                                            <?php if (isset($_smarty_tpl->tpl_vars['listBankAccount']->value) && count($_smarty_tpl->tpl_vars['listBankAccount']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listBankAccount']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                            <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable6,'iv'=>'bankaccount'),$_smarty_tpl ) );?>
" 
                                                    <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_banco_conta) && $_smarty_tpl->tpl_vars['datas']->value->id_banco_conta == $_smarty_tpl->tpl_vars['item']->value->id) {?>
                                                    selected
                                                    <?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->banco_descricao;?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>

                                        </option>                                                
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>

                                    </select>
                                    <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('bankaccount')"></span>
                                </div> 

                            </div>
                            <div class="row">

                                <div class="col-md-4 col-xs-12" style="margin-left:-10px">  
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Collector Agent'),$_smarty_tpl ) );?>
</label>
                                    <select class="form-control selectpicker" id="id_agente_cobrador" name="id_agente_cobrador" data-show-subtext="true" 
                                            <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                            data-live-search="true" >
                                            <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	
                                        <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>
                                        <?php if (isset($_smarty_tpl->tpl_vars['listCollectorAgent']->value) && count($_smarty_tpl->tpl_vars['listCollectorAgent']->value)) {?> 
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listCollectorAgent']->value, 'cAgent', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cAgent']->value) {
?>
                                        <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['cAgent']->value->id;
$_prefixVariable7 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable7,'iv'=>'collectoragent'),$_smarty_tpl ) );?>
" 
                                                <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_agente_cobrador) && $_smarty_tpl->tpl_vars['datas']->value->id_agente_cobrador == $_smarty_tpl->tpl_vars['cAgent']->value->id) {?>
                                                selected
                                                <?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['cAgent']->value->descricao;?>

                                    </option>                                                
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                                <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('collectoragent')"></span>
                            </div>



                            <div class="col-md-4 col-xs-12">  
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cost Center'),$_smarty_tpl ) );?>
</label>
                                <select class="form-control select" id="id_centro_custo" name="id_centro_custo" data-show-subtext="true" 
                                        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                        data-live-search="true">
                                        <option  selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	
                                    <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>
                                    <?php if (isset($_smarty_tpl->tpl_vars['listCostCenter']->value) && count($_smarty_tpl->tpl_vars['listCostCenter']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listCostCenter']->value, 'cCenter', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cCenter']->value) {
?>
                                    <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['cCenter']->value->id;
$_prefixVariable8 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable8,'iv'=>'costcenter'),$_smarty_tpl ) );?>
" 
                                            <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_centro_custo) && $_smarty_tpl->tpl_vars['datas']->value->id_centro_custo == $_smarty_tpl->tpl_vars['cCenter']->value->id) {?>
                                            selected
                                            <?php }?>
                                            >
                                            <?php echo $_smarty_tpl->tpl_vars['cCenter']->value->descricao;?>

                                </option>                                                
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                            <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('costcenter')"></span>
                        </div>    

                        <div class="col-md-4 col-xs-12">  
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Provider'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control  selectpicker with-ajax" id="id_fornecedor" name="id_fornecedor" data-show-subtext="true" 
                                    <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                    data-live-search="true">
                                    <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option> 
                                <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->fornecedor_nome)) {?><option  selected value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['datas']->value->id_fornecedor;
$_prefixVariable9 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable9,'iv'=>'provider'),$_smarty_tpl ) );?>
" ><?php echo $_smarty_tpl->tpl_vars['datas']->value->fornecedor_nome;?>
</option><?php }?> 
                            </select>
                            <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('provider')"></span>
                        </div>



                    </div>

                    <div class="row">


                        <div class="col-md-4 col-xs-12" style="margin-left:-10px">  
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Installment'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control selectpicker" id="quantidade_parcela" name="quantidade_parcela" data-show-subtext="true" 
                                    <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                    data-live-search="true" >
                                    <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	
                                <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration === 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
"
                                        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->quantidade_parcela) && $_smarty_tpl->tpl_vars['datas']->value->quantidade_parcela == $_smarty_tpl->tpl_vars['var']->value) {?>
                                        selected
                                        <?php }?>                                                    
                                        ><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</option>
                                <?php }
}
?> 
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Due Date'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control date-picker-today" readonly="readonly" id="data_vencimento" name="data_vencimento" 
                                   value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->data_vencimento)) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value->data_vencimento,"%d/%m/%Y");
}?>" 
                                   <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ')) {?> disabled="disabled" <?php }?>
                                   maxlength="10" required/>
                        </div>
                    </div>
                    <div class="clear hr"></div>

                </div>

                
            </div>
        </div>
    </div> 
    
        <div class="col-md-5">
        <div class="panel panel-default pull-left">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Titles to Pay'),$_smarty_tpl ) );?>
</h3>

            </div>
            <div class="panel-body">
                <div id="boxParcelamento">
                    <input type="hidden"  id="total" value="0"/>
                    <div class="row">
                        <div class="alert alert-info alert-small" role="alert">
                            <i class="fal fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Without title'),$_smarty_tpl ) );?>
.
                        </div>
                    </div>
                </div>
                <p class="clear"> 
                <div id="boxHistorico">
                </div>
                <p class="clear"> 

            </div>  
        </div>       
    </div>
    
</div>
</div>


<div class="panel-footer">
    <div class="panel-footer-btn">
        <?php if ('_action' == 'add') {?>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['action_controller']->value;?>
" class="btn btn-default"><i class="far fa-redo"></i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Clear Form'),$_smarty_tpl ) );?>
</a>  
        <?php }?>

        <?php if (!isset($_smarty_tpl->tpl_vars['datas']->value->status) || ($_smarty_tpl->tpl_vars['datas']->value->status == 'PEN' || $_smarty_tpl->tpl_vars['datas']->value->status == 'REJ')) {?> 
        <a href="javascript:void(0);" class="btn btn-success pull-right" id="<?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'add') {?>btn-add<?php } else { ?>btn-save<?php }?>"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</a>
        <?php }?>
    </div>
</div>

</div>
</div>  
</div>
<?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'edit') {?>
<input type="hidden"  name="valor" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->valor)) {
echo number_format($_smarty_tpl->tpl_vars['datas']->value->valor,2,",",'');
}?>" />
       <?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'edit' && ($_smarty_tpl->tpl_vars['datas']->value->tipo == 'C' || isset($_smarty_tpl->tpl_vars['datas']->value->status) && ($_smarty_tpl->tpl_vars['datas']->value->status != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status != 'REJ'))) {?> 
       <input type="hidden" name="descricao" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_unidade)) {
echo $_smarty_tpl->tpl_vars['datas']->value->id_unidade;
}?>" />
<?php }?>

<?php }?>
</form>
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable10."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
}
}
