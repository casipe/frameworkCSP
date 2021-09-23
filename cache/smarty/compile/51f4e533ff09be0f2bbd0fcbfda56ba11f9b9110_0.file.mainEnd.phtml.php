<?php
/* Smarty version 3.1.33, created on 2021-09-06 23:02:30
  from '/var/www/html/conndo.com.br/admin/templates/default/mainEnd.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6136c8369adef7_94328054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51f4e533ff09be0f2bbd0fcbfda56ba11f9b9110' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/mainEnd.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136c8369adef7_94328054 (Smarty_Internal_Template $_smarty_tpl) {
?></div>  
<!-- END PAGE CONTENT LOAD -->

<?php if (isset($_smarty_tpl->tpl_vars['listCondominiumSession']->value) && count($_smarty_tpl->tpl_vars['listCondominiumSession']->value) > 1) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable66=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable66."modal_condominium.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
}
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable67=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable67."modal_change_password_profile.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
</div>            
<!-- END PAGE CONTENT -->		
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="far fa-sign-out"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Exit System'),$_smarty_tpl ) );?>
</strong>!</div>
            <div class="mb-content">
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Are you sure you want to quit?'),$_smarty_tpl ) );?>
</p>                    
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Press NO if you want to continue or YES to exit'),$_smarty_tpl ) );?>
.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="javascript:void(0)" onclick="link('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/logout')" class="btn btn-success btn-lg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes'),$_smarty_tpl ) );?>
</a>
                    <button class="btn btn-info btn-lg mb-control-close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'No'),$_smarty_tpl ) );?>
</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->                 

<!-- START SCRIPTS -->



<!-- START PLUGINS -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/jquery/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>                
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/moment/moment-with-locales.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/icheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/bootstrap/bootstrap-datepicker.js"><?php echo '</script'; ?>
>    
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/bootstrap/bootstrap-timepicker.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/bootstrap/bootstrap-file-input.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/bootstrap/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/ajax-bootstrap-select/ajax-bootstrap-select.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/ajax-bootstrap-select/locale/ajax-bootstrap-select.pt-BR.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/mask/jquery.mask.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/noty/jquery.noty.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/noty/layouts/topCenter.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/bootstrap-notify/bootstrap-notify.min.js"><?php echo '</script'; ?>
>        
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/noty/themes/default.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins/scrollTo/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/field-validate/FieldValidate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/webcamjs/webcam.js"><?php echo '</script'; ?>
>  

<!-- THIS PAGE LIBRARY  / LOCALES -->
<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/locales/lang_datepicker.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/jquery-print/jquery.print.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/htmlToPdfmake.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/pdfmake/pdfmake.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/pdfmake/vfs_fonts.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/datatable/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/buttons/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/buttons/js/buttons.flash.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/jszip/jszip.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/buttons/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/buttons/js/buttons.print.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/buttons/js/buttons.colVis.min.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/crypto-js/crypto-js.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/pdf.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
system/js/prototype.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
system/js/script.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
system/js/redirect.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/system.js?lang=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'ISO_LANGUAGE'),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>  

	
    setTimeout(()=>{		
        System.socketIO.on('portariaVisitaAutorizacaoMorador', function (data) {
           // console.log('RECEBENDO DADOS DO MORADOR: ', data);	
			
		let title='AUTORIZAÇÃO DE VISITANTE', 
		message = "<b>Autorização " + (data.status=='AUT' ? 'concedida' : 'negada')+':</b>: '+data.unidade;			
			
		 $.notify({title, message}, {
						type:(data.status=='AUT') ? 'success' : 'danger',
						element:'html', 
						delay: 10000,
						animate: {
							enter: 'animated fadeInRight',
							exit: 'animated fadeOutRight'
						},
						allow_dismiss: true,
					offset: {
						x: 30,
						y: 70//top
					}
				});			
        });  	
       
    }, 800);

<?php echo '</script'; ?>
>



<!-- START TEMPLATE -->
    
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/plugins.js"><?php echo '</script'; ?>
>       
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
js/actions.js"><?php echo '</script'; ?>
>          
<!-- END TEMPLATE -->
<!-- END SCRIPTS --> 
</body>
</html>






<?php }
}
