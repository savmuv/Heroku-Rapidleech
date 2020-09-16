<?php
if (!defined('RAPIDLEECH')) {
	require_once('index.html');
	exit;
}

/*Default Options Start*/
$default_options = array(
//General
'secretkey' => 'sdgmax', #Secret key for cookie encryption
'download_dir' => 'files/', # This is where your downloaded files are saved
'download_dir_is_changeable' => false, # true - Allow users to change the download dir
'delete_delay' => 0, # 0 - Disabled, time in SECONDS before downloaded files are deleted
'rename_prefix' => '', # i.e : prefix_filename.ext
'rename_suffix' => '', # i.e : filename_suffix.ext
'rename_underscore' => false, # true, replace spaces for underscores in file names
'bw_save' => false, # Bandwidth Saving
'file_size_limit' => 0, # 0 - Disabled, limit file size in MiB
'auto_download_disable' => false, # true - Disable auto download feature
'auto_upload_disable' => false, # true - Disable auto upload feature
'notes_disable' => false, # true - Disable notes feature
'upload_html_disable' => false, # true - Disable *.upload.html creation
'myuploads_disable' => false, # true - Disabled, limit file size in MiB
//Authorization
'login' => true, # false - Authorization mode is off, true - on
'users' => array('srundenx' => ''), # false - Authorization mode is off, enter the username and password in the given way
//Presentation
'template_used' => 'neatblue',
'default_language' => 'en',
'show_all' => true, # true - To show all files in the catalog, false to hide it
'server_info' => true, # CPU, Memory & Time Info
'ajax_refresh' => true, # Ajax Auto Refresh Server Info
'new_window' => false, # false disabled, true use new window
'new_window_js' => true, #  (only used when new_window enabled) true full size window, false javascript window
'flist_sort' => false, # true, make file list columns clickable to sort the list
'flist_h_fixed' => false, # true, make file list header and footer fixed(may not work in all browsers)
//Actions Restrictions
'disable_actions' => false, # Disable all file actions
'disable_deleting' => false, # Disable deleting in all file actions(except delete)
'disable_delete' => false,
'disable_rename' => false,
'disable_mass_rename' => false,
'disable_mass_email' => true,
'disable_email' => false,
'disable_ftp' => false,
'disable_upload' => false,
'disable_merge' => false,
'disable_split' => false,
'disable_archive_compression' => false, #true=Only allow 0% ratio compression in tar, zip and rar
'disable_tar' => false,
'disable_zip' => false,
'disable_unzip' => false,
'disable_rar' => false,
'disable_unrar' => false,
'disable_hashing' => false,
'disable_md5_change' => false,
'disable_list' => false,
//Advanced
'use_curl' => true, # true - Will use curl instead stream socket client(especially in ssl connection), disable this if filehost refuse data sended by curl. Need curl exec/extension enable in your server
'redir' => true, # true - Redirect passive method
'no_cache' => true, # true - Prohibition by Browser; otherwise allowed
'ref_check' => false, # true - Disallow downloads from external referers. In some hosts this check may give false positives, disable if it doesn't let you download.
'2gb_fix' => true, # true - Try to list files bigger than 2gb on 32 bit o.s.
'forbidden_filetypes' => array('.htaccess', '.htpasswd', '.php', '.php3', '.php4', '.php5', '.phtml', '.asp', '.aspx', '.cgi'), # Enter the forbidden filetypes in the given way
'forbidden_filetypes_block' => false, # false - rename forbidden_filetypes, true - completely block them
'rename_these_filetypes_to' => '.xxx', # If forbidden_filetypes_block = false then rename those filetypes to this
'check_these_before_unzipping' => true, # true - Don't allow extraction/creation of these filetypes from file actions
'fgc' => 0
);
/*Default Options End*/

require_once('site_checker.php');
require_once('accounts.php');

$secretkey =& $options['secretkey'];
?>