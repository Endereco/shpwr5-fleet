<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:53
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/index/model/widget_settings.js" */ ?>
<?php /*%%SmartyHeaderCode:3472175255f6baaa1e6e8d3-46473932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d3b523b409f4dcf3dc8eaae1e9b2e747ec0d0b' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/index/model/widget_settings.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3472175255f6baaa1e6e8d3-46473932',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa1e6f3f4_78623085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa1e6f3f4_78623085')) {function content_5f6baaa1e6f3f4_78623085($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

//

Ext.define('Shopware.apps.Index.model.WidgetSettings', {

    extend: 'Ext.data.Model',

    fields: [
        'authId',
        'height',
        'columnsShown',
        'dock',
        'pinned',
        'minimized'
    ]
});

//
<?php }} ?>