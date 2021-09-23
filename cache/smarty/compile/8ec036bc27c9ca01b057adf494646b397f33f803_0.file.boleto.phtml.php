<?php
/* Smarty version 3.1.33, created on 2020-12-14 19:36:00
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/financialreceipt/boleto.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd7e8d0771510_11805810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ec036bc27c9ca01b057adf494646b397f33f803' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/financialreceipt/boleto.phtml',
      1 => 1607984635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd7e8d0771510_11805810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<table cellSpacing=0 cellPadding=0 border=0 class="Boleto">

    <tr>
        <td style='width: 0.9cm'></td>
        <td style='width: 1cm'></td>
        <td style='width: 1.9cm'></td>

        <td style='width: 0.5cm'></td>
        <td style='width: 1.3cm'></td>
        <td style='width: 0.8cm'></td>
        <td style='width: 1cm'></td>

        <td style='width: 1.9cm'></td>
        <td style='width: 1.9cm'></td>

        <td style='width: 3.8cm'></td>

        <td style='width: 3.8cm'></td>
    <tr><td colspan=11>
            <ul class="BoletoInstrucoes">
                <li>Imprima em papel A4 ou Carta</li>
                <li>Utilize margens mínimas a direita e a esquerda</li>
                <li>Recorte na linha pontilhada</li>
                <li>Não rasure o código de barras</li>
            </ul>
        </td></tr>
</tr>

<tr><td colspan=11 class="BoletoPontilhado">&nbsp;</td></tr>  
<tr>
    <td colspan=4 class="BoletoLogo"><b>Boleto</b></td>
    <td colspan=2 class="BoletoCodigoBanco" id="codigoBanco"></td>
    <td colspan=6 class="BoletoLinhaDigitavel" id="codigoLinha"></td>
</tr>
<tr>
    <td colspan=10 class="BoletoTituloEsquerdo">Local de Pagamento</td>
    <td class="BoletoTituloDireito">Vencimento</td>
</tr>
<tr>
    <td colspan=10 class="BoletoValorEsquerdo" style='text-align: left !important; padding-left : 0.1cm !important'>Pagável em qualquer agência bancária</td>
    <td class="BoletoValorDireito" id="dataVencimento"></td>
</tr>  
<tr>
    <td colspan=10 class="BoletoTituloEsquerdo">Cedente</td>
    <td class="BoletoTituloDireito">Agência/Código do Cedente</td>
</tr>
<tr>
    <td colspan=10 class="BoletoValorEsquerdo" style='text-align: left !important; padding-left : 0.1cm !important'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'CONDOMINIUM'),$_smarty_tpl ) );?>
  - CNPJ: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'CNPJ_CONDOMINIUM'),$_smarty_tpl ) );?>
</td>
    <td class="BoletoValorDireito" id="agenciaCodCedente"></td>
</tr>   
<tr>
    <td colspan=3 class="BoletoTituloEsquerdo">Data do Documento</td>
    <td colspan=4 class="BoletoTituloEsquerdo">Número do Documento</td>
    <td class="BoletoTituloEsquerdo">Espécie</td>
    <td class="BoletoTituloEsquerdo">Aceite</td>
    <td class="BoletoTituloEsquerdo">Data do Processamento</td>
    <td class="BoletoTituloDireito">Nosso Número</td>
</tr>
<tr>
    <td colspan=3 class="BoletoValorEsquerdo"><?php echo smarty_modifier_date_format(null,"%d/%m/%Y");?>
</td>
    <td colspan=4 class="BoletoValorEsquerdo" id="numDocumento"></td>
    <td class="BoletoValorEsquerdo">RC</td>
    <td class="BoletoValorEsquerdo">N</td>
    <td class="BoletoValorEsquerdo"><?php if (isset($_smarty_tpl->tpl_vars['datas']->value['data_movimento'])) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['data_movimento'],"%d/%m/%Y");
}?></td>
    <td class="BoletoValorDireito" id="nossoNumero"></td>
</tr>  
<tr>
    <td colspan=3 class="BoletoTituloEsquerdo">Uso do Banco</td>
    <td colspan=2 class="BoletoTituloEsquerdo">Carteira</td>
    <td colspan=2 class="BoletoTituloEsquerdo">Moeda</td>
    <td colspan=2 class="BoletoTituloEsquerdo">Quantidade</td>
    <td class="BoletoTituloEsquerdo">(x) Valor</td>
    <td class="BoletoTituloDireito">(=) Valor do Documento</td>
</tr>
<tr>
    <td colspan=3 class="BoletoValorEsquerdo">&nbsp;</td>
    <td colspan=2 class="BoletoValorEsquerdo">SR</td>
    <td colspan=2 class="BoletoValorEsquerdo">R$</td>
    <td colspan=2 class="BoletoValorEsquerdo">&nbsp;</td>
    <td class="BoletoValorEsquerdo">&nbsp;</td>
    <td class="BoletoValorDireito" id="valorDocumento"></td>
</tr>  
<tr>
    <td colspan=10 class="BoletoTituloEsquerdo">Instrucões</td>
    <td class="BoletoTituloDireito">(-) Desconto</td>
</tr>
<tr>
    <td colspan=10 rowspan=9 class="BoletoValorEsquerdo" style='text-align: left !important; vertical-align:top !important; padding-left : 0.1cm !important'>
               
        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value['codigo'])) {?>Cód.: <?php echo $_smarty_tpl->tpl_vars['datas']->value['codigo'];?>
<br><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value['descricao'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['descricao'];?>
<br><?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'CONDOMINIUM'),$_smarty_tpl ) );?>

        <?php if ((!isset($_smarty_tpl->tpl_vars['datas']->value->tipo) || $_smarty_tpl->tpl_vars['datas']->value->tipo != 'C') && isset($_smarty_tpl->tpl_vars['datas']->value['observacao'])) {?><br><br><?php echo $_smarty_tpl->tpl_vars['datas']->value['observacao'];
}?>        
        <span id="observaoAux"></span>
    </td>
    <td class="BoletoValorDireito">&nbsp;</td>
</tr>  
<tr>
    <td class="BoletoTituloDireito">(-) Outras Deduções/Abatimento</td>
</tr>  
<tr>
    <td class="BoletoValorDireito">&nbsp;</td>
</tr>  
<tr>
    <td class="BoletoTituloDireito">(+) Mora/Multa/Juros</td>
</tr>  
<tr>
    <td class="BoletoValorDireito">&nbsp;</td>
</tr>  
<tr>
    <td class="BoletoTituloDireito">(+) Outros Acréscimos</td>
</tr>  
<tr>
    <td class="BoletoValorDireito">&nbsp;</td>
</tr>  
<tr>
    <td class="BoletoTituloDireito">(=) Valor Cobrado</td>
</tr>  
<tr>
    <td class="BoletoValorDireito">&nbsp;</td>
</tr>                
<tr>
    <td rowspan=3 Class="BoletoTituloSacado">Sacado:</td>
    <td colspan=8 Class="BoletoValorSacado"><?php if (isset($_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_nome'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_nome'];
}?></td>
    <td colspan=2 Class="BoletoValorSacado">        
        <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_doc'])) {?>
        <?php if (strlen($_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_doc']) <= 11) {?>
        CPF:  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['mask'][0], array( array('v'=>$_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_doc'],'m'=>'###.###.###-##'),$_smarty_tpl ) );?>

        <?php } else { ?>
        CNPJ: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['mask'][0], array( array('v'=>$_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_doc'],'m'=>'##.###.###/####-##'),$_smarty_tpl ) );?>

        <?php }?>
        <?php }?>
    </td>
</tr> 
<tr>
    <td colspan=10 Class="BoletoValorSacado"><?php if (isset($_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_endereco'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_endereco'];
}?></td>
</tr>
<tr>
    <td colspan=10 Class="BoletoValorSacado"> <?php if (isset($_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_email'])) {
echo $_smarty_tpl->tpl_vars['datas']->value['pagador_beneficiario_email'];
}?></td>
</tr>  
<tr>
    <td colspan=2 Class="BoletoTituloSacado"r>Sacador / Avalista:</td>
    <td colspan=9 Class="BoletoValorSacado"r><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'CONDOMINIUM'),$_smarty_tpl ) );?>
  - CNPJ: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'CNPJ_CONDOMINIUM'),$_smarty_tpl ) );?>
</td>
</tr>

<tr>
    <td colspan=11 class="BoletoTituloDireito" style='text-align: right !important; padding-right: 0.1cm !important'>Ficha de Compensação - Autenticação Mecânica</td>
</tr>

<tr>
    <td colspan=11 height=60 valign="top" class="CodigoBarra"><span id="imgCodigoBarra"></td>
</tr>
<tr><td colspan=11 class="BoletoPontilhado">&nbsp;</td></tr>  

</table>

<?php }
}
