<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:42
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/model/shop_config.js" */ ?>
<?php /*%%SmartyHeaderCode:20944617655f6ba78ab9a724-36023965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69be5aa9c163c10b0691f2ece32d3aa4c62e9a81' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/benchmark/model/shop_config.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20944617655f6ba78ab9a724-36023965',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78ab9c294_30999818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78ab9c294_30999818')) {function content_5f6ba78ab9c294_30999818($_smarty_tpl) {?>//
//
Ext.define('Shopware.apps.Benchmark.model.ShopConfig', {
    extend: 'Ext.data.Model',

    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'shopId', type: 'int' },
        { name: 'shopName', type: 'string' },
        { name: 'active', type: 'boolean' },
        { name: 'lastSent', type: 'date', dateFormat: 'd.m.Y H:i:s' },
        { name: 'lastReceived', type: 'date', dateFormat: 'd.m.Y H:i:s' },
        { name: 'lastOrderId', type: 'int' },
        { name: 'lastCustomerId', type: 'int' },
        { name: 'lastProductId', type: 'int' },
        { name: 'batchSize', type: 'int' },
        { name: 'industry', type: 'int' },
        { name: 'type', type: 'string' },
        { name: 'responseToken', type: 'string', useNull: true }
    ],
});
//
<?php }} ?>