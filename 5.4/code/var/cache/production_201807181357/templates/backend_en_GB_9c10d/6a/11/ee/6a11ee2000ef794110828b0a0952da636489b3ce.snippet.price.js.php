<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/price.js" */ ?>
<?php /*%%SmartyHeaderCode:3341872575f6baa39910ad3-20983070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a11ee2000ef794110828b0a0952da636489b3ce' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/price.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3341872575f6baa39910ad3-20983070',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa39913538_67269686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa39913538_67269686')) {function content_5f6baa39913538_67269686($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ProductStream.view.condition_list.condition.Price', {
    extend: 'ProductStream.filter.AbstractCondition',

    getName: function() {
        return 'Shopware\\Bundle\\SearchBundle\\Condition\\PriceCondition';
    },

    getLabel: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'price_condition','default'=>'Price condition','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_condition','default'=>'Price condition','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Price condition<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_condition','default'=>'Price condition','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    isSingleton: function() {
        return true;
    },

    create: function(callback) {
        callback(this.createField());
    },

    load: function(key, value) {
        if (key !== this.getName()) {
            return null;
        }

        var field = this.createField();
        field.setValue(value);
        return field;
    },

    createField: function() {
        return Ext.create('Shopware.apps.ProductStream.view.condition_list.field.Range', {
            minField: 'minPrice',
            maxField: 'maxPrice',
            name: 'condition.'+ this.getName(),
            flex: 1
        });
    }
});
//<?php }} ?>