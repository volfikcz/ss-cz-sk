<?php

/*******************************************************
NOTE: This is a translatable file generated by IP.Board 3.4.9 (34015) on Mon, 26 Jun 2017 18:07:24 +0000 by nV1diaX
PLEASE set your text editor to save this document as UTF-8 regardless of your board's character-set
*******************************************************/



$lang = array( 
'a_msg2'				=> "You may create API users for use with the XML-RPC system which allows other applications to access IP.Board data",
'a_disabled'				=> "XML-RPC System Disabled",
'a_savechanges'				=> "Uložit změny",
'a_edituser'				=> "Edit API User: ",
'a_createnew'				=> "Create New API User",
'a_edited'				=> "API User Edited",
'a_added'				=> "API User Added",
'a_noapikey'				=> "No API user key passed!",
'a_entertitle'				=> "You must enter a title",
'a_removed'				=> "API User successfully removed.",
'a_user404'				=> "The API user could not be found.",
'a_whatuser'				=> "Could not determine the user to remove.",
'a_msg'				=> "This page shows all the recorded XML-RPC requests.<br />The red cross indicates an error during the request and a green tick indicates a successful request.",
'a_title'				=> "XML-RPC API Logs",
'a_lognoid'				=> "No log for that ID found.",
'xmlrpc_status'				=> "XML-RPC Status",
'login_notexists'				=> "MISSING",
'login_exists'				=> "EXISTS",
'l_rename_conf'				=> "Please rename each 'conf.dist.php' file in the following directories to 'conf.php':<br /><br /><ul><li>%s</li></ul>",
'l_moveto'				=> "We could not determine where you were trying to move the Log In method to.",
'l_yesinstalled'				=> "Log In method was successfully installed!",
'l_already'				=> "The Log In method you requested to install is already installed.",
'l_installer404'				=> "We could not find the installer file for the Log In method you wish to install.",
'l_uninstalled'				=> "Log In method was successfully uninstalled",
'l_disabled'				=> "disabled",
'l_enabled'				=> "enabled",
'l_successfully'				=> "Login method was successfully ",
'l_others'				=> "Other Available Login Handlers",
'l_installed'				=> "Installed Login Handlers",
'l_msg'				=> "This section will allow you to manage your log in authentication methods.  Login handlers are executed and handled, if they are enabled, in the order in which they are listed below.  You can chain together multiple login methods, or use an external data source for account authentication.<br />&nbsp;",
'l_title'				=> "Log In Authentication Manager",
'l_nav'				=> "Manage Log In Authentication",
'l_username_or_email'				=> "Username or Email Address",
'l_email'				=> "Email Address",
'l_username'				=> "Uživatelské jméno",
'l_registernew'				=> "Register New Log In Method",
'l_edited'				=> "Log In Method Edited",
'l_added'				=> "New Log In Method Added",
'l_form'				=> "You must complete the entire form.",
'l_confup'				=> "Configuration successfully updated for %s",
'l_confwrite'				=> "/conf.php must be writable - please CHMOD this file 0777",
'l_noconfigfile'				=> "We could not find the configuration file.",
'l_noconfig'				=> "This login method does not have any configuration options.",
'l_404'				=> "We could not find the login method you were attempting to configure, check, enable, uninstall, or edit. Please try again.",
're_msgcount_info'				=> "This will recount members total messages and folder counts",
'remenu_none'				=> "None",
're_msgcount'				=> "Rebuild User Messenger Totals",
'remenu_rules'				=> "Forum Rules",
'remenu_aboutme'				=> "About Me Content",
'remenu_sigs'				=> "Signatures",
'remenu_announce'				=> "Announcements",
'remenu_events'				=> "Calendar Events",
'remenu_pms'				=> "Private Messages",
'remenu_posts'				=> "Post Content",
're_uphoto_info'				=> "This will check and remove all orphaned 'photo-' photographs not assigned to a member.<br />This is moderately resource intensive.",
're_uphoto'				=> "Remove Orphaned Uploaded Photos",
're_orph_info'				=> "This will check and remove all orphaned 'post-' attachments not assigned to a post.<br />This is moderately resource intensive.",
're_orph'				=> "Remove Orphaned Attachments",
're_data_info'				=> "This will rebuild all your attachment data such as filesize, location and file extension<br />This is moderately resource intensive.",
're_data'				=> "Rebuild Attachment Data",
're_thumb_info'				=> "This will rebuild all your attachment image thumbnails to the current size. This is useful if you've recently changed the thumbnail size and wish to update all current attachments<br />This is moderately resource intensive.",
're_thumb'				=> "Rebuild Attachment Thumbnails",
're_pphoto_info'				=> "This will rebuild all your profile image thumbnails to the current size. This is useful if you've recently changed the thumbnail size and wish to update all current photos<br />This is moderately resource intensive.",
're_pphoto'				=> "Rebuild Profile Photo Thumbnails",
're_count'				=> "Rebuild User Post Counts",
're_count_info'				=> "This will recount members posts based on CURRENT posts from the database. This will almost certainly REDUCE the post counts for your members as deleted and pruned posts will no longer be counted. This should not be used if you wish to retain your member's current post counts.<br /><strong>THERE IS NO UNDO!</strong>",
're_user'				=> "Rebuild User Names",
're_user_info'				=> "This will reset the saved usernames in posts, topics, logs, etc. Useful if you've recently converted or manually changed member's names.",
're_seouser_info'				=> "This will reset the SEO display name for all members",
're_seouser'				=> "Rebuild Users' SEO Names",
're_rebuildbutton'				=> "Rebuild Content",
're_rebuild_info'				=> "This will rebuild the submitted content including BBCode, custom bbcode, HTML (where allowed) and emoticons. This is only necessary upon upgrading to IP.Board 3.0, and does not need to be run more than once.",
're_rebuild'				=> "Rebuild Content [Posts, Calendar Entries, Private Messages, Announcements, Signatures, etc.]",
're_topics_info'				=> "This will rebuild tag caches, recount replies, attachment count and the topic starter and last poster for all your topics.",
're_topics'				=> "Resynchronize Topics",
're_forums_info'				=> "This will recount replies, views, and the topic starter and last poster for all your forums.",
're_s_most'				=> "Reset 'Most online' statistic?",
're_forums'				=> "Resynchronize Forums",
're_s_total'				=> "Recount total topics and posts",
're_s_members'				=> "Recount Members",
're_s_last'				=> "Reset last registered member",
're_stats'				=> "Recount Statistics",
're_percycle'				=> "Per Cycle",
're_ban_info'				=> "After an upgrade from a previous version, you may find that your ban settings are no longer stored.<br />Running this tool attempts to import your old ban settings. Old entries will not overwrite new entries.",
're_ban'				=> "Find & Restore old IPB Ban Settings",
're_converge_info'				=> "After an upgrade from a previous version or import from another forum software, you may find that because several of your members have used duplicate email addresses, their account has been moved into the validating group.<br />This tool finds these members and restores them into the default member group and asks them to change their email address.",
're_converge'				=> "Find & Restore 'Converged' Members",
're_dupe1_info'				=> "After an upgrade from a previous version or import from another forum software, you may find that due to running an upgrade tool twice or a time-out you'll end up with some duplicate tools in the System Settings.<br />This tool finds the duplicates which have a greater ID than the original.",
're_dupe1'				=> "Remove Duplicate System Settings from IPB 2.0.x",
're_polls_info'				=> "This tool converts IPB 2.0.x polls to the new format. Use this tool after a manual upgrade or when some polls didn't convert.",
're_polls'				=> "Convert 2.0.x Polls to 2.1.x Format",
're_events_info'				=> "This tool converts IPB 2.0.x calendar events to the new format. Use this tool after a manual upgrade or when some calendar events didn't convert.",
're_events'				=> "Convert 2.0.x Calendar Events to 2.1.x Format",
're_dupe2_info'				=> "After an upgrade from IPB 2.0.x or import from another forum software, you may find that due to running an upgrade tool twice or a time-out you'll end up with some duplicate tool groups in the System Settings.",
're_dupe2'				=> "Remove Duplicate System Setting Groups from IPB 2.1.x",
're_1xto20_info'				=> "These tools will clean up and rebuild content from an upgrade from the IP.Board 1.x.x series",
're_21to22_info'				=> "These tools will clean up and rebuild content from an upgrade from the IP.Board 2.1.x series",
're_20to21_info'				=> "These tools will clean up and rebuild content from an upgrade from the IP.Board 2.0.x series",
're_1xto20'				=> "IP.Board 1.x.x -> 2.0.0 Upgrade Tools",
're_20to21'				=> "IP.Board 2.0.x -> 2.1.0 Upgrade Tools",
're_21to22'				=> "IP.Board 2.1.x -> 2.2.0 Upgrade Tools",
're_230to300'				=> "IP.Board 2.3.x -> 3.0.x Upgrade Tools",
're_310to320'				=> "IP.Board 3.1.x -> 3.2.x Upgrade Tools",
're_runtool'				=> "RUN TOOL &gt;&gt;",
're_300pms_info'				=> "If you chose to skip PM conversion during the upgrade and cannot run the shell tool, then please run this tool",
're_300pms'				=> "Convert 2.x PMs To 3.0.x Format",
're_msgsconverted'				=> "PMs have already been converted. No action required",
're_pmsconverted'				=> "All PMs converted",
're_320photos_info'				=> "IP.Board 3.2.x has one image to identify every user.  You can use this tool upon upgrading to convert avatars or photos from IP.Board 3.1.x to IP.Board 3.2 photos.",
're_title'				=> "Recount & Rebuild Manager",
're_320photos'				=> "Convert 3.1 avatars/photos to 3.2 photos",
're_processed'				=> "Processed topic ",
're_noresizefound'				=> "Could not find file to resize: ",
're_noremove'				=> "Could not remove: ",
're_resized'				=> "Resized: ",
're_rebuildcomp'				=> "<strong>Rebuild completed</strong>",
're_thisgoeshere'				=> "<strong>Up to %s processed so far, continuing...</strong>",
're_attachedok'				=> "Attached file OK:",
're_statsrecount'				=> "Statistics Recounted",
're_statscenter'				=> "Recount Statistics Section",
're_removedorph'				=> "Removed orphan:",
're_pollconverted'				=> "<strong>Polls converted</strong>",
're_nothing'				=> "Nothing to recount!",
're_pollstartto'				=> "<strong>Polls: %s to %s of %s completed...</strong>",
're_calconverted'				=> "<strong>Calendar events converted</strong>",
're_calalready'				=> "Calendar events already converted.",
're_calstartto'				=> "<strong>Calendar events: %s to %s completed...</strong>",
're_deletingid'				=> "Deleting: %s ID %s",
're_keepingid'				=> "KEEPING: %s ID %s",
're_duplicatetitle'				=> "%s duplicate setting titles deleted<br />%s",
're_calremoved'				=> "You cannot run this tool as the old calendar_events table has been removed.",
're_deletetitle'				=> "%s duplicate setting titles deleted and %s duplicate settings deleted.",
're_convergerest'				=> "%s members found and restored.",
'h_remove'				=> "Remove",
'h_addnew'				=> "Add New Help File",
're_bansimport'				=> "%s IP address(es) imported, %s email address(es) imported, %s name(s) imported.",
'h_edit'				=> "Edit",
'h_current'				=> "Current Help Files",
'h_ftitle'				=> "Title",
'h_export'				=> "Export XML into App Dirs",
'h_filetext'				=> "Help File Text",
'h_fileapp'				=> "Help File Application",
'h_filedesc'				=> "Help File Description",
'h_filetitle'				=> "Help File Title",
'h_exported'				=> "Help Files Exported as XML",
'h_import_added'				=> "App: %s - %s added, %s updated help files inserted",
'h_addlog'				=> "Added a help file",
'h_import'				=> "Import App XML Files",
'h_imported'				=> "XML Files Imported",
'h_editbutton'				=> "Edit this Help File",
'h_addbutton'				=> "Add this Help File",
'h_title'				=> "Help File Management",
'h_404'				=> "We could not find that help file in the database. Please try again.",
'h_removed'				=> "Removed a help file",
'h_entertitle'				=> "You must enter a title. Please try again.",
'h_added'				=> "Added a help file",
'h_edited'				=> "Edited help files ",
'h_noid'				=> "You must pass a valid ID. Please try again.",
't_l_moredetails'				=> "Více",
't_l_export'				=> "Export...",
't_l_uninstall'				=> "Uninstall...",
't_import'				=> "Import",
'ua_rebuild_master'				=> "Rebuild Default User Agents",
't_l_enable'				=> "Enable",
't_l_disable'				=> "Disable",
't_l_configdetails'				=> "Configure Details...",
't_l_html3_info'				=> "If 'yes' the above HTML will replace the log in form. If 'no' it will be added alongside the log in form.",
't_l_nomethods'				=> "There are no %s login methods available",
't_l_html3'				=> "<strong class='title'>Log In HTML Replace Form</strong>",
't_l_html2'				=> "<strong class='title'>ACP Log In Form HTML</strong>",
't_l_html2_info'				=> "Enter the HTML to add or replace the ACP log in form.",
't_l_html_info'				=> "Enter the HTML to add or replace the log in form.",
't_l_type'				=> "<strong class='title'>Login Type</strong>",
't_l_html'				=> "<strong class='title'>Log In Form HTML</strong>",
't_configdetails'				=> "Configuration Details for",
't_uacapture_desc'				=> "(If yes, enter the parenthesis # you wish to capture)",
't_uaregex'				=> "Regex:",
't_uacapture'				=> "Regex Capture Version Number?",
't_ua_position'				=> "User Agent Position:",
't_uaother'				=> "Other",
't_uasearchengine'				=> "Search Engine",
't_uatype'				=> "User Agent Type:",
't_uabrowser'				=> "Web Browser",
't_uakey'				=> "User Agent Key:",
't_uakey_desc'				=> "(Alphanumerics and underscore only; Example: firefox)",
't_uaname_desc'				=> "(Example: Firefox)",
't_uaname'				=> "User Agent Name:",
't_uaposition'				=> "Position:",
't_ua_editing'				=> "Editing:",
't_uaaddnew'				=> "Add New User Agent",
't_uamanagement'				=> "User Agent Management",
't_ua_longtext'				=> "Each user agent has a numerical position. Search engines start from 0 and browsers start from 1000. It is strongly recommended that you always allow search engine user agents to be positioned before web browsers otherwise they may be incorrectly identified as web browsers as most search engines have 'Mozilla' in the user agent.<br /><br />It is also recommended that you allow 'Explorer', 'Netscape' and 'Mozilla' to be positioned last. Many other browsers contain 'Explorer' or 'Mozilla' in the user agent which could lead to incorrect identifications.",
't_ua_information'				=> "Information",
't_ua_nonein'				=> "I can see you have no user agents installed! <a href='%s%s&amp;do=rebuildMaster'>Click me to build the master User Agent list</a>",
't_ua_none'				=> "You do not have any User Agent Groups set up.",
't_ua_removeg'				=> "Remove Group...",
't_ua_groups'				=> "User Agent Groups",
't_ua_editg'				=> "Edit Group...",
'tua_manage'				=> "Manage User Agents",
't_uamanagegroup'				=> "Manage User Agent Groups",
't_uaclose'				=> "Close",
't_uasave'				=> "Save",
't_ua_info'				=> "You can limit the match to specific versions. Simply enter the version you wish to match in the box. If you wish to match multiple versions, separate them with a comma (4,5,9). If you want to match a version or higher, enter the version followed by a plus sign (7+). If you want to match a version or less, enter the version followed by a minus sign (6-).<br />Leave it blank to match all versions of this user-agent.",
't_uaediting'				=> "Editing Versions for",
't_uaconfigure'				=> "Configure",
't_uarevert'				=> "Revert",
't_uaversions'				=> "Versions",
't_uaremove'				=> "Remove",
't_uaedit'				=> "Edit",
't_uaallavail'				=> "All Available Agents (Click to add to group)",
't_uagroups'				=> "This Group's Agents",
't_uatitle'				=> "<strong>User Agent Group Title</strong>",
'tol_add_this_option_into_the_setti'				=> "Add this option into the settings cache?",
'tol_make_a_default_setting_cannot_'				=> "Make a default setting (cannot be removed by user)?",
'tol_enter_title_here_or_leave_blan'				=> "Enter a subtitle here to group this and following settings",
'tol_start_setting_group'				=> "Setting Sub-grouping?",
'tol_036show_1_is_set_when_showing_'				=> "&#036;show = 1; is set when showing setting.<br />&#036;save = 1; is set when saving the setting.<br />Use &#036;key and &#036;value when writing PHP code.",
'tol_raw_php_code_to_eval_before_sh'				=> "Raw PHP code to eval before showing and saving?",
'tol_use_for_creating_form_element_'				=> "Use for creating form element extras.<br />Drop down box use: Key=Value; one per line.",
'tol_setting_extra'				=> "Setting Extra",
'tol_setting_default_value'				=> "Setting Default Value",
'tol_setting_current_value'				=> "Setting Current Value",
'tol_setting_key'				=> "Setting Key",
'tol_setting_type'				=> "Setting Type",
'tol_setting_group'				=> "Setting Group",
'tol_setting_description'				=> "Setting Description",
'tol_setting_position'				=> "Setting Position",
'tol_setting_title'				=> "Setting Title",
'tol_update_settings'				=> "Update Settings",
'tol_hide_from_main_settings_list'				=> "Hide from main settings list?",
'tol_used_to_pull_this_from_the_db_'				=> "Used to pull this from the DB without relying on an ID",
'tol_settings_groups'				=> "Settings Groups",
'tol_setting_group_title'				=> "Group Title",
'tol_setting_group_application'				=> "Group Application",
'tol_setting_group_tab'				=> "Group Tab",
'tol_setting_group_description'				=> "Group Description",
'tol_setting_group_keyword'				=> "Group Keyword",
'tol_search_settings'				=> "Search Settings...",
'tol_go'				=> "Go",
'tol_the_file_must_be_uploaded_into'				=> "The file must be uploaded into the './admin/' folder",
'tol_or_enter_the_filename_of_the_x'				=> "<u>OR</u> enter the filename of the XML settings file",
'tol_duplicate_entries_will_not_be_'				=> "Duplicate entries will not be overwritten but the default setting and other options will be updated. The file must end with either '.xml' or '.xml.gz'",
'tol_delete_settings_group'				=> "Delete Settings Group...",
'tol_recount_settings_group'				=> "Recount Settings Group...",
'tol_import_xml_settings'				=> "Import XML Settings",
'tol_upload_xml_settings_file_from_'				=> "Upload XML settings file from your computer",
'tol_edit_settings_group'				=> "Edit Settings Group...",
'tol_manage_settings'				=> "Manage Settings...",
'tol_folder'				=> "Folder",
'tol_recache_all'				=> "Recache All",
'tol_total_cache_size'				=> "Total Cache Size",
'tol_view_cache'				=> "View Cache",
'tol_recache_cache'				=> "Recache Cache",
'tol_not_loaded_on_initialization'				=> "NOT loaded on Initialization",
'tol_loaded_on_initialization_canno'				=> "Loaded on Initialization",
'tol_loaded_on_initialization'				=> "Loaded on Initialization",
'tol_init_state'				=> "Init State",
'tol_caches'				=> "Caches",
'tol_size'				=> "Size",
'tol_global_caches'				=> "Core Caches",
'tol_cache_management'				=> "Cache Management",
'tol_diagnostics'				=> "Diagnostics...",
'tol_install'				=> "Install...",
'tol_edit_details'				=> "Edit Details...",
'tol_cannot_be_deleted_or_edited_by'				=> "Cannot be deleted or edited by user",
'tol_enable_safemode'				=> "Enable Safemode?",
'tol_if_yes_this_log_in_will_be_ena'				=> "",
'tol_the_url_for_the_place_to_log_o'				=> "(Optional) The URL to send the user to when they request to log out.",
'tol_log_in_user_log_out_url'				=> "Log In User Log Out URL",
'tol_the_url_for_the_place_to_log_i'				=> "(Optional) The URL to send the user to when they request to log in.",
'tol_log_in_user_log_in_url'				=> "Log In User Log In URL",
'tol_the_url_for_the_place_to_regis'				=> "(Optional) The URL to send the user to when they attempt to register a new account.",
'tol_log_in_user_register_url'				=> "Log In User Register URL",
'tol_the_url_for_the_place_they_can'				=> "(Optional) The URL to send a user to when they request to change their email address or password.",
'tol_log_in_user_maintenance_url'				=> "Log In User Maintenance URL",
'tol_the_main_folder_the_php_files_'				=> "The main folder the PHP files reside.<br />E.G: If ./sources/loginauth/<strong>internal</strong>/auth.php then enter: internal",
'tol_a_short_description_for_this_l'				=> "A short description for this log in method",
'tol_log_in_files_folder_name'				=> "Log In Files Folder Name",
'tol_log_in_description'				=> "Log In Description",
'tol_log_in_title'				=> "Log In Title",
'tol_writeable'				=> "Writeable",
'tol_exists'				=> "Exists",
'tol_auth_exists'				=> "Auth file exists?",
'tol_file_name'				=> "File Name",
'tol_log_in_has_settings'				=> "Log In Has Settings",
'tol_log_in_installed'				=> "Log In Installed",
'tol_log_in_enabled'				=> "Log In Enabled",
'tol_diagnostics_title'				=> "Log In Method Diagnostics",
'tol_diagnostics_for'				=> "Diagnostics for",
'tol_register_new_log_in_method'				=> "Add Log In Method",
'tol_options'				=> "Options",
'tol_registered_log_in_authenticati'				=> "Registered Log In Authentication Methods",
'tol_add_new_setting_group'				=> "Add New Setting Group",
'tol_settings'				=> "Settings",
'cc_processed'				=> "Removal Completed: %s items removed",
'perf_help_information'				=> "Performance mode allows you to easily disable many of the slightly more resource intensive features of your site that are not fully critical to your site's operation.  Examples include private conversations and searching.  The system will remember the current settings, so that you can easily reverse this change at a later time.  If you receive a sudden influx of traffic, you can use this feature to address the spike in activity quickly.",
'cc_sigs'				=> "Cached Signatures",
'cc_posts'				=> "Cached Posts",
'cc_header'				=> "Cached Content",
'cc_remove_seven'				=> "Remove items older than %s days",
'login_manage_enabled'				=> "Enabled?",
'cc_remove_all'				=> "Remove all items",
'setting_staff_tag'				=> "( STAFF )",
'add_setting_button'				=> "Add New Setting",
'noneed_rebuild_again'				=> "You do not need to rebuild this content again.",
'settings_h_prefix'				=> "Settings: ",
'rebuild_process_f'				=> "Processed forum %s",
'tools300pms'				=> "Checked %s PMs so far. This cycle: %s Private Messages converted into conversations..",
'sl_deletebook'				=> "Delete",
'sl_editbook'				=> "Edit...",
'sl_title'				=> "Title",
'sl_m_title'				=> "Share Link Services",
'sl_services'				=> "Services",
'sl_add'				=> "Add Service",
'sl_icon_info'				=> "Images are located in public/style_extra/sharelinks/",
'sl_icon'				=> "Icon",
'sl_url_info'				=> "Use '%title%' and '%url%' as replacements from the blog entry title and URL",
'license_key_test_in_use'				=> "You have entered a test license key which is already in use on another site. Try entering the key without the -TESTINSTALL suffix.",
'license_refresh'				=> "Reload",
'sl_current_title'				=> "Share Services",
'sl_url'				=> "URL",
'license_key_notfound'				=> "Your license key appears to be invalid.  Please check the key you have entered is valid and is not already in use. If you require assistance, please contact technical support.",
'license_key_bad'				=> "Your license key could not be activated. Please contact technical support.",
'license_key_server_error'				=> "There was an error contacting the license server, please try again later",
'license_cache'				=> "Displaying cached license data from %s, <a href='%s'>click here</a> to refresh the data.",
'license_url'				=> "Community URL",
'license_activate'				=> "Activate Your License",
'license_services'				=> "License Services",
'license_addons'				=> "License Addons",
'license_key'				=> "License Key",
'login_method_missing_functions'				=> "PHP functions required by this login method are missing: %s",
'pop3_okay'				=> "Test successful: %d messages found.",
'pop3_err_stats'				=> "Could not retrieve mailbox statistics",
'pop3_err_login'				=> "Could not log in",
'pop3_err_connect'				=> "Could not connect to the server",
'ie_test_pop3'				=> "Test POP3",
'ie_deleted'				=> "Deleted Incoming Email Rule %s",
'ie_delete_done'				=> "Rule Deleted",
'ie_sendto'				=> "Send to: ",
'ie_updated'				=> "Altered Incoming Email Rule %s",
'ie_added'				=> "Added Incoming Email Rule %s",
'ie_saved'				=> "Rule Saved",
'ie_ignore'				=> "Ignore Message",
'ie_save'				=> "Save Rule",
'ie_rule'				=> "Rule",
'ie_ct_regx'				=> "Matches Regular Expression",
'ie_ct_eqls'				=> "Equals",
'ie_ct_ctns'				=> "Contains",
'ie_cf_body'				=> "Body",
'ie_cf_sbjt'				=> "Subject",
'ie_cf_to'				=> "Destination Email",
'ie_cf_from'				=> "Sender Email",
'ie_not_found'				=> "Could not locate the rule you are trying to edit.",
'ie_none'				=> "No rules to show",
'ie_action'				=> "Action",
'ie_criteria'				=> "Criteria",
'ie_edit'				=> "Edit Rule",
'ie_add'				=> "Add Rule",
'ie_title'				=> "Incoming Email Rules",
'sl_formerror'				=> "Form Error",
'sl_removed'				=> "Share link service removed",
'sl_updated'				=> "Share link service '%s' updated",
'sl_added'				=> "Share link service '%s' added",
'sl_must_key'				=> "You must enter a key",
'sl_must_url'				=> "You must enter a URL format",
'sl_must_title'				=> "You must enter a title",
'sl_form_groups_desc'				=> "Leave blank for all groups",
'sl_form_groups'				=> "Can be used by",
'sl_form_canonical'				=> "Use Canonical URL",
'sl_form_enabled'				=> "Enabled",
'sl_form_key_info'				=> "Unique key used to identify the php plugin file for this link method: /admin/sources/classes/share/plugins/KEY.php<br />It is also used as the icon file name: /public/style_extra/sharelinks/KEY.png",
'sl_form_key'				=> "Key",
'sl_form_url_info'				=> "Use '{title}' and '{url}' as replacements from the blog entry title and URL",
'sl_form_url'				=> "URL Format",
'sl_form_title'				=> "Link Service Name",
'sl_form_edit_button'				=> "Uložit změny",
'sl_form_main_title'				=> "Service Information",
'sl_form_new_title'				=> "Add New Share Link Service",
'sl_form_new_button'				=> "Add Service",
'sl_form_edit_title'				=> "Edit Share Link Service",
'removelicensekey'				=> "Remove License Key",
'uaversions'				=> "Versions:",
'editloginmethod'				=> "Edit Log In Method ",
'rebuild_furl_link'				=> "Rebuild FURL Cache",
'rebuild_furl_title'				=> "Rebuilds the friendly URL cache file from all apps",
'gcaches_rebuild_cache'				=> "Rebuild Global Caches Cache",
'gcaches_no_data'				=> "There are no global caches active, there is no need to rebuild anything",
'gcaches_cannot_write'				=> "Could not write to the cache file, please check permissions on /cache and /cache/globalCaches.php",
'gcaches_cache_rebuilt'				=> "Global Caches cache rebuilt",
'qastatus'				=> "Q&amp;A Status",
'qa_createonenow'				=> "Create one now",
'qahelp_infos'				=> "Question and Answer Challenges can help provide another line of defense against spam bots that attempt to register in your community. By setting some challenge questions unique to your site, general-purpose spam bots will find it more difficult to complete the registration process and in turn spam your community.",
'expires_prefix'				=> "Expires:",
'settings_suffix'				=> "settings",
'ipssoftware_license'				=> "IPS Software License",
'qa_form_answers_extra'				=> "Be sure to add multiple answers where different spellings may be acceptable, for example between American &amp; British English",
're_photosconverted'				=> "All photos converted successfully",
'tools320photos'				=> "Up to %s photos converted so far (%s photos this cycle)",
're_cp_photos'				=> "Profile Photos",
'license_lifetime'				=> "<em>Never</em>",
're_convertfromphotos'				=> "Convert From",
're_cp_avatars'				=> "Avatars",
'rep_count_info'				=> "This will recount members' reputation based on CURRENT posts from the database. For example, if a user was given reputation on a post which has now been deleted, they will lose the reputation for that post. This will almost certainly REDUCE the reputation points for your members as deleted and pruned posts will no longer be counted. This should not be used if you wish to retain your members' current reputation points.<br /><strong>THERE IS NO UNDO!</strong>",
'rep_count'				=> "Rebuild User Reputation",
'uagent_locate'				=> "Could not locate the user agent you are trying to edit.",
'uagent_reverted'				=> "The user agent has been reverted.",
'windowslive_help'				=> "For assistance setting up Windows Live, visit the Community Enhancements page.",
'ipsconnect_details'				=> "If you would like to use this community as the master in an IPS Connect network, the details are:<br /><strong>URL: </strong>%s<br /><strong>Key: </strong>%s<br /><br /><strong>Note:</strong> You can use an IP.Board installation as either a master or a slave in an IPS Connect network, but not both.  If this installation is the master, do <em>not</em> enable the IPS Connect login method.",
'l_slave_master_slave'				=> "You cannot set an IPS Connect master installation to be a slave of itself.  If you are trying to configure this installation as a master in an IPS Connect network you do not need to enable or configure the IPS Connect login method on this installation.  If you are trying to configure this installation as a slave in an IPS Connect network, please check the information supplied and resubmit.",
'a_msg3'				=> "<strong>The XML-RPC system is not enabled!</strong><br />All API requests will fail. <a href='%s&amp;module=settings&amp;section=settings&amp;do=setting_view&amp;conf_title_keyword=xmlrpcapi'>Click here to enable it</a>",
'a_msg4'				=> "You may create API users for use with the XML-RPC system which allows other applications to access IP.Board data",
'a_detail'				=> "XML-RPC Log Detail",
'a_basics'				=> "<strong>Basics</strong>",
'a_key'				=> "API Key",
'a_ip'				=> "IP Address",
'a_time'				=> "Time",
'a_success'				=> "Success",
'a_formdata'				=> "<strong>XML-RPC Data (Form Data)</strong>",
'a_requestlog'				=> "XML-RPC Request Log",
'a_date'				=> "Date",
'a_status'				=> "Status",
'a_log'				=> "Log",
'a_viewdetails'				=> "View Details",
'a_users'				=> "XML-RPC API Users",
'a_user'				=> "API User",
'a_edit'				=> "Edit API User",
'a_remove'				=> "Remove API User",
'a_nousers'				=> "There are no API users currently.",
'a_createone'				=> "Add a new user",
'a_create'				=> "Create New API User",
'a_userbasics'				=> "API User Basics",
'a_userkey'				=> "API User Key",
'a_key_info'				=> "This key is automatically generated and will be re-generated if you refresh this form.",
'a_usertitle'				=> "API User Title",
'a_usertitle_info'				=> "The title is just a name for your records for easier identification.",
'a_restrictip'				=> "API Restrict IP",
'a_restrictip_info'				=> "<strong>Optional</strong>: You may enter the IP Address of the server you only wish to grant access. This increases security and is recommended.",
'a_grant_functions'				=> "Select functions to which you grant access",
'a_allowaccess'				=> "Allow access to",
'a_save'				=> "Save",
's_missing_key_data'				=> "You must supply at least a title and key.",
's_keyinuse_already'				=> "The setting key you selected is already in use.",
's_nofile'				=> "No upload file was found or no filename was specified.",
's_noopen'				=> "Could not find the file to open at: %s",
's_noneupdate'				=> "No settings to update.",
's_upandin'				=> "%s settings updated. %s settings inserted.",
's_cantremove'				=> "You cannot remove this setting group as it still contains active settings. Please remove the settings inside it first.",
's_remove'				=> "Setting Group Removed",
's_recounted'				=> "Setting Group Recounted",
's_createnew'				=> "Create New Setting Group",
's_noid'				=> "No ID was passed. Please try again.",
's_notitle'				=> "You must enter a title for this group.",
's_nokeyword'				=> "You must enter a keyword for this group.",
's_editsetting'				=> "Edit Setting %s",
's_savechanges'				=> "Uložit změny",
's_title'				=> "Add New Setting Group",
's_added'				=> "New Setting Group Added",
's_edited'				=> "Setting Group Edited",
's_input'				=> "Text Input",
's_dropdown'				=> "Drop Down",
's_yes_no'				=> "Yes/No Radio Buttons",
's_textarea'				=> "Text Area",
's_editor'				=> "Full Editor",
's_multi'				=> "Multi-Select",
's_name_autocomplete'				=> "Member Name Auto Complete Field",
's_nogroup'				=> "No group was passed. Please try again.",
's_nomatches'				=> "Unfortunately your search for <strong>%s</strong> produced no matches. Please try another phrase.",
's_searchedfor'				=> "Searched for: %s",
's_set4group'				=> "Settings for group: %s",
's_revertback'				=> "Revert to default value",
's_delete'				=> "Delete",
's_edit'				=> "Edit",
's_nofields'				=> "No fields were passed to be saved. Please try again.",
's_updated'				=> "Settings updated",
's_added2'				=> "New Setting Added",
's_edited2'				=> "Setting Edited",
's_revertedback'				=> "Configuration setting reverted back to default.",
's_deleted'				=> "Configuration Setting Deleted",
's_sometoexport'				=> "You must select SOME settings to export!",
's_global_dd'				=> "Global Settings",
's_createnewtitle'				=> "Create New Setting",
's_ishidden'				=> "(Hidden)",
'setting_keywords'				=> "Setting Keywords",
'setting_keywords_desc'				=> "You can enter keywords that will be searched when someone uses the ACP quick search to pull up this setting (space or comma separated)",
'export_helptitle'				=> "Export Selected System Settings",
'choose_export'				=> "Choose settings to export",
'export_selected'				=> "EXPORT SELECTED",
'choose_to_export_single'				=> "Export Selected Settings",
'export_group'				=> "Export this group",
'conf_desc_search'				=> "In Group: ",
'c_noid'				=> "No ID was passed. Please try again.",
'c_processed'				=> "processed...",
'c_recachethecachegetitgotitgood'				=> "Cache re-cached",
'c_title'				=> "Cache Management",
'c_msg'				=> "You can check and rebuild your caches from this control panel.",
'cache__of'				=> "of",
'cache__posts'				=> "posts",
'cache__signatures'				=> "signatures",
'mr_completed'				=> "Completed!",
'ua_addnewtitle'				=> "Add New User Agent Group",
'ua_addnewbutton'				=> "Add New Group",
'ua_noid'				=> "No ID was passed. Please try again.",
'ua_editua'				=> "Edit User Agent Group %s",
'ua_savechanges'				=> "Uložit změny",
'ua_nav1'				=> "Manage User Agent Groups",
'ua_nav2'				=> "Manage User Agents",
'ua_unknown'				=> "Unknown Group ",
'postform_badmd5'				=> "Key did not match",
'qa_noid'				=> "We could not determine which question you were trying to delete.",
'qa_deleted'				=> "The question has been deleted.",
'qa_help_title'				=> "Registration Question and Answer Challenges",
'qa_addlink'				=> "Add New Question",
'qa_current'				=> "Current Questions",
'qa_edit'				=> "Edit",
'qa_delete'				=> "Delete",
'qa_none'				=> "There are no challenge questions created yet",
'qa_noeditid'				=> "We could not determine which question you were trying to edit.",
'qa_404'				=> "We could not determine which question you were trying to edit.",
'qa_editbutton'				=> "Edit Question",
'qa_addbutton'				=> "Add Question",
'qa_form_question'				=> "Question",
'qa_form_answers'				=> "Valid answers.  One per line.",
'qa_addlog'				=> "Added a registration question",
'qa_edited'				=> "Edited a registration question",
'qa_options'				=> "Nastavení",
'qa_not_on_title'				=> "Warning: Question &amp; Answer not enabled",
'qa_not_on_desc'				=> "If you wish for your Question &amp; Answers to show, please click <a href='%s'>here</a> to switch the system on",
'qa_no_question'				=> "You must enter a question.",
'qa_no_answer'				=> "You must enter an answer.",
'perf_help_title'				=> "Toggle Performance Mode",
'perf_current'				=> "Current Status",
'perf_on'				=> "ENABLED",
'perf_off'				=> "Disabled",
'perf_toggle'				=> "Toggle now",
'perf_enabled_setting'				=> "Enabled setting: %s",
'perf_disabled_setting'				=> "Disabled setting: %s",
'perf_enabled_group'				=> "Enabled group setting '%s' for group %s",
'perf_disabled_group'				=> "Disabled group setting '%s' for group %s",
'perf_dispms'				=> "Disabled private conversations",
'perf_discal'				=> "Disabled calendar",
'perf_disonline'				=> "Disabled online list",
'perf_dishooks'				=> "Disabled hooks",
'perf_enpms'				=> "Enabled private conversations",
'perf_encal'				=> "Enabled calendar",
'perf_enonline'				=> "Enabled online list",
'perf_enhooks'				=> "Enabled hooks",
'settings_nofile'				=> "There were no settings to import",
 ); 
