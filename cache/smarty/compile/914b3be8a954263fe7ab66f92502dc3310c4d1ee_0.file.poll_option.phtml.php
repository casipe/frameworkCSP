<?php
/* Smarty version 3.1.33, created on 2020-12-15 08:10:45
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/poll/poll_option.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd899b5578103_63972872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914b3be8a954263fe7ab66f92502dc3310c4d1ee' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/poll/poll_option.phtml',
      1 => 1608005220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd899b5578103_63972872 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="listOptionModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Poll Options'),$_smarty_tpl ) );?>
</h4>
            </div>
            <!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  id="idPoll"  value="" /> 
                <input type="hidden"  id="idPollOption"  value="" /> 
                <div class="hr" id="descPoll"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12" id="inputAdd"> 
                            <div class="entry input-group">
                                <input class="form-control" type="text" id="descricaoOptionAdd" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
" maxlength="100" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info" id="btnAddOption" type="button">
                                        <span class="far fa-plus fa-2x"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-12 none" id="inputEdit"> 
                            <div class="entry input-group">
                                <input class="form-control" type="text" id="descricaoOptionEdit" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
"  maxlength="100" />
                                <span class="input-group-btn">
                                    <button class="btn btn-success" id="btnEditOption" type="button">
                                        <span class="far fa-edit fa-2x"></span>
                                    </button>
                                    <button class="btn btn-default" type="button" onclick="Poll.reset(true)">
                                        <span class="far fa-times fa-2x"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        
                        <hr class="clear">
                        <div class="col-md-12 col-xs-12"> 
                            <div class="panel-body list-group border-bottom" id="listOption">
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
                </div> 
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
<?php }
}
