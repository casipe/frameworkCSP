<?php
/* Smarty version 3.1.33, created on 2021-08-06 22:23:44
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/myplan/myplan.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610de0a0ae9ef0_99661321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1db826ff8e72cc52057c446579e6511cd7ecdc40' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/myplan/myplan.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610de0a0ae9ef0_99661321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Administration'),$_smarty_tpl ) );?>
</li>
    <li><a href="javascript:pageLoad('myplan');"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'My Plan'),$_smarty_tpl ) );?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['MyPlan']->value->status_assinatura == 'EXP' || $_smarty_tpl->tpl_vars['isChange']->value) {?>
    <li><?php if (!$_smarty_tpl->tpl_vars['isChange']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose a plan'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Change plan'),$_smarty_tpl ) );
}?></li>
    <?php }?>
</ul>
<!-- END BREADCRUMB -->

<?php if ($_smarty_tpl->tpl_vars['MyPlan']->value->status_assinatura != 'EXP' && !$_smarty_tpl->tpl_vars['isChange']->value) {?>

<div class="page-title">
    <h2><span class="fal fa-clipboard-user"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'My Plan'),$_smarty_tpl ) );?>
</h2>
    <div class="pull-right">
        <a href="javascript:pageLoad('myplan')" class="btn btn-info" style="margin-right: 15px"><span class="far far fa-sync-alt"> </span> &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Refresh'),$_smarty_tpl ) );?>
</a>
        <a href="https://suporte.conndo.com.br/" target="_blank" class="btn btn-success btnAddModal "><span class="far fa-user-headset"> </span> &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Support'),$_smarty_tpl ) );?>
</a>
    </div>
</div>
<div id="myplan" class="content-frame">

    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">
    </div>
    <!-- END CONTENT FRAME TOP -->

    <!-- START CONTENT FRAME LEFT -->
    <div class="content-frame-left" style="height: 512px;">
        <div class="panel panel-default">
            <div class="panel-body bg-red text-center white">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Plan'),$_smarty_tpl ) );?>
:
                <h2 class="white"><?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->planoDesc)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->planoDesc;?>

                    <?php if ($_smarty_tpl->tpl_vars['MyPlan']->value->data_expiracao) {?><br><small class="white">( <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Período de Teste'),$_smarty_tpl ) );?>
 )</small><?php }?>
                    <?php }?>
                </h2>
                <button type="button" class="btn btn-default" onclick="pageLoad('myplan/change')"><i class="fas fa-sync-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Change'),$_smarty_tpl ) );?>
</button>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="dadosPlano">

                        <tbody>
                            <tr>
                                <td><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
:</strong></td>
                                <td class="<?php if ($_smarty_tpl->tpl_vars['MyPlan']->value->status_assinatura == 'REG') {?> green <?php } else { ?>red<?php }?>">
                                    <span>
                                        <?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->status_assinatura)) {
$_prefixVariable2 = $_smarty_tpl->tpl_vars['MyPlan']->value;
echo $_prefixVariable2::getStatusDesc($_smarty_tpl->tpl_vars['MyPlan']->value->status_assinatura,true);
}?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Creation'),$_smarty_tpl ) );?>
:</strong></td>
                                <td><span><?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->data_add)) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['MyPlan']->value->data_add,"%d/%m/%Y");
}?></span></td>
                            </tr>
                            <?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->data_expiracao)) {?>
                            <tr>
                                <td><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Expiration'),$_smarty_tpl ) );?>
:</strong></td>
                                <td class="red"><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['MyPlan']->value->data_expiracao,"%d/%m/%Y");?>
</span></td>
                            </tr>
                            <?php }?>

                        </tbody>
                    </table>
                </div>

                <div id="dadosPercentual">

                    <?php $_smarty_tpl->_assignInScope('percCondomino', 0);?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['MyPlan']->value->max_condominio) && $_smarty_tpl->tpl_vars['MyPlan']->value->max_condominio > 0 && isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalCondominio) && $_smarty_tpl->tpl_vars['MyPlan']->value->totalCondominio)) {?>
                    <?php $_smarty_tpl->_assignInScope('percCondomino', number_format((($_smarty_tpl->tpl_vars['MyPlan']->value->totalCondominio/$_smarty_tpl->tpl_vars['MyPlan']->value->max_condominio)*100),2,",",''));?>
                    <?php }?>

                    <div class="progress-list">
                        <div class="pull-left"><strong class="text-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Condominiums'),$_smarty_tpl ) );?>
</strong></div>
                        <div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalCondominio;?>
/<?php echo $_smarty_tpl->tpl_vars['MyPlan']->value->max_condominio;?>
 <?php if ($_smarty_tpl->tpl_vars['MyPlan']->value->max_condominio) {?> - <?php echo $_smarty_tpl->tpl_vars['percCondomino']->value;?>
%<?php } else { ?>~<?php }?></div>
                        <div class="progress progress-small progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" 
                                 aria-valuenow="<?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalCondominio)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalCondominio;
} else { ?>0<?php }?>" 
                                 aria-valuemin="0" aria-valuemax="<?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->max_condominio)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->max_condominio;
} else { ?>0<?php }?>" 
                                 style="width: <?php echo $_smarty_tpl->tpl_vars['percCondomino']->value;?>
%;"><?php echo $_smarty_tpl->tpl_vars['percCondomino']->value;?>
%</div>
                        </div>
                    </div>
                    <div class="progress-list">
                        <div class="pull-left"><strong class="blue"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Blocks'),$_smarty_tpl ) );?>
</strong></div>
                        <div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalBloco;?>
</div>
                        <div class="progress progress-small progress-striped active">
                            <div class="progress-bar progress-bar-success bg-blue" role="progressbar" aria-valuenow="<?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalBloco)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalBloco;
} else { ?>0<?php }?>" aria-valuemin="0" aria-valuemax="<?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalBloco)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalBloco;
} else { ?>0<?php }?>" style="width: 100%;"></div>
                        </div>
                    </div>

                    <?php $_smarty_tpl->_assignInScope('percUnidade', 0);?>                    
                    <?php $_smarty_tpl->_assignInScope('maxUnidade', $_smarty_tpl->tpl_vars['MyPlan']->value->quantidade_unidade ? $_smarty_tpl->tpl_vars['MyPlan']->value->quantidade_unidade : $_smarty_tpl->tpl_vars['MyPlan']->value->max_unidade);?>
                    
                    <?php if (($_smarty_tpl->tpl_vars['maxUnidade']->value > 0 && isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalUnidade) && $_smarty_tpl->tpl_vars['MyPlan']->value->totalUnidade)) {?>
                    <?php $_smarty_tpl->_assignInScope('percUnidade', number_format((($_smarty_tpl->tpl_vars['MyPlan']->value->totalUnidade/$_smarty_tpl->tpl_vars['maxUnidade']->value)*100),2,",",''));?>
                    <?php }?>
                    <div class="progress-list">
                        <div class="pull-left"><strong class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Units'),$_smarty_tpl ) );?>
</strong></div>
                        <div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalUnidade;?>
/<?php echo $_smarty_tpl->tpl_vars['maxUnidade']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['maxUnidade']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['percUnidade']->value;?>
%<?php } else { ?>~<?php }?></div>
                        <div class="progress progress-small progress-striped active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalUnidade)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalUnidade;
} else { ?>0<?php }?>" aria-valuemin="0" aria-valuemax="<?php if ($_smarty_tpl->tpl_vars['maxUnidade']->value) {
echo $_smarty_tpl->tpl_vars['maxUnidade']->value;
} else { ?>0<?php }?>" style="width:<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['percUnidade']->value,',','.');?>
%;"><?php echo $_smarty_tpl->tpl_vars['percUnidade']->value;?>
%</div>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('percUsuario', 0);?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['MyPlan']->value->max_usuario) && $_smarty_tpl->tpl_vars['MyPlan']->value->max_usuario > 0 && isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalUsuario) && $_smarty_tpl->tpl_vars['MyPlan']->value->totalUsuario)) {?>
                    <?php $_smarty_tpl->_assignInScope('percUsuario', number_format((($_smarty_tpl->tpl_vars['MyPlan']->value->totalUsuario/$_smarty_tpl->tpl_vars['MyPlan']->value->max_usuario)*100),2,",",''));?>
                    <?php }?>
                    <div class="progress-list">
                        <div class="pull-left"><strong class="text-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Users'),$_smarty_tpl ) );?>
</strong></div>
                        <div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalUsuario;?>
/<?php echo $_smarty_tpl->tpl_vars['MyPlan']->value->max_usuario;?>
 <?php if ($_smarty_tpl->tpl_vars['MyPlan']->value->max_usuario) {?> - <?php echo $_smarty_tpl->tpl_vars['percUsuario']->value;?>
%<?php } else { ?>~<?php }?></div>
                        <div class="progress progress-small progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" 
                                 aria-valuenow="<?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->totalUsuario)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->totalUsuario;
} else { ?>0<?php }?>" 
                                 aria-valuemin="0" 
                                 aria-valuemax="<?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->max_usuario)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->max_usuario;
} else { ?>0<?php }?>" 
                                 style="width: <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['percUsuario']->value,',','.');?>
%;"><?php echo $_smarty_tpl->tpl_vars['percUsuario']->value;?>
%</div>
                        </div>
                    </div>
                                    </div>



            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME LEFT -->

    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body" style="height: 572px; margin-bottom: 30px">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row" id="dadosQuantitativo">
                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/dashboard.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>                    
                </div>
                <div style="margin-top:10px;">
                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
:</h3>
                    <hr>
                    <div class="col-md-12">
                        <div class="row">                          

                            <table id="dataTable" class="table">
                                <thead>
                                    <tr> 
                                        <th style="max-width: 20px">
                                            <label class="check">
                                                <input type="checkbox" id="checkAll" class="icheckbox" name="all" onchange="Financialpayment.checkAll()" />
                                            </label>
                                        </th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
</th> 
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Code'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
</th> 
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Date'),$_smarty_tpl ) );?>
</th>  
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Due Date'),$_smarty_tpl ) );?>
</th> 
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</th>
                                        <th class="" style="width:30px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Boleto'),$_smarty_tpl ) );?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                    </tbody>
                            </table>		 
                            <div class="clear hr"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME BODY -->
</div>

<p class="clear">
<div class="modal fade" id="modalBoleto" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>                
                <h4 class="modal-title" id="titleModalHead"><a href="javascript:Myplan.printBoleto()"><i class="fa fa-print"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Print'),$_smarty_tpl ) );?>
</a></h4>
            </div>
            <div class="modal-body modalScrollVerticalLg">
                <div id='loadBoleto'></div>
            </div>
        </div>
    </div>        
</div>

<?php } else {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/plano.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isChange'=>$_smarty_tpl->tpl_vars['isChange']->value,'idPlano'=>$_smarty_tpl->tpl_vars['idPlano']->value,'listPlano'=>$_smarty_tpl->tpl_vars['listPlano']->value,'MyPlan'=>$_smarty_tpl->tpl_vars['MyPlan']->value), 0, true);
?> 
<?php }
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable5."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
}
}
