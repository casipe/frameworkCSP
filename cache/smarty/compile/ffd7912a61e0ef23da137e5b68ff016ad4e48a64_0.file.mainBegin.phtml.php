<?php
/* Smarty version 3.1.33, created on 2021-09-06 23:02:30
  from '/var/www/html/conndo.com.br/admin/templates/default/mainBegin.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6136c836908556_37337132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd7912a61e0ef23da137e5b68ff016ad4e48a64' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/mainBegin.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136c836908556_37337132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
                <!-- META SECTION -->
        <?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {
echo $_smarty_tpl->tpl_vars['title']->value;
}?>  

        <meta name="msapplication-TileColor" content="#5bc0de" />
        <meta name="msapplication-TileImage" content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png" />


        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="shortcut icon" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
/img/favicon.ico" type="image/x-icon" />


        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        

        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
css/theme-conndo.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/font-awesome/5.13.1/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/ajax-bootstrap-select/bootstrap-select.min.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
css/three-dots/three-dots.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
system/css/system.css"/>	
        <link href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/animate.css/animate.min.css" rel="stylesheet">




        
        <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/socket.io/socket.io.js"><?php echo '</script'; ?>
>


        <!-- EOF CSS INCLUDE -->	

        <?php echo '<script'; ?>
 type="text/javascript">

            var System = {
            socketIO : io.connect('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL_API_SOCKET'),$_smarty_tpl ) );?>
', {
            query:'codCondominio=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'CODE_CONDOMINIUM'),$_smarty_tpl ) );?>
'
            }),
                    'BASE_URL': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL'),$_smarty_tpl ) );?>
',
                    'URL': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
',
                    'URL_SERVICE': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
service.api',
                    'BASE_URL_TEMPLATE': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
',
                    'URL_IMG_TEMPLATE': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL_IMG_TEMPLATE'),$_smarty_tpl ) );?>
',
                    Date: function (date) {
                    if (!date) {
                    return new Date(<?php echo smarty_modifier_date_format(time(),'%Y,');
echo intval((smarty_modifier_date_format(time(),'%m')-1));?>
, <?php echo smarty_modifier_date_format(time(),'%e');?>
, <?php echo intval(smarty_modifier_date_format(time(),'%H'));?>
, <?php echo intval(smarty_modifier_date_format(time(),'%M'));?>
, <?php echo intval(smarty_modifier_date_format(time(),'%S'));?>
);
                    } else {
                    return new Date(date);
                    }
                    },
                    idCondominium: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'ID_CONDOMINIUM'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable1,'iv'=>'condominium'),$_smarty_tpl ) );?>
',
                    'dateNow' : "<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
",
                    'dateYear':"<?php echo smarty_modifier_date_format(time(),'%Y');?>
",
                    'timeNow' : "<?php echo smarty_modifier_date_format(time(),'%H:%M:%S');?>
",
                    'controller': '<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)) {
echo $_smarty_tpl->tpl_vars['controller']->value;
}?>',
                    'uriController': '<?php if (isset($_smarty_tpl->tpl_vars['uri_controller']->value)) {
echo $_smarty_tpl->tpl_vars['uri_controller']->value;
}?>',
                    'IdController': '<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>',
                    'actionController': '<?php if (isset($_smarty_tpl->tpl_vars['action_controller']->value)) {
echo $_smarty_tpl->tpl_vars['action_controller']->value;
}?>',
                    'IsoLanguage': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'ISO_LANGUAGE'),$_smarty_tpl ) );?>
',
                    'formatDate': 'dd/mm/yyyy',
                    'formatDateInput': 'DD/MM/AAAA'
            <?php if (isset($_smarty_tpl->tpl_vars['SystemVars']->value)) {
echo $_smarty_tpl->tpl_vars['SystemVars']->value;
}?>
            };
        <?php echo '</script'; ?>
>
        
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=G-FBRWP9T8EX"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'G-FBRWP9T8EX');
        <?php echo '</script'; ?>
>
        


    </head>
    <body>


        <!-- START PAGE CONTAINER -->
        <div class="page-container <?php if (!empty($_smarty_tpl->tpl_vars['MIN_NAVIGATION']->value) && intval($_smarty_tpl->tpl_vars['MIN_NAVIGATION']->value) == 1) {?>page-navigation-toggled page-container-wide<?php }?> page-navigation-top-fixed">

            <div id="loadingPage" class="loading"><div class="spinner"></div><div class="spinner-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Loading'),$_smarty_tpl ) );?>
...</div></div> 

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar page-sidebar-fixed scroll">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation <?php if (!empty($_smarty_tpl->tpl_vars['MIN_NAVIGATION']->value) && intval($_smarty_tpl->tpl_vars['MIN_NAVIGATION']->value) == 1) {?>x-navigation-minimized<?php }?>">
                    <li class="xn-logo">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'CONNDO Admin'),$_smarty_tpl ) );?>

                            <!---<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'NAME_SITE'),$_smarty_tpl ) );?>
---></a>
                        <a href="#" class="x-navigation-control"></a>
                    </li> 					
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."header_profile.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>					
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."menu.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>							

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->			
            <div class="page-content">			
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4."navigation_horizontal.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>	
                <!-- START PAGE CONTENT LOAD -->
                <div id="page-load" class="">  


<?php }
}
