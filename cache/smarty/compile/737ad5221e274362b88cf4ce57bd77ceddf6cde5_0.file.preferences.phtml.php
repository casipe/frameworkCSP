<?php
/* Smarty version 3.1.33, created on 2021-08-06 22:27:23
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/condominium/preferences.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610de17b8ed9f9_93617654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737ad5221e274362b88cf4ce57bd77ceddf6cde5' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/condominium/preferences.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610de17b8ed9f9_93617654 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="form-group">	 
    <div class="col-md-6 col-xs-12">  
        <label class="control-label"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Resident Access Link'),$_smarty_tpl ) );?>
 </label>        
        <span class="help-block row blue">
            <span class="blue"><i class="fal fa-link"></i> <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To Access'),$_smarty_tpl ) );?>
:</strong> <a href="https://morador.conndo.com.br/" target="_blank" class="blue">Portal do Morador</a></span>
        
        </span>

    </div>										
</div>
<br>



<hr>								
<div class="form-group">
    <div class="col-md-6 col-xs-12">
        <label class="control-label"><sup class="required">*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type of Apportionment'),$_smarty_tpl ) );?>
</label>											                                                                                            
        <select class="form-control select" id="tipo_rateio" name="tipo_rateio">  
            <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
            <option value="FI" <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->tipo_rateio) && $_smarty_tpl->tpl_vars['datas']->value->tipo_rateio == 'FI') {?> selected <?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Per Ideal Fraction'),$_smarty_tpl ) );?>
</option>
            <option value="UN" <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->tipo_rateio) && $_smarty_tpl->tpl_vars['datas']->value->tipo_rateio == 'UN') {?> selected <?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Per unit'),$_smarty_tpl ) );?>
</option>
        </select> 
    </div>
</div> 
<div class="form-group">
    <div class="col-md-4 col-xs-12">
        <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total Land Area'),$_smarty_tpl ) );?>
 </label>
        <input type="text" class="form-control decimal_str" id="total_area_terreno" name="total_area_terreno" maxlength="10" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->total_area_terreno)) {
echo $_smarty_tpl->tpl_vars['datas']->value->total_area_terreno;
}?>"/>
    </div>
    <div class="col-md-4 col-xs-12">
        <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total Built Area'),$_smarty_tpl ) );?>
 </label>
        <input type="text" class="form-control decimal_str" id="total_area_terreno_construido" name="total_area_terreno_construido" maxlength="10" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->total_area_terreno_construido)) {
echo $_smarty_tpl->tpl_vars['datas']->value->total_area_terreno_construido;
}?>"/>
    </div>
</div>	 
<hr>
<div class="form-group">	
    <div class="col-md-6 col-xs-12"> 
        <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Accountant Name'),$_smarty_tpl ) );?>
 </label>
        <input type="text" class="form-control" id="contador_nome" name="contador_nome" maxlength="60" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->contador_nome)) {
echo $_smarty_tpl->tpl_vars['datas']->value->contador_nome;
}?>" />
    </div>

    <div class="col-md-6 col-xs-12">
        <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Accountant Code'),$_smarty_tpl ) );?>
 </label>
        <input type="text" class="form-control" id="contador_crc" name="contador_crc" maxlength="30"  value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->contador_crc)) {
echo $_smarty_tpl->tpl_vars['datas']->value->contador_crc;
}?>" />
    </div>										
</div>

<div class="form-group">
    <div class="col-md-6 col-xs-12">
        <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Syndic'),$_smarty_tpl ) );?>
</label>											                                                                                            
        <select class="form-control select" id="id_sindico" name="id_sindico" data-show-subtext="true" data-live-search="true">
            <option selected value='' ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>
            <?php if (isset($_smarty_tpl->tpl_vars['listSyndic']->value) && count($_smarty_tpl->tpl_vars['listSyndic']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listSyndic']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <option                                         
                <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_sindico) && $_smarty_tpl->tpl_vars['datas']->value->id_sindico == $_smarty_tpl->tpl_vars['item']->value->id) {?> selected <?php }?>                                        
                value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_smarty_tpl->tpl_vars['item']->value->id,'iv'=>'syndic'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->nome;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->sobrenome;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>
        <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('syndic')"></span>
    </div> 

    <div class="col-md-6 col-xs-12">
        <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Subsyndic'),$_smarty_tpl ) );?>
</label>											                                                                                            
        <select class="form-control select" id="id_sindico_sub" name="id_sindico_sub" data-show-subtext="true" data-live-search="true">
            <option selected value=''><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>
            <?php if (isset($_smarty_tpl->tpl_vars['listSyndic']->value) && count($_smarty_tpl->tpl_vars['listSyndic']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listSyndic']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <option                                         
                <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_sindico_sub) && $_smarty_tpl->tpl_vars['datas']->value->id_sindico == $_smarty_tpl->tpl_vars['item']->value->id) {?> selected <?php }?>                                        
                value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_smarty_tpl->tpl_vars['item']->value->id,'iv'=>'syndic'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->nome;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->sobrenome;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>
        <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('syndic')"></span>
    </div>
</div> 

<hr>
<div class="form-group row">	
    <div class="col-lg-7 col-md-6 col-sm-7 col-xs-12">
        <label for="UPLOAD_LOGO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Logo Image'),$_smarty_tpl ) );?>
:</label>
        <div class="form-group">
            <div class="form-line">
                <input type="file" name="imagem_logo" id="UPLOAD_LOGO" >
            </div>
        </div>
    </div>

    <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
        <label for="UPLOAD_COVER"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cover Image'),$_smarty_tpl ) );?>
:</label>
        <div class="form-group">
            <div class="form-line">
                <input type="file" name="imagem_cover" id="UPLOAD_COVER" >
            </div>
        </div>
    </div>
</div> 
<?php }
}
