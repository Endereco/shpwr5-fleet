<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:53
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.DispatchGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:12891678795f6baaa1beb0d5-02585445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d68cfb625e6189c92bca9932cb37af1c07a464' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.DispatchGrid.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12891678795f6baaa1beb0d5-02585445',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa1beb979_63058683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa1beb979_63058683')) {function content_5f6baaa1beb979_63058683($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.DispatchGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-dispatch-grid',
    mixins: ['Shopware.model.Helper'],

    createColumns: function() {
        var me = this;
        var activeColumn = { dataIndex: 'active', width: 30 };
        me.applyBooleanColumnConfig(activeColumn);

        return [
            me.createSortingColumn(),
            activeColumn,
            { dataIndex: 'name', flex: 1 },
            me.createActionColumn()
        ];
    }
});<?php }} ?>