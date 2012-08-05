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

action_gatekeeper();

// // check if captcha functions are loaded (only necessary when logged out)
// if (!elgg_is_logged_in()) {
//     if ( function_exists ( "captcha_verify_captcha" ) ) {
//         // captcha verification
//         $token = get_input('captcha_token');
//         $input = get_input('captcha_input');
//         if ( !$token || !captcha_verify_captcha($input, $token) ) {
//             echo "<div id=\"feedbackError\">".elgg_echo('captcha:captchafail')."</div>";
//             exit();
//         }
//     }
// }

// Initialise a new ElggObject
$feedback = new ElggObject();
// Tell the system it's a feedback
$feedback->subtype = "feedback";
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
for ( $idx=1; $idx<=5; $idx++ ) {
    $name = elgg_get_plugin_setting( 'user_'.$idx, 'feedback' );
    if ( !empty($name) ) {
        if ( $user = get_user_by_username($name) ) {
            $user_guids[] = $user->guid;
        }
    }
}
if ( count($user_guids) > 0 ) {
    notify_user($user_guids, $CONFIG->site->guid, sprintf(elgg_echo('feedback:email:subject'), $feedback_sender), sprintf(elgg_echo('feedback:email:body'), $feedback_txt));
}

exit();
