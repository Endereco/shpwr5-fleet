<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 21:52:40
         compiled from "/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/component/Shopware.notification.SubscriptionWarning.js" */ ?>
<?php /*%%SmartyHeaderCode:2840761135f6ba788135386-92575275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ba1c1a35fdd83cb94d855b99448ff915dcf2bcd' => 
    array (
      0 => '/var/www/html/shopware5_6/themes/Backend/ExtJs/backend/base/component/Shopware.notification.SubscriptionWarning.js',
      1 => 1597226944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2840761135f6ba788135386-92575275',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6ba78813c966_29691086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6ba78813c966_29691086')) {function content_5f6ba78813c966_29691086($_smarty_tpl) {?>/**
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

Ext.define('Shopware.notification.SubscriptionWarning', {

    snippets: {
        licence_upgrade_warning: '[0]x plugin(s) require a licence upgrade.<br /><br /><b>Required upgrades:</b><br />[1]',
        subscription_warning: 'Subscription(s) for [0]x plugin(s) are expired. <br /><br /><b>Expired plugins:</b><br />[1]',
        expired_soon_subscription_warning: 'Subscription(s) for [0]x plugin(s) expire in a few days.<br /><br /><b>Soon expired plugins:</b><br />[1]',
        expired_soon_subscription_days_warning: ' days',
        invalid_licence: 'Licence(s) of [0]x plugin(s) are invalid.<br /><br /><b>Invalid licence(s):</b><br />[1]',
        shop_license_upgrade: 'The license upgrade for the shop hasn\'t been executed yet.',
        no_license: 'You may be a victim of counterfeiting. <br /><br /><b>No valid license found for plugins:</b><br />[1]',
        expiring_license: 'Expiring license(s)',
        expired_license: 'Expired license(s)',
        expiring_license_warning: 'License(s) of [0]x plugin(s) are soon expiring.<br /><br /><b>Soon expired license(s):</b><br />[1]',
        expired_license_warning: 'At least one license of your used plugins has expired. <br>Check this in your Shopware account under "Licenses > Licenses" and update your license immediately.',
        unknown_license: 'Unlicensed plugins',
        confirm_open_pluginmanager: 'You have installed unlicensed plugins. Do you want to open the Plugin Manager now to check your plugins?',
        subscription: 'Subscription',
        subscription_hide_message: 'Would you like to hide this message for a week?',
        openPluginOverview: 'Open plugin overview',
        importantInformation: 'Important Information',
        noShopSecretWarning: 'In order to receive information about updates and install plugins, you need to log in to your Shopware account. If you don\'t have a Shopware account yet, you can easily register.',
        login: 'Login now'
    },

    /**
     * Check if any plugins need to be upgraded
     */
    check: function () {
        var me = this;

        me.getPluginInformation(function (data) {
            var pluginData = me.preparePluginData(data);
            pluginData.expiredPluginSubscriptions.sort(me.sortPluginsByDaysLeftCallback);
            me.displayNotices(pluginData, data);
        });
    },

    checkSecret: function () {
        Ext.Ajax.request({
            url: '<?php echo '/shopware5_6/backend/PluginManager/checkSecret';?>'
        });
    },

    preparePluginData: function(data) {
        var preparedData = {
                isShopUpgraded: data.isShopUpgraded,
                notUpgradedPlugins: [],
                wrongVersionPlugins: [],
                expiredPluginSubscriptions: [],
                unknownLicensePlugins: [],
                expiredLicensePlugins: []
            },
            plugins = data.plugins,
            today = Ext.Date.clearTime(new Date()),
            i = 0,
            count = plugins.length;

        for (i; i < count; i++) {
            var plugin = plugins[i];
            if (plugin.subscriptionUpgradeRequired) {
                preparedData.notUpgradedPlugins.push({
                    label: plugin.label
                });
            }
            if (plugin.wrongSubscription) {
                preparedData.wrongVersionPlugins.push({
                    label: plugin.label
                });
            }
            if (!Ext.isEmpty(plugin.subscriptionExpiration)) {
                var subscriptionExpirationDate = Ext.Date.parse(plugin.subscriptionExpiration, 'Y-m-d'),
                    isSubscriptionExpired, daysDiffSubscription;

                if (!Ext.isEmpty(subscriptionExpirationDate)) {
                    isSubscriptionExpired = subscriptionExpirationDate < today;
                    daysDiffSubscription = Math.round(Math.abs((subscriptionExpirationDate.getTime() - today.getTime()) / (1000 * 60 * 60 * 24)));

                    if (isSubscriptionExpired) {
                        preparedData.expiredPluginSubscriptions.push({
                            label: plugin.label,
                            expired: isSubscriptionExpired,
                            daysLeft: isSubscriptionExpired ? 0 : daysDiffSubscription,
                            dayDiff: daysDiffSubscription
                        });
                    }
                }
            }
            if (plugin.unknownLicense) {
                preparedData.unknownLicensePlugins.push({
                    label: plugin.label
                });
            }
            if (!Ext.isEmpty(plugin.licenseExpiration)) {
                var licenseExpiration = Ext.Date.parse(plugin.licenseExpiration, 'Y-m-d'),
                    isLicenseExpired, daysDiffLicense;

                if (!Ext.isEmpty(licenseExpiration)) {
                    isLicenseExpired = licenseExpiration < today;
                    daysDiffLicense = Math.round(Math.abs((licenseExpiration.getTime() - today.getTime()) / (1000 * 60 * 60 * 24)));

                    if (!isLicenseExpired && daysDiffLicense > 14) {
                        continue;
                    }

                    preparedData.expiredLicensePlugins.push({
                        label: plugin.label,
                        expired: isLicenseExpired,
                        daysLeft: isLicenseExpired ? 0 : daysDiffLicense,
                        dayDiff: daysDiffLicense
                    });
                }
            }
        }

        return preparedData;
    },

    getPluginInformation: function (callback) {
        var me = this;

        Ext.Ajax.request({
            url: '<?php echo '/shopware5_6/backend/PluginManager/getPluginInformation';?>',
            success: function (response) {
                /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'notification','resource'=>'pluginmanager'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> */
                var responseData = Ext.decode(response.responseText);

                if (!responseData || Ext.isEmpty(responseData.data)) {
                    return;
                }

                if (responseData.data.shopSecretMissing) {
                    Shopware.Notification.createStickyGrowlMessage({
                        title: me.snippets.importantInformation,
                        text: me.snippets.noShopSecretWarning,
                        width: 460,
                        btnDetail: {
                            text: me.snippets.login,
                            callback: function () {
                                Shopware.app.Application.addSubApplication({
                                    name: 'Shopware.apps.PluginManager',
                                    params: {
                                        openLogin: true
                                    }
                                });
                            }
                        }
                    });
                }

                if (responseData.success === true && responseData.data) {
                    callback(responseData.data);
                }
                /* <?php }?> */
            }
        });
    },

    displayNotices: function(data, rawData) {
        var me = this,
            expiredLicensePlugins = me.filterExpiredPlugins(data.expiredLicensePlugins, true),
            soonExpiredLicensePlugins = me.filterExpiredPlugins(data.expiredLicensePlugins, false),
            expiredPlugins = me.filterExpiredPlugins(data.expiredPluginSubscriptions, true),
            soonExpiredPlugins = me.filterExpiredPlugins(data.expiredPluginSubscriptions, false);

        if (data.isShopUpgraded == false) {
            me.displayShopNotUpgradedShopMessage();
        }

        if (data.notUpgradedPlugins && data.notUpgradedPlugins.length > 0) {
            me.displayNotUpgradedNotice(data.notUpgradedPlugins);
        }

        if (data.wrongVersionPlugins && data.wrongVersionPlugins.length > 0) {
            me.displayWrongVersionNotice(data.wrongVersionPlugins);
        }

        if (expiredPlugins && expiredPlugins.length > 0) {
            me.displaySubscriptionNotice(expiredPlugins);
        }

        if (soonExpiredPlugins && soonExpiredPlugins.length > 0) {
            me.displayExpiredSoonSubscriptionNotice(soonExpiredPlugins);
        }

        if (expiredLicensePlugins && expiredLicensePlugins.length > 0) {
            if (!rawData.live) {
                return;
            }

            switch (me.getExpiredMode(expiredLicensePlugins)) {
                case 'stop':
                    Ext.create('Shopware.window.ExpiredPluginStop');
                    break;
                case 'warning':
                    Ext.create('Shopware.window.ExpiredPluginWarning');
                    break;

                default:
                    me.displayExpiredLicensePluginsNotice(expiredLicensePlugins);
            }
        }

        if (soonExpiredLicensePlugins && soonExpiredLicensePlugins.length > 0) {
            me.displaySoonExpiredLicensePluginsNotice(soonExpiredLicensePlugins);
        }

        if (data.unknownLicensePlugins && data.unknownLicensePlugins.length > 0) {
            me.displayUnknownLicensePluginsNotice(data.unknownLicensePlugins);
        }
    },

    displayWrongVersionNotice: function(plugins) {
        var me = this,
            pluginNames = me.getPluginNamesMessage(plugins, '<br />');

        Shopware.Notification.createStickyGrowlMessage({
            text: Ext.String.format(me.snippets.invalid_licence, plugins.length, pluginNames),
            width: 440
        });
    },

    displayNotUpgradedNotice: function(plugins) {
        var me = this,
            pluginNames = me.getPluginNamesMessage(plugins, '<br />');

        Shopware.Notification.createStickyGrowlMessage({
            text: Ext.String.format(me.snippets.licence_upgrade_warning, plugins.length, pluginNames),
            width: 440
        });
    },

    displaySubscriptionNotice: function(plugins) {
        var me = this,
            pluginNames = me.getPluginNamesMessage(plugins, '<br />');

        if (Ext.util.Cookies.get('hideSubscriptionNotice') !== null) {
            return;
        }

        Shopware.Notification.createStickyGrowlMessage({
            text: Ext.String.format(me.snippets.subscription_warning, plugins.length, pluginNames),
            width: 440,
            onCloseButton: function() {
                Ext.Msg.confirm(
                    me.snippets.subscription,
                    me.snippets.subscription_hide_message,
                    function(answer) {
                        if (answer === 'yes') {
                            var currentDate = new Date();
                            currentDate.setDate(currentDate.getDate() + 7);
                            Ext.util.Cookies.set('hideSubscriptionNotice', 1, currentDate);
                        }
                    }
                );
            }
        });
    },

    displayExpiredSoonSubscriptionNotice: function(plugins) {
        var me = this,
            pluginNames = me.getSoonExpiredPluginNamesMessage(plugins, '<br />');

        Shopware.Notification.createStickyGrowlMessage({
            text: Ext.String.format(me.snippets.expired_soon_subscription_warning, plugins.length, pluginNames),
            width: 440
        });
    },

    displayShopNotUpgradedShopMessage: function(data) {
        var me = this;
        Shopware.Notification.createStickyGrowlMessage({
            text: '<b>' + me.snippets.shop_license_upgrade + '</b>',
            width: 440
        });
    },

    displayExpiredLicensePluginsNotice: function() {
        var me = this;

        Shopware.Notification.createStickyGrowlMessage({
            title: me.snippets.expired_license,
            text: me.snippets.expired_license_warning,
            width: 440,
            btnDetail: {
                text: me.snippets.openPluginOverview,
                callback: function () {
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.PluginManager',
                        action: 'ExpiredPlugins'
                    });
                }
            }
        });
    },

    displaySoonExpiredLicensePluginsNotice: function(plugins) {
        var me = this,
            pluginNames = me.getSoonExpiredPluginNamesMessage(plugins, '<br />');

        Shopware.Notification.createStickyGrowlMessage({
            title: me.snippets.expiring_license,
            text: Ext.String.format(me.snippets.expiring_license_warning, plugins.length, pluginNames),
            width: 440
        });
    },

    displayUnknownLicensePluginsNotice: function(plugins) {
        var me = this,
            pluginNames = me.getPluginNamesMessage(plugins, '<br />');

        Shopware.Notification.createStickyGrowlMessage({
            text: Ext.String.format(me.snippets.no_license, plugins.length, pluginNames),
            width: 440,
            onCloseButton: function() {
                Ext.Msg.alert(
                    me.snippets.unknown_license,
                    me.snippets.confirm_open_pluginmanager,
                    function() {
                        me.openPluginManager(plugins);
                    }
                );
            }
        });
    },

    /**
     * Creates a string with all plugin names as a string separated by a defined separator, the default value for the
     * separator is a ','
     * @param plugins
     * @param separator
     * @returns [string]
     */
    getPluginNamesMessage: function (plugins, separator) {
        separator = (typeof separator == 'undefined' ? ',' : separator);

        var pluginNameList = plugins.map(function (plugin) {
            return plugin.label;
        });
        return pluginNameList.join(separator);
    },

    /**
     * Filters the plugin array for expired plugins or soon expired plugins
     * @param plugins
     * @param expired
     * @returns [object]
     */
    filterExpiredPlugins: function (plugins, expired) {
        if (expired) {
            return plugins.filter(function (plugin) {
                if (plugin.expired && plugin.daysLeft == 0) {
                    return plugin;
                }
            });
        } else {
            return plugins.filter(function (plugin) {
                if (!plugin.expired && plugin.daysLeft > 0) {
                    return plugin;
                }
            });
        }
    },

    /**
     * Returns an array with all plugins names including the days left until the subscription will expire
     * @param plugins
     * @param separator
     * @returns [string]
     */
    getSoonExpiredPluginNamesMessage: function (plugins, separator) {
        var me = this;
        separator = (typeof separator == 'undefined' ? ',' : separator);

        var pluginNameList = plugins.map(function (plugin) {
            return plugin.label + ' (' + plugin.daysLeft + me.snippets.expired_soon_subscription_days_warning + ')';
        });

        return pluginNameList.join(separator);
    },

    /**
    * Sorts the plugins by days left ascending
    * @param a
    * @param b
    * @returns [number]
    */
    sortPluginsByDaysLeftCallback: function(a, b) {
        if (a.daysLeft < b.daysLeft) {
            return -1;
        }
        if (a.daysLeft > b.daysLeft) {
            return 1;
        }
        return 0;
    },

    getExpiredMode: function(expiredPlugins) {
        var modes = {
                'stop': parseInt('<?php echo 21;?>'),
                'warning': parseInt('<?php echo 14;?>')
            }, currentMode = 'normal';

        Object.keys(modes).forEach(function (mode) {
            if (currentMode !== 'normal') {
                return;
            }
            expiredPlugins.forEach(function (plugin) {
                if (plugin.dayDiff >= modes[mode]) {
                    currentMode = mode;
                }
            });
        });

        return currentMode;
    },

    openPluginManager: function() {
        Shopware.app.Application.addSubApplication({
            name: 'Shopware.apps.PluginManager'
        },
            undefined,
            function() {
                Ext.Function.defer(function () {
                    Shopware.app.Application.fireEvent('display-installed-plugins');
                }, 2000);
            }
        );
    }
});
<?php }} ?>