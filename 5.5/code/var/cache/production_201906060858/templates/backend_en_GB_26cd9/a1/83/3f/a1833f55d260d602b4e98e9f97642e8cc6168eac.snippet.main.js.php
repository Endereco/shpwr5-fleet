<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:02:20
         compiled from "/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/feedback/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:12699145575f6ba9ccbfc206-68543488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1833f55d260d602b4e98e9f97642e8cc6168eac' => 
    array (
      0 => '/var/www/html/shopware5_5/themes/Backend/ExtJs/backend/feedback/controller/main.js',
      1 => 1559804334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12699145575f6ba9ccbfc206-68543488',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba9ccbfdfe7_85093226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba9ccbfdfe7_85093226')) {function content_5f6ba9ccbfdfe7_85093226($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - Feedback Main Controller
 *
 * This file contains the business logic for the Feedback module.
 */
//
Ext.define('Shopware.apps.Feedback.controller.Main', {

    /**
     * Extend from the standard ExtJS 4 controller
     * @string
     */
    extend: 'Ext.app.Controller',

    /**
     * Creates the necessary event listener for this
     * specific controller and opens a new Ext.window.Window
     * to display the subapplication
     *
     * @return void
     */
    init: function() {
        var me = this;

        me.control({
            'installation-survey-window': {
                'beforeclose': me.onBeforeInstallationFeedbackClose
            },
            'feedback-preview-window': {
                'beforeclose': me.onBeforePreviewFeedbackClose,
                'feedback-show-issue-tracker': me.onPreviewWindowShowIssueTracker
            }
        });

        if (me.subApplication.params && me.subApplication.params.installationFeedback) {
            me.mainWindow = me.getView('survey.Window').create();
            return;
        }

        if (me.subApplication.params && me.subApplication.params.previewFeedback) {
            me.mainWindow = me.getView('preview.Window').create();
            return;
        }

        me.mainWindow = me.getView('main.Window').create();

    },

    onBeforeInstallationFeedbackClose: function(win) {
        var checked = win.down('#disableInstallationSurvey').getValue();
        if (checked) {
            Ext.Ajax.request({
                url: '<?php echo '/shopware5_5/backend/feedback/disableInstallationSurvey';?>'
            });
        }
    },

    onBeforePreviewFeedbackClose: function(win) {
        var checked = win.down('#disablePreviewFeedback').getValue();
        if (checked) {
            window.localStorage.setItem("hideBetaFeedback", true);
        }
    },

    onPreviewWindowShowIssueTracker: function(win) {
        Shopware.app.Application.addSubApplication({
            name: 'Shopware.apps.Feedback'
        });
        win.close();
    }
});
//
<?php }} ?>