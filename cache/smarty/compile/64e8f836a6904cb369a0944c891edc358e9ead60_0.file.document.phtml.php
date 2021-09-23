<?php
/* Smarty version 3.1.33, created on 2020-12-15 08:11:54
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/document/document.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd899fa7b2453_30982345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e8f836a6904cb369a0944c891edc358e9ead60' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/document/document.phtml',
      1 => 1608005220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd899fa7b2453_30982345 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Register'),$_smarty_tpl ) );?>
</li> 
    <li><a href="javascript:void(0);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Documents'),$_smarty_tpl ) );?>
</a></li>                    
    </ul>
<!-- END BREADCRUMB -->                

<!-- PAGE CONTENT WRAPPER -->  
<div class="page-content-wrap">                



    <div class="row">
        <div class="col-md-12">
            <p></p>

            <nav class="navbar navbar-default toolbar-page-navbar">
                <div class="container-fluid">
                    <!-- Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="pull-left navbar-toggle collapsed treeview-toggle-btn" data-toggle="collapse" data-target="#treeview-toggle" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-folder-open"></span>
                        </button>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#options" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-refresh"></span>
                        </button>

                        <!-- Search button -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toolbar-page-navigation" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-gears"></span>
                        </button>
                    </div>

                    <ul class="collapse navbar-collapse nav navbar-nav navbar-right" id="options">
                        <li><a href="javascript:pageLoad('document');"><span class="fa fa-lg fa-refresh"></span></a></li>
                    </ul>


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-nav-left" id="toolbar-page-navigation">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0);" class="disabled" disabled id="newFolder" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'New Folder'),$_smarty_tpl ) );?>
"><span class="fas fa-folder-plus fa-lg fa-3x"></span></a></li>
                            <li class="toolbar-page-activ e"><a href="javascript:void(0);" class="disabled" disabled id="newFile" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'New File'),$_smarty_tpl ) );?>
" ><span class="fas fa-file-plus fa-lg fa-3x"></span></a></li>
                            <li><a href="javascript:void(0);" class="disabled" disabled id="editFolder" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );?>
"><span class="fas fa-edit fa-lg fa-3x"></span></a></li>
                            <li><a href="javascript:void(0);" class="disabled" disabled id="removeItem" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Delete'),$_smarty_tpl ) );?>
"><span class="fas fa-trash fa-lg fa-3x"></span></a></li>
                            <li><a href="javascript:void(0);" class="disabled" disabled id="downloadItem" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Download'),$_smarty_tpl ) );?>
"><span class="fas fa-file-download fa-lg fa-3x"></span></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.container-fluid -->
            </nav>

            <div class="panel panel-default" >
                <div class="panel-body">
                    <div class="toolbar-page-template">	
                        <div class="row">
                            <div id="document-treeview" class="col-sm-4 col-md-4">
                                <div id=" document-treeview" class="col-sm-3 col-md-4 toolbar-page-template-treeview">
                                    <div class="collapse navbar-collapse" id="treeview-toggle">
                                        <ul class="file-tree">    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                Arquivos/Pastas
                                    <hr>
                                <div id="document-view">                                    
                                    <div class="col-sm-12 col-md-12" id="treeview-load-doc"> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>				

            </div>
        </div>

    </div>

</div>                                

</div>
<!-- PAGE CONTENT WRAPPER -->  


<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/modal_new_folder.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>  
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/modal_new_file.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>  
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/modal_edit_folder.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?> 

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable5."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>



<?php }
}
