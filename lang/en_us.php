<?php

$L = array();
$L["module_name"] = "Database Integrity";
$L["module_description"] = "This module checks the integrity of your Form Tools database. Any compatible modules share information with this module to let it know the proper structure of the database tables and fields.";

$L["word_untested"] = "Untested";
$L["word_testing_c"] = "Testing: ";
$L["word_help"] = "Help";
$L["word_component"] = "Component";
$L["word_passed"] = "Passed";
$L["word_failed"] = "Failed";
$L["word_result"] = "Result";

$L["phrase_missing_table_c"] = "missing table: ";
$L["phrase_missing_column_c"] = "missing column: ";
$L["phrase_table_looks_good_c"] = "Table and columns look good: ";
$L["phrase_invalid_column_c"] = "Invalid column: ";
$L["phrase_full_logs"] = "Full Logs";
$L["phrase_error_logs"] = "Error Logs";
$L["phrase_hook_verification"] = "Hook Verification";
$L["phrase_table_verification"] = "Table Verification";
$L["phrase_test_selected_components"] = "Test Selected Components &raquo;";

$L["text_tables_test"] = "The following tables will be tested to confirm they exist, and that the column information is valid.";
$L["text_module_intro"] = "This module lets you run tests on your Form Tools database to verify the structure and data. Choose one of the options below.";

$L["text_table_verification_intro"] = "This examines and verifies the existence and structure of your Core database tables and any compatible modules.";
$L["text_hook_verification_intro"] = "Modules interact with the Core script through <i>hooks</i>. They attach their own functionality to act at particular junctions in the code. If this gets corrupted, it can prevent the module from working properly. This test examines your database to confirm that the hooks for all your modules are configured properly.";
$L["text_problems_identified_and_fixed"] = "Problems are both identified and fixed.";
$L["text_problems_identified_not_fixed"] = "Problems are only identified, not fixed.";
$L["text_help"] = "For more information on this module, please see the <a href=\"http://modules.formtools.org/database_integrity/\" target=\"_blank\">help documentation</a> on the Form Tools site.";

$L["notify_test_complete_problems"] = "The test is complete. We found a problem with one or more of your installed components.";
$L["notify_test_complete_no_problems"] = "The test is complete. No problems were found.";
$L["notify_hook_verification_no_supported_modules"] = "None of your modules currently support this feature.";
$L["notify_hook_verification_note"] = "Please note: if problems are found by this step, they can only be automatically repaired if there were no problems in the [prefix]hook_calls Core table. The <a href=\"tables.php\">Table Verification</a> test will tell you whether or not that table has problems.";
$L["notify_hook_verification_complete_problems"] = "The test is complete. We found a problem with one or more of your module hooks. <a href=\"#\" id=\"repair_hooks\">Click here</a> to repair the hooks for the affected modules.";
$L["notify_module_hooks_reset"] = "The modules have been repaired and their hook calls have been reset. Please re-run the test below to confirm there are no longer any problems.";
$L["notify_problems_resetting_module_hooks"] = "There was a problem resetting the module hooks. This is most likely caused by an error in the form of your hook_calls table. Please run the Table Verification step to check.";

$L["validation_no_components_selected"] = "Please select one or more components to test.";