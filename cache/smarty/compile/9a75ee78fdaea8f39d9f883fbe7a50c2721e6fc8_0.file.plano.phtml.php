<?php
/* Smarty version 3.1.33, created on 2021-08-06 22:23:22
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/myplan/plano.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610de08aaf0ce8_99439992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a75ee78fdaea8f39d9f883fbe7a50c2721e6fc8' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/myplan/plano.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610de08aaf0ce8_99439992 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
   var isChange = <?php if ($_smarty_tpl->tpl_vars['isChange']->value) {?>true<?php } else { ?>false<?php }?>;
   var isExpired = <?php if ($_smarty_tpl->tpl_vars['isExpired']->value) {?>true<?php } else { ?>false<?php }?>;
<?php echo '</script'; ?>
>
</div>
<div class="page-title">
    <h2><span class="fal fa-clipboard-user"></span> <?php if (!$_smarty_tpl->tpl_vars['isChange']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose a plan'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Change plan'),$_smarty_tpl ) );
}?></h2>
    <div class="pull-right">
        <a href="javascript:pageLoad('myplan')" class="btn btn-default"><span class="far fa-arrow-left"> </span> &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Back'),$_smarty_tpl ) );?>
</a>
        <a href="javascript:pageLoad('myplan<?php if ($_smarty_tpl->tpl_vars['isChange']->value) {?>/change<?php }?>')" class="btn btn-info" style="margin-right: 15px"><span class="far far fa-sync-alt"> </span> &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Refresh'),$_smarty_tpl ) );?>
</a>
        <a href="https://suporte.conndo.com.br/" target="_blank" class="btn btn-success btnAddModal "><span class="far fa-user-headset"> </span> &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Support'),$_smarty_tpl ) );?>
</a>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['MyPlan']->value->status_assinatura == 'EXP') {?>
<div class="col-md-12">
    <h4 class='text-danger'><i class="fa fa-info-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'The trial period has expired, to continue enjoying, please choose one of the plans below and fill out the form'),$_smarty_tpl ) );?>
:</h4>
</div>
<?php }?>
<div class="clear hr hr-title"></div>
<form id="form_plano" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
    <div id="infoPlano" class="col-md-7">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listPlano']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?> 
        <?php $_smarty_tpl->_assignInScope('recursos', explode(";",$_smarty_tpl->tpl_vars['item']->value->recursos));?>

        <input type="radio" name="id_plano_preco" 
               id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id_plano_preco;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable6,'iv'=>'plano_preco'),$_smarty_tpl ) );?>
" 
               value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id_plano_preco;
$_prefixVariable7 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable7,'iv'=>'plano_preco'),$_smarty_tpl ) );?>
"               
               data-valor="<?php if ($_smarty_tpl->tpl_vars['item']->value->valor_unidade && $_smarty_tpl->tpl_vars['item']->value->min_unidade) {
echo $_smarty_tpl->tpl_vars['item']->value->valor_unidade;
} else {
echo $_smarty_tpl->tpl_vars['item']->value->valor;
}?>" 
               data-min-unidade="<?php echo $_smarty_tpl->tpl_vars['item']->value->min_unidade;?>
" 
               <?php if ($_smarty_tpl->tpl_vars['idPlano']->value == $_smarty_tpl->tpl_vars['item']->value->id) {?>checked<?php }?>>

        <label for="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id_plano_preco;
$_prefixVariable8 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable8,'iv'=>'plano_preco'),$_smarty_tpl ) );?>
" >
            <div class='package <?php if ($_smarty_tpl->tpl_vars['idPlano']->value == $_smarty_tpl->tpl_vars['item']->value->id) {?>checkItem<?php }?>'>
                <div class='name' <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->descricao) > 12) {?>style="font-size: 2.5rem;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
</div>
                <div class='price'>R$ <?php if ($_smarty_tpl->tpl_vars['item']->value->valor_unidade && $_smarty_tpl->tpl_vars['item']->value->min_unidade) {?>
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->valor_unidade,2,",",'');?>
<small>/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Per unit'),$_smarty_tpl ) );?>
</small>
                    <?php } else { ?>
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->valor,2,",",'');?>
<small>/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Per month'),$_smarty_tpl ) );?>
</small>
                    <?php }?>
                </div> 
                <div class="info">                            
                    <?php if (intval($_smarty_tpl->tpl_vars['item']->value->min_unidade)) {?>                                
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->min_unidade > 1) {?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->min_unidade;
$_prefixVariable9 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Minimum of %s units','var'=>$_prefixVariable9),$_smarty_tpl ) );?>

                    <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unlimited'),$_smarty_tpl ) );?>

                    <?php }?>
                    <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unlimited'),$_smarty_tpl ) );?>
)
                    <?php }?>
                </div>
                <hr>
                <ul>
                    <li>                            
                        <?php if (intval($_smarty_tpl->tpl_vars['item']->value->max_condominio)) {?>
                        <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->max_condominio;?>
</strong>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->max_condominio > 1) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Condominiums'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Condominium'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Condominium'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unlimited'),$_smarty_tpl ) );?>
)
                        <?php }?>
                    </li>

                    <li>                            
                        <?php if (intval($_smarty_tpl->tpl_vars['item']->value->max_usuario)) {?>
                        <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->max_usuario;?>
</strong>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->max_usuario > 1) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Users'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'User'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'User'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unlimited'),$_smarty_tpl ) );?>
)
                        <?php }?>
                    </li>

                    <li>                            
                        <?php if (intval($_smarty_tpl->tpl_vars['item']->value->max_upload_mb)) {?>
                        <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->max_upload_mb;?>
Mb</strong>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Por condomínio'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Por condomínio'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unlimited'),$_smarty_tpl ) );?>
)
                        <?php }?>                            
                    </li>

                    <?php if (COUNT($_smarty_tpl->tpl_vars['recursos']->value) > 0) {?> 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recursos']->value, 'itemRecurso', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['itemRecurso']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['itemRecurso']->value != '') {?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
                    <li notSelect><hr></li>
                    <?php }?>
                    <li>
                        <?php echo $_smarty_tpl->tpl_vars['itemRecurso']->value;?>

                    </li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </ul>
            </div>
        </label>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
    <div id="infoFatura" class="col-md-5">
        <div class="form-group">
            <div class="col-xs-12">   
                <div id="cacularPlano" <?php if ($_smarty_tpl->tpl_vars['isChange']->value || $_smarty_tpl->tpl_vars['isExpired']->value) {?>style="display:block;"<?php }?>>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Plan amount'),$_smarty_tpl ) );?>
</h4>
                    <p class='hr'/>
                    <div class="row">
                        <div class="form-group">
                            <div id="valorTotalPlano"><?php if ($_smarty_tpl->tpl_vars['isChange']->value) {?>R$ <?php echo number_format($_smarty_tpl->tpl_vars['MyPlan']->value->valor,2,",",'');
}?></div>
                        </div> 
                        <?php if ($_smarty_tpl->tpl_vars['isChange']->value) {?>
                        <input type="hidden" id="valorOld" value="<?php echo number_format($_smarty_tpl->tpl_vars['MyPlan']->value->valor,2,",",'');?>
">
                        <input type="hidden" id="quantidadeOld" value="<?php echo $_smarty_tpl->tpl_vars['MyPlan']->value->quantidade_unidade;?>
">
                        <?php }?>
                       
                        <div class="col-md-5 col-xs-8 CacularPlano"> 
                            <div class="entry input-group">
                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total de Unidade'),$_smarty_tpl ) );?>
 </label>
                                <input class="form-control" type="text" value="<?php if ($_smarty_tpl->tpl_vars['isChange']->value) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->quantidade_unidade;
}?>" 
                                       placeholder="0,00" min="1" id="quantidade_unidade" name="quantidade_unidade" maxlength="10" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" id="btnCacularPlano" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Calculate'),$_smarty_tpl ) );?>
">
                                        <span class="far fa-calculator fa-2x"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        
                        
                    </div> 
                    <br><br><br>
                </div> 
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Responsible Information'),$_smarty_tpl ) );?>
</h4>
                <p class='hr'/>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Name'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->responsavel_nome)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->responsavel_nome;
}?>" id="responsavel_nome" name="responsavel_nome" maxlength="150" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Email'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control"  <?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->responsavel_email)) {?> value="<?php echo $_smarty_tpl->tpl_vars['MyPlan']->value->responsavel_email;?>
" readonly="readonly" <?php } else { ?>id="responsavel_email" name="responsavel_email"<?php }?>  maxlength="254" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'CPF/CNPJ'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control cpfCnpj" <?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->responsavel_doc)) {?>value="<?php echo $_smarty_tpl->tpl_vars['MyPlan']->value->responsavel_doc;?>
" readonly="readonly" <?php } else { ?>  id="responsavel_doc" name="responsavel_doc" <?php }?> maxlength="20" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Telephone'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control telefone" value="<?php if (isset($_smarty_tpl->tpl_vars['MyPlan']->value->responsavel_telefone)) {
echo $_smarty_tpl->tpl_vars['MyPlan']->value->responsavel_telefone;
}?>" id="responsavel_telefone" name="responsavel_telefone" maxlength="20"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5 col-xs-12"> 
                            <label class=" control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Invoice expiration day'),$_smarty_tpl ) );?>
</label>																						
                            <select class="col-md-4 form-control select" <?php if ($_smarty_tpl->tpl_vars['isExpired']->value) {?> required id="dia_vencimento_fatura" name="dia_vencimento_fatura"<?php } else { ?>disabled<?php }?> data-show-subtext="true" data-live-search="true">													
                                <option value="" selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>													
                                <option value="1" <?php if (1 == $_smarty_tpl->tpl_vars['MyPlan']->value->dia_vencimento_fatura) {?>selected<?php }?>>01</option>
                                <option value="5" <?php if (5 == $_smarty_tpl->tpl_vars['MyPlan']->value->dia_vencimento_fatura) {?>selected<?php }?>>05</option>
                                <option value="10" <?php if (10 == $_smarty_tpl->tpl_vars['MyPlan']->value->dia_vencimento_fatura) {?>selected<?php }?>>10</option>
                                <option value="15" <?php if (15 == $_smarty_tpl->tpl_vars['MyPlan']->value->dia_vencimento_fatura) {?>selected<?php }?>>15</option>
                                <option value="20" <?php if (20 == $_smarty_tpl->tpl_vars['MyPlan']->value->dia_vencimento_fatura) {?>selected<?php }?>>20</option>
                                   													
                            </select>
                        </div>
                    </div>
                    <br>
                                        <div class="row" style="margin:30px -5px">
                        <button type="button" class="btn btn-success" id="btnSave" disabled><i class="fal fa-save"></i> <?php if (!$_smarty_tpl->tpl_vars['isChange']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes, I want to continue using'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );
}?></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>


<?php if (!$_smarty_tpl->tpl_vars['isChange']->value) {?>
<div class="modal fade" id="modalPlanSuccess" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="card">
                        <div class="card-body text-center">
                <i class="fas fa-trophy-alt fa-4x green icon-success shake"></i>
                <h4 class="uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Congratulation'),$_smarty_tpl ) );?>
!</h4>
                <p>Alteração realizada com sucesso.</p>
                <p><b>Atenção:</b> Você tem um prazo de 5 dias para efetuar o pagamento.</p> 
                <button type="button" class="btn btn-success" id="btnContinue"><i class="fal fa-check-square"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Continue'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>        
</div>
<?php } else { ?>
<div class="modal fade" id="modalPlanSuccess" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="card">
            <button type="button" class="close text-right" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
            <div class="card-body text-center">
                <p><i class="fas fa-check-circle fa-3x text-success"></i></p>
                <p><span id="planoNovoValor"></span> <br>O novo valor entrará em vigor na próxima fatura.</p> 
                <button type="button" class="btn btn-default" data-dismiss="modal" id="btnClose"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Ok'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>        
</div>
<?php }?>

<?php }
}
