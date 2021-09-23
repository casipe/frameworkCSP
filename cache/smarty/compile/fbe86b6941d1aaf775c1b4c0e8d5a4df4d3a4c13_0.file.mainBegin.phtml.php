<?php
/* Smarty version 3.1.33, created on 2020-11-05 18:40:47
  from 'D:\xampp\htdocs\conndo\web\templates\default\mainBegin.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa4715fcc9f59_39995565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe86b6941d1aaf775c1b4c0e8d5a4df4d3a4c13' => 
    array (
      0 => 'D:\\xampp\\htdocs\\conndo\\web\\templates\\default\\mainBegin.phtml',
      1 => 1604590972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa4715fcc9f59_39995565 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
            <title>CONNDO - Condomínio Online</title>
            <meta name="generator" content="CONNDO.com.br" />
            <link rel="canonical" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
" />
            <link rel='shortlink' href='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
' />
                  <meta name="generator" content="CONNDO - Condomínio Online"/>
                <link rel="shortcut icon" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
/images/favicon.ico" type="image/x-icon" />
                <link rel="apple-touch-icon" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon.png" />
                <link rel="apple-touch-icon-precomposed" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-180x180.png" />
                <meta name="msapplication-TileImage" content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-180x180.png" />

                <link rel="apple-touch-icon" sizes="57x57" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-57x57.png" />
                <link rel="apple-touch-icon" sizes="72x72" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-72x72.png" />
                <link rel="apple-touch-icon" sizes="76x76" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-76x76.png" />
                <link rel="apple-touch-icon" sizes="114x114" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-114x114.png" />
                <link rel="apple-touch-icon" sizes="120x120" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-120x120.png" />
                <link rel="apple-touch-icon" sizes="144x144" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-144x144.png" />
                <link rel="apple-touch-icon" sizes="152x152" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-152x152.png" />
                <link rel="apple-touch-icon" sizes="180x180" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/apple-touch-icon-180x180.png" />


                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A400%2C100%7COpen%20Sans%3A400&#038;subset=latin-ext%2Chebrew%2Clatin%2Ccyrillic%2Cdevanagari&#038;display=swap" />
                <link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
css/main.css" data-minify="1" />
                <link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
css/style.css"/>


                <meta name="description" content="Caro Freguês, encontre tudo que você precisa e faça sua compra com segurança nas Casas Bahia. Compre em até 12x sem juros no cartão e ainda aproveite o Frete Grátis acima de R$ 99,90 no site (confira as regras no site)." />
                <meta name="Abstract" content="Síndico ou Administradora de Condomínio. Conheça a nossa plataforma de gestão de condomínio online. Somos 100% digital. " />
                <meta name="keywords" content="conndo, condo, condomínio, síndico, administradora, síndico profissional, gestão, financeiro, reserva, portaria, visitante, morador, condômino, enquete, conta, pagar, receber, boleto, relatório, online" />
                <link rel="canonical" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
" />
                <link rel='alternate' href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
assinatura" />
                <meta property="og:title" content="CONNDO  - Condomínio Online: A melhor plataforma de gestão de condomínio! "/>
                <meta property="og:image" content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
images/logo.png" />
                <meta name="language" content="pt-br" />
                <meta name="resource-type" content="document" />
                <meta name="robots" content="INDEX, FOLLOW" />
                <meta name="distribution" content="Global" />
                <meta name="rating" content="General" />


                <?php if (isset($_smarty_tpl->tpl_vars['STYLE_SHEET']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['STYLE_SHEET']->value;?>

                <?php }?>

                </head>
                <body class="page-template page-template-tmpl page-template-template-fullwidth page-template-tmpltemplate-fullwidth-php page page-id-1034 sliding-desktop-off sliding-overlay layout-wide sidebar-none wpb-js-composer js-comp-ver-6.2.0 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">
                    <div id="site" class="site wrap header-position-top full-content">

<?php }
}
