<?php

/**
 * Elgg Feedback plugin
 * Feedback interface for Elgg sites
 *
 * @package Feedback
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Prashant Juvekar
 * @copyright Prashant Juvekar
 * @link http://www.linkedin.com/in/prashantjuvekar
 *
 * for Elgg 1.8 by iionly
 * iionly@gmx.de
 */

/**
 * Initialize Plugin
 */
function feedback_init() {
    // extend the view
    if (elgg_get_plugin_setting("publicAvailable_feedback", "feedback") == "yes" || elgg_is_logged_in()) {
      elgg_extend_view('page/elements/footer', 'feedback/footer');
    }
    
    // extend the site CSS
    elgg_extend_view('css/elgg', 'feedback/css');
    elgg_extend_view('css/admin', 'feedback/admin_css');
    
    // create feedback page in admin section
    elgg_register_admin_menu_item('administer', 'feedback', 'administer_utilities');
    // Admin widget
    elgg_register_widget_type('feedback',
        elgg_echo('feedback:admin:title'),
        elgg_echo('feedback:widget:description'),
        'admin'
      );
    
    // Give access to feedbacks in groups
    $feedbackgroup = elgg_get_plugin_setting("feedbackgroup", "feedback");
    if (!empty($feedbackgroup) && ($feedbackgroup != 'no') && isloggedin()) {
      gatekeeper();
      group_gatekeeper();
      // Add group menu option if no feedback group specified (default = disabled)
      if ($feedbackgroup == 'grouptool') { add_group_tool_option('feedback', elgg_echo('feedback:enablefeedback'), false); }
      elgg_extend_view('groups/profile/summary','feedback/grouplisting', 900);
    }
    
    // Allow members to read feedbacks
    $memberview = elgg_get_plugin_setting("memberview", "feedback");
    
    // Allow comments on feedbacks
    $comment = elgg_get_plugin_setting("comment", "feedback");
    
    // Register entity type (makes feedbacks eligible for search)
    register_entity_type('object','feedback');

    // page handler
    register_page_handler('feedback','feedback_page_handler');
    
    // menu des groupes
    elgg_register_plugin_hook_handler('register', 'menu:owner_block', 'feedback_owner_block_menu');
    
    // Register actions
    elgg_register_action('feedback/delete', elgg_get_plugins_path() . 'feedback/actions/delete.php', 'admin');
    elgg_register_action("feedback/close", elgg_get_plugins_path() . 'feedback/actions/close.php', 'admin');
    elgg_register_action('feedback/submit_feedback', elgg_get_plugins_path() . 'feedback/actions/submit_feedback.php', 'public');
}


/**
 * Feedback Page handler
 *
 * @param unknown_type $page
 */
function feedback_page_handler($page) {
  switch($page[0]) {
    case 'group': set_input('group', $page[1]); break;
    case 'status': set_input('status', $page[1]); break;
    case 'about': set_input('about', $page[1]); break;
    case 'mood': set_input('mood', $page[1]); break;
  }
  include(dirname(__FILE__) . "/pages/feedback/feedback.php");
  return true;
}


function feedback_owner_block_menu($hook, $type, $return, $params) {
	if (elgg_instanceof($params['entity'], 'group')) {
	  $feedbackgroup = elgg_get_plugin_setting('feedbackgroup', 'feedback');
    // Only add feedback to a group if it is allowed
    if (!empty($feedbackgroup) && ($feedbackgroup != 'no')) {
      if (($params['entity']->guid == $feedbackgroup) || (($feedbackgroup == 'grouptool') && ($params['entity']->feedback_enable == 'yes')) ) {
        //add_submenu_item(sprintf(elgg_echo("feedback:group"),$params['entity']->name), $CONFIG->wwwroot . "feedback");
			  $url = "feedback/group/{$params['entity']->guid}";
			  $item = new ElggMenuItem('feedback', elgg_echo('feedback:group'), $url);
			  $return[] = $item;
      }
	  }
	}
	return $return;
}


elgg_register_event_handler('init', 'system', 'feedback_init');


