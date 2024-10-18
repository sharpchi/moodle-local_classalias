<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * TODO describe file donotload
 *
 * @package    local_classalias
 * @copyright  2024 YOUR NAME <your@email.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// phpcs:ignoreFile

die();

class action_link extends \core\output\action_link {}
class action_menu extends \core\output\action_menu {}
class action_menu_filler extends \core\output\action_menu\filler {}
class action_menu_link extends \core\output\action_menu\link {}
class action_menu_link_primary extends \core\output\action_menu\link_primary {}
class action_menu_link_secondary extends \core\output\action_menu\link_secondary {}

class badge extends \core_badges\badge {}
class block_contents extends \core_block\output\block_contents {}
class bootstrap_renderer extends \core\output\bootstrap_renderer {}

class cache extends \core_cache\cache {};
class cache_application extends \core_cache\application_cache {}
class cache_cached_object extends \core_cache\cached_object {}
class cache_config extends \core_cache\config {}
class cache_config_disabled extends \core_cache\disabled_config {}
class cache_config_writer extends \core_cache\config_writer {}
interface cache_data_source extends \core_cache\data_source_interface {}
interface cache_data_source_versionable extends \core_cache\versionable_data_source_interface {}
class cache_definition extends \core_cache\definition {}
class cache_definition_mappings_form extends \core_cache\form\cache_definition_mappings_form {}
class cache_definition_sharing_form extends \core_cache\form\cache_definition_sharing_form {}
class cache_disabled extends \core_cache\disabled_cache {}
class cache_exception extends \core_cache\exception\cache_exception {}
class cache_factory extends \core_cache\factory {}
class cache_factory_disabled extends \core_cache\disabled_factory {}
class cache_helper extends \core_cache\helper {}
class cache_lock_form extends \core_cache\form\cache_lock_form {}
class cache_mode_mappings_form extends \core_cache\form\cache_mode_mappings_form {}
interface cache_is_configurable extends \core_cache\configurable_cache_interface {}
interface cache_is_key_aware extends \core_cache\key_aware_cache_interface {}
interface cache_is_lockable extends \core_cache\lockable_cache_interface {}
interface cache_is_searchable extends \core_cache\searchable_cache_interface {}
interface cache_loader extends \core_cache\loader_interface {}
interface cache_loader_with_locking extends \core_cache\loader_with_locking_interface {}
class cache_lock_interface extends \core_cache\cache_lock_interface {}
class cache_request extends \core_cache\request_cache {}
class cache_session extends \core_cache\session_cache {}
interface cache_store_interface extends \core_cache\store_interface {}
class cache_ttl_wrapper extends \core_cache\ttl_wrapper {}
class cacheable_object extends \core_cache\cacheable_object_interface {}
class cacheable_object_array extends \core_cache\cacheable_object_array {}
class cachestore_addinstance_form extends \core_cache\form\cachestore_addinstance_form {}
class cachestore_dummy extends \core_cache\dummy_cachestore {}
class coding_exception extends \core\exception\coding_exception {}
class combined_progress_trace extends \core\output\progress_trace\combined_progress_trace {}
class component_action extends \core\output\actions\component_action {}
class confirm_action extends \core\output\actions\confirm_action {}
abstract class context extends \core\context {}
class context_block extends \core\context\block {}
class context_course extends \core\context\course {}
class context_coursecat extends \core\context\coursecat {}
class context_header extends \core\output\context_header {}
class context_module extends \core\context\module {}
class context_system extends \core\context\system {}
class context_user extends \core\context\user {}
abstract class context_helper extends \core\context_helper {}
class core_plugin_manager extends \core\plugin_manager {}
class core_renderer extends \core\output\core_renderer {}
class core_renderer_ajax extends \core\output\core_renderer_ajax {}
class core_renderer_cli extends \core\output\core_renderer_cli {}
class core_renderer_maintenance extends \core\output\core_renderer_maintenance {}
class core_user extends \core\user {}
class custom_menu extends \core\output\custom_menu {}
class custom_menu_item extends \core\output\custom_menu_item {}

class emoticon_manager extends \core\emoticon_manager {}
class error_log_progress_trace extends \core\output\progress_trace\error_log_progress_trace {}
class external_api extends \core_external\external_api {}
abstract class external_description extends \core_external\external_description {}
class external_files extends \core_external\external_files {}
class external_format_value extends \core_external\external_format_value {}
class external_function_parameters extends \core_external\external_function_parameters {}
class external_multiple_structure extends \core_external\external_multiple_structure {}
class external_settings extends \core_external\external_settings {}
class external_single_structure extends \core_external\external_single_structure {}
class external_util extends \core_external\util {}
class external_value extends \core_external\external_value {}
class external_warnings extends \core_external\external_warnings {}

class file_picker extends \core\output\file_picker {}
class file_serving_exception extends \core\exception\file_serving_exception {}
abstract class filter_local_settings_form extends \core_filters\local_settings_form {}
class filter_manager extends \core_filters\filter_manager {}
class filterobject extends \core_filters\filter_object {}
class flexible_table extends \core_table\flexible_table {}

class help_icon extends \core\output\help_icon {}
class html_list_progress_trace extends \core\output\progress_trace\html_list_progress_trace {}
class html_progress_trace extends \core\output\progress_trace\html_progress_trace {}
class html_table extends \core_table\output\html_table {}
class html_table_cell extends \core_table\output\html_table_cell {}
class html_table_row extends \core_table\output\html_table_row {}
class html_writer extends \core\output\html_writer {}

class image_icon extends \core\output\image_icon {}
class initials_bar extends \core\output\initials_bar {}
class invalid_dataroot_permissions extends \core\exception\invalid_dataroot_permissions {}
class invalid_parameter_exception extends \core\exception\invalid_parameter_exception {}
class invalid_response_exception extends \core\exception\invalid_response_exception {}
class invalid_state_exception extends \core\exception\invalid_state_exception {}

class fragment_requirements_manager extends \core\output\requirements\fragment_requirements_manager {}

class js_writer extends \core\output\js_writer {}

class lang_string extends \core\lang_string {}

class moodle_exception extends \core\exception\moodle_exception {}
abstract class moodle_text_filter extends \core_filters\text_filter {}
class moodle_url extends \core\url {}

class null_filter_manager extends \core_filters\null_filter_manager {}
class null_progress_trace extends \core\output\progress_trace\null_progress_trace {}

class page_requirements_manager extends \core\output\requirements\page_requirements_manager {}
class paging_bar extends \core\output\paging_bar {}
class performance_measuring_filter_manager extends \core_filters\performance_measuring_filter_manager {}
class pix_emoticon extends \core\output\pix_emoticon {}
class pix_icon extends \core\output\pix_icon {}
class pix_icon_font extends \core\output\pix_icon_font {}
class pix_icon_fontawesome extends \core\output\pix_icon_fontawesome {}
class plugin_renderer_base extends \core\output\plugin_renderer_base {}
class popup_action extends \core\output\actions\popup_action {}
class preferences_group extends \core\output\preferences_group {}
class preferences_groups extends \core\output\preferences_groups {}
class progress_bar extends \core\output\progress_bar {}
abstract class progress_trace extends \core\output\progress_trace {}
class progress_trace_buffer extends \core\output\progress_trace\progress_trace_buffer {}

interface renderable extends \core\output\renderable {}
class renderer_base extends \core\output\renderer_base {}
abstract class renderer_factory_base extends \core\output\renderer_factory\renderer_factory_base {}
interface renderer_factory extends \core\output\renderer_factory\renderer_factory_interface {}
class require_login_exception extends \core\exception\require_login_exception {}
class require_login_session_timeout_exception extends \core\exception\require_login_session_timeout_exception {}
class required_capability_exception extends \core\exception\required_capability_exception {}
class restricted_context_exception extends \core_external\restricted_context_exception {}

class single_button extends \core\output\single_button {}
class single_select extends \core\output\single_select {}
class standard_renderer_factory extends \core\output\renderer_factory\standard_renderer_factory {}

class table_dataformat_export_format extends \core_table\dataformat_export_format {}
class table_default_export_format_parent extends \core_table\base_export_format {}
class table_sql extends \core_table\sql_table {}
class tabobject extends \core\output\tabobject {}
class tabtree extends \core\output\tabtree {}
interface templatable extends \core\output\templatable {}
class testable_assign extends \mod_assign_testable_assign {}
class text_progress_trace extends \core\output\progress_trace\text_progress_trace {}
class theme_config extends \core\output\theme_config {}
class theme_overridden_renderer_factory extends \core\output\renderer_factory\theme_overridden_renderer_factory {}

class url_select extends \core\output\url_select {}
class user_picture extends \core\output\user_picture {}

class xhtml_container_stack extends \core\output\xhtml_container_stack {}

class YUI_config extends \core\output\requirements\yui {}

