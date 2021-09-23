<?php
/* Smarty version 3.1.33, created on 2020-12-14 19:36:00
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/financialreceipt/financialreceipt_datas.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd7e8d0747e92_73637854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26677722111a52c3202e78890de32d3c3147f09b' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/financialreceipt/financialreceipt_datas.phtml',
      1 => 1607984635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd7e8d0747e92_73637854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="col-xs-12"> 
    <div class="col-md-7 col-xs-12 pull-left">
        <h4><br><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['descricao'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['codigo'];?>
 - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['datas']->value['descricao'], 'UTF-8');
} else { ?>Error<?php }?></h4>
        <h4	 class="<?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'CAN') {?>
             red
             <?php } elseif ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'APR') {?>
             green
             <?php } else { ?>
             gray
             <?php }?>"

             ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
: <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['status_movimento'])) {?>
            <?php echo $_smarty_tpl->tpl_vars['datas']->value['status_movimento'];
if ($_smarty_tpl->tpl_vars['datas']->value['status_movimento'] <> $_smarty_tpl->tpl_vars['datas']->value['status']) {?> / <?php echo $_smarty_tpl->tpl_vars['datas']->value['status'];
}?>	
            <?php }?><h4>
                <?php if ($_smarty_tpl->tpl_vars['datas']->value['id_config_gateway_pagamento']) {?>
                <div class="row">
                    <div class="alert alert-info alert-small" role="alert">
                        <i class="fal fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Automated process'),$_smarty_tpl ) );?>

                    </div>
                </div>

                <?php }?>
                </div>
                <div class="col-md-5 col-xs-12 pull-right">
                    <h2>
                        <span style="font-size:16px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total'),$_smarty_tpl ) );?>
:</span> <br>
                        R$ <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['valor'])) {
echo number_format($_smarty_tpl->tpl_vars['datas']->value['valor'],2,",",'');
} else { ?>--<?php }?>
                    </h2>

                </div>
                </div>
                <hr class="clear">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="margin-top:-40px">
                    <i class="fal fa-eye"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'See Details'),$_smarty_tpl ) );?>

                </button>
                <div class="accordion col-xs-12" id="detalhes">
                    <div class="card z-depth-0 bordered">
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#detalhes">
                            <div class="card-body">

                                <table class="col-md-12">
                                    <tbody>	

                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Movement Date'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['data_movimento'])) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['data_movimento'],"%d/%m/%Y");
} else { ?>--<?php }?></td>
                                        </tr>
                                        <?php if (!isset($_smarty_tpl->tpl_vars['datas']->value['titulos']) || !COUNT($_smarty_tpl->tpl_vars['datas']->value['titulos'])) {?>     


                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Due Date'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['data_vencimento'])) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['data_vencimento'],"%d/%m/%Y");
} else { ?>--<?php }?></td>
                                        </tr>

                                            <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['data_pagamento']) && !empty($_smarty_tpl->tpl_vars['datas']->value['valor_pagamento'])) {?>
                                            <tr>
                                                <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pay day'),$_smarty_tpl ) );?>
</strong></td>
                                                <td></td>
                                                <td class="h5"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['data_pagamento'],"%d/%m/%Y");?>
</td>
                                            </tr>

                                            <tr>
                                                <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Amount Paid'),$_smarty_tpl ) );?>
</strong></td>
                                                <td></td>
                                                <td class="h5">R$ <?php echo number_format($_smarty_tpl->tpl_vars['datas']->value['valor_pagamento'],2,",",'');?>
</td>
                                            </tr>
                                            <?php }?>
                                        <?php }?>	
                                        
                                        
                                        <tr><td class="h6">&nbsp;</td></tr>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['unidade'])) {?>
                                         <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php echo $_smarty_tpl->tpl_vars['datas']->value['bloco'];?>
/<?php echo $_smarty_tpl->tpl_vars['datas']->value['unidade'];?>
</td>
                                        </tr>
                                        <?php }?>
                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document Number'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['numero_documento'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['numero_documento'];
} else { ?>--<?php }?></td>
                                        </tr>

                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document Type'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['tipo_documento_desc'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['tipo_documento_desc'];
} else { ?>--<?php }?></td>
                                        </tr>
                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['plano_conta_desc'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['plano_conta_desc'];
} else { ?>--<?php }?></td>
                                        </tr>
                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank Account'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['id_banco_conta'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['banco_desc'];?>
/<?php echo $_smarty_tpl->tpl_vars['datas']->value['banco_conta_desc'];
} else { ?>--<?php }?></td>
                                        </tr>
                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Collector Agent'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['agente_cobrador_desc'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['agente_cobrador_desc'];
} else { ?>--<?php }?></td>
                                        </tr>
                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cost Center'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['centro_custo_desc'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['centro_custo_desc'];
} else { ?>--<?php }?></td>
                                        </tr>
                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Provider'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['fornecedor_nome'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['fornecedor_nome'];
} else { ?>--<?php }?></td>
                                        </tr>
                                        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value['titulos']) && COUNT($_smarty_tpl->tpl_vars['datas']->value['titulos'])) {?>
                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Installment'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['quantidade_parcela'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['quantidade_parcela'];?>
X<?php } else { ?>--<?php }?></td>
                                        </tr>
                                        <?php }?>
                                        
                                        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value['observacao']) && $_smarty_tpl->tpl_vars['datas']->value['observacao'] != '') {?>
                                        <tr><td colspan="3"><hr><td></tr>
                                        <tr>
                                            <td class="h6"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
</strong></td>
                                            <td></td>
                                            <td class="h5"><?php echo $_smarty_tpl->tpl_vars['datas']->value['observacao'];?>
</td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <br class="clear">
                            <hr class="clear">
                        </div>

                    </div>


                </div>




                <?php $_smarty_tpl->_assignInScope('isTitlePay', "0" ,true);?>
                <?php $_smarty_tpl->_assignInScope('isTitleCodReferencia', "0" ,true);?>
                <?php if (isset($_smarty_tpl->tpl_vars['datas']->value['titulos']) && COUNT($_smarty_tpl->tpl_vars['datas']->value['titulos'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value['titulos'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'PAG') {?>
                <?php $_smarty_tpl->_assignInScope('isTitlePay', 1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['cod_referencia'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('isTitleCodReferencia', 1);?>
                <?php }?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Titles to Receive'),$_smarty_tpl ) );?>
</h3>
                <div>
                    <button type="button" class="btn btn-default btn-action" disabled 
                            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Receive Payment'),$_smarty_tpl ) );?>
"  onClick="Financialreceipt.receivePaymentTitle()" id="receivePaymentTitle">
                        <i class="fal fa-donate fa-lg green disabled"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Receive Payment'),$_smarty_tpl ) );?>

                    </button>  

                    <?php if (!$_smarty_tpl->tpl_vars['datas']->value['id_config_gateway_pagamento']) {?>
                    <button type="button" class="btn btn-default btn-action" disabled 
                            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pending'),$_smarty_tpl ) );?>
"  onClick="Financialreceipt.cancelPaymentTitle()" id="cancelPaymentTitle">
                        <i class="fal fa-hourglass-half fa-lg blue disabled"></i> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pending'),$_smarty_tpl ) );?>

                    </button>
                    <?php }?>

                                    </div>

                <hr class="clear">

                <form id="formTitulos"> 
                    <div >

                        <table class="table listaTitulo no-align-last-cell">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
</th>
                                    <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Due'),$_smarty_tpl ) );?>
</th>                                    
                                    <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pay day'),$_smarty_tpl ) );?>
</th>                  
                                    <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</th>
                                    <th scope="col">		  		
                                        <div style="margin-right:3px;"> 
                                            <label class="check">
                                                <input type="checkbox" class="icheckbox" value="1" 
                                                       <?php if (isset($_smarty_tpl->tpl_vars['datas']->value['titulos']) && COUNT($_smarty_tpl->tpl_vars['datas']->value['titulos'])) {?>					
                                                       <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'APR') {?> id="selecionaTudos" <?php } else { ?> disabled <?php }?>		
                                                       name="selecionaTudos"
                                                       <?php } else { ?>
                                                       disabled 
                                                       <?php }?>

                                                       />
                                            </label>						
                                        </div>

                                    </th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody> 

                                <?php if (isset($_smarty_tpl->tpl_vars['datas']->value['titulos']) && COUNT($_smarty_tpl->tpl_vars['datas']->value['titulos'])) {?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value['titulos'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>


                            <tr id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="itemTitle 
                                <?php if (($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'PAG' && $_smarty_tpl->tpl_vars['item']->value['vencido'])) {?>bgDetalheTitulo<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'PAG') {?>green<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'CAN') {?>red<?php }?>">
                            <td scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value['parcela'];?>
</td>
                            <input type="hidden" name="titulos[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][id]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"/>			 
                            <input type="hidden" name="titulos[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][vencido]" on value="<?php if (($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'PAG' && $_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'CAN') && $_smarty_tpl->tpl_vars['item']->value['vencido']) {?>1<?php } else { ?>0<?php }?>"/>
                            <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['valor'],2,",",'');?>
</td>
                            <td <?php if ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'PAG' && $_smarty_tpl->tpl_vars['item']->value['vencido']) {?>class="red"<?php }?>>
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['data_vencimento'],"%d/%m/%Y");?>


                                <?php if (($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'PAG' && $_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'CAN') && $_smarty_tpl->tpl_vars['item']->value['vencido']) {?>

                                <i class="fal fa-2x fa-exclamation-circle link" data-container="body" data-toggle="popover" 
                               data-placement="top" title data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Expired Title'),$_smarty_tpl ) );?>
"></i>

                                <?php }?>
                            </td>
                       
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] != 'APR' || $_smarty_tpl->tpl_vars['item']->value['data_pagamento']) {?>
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['data_pagamento'],"%d/%m/%Y");?>

                                <?php } else { ?>
                                <input type="text" style="width:70px;" class="date-picker-payment"
                                       data-start-date="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['data_movimento'],"%d/%m/%Y");?>
" 

                                       <?php if (!$_smarty_tpl->tpl_vars['item']->value['vencido']) {?>
                                       data-end-date="<?php echo smarty_modifier_date_format(NULL,"%d/%m/%Y");?>
"
                                       <?php }?>

                                       readonly="readonly" name="titulos[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][data_pagamento]"  maxlegth="18"
                                       value="<?php echo smarty_modifier_date_format(NULL,"%d/%m/%Y");?>
"/>


                                       <?php }?>
                            </td>
                            
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status_pagamento'];?>
</td> 
                          
                            <td style="width: 20px; text-align: right">
                                <div class="pull-left" style="margin-right:3px;"> 
                                    <label class="check">
                                        <input type="checkbox" class="icheckbox <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'APR') {?>selecionaTitulo<?php }?>" 
                                               <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] != 'APR' || ($_smarty_tpl->tpl_vars['datas']->value['id_config_gateway_pagamento'] && $_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'PAG')) {?> disabled <?php }?>
                                               value="1" name="titulos[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][flag]"/>
                                    </label>
                                </div>
                            </td>
                            
                            <td class="cellLast" style="width: 20px;">
                                <?php if (!($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'PAG' && $_smarty_tpl->tpl_vars['item']->value['vencido'])) {?>
                                <i class="fa fa-plus-circle fa-2x btnViewPlus"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'See Details'),$_smarty_tpl ) );?>
" onclick="Financialreceipt.toggleViewPlusItem(this, '<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')"></i>
                                <?php }?>
                            </td>                            
                                                        
                            </tr>
                            
                            
                             <tr class="<?php if (!($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'PAG' && $_smarty_tpl->tpl_vars['item']->value['vencido'])) {?>toggleViewPlusItem<?php }?> bgDetalheTitulo" id="toggle_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                            <td colspan="7" class="bgViewPlusItem no-align-last-cell">  
                                
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['numero_documento']) {?>
                                <div class="col-md-3 col-xs-12 info-content">
                                    <label class="info-label"><?php if ($_smarty_tpl->tpl_vars['datas']->value['id_config_gateway_pagamento']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Ref.'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Doc.'),$_smarty_tpl ) );
}?></label>
                                    <div class="info-data">
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['numero_documento'];?>

                                    </div>
                                </div>
                                <?php }?>

                                 <div class="col-md-3 col-xs-12 info-content">
                                    <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Amount Paid'),$_smarty_tpl ) );?>
</label>
                                    <div class="info-data">
                                           <?php if (($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'APR' && ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'PAG' && $_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] != 'CAN')) && $_smarty_tpl->tpl_vars['item']->value['vencido']) {?>
                                    <input type="text" class="decimal_str" style="width:70px;" name="titulos[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][valor]"  maxlegth="18"
                                       value="<?php if ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'PAG' && $_smarty_tpl->tpl_vars['item']->value['valor_pagamento'] > 0) {
echo number_format($_smarty_tpl->tpl_vars['item']->value['valor_pagamento'],2,",",'');
} else {
echo number_format($_smarty_tpl->tpl_vars['item']->value['valor'],2,",",'');
}?>"/>

                                       <?php } else { ?>
                                       <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['valor_pagamento'],2,",",'');?>

                                       <?php }?>
                                    </div>
                                </div>
                                

                                <?php if ($_smarty_tpl->tpl_vars['item']->value['boleto_codigo_linha_digitavel']) {?>                                    
                                <div class="col-md-3 col-xs-12 info-content">
                                    <label class="info-label">Boleto</label>
                                    <div class="info-data">
                                        <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] != 'CAN' && $_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'PEN') {?>
                                    <i class="far fa-barcode fa-2x link blue" 

                                       onclick="Financialreceipt.verBoleto({
                                                   codigo : '<?php echo $_smarty_tpl->tpl_vars['item']->value['boleto_codigo_linha_digitavel'];?>
', 
                                                   valor: '<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['valor'],2,",",'');?>
', 
                                                   vencimento: '<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['data_vencimento'],"%d/%m/%Y");?>
',
                                                   numDoc: '<?php echo $_smarty_tpl->tpl_vars['item']->value['numero_documento'];?>
',
                                                   agenciaCodCedente: '<?php echo $_smarty_tpl->tpl_vars['item']->value['banco'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['agencia'];?>
',
                                                   nossoNumero: '<?php echo $_smarty_tpl->tpl_vars['item']->value['nosso_numero'];?>
',
                                                   observacao: '<?php if ($_smarty_tpl->tpl_vars['datas']->value['quantidade_parcela'] > 1) {?><br>Parcela: <?php echo $_smarty_tpl->tpl_vars['item']->value['parcela'];?>
/<?php echo $_smarty_tpl->tpl_vars['datas']->value['quantidade_parcela'];
}?>',
                                               } )" 

                                      > <span> Imprimir</span></i>
                                    <?php } else { ?>
                                    <i class="fa fa-barcode fa-2x disabled"></i>
                                    <?php }?>
                                    <br>
                                    </div>
                                </div>
                                <?php }?>
                                     
                                <br>
                                </td>
                            </tr>
                            

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            </tbody>
                        </table> 
                    </div>
                </form>
                <br class="clear">
                <?php }?>


                <?php echo '<script'; ?>
>
                    $('.popover, .toggleViewPlusItem').hide();
                    // 

                    if ($(".icheckbox").length > 0) {
                        $(".icheckbox,.iradio").iCheck({checkboxClass: 'icheckbox_minimal-grey', radioClass: 'iradio_minimal-grey'});
                    }
                    
                    $("#boxDatas").tooltip({selector: '[data-toggle="tooltip"]', container: "body"});
                    $("[data-toggle=popover]").popover();
                    $(".popover-dismiss").popover({trigger: 'focus'});
                   
                    $("#selecionaTudos").each(function () {
                        $(this).next("ins").attr("onclick", 'selecionaTodos()');
                    });
                    $(".selecionaTitulo").each(function () {
                        $(this).next("ins").attr("onclick", 'selecionaTitulo()');
                    });


                    // 

                    <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'CAN') {?>
                    $('#approveMovement, #rejectMovement, #receivePayment, #cancelMovement').attr('disabled', true);
                    $('#approveMovement i, #rejectMovement i, #receivePayment i, #cancelMovement i').addClass('disabled');
                    // <?php } else { ?>

                    var flag = ("<?php echo intval($_smarty_tpl->tpl_vars['isTitlePay']->value);?>
" == '1');
                    $('#approveMovement, #rejectMovement,  #cancelMovement').attr('disabled', flag);
                            $('#approveMovement i, #rejectMovement i,  #cancelMovement i').<?php if ($_smarty_tpl->tpl_vars['isTitlePay']->value) {?>
                    add// <?php } else { ?>
                    remove<?php }?>Class('disabled');

                    <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_movimento_valor'] == 'PRC') {?>

                    $('#approveMovement').attr('disabled', false);
                    $('#approveMovement i').removeClass('disabled');
                    <?php }?>


                    <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'APR') {?>

                    <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'CTD') {?>

                    $('#receivePayment').attr('disabled', true);
                    $('#receivePayment i').addClass('disabled');
                    // <?php } else { ?>

                    $('#receivePayment').attr('disabled', flag);
                            $('#receivePayment i').<?php if ($_smarty_tpl->tpl_vars['isTitlePay']->value) {?>
                    add//<?php } else { ?>
                    remove<?php }?>Class('disabled');
                    <?php }?>
                    $('#approveMovement').attr('disabled', true);
                    $('#approveMovement i').addClass('disabled');
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['isTitleCodReferencia']->value == 1 || $_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'REJ' || $_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'CTD') {?>
                    $('#rejectMovement').attr('disabled', true);
                    $('#rejectMovement i').addClass('disabled');

                    <?php }?>


                    <?php if (!$_smarty_tpl->tpl_vars['datas']->value['id_config_gateway_pagamento']) {?>

                    $('#cancelMovement').attr('disabled', false);
                    $('#cancelMovement i').removeClass('disabled');
                    <?php }?>

                    <?php }?>
                    loadDatepicker('.date-picker-payment', true, false, false);
                    
                    $('#boxDatas').find('.decimal_str').on('keyup', function () {
                        keySomenteNumero(this, true, false);
                        if ($(this).val() < 0){
                            $(this).value(0);
                        }
                        aplicarMascaraMoeda(this);
                    });

                <?php echo '</script'; ?>
>


                <?php if (!isset($_smarty_tpl->tpl_vars['datas']->value['titulos']) || !COUNT($_smarty_tpl->tpl_vars['datas']->value['titulos'])) {?>

                <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'APR') {?>

                <?php if (($_smarty_tpl->tpl_vars['datas']->value['vencido'] && $_smarty_tpl->tpl_vars['datas']->value['status_valor'] != 'CTD') || ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'CTD' && ($_smarty_tpl->tpl_vars['datas']->value['valor_pagamento'] != $_smarty_tpl->tpl_vars['datas']->value['valor']))) {?>
                <?php if ($_smarty_tpl->tpl_vars['datas']->value['vencido'] && $_smarty_tpl->tpl_vars['datas']->value['status_valor'] != 'CTD') {?>
                <div class="row col-md-12 col-xs-12">
                    <div class="alert alert-danger alert-small" role="alert">
                        <i class="far fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Delayed receipt'),$_smarty_tpl ) );?>
!
                    </div>
                </div>
                <?php }?>
                <div class="col-md-12 col-xs-12"> 
                    <div class="col-md-5 col-xs-12"> 
                        <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Amount Received'),$_smarty_tpl ) );?>
</label>
                        <input type="text" class="form-control decimal_str" <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] != 'CTD') {?>  id="valor_pagamento" name="valor_pagamento" <?php } else { ?> readonly="readonly" <?php }?> placeholder="0.00" maxlegth="18"
                               value="<?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'CTD' && $_smarty_tpl->tpl_vars['datas']->value['valor_pagamento'] > 0) {
echo number_format($_smarty_tpl->tpl_vars['datas']->value['valor_pagamento'],2,",",'');
}?>"/>

                    </div>
                    <?php } else { ?>
                    <div class="col-md-12 col-xs-12"> 
                        <?php }?>


                        <div class="col-md-5 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pay day'),$_smarty_tpl ) );?>
</label>
                            <input type="text"	
                                   class="form-control <?php if (!$_smarty_tpl->tpl_vars['datas']->value['data_pagamento']) {?> date-picker-payment <?php }?>" 
                                   data-start-date="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['data_movimento'],"%d/%m/%Y");?>
"
                                   data-end-date="<?php echo smarty_modifier_date_format(NULL,"%d/%m/%Y");?>
"

                                   readonly="readonly" <?php if (!$_smarty_tpl->tpl_vars['datas']->value['data_pagamento']) {?>  id="data_pagamento" name="data_pagamento" <?php }?>  maxlegth="8"
                                   value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['data_pagamento'],"%d/%m/%Y");?>
"/>
                        </div>
                    </div>
                    <?php }?>

                    <?php } elseif (!empty($_smarty_tpl->tpl_vars['datas']->value['status_movimento'])) {?>
                    <hr class="clear">



                    <?php echo '<script'; ?>
>
                        $(document).ready(function () {

                            <?php if ($_smarty_tpl->tpl_vars['datas']->value['status_valor'] == 'APR') {?>

                            $('#receivePaymentTitle, #cancelPaymentTitle, #cancelTitle').attr('disabled', false);
                            $('#receivePaymentTitle i, #cancelPaymentTitle i, #cancelTitle i').removeClass('disabled');

                            <?php }?>

                            //

                            $('#listaTitulo').DataTable({
                                "paging": false,
                                "ordering": false,
                                "info": false
                            });
                            $('#receivePayment').attr('disabled', true);
                            $('#receivePayment i').addClass('disabled');
                          

                        });
                        function aplicarMascaraMoeda(selector) {
                            var chars = $(selector).val();
                            var charsCount = chars.length;
                            var numbers = chars.toString().replace(/\D/g, "");
                            var numbersCount = numbers.length;
                            var moeda = mascaraMoeda(numbers.substring(0, 8), ',');
                            $(selector).val(moeda);
                        }
                        function selecionaTodos() {
                            clearNoty(); 
                          
                            var flag = $('#selecionaTudos').is(':checked');
                            var elemItem = $('#formTitulos .selecionaTitulo').not(':disabled');
                                                  
                            elemItem.val(!flag ? '1' : '0').attr('checked', flag);
                            elemItem.iCheck(!flag ? 'uncheck' : 'check');
                            elemItem.iCheck('update');
                        }

                        function selecionaTitulo() {
                            clearNoty();
                            var total = 0;
                            var totalSelecionado = 0;
                            setTimeout(function () {
                                $('#formTitulos').find('.selecionaTitulo').not(':disabled').each(function (e) {
                                    total++;
                                    if ($(this).is(':checked')) {
                                        totalSelecionado++;
                                    }
                                });
                                $('#selecionaTudos').iCheck(totalSelecionado == total ? 'check' : 'uncheck');
                            }, 100);
                        }

                        //

                    <?php echo '</script'; ?>
>

                    <?php }?>



<p class="clear">
<div class="modal fade" id="modalBoleto" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>                
                <h4 class="modal-title" id="titleModalHead"><a href="javascript:Financialreceipt.printBoleto()"><i class="fa fa-print"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Print'),$_smarty_tpl ) );?>
</a></h4>
            </div>
            <div class="modal-body modalScrollVerticalLg">
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/boleto.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('datas'=>$_smarty_tpl->tpl_vars['datas']->value), 0, true);
?>
            </div>
        </div>
    </div>        
</div>


<?php }
}
