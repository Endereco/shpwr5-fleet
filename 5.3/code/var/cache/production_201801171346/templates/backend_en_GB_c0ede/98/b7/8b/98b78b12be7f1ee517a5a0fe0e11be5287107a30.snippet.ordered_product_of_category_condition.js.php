<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:55
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/ordered_product_of_category_condition.js" */ ?>
<?php /*%%SmartyHeaderCode:8555405885f6baaa32fa836-92641197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98b78b12be7f1ee517a5a0fe0e11be5287107a30' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/ordered_product_of_category_condition.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8555405885f6baaa32fa836-92641197',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa32fc843_42228496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa32fc843_42228496')) {function content_5f6baaa32fc843_42228496($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage CustomerStream
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.Customer.view.customer_stream.conditions.OrderedProductOfCategoryCondition', {

    getLabel: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ordered_product_of_category_condition",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ordered_product_of_category_condition",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ordered products of category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ordered_product_of_category_condition",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    supports: function(conditionClass) {
        return (conditionClass == 'Shopware\\Bundle\\CustomerSearchBundle\\Condition\\OrderedProductOfCategoryCondition');
    },

    create: function(callback) {
        callback(this._create());
    },

    load: function(conditionClass, items, callback) {
        callback(this._create());
    },

    _create: function() {
        var factory = Ext.create('Shopware.attribute.SelectionFactory');

        return {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ordered_product_of_category_condition_selection",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ordered_product_of_category_condition_selection",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ordered products from one of the following categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ordered_product_of_category_condition_selection",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            conditionClass: 'Shopware\\Bundle\\CustomerSearchBundle\\Condition\\OrderedProductOfCategoryCondition',
            items: [{
                xtype: 'shopware-form-field-category-grid',
                name: 'categoryIds',
                flex: 1,
                allowSorting: false,
                useSeparator: false,
                allowBlank: false,
                store: factory.createEntitySearchStore('Shopware\\Models\\Category\\Category'),
                searchStore: factory.createEntitySearchStore('Shopware\\Models\\Category\\Category')
            }]
        };
    }
});
// 
<?php }} ?>