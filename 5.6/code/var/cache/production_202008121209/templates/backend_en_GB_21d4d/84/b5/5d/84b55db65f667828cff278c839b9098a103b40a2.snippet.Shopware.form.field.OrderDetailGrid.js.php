<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.OrderDetailGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:12586965015f6ba788262981-02381081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84b55db65f667828cff278c839b9098a103b40a2' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.OrderDetailGrid.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12586965015f6ba788262981-02381081',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba788263579_48474280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba788263579_48474280')) {function content_5f6ba788263579_48474280($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.OrderDetailGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-order-detail-grid',
    mixins: ['Shopware.model.Helper'],

    createColumns: function() {
        var me = this;

        return [
            me.createSortingColumn(),
            { dataIndex: 'quantity' },
            { dataIndex: 'articleNumber' },
            { dataIndex: 'price', renderer: me.priceRenderer },
            { dataIndex: 'articleName' },
            me.createActionColumn()
        ];
    },

    priceRenderer: function(value) {
        if ( value === Ext.undefined ) {
            return value;
        }
        return Ext.util.Format.currency(value);
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.OrderDetailSingleSelection', this.getComboConfig());
    }
});<?php }} ?>