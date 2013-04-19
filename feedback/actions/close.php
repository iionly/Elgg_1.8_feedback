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

admin_gatekeeper();

gatekeeper();

// Get input data
$guid = (int) get_input('guid');

// Make sure we actually have permission to edit
$feedback = get_entity($guid);
if ( $feedback->getSubtype() == "feedback" && $feedback->canEdit() ) {
  // Set this feedback as answered / closed
  $feedback->status = "closed";
  // Success message
  system_message(elgg_echo("feedback:close:success"));
} else register_error(elgg_echo("feedback:close:error"));

forward(REFERER);

