<?php
/* Smarty version 3.1.33, created on 2021-09-06 23:02:30
  from '/var/www/html/conndo.com.br/admin/templates/default/warningSession.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6136c836d7f4c2_77281136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03a371073cf2161d8addba79c274859cbe2ab4f5' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/warningSession.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136c836d7f4c2_77281136 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['warningSessionDie']->value) && $_smarty_tpl->tpl_vars['warningSessionDie']->value <> '') {?>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        var dieSessionMsg = "<?php echo $_smarty_tpl->tpl_vars['warningSessionDie']->value;?>
";
        var dieSessionOut = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Logout'),$_smarty_tpl ) );?>
";
        
        var url_logout = System.URL + '/logout?session=0';  
        setTimeout(()=>{     
            $.get(url_logout);
            noty({
                text: '<br><i class="fa fa-exclamation-triangle" style="font-size:14px; color:#fff"></i> ' + dieSessionMsg + '<br><hr><br><a href="javascript:void(0)" class="btn btn-default" onClick="link(\'' + url_logout + '\')">' + dieSessionOut + '</a><br>',
                layout: 'topCenter',
                progressBar: false,
                timeout: true,
                modal: true,
                killer: true,
                buttons: []
            });  
        },3000);    
        
    });
<?php echo '</script'; ?>
>

<?php }
}
}
