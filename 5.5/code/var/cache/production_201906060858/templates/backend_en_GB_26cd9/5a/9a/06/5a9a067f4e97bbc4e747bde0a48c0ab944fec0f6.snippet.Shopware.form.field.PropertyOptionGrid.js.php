<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:18
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.PropertyOptionGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:10058561505f6ba9ca5afb12-47577449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a9a067f4e97bbc4e747bde0a48c0ab944fec0f6' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.PropertyOptionGrid.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10058561505f6ba9ca5afb12-47577449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ca5b0349_42146575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ca5b0349_42146575')) {function content_5f6ba9ca5b0349_42146575($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.form.field.PropertyOptionGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-property-option-grid',

    createColumns: function() {
        var me = this;
        return [
            me.createSortingColumn(),
            { dataIndex: 'optionName' },
            { dataIndex: 'value', flex: 1 },
            me.createActionColumn()
        ];
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.PropertyOptionSingleSelection', this.getComboConfig());
    }
});<?php }} ?>