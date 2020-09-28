<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:41
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/property.js" */ ?>
<?php /*%%SmartyHeaderCode:3857158985f6ba789efed72-78966300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd57fc17f67be3627ce3578dac5f8a77ed3bc43e' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/property.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3857158985f6ba789efed72-78966300',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba789efff32_58400634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba789efff32_58400634')) {function content_5f6ba789efff32_58400634($_smarty_tpl) {?>/**
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
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.condition_list.field.Property', {
    extend: 'Shopware.apps.ProductStream.view.condition_list.field.Grid',
    idsName: 'valueIds',

    getErrorMessage: function() {
        return 'No property option selected';
    },

    createItems: function() {
        var me = this,
            items = me.callParent(arguments);

        items.push(me.createIdField());
        items.push(me.createGroupNameField());
        return items;
    },

    createGroupNameField: function() {
        var me = this;
        me.groupNameField = Ext.create('Ext.form.field.Text', {
            hidden: true,
            value: me.groupName
        });
        return me.groupNameField;
    },

    createIdField: function() {
        var me = this;
        me.idField = Ext.create('Ext.form.field.Text', {
            hidden: true,
            value: me.groupId
        });
        return me.idField;
    },

    setValue: function(value) {
        this.idField.setValue(value.groupId);
        this.groupNameField.setValue(value.groupName);
        this.callParent(arguments);
    },

    getSubmitData: function() {
        var value = this.callParent(arguments);
        value[this.name].groupId = this.idField.getValue();
        value[this.name].groupName = this.groupNameField.getValue();
        return value;
    }
});
//
<?php }} ?>