<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:18
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.ProductStreamGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:15224491365f6ba9ca62c5e1-61969442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff28857803c91a355137c499524fbe18a2aa0a7' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.ProductStreamGrid.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15224491365f6ba9ca62c5e1-61969442',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ca62cf22_63848990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ca62cf22_63848990')) {function content_5f6ba9ca62cf22_63848990($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.ProductStreamGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-product-stream-grid',
    createColumns: function() {
        var me = this;
        return [
            me.createSortingColumn(),
            { dataIndex: 'name' },
            { dataIndex: 'description', flex: 1 },
            me.createActionColumn()
        ];
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.ProductStreamSingleSelection', this.getComboConfig());
    }
});<?php }} ?>