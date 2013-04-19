<?php
$base_url = $vars['url'] . 'feedback/';

$limit = get_input('limit', 10);
$offset = get_input('offset', 0);
$status_filter = get_input('status', false); // Status filter
$about_filter = get_input('about', false); // About/type filter
$mood_filter = get_input('mood', false); // Mood filter


// Allow members to read feedbacks ?
$memberview = elgg_get_plugin_setting("memberview", "feedback");
if ($memberview != 'yes') { admin_gatekeeper(); }

$feedbackgroup = elgg_get_plugin_setting('feedbackgroup', 'feedback');
if (!empty($feedbackgroup) && ($feedbackgroup != 'no') && ($feedbackgroup != 'grouptool')) {
  if ($group = get_entity($feedbackgroup)) {
    elgg_set_page_owner_guid($feedbackgroup);
    $base_url .= 'group/' . $feedbackgroup;
    $limit = get_input('limit', 3);
  } else elgg_set_page_owner_guid($CONFIG->site->guid);
}



$all_feedback_count = elgg_get_entities(array('type' => 'object', 'subtype' => 'feedback', 'count' => true));
$all_feedback = elgg_get_entities(array('type' => 'object', 'subtype' => 'feedback', 'limit' => $all_feedback_count));
$feedbacks = array();
$feedback_open = 0; $feedback_closed = 0;
$feedback_content = 0; $feedback_bug = 0; $feedback_suggestion = 0; $feedback_question = 0;
$feedback_feedback = 0; // Non défini

// @todo : en faire une vue pour faciliter la lecture et l'insertion de listes filtrées dans d'autres endroits..
foreach ($all_feedback as $ent) {
  // Uncomment to update 1.6 version to 1.8 version metadata - use once if needed, then comment again
  //if (!empty($ent->state)) { $ent->status = $ent->state; $ent->state = null; }
  // Uncomment to correct title bug retroactively - use once if needed, then comment again
  /*
  global $is_admin; $ignore_admin = $is_admin; $is_admin = true;
  if (!empty($ent->txt)) {
    $ent->title = substr(strip_tags($ent->txt), 0, 50);
    $ent->save();
  }
  $is_admin = $ignore_admin;
  */
  
  // Stats
  if (!isset($ent->status) || empty($ent->status) || ($ent->status == 'open')) {
    $feedback_open++;
    if (!isset($ent->about) || empty($ent->about) || ($ent->about == 'other')) { $feedback_feedback++; } 
    else if ($ent->about == 'content') { $feedback_content++; }
    else if ($ent->about == 'bug_report') { $feedback_bug++; } 
    else if ($ent->about == 'suggestions') { $feedback_suggestion++; }
    else if ($ent->about == 'compliment') { $feedback_compliment++; }
    else if ($ent->about == 'question') { $feedback_question++; }
  } else if ($ent->status == 'closed') { $feedback_closed++; }
  // Filter : if filter(s) set, add only corresponding feedbacks
  if ( (!isset($ent->status) || !$status_filter || ($ent->status == $status_filter)) 
    && (!isset($ent->about) || !$about_filter || ($ent->about == $about_filter)) ) { $feedbacks[] = $ent; }
}

$displayed_feedbacks = array_slice($feedbacks, $offset, $limit);
$content .= elgg_view_entity_list($displayed_feedbacks, count($feedbacks), $offset, $limit, false, false, true);
$content .= '<div class="clearfloat"></div>';

echo $content;

