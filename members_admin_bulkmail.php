<?php

/*******************************************************
NOTE: This is a translatable file generated by IP.Board 3.4.9 (34015) on Mon, 26 Jun 2017 18:07:24 +0000 by nV1diaX
PLEASE set your text editor to save this document as UTF-8 regardless of your board's character-set
*******************************************************/



$lang = array( 
'b_leaveblank'				=> "Leave blank to not filter",
'b_njoined'				=> "Send to members who joined <strong>n</strong> days ago",
'b_ndays'				=> "Send to members whose last visit was <strong>n</strong> days ago",
'b_nposts'				=> "Send to members with <strong>n</strong> posts",
'b_addfilters'				=> "<strong>Additional Filters</strong>",
'b_groups'				=> "<strong>Send to Groups:</strong>",
'b_step2'				=> "Filters",
'b_html'				=> "Use advanced raw HTML mode",
'b_standard'				=> "Use standard mode",
'b_options'				=> "Nastavení",
'b_content'				=> "<strong>Mail Content</strong>",
'b_edit'				=> "Edit Mail",
'b_subject'				=> "<strong>Mail Subject</strong>",
'b_editstored'				=> "Editing Stored Mail",
'b_proceed'				=> "Continue &rarr;",
'b_step1_title'				=> "Mail Details",
'b_step1'				=> "Step 1: Start New Bulk Mail",
'b_lessthan'				=> "less than",
'b_morethan'				=> "more than",
'b_mailbutton'				=> "Start Sending The Mail",
'b_percycle'				=> "<strong>Number sent per cycle</strong>",
'b_sending_info'				=> "Please be aware that bulk emails are sent by a task in the System Scheduler.  They are not sent immediately upon saving or resending a bulk email.  You can manually run this task in the System Scheduler if you wish to force emails to send immediately, otherwise they will be sent based on activity on your community.<br /><br />We strongly recommend that you opt to send 20 mails per cycle as a maximum. Any more per cycle could severly affect performance of your server while the mail is being sent out.<br />As the mail is sent out in cycles of <b>n</b> per minute, it can take a while to process all the mail.",
'b_sending'				=> "<strong>Sending the Mail</strong>",
'b_editmail'				=> "Edit This Mail",
'b_maildetails'				=> "<strong>Mail Details</strong>",
'b_countmember'				=> "Sending the bulk mail to <strong>%s</strong> members",
'b_edited'				=> "Bulk mail edited!",
'b_maillogedit'				=> "Bulk mail ( %s ) edited",
'b_maillogadd'				=> "Bulk mail ( %s ) added",
'b_nonefound'				=> "Your criteria didn't match any members. Please adjust your current criteria, ensuring all correct fields are selected or entered.",
'b_nogroups'				=> "You must select at least one group to send this mail message to. Please try again.",
'b_entercont'				=> "You must enter a mail subject and mail content before submitting. Please try again.",
'b_canceled'				=> "Bulk mail canceled!",
'b_norecord'				=> "Could not find the bulk mail record you requested. Please try again.",
'b_nosend'				=> "Cannot send - the mail doesn't have a subject and content. Please try again.",
'b_initiated'				=> "Bulk mail initiated!",
'b_sent'				=> "Bulk mail sent!",
'b_noid'				=> "There was no ID passed to the mailer. Please try again.",
'b_deleted'				=> "Bulk mail deleted!",
'b_title'				=> "Bulk Mail",
'bulkmail_notes_override'				=> "Any users who have unsubscribed from bulk emails will be excluded regardless of filters chosen.",
'b_lastactive'				=> "The date that the mail recipient last visited the community",
'b_unsubscribe'				=> "Link to unsubscribe from bulk mails",
'b_var_link'				=> "Variables",
'bulkMailFilter_forums_posts'				=> "Posts",
'bulkMailFilter_members_last_visit_error'				=> "The date provided for 'Member last visited' is not valid.",
'bulkMailFilter_members_joined_error'				=> "The date provided for 'Member Joined' is not valid.",
'bulkMailFilter_members_group_desc'				=> "Leave blank for all groups",
'bulkMailFilter_members_group_secondary'				=> "Include secondary groups?",
'bulkMailFilter_members_group'				=> "Member is in group",
'bulkMailFilter_members_last_visit'				=> "Member last visited the community",
'bulkMailFilter_members_joined'				=> "Uživatel registrován",
'bmf_exactly'				=> "Exactly",
'bmf_more'				=> "More than",
'bmf_less'				=> "Less than",
'bmf_before'				=> "Before",
'bmf_after'				=> "After",
'bmf_ignore'				=> "-Ignore this filter-",
'b_preview_desc'				=> "This preview shows the email as it would be sent to you. For each member, the variable tags will be replaced appropriately.",
'bulkmail_list'				=> "Recipient List",
'bulkmail_preview'				=> "Preview",
'mandrill_tags_desc'				=> "Enter any tags, separated by commas, that you would like to use to identify this bulk mail in the Mandrill Web Application.",
'mandrill_send'				=> "Send",
'mandrill_tags'				=> "Mandrill Tags",
'mandrill_all_enable'				=> "Switch to Mandrill",
'mandrill_all_off'				=> "You are currently sending all emails from your community via your own mail server.",
'mandrill_all_change'				=> "Edit Email Settings",
'mandrill_all_on'				=> "You are currently sending all emails from your community via Mandrill's SMTP server.",
'mandrill_off'				=> "Change API Key",
'mandrill_setup_noinfo'				=> "You must provide your username and API key",
'mandrill_bad_credentials'				=> "The information provided was not accepted by Mandrill. Please check the values provided and try again.",
'mandrill_error'				=> "There was an error communicating with Mandrill. Please contact technical support for assistance.",
'mandrill_smtp_desc'				=> "If enabled, all emails sent from your community will use Mandrill's SMTP server. Otherwise, only bulk mails will be sent using Mandrill.",
'mandrill_smtp'				=> "Use Mandrill for all emails?",
'mandrill_dashboard'				=> "Mandrill Web Application",
'mandrill_api_key_desc'				=> "Once you have signed up for a Mandrill account, you can create an API key in the %s.",
'mandrill_api_key'				=> "API Key",
'mandrill_signup'				=> "Sign up for a Mandrill account",
'mandrill_username'				=> "Your Mandrill Account Username",
'mandrill_blurb'				=> "Integration with Mandrill allows you to send bulk and regular emails through the Mandrill transactional email service. This allows your bulk mails to be sent quickly and reliably, offloading the strain for your local mail server. You can also track activity and view reports using the Mandrill web application.",
'mandrill_settings'				=> "Mandrill Settings",
'mandrill'				=> "Mandrill",
'b_preview'				=> "Preview",
'b_qtag'				=> "Variables",
'b_qtag_info'				=> "You may use the following tags in your mail and they will be converted when the mail is sent.",
'b_qbname'				=> "The name of your community",
'b_qboardurl'				=> "The URL to your community",
'b_qmtotal'				=> "The total number of registered members",
'b_qptotal'				=> "The total number of posts",
'b_qonline'				=> "The most number of users online",
'b_qonlinetime'				=> "The time that the most number of members were online",
'b_qid'				=> "The member ID of the mail recipient",
'b_qmname'				=> "The member name of the mail recipient",
'b_qjoin'				=> "The join date of the mail recipient",
'b_qposts'				=> "The number of posts for the mail recipient",
'b_stored'				=> "Stored Emails",
'b_lsubject'				=> "Subject",
'b_lsenton'				=> "Sent On",
'b_lsentto'				=> "Sent To",
'b_ltime'				=> "Time Taken",
'b_notyet'				=> "Not yet sent",
'b_minutes'				=> " minutes",
'b_inprogress'				=> "Sending mail in progress",
'b_cancelconfirm'				=> "Click OK to cancel this mail",
'b_cancel'				=> "Zavřít",
'b_resenddot'				=> "Resend...",
'b_editdot'				=> "Edit...",
'b_deletedot'				=> "Delete...",
'b_create'				=> "Send New Email",
'b_nobulk'				=> "No bulk mailings to display",
 ); 
