<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:55
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/property.js" */ ?>
<?php /*%%SmartyHeaderCode:4215092885f6baaa31faec8-26650217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb5ba9c7182abea6f80a14309441e4d30e966e3' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/property.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4215092885f6baaa31faec8-26650217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa31fc001_02949980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa31fc001_02949980')) {function content_5f6baaa31fc001_02949980($_smarty_tpl) {?>/**
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
//<?php }} ?>