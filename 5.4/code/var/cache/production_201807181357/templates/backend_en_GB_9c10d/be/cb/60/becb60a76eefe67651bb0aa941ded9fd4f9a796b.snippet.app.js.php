<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:04:09
         compiled from "/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/product_stream/app.js" */ ?>
<?php /*%%SmartyHeaderCode:18338622415f6baa39852f96-57630028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'becb60a76eefe67651bb0aa941ded9fd4f9a796b' => 
    array (
      0 => '/var/www/html/shopware5_4/themes/Backend/ExtJs/backend/product_stream/app.js',
      1 => 1531915062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18338622415f6baa39852f96-57630028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baa398551b9_85425632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baa398551b9_85425632')) {function content_5f6baa398551b9_85425632($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.ProductStream',

    loadPath: '<?php echo '/shopware5_4/backend/ProductStream/load';?>',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'SearchGrid',

        'list.Window',
        'list.List',

        'common.Settings',
        'common.Attributes',

        'condition_list.Window',
        'condition_list.ConditionPanel',
        'condition_list.PreviewGrid',

        'condition_list.condition.AbstractCondition',
        'condition_list.condition.Price',
        'condition_list.condition.Manufacturer',
        'condition_list.condition.Attribute',
        'condition_list.condition.Property',
        'condition_list.condition.Category',
        'condition_list.condition.ReleaseDate',
        'condition_list.condition.CreateDate',
        'condition_list.condition.HasPseudoPrice',
        'condition_list.condition.IsNew',
        'condition_list.condition.ImmediateDelivery',
        'condition_list.condition.VoteAverage',
        'condition_list.condition.Sales',
        'condition_list.condition.SearchTerm',
        'condition_list.condition.Closeout',

        'condition_list.field.Grid',
        'condition_list.field.Range',
        'condition_list.field.Attribute',
        'condition_list.field.Property',
        'condition_list.field.PropertyWindow',
        'condition_list.field.ReleaseDate',
        'condition_list.field.CreateDate',
        'condition_list.field.AttributeWindow',
        'condition_list.field.VoteAverage',
        'condition_list.field.Sales',
        'condition_list.field.SearchTerm',
        'condition_list.condition.Height',
        'condition_list.condition.Width',
        'condition_list.condition.Length',
        'condition_list.condition.Weight',
        
        'selected_list.Window',
        'selected_list.Product'
    ],

    models: [ 'Stream', 'Product' ],
    stores: [ 'Stream', 'Preview', 'Attribute' ],

    launch: function() {
        return this.getController('Main').mainWindow;
    }
});
//<?php }} ?>