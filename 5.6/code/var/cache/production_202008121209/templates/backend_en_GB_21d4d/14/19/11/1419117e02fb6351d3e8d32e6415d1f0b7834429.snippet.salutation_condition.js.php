<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:41
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/salutation_condition.js" */ ?>
<?php /*%%SmartyHeaderCode:20417099875f6ba789dbe301-64265817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1419117e02fb6351d3e8d32e6415d1f0b7834429' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/salutation_condition.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20417099875f6ba789dbe301-64265817',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba789dc0257_25089973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba789dc0257_25089973')) {function content_5f6ba789dc0257_25089973($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Customer.view.customer_stream.conditions.SalutationCondition', {

    getLabel: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'has_salutation_condition','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'has_salutation_condition','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Has one of the following salutations<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'has_salutation_condition','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    supports: function(conditionClass) {
        return (conditionClass == 'Shopware\\Bundle\\CustomerSearchBundle\\Condition\\SalutationCondition');
    },

    create: function(callback) {
        callback(this._create());
    },

    load: function(conditionClass, items, callback) {
        callback(this._create());
    },

    _create: function() {
        var store = Ext.create('Shopware.apps.Base.store.Salutation');

        return {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'has_salutation_condition','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'has_salutation_condition','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Has one of the following salutations<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'has_salutation_condition','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            conditionClass: 'Shopware\\Bundle\\CustomerSearchBundle\\Condition\\SalutationCondition',
            items: [{
                xtype: 'shopware-form-field-grid',
                name: 'salutations',
                flex: 1,
                allowSorting: false,
                useSeparator: false,
                allowBlank: false,
                store: store,
                searchStore: store
            }]
        };
    }
});
// 
<?php }} ?>