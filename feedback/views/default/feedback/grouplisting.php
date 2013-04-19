<?php
// Give access to feedbacks in groups
$feedbackgroup = elgg_get_plugin_setting('feedbackgroup', "feedback");
if (!empty($feedbackgroup) && ($feedbackgroup != 'no') && isloggedin()) {
  $page_owner = elgg_get_page_owner_entity();
	if (elgg_instanceof($page_owner, 'group')) {
    // Only add feedback to a group if it is allowed
    if (!empty($feedbackgroup) && ($feedbackgroup != 'no')) {
      if (($page_owner->guid == $feedbackgroup) || (($feedbackgroup == 'grouptool') && ($page_owner->feedback_enable == 'yes')) ) {
        echo '<div class="elgg-module elgg-module-group elgg-module-group-feedback elgg-module-info">';
        echo '<div class="elgg-head"><h3>' . elgg_echo('feedback:admin:title') . '</h3></div>';
        echo '<div class="elgg-body">';
        echo elgg_view('feedback/list_feedbacks', array());
        echo '</div>';
        echo '</div>';
    	}
  	}
	}
}


