<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:18
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/index/model/turnover.js" */ ?>
<?php /*%%SmartyHeaderCode:9742220935f6ba9ca8d7b51-28959345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f672cf341a8517e4e64ceaf722ea49077f580a7c' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/index/model/turnover.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9742220935f6ba9ca8d7b51-28959345',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ca8d8b52_81540117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ca8d8b52_81540117')) {function content_5f6ba9ca8d8b52_81540117($_smarty_tpl) {?>/**
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

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Index.model.Turnover', {
    extend: 'Ext.data.Model',
    fields: [
        //
        'name',
        'turnover',
        'visitors',
        'newCustomers',
        'orders'
    ]
});
//
<?php }} ?>