<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:55
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/article_list/store/editable_columns.js" */ ?>
<?php /*%%SmartyHeaderCode:20041388025f6baaa3287ea1-92419318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5fa8df397481a047abac67f509038d7b398168d' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/article_list/store/editable_columns.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20041388025f6baaa3287ea1-92419318',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa3289787_73751976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa3289787_73751976')) {function content_5f6baaa3289787_73751976($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware Store - EditableColumns
 *
 * The EditableColumns store holds columns which can be selected in the batch process window
 */
Ext.define('Shopware.apps.ArticleList.store.EditableColumns', {

    /**
     * Define that this component is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',

    /**
     * Define unique store id to create the store by the store manager
     */
    storeId: 'multiEdit.EditableColumns',

    /**
     * Define how much rows loaded with one request
     */
    pageSize: 555,

    /**
     * Do not remote sort the store
     */
    remoteSort: false,

    /**
     * Also disable remote filtering
     */
    remoteFilter: false,

   /**
    * Define the used model for this store
    * @string
    */
    model : 'Shopware.apps.ArticleList.model.EditableColumn',

    mode: 'local',

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url:'<?php echo '/shopware5_3/backend/ArticleList/getEditableColumns';?>',

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});


<?php }} ?>