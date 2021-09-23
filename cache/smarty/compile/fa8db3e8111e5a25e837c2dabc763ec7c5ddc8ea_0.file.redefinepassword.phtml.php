<?php
/* Smarty version 3.1.33, created on 2021-01-10 20:40:32
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/login/redefinepassword.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffb9070562a62_32837055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8db3e8111e5a25e837c2dabc763ec7c5ddc8ea' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/login/redefinepassword.phtml',
      1 => 1608691422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffb9070562a62_32837055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" crossorigin="" href="/css/menu.css">
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
            };
        <?php echo '</script'; ?>
>

    </head>
    <body>
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value) && intval($_smarty_tpl->tpl_vars['error']->value)) {?>			
        <div class="alert alert-danger">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Error'),$_smarty_tpl ) );?>
!</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Token not found or invalid'),$_smarty_tpl ) );?>

            <p class="text-center" style="color:blue;"><br>
                <i class="fa fa-lock"></i> <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
login" style="color:blue;"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Log in'),$_smarty_tpl ) );?>
</b></a> | 
                <i class="fa fa-refresh"></i> <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
login/changepassword" style="color:blue;"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Redefine Password'),$_smarty_tpl ) );?>
</b></a>
            </p>
        </div>			
        <?php } else { ?>

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
                                <p class="login-card-description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Resetting Password'),$_smarty_tpl ) );?>
</p>
                                <form id="Form">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
                                    <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->email)) {?>
                                    <input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['datas']->value->email;?>
" disabled id="input-login-user" />
                                    <i class="fa fa-user"></i>
                                    <?php }?>
                                    <div class="form-group">
                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'New Password'),$_smarty_tpl ) );?>
</label>
                                        <input type="password" name="password"  id="password" class="form-control" placeholder="" />
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Confirm the Password'),$_smarty_tpl ) );?>
</label>
                                        <input type="password" name="password2" id="password2" class="form-control" placeholder="" />
                                    </div>
                                    <p></p>
                                    <button type="button" id="btnSubmit" disabled class="btn btn-block login-btn mb-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reset'),$_smarty_tpl ) );?>
</button>
                                </form>
                                <a class="forgot-password-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
login"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'I already know the password'),$_smarty_tpl ) );?>
.</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'NAME_SITE'),$_smarty_tpl ) );?>
 - v1.0 &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 </p>
        </div>

        <?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
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
pages/login/js/redefinePassword.js"><?php echo '</script'; ?>
>


        <?php }?>

    </body>
</html><?php }
}
