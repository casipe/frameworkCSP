<?php
/* Smarty version 3.1.33, created on 2021-09-22 19:33:20
  from '/var/www/html/conndo.com.br/web/templates/default/mainEnd.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_614baf3021cdc8_92850409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fafbc237a48611ce7335fd7dceaef51ce3f3b50' => 
    array (
      0 => '/var/www/html/conndo.com.br/web/templates/default/mainEnd.phtml',
      1 => 1608154660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614baf3021cdc8_92850409 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4."footer.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>

<!-- /#site-footer -->
</div>

<!-- /.site-wrapper -->
<div id="off-canvas-right" class="off-canvas sliding-menu">
    <a href="javascript:;" data-target="off-canvas-right" class="off-canvas-toggle">
        <span></span>
    </a>
    <div class="off-canvas-wrap">

        <!--
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
        -->
        
        <ul id="menu-mobile" class="menu menu-sliding"> 

            <li class="menu-item">
                <a href="#" data-anchor="#site" mobile data-ps2id-api="true">Início</a>
            </li>
            <li class="menu-item">
                <a href="#" data-anchor="#funcionalidades" mobile data-ps2id-api="true">Funcionalidades</a>
            </li>
            <li class="menu-item">
                <a href="#" data-anchor="#precos" mobile data-ps2id-api="true">Preços</a>
            </li>
            <li class="menu-item">
                <a href="#" data-anchor="#contato" mobile data-ps2id-api="true">Fale  Conosco</a>
            </li>   

        </ul>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/jquery-3.5.1.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/bootstrap-notify/bootstrap-notify.min.js"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/field-validate/FieldValidate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/mask/jquery.mask.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/script.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 data-no-minify="1" async src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/lazyload.min.js"><?php echo '</script'; ?>
>	
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/min_script.js"><?php echo '</script'; ?>
>


<?php if (isset($_smarty_tpl->tpl_vars['SCRIPT']->value)) {?> 
<?php echo $_smarty_tpl->tpl_vars['SCRIPT']->value;?>
  
<?php }?>


</body>
</html>





<?php }
}
