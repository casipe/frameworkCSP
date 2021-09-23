<?php
/* Smarty version 3.1.33, created on 2021-06-14 21:22:39
  from '/var/www/html/conndo.com.br/admin/templates/email/redefinepassword.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60c7f2cfe02852_85123232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '113b7556c4e7e7e0310122017be3ca8f55e5eab7' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/email/redefinepassword.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c7f2cfe02852_85123232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>


    <style type="text/css">
			* { margin: 0; padding: 0; font-size: 100%; font-family: 'Avenir Next', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; line-height: 1.65; }

			img { max-width: 100%; margin: 0 auto; display: block; }

			body, .body-wrap { width: 100% !important; height: 100%; background: #f8f8f8; }

			a { color: #2196F3; text-decoration: none; }

			a:hover { text-decoration: underline; }

			.text-center { text-align: center; }

			.text-right { text-align: right; }

			.text-left { text-align: left; }

			.button { display: inline-block; color: white; background: #2196F3; border: solid #2196F3; border-width: 10px 20px 8px; font-weight: bold; border-radius: 4px; }
            a.button { color:#fff;}
			.button:hover { text-decoration: none; }

			h1, h2, h3, h4, h5, h6 { margin-bottom: 20px; line-height: 1.25; }

			h1 { font-size: 32px; }

			h2 { font-size: 28px; }

			h3 { font-size: 24px; }

			h4 { font-size: 20px; }

			h5 { font-size: 16px; }

			p, ul, ol { font-size: 16px; font-weight: normal; margin-bottom: 20px; }

			.container { display: block !important; clear: both !important; margin: 0 auto !important; max-width: 580px !important; }

			.container table { width: 100% !important; border-collapse: collapse; }

			.container .masthead { padding: 80px 0; background: #2196F3; color: white; }

			.container .masthead h1 { margin: 0 auto !important; max-width: 90%; text-transform: uppercase; }

			.container .content { background: white; padding: 30px 35px; }

			.container .content.footer { background: none; }

			.container .content.footer p { margin-bottom: 0; color: #888; text-align: center; font-size: 14px; }

			.container .content.footer a { color: #888; text-decoration: none; font-weight: bold; }

			.container .content.footer a:hover { text-decoration: underline; }
</style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Hello'),$_smarty_tpl ) );?>
 <b><span style="text-transform: uppercase;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,</span></h2>
                        <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'We received a request to recover your password'),$_smarty_tpl ) );?>
.
                        </p>
                        <p> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To continue the process, click on the link below'),$_smarty_tpl ) );?>
:</p>
                        <table>
                            <tr>
                                <td align="center">
                                    <p style="margin-top:40px;">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url_change_password']->value;?>
" class="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Redefine Password'),$_smarty_tpl ) );?>
</a>
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <p style="margin-top:40px;"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'If you did not request it, please disregard this email'),$_smarty_tpl ) );?>
.</p>
                        <p style="margin-top:40px; color:#2196F3"><em>– <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
</em></p>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Sent by'),$_smarty_tpl ) );?>
 <a href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'NAME_SITE'),$_smarty_tpl ) );?>
</a> © <?php echo smarty_modifier_date_format(time(),"%Y");?>
</p>
                                            </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html><?php }
}
