<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:30:37
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/visitor/visitor.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610dfe5da42944_63035438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '790a4d5816ba7fc102c02ddbae58d410cbfa3d25' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/visitor/visitor.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610dfe5da42944_63035438 (Smarty_Internal_Template $_smarty_tpl) {
?>7
<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
 </h4>
            </div>

            <!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" id="idItem" value=""/>
                <input type="hidden" id="addVisita" name="addVisita" value="0"/>
                <div class="modal-body modalScroll">

                    <div id="photo"></div> 

                    <div class="row clear" id="newPhoto">

                        <div class="panel panel-default">
                            <div class="panel-heading" id="titleNewPhto"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Photo'),$_smarty_tpl ) );?>
</div>
                            <div class="panel-body">
                                <br>
                                <div class="col-sm-12"> 
                                    <div class="col-sm-6 col-xs-6 text-center">
                                        <div id="btn-webcam" class="gray pointer webcam">
                                            <i class="fal fa-3x fa-webcam"></i><br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Webcam'),$_smarty_tpl ) );?>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6 text-center">                                          
                                        <div id="btn-upload" class="gray pointer webcam">
                                            <i class="fal fa-3x fa-file-image"></i><br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Upload'),$_smarty_tpl ) );?>

                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div id="upload-photo" class="row form-group none">
                                    <div class="hr clear" style="padding:0; margin:10px"><br></div>	
                                    <div class="btnClosePhoto none" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
"> <i class="fa fa-times-circle"></i></div>                                   
                                    <div class="clear col-sm-12">	
                                        <div class="form-group"> 
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:auto 2%">
                                                <label for="upload"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'File'),$_smarty_tpl ) );?>
:</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="file" name="photo" id="upload">
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>								
                                </div>
                                <div id="loadingWebcam"></div>
                                <div id="webcam-camera" class="none">
                                    <div class="hr clear" style="padding:0; margin:10px"><br></div>
                                    <span class="btnClosePhoto none" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
"> <i class="fa fa-times-circle"></i></span>
                                    <center class="clear">
                                        <div class="row" id="webcam-camera-video"></div>
                                    </center>

                                    <div class="row text-center" id="btn-snap-webcam">
                                        <br>
                                        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Capturar foto'),$_smarty_tpl ) );?>
" ><i class="fal fa-webcam fa-2x blue"></i></a>  
                                    </div>
                                    <div class="row text-center" id="btn-reset-webcam">
                                        <br>
                                        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reset'),$_smarty_tpl ) );?>
" ><i class="fal fa-sync fa-2x blue"></i></a>  
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="clear col-md-12" id="contentVisitor">

                            <div class="form-group">		
                                <div class="col-md-12 col-xs-12"> 
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Name'),$_smarty_tpl ) );?>
</label>	
                                    <input type="text" class="form-control" autocomplete="off" id="nome" maxlength="100" search-name required />
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-5 col-xs-12"> 
                                    <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document Type'),$_smarty_tpl ) );?>
</label>
                                    <select class="form-control select" id="documento_tipo" name="documento_tipo" data-show-subtext="true" data-live-search="true"> 
                                        <option value="" selected disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                        <option value="CPF"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Social Security Number'),$_smarty_tpl ) );?>
</option>
                                        <option value="RG"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Identity Card'),$_smarty_tpl ) );?>
</option>
                                        <option value="CNH"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Driver License'),$_smarty_tpl ) );?>
</option>
                                        <option value="PASSAPORTE"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Passport'),$_smarty_tpl ) );?>
</option>
                                        <option value="OUTRO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Other'),$_smarty_tpl ) );?>
</option>
                                    </select>
                                </div>

                                <div class="col-md-7 col-xs-12"> 
                                    <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document'),$_smarty_tpl ) );?>
 </label>
                                    <input type="text" class="form-control uppercase" id="documento_numero" name="documento_numero" maxlength="30" required  />
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-5 col-xs-12"> 
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Telephone'),$_smarty_tpl ) );?>
 </label>
                                    <input type="text" class="form-control numero" id="telefone" name="telefone"  value="" maxlength="12" />
                                </div>
                                <div class="col-md-7 col-xs-12"> 
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Badge Code'),$_smarty_tpl ) );?>
 </label>
                                    <input type="text" class="form-control uppercase" id="cracha_codigo" name="cracha_codigo"  value="" maxlength="20" />
                                </div>

                            </div>                           
                            <br>

                            <div id="photoResult">
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Photo'),$_smarty_tpl ) );?>
</label>  
                                <div class="contentPhoto"></div>
                            </div>
                            <br>
                        </div>

                        <div class="col-md-12" id="contentVisit">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable5."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/formVisit.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>  
                        </div>

                    </div>
                    <div class="hr"></div>
                    <br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnSave"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
<?php }
}
