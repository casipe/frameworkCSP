<?php
/* Smarty version 3.1.33, created on 2021-09-06 23:02:30
  from '/var/www/html/conndo.com.br/admin/templates/default/menu.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6136c83694d1d8_96940268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1fb4dd69f0ff1ffe2066978a11dd74f24dca64d' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/menu.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136c83694d1d8_96940268 (Smarty_Internal_Template $_smarty_tpl) {
?>

<li class="menuMain xn-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Navigation'),$_smarty_tpl ) );?>
</li>					
<li class="menu-link active" <?php if (empty($_smarty_tpl->tpl_vars['MIN_NAVIGATION']->value) || intval($_smarty_tpl->tpl_vars['MIN_NAVIGATION']->value) == 0) {
if (empty($_smarty_tpl->tpl_vars['menuAtivo']->value)) {?>menuAtivo<?php }
}?>">
    <a href="javascript:void(0);" page-load=""><span class="far fa-tachometer-alt-fast"> </span> <span class="xn-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Dashboard'),$_smarty_tpl ) );?>
 </span></a>
</li>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'
CONDOMINIO,
BLOCO,
UNIDADE,
PROPRIETARIO,
CONDOMINIO,
TERMOS_USO,
CONTA_GERENCIAL,
CENTRO_CUSTO,
BANCO,
TIPO_TITULO,
TIPO_DOCUMENTO,
DOCUMENTO,
FORNECEDOR,
TIPO_SERVICO,
FUNCIONARIO,
FUNCIONARIO_FUNCAO,
TIPO_ENCOMENDA
'),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9) {?>
<li class="menuMain  xn-openable">
    <a href="javascript:void(0);"><span class="far fa-database"></span> <span class="xn-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Register'),$_smarty_tpl ) );?>
</span></a>
    <ul> 

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>' CONDOMINIO, BLOCO, UNIDADE, PROPRIETARIO'),$_smarty_tpl ) );
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10) {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'CONDOMINIO'),$_smarty_tpl ) );
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11) {?>
        <li><a href="javascript:void(0);"  page-load="condominium"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Condominium'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'BLOCO'),$_smarty_tpl ) );
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12) {?>
        <li><a href="javascript:void(0);"  page-load="block"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'UNIDADE, PROPRIETARIO'),$_smarty_tpl ) );
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable13) {?>
        <li class="xn-openable ">
            <a href="javascript:void(0);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
</a>
            <ul>               
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'UNIDADE'),$_smarty_tpl ) );
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable14) {?>
                <li><a href="javascript:void(0);" page-load="unit"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'PROPRIETARIO'),$_smarty_tpl ) );
$_prefixVariable15 = ob_get_clean();
if ($_prefixVariable15) {?>
                <li><a href="javascript:void(0);" page-load="owner"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Owner'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>

            </ul>
        </li>
        <?php }?>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'CONDOMINIO'),$_smarty_tpl ) );
$_prefixVariable16 = ob_get_clean();
if ($_prefixVariable16) {?>
        <li class="xn-openable">
            <a href="javascript:void(0);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Common Area'),$_smarty_tpl ) );?>
</a>
            <ul>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'CONDOMINIO'),$_smarty_tpl ) );
$_prefixVariable17 = ob_get_clean();
if ($_prefixVariable17) {?>
                <li><a href="javascript:void(0);" page-load="commonarea"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Common Area'),$_smarty_tpl ) );?>
</a></li>

                <li><a href="javascript:void(0);" page-load="commonarearule"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Use Rule'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
            </ul>
        </li>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'TERMOS_USO'),$_smarty_tpl ) );
$_prefixVariable18 = ob_get_clean();
if ($_prefixVariable18) {?>
        <li><a href="javascript:void(0);"  page-load="termsuse"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Terms of Use'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'CONDOMINIO'),$_smarty_tpl ) );
$_prefixVariable19 = ob_get_clean();
if ($_prefixVariable19) {?>
        <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Communication'),$_smarty_tpl ) );?>
</a>
            <ul>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'CONDOMINIO'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
if ($_prefixVariable20) {?>
                <li><a href="javascript:void(0);" page-load="notice"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Notice'),$_smarty_tpl ) );?>
</a></li>

                <li><a href="javascript:void(0);" page-load="poll"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Poll'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
            </ul>
        </li>
        <?php }?>


        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'CONTA_GERENCIAL,CENTRO_CUSTO,BANCO,TIPO_TITULO,TIPO_DOCUMENTO'),$_smarty_tpl ) );
$_prefixVariable21 = ob_get_clean();
if ($_prefixVariable21) {?>
        <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
</a>
            <ul>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'CONTA_GERENCIAL'),$_smarty_tpl ) );
$_prefixVariable22 = ob_get_clean();
if ($_prefixVariable22) {?>
                <li><a href="javascript:void(0);" page-load="managementaccount"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'CENTRO_CUSTO'),$_smarty_tpl ) );
$_prefixVariable23 = ob_get_clean();
if ($_prefixVariable23) {?>
                <li><a href="javascript:void(0);"  page-load="costcenter"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cost Center'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'CENTRO_CUSTO'),$_smarty_tpl ) );
$_prefixVariable24 = ob_get_clean();
if ($_prefixVariable24) {?>
                <li><a href="javascript:void(0);"page-load="collectoragent"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Collector Agent'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'BANCO'),$_smarty_tpl ) );
$_prefixVariable25 = ob_get_clean();
if ($_prefixVariable25) {?>
                <li><a href="javascript:void(0);" page-load="bank"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>               
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'BANCO'),$_smarty_tpl ) );
$_prefixVariable26 = ob_get_clean();
if ($_prefixVariable26) {?>
                <li><a href="javascript:void(0);"  page-load="bankaccount"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank Account'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'TIPO_TITULO'),$_smarty_tpl ) );
$_prefixVariable27 = ob_get_clean();
if ($_prefixVariable27) {?>
                <li><a href="javascript:void(0);"  page-load="typetitle"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type of Title'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'TIPO_DOCUMENTO'),$_smarty_tpl ) );
$_prefixVariable28 = ob_get_clean();
if ($_prefixVariable28) {?>
                <li><a href="javascript:void(0);" page-load="documenttype"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document Type'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
            </ul>
        </li>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'DOCUMENTO'),$_smarty_tpl ) );
$_prefixVariable29 = ob_get_clean();
if ($_prefixVariable29) {?>
        <li><a href="javascript:void(0);"  page-load="document"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Files'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Documents'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>


        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'FORNECEDOR, TIPO_SERVICO'),$_smarty_tpl ) );
$_prefixVariable30 = ob_get_clean();
if ($_prefixVariable30) {?>
        <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Service'),$_smarty_tpl ) );?>
</a>
            <ul>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'FORNECEDOR'),$_smarty_tpl ) );
$_prefixVariable31 = ob_get_clean();
if ($_prefixVariable31) {?>
                <li><a href="javascript:void(0);" page-load="provider"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Provider'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'TIPO_SERVICO'),$_smarty_tpl ) );
$_prefixVariable32 = ob_get_clean();
if ($_prefixVariable32) {?>
                <li><a href="javascript:void(0);"  page-load="typeservice"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Service Type'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
            </ul>
        </li>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'EMPRESA'),$_smarty_tpl ) );
$_prefixVariable33 = ob_get_clean();
if ($_prefixVariable33) {?>
        <li><a href="javascript:void(0);" page-load="company"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Company'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'FUNCIONARIO,FUNCIONARIO_FUNCAO'),$_smarty_tpl ) );
$_prefixVariable34 = ob_get_clean();
if ($_prefixVariable34) {?>
        <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Employee'),$_smarty_tpl ) );?>
</a>
            <ul>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'FUNCIONARIO'),$_smarty_tpl ) );
$_prefixVariable35 = ob_get_clean();
if ($_prefixVariable35) {?>
                <li><a href="javascript:void(0);" page-load="employee"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Employee'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'FUNCIONARIO_FUNCAO'),$_smarty_tpl ) );
$_prefixVariable36 = ob_get_clean();
if ($_prefixVariable36) {?>
                <li><a href="javascript:void(0);" page-load="employeefunction"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Function'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
            </ul>
        </li>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'FUNCIONARIO, FUNCIONARIO_FUNCAO'),$_smarty_tpl ) );
$_prefixVariable37 = ob_get_clean();
if ($_prefixVariable37) {?>
        <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""></span> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Entrance'),$_smarty_tpl ) );?>
</span></a>
            <ul>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'TIPO_ENCOMENDA'),$_smarty_tpl ) );
$_prefixVariable38 = ob_get_clean();
if ($_prefixVariable38) {?>
                <li><a href="javascript:void(0);"  page-load="packagetype"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Package Type'),$_smarty_tpl ) );?>
</a></li>  
                <?php }?>
            </ul>
        </li> 
        <?php }?>
    </ul>
</li>
<?php }?>


<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'VISITANTE,ENTREGA_ENCOMENDA'),$_smarty_tpl ) );
$_prefixVariable39 = ob_get_clean();
if ($_prefixVariable39) {?>
<li class="menuMain  xn-openable">
    <a href="javascript:void(0);"><span class="far fa-car"></span> <span class="xn-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Entrance'),$_smarty_tpl ) );?>
</span></a>
    <ul>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'VISITANTE'),$_smarty_tpl ) );
$_prefixVariable40 = ob_get_clean();
if ($_prefixVariable40) {?>
        <li><a href="javascript:void(0);" page-load="visitor"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Visitor'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
        <?php if (_ENVIRONMENT_ === 'development') {?> 
        <li><a href="javascript:void(0);"  disabled ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Service Provider'),$_smarty_tpl ) );?>
</a></li>	
        <?php }?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'ENTREGA_ENCOMENDA'),$_smarty_tpl ) );
$_prefixVariable41 = ob_get_clean();
if ($_prefixVariable41) {?>
        <li><a href="javascript:void(0);"  page-load="package"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Package Receipt'),$_smarty_tpl ) );?>
</a></li> 
        <?php }?>

    </ul>
</li>  
<?php }?>


<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'SINDICO,ADMINISTRADORA'),$_smarty_tpl ) );
$_prefixVariable42 = ob_get_clean();
if ($_prefixVariable42) {?>
<li class="menuMain xn-openable">
    <a href="javascript:void(0);"><span class="far fa-user-tie"></span> <span class="xn-text"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Administrators'),$_smarty_tpl ) );?>
</span></a>
    <ul>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'SINDICO'),$_smarty_tpl ) );
$_prefixVariable43 = ob_get_clean();
if ($_prefixVariable43) {?>
        <li><a href="javascript:void(0);"  page-load="syndic"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Syndic'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'ADMINISTRADORA'),$_smarty_tpl ) );
$_prefixVariable44 = ob_get_clean();
if ($_prefixVariable44) {?>
        <li><a href="javascript:void(0);" page-load="administratrix"><span class="fa"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Administratrix'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
    </ul>
</li>
<?php }?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'AGENDAMENTO'),$_smarty_tpl ) );
$_prefixVariable45 = ob_get_clean();
if ($_prefixVariable45) {?>
<li class="menu-link">
    <a href="javascript:void(0);" page-load="scheduling"><span class="far fa-calendar"></span> <span class="xn-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Scheduling'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reservations'),$_smarty_tpl ) );?>
</span></a>
</li>
<?php }?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'ENQUETE,NOTIFICACAO,INDICACAO,CLASSIFICADOS'),$_smarty_tpl ) );
$_prefixVariable46 = ob_get_clean();
if ($_prefixVariable46) {?>
<li class="menuMain xn-openable">
    <a href="javascript:void(0);"><span class="far fa-users"></span> <span class="xn-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Dwellers'),$_smarty_tpl ) );?>
</span></a>
    <ul> 
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'ENQUETE'),$_smarty_tpl ) );
$_prefixVariable47 = ob_get_clean();
if ($_prefixVariable47) {?>
        <li><a href="javascript:void(0);" page-load="poll/result"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Poll Result'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>

        <?php if (_ENVIRONMENT_ === 'development') {?> 

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'ENQUETE'),$_smarty_tpl ) );
$_prefixVariable48 = ob_get_clean();
if ($_prefixVariable48) {?>
        <li><a href="javascript:void(0);" disabled "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Requests'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'NOTIFICACAO'),$_smarty_tpl ) );
$_prefixVariable49 = ob_get_clean();
if ($_prefixVariable49) {?>
        <li><a href="javascript:void(0);" disabled "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Notifications By Unit'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'INDICACAO'),$_smarty_tpl ) );
$_prefixVariable50 = ob_get_clean();
if ($_prefixVariable50) {?>
        <li><a href="javascript:void(0);" disabled "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Indications'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'CLASSIFICADOS'),$_smarty_tpl ) );
$_prefixVariable51 = ob_get_clean();
if ($_prefixVariable51) {?>
        <li><a href="javascript:void(0);" disabled "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Classifieds'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>

        <?php }?>
    </ul>

</li> 
<?php }?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'PREVISAO_ORCAMENTARIA,LANCAMENTOS,TESOURARIA,FLUXO_CAIXA'),$_smarty_tpl ) );
$_prefixVariable52 = ob_get_clean();
if ($_prefixVariable52) {?>
<li class="menuMain xn-openable">
    <a href="javascript:void(0);"><span class="far fa-calculator"></span> <span class="xn-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
</span></a>
    <ul>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'PREVISAO_ORCAMENTARIA'),$_smarty_tpl ) );
$_prefixVariable53 = ob_get_clean();
if ($_prefixVariable53) {?>
        <li><a href="javascript:void(0);" page-load="budget" ><span class=""> </span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Budget Forecast'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'LANCAMENTOS'),$_smarty_tpl ) );
$_prefixVariable54 = ob_get_clean();
if ($_prefixVariable54) {?>
        <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Entries'),$_smarty_tpl ) );?>
</a>
            <ul>                
                <li><a href="javascript:void(0);"  page-load="accountreceive"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Receive'),$_smarty_tpl ) );?>
</a></li>               
                <li><a href="javascript:void(0);" page-load="accountpay"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Pay'),$_smarty_tpl ) );?>
</a></li>               
            </ul>
        </li>
        <?php }?>


        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'TESOURARIA'),$_smarty_tpl ) );
$_prefixVariable55 = ob_get_clean();
if ($_prefixVariable55) {?>
        <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Treasury'),$_smarty_tpl ) );?>
</a>
            <ul>
                <li><a href="javascript:void(0);" page-load="financialreceipt" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Receipt'),$_smarty_tpl ) );?>
</a></li>
                <li><a href="javascript:void(0);" page-load="financialpayment" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Payment'),$_smarty_tpl ) );?>
</a></li>
                <?php if (_ENVIRONMENT_ === 'development') {?> 
                <li><a href="javascript:void(0);" page-load="financialshippingfile" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Process Shipping File'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
            </ul>
        </li>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'FLUXO_CAIXA'),$_smarty_tpl ) );
$_prefixVariable56 = ob_get_clean();
if ($_prefixVariable56) {?> 
        <li><a href="javascript:void(0);" page-load="cashflow"><span class=""> </span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cash Flow'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
        
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'LANCAMENTOS'),$_smarty_tpl ) );
$_prefixVariable57 = ob_get_clean();
if ($_prefixVariable57) {?>       
          <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reports'),$_smarty_tpl ) );?>
</a>
            <ul>
                 <li><a href="javascript:void(0);"  page-load="reportfinancial/accountreceive"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Receive'),$_smarty_tpl ) );?>
</a></li>               
                <li><a href="javascript:void(0);" page-load="reportfinancial/accountpay"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Pay'),$_smarty_tpl ) );?>
</a></li>                
                <li><a href="javascript:void(0);"  page-load="reportfinancial/invoicedueunit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Defaulter'),$_smarty_tpl ) );?>
</a></li>
            </ul>
        </li>        
        <?php }?>
        

    </ul>
</li>  
<?php }?>

<?php if (_ENVIRONMENT_ === 'development') {?> 
<li class="menuMain xn-openable">
    <a href="javascript:void(0);"><span class="far fa-dollar"></span> <span class="xn-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Collection'),$_smarty_tpl ) );?>
</span></a>
    <ul> 
        <li><a href="javascript:void(0);"    disabled ><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Negative Certificate'),$_smarty_tpl ) );?>
</a></li>
        <li><a href="javascript:void(0);"  disabled><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Defaulter'),$_smarty_tpl ) );?>
</a></li>
        <li><a href="javascript:void(0);"  disabled><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Settlement'),$_smarty_tpl ) );?>
</a></li>
    </ul>
</li> 
<?php }?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkModulesAccessMenu'][0], array( array('array'=>'USUARIO,ACESSO_PERFIL,CONFIGURACOES'),$_smarty_tpl ) );
$_prefixVariable58 = ob_get_clean();
if ($_prefixVariable58) {?>
<li class="menuMain xn-openable"> 
    <a href="javascript:void(0);"><span class="far fa-cogs"></span> <span class="xn-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Administration'),$_smarty_tpl ) );?>
</span></a>
    <ul>
        <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Security'),$_smarty_tpl ) );?>
</span></a>
            <ul>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'USUARIO'),$_smarty_tpl ) );
$_prefixVariable59 = ob_get_clean();
if ($_prefixVariable59) {?>
                <li><a href="javascript:void(0);"  page-load="user"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'User'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'ACESSO_PERFIL'),$_smarty_tpl ) );
$_prefixVariable60 = ob_get_clean();
if ($_prefixVariable60) {?>
                <li><a href="javascript:void(0);"  page-load="accessprofile"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Access Profile'),$_smarty_tpl ) );?>
</a></li>
                <?php }?>
            </ul>
        </li>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'CONFIGURACOES'),$_smarty_tpl ) );
$_prefixVariable61 = ob_get_clean();
if ($_prefixVariable61) {?>
        <li class="xn-openable">
            <a href="javascript:void(0);"><span class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Settings'),$_smarty_tpl ) );?>
</span></a>
            <ul>
                <?php if (_ENVIRONMENT_ === 'development') {?> 
                <li><a href="javascript:void(0);" disabled  page-load="parameters"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Parameters'),$_smarty_tpl ) );?>
</a></li>  
                <?php }?>
                <li><a href="javascript:void(0);"  page-load="paymentgateway"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Payment Gateway'),$_smarty_tpl ) );?>
</a></li>

            </ul>
        </li>
        <?php }?>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkAccessMenu'][0], array( array('m'=>'PLANO'),$_smarty_tpl ) );
$_prefixVariable62 = ob_get_clean();
if ($_prefixVariable62) {?> 
        <li><a href="javascript:void(0);" page-load="myplan"><span class=""></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'My Plan'),$_smarty_tpl ) );?>
</a></li>
        <?php }?>
    </ul>
</li>
<?php }
}
}
