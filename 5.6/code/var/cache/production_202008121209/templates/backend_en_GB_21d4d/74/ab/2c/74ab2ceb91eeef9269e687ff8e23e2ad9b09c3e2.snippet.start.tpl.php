<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:42
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7828969985f6ba78ad17836-19186959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74ab2ceb91eeef9269e687ff8e23e2ad9b09c3e2' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/start.tpl',
      1 => 1597226944,
      2 => 'file',
    ),
    '22961b6952e77cd997e4fede23ca3120ef0f8ab6' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/index.tpl',
      1 => 1597226944,
      2 => 'snippet',
    ),
    '74995b518a6b7df2f0be7a92e121ef37bc86ded5' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/include/loading_indicator.tpl',
      1 => 1597226944,
      2 => 'snippet',
    ),
    '91bdaf4e6307f91ea50391523caeabd740b7a137' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/include/language_switch.tpl',
      1 => 1597226944,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '7828969985f6ba78ad17836-19186959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'benchmarkData' => 0,
    'benchmarkTranslations' => 0,
    'benchmarkDefaultLanguage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78ad21ee6_66949596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78ad21ee6_66949596')) {function content_5f6ba78ad21ee6_66949596($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    
        <meta charset="UTF-8">
        <title>Shopware BI - Start</title>

        <link href="/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/all.css" media="all" rel="stylesheet" type="text/css" />
        <link href="/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/vendor/components/LiquidButton/css/style.css" media="all" rel="stylesheet" type="text/css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
                integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f"
                crossorigin="anonymous"></script>

        <script type="text/javascript">
            var onClickLiquidButton = function () {
                $('html, body').animate({
                    scrollTop: $(".special-note").offset().top
                }, 800);
            };

            (function () {
                <?php if ($_smarty_tpl->tpl_vars['benchmarkData']->value){?>
                    window.benchmarkData = JSON.parse('<?php echo $_smarty_tpl->tpl_vars['benchmarkData']->value;?>
');
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['benchmarkTranslations']->value){?>
                    window.benchmarkTranslations = JSON.parse('<?php echo $_smarty_tpl->tpl_vars['benchmarkTranslations']->value;?>
');
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value){?>
                    window.benchmarkDefaultLanguage = '<?php echo $_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value;?>
';
                <?php }?>
            } )();
        </script>

        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.22/vue.min.js"
                    integrity="sha384-/akamCRnflySW3CYATb1tG4cZUVrkVT2+s6Q150JJNJ4mv8nhvL/V7rPgmzX8scM"
                    crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-i18n/8.10.0/vue-i18n.min.js"
                    integrity="sha384-gobPWY9nduovPXtrtPx0f3yAWM2dnKwEOy8BSxadNjhCECNk1TZTzGJqpnWHQGIV"
                    crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"
                    integrity="sha384-EU1dURc8oJ/Ec2n9odZegm1iva+lUs6tS2kIQyRWJc5KjzRFvTBuix+qvrbLSQYj"
                    crossorigin="anonymous"></script>
            <script src="/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/js/translation.js"></script>
            <script src="/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/js/vue_wrapper.js"></script>
        
    
</head>


    <body id="swag-start">
        <?php /*  Call merged included template "backend/benchmark/template/local/include/loading_indicator.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/benchmark/template/local/include/loading_indicator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '7828969985f6ba78ad17836-19186959');
content_5f6ba78ad1ed96_70822333($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/benchmark/template/local/include/loading_indicator.tpl" */?>
        <?php /*  Call merged included template "backend/benchmark/template/local/include/language_switch.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/benchmark/template/local/include/language_switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '7828969985f6ba78ad17836-19186959');
content_5f6ba78ad1fad7_77642701($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/benchmark/template/local/include/language_switch.tpl" */?>
        <div class="wrapper">
            <div class="swag-onbording">

                <div class="tob-bar">
                    <ul class="top-benefits">
                        <li>[[ $t('freeText') ]]</li>
                        <li>[[ $t('anonymousText') ]]</li>
                        <li>[[ $t('nonBindingText') ]]</li>
                    </ul>
                </div>

                <div class="preview-screen"></div>

                <div class="teaser-text">
                    <div class="funny-graph"></div>
                    <div class="row">
                        <div class="col-100">
                            <h1>[[ $t('startHeadline') ]]</h1>
                            <p>[[ $t('startText') ]]</p>
                        </div>

                        <div class="col-100">
                            <form method="get" action="<?php echo '/shopware5_6/backend/BenchmarkLocalOverview/render/template/info';?>">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value;?>
" name="lang"/>
                                <button class="btn primary" type="submit">
                                    [[ $t('startButtonText') ]]
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>


</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:42
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/include/loading_indicator.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5f6ba78ad1ed96_70822333')) {function content_5f6ba78ad1ed96_70822333($_smarty_tpl) {?><div class="loading-wrapper">
    <div class="loading-text">LOADING</div>
    <div class="loading-content"></div>

    <div class="oval-one"></div>
    <div class="oval-two"></div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:42
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/template/local/include/language_switch.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5f6ba78ad1fad7_77642701')) {function content_5f6ba78ad1fad7_77642701($_smarty_tpl) {?><div class="language-switch" data-language-switch="true">
    <span class="language german-language<?php if ($_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value==='de'){?> active<?php }?>" data-language-key="de">DE</span>
    <span class="language-separator">|</span>
    <span class="language english-language<?php if ($_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value==='en'){?> active<?php }?>" data-language-key="en">EN</span>
</div><?php }} ?>