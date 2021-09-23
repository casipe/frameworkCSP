<?php
/* Smarty version 3.1.33, created on 2021-09-06 23:02:30
  from '/var/www/html/conndo.com.br/admin/templates/default/header_profile.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6136c8369160e5_30011006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc8e0b84326dbc5ac5772725c9bb98bbb0503e5' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/header_profile.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136c8369160e5_30011006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<li class="xn-profile">
    <a href="javascript:void(0);" class="profile-mini">
        <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/images/<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'LOGO_CONDOMINIUM'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'LOGO_CONDOMINIUM'),$_smarty_tpl ) );
} else { ?>logo.jpg<?php }?>" class="imgCondo" alt="Logo"/>
    </a>
    <div class="profile">						
        <div class="profile-image">
            <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/images/<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'LOGO_CONDOMINIUM'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'LOGO_CONDOMINIUM'),$_smarty_tpl ) );
} else { ?>logo.jpg<?php }?>" class="imgCondo" alt="Logo"/>
        </div>
        <div class="profile-data">
            <div class="profile-data-name">
            </div>
            <div class="profile-data-title">
                <span class="uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'User'),$_smarty_tpl ) );?>
:</span><br>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'USER_NAME'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
echo smarty_modifier_truncate($_prefixVariable7,"25|...");
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'USER_IS_SUPPORT'),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 == 1) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Support'),$_smarty_tpl ) );?>
)<?php }?>
                    </div>
		</div>
	</div>                                                                        
</li><?php }
}
