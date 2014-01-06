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

// Get input data
$guid = (int) get_input('guid');

// Make sure we actually have permission to edit
$feedback = get_entity($guid);
if ($feedback->getSubtype() == "feedback") {
    // Delete it!
    $feedback->delete();
    // Success message
    system_message(elgg_echo("feedback:delete:success"));
    forward(REFERER);
}
