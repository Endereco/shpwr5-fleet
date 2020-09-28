<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:53
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/component/element/listing_filter_mode_select.js" */ ?>
<?php /*%%SmartyHeaderCode:16468188175f6baaa1b43a47-70163894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '260c7bf06ffe025658664bba5b40ffd8f6830c39' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/base/component/element/listing_filter_mode_select.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16468188175f6baaa1b43a47-70163894',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa1b44487_63448659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa1b44487_63448659')) {function content_5f6baaa1b44487_63448659($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

Ext.define('Shopware.apps.Base.view.element.ListingFilterModeSelect', {
    extend: 'Shopware.apps.Base.view.element.ProductBoxLayoutSelect',
    labelWidth: 180,
    alias: 'widget.base-element-listing-filter-mode-select',
    cls: 'listing-filter-mode-select',

    forceSelection: true,
    editable: false,
    allowBlank: false,
    fieldLabel: '',
    helpText: '',

    listConfig: {
        getInnerTpl: function () {
            return '' +
                '<div class="layout-select-item listing-filter-mode-select-item">' +
                    '<img src="{image}" width="70" height="50" class="layout-picto" />' +
                    '<div class="layout-info">' +
                        '<h1>{label}</h1>' +
                        '<div>{description}</div>' +
                    '</div>' +
                    '<div class="x-clear" />' +
                '</div>' +
            '';
        }
    },

    createStore: function() {
        this.store = Ext.create('Shopware.apps.Base.store.ListingFilterMode', this.storeConfig);
    }
});
<?php }} ?>