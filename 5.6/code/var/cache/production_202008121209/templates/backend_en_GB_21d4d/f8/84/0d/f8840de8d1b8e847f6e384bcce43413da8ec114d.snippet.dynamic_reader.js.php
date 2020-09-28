<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/attribute/model/dynamic_reader.js" */ ?>
<?php /*%%SmartyHeaderCode:16647666755f6ba7881a1c64-70633520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8840de8d1b8e847f6e384bcce43413da8ec114d' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/attribute/model/dynamic_reader.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16647666755f6ba7881a1c64-70633520',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba7881a2598_43347848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba7881a2598_43347848')) {function content_5f6ba7881a2598_43347848($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.model.DynamicReader', {
    extend: 'Ext.data.reader.Json',
    root: 'data',
    type: 'json',

    readRecords: function(data) {
        if (!data) {
            return this.callParent(arguments);
        }
        if (!data.data) {
            return this.callParent(arguments);
        }
        if (!data.data[0]) {
            return this.callParent(arguments);
        }
        this.model.setFields(Object.keys(data.data[0]));
        return this.callParent(arguments);
    }
});
<?php }} ?>