<?php
/* Smarty version 3.1.33, created on 2021-09-22 19:33:20
  from '/var/www/html/conndo.com.br/web/templates/default/menuTop.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_614baf30200646_03042917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b2ad94e2ab99410866087be3496545704fc9481' => 
    array (
      0 => '/var/www/html/conndo.com.br/web/templates/default/menuTop.phtml',
      1 => 1608154660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614baf30200646_03042917 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="site-header" class="site-header site-header-classic header-brand-left header-full header-shadow">
    <div class="site-header-inner wrap">
        <div class="header-content">
            <div class="header-brand">
                <a href="./">
                    <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png" data-lazy-srcset="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png" alt="CONNDO - Condomínio Online" class="logo logoDefault" 
                         data-lazy-src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png" />
                    <noscript>
                    <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png" srcset="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.phg" alt="CONNDO - Condomínio Online" class="logo logoDefault" />
                    </noscript>
                </a>
            </div>
            <nav class="navigator" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <div class="nav-info">
                    <div class="widget"> Nossa plataforma é 100% online, você não precisa se preocupar com infraestrutura.</div>
                </div>
                <ul id="menu-main-menu" class="menu menu-primary">
                    <li class="menu-item  menu-item-object-page">
                        <a <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'index') {?>href="#" data-anchor="#site" <?php } else { ?> href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
"<?php }?> data-ps2id-api="true">Início</a>
                    </li>
                    <li class="menu-item  menu-item-object-page">
                        <a <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'index') {?>href="#" data-anchor="#funcionalidades" <?php } else { ?> href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
#funcionalidades"<?php }?> data-ps2id-api="true">Funcionalidades</a>
                    </li>
                    <li class="menu-item  menu-item-object-page">
                        <a <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'index') {?>href="#" data-anchor="#precos" <?php } else { ?> href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
#precos"<?php }?> data-ps2id-api="true">Preços</a>
                    </li>
                    <li class="menu-item  menu-item-object-page">
                        <a <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'index') {?>href="#" data-anchor="#contato" <?php } else { ?> href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
#contato"<?php }?> data-ps2id-api="true">Fale Conosco</a>
                    </li>
                </ul>
            </nav>
            <div class="extras">
                <div class="header-info-text">
                    <div class="icons-info widget">
                        <div class="icons">
                            <span class="fa fa-cog"><span/>
                        </div>
                        <div class="info">
                            <a class=" button btnAdmin" href="https://admin.<?php echo _DOMAIN_;?>
" target="_blank">
                                <span>Acesso ao Painel</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--
                <ul class="navigator menu-extras">
                    <li class="search-box">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="widget widget_search">
                            <form role="search" method="get" class="search-form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                                </label>
                                <input type="submit" class="search-submit" value="Search" />
                            </form>
                        </div>
                    </li>
                </ul>
                -->
            </div>
            <a href="javascript:;" data-target="off-canvas-right" class="off-canvas-toggle">
                <span></span>
            </a>
        </div>
    </div>
    <!-- /.site-header-inner -->
</div>
<!-- /.site-header -->
<div id="site-header-sticky" class=" site-header-sticky header-brand-left header-full header-shadow">
    <div class="site-header-inner wrap">
        <div class="header-content">
            <div class="header-brand">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
">
                    <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png" data-lazy-srcset="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png" alt="CONNDO - Condomínio Online" class="logo logoDefaultScroll" data-lazy-src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png" />
                    <noscript>
                    <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png" srcset="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png 1x, <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/logo.png 2x" alt="CONNDO - Condomínio Online" class="logo logoDefaultScroll" />
                    </noscript>
                </a>
            </div>
            <nav class="navigator" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <ul id="menu-main-menu-1" class="menu menu-primary">
                    <li class="menu-item  menu-item-object-page">
                        <a <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'index') {?>href="#" data-anchor="#site" <?php } else { ?> href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
"<?php }?> data-ps2id-api="true">Início</a>
                    </li>
                    <li class="menu-item  menu-item-object-page">
                        <a <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'index') {?>href="#" data-anchor="#funcionalidades" <?php } else { ?> href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
#funcionalidades"<?php }?> data-ps2id-api="true">Funcionalidades</a>
                    </li>
                    <li class="menu-item  menu-item-object-page">
                        <a <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'index') {?>href="#" data-anchor="#precos" <?php } else { ?> href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
#precos"<?php }?> data-ps2id-api="true">Preços</a>
                    </li>
                    <li class="menu-item  menu-item-object-page">
                        <a <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'index') {?>href="#" data-anchor="#contato" <?php } else { ?> href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
#contato"<?php }?> data-ps2id-api="true">Fale Conosco</a>
                    </li>                             
                </ul>
            </nav>
            <div class="extras">
                <div class="header-info-text">
                    <div class="icons-info widget">
                        <div class="icons">
                            <span class="fa fa-cog"><span/>
                        </div>
                        <div class="info">
                            <a class=" button btnAdmin" href="https://admin.<?php echo _DOMAIN_;?>
" target="_blank">
                                <span>Acesso ao Painel</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--
                 <ul class="navigator menu-extras">
                     <li class="search-box">
                         <a href="#">
                             <i class="fa fa-search"></i>
                         </a>
                         <div class="widget widget_search">
                             <form role="search" method="get" class="search-form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
">
                                 <label>
                                     <span class="screen-reader-text">Pesquisar por:</span>
                                     <input type="search" class="search-field" placeholder="Pesquisar &hellip;" value="" name="s" />
                                 </label>
                                 <input type="submit" class="search-submit" value="Pesquisar" />
                             </form>
                         </div>
                     </li>
                 </ul>
                -->
            </div>
            <a href="javascript:;" data-target="off-canvas-right" class="off-canvas-toggle">
                <span></span>
            </a>
            <div class="noty-message"></div>
        </div>
    </div>
    <!-- /.site-header-inner -->
</div>
<?php }
}
