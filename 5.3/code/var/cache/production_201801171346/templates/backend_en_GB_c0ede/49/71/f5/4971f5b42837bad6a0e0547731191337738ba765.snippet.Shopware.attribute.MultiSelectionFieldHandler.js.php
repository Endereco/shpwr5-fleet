<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:53
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.MultiSelectionFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:20151007935f6baaa1b5f562-80960324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4971f5b42837bad6a0e0547731191337738ba765' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.MultiSelectionFieldHandler.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20151007935f6baaa1b5f562-80960324',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa1b5fd79_34062342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa1b5fd79_34062342')) {function content_5f6baaa1b5fd79_34062342($_smarty_tpl) {?>/**
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

Ext.define('Shopware.attribute.MultiSelectionFieldHandler', {
    extend: 'Shopware.attribute.FieldHandlerInterface',
    mixins: {
        factory: 'Shopware.attribute.SelectionFactory'
    },

    supports: function(attribute) {
        return (attribute.get('columnType') == 'multi_selection');
    },

    create: function(field, attribute) {
        return this.createSelection(
            field,
            attribute,
            'Shopware.form.field.Grid',
            this.createDynamicSearchStore(attribute),
            this.createDynamicSearchStore(attribute)
        );
    }
});<?php }} ?>