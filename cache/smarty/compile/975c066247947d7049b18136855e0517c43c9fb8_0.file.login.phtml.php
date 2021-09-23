<?php
/* Smarty version 3.1.33, created on 2021-09-22 19:34:30
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/login/login.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_614baf76b95ef0_13321478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '975c066247947d7049b18136855e0517c43c9fb8' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/login/login.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614baf76b95ef0_13321478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" crossorigin="" href="/css/menu.css">
        <title><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Admin Panel'),$_smarty_tpl ) );?>
 - Login</title>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


        
        <link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
pages/login/css/login.css">

        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/system.js?lang=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'ISO_LANGUAGE'),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">
            var System = {
            BASE_URL:'<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL'),$_smarty_tpl ) );?>
',
                    URL: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
',
                    URL_SERVICE:'<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
service.api',
                    BASE_URL_TEMPLATE:'<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
',
                    URL_IMG_TEMPLATE:'<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL_IMG_TEMPLATE'),$_smarty_tpl ) );?>
',
                    IsoLanguage: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'ISO_LANGUAGE'),$_smarty_tpl ) );?>
',
                    controller:'<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)) {
echo $_smarty_tpl->tpl_vars['controller']->value;
}?>',
                    uriController:'<?php if (isset($_smarty_tpl->tpl_vars['uri_controller']->value)) {
echo $_smarty_tpl->tpl_vars['uri_controller']->value;
}?>',
                    actionController:'<?php if (isset($_smarty_tpl->tpl_vars['action_controller']->value)) {
echo $_smarty_tpl->tpl_vars['action_controller']->value;
}?>',
                    formatDate: 'dd/mm/yyyy',
                    redirect:"<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"
            };
        <?php echo '</script'; ?>
>



    </head>
    <body>
        <div class="login-content container">
            <div data-testid="wrapper" class="_loading_overlay_wrapper css-79elbk">
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-5"><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
img/login.jpg" alt="login" class="login-card-img"></div>
                        <div class="col-md-7">
                            <div class="card-body text-left">
                                <div class="brand-wrapper"><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
img/logo.png" alt="logo" class="logo pull-left"></div>
                                <p class="login-card-description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Admin Panel'),$_smarty_tpl ) );?>
</p>
                                <form id="FormLogin">
                                    <div class="form-group">
                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Login'),$_smarty_tpl ) );?>
</label>
                                        <input name="user_<?php echo $_smarty_tpl->tpl_vars['token_login']->value;?>
" type="text"  id="login" class="form-control" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'USER_EMAIL'),$_smarty_tpl ) );?>
"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enter Email'),$_smarty_tpl ) );?>
" autofocus>
                                    </div>
                                    <div class="form-group has-error has-danger">
                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Password'),$_smarty_tpl ) );?>
</label>
                                        <input name="password_<?php echo $_smarty_tpl->tpl_vars['token_login']->value;?>
" type="password" id="senha" class="form-control"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enter Password'),$_smarty_tpl ) );?>
">
                                    </div>
                                    <p></p>
                                    <button type="button" id="btnSubmit" disabled class="btn btn-block login-btn mb-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enter'),$_smarty_tpl ) );?>
</button>
                                </form>
                                <a class="forgot-password-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
login/changepassword"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Forgot your password?'),$_smarty_tpl ) );?>
</a>
                                <p class="login-card-footer-text"></p>
                                <nav class="login-card-footer-nav">

                                    <p class="language">
                                        <?php $_smarty_tpl->_assignInScope('count', 1);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'desc', false, 'iso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['iso']->value => $_smarty_tpl->tpl_vars['desc']->value) {
?>                                
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
login?lang=<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</a> 
                                        <?php if (count($_smarty_tpl->tpl_vars['LANGUAGES']->value) > $_smarty_tpl->tpl_vars['count']->value) {?> | <?php }?> 
                                        <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>                	              
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </p>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'NAME_SITE'),$_smarty_tpl ) );?>
 - v1.0 &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 </p>
        </div>

       
        <div id="loginModal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="modalContent">
                </div>
            </div>
        </div>




        <?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/bootstrap/4.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/field-validate/FieldValidate.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/noty/jquery.noty.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/noty/layouts/topCenter.js"><?php echo '</script'; ?>
>          
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/noty/themes/default.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
system/js/prototype.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/system.js?lang=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'ISO_LANGUAGE'),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
system/js/script.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
pages/login/js/login.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
