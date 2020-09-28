<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/component/element/date.js" */ ?>
<?php /*%%SmartyHeaderCode:3241360515f6ba78816f721-05852338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c38f68fcb8f6516abe65e5ae87c694c9530c1b4' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/component/element/date.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3241360515f6ba78816f721-05852338',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba788170556_77814642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba788170556_77814642')) {function content_5f6ba788170556_77814642($_smarty_tpl) {?>/*
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
 * @package    Base
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Date', {
    extend: 'Ext.form.field.Date',
    alias: [
        'widget.base-element-date',
        'widget.base-element-datefield'
    ],

    setValue: function(value) {
        this.callParent([this.formatValue(value)]);
    },

    formatValue: function(value) {
        if(!value) {
            return null;
        } else if (typeof value === 'string') {
            return (value === "0000-00-00") ? null : new Date(value);
        } else {
            return value;
        }
    }
});
<?php }} ?>