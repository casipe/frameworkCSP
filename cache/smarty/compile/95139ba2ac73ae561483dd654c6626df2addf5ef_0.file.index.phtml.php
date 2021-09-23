<?php
/* Smarty version 3.1.33, created on 2021-09-22 19:33:20
  from '/var/www/html/conndo.com.br/web/templates/default/pages/index/index.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_614baf301ebee3_35415630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95139ba2ac73ae561483dd654c6626df2addf5ef' => 
    array (
      0 => '/var/www/html/conndo.com.br/web/templates/default/pages/index/index.phtml',
      1 => 1629212993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614baf301ebee3_35415630 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."menuTop.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."pages/index/header_top.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>

<section id="precos" class="vc_section wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_plano">
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="row-inner">
            <div class="delay-1 wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <h6 style="font-size: 10px;color: #627792;text-align: center" class="vc_custom_heading style1" >Nossos Planos</h6>
                        <div class="vc_empty_space"   style="height: 6px"><span class="vc_empty_space_inner"></span></div>
                        <h3 style="text-align: center" class="vc_custom_heading" >Não desperdice o seu dinheiro, pague por unidade</h3>
                        <div class="vc_empty_space"   style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid preco">
        <div class="row-inner">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="vc_empty_space"   style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                        <div class="pricing-table three-columns ">
                            <div class="price-column ">
                                <div class="column-container">
                                    <div class="plan">
                                        <h4>Avaliação Gratuita</h4>
                                        <span>Teste grátis por 30 dias sem compromisso.</span>
                                    </div>
                                    <div class="price">
                                        <span>R$ 0,00</span> 
                                        <div class="des">&nbsp;</div>
                                    </div>
                                    <ul class="features">
                                        <li><span>Teste todas as funcionalidades da plataforma gratuitamente no período de avaliação.</span></li>
                                    </ul>
                                    <div class="cta"><a class="button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
assinatura?p=avaliacao">Teste grátis por 30 dias</a></div>
                                </div>
                            </div>
                            <div class="price-column highlight">
                                <div class="popular">Mais Popular</div>
                                <div class="column-container">
                                    <div class="plan">
                                        <h4>Síndico</h4>
                                        <span>Indicado para síndico que é responsável por 1 condomínio</span>
                                    </div>
                                    <div class="price">
                                        <span>R$ 1,49</span> /por unidade*
                                        <div class="des">Mínimo de 20 unidades</div>
                                    </div>
                                    <ul class="features">
                                        <li><span>Todas as funcionalidades inclusas e:</span></li>
                                        <li>1 condomínio</li>
                                        <li>10 usuários de acesso</li>
                                        <li>50Mb de espaço de armazenamento</li>  
                                        <li><hr></li>
                                        <li>*Valor mensal</li>                                                  
                                    </ul>
                                    <div class="cta"><a class="button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
assinatura?p=sindico">Assinar</a></div>
                                </div>
                            </div>
                            <div class="price-column ">
                                <div class="column-container">
                                    <div class="plan">
                                        <h4>Administradora</h4>
                                        <span>Indicado para Síndico Profissional ou Administradora de condomínio.</span>
                                    </div>
                                    <div class="price">
                                        <span>R$ 0,99</span> /por unidade*
                                        <div class="des">Mínimo de 100 unidades</div>
                                    </div>
                                    <ul class="features">
                                        <li><span>Todas as funcionalidades inclusas e:</span></li>
                                        <li>Condomínio ilimitado</li>
                                        <li>30 usuários de acesso</li>
                                        <li>100Mb de espaço de armazenamento por condomínio</li>                                                      
                                        <li><hr></li>
                                        <li>*Valor mensal</li>
                                    </ul>
                                    <div class="cta"><a class="button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
assinatura?p=administradora">Assinar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="main-content-inner">
    <div class="content">  
        <div class="vc_row wpb_row vc_row-fluid  vc_row-o-equal-height vc_row-flex" style="margin-top:30px">
            <div class="row-inner">
                <div class="bg-bottom wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <h3 style="font-size: 26px;text-align: center" class="vc_custom_heading" >Porque nos escolher?</h3>
                            <div class="vc_empty_space"   style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                            <div class="wpb_text_column wpb_content_element " >
                                <div class="wpb_wrapper">
                                    <p>Automatizamos os processos do seu condomínio:</p>
                                </div>
                            </div>
                            <div class="vc_empty_space"   style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1537608626309">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <ul class="iconlist iconlist iconlist-icon-small ">
                                                <li>
                                                    <div >
                                                        <div class="iconlist-item-icon">
                                                            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="health" 
                                                                 data-lazy-src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/health.svg" />
                                                            <noscript><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/health.svg" alt="health" /></noscript>
                                                        </div>
                                                        <div class="iconlist-item-content">
                                                            <h5>Protegeremos os seus dados</h5>
                                                            <p>
                                                                Reduza o risco, evitando violações das informações sensíveis do seu condomínio
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div >
                                                        <div class="iconlist-item-icon">
                                                            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="computer-network" 
                                                                 data-lazy-src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/computer-network.svg" />
                                                            <noscript><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/computer-network.svg" alt="computer-network" /></noscript>
                                                        </div>
                                                        <div class="iconlist-item-content">
                                                            <h5>Plataforma nas Nuvens</h5>
                                                            <p>Melhore a eficiência e elimine os custos dos processos do seu condomínio. Somos 100% digital e por isso, não se preocupe, 
                                                                nossa plataforma estará sempre à disposição, 24h por dia e 7 dias por semana.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div >
                                                        <div class="iconlist-item-icon">
                                                            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Suporte" 
                                                                 data-lazy-src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/suporte.svg" />
                                                            <noscript><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/suporte.svg" alt="telephone-operator9" /></noscript>
                                                        </div>
                                                        <div class="iconlist-item-content">
                                                            <h5>Soluções e Suporte</h5>
                                                            <p>O sistema que você utiliza não supre a sua necessidade? <br>
                                                                Teste agora mesmo a nossa plataforma por 30 dias e, se mesmo assim, sentir falta de algum recurso, entre em contato conosco para uma avaliação.
                                                            <p>O nosso suporte funciona de segunda a sexta, das 08:00 às 18:00


                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div  id="contato"  class="vc_col-sm-6">
                    <h3 style="font-size: 26px;text-align: center; padding:5px; display: block" class="vc_custom_heading" >Fale Conosco</h3>
                    <div  class="wpb_column vc_column_container" style="margin-top:50px;">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">

                                <div role="form" class="wpcf7"lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form id="formContato" enctype="multipart/form-data">
                                        <div style="display: none;">
                                        </div>
                                        <div class="content-form style2 ">
                                            <div class="row">
                                                <div class="columns columns-12"><label>Nome completo * <span class="wpcf7-form-control-wrap ">
                                                            <input type="text" name="nome" id="nome" value="" size="40" maxlength="100" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="" /></span></label></div>
                                            </div>
                                            <div class="row">
                                                <div class="columns columns-12"><label>Email comercial * <span class="wpcf7-form-control-wrap ">
                                                            <input type="email" name="email" id="email" value="" size="40" maxlength="200" 
                                                                   class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="" />
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="columns columns-12">
                                                    <label>
                                                        Sobre qual assunto é a sua dúvida? * 
                                                        <span class="wpcf7-form-control-wrap">
                                                            <select id="assunto" name="assunto" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                                <option value="">Por favor selecione</option>
                                                                <option value="Informações gerais">Informações Gerais</option>
                                                                <option value="Preço">Sobre Preço</option>
                                                                <option value="Suporte">Sobre Suporte</option>
                                                                <option value="Período de Teste">Período de Teste</option>
                                                                <option value="Um problema que gostaria de resolver">Um problema que gostaria de resolver</option>
                                                            </select>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="columns columns-12"><label>Qual a dúvida? * <span class="wpcf7-form-control-wrap ">
                                                            <textarea name="texto" id="texto" value="" size="40" maxlength="300"
                                                                      aria-required="true" aria-invalid="false" placeholder="Descreva aqui a sua dúvida..." ></textarea>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--
                                            <div class="row">
                                                <div class="columns columns-12">
                                                    <label>Telefone 
                                                        <span class="wpcf7-form-control-wrap tel-744">
                                                            <input type="tel" name="telefone" name="telefone" value="" size="40" 
                                                                   class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" 
                                                                   aria-invalid="false" 
                                                                   placeholder="(DDD) 99999-9999" />
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            -->


                                            <div class="captcha-base"></div>

                                            <div class="row">
                                                <div class="columns columns-12">
                                                    <button class="button" id="btnContato" class="wpcf7-form-control wpcf7-submit primary">Enviar</button>
                                                    <div class="ajax-loader"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-content-inner">
    <div class="content">

        <div class="content-bottom-widgets">
            <div class="content-bottom-inner wrap">
                <div class="content-bottom-aside-wrap">
                    <aside data-width="12">
                        <div id="text-6" class="widget-odd widget-last widget-first widget-1 aligncenter cta widget widget_text">
                            <h3 class="widget-title">Vamos começar</h3>
                            <div class="textwidget">
                                <h2 class="no-margin-top">Está cansado de uma gestão sem produtividade ou sistemas antigos e limitados?</h2>
                                <p>Pare de se preocupar com papelada e problemas de infraestrutura. <br>Concentre-se na sua gestão.
                                    <br />
                                    Nos deixe fornecer o suporte que você merece.
                                </p>
                                <p><a class="button large accent" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
assinatura?p=avaliacao">Teste grátis por 30 dias</a></p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-content-inner" style="margin-top:40px">
    <div class="content">
        <aside data-width="4">


            <div id="slider">



                <div id="slider-content" class="vc_row wpb_row vc_row-fluid">
                    <div class="row-inner">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                               
                                <div class="wpb_wrapper"> 
                                                                        <ul class="iconlist iconlist iconlist-icon-medium custom-image gap-20">
                                        <li>
                                            <div class="aligncenter hover3">
                                                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="aligncenter hover3">
                                                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">                                               
                                            </div>
                                        </li>
                                        <li>
                                            <div class="aligncenter hover3">
                                                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/4.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">                                                
                                            </div>
                                        </li>
                                        <li>
                                            <div class="aligncenter hover3">
                                                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/5.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">                                              
                                            </div>
                                        </li>
                                        <li>
                                            <div class="aligncenter hover3">
                                                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/6.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="aligncenter hover3">
                                                <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/7.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









                <div id="sliderModal" class="modal">
                    <span class="btnClose cursor" onclick="closeSlideModal()">&times;</span>
                    <div class="modal-content">

                        <div class="telaSlide">
                            <div class="numbertext">1 / 6</div>
                            <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/1.jpg" style="width:100%">
                        </div>

                        <div class="telaSlide">
                            <div class="numbertext">2 / 6</div>
                            <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/2.jpg" style="width:100%">
                        </div>

                        <div class="telaSlide">
                            <div class="numbertext">3 / 6</div>
                            <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/4.jpg" style="width:100%">
                        </div>

                        <div class="telaSlide">
                            <div class="numbertext">4 / 6</div>
                            <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/5.jpg" style="width:100%">
                        </div>

                        <div class="telaSlide">
                            <div class="numbertext">5 / 6</div>
                            <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/6.jpg" style="width:100%">
                        </div>

                        <div class="telaSlide">
                            <div class="numbertext">6 / 6</div>
                            <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
images/slider/7.jpg" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                                            </div>
                </div>
            </div>

        </aside>
    </div>
</div>
<?php }
}
