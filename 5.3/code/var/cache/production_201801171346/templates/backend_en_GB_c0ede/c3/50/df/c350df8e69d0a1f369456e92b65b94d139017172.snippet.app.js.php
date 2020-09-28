<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:56
         compiled from "/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/feedback/app.js" */ ?>
<?php /*%%SmartyHeaderCode:2231882915f6baaa41b1cd5-96044304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c350df8e69d0a1f369456e92b65b94d139017172' => 
    array (
      0 => '/var/www/html/shopware5_3/themes/Backend/ExtJs/backend/feedback/app.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2231882915f6baaa41b1cd5-96044304',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa41b4145_37854137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa41b4145_37854137')) {function content_5f6baaa41b4145_37854137($_smarty_tpl) {?>/**
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
 * Shopware UI - Feedback Bootstrapper
 *
 * This file bootstrapps the Feedback module.
 */
//
Ext.define('Shopware.apps.Feedback', {

    /**
     * Extends from our special controller, which handles the
     * sub-application behavior and the event bus
     * @string
     */
    extend: 'Enlight.app.SubApplication',

    /**
     * Sets the loading path for the sub-application.
     *
     * Note that you'll need a "loadAction" in your
     * controller (server-side)
     * @string
     */
    loadPath:'<?php echo '/shopware5_3/backend/Feedback/load';?>',

    /**
     * Enables our bulk loading technique.
     * @booelan
     */
    bulkLoad: true,

    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name: 'Shopware.apps.Feedback',

    /**
     * Required controllers for module (subapplication)
     * @array
     */
    controllers: [ 'Main' ],

    /**
     * Required views for the module (subapplication)
     */
    views: [
        'main.Window',
        'survey.Window',
        'preview.Window'
    ],

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
     */
    launch: function() {
        var me = this,
            mainController = me.getController('Main');

        return mainController.mainWindow;
    }
});
//
<?php }} ?>