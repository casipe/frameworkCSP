<?php
/* Smarty version 3.1.33, created on 2020-12-14 22:52:39
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/cashflow/result.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd816e74fdfa2_15523390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c39f0de14a8f03964ec0ca9725265030ce653be' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/cashflow/result.phtml',
      1 => 1607984635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd816e74fdfa2_15523390 (Smarty_Internal_Template $_smarty_tpl) {
if (COUNT($_smarty_tpl->tpl_vars['datas']->value['movimentos'])) {?>

<table class="table table-bordered no-align-last-cell">
    <thead>
        <tr> 
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getMonths']->value, 'desc', false, 'int');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['int']->value => $_smarty_tpl->tpl_vars['desc']->value) {
?>		
            <th class="uppercase" style="font-size:13px !important;"><?php echo mb_substr($_smarty_tpl->tpl_vars['desc']->value,0,3);?>
</th> 
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total'),$_smarty_tpl ) );?>
 (R$)</th> 
        </tr>
    </thead>
    <tbody>

        <?php $_smarty_tpl->_assignInScope('totalGeralReceita', 0);?>	
        <?php $_smarty_tpl->_assignInScope('totalGeralDespesa', 0);?>	
        <?php $_smarty_tpl->_assignInScope('totalMesesReceita', array());?>
        <?php $_smarty_tpl->_assignInScope('totalMesesDespesa', array());?>
        <?php $_smarty_tpl->_assignInScope('conta', array());?>

        <tr><td colspan="14"><br><b>(+) <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Revenues'),$_smarty_tpl ) );?>
</b></td></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value['movimentos'], 'movimentos', false, 'tipoMovimento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tipoMovimento']->value => $_smarty_tpl->tpl_vars['movimentos']->value) {
?>	

        <?php if ($_smarty_tpl->tpl_vars['tipoMovimento']->value == 'R') {?>
        <?php $_smarty_tpl->_assignInScope('totalGeralPlano', array());?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movimentos']->value, 'items', false, 'planoConta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['planoConta']->value => $_smarty_tpl->tpl_vars['items']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('conta', explode("_",$_smarty_tpl->tpl_vars['planoConta']->value));?>					
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['conta']->value[1];?>
</td>					
            <?php $_smarty_tpl->_assignInScope('totalPlano', 0);?>					
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getMonths']->value, 'mes_desc', false, 'mes_int');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mes_int']->value => $_smarty_tpl->tpl_vars['mes_desc']->value) {
?>	
            <?php $_smarty_tpl->_assignInScope('totalMes', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'mes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>	
            <?php if ($_smarty_tpl->tpl_vars['mes']->value == $_smarty_tpl->tpl_vars['mes_int']->value) {?>
            <?php $_smarty_tpl->_assignInScope('totalMes', $_smarty_tpl->tpl_vars['totalMes']->value+$_smarty_tpl->tpl_vars['item']->value['total']);?>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            <?php $_smarty_tpl->_assignInScope('totalPlano', $_smarty_tpl->tpl_vars['totalPlano']->value+$_smarty_tpl->tpl_vars['totalMes']->value);?>
            <?php if (empty($_smarty_tpl->tpl_vars['totalGeralPlano']->value[$_smarty_tpl->tpl_vars['mes_int']->value])) {?> 
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['totalGeralPlano']) ? $_smarty_tpl->tpl_vars['totalGeralPlano']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['mes_int']->value] = $_smarty_tpl->tpl_vars['totalMes']->value;
$_smarty_tpl->_assignInScope('totalGeralPlano', $_tmp_array);?>
            <?php } else { ?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['totalGeralPlano']) ? $_smarty_tpl->tpl_vars['totalGeralPlano']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['mes_int']->value] = $_smarty_tpl->tpl_vars['totalGeralPlano']->value[$_smarty_tpl->tpl_vars['mes_int']->value]+$_smarty_tpl->tpl_vars['totalMes']->value;
$_smarty_tpl->_assignInScope('totalGeralPlano', $_tmp_array);?>
            <?php }?>

            <?php if (empty($_smarty_tpl->tpl_vars['totalMesesReceita']->value[$_smarty_tpl->tpl_vars['mes_int']->value])) {?> 
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['totalMesesReceita']) ? $_smarty_tpl->tpl_vars['totalMesesReceita']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['mes_int']->value] = $_smarty_tpl->tpl_vars['totalMes']->value;
$_smarty_tpl->_assignInScope('totalMesesReceita', $_tmp_array);?>
            <?php } else { ?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['totalMesesReceita']) ? $_smarty_tpl->tpl_vars['totalMesesReceita']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['mes_int']->value] = $_smarty_tpl->tpl_vars['totalMesesReceita']->value[$_smarty_tpl->tpl_vars['mes_int']->value]+$_smarty_tpl->tpl_vars['totalMes']->value;
$_smarty_tpl->_assignInScope('totalMesesReceita', $_tmp_array);?>
            <?php }?>


            <td> <?php echo number_format($_smarty_tpl->tpl_vars['totalMes']->value,2,",",".");?>
</td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>						
            <td class="bold"> <?php echo number_format($_smarty_tpl->tpl_vars['totalPlano']->value,2,",",".");?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <tr>				
            <td class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total'),$_smarty_tpl ) );?>
</td>
            <?php $_smarty_tpl->_assignInScope('totalGeralMov', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['totalGeralPlano']->value, 'total');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['total']->value) {
?>					
            <td class="bold"> <?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,",",".");?>
</td>
            <?php $_smarty_tpl->_assignInScope('totalGeralMov', $_smarty_tpl->tpl_vars['totalGeralMov']->value+$_smarty_tpl->tpl_vars['total']->value);?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <td class="bold"> <?php echo number_format($_smarty_tpl->tpl_vars['totalGeralMov']->value,2,",",".");?>
</td>
            <?php $_smarty_tpl->_assignInScope('totalGeralReceita', $_smarty_tpl->tpl_vars['totalGeralMov']->value);?>
        </tr>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <tr><td colspan="14" style="border-top: 0px solid #ddd;"><br><br><b class="red redReport">(-) <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Expenses'),$_smarty_tpl ) );?>
</b></td></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value['movimentos'], 'movimentos', false, 'tipoMovimento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tipoMovimento']->value => $_smarty_tpl->tpl_vars['movimentos']->value) {
?>	

        <?php if ($_smarty_tpl->tpl_vars['tipoMovimento']->value == 'D') {?>
        <?php $_smarty_tpl->_assignInScope('totalGeralPlano', array());?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movimentos']->value, 'items', false, 'planoConta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['planoConta']->value => $_smarty_tpl->tpl_vars['items']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('conta', explode("_",$_smarty_tpl->tpl_vars['planoConta']->value));?>					
        <tr class="red">
            <td><?php echo $_smarty_tpl->tpl_vars['conta']->value[1];?>
</td>					
            <?php $_smarty_tpl->_assignInScope('totalPlano', 0);?>					
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getMonths']->value, 'mes_desc', false, 'mes_int');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mes_int']->value => $_smarty_tpl->tpl_vars['mes_desc']->value) {
?>	
            <?php $_smarty_tpl->_assignInScope('totalMes', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'mes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>	
            <?php if ($_smarty_tpl->tpl_vars['mes']->value == $_smarty_tpl->tpl_vars['mes_int']->value) {?>
            <?php $_smarty_tpl->_assignInScope('totalMes', $_smarty_tpl->tpl_vars['totalMes']->value+$_smarty_tpl->tpl_vars['item']->value['total']);?>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            <?php $_smarty_tpl->_assignInScope('totalPlano', $_smarty_tpl->tpl_vars['totalPlano']->value+$_smarty_tpl->tpl_vars['totalMes']->value);?>
            <?php if (empty($_smarty_tpl->tpl_vars['totalGeralPlano']->value[$_smarty_tpl->tpl_vars['mes_int']->value])) {?> 
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['totalGeralPlano']) ? $_smarty_tpl->tpl_vars['totalGeralPlano']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['mes_int']->value] = $_smarty_tpl->tpl_vars['totalMes']->value;
$_smarty_tpl->_assignInScope('totalGeralPlano', $_tmp_array);?>
            <?php } else { ?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['totalGeralPlano']) ? $_smarty_tpl->tpl_vars['totalGeralPlano']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['mes_int']->value] = $_smarty_tpl->tpl_vars['totalGeralPlano']->value[$_smarty_tpl->tpl_vars['mes_int']->value]+$_smarty_tpl->tpl_vars['totalMes']->value;
$_smarty_tpl->_assignInScope('totalGeralPlano', $_tmp_array);?>
            <?php }?>

            <?php if (empty($_smarty_tpl->tpl_vars['totalMesesDespesa']->value[$_smarty_tpl->tpl_vars['mes_int']->value])) {?> 
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['totalMesesDespesa']) ? $_smarty_tpl->tpl_vars['totalMesesDespesa']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['mes_int']->value] = $_smarty_tpl->tpl_vars['totalMes']->value;
$_smarty_tpl->_assignInScope('totalMesesDespesa', $_tmp_array);?>
            <?php } else { ?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['totalMesesDespesa']) ? $_smarty_tpl->tpl_vars['totalMesesDespesa']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['mes_int']->value] = $_smarty_tpl->tpl_vars['totalMesesDespesa']->value[$_smarty_tpl->tpl_vars['mes_int']->value]+$_smarty_tpl->tpl_vars['totalMes']->value;
$_smarty_tpl->_assignInScope('totalMesesDespesa', $_tmp_array);?>
            <?php }?>


            <td> <?php echo number_format($_smarty_tpl->tpl_vars['totalMes']->value,2,",",".");?>
</td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>						
            <td class="bold"> <?php echo number_format($_smarty_tpl->tpl_vars['totalPlano']->value,2,",",".");?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <tr class="red">				
            <td class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total'),$_smarty_tpl ) );?>
</td>
            <?php $_smarty_tpl->_assignInScope('totalGeralMov', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['totalGeralPlano']->value, 'total');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['total']->value) {
?>					
            <td class="bold"> <?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,",",".");?>
</td>
            <?php $_smarty_tpl->_assignInScope('totalGeralMov', $_smarty_tpl->tpl_vars['totalGeralMov']->value+$_smarty_tpl->tpl_vars['total']->value);?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <td class="bold"> <?php echo number_format($_smarty_tpl->tpl_vars['totalGeralMov']->value,2,",",".");?>
</td>
            <?php $_smarty_tpl->_assignInScope('totalGeralDespesa', $_smarty_tpl->tpl_vars['totalGeralMov']->value);?>
        </tr>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        
        <tr><td colspan="14" style="border-top: 0px solid #ddd;"><br><br></td></tr> 
        <tr class="bold">
            <td>(=) <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Balance'),$_smarty_tpl ) );?>
</td>

            <?php $_smarty_tpl->_assignInScope('totalReceita', 0);?>
            <?php $_smarty_tpl->_assignInScope('totalDespesa', 0);?>
            <?php $_smarty_tpl->_assignInScope('totalSaldo', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getMonths']->value, 'desc', false, 'mes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->value => $_smarty_tpl->tpl_vars['desc']->value) {
?>		

            <?php if (ISSET($_smarty_tpl->tpl_vars['totalMesesReceita']->value[$_smarty_tpl->tpl_vars['mes']->value])) {?>
            <?php $_smarty_tpl->_assignInScope('totalReceita', $_smarty_tpl->tpl_vars['totalMesesReceita']->value[$_smarty_tpl->tpl_vars['mes']->value]);?>					
            <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('totalReceita', 0);?>
            <?php }?>

            <?php if (ISSET($_smarty_tpl->tpl_vars['totalMesesDespesa']->value[$_smarty_tpl->tpl_vars['mes']->value])) {?>
            <?php $_smarty_tpl->_assignInScope('totalDespesa', $_smarty_tpl->tpl_vars['totalMesesDespesa']->value[$_smarty_tpl->tpl_vars['mes']->value]);?>
            <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('totalDespesa', 0);?>
            <?php }?>

            <td class="white <?php if ($_smarty_tpl->tpl_vars['totalReceita']->value-$_smarty_tpl->tpl_vars['totalDespesa']->value < 0) {?>bg-red redReport <?php } else { ?>bg-blue blueReport<?php }?>">
                <?php echo number_format($_smarty_tpl->tpl_vars['totalReceita']->value-$_smarty_tpl->tpl_vars['totalDespesa']->value,2,",",".");?>
 
            </td>
            <?php $_smarty_tpl->_assignInScope('totalSaldo', $_smarty_tpl->tpl_vars['totalSaldo']->value+($_smarty_tpl->tpl_vars['totalReceita']->value-$_smarty_tpl->tpl_vars['totalDespesa']->value));?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <td class="white <?php if ($_smarty_tpl->tpl_vars['totalSaldo']->value < 0) {?>bg-red redReport<?php } else { ?>bg-blue blueReport<?php }?>">
                <?php echo number_format($_smarty_tpl->tpl_vars['totalSaldo']->value,2,",",".");?>
 
            </td>
        </tr>



    </tbody>
</table>
<?php }
}
}
