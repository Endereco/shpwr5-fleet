<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/product_stream/model/product.js" */ ?>
<?php /*%%SmartyHeaderCode:21441609305f6baa398c7c09-94012538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5e436ce18267f9ff4ef2c40406231ed0263fc0a' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/product_stream/model/product.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21441609305f6baa398c7c09-94012538',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa398c9cd0_53142318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa398c9cd0_53142318')) {function content_5f6baa398c9cd0_53142318($_smarty_tpl) {?>/**
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
 *
 * @category   Shopware
 * @package    ProductStream
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.model.Product', {
    extend: 'Ext.data.Model',
    fields: [
        //
        { name : 'id', type: 'int', useNull: true },
        { name : 'number', type: 'string' },
        { name : 'name', type: 'string' },
        { name : 'stock', type: 'int' },
        { name : 'cheapestPrice' }
    ]
});
//<?php }} ?>