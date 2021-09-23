<?php
/* Smarty version 3.1.33, created on 2021-08-06 22:27:23
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/condominium/condominium.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610de17b8b4cd3_27889726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72677fd1f23b2aac829f7107cf107095b0a601ae' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/condominium/condominium.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610de17b8b4cd3_27889726 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Register'),$_smarty_tpl ) );?>
</li> 
    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Condominium'),$_smarty_tpl ) );?>
</a></li>                    
    </ul>
<!-- END BREADCRUMB -->                

<div class="page-title">                    
    <h2><span class="fal fa-building"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Condominium'),$_smarty_tpl ) );?>
</h2>
</div>  

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap"> 
    <div class="row">
        <div class="col-md-12">

            <!-- FORM -->
            <form id="form_<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" class="form-horizontal" accept-charset="UTF-8" enctype="multipart/form-data">

                <?php if ($_smarty_tpl->tpl_vars['action_controller']->value <> 'add') {?> 
                <input type="hidden" id="id" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>"> 
                <?php }?>

                <div class="pane l panel-defaul t">
                    <div class="panel-heading">
                        <span class="panel-title" id="descCondo"><?php if (isset($_smarty_tpl->tpl_vars['datas']->value->descricao)) {
echo $_smarty_tpl->tpl_vars['datas']->value->descricao;
}?></span>                        
                        <div class="panel-controls pull-right"> 
                            <a href="javascript:pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
')" class="btn btn-default"><span class="fal fa-arrow-left"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Back'),$_smarty_tpl ) );?>
</a>                            
                            <a href="javascript:pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['action_controller']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'edit') {?>?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['datas']->value->id;
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable2,'iv'=>'condominium'),$_smarty_tpl ) );
}?>')" 
                               class="btn btn-info" style="margin-right: 15px" >
                                <span class="fal fa-sync-alt"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Refresh'),$_smarty_tpl ) );?>

                            </a> 
                            <?php if ($_smarty_tpl->tpl_vars['allowAddCondominium']->value && $_smarty_tpl->tpl_vars['action_controller']->value <> 'add') {?>											
                            <a href="javascript:void(0)" class="btn btn-success" onClick="pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/add')" data-toggle="modal" data-target="#itemModal"><span class="fal fa-plus"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add condo'),$_smarty_tpl ) );?>
</a>
                            <?php }?>
                        </div>                       
                        <?php if ($_smarty_tpl->tpl_vars['action_controller']->value <> 'add' || ($_smarty_tpl->tpl_vars['action_controller']->value == 'add' && $_smarty_tpl->tpl_vars['allowAddLimit']->value)) {?>
                        <div class="panel-bod y">    

                            <div class="col-md-12">
                                <br>
                                <!-- START TABS -->                                
                                <div class="panel-default tabs">                            
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#tab-1" role="tab"  class="btn-control-tab" data-tablist="1" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'General Data'),$_smarty_tpl ) );?>
</a></li>
                                        <li><a href="#tab-2" role="tab"  class="btn-control-tab" data-tablist="2" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Preferences'),$_smarty_tpl ) );?>
</a></li>                                           
                                    </ul>                            
                                    <div class="panel-body tab-content">

                                        <div class="btn-control  pull-right">

                                        </div>
                                        <p>

                                        <div class="tab-pane active" id="tab-1">														
                                            <p>																
                                            <div class="form-group">
                                                <?php if ($_smarty_tpl->tpl_vars['action_controller']->value <> 'add') {?>
                                                <div class="col-md-3 col-xs-12">
                                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Code'),$_smarty_tpl ) );?>
 </label>
                                                    <input type="text" class="form-control"  disabled style="color:#555;"  value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->identificador)) {
echo $_smarty_tpl->tpl_vars['datas']->value->identificador;
}?>" />
                                                </div>
                                                <?php }?>

                                                <div class="col-md-4 col-xs-12"> 
                                                    <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Federal Tax Identification Number'),$_smarty_tpl ) );?>
 </label>
                                                    <input type="text" class="form-control cnpj" id="cnpj" name="cnpj" maxlength="14" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->cnpj)) {
echo $_smarty_tpl->tpl_vars['datas']->value->cnpj;
}?>" />

                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-md-7 col-xs-12"> 
                                                    <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>											                                           
                                                    <input type="text" class="form-control" id="descricao" name="descricao" maxlength="60" required  value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->descricao)) {
echo $_smarty_tpl->tpl_vars['datas']->value->descricao;
}?>" />
                                                </div>
                                            </div>						


                                            <hr>


                                            <div class="form-group">
                                                <div class="col-md-7 col-xs-12"> 
                                                    <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Address'),$_smarty_tpl ) );?>
 </label>											                                           
                                                    <input type="text" class="form-control" id="endereco" name="endereco" maxlength="100" required value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->endereco)) {
echo $_smarty_tpl->tpl_vars['datas']->value->endereco;
}?>" />
                                                </div>
                                            </div>


                                            <div class="form-group">

                                                <div class="col-md-3 col-xs-12"> 
                                                    <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Number'),$_smarty_tpl ) );?>
 </label>
                                                    <input type="text" class="form-control numero" id="numero" name="numero" maxlength="10" required value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->numero)) {
echo $_smarty_tpl->tpl_vars['datas']->value->numero;
}?>" />
                                                </div>

                                                <div class="col-md-4 col-xs-12"> 
                                                    <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Postal Code'),$_smarty_tpl ) );?>
 </label>
                                                    <input type="text" class="form-control" id="cep" name="cep" maxlength="20" required value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->cep)) {
echo $_smarty_tpl->tpl_vars['datas']->value->cep;
}?>" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-7 col-xs-12"> 
                                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reference'),$_smarty_tpl ) );?>
 </label>
                                                    <input type="text" class="form-control" id="referencia" name="referencia" maxlength="100" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->referencia)) {
echo $_smarty_tpl->tpl_vars['datas']->value->referencia;
}?>" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3 col-xs-12"> 
                                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Telephone'),$_smarty_tpl ) );?>
 </label> 
                                                    <input type="text" class="form-control numero" id="telefone" name="telefone" maxlength="20" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->telefone)) {
echo $_smarty_tpl->tpl_vars['datas']->value->telefone;
}?>" />
                                                </div>

                                                <div class="col-md-4 col-xs-12">  
                                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Email'),$_smarty_tpl ) );?>
 </label>
                                                    <input type="text" class="form-control" id="email" name="email" maxlength="200" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->email)) {
echo $_smarty_tpl->tpl_vars['datas']->value->email;
}?>" />
                                                </div> 
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-7 col-xs-12"> 
                                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Website'),$_smarty_tpl ) );?>
 </label>
                                                    <input type="text" class="form-control" id="website" name="website" maxlength="200" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->website)) {
echo $_smarty_tpl->tpl_vars['datas']->value->website;
}?>" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-7 col-xs-12">
                                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
 </label>
                                                    <textarea type="text" class="form-control" id="observacao" name="observacao" maxlength="500" rows="6" cols="100"><?php if (isset($_smarty_tpl->tpl_vars['datas']->value->observacao)) {
echo $_smarty_tpl->tpl_vars['datas']->value->observacao;
}?></textarea>
                                                </div>												
                                            </div>

                                            <div class="hr"></div>

                                            <div class="form-group">
                                                <div class="col-md-7 col-xs-12"> 

                                                    <label class="check"><input type="checkbox" id="active"  class="icheckbox" value="1" name="status"  <?php if (!isset($_smarty_tpl->tpl_vars['datas']->value->status) || intval($_smarty_tpl->tpl_vars['datas']->value->status) == 1) {?>checked="checked"<?php }?> /></label>

                                                    <label class="control-label" for="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                                                    <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                                                </div>
                                            </div>
                                            </p>
                                        </div>

                                        <div class="tab-pane list-datatable" id="tab-2">	
                                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/preferences.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>																							
                                        </div>

                                    </div>
                                </div>                                                   
                                <!-- END TABS -->                        
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
                                <button class="btn btn-success pull-right" id="btn-enviar"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                            </div>
                        </div>
                        <br class="clear"><br class="clear">
                        <?php } else { ?>
                        <br class="clear"><br class="clear">
                        <div class="row">
                            <div class="alert alert-info alert-small" role="alert">
                                <i class="fal fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'O limite não permite adicionar condomínio. Por favor, verifique o seu plano'),$_smarty_tpl ) );?>
:
                                <a href=javascript:pageLoad("myplan")>[<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'My Plan'),$_smarty_tpl ) );?>
]</a>
                            </div>
                        </div>
                        <?php }?>




                    </div>
            </form>

            <!-- END FORM -->  
        </div>
    </div>                    

</div>
<!-- END PAGE CONTENT WRAPPER --> 	



<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['action_controller']->value <> 'edit') {
echo '<script'; ?>
>
    var perc_rateio_unidade = 0;
<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
>var IMAGEM_LOGO = <?php echo $_smarty_tpl->tpl_vars['varImageLogoJS']->value;?>
, IMAGEM_COVER = <?php echo $_smarty_tpl->tpl_vars['varImageCoverJS']->value;?>
;<?php echo '</script'; ?>
><?php }
}
