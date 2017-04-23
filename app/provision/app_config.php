<?php

	//application details
		$apps[$x]['name'] = "Provision";
		$apps[$x]['uuid'] = "abf28ead-92ef-3de6-ebbb-023fbc2b6dd3";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Writes the provisioning files from templates.";
		$apps[$x]['description']['fr-fr'] = "Ecrit les fichiers de provisioning à partir des modèles.";

	//permission details
		//$apps[$x]['permissions'][0]['name'] = "zzz";
		//$apps[$x]['permissions'][0]['groups'][] = "admin";
		//$apps[$x]['permissions'][0]['groups'][] = "superadmin";

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '931f9369-9aac-4620-8d4b-7d2bf642b1d2';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'enabled';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '3790e46b-ef9e-4cdc-bfd2-6b3708751843';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'auto_insert_enabled';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '27b7ccfd-58d7-409c-80ff-cca014349d70';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'http_auth_type';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'digest';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'c6a5b05b-210d-484f-bbb6-c1dd2223992e';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'http_auth_username';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'ed380d7d-b3b8-40b4-8528-f10d521ddef0';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'http_auth_password';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'c998c762-6a43-4911-a465-a9653eeb793d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'http_auth_disable';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd376fe0f-fb89-4418-8fb4-590e4cac483f';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'cidr';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'array';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'a5323190-b733-49c1-99c4-396ab8950bb8';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin_name';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'ae3f809e-81af-4ed4-82f7-275251210d3a';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'admin_password';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'cd2173be-aa43-4fd2-9c75-02f49c199485';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'path';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '559cd2d6-8ca0-4e6e-ae9d-565c8eed898d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'voicemail_number';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '*97';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'a9dc7f4a-0a19-40cb-829a-093bf81d00db';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'line_sip_port';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '5060';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '472300e4-267a-4f0d-83ab-04d2017c7d0f';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'line_sip_transport';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'tcp';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '5bc38b86-089f-44cb-9fff-38be38c497e8';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'line_register_expires';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '120';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '1752b247-873b-4d41-9846-b9df93efe8df';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'polycom_gmt_offset';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '3600 * GMT offset';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '098b2abd-3af3-4104-8fba-fabf9573f925';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'polycom_digitmap';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '[*]xxxx|[2-9]11|0T|011xxx.T|[0-1][2-9]xxxxxxxxx|[2-9]xxxxxxxxx|[1-9]xxT|**x.T';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '5aa7f396-d742-48f1-b53f-c609b9a6759a';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'daylight_savings_start_month';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '3';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '7d742914-9c55-4cee-a295-c19501389f41';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'daylight_savings_start_day';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '13';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'ef0ad392-8956-4355-bf44-48d8712c74c1';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'daylight_savings_start_weekday';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '7';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '7b444c2f-bed7-4da5-8cf3-4cc79df8625f';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'daylight_savings_start_time';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '2';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'f8e7b78b-1b84-42da-9e14-ec03dbb67c52';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'daylight_savings_stop_month';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '11';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '6f4a9657-e130-4003-bc96-22a1312d76f4';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'daylight_savings_stop_day';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '6';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'e7942398-3d32-4a32-924f-e61bf31299fa';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'daylight_savings_stop_weekday';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '7';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd3e72ae2-b887-443d-8523-96726343bb55';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'daylight_savings_stop_time';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '2';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '931d6cc7-ca82-4813-ae92-7015e0c2ea1b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'http_domain_filter';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'fc2fa8cd-b14e-48e3-99bd-7c01c9d6208d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'yealink_time_zone';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '-6';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Time zone ranges from -11 to +12';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '7f4a1607-4cbe-49f5-8cd2-6d599b89bd9b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'yealink_time_format';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '1';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '0-12 Hour, 1-24 Hour';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '166b27d1-1860-4154-88d3-5e15781e7bbb';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'yealink_date_format';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '3';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '0-WWW MMM DD (default), 1-DD-MMM-YY, 2-YYYY-MM-DD, 3-DD/MM/YYYY, 4-MM/DD/YY, 5-DD MMM YYYY, 6-WWW DD MMM';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '05bcbb47-06f6-4c81-a1c9-cdf2982d60a7';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'yealink_rport';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '1';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Send the response back to the source it came from.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '70894b7b-2edd-41ad-8526-060589df4e11';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'yealink_session_timer';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '1';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'SIP Session Timers';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'aa200d6f-c048-4203-9838-8dd05fa31bd5';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'yealink_retransmission';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '1';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Retransmission';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '6c4430f6-3713-4c8b-9da3-eaf1705d7dc3';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'contact_users';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'c5196771-f408-40b3-81c7-b4ce525620c3';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'contact_groups';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '8854358d-c6a4-4eeb-b21b-37ced80a4fbb';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'contact_extensions';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'allow extensions to be provisioned as contacts as $extensions in provision templates';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd157078e-b363-4f34-a6d4-8a86990a40b7';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'number_as_presence_id';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '48dd60fe-d7de-417c-85c4-2d2d897a709c';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'ntp_server_primary';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'pool.ntp.org';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '7bcc3c26-ac55-4934-be9f-e0edfbc7193b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'ntp_server_secondary';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '2.us.pool.ntp.org';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'da21eec7-699b-4a8b-a5e5-30ce118aaf8c';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'spa_time_zone';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'GMT-07:00';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'a6529f0e-9d8b-43b9-b487-db42b9b6be25';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'spa_time_format';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '12hr';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '12hr,24hr';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '58c764a9-4f71-4cd2-a44a-1ab52990b97f';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'spa_date_format';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'day/month';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '9c9886a0-92f6-4dd7-8c1b-d04f240d9a9b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'spa_back_light_timer';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '30 s';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '7c7fb3c1-3796-4c5f-b090-2aec955e023b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'spa_handle_via_rport';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'Yes';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '8311d0c9-73ae-4d49-9036-e2f649586b5b';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'spa_insert_via_rport';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'Yes';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '72de5cdf-31f8-4d4b-b94b-468be0aa7a3d';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'spa_dial_plan';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '(*xxxxxxx|*xxxxxx|*xxxxx|*xxxx|*xxx|*xx*|*x|**xxxxx|**xxxx|**xxx|**xx|[3469]11|0|00|[2-9]xxxxxx|1xxx[2-9]xxxxxxS0|xxxxxxxxxxxx.)';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'bf122bc9-c9bf-497c-9dda-95d125293eaf';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'yealink_srtp_encryption';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '0';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = '';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'f0704072-c3d9-48df-b89b-2aea6035b3c4';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'yealink_call_waiting';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '1';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Call Waiting 1=enabled 0=disable';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '564c50ee-4403-4e26-a30b-637f661db389';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'spa_call_waiting';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'Yes';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Call Waiting Yes=enabled No=disable';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '8fc369c3-bd6e-4fbb-957c-681de8a325fc';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'snom_call_waiting';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'on';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Call Waiting on=enabled off=disable visual only and ringer';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '096ef50c-3ff4-4a1f-bc37-79876a7eb832';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'polycom_call_waiting';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '1';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Call Waiting 1=enabled 0=disable';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'bf083e2c-ad73-48ba-a981-9e1c92b2554e';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'provision';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'grandstream_call_waiting';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '0';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Call Waiting 0=enabled 1=disable';

?>
