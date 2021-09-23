<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:30:37
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/visitor/formVisit.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610dfe5da7a2d4_15847185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d2aaa8f7aa4aedd855e2f33e992fc0f1a864e10' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/visitor/formVisit.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610dfe5da7a2d4_15847185 (Smarty_Internal_Template $_smarty_tpl) {
?>

<table id="userInfoAddVisit">
    <tr>  
        <td rowspan="4">
            <div class="photoVisit">
            </div>
        </td>
    </tr>
    <tr>
        <td valign="bottom">
            <b class="userNameVisit"></b>
            <div class="userDocVisit"></div>
        </td>
    </tr>                
</table>

<div class="form-group">
    <br>
    <div class="col-md-5 col-xs-12"> 
        <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Access Type'),$_smarty_tpl ) );?>
</label>
        <select class="form-control select" id="tipo_acesso" name="tipo_acesso"> 
            <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
            <option value="PED"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pedestrian'),$_smarty_tpl ) );?>
</option>
            <option value="VEI"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Vehicle'),$_smarty_tpl ) );?>
</option>
        </select>
    </div>
    <div class="col-md-7 col-xs-12"> 
        <label class="control-label" for="placa_veiculo"><sup class="required none">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Vehicle Plate'),$_smarty_tpl ) );?>
 </label>
        <input type="text" class="form-control uppercase" id="placa_veiculo" name="placa_veiculo" disabled  value="" maxlength="20" />
    </div>
</div>


<div class="form-group">

    <div class="col-md-5 col-xs-12">
        <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
</label>											                                                                                            
        <select class="form-control select" id="id_unidade" name="id_unidade" data-show-subtext="true" data-live-search="true">
            <option  selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>													
            <?php if (isset($_smarty_tpl->tpl_vars['listUnit']->value) && count($_smarty_tpl->tpl_vars['listUnit']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listUnit']->value, 'unit', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['unit']->value) {
?>
            <?php if (!intval($_smarty_tpl->tpl_vars['unit']->value->status)) {?>
            <?php continue 1;?>
            <?php }?>
            <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_smarty_tpl->tpl_vars['unit']->value->id,'iv'=>'unit'),$_smarty_tpl ) );?>
" data-identificador="<?php echo $_smarty_tpl->tpl_vars['unit']->value->identificador;?>
"> 
                (<?php echo $_smarty_tpl->tpl_vars['unit']->value->bloco_descricao;?>
) - <?php echo $_smarty_tpl->tpl_vars['unit']->value->descricao;?>

            </option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>
    </div>

    <div class="col-md-7 col-xs-12"> 
        <label class="control-label" for="pessoa_autorizacao_nome"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Authorized by'),$_smarty_tpl ) );?>
: </label>
        <input type="text" class="form-control" id="pessoa_autorizacao_nome" name="pessoa_autorizacao_nome"  value="" maxlength="60" />
    </div>
</div>

<br>
<div class="form-group">
    <div class="col-md-5 col-xs-12 check_solicitar_autorizacao"> 																																																					   
        <label class="check"><input type="checkbox" id="solicitar_autorizacao" class="icheckbox" disabled value="1" name="solicitar_autorizacao"/></label>
        <label class="control-label" for="solicitar_autorizacao"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Request Owner Authorization'),$_smarty_tpl ) );?>
</label> 	
        <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'It is necessary to select the unit'),$_smarty_tpl ) );?>
)</span>
    </div>


    <div class="col-md-7 col-xs-12"> 																																																					   
        <label class="check"><input type="checkbox" id="carga_descarga" class="icheckbox" disabled value="1" name="carga_descarga"/></label>
        <label class="control-label" for="carga_descarga"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Loading and Unloading'),$_smarty_tpl ) );?>
</label>	
        <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
</span>
    </div>
</div>   
<div class="hr"></div>	
<div class="form-group">
    <div class="col-md-5 col-xs-12"> 
        <label class="control-label" for="tolerancia"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Permanence'),$_smarty_tpl ) );?>
: </label>
        <input type="text" class="form-control time" id="tolerancia" name="tolerancia"  placeholder="00:00:00"/>
    </div>
</div>
<div class="form-group">
    <div class="col-md-12 col-xs-12"> 
        <label class="control-label" for="observacao"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
: </label>
        <textarea class="form-control" id="observacao" name="observacao" maxlength="300" rows="4" cols="50"></textarea>
    </div>
</div>
<?php }
}
