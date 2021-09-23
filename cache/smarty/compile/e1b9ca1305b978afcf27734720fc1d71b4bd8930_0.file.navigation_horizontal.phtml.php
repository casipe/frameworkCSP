<?php
/* Smarty version 3.1.33, created on 2021-09-06 23:02:30
  from '/var/www/html/conndo.com.br/admin/templates/default/navigation_horizontal.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6136c836993d96_80411424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1b9ca1305b978afcf27734720fc1d71b4bd8930' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/navigation_horizontal.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136c836993d96_80411424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
				<!-- START X-NAVIGATION HORIZONTAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="javascript:void(0);" class="x-navigation-minimize"><span class="far <?php if (!empty($_smarty_tpl->tpl_vars['MIN_NAVIGATION']->value) && intval($_smarty_tpl->tpl_vars['MIN_NAVIGATION']->value) == 1) {?>fa-indent<?php } else { ?>fa-dedent<?php }?>"></span>
                        </a>
                        
                    </li>
                     
                    <li>
                        <a href="javascript:void(0);" class="navigation-name-condo" style="cursor:default !important;"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>"CONDOMINIUM"),$_smarty_tpl ) );
$_prefixVariable63 = ob_get_clean();
echo smarty_modifier_truncate($_prefixVariable63,"25|...");?>
 &nbsp; 
                        <?php if ((isset($_smarty_tpl->tpl_vars['listCondominiumSession']->value) && count($_smarty_tpl->tpl_vars['listCondominiumSession']->value) > 1)) {?>
                        <span id="modalChangeCondo" class="far fa-sync-alt link"></span>
                        <?php }?> 
                        </a>
                    </li>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'USER_IS_SUPPORT'),$_smarty_tpl ) );
$_prefixVariable64 = ob_get_clean();
if ($_prefixVariable64 == 1) {?>
                    <li>
                    <a><span class="bold red uppercase" style="margin-left:10px; padding:5px; border:1px solid red; background-color:#fff; ">&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Support'),$_smarty_tpl ) );?>
 &nbsp;</span></a>
                    </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['isPendenciaFinanceira']->value) {?>
                    <li>
                    <a><span class="bold red" style="margin-left:10px; padding:5px; border:1px solid red; background-color:#fff; ">&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pendência Financeira'),$_smarty_tpl ) );?>
 &nbsp;</span></a>
                    </li>
                    <?php }?>
                    <!-- END TOGGLE NAVIGATION -->
                   					
                    <!-- PROFILE -->                    
                    <li class="xn-icon-button pull-right" id="changePasswordAccess">
                        <a href="#"><span class="fal fa-user-circle fa-2x"></span></a>
                        <div class="panel panel-primary animated zoomIn xn-drop-left">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fal fa-user-circle"></span>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'My Profile'),$_smarty_tpl ) );?>
</h3> 
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll">                                
                                <span class="list-group-item">
                                    <span class="fa fa-user-edit fa-2x" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Alterar Senha'),$_smarty_tpl ) );?>
"></span>
                                    <span class="mb-control link" id="actionChangePasswordAccess">
                                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Alterar Senha'),$_smarty_tpl ) );?>

                                   </span> 
                                </span> 
                                 <span class="list-group-item">
                                    <span class="fa fa-sign-out fa-2x" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Logout'),$_smarty_tpl ) );?>
"></span>
                                    <span class="mb-control link" data-box="#mb-signout">
                                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Logout'),$_smarty_tpl ) );?>

                                   </a> 
                                </span> 
                            </div>                            
                        </div>                        
                    </li>
                    
                    <li class="xn-icon-button pull-right">                      
                    </li> 
                    
                    
                    <!-- END SIGN OUT --> 
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'USER_ID'),$_smarty_tpl ) );
$_prefixVariable65 = ob_get_clean();
if ($_prefixVariable65 == 1) {?>
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="far fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="far fa-comments"></span>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Messages'),$_smarty_tpl ) );?>
</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'New'),$_smarty_tpl ) );?>
</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                            
                           
                               
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                               
                                
                                <a href="javascript:void();" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="Teste"/>
                                    <span class="contacts-title">Teste</span>
                                    <p>Mensagem teste</p>
                                </a>
                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Show all messages'),$_smarty_tpl ) );?>
</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="far fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="far fa-tasks"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Tasks'),$_smarty_tpl ) );?>
</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">   
                           
                              
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a> 
                               
                                
                                <a class="list-group-item" href="#">
                                    <strong>Texto de teste.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">Teste 01/01/2020 13:00 /</small><small class="text-success"> Teste</small>
                                </a>
                               
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Show all tasks'),$_smarty_tpl ) );?>
</a>
                            </div>                            
                        </div>                        
                    </li>
                     <?php }?>
                    
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION HORIZONTAL --> <?php }
}
