<?php /* Smarty version Smarty-3.1.12, created on 2020-09-23 22:05:53
         compiled from "/var/www/html/shopware5_3/engine/Library/ExtJs/overrides/Ext.form.field.Time.js" */ ?>
<?php /*%%SmartyHeaderCode:4838468915f6baaa18a2bc2-12778195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f60b4e422b866f965b058d77d6eefb808ef0e4' => 
    array (
      0 => '/var/www/html/shopware5_3/engine/Library/ExtJs/overrides/Ext.form.field.Time.js',
      1 => 1516189600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4838468915f6baaa18a2bc2-12778195',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f6baaa18a3827_84797054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6baaa18a3827_84797054')) {function content_5f6baaa18a3827_84797054($_smarty_tpl) {?>/**
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
 * Shopware UI - Time field Override
 *
 * Extends the default safeParse function to allow
 * parsing partial times using the alternative formats
 */
Ext.override(Ext.form.field.Time,
/** @lends Ext.form.field.Time */
{
    /** Extends the default function to allow parsing partial times using the alternative formats. */
    safeParse: function(value, format){
        var me = this,
            utilDate = Ext.Date,
            parsedDate,
            result = null,
            altFormats = me.altFormats,
            altFormatsArray = me.altFormatsArray,
            j = 0,
            len;

        if (utilDate.formatContainsDateInfo(format)) {
            // assume we've been given a full date
            result = utilDate.parse(value, format);
        } else {
            // Use our initial safe date
            parsedDate = utilDate.parse(me.initDate + ' ' + value, me.initDateFormat + ' ' + format);
            if (parsedDate) {
                result = parsedDate;
            } else {
                if (!result && altFormats) {
                    altFormatsArray = altFormatsArray || altFormats.split('|');
                    len = altFormatsArray.length;
                    for (; j < len && !result; ++j) {
                        parsedDate = utilDate.parse(me.initDate + ' ' + value, me.initDateFormat + ' ' + altFormatsArray[j]);
                        if (parsedDate) {
                            result = parsedDate;
                        }
                    }
                }
            }
        }
        return result;
    }
});
<?php }} ?>