<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:55
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/article_list/app.js" */ ?>
<?php /*%%SmartyHeaderCode:6094669565f6baaa3114146-84748830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb7cd58f7173663f6be6bd3531d1e387238b976' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/article_list/app.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6094669565f6baaa3114146-84748830',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa3115f34_71401620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa3115f34_71401620')) {function content_5f6baaa3115f34_71401620($_smarty_tpl) {?>/**
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

//
Ext.define('Shopware.apps.ArticleList', {

    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name:'Shopware.apps.ArticleList',

    /**
     * Extends from our special controller, which handles the sub-application behavior and the event bus
     * @string
     */
    extend:'Enlight.app.SubApplication',

    /**
     * Enable bulk loading
     * @boolean
     */
    bulkLoad: true,

    /**
     * Sets the loading path for the sub-application.
     *
     * @string
     */
    loadPath: '<?php echo '/shopware5_3/backend/ArticleList/load';?>',

    /**
     * Array of views to require from AppName.view namespace.
     * @array
     */
    views: [
        'main.Window',
        'main.Grid',
        'main.Sidebar',
        'main.NavigationGrid',
        'main.CategoryTree',
        'main.MultiEditMenu',

        'AddFilter.Window',
        'AddFilter.Grid',

        'QueryField',
        'FilterCombo',

        'BatchProcess.Window',
        'BatchProcess.Grid',

        'Backup.Window',
        'Backup.Grid'

    ],


    /**
     * Array of models to require from AppName.model namespace.
     * @array
     */
    models: [
        'Filter',
        'EditableColumn',
        'Operation',
        'Operator'
    ],

    /**
     * Array of stores to require from AppName.store namespace.
     * @array
     */
    stores: [
        'Detail',
        'Filter',
        'EditableColumns',
        'Operation'
    ],

    /**
     * Requires controllers for sub-application
     * @array
     */
    controllers: [ 'Main', 'List', 'Filter', 'Suggest', 'BatchProcess' , 'Backup', 'CategoryFilter', 'SplitView', 'ArticleCrud' ],

    /**
     * Returns the main application window for this is expected
     * by the Enlight.app.SubApplication class.
     * The class sets a new event listener on the "destroy" event of
     * the main application window to perform the destroying of the
     * whole sub application when the user closes the main application window.
     *
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     *
     * @private
     * @return [object] mainWindow - the main application window based on Enlight.app.Window
     *
     */
    launch: function() {
        var me = this,
            mainController = me.getController('Main');

        return mainController.mainWindow;
    }
});
//

<?php }} ?>