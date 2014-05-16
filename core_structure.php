<?php

$STRUCTURE = array();

$STRUCTURE["2.0.0"] = array();
$STRUCTURE["2.0.0"]["tables"] = array();
$STRUCTURE["2.0.0"]["tables"]["accounts"] = array(
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "account_type",
    "Type"    => "enum('admin','client')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "client"
  ),
  array(
    "Field"   => "account_status",
    "Type"    => "enum('active','disabled','pending')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "disabled"
  ),
  array(
    "Field"   => "ui_language",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "en_us"
  ),
  array(
    "Field"   => "timezone_offset",
    "Type"    => "varchar(4)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "sessions_timeout",
    "Type"    => "varchar(10)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "30"
  ),
  array(
    "Field"   => "date_format",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "M jS, g:i A"
  ),
  array(
    "Field"   => "login_page",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "client_forms"
  ),
  array(
    "Field"   => "logout_url",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "theme",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "default"
  ),
  array(
    "Field"   => "menu_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "first_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "last_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "username",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "password",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["account_settings"] = array(
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_value",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["client_forms"] = array(
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["client_views"] = array(
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["email_templates"] = array(
  array(
    "Field"   => "email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_template_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_status",
    "Type"    => "enum('enabled','disabled')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "enabled"
  ),
  array(
    "Field"   => "view_mapping_type",
    "Type"    => "enum('all','specific')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "all"
  ),
  array(
    "Field"   => "view_mapping_view_id",
    "Type"    => "mediumint(9)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "limit_email_content_to_fields_in_view",
    "Type"    => "mediumint(9)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_event_trigger",
    "Type"    => "set('on_submission','on_edit','on_delete')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "include_on_edit_submission_page",
    "Type"    => "enum('no','all_views','specific_views')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "subject",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_from",
    "Type"    => "enum('admin','client','form_email_field','custom','none')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_from_account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_from_form_email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_from_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_from_email",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_reply_to",
    "Type"    => "enum('admin','client','form_email_field','custom','none')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_reply_to_account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_reply_to_form_email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_reply_to_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_reply_to_email",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "html_template",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "text_template",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["email_template_edit_submission_views"] = array(
  array(
    "Field"   => "email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["email_template_recipients"] = array(
  array(
    "Field"   => "recipient_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "email_template_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "recipient_user_type",
    "Type"    => "enum('admin','client','form_email_field','custom')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "recipient_type",
    "Type"    => "enum('main','cc','bcc')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "main"
  ),
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(9)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "form_email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_recipient_name",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_recipient_email",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["field_options"] = array(
  array(
    "Field"   => "field_group_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "option_order",
    "Type"    => "smallint(4)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "option_value",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "option_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["field_option_groups"] = array(
  array(
    "Field"   => "group_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "group_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "original_form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_orientation",
    "Type"    => "enum('horizontal','vertical','na')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "na"
  )
);
$STRUCTURE["2.0.0"]["tables"]["field_settings"] = array(
  array(
    "Field"   => "field_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_value",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => "core"
  )
);
$STRUCTURE["2.0.0"]["tables"]["forms"] = array(
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(9) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "access_type",
    "Type"    => "enum('admin','public','private')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "public"
  ),
  array(
    "Field"   => "submission_type",
    "Type"    => "enum('code','direct')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "date_created",
    "Type"    => "datetime",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_active",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_initialized",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_complete",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_multi_page_form",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "form_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "form_url",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "redirect_url",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "auto_delete_submission_files",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "submission_strip_tags",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "default_view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "edit_submission_page_label",
    "Type"    => "text",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["form_email_fields"] = array(
  array(
    "Field"   => "form_email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_field",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "first_name_field",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "last_name_field",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["form_fields"] = array(
  array(
    "Field"   => "field_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "0"
  ),
  array(
    "Field"   => "field_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_test_value",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_size",
    "Type"    => "enum('tiny','small','medium','large','very_large')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => "medium"
  ),
  array(
    "Field"   => "field_type",
    "Type"    => "enum('select','multi-select','radio-buttons','checkboxes','file','textbox','textarea','system','wysiwyg','date','image','password')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "textbox"
  ),
  array(
    "Field"   => "data_type",
    "Type"    => "enum('string','number','date')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "string"
  ),
  array(
    "Field"   => "field_title",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "col_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "include_on_redirect",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "field_group_id",
    "Type"    => "mediumint(9)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["hooks"] = array(
  array(
    "Field"   => "hook_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "hook_type",
    "Type"    => "enum('code','template')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "code"
  ),
  array(
    "Field"   => "action_location",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module_folder",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "core_function",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "hook_function",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "priority",
    "Type"    => "tinyint(4)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "50"
  )
);
$STRUCTURE["2.0.0"]["tables"]["menus"] = array(
  array(
    "Field"   => "menu_id",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "menu",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "menu_type",
    "Type"    => "enum('admin','client')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "client"
  )
);
$STRUCTURE["2.0.0"]["tables"]["menu_items"] = array(
  array(
    "Field"   => "menu_item_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "menu_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "display_text",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "page_identifier",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_options",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "url",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_submenu",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["modules"] = array(
  array(
    "Field"   => "module_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "is_installed",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_enabled",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "origin_language",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module_folder",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "version",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author_email",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author_link",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "description",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module_date",
    "Type"    => "datetime",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "supports_ft_versions",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["module_menu_items"] = array(
  array(
    "Field"   => "menu_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "module_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "display_text",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "url",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_submenu",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["multi_page_form_urls"] = array(
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_url",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "page_num",
    "Type"    => "tinyint(4)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => "2"
  )
);
$STRUCTURE["2.0.0"]["tables"]["public_form_omit_list"] = array(
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["public_view_omit_list"] = array(
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["sessions"] = array(
  array(
    "Field"   => "session_id",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "session_data",
    "Type"    => "text",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "expires",
    "Type"    => "int(11)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "0"
  )
);
$STRUCTURE["2.0.0"]["tables"]["settings"] = array(
  array(
    "Field"   => "setting_id",
    "Type"    => "mediumint(9)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_value",
    "Type"    => "text",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "core"
  )
);
$STRUCTURE["2.0.0"]["tables"]["themes"] = array(
  array(
    "Field"   => "theme_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "theme_folder",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "theme_name",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author_email",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author_link",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "theme_link",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "description",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_enabled",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "theme_version",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "supports_ft_versions",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["views"] = array(
  array(
    "Field"   => "view_id",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "access_type",
    "Type"    => "enum('admin','public','private','hidden')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "public"
  ),
  array(
    "Field"   => "view_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "view_order",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "1"
  ),
  array(
    "Field"   => "num_submissions_per_page",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "10"
  ),
  array(
    "Field"   => "default_sort_field",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "submission_date"
  ),
  array(
    "Field"   => "default_sort_field_order",
    "Type"    => "enum('asc','desc')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "desc"
  ),
  array(
    "Field"   => "may_add_submissions",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "may_edit_submissions",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "may_delete_submissions",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "has_client_map_filter",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "has_standard_filter",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  )
);
$STRUCTURE["2.0.0"]["tables"]["view_fields"] = array(
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "field_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "tab_number",
    "Type"    => "tinyint(4)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_column",
    "Type"    => "enum('yes','no')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_sortable",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "is_editable",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "is_searchable",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["view_filters"] = array(
  array(
    "Field"   => "filter_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "filter_type",
    "Type"    => "enum('standard','client_map')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "standard"
  ),
  array(
    "Field"   => "field_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "operator",
    "Type"    => "enum('equals','not_equals','like','not_like','before','after')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "equals"
  ),
  array(
    "Field"   => "filter_values",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "filter_sql",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.0"]["tables"]["view_tabs"] = array(
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "tab_number",
    "Type"    => "tinyint(3) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "tab_label",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);

// ------------------------------------------------------------------------------------------------

// 2.0.1 and 2.0.2 have the same DB structure as 2.0.0
$STRUCTURE["2.0.1"] = $STRUCTURE["2.0.0"];
$STRUCTURE["2.0.2"] = $STRUCTURE["2.0.0"];

// ------------------------------------------------------------------------------------------------

$STRUCTURE["2.0.3"] = array();
$STRUCTURE["2.0.3"]["tables"] = array();
$STRUCTURE["2.0.3"]["tables"]["accounts"] = array(
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "account_type",
    "Type"    => "enum('admin','client')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "client"
  ),
  array(
    "Field"   => "account_status",
    "Type"    => "enum('active','disabled','pending')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "disabled"
  ),
  array(
    "Field"   => "ui_language",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "en_us"
  ),
  array(
    "Field"   => "timezone_offset",
    "Type"    => "varchar(4)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "sessions_timeout",
    "Type"    => "varchar(10)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "30"
  ),
  array(
    "Field"   => "date_format",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "M jS, g:i A"
  ),
  array(
    "Field"   => "login_page",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "client_forms"
  ),
  array(
    "Field"   => "logout_url",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "theme",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "default"
  ),
  array(
    "Field"   => "menu_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "first_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "last_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "username",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "password",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["account_settings"] = array(
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_value",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["client_forms"] = array(
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["client_views"] = array(
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["email_templates"] = array(
  array(
    "Field"   => "email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_template_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_status",
    "Type"    => "enum('enabled','disabled')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "enabled"
  ),
  array(
    "Field"   => "view_mapping_type",
    "Type"    => "enum('all','specific')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "all"
  ),
  array(
    "Field"   => "view_mapping_view_id",
    "Type"    => "mediumint(9)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "limit_email_content_to_fields_in_view",
    "Type"    => "mediumint(9)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_event_trigger",
    "Type"    => "set('on_submission','on_edit','on_delete')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "include_on_edit_submission_page",
    "Type"    => "enum('no','all_views','specific_views')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "subject",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_from",
    "Type"    => "enum('admin','client','form_email_field','custom','none')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_from_account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_from_form_email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_from_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_from_email",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_reply_to",
    "Type"    => "enum('admin','client','form_email_field','custom','none')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_reply_to_account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_reply_to_form_email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_reply_to_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_reply_to_email",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "html_template",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "text_template",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["email_template_edit_submission_views"] = array(
  array(
    "Field"   => "email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["email_template_recipients"] = array(
  array(
    "Field"   => "recipient_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "email_template_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "recipient_user_type",
    "Type"    => "enum('admin','client','form_email_field','custom')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "recipient_type",
    "Type"    => "enum('main','cc','bcc')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "main"
  ),
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(9)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "form_email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_recipient_name",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_recipient_email",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["field_options"] = array(
  array(
    "Field"   => "field_group_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "option_order",
    "Type"    => "smallint(4)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "option_value",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "option_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["field_option_groups"] = array(
  array(
    "Field"   => "group_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "group_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "original_form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_orientation",
    "Type"    => "enum('horizontal','vertical','na')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "na"
  )
);
$STRUCTURE["2.0.3"]["tables"]["field_settings"] = array(
  array(
    "Field"   => "field_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_value",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => "core"
  )
);
$STRUCTURE["2.0.3"]["tables"]["forms"] = array(
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(9) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "access_type",
    "Type"    => "enum('admin','public','private')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "public"
  ),
  array(
    "Field"   => "submission_type",
    "Type"    => "enum('code','direct')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "date_created",
    "Type"    => "datetime",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_active",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_initialized",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_complete",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_multi_page_form",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "form_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "form_url",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "redirect_url",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "auto_delete_submission_files",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "submission_strip_tags",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "default_view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "edit_submission_page_label",
    "Type"    => "text",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["form_email_fields"] = array(
  array(
    "Field"   => "form_email_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "email_field",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "first_name_field",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "last_name_field",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["form_fields"] = array(
  array(
    "Field"   => "field_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "0"
  ),
  array(
    "Field"   => "field_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_test_value",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_size",
    "Type"    => "enum('tiny','small','medium','large','very_large')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => "small"
  ),
  array(
    "Field"   => "field_type",
    "Type"    => "enum('select','multi-select','radio-buttons','checkboxes','file','textbox','textarea','system','wysiwyg','date','image','password')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "textbox"
  ),
  array(
    "Field"   => "data_type",
    "Type"    => "enum('string','number','date')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "string"
  ),
  array(
    "Field"   => "field_title",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "col_name",
    "Type"    => "varchar(100)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "include_on_redirect",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "field_group_id",
    "Type"    => "mediumint(9)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["hooks"] = array(
  array(
    "Field"   => "hook_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "hook_type",
    "Type"    => "enum('code','template')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "code"
  ),
  array(
    "Field"   => "action_location",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module_folder",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "core_function",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "hook_function",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "priority",
    "Type"    => "tinyint(4)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "50"
  )
);
$STRUCTURE["2.0.3"]["tables"]["menus"] = array(
  array(
    "Field"   => "menu_id",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "menu",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "menu_type",
    "Type"    => "enum('admin','client')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "client"
  )
);
$STRUCTURE["2.0.3"]["tables"]["menu_items"] = array(
  array(
    "Field"   => "menu_item_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "menu_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "display_text",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "page_identifier",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "custom_options",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "url",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_submenu",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["modules"] = array(
  array(
    "Field"   => "module_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "is_installed",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_enabled",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "origin_language",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module_folder",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "version",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author_email",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author_link",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "description",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module_date",
    "Type"    => "datetime",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "supports_ft_versions",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["module_export_groups"] = array(
  array(
    "Field"   => "export_group_id",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "group_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "access_type",
    "Type"    => "enum('admin','public','private')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "public"
  ),
  array(
    "Field"   => "visibility",
    "Type"    => "enum('show','hide')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "show"
  ),
  array(
    "Field"   => "icon",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "action",
    "Type"    => "enum('file','popup','new_window')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "popup"
  ),
  array(
    "Field"   => "action_button_text",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "{\$LANG.word_display}"
  ),
  array(
    "Field"   => "popup_height",
    "Type"    => "varchar(5)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "popup_width",
    "Type"    => "varchar(5)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "headers",
    "Type"    => "text",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "smarty_template",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "tinyint(4)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["module_export_group_clients"] = array(
  array(
    "Field"   => "export_group_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["module_export_types"] = array(
  array(
    "Field"   => "export_type_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "export_type_name",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "export_type_visibility",
    "Type"    => "enum('show','hide')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "show"
  ),
  array(
    "Field"   => "filename",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "export_group_id",
    "Type"    => "smallint(6)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "smarty_template",
    "Type"    => "text",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "tinyint(3) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["module_extended_client_fields"] = array(
  array(
    "Field"   => "client_field_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "template_hook",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "admin_only",
    "Type"    => "enum('yes','no')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_label",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_type",
    "Type"    => "enum('textbox','textarea','password','radios','checkboxes','select','multi-select')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_orientation",
    "Type"    => "enum('horizontal','vertical','na')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "na"
  ),
  array(
    "Field"   => "default_value",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_required",
    "Type"    => "enum('yes','no')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "error_string",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_order",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["module_extended_client_field_options"] = array(
  array(
    "Field"   => "client_field_id",
    "Type"    => "mediumint(9)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "option_text",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "field_order",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["module_menu_items"] = array(
  array(
    "Field"   => "menu_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "module_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "display_text",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "url",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_submenu",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["multi_page_form_urls"] = array(
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_url",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "page_num",
    "Type"    => "tinyint(4)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => "2"
  )
);
$STRUCTURE["2.0.3"]["tables"]["public_form_omit_list"] = array(
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["public_view_omit_list"] = array(
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "account_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["settings"] = array(
  array(
    "Field"   => "setting_id",
    "Type"    => "mediumint(9)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "setting_value",
    "Type"    => "text",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "module",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "core"
  )
);
$STRUCTURE["2.0.3"]["tables"]["themes"] = array(
  array(
    "Field"   => "theme_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "theme_folder",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "theme_name",
    "Type"    => "varchar(50)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author",
    "Type"    => "varchar(200)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author_email",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "author_link",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "theme_link",
    "Type"    => "varchar(255)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "description",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_enabled",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "theme_version",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "supports_ft_versions",
    "Type"    => "mediumtext",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["views"] = array(
  array(
    "Field"   => "view_id",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "form_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "access_type",
    "Type"    => "enum('admin','public','private','hidden')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "public"
  ),
  array(
    "Field"   => "view_name",
    "Type"    => "varchar(100)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "view_order",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "1"
  ),
  array(
    "Field"   => "num_submissions_per_page",
    "Type"    => "smallint(6)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "10"
  ),
  array(
    "Field"   => "default_sort_field",
    "Type"    => "varchar(255)",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "submission_date"
  ),
  array(
    "Field"   => "default_sort_field_order",
    "Type"    => "enum('asc','desc')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "desc"
  ),
  array(
    "Field"   => "may_edit_submissions",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "may_delete_submissions",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "may_add_submissions",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "has_standard_filter",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "has_client_map_filter",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "no"
  )
);
$STRUCTURE["2.0.3"]["tables"]["view_fields"] = array(
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "field_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "tab_number",
    "Type"    => "tinyint(4)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "is_column",
    "Type"    => "enum('yes','no')",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => "no"
  ),
  array(
    "Field"   => "is_sortable",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "is_editable",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "is_searchable",
    "Type"    => "enum('yes','no')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "yes"
  ),
  array(
    "Field"   => "list_order",
    "Type"    => "smallint(5) unsigned",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["view_filters"] = array(
  array(
    "Field"   => "filter_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "filter_type",
    "Type"    => "enum('standard','client_map')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "standard"
  ),
  array(
    "Field"   => "field_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "operator",
    "Type"    => "enum('equals','not_equals','like','before','after')",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => "equals"
  ),
  array(
    "Field"   => "filter_values",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  ),
  array(
    "Field"   => "filter_sql",
    "Type"    => "mediumtext",
    "Null"    => "NO",
    "Key"     => "",
    "Default" => ""
  )
);
$STRUCTURE["2.0.3"]["tables"]["view_tabs"] = array(
  array(
    "Field"   => "view_id",
    "Type"    => "mediumint(8) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "tab_number",
    "Type"    => "tinyint(3) unsigned",
    "Null"    => "NO",
    "Key"     => "PRI",
    "Default" => ""
  ),
  array(
    "Field"   => "tab_label",
    "Type"    => "varchar(50)",
    "Null"    => "YES",
    "Key"     => "",
    "Default" => ""
  )
);

// ------------------------------------------------------------------------------------------------

// 2.0.4 has the same DB structure as 2.0.3
$STRUCTURE["2.0.4"] = $STRUCTURE["2.0.3"];
