<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.SingleSelectionFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:7030890335f6ba7881af398-43069134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e43ec68f97a933343b96d74624cf5a0875853ae' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.SingleSelectionFieldHandler.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7030890335f6ba7881af398-43069134',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba7881afc02_75893785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba7881afc02_75893785')) {function content_5f6ba7881afc02_75893785($_smarty_tpl) {?>/**
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

Ext.define('Shopware.attribute.SingleSelectionFieldHandler', {
    extend: 'Shopware.attribute.FieldHandlerInterface',
    mixins: {
        factory: 'Shopware.attribute.SelectionFactory'
    },

    supports: function(attribute) {
        return (attribute.get('columnType') === 'single_selection');
    },

    create: function(field, attribute) {
        return this.createSelection(
            field,
            attribute,
            'Shopware.form.field.SingleSelection',
            this.createDynamicSearchStore(attribute)
        );
    }
});
<?php }} ?>