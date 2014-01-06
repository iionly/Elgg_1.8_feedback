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

if (elgg_get_logged_in_user_guid()) {
    $owner_guid = elgg_get_logged_in_user_guid();
} else {
    $owner_guid = elgg_get_config('site_guid');
}

$access = elgg_set_ignore_access(true);

// Initialise a new ElggObject
$feedback = new ElggObject();
// Tell the system it's a feedback
$feedback->subtype = "feedback";
$feedback->owner_guid = $owner_guid;
$feedback->container_guid = $owner_guid;
// Set the feedback's content
$feedback->page = get_input('page');
$feedback->mood = get_input('mood');
$feedback->about = get_input('about');
$feedback->id = $feedback_sender = get_input('id');
$feedback->txt = $feedback_txt = get_input('txt');
// save the feedback now
$feedback->save();

// Success message
echo "<div id=\"feedbackSuccess\">".elgg_echo("feedback:submit:success")."</div>";

// now email if required
$user_guids = array();
for ($idx=1; $idx<=5; $idx++) {
    $name = elgg_get_plugin_setting('user_'.$idx, 'feedback');
    if (!empty($name)) {
        if ($user = get_user_by_username($name)) {
            $user_guids[] = $user->guid;
        }
    }
}
if (count($user_guids) > 0) {
    foreach($user_guids as $user_guid) {
        notify_user($user_guid, elgg_get_config('site_guid'), elgg_echo('feedback:email:subject', array($feedback_sender)), elgg_echo('feedback:email:body', array($feedback_txt)));
    }
}

elgg_set_ignore_access($access);

exit();
