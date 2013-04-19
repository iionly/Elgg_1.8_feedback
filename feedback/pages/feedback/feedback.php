<?php
global $CONFIG;
gatekeeper();

$base_url = $CONFIG->url . 'feedback/';


$content = elgg_view('feedback/list_feedbacks', array());


// Sidebar menu - Menu latéral
$sidebar = '<div id="site-categories">';
$sidebar .= '<h2>Feedbacks</h2>';
$sidebar .= '<ul class="elgg-menu elgg-menu-owner-block elgg-menu-owner-block-categories elgg-menu-owner-block-default">';
if (full_url() == $base_url) $selected = ' class="elgg-state-selected"'; else $selected = '';
$sidebar .= '<li' . $selected . '><a href="'.$base_url.'feedback">'.$all_feedback_count.' feedbacks</a></li>';
if (full_url() == $base_url . 'status/open') $selected = ' class="elgg-state-selected"'; else $selected = '';
$sidebar .= '<li' . $selected . '><a href="'.$base_url . 'status/open">'.$feedback_open.' à traiter</a></li>';
if (full_url() == $base_url . 'status/closed') $selected = ' class="elgg-state-selected"'; else $selected = '';
$sidebar .= '<li' . $selected . '><a href="'.$base_url . 'status/closed">'.$feedback_closed.' fermés</a></li>';
$sidebar .= '</ul>';
$sidebar .= '<h2>A traiter</h2>';
$sidebar .= '<ul class="elgg-menu elgg-menu-owner-block elgg-menu-owner-block-categories elgg-menu-owner-block-default">';
if (full_url() == $base_url . 'about/content') $selected = ' class="elgg-state-selected"'; else $selected = '';
$sidebar .= '<li' . $selected . '><a href="'.$base_url . 'about/content">'.$feedback_content.' signalements</a></li>';
if (full_url() == $base_url . 'about/bug_report') $selected = ' class="elgg-state-selected"'; else $selected = '';
$sidebar .= '<li' . $selected . '><a href="'.$base_url . 'about/bug_report">'.$feedback_bug.' dysfonctionnements</a></li>';
if (full_url() == $base_url . 'about/suggestions') $selected = ' class="elgg-state-selected"'; else $selected = '';
$sidebar .= '<li' . $selected . '><a href="'.$base_url . 'about/suggestions">'.$feedback_suggestion.' suggestions</a></li>';
if (full_url() == $base_url . 'about/question') $selected = ' class="elgg-state-selected"'; else $selected = '';
$sidebar .= '<li' . $selected . '><a href="'.$base_url . 'about/question">'.$feedback_question.' questions</a></li>';
if (full_url() == $base_url . 'about/compliment') $selected = ' class="elgg-state-selected"'; else $selected = '';
$sidebar .= '<li' . $selected . '><a href="'.$base_url . 'about/compliment">'.$feedback_feedback.' compliments</a></li>';
if (full_url() == $base_url . 'about/other') $selected = ' class="elgg-state-selected"'; else $selected = '';
$sidebar .= '<li' . $selected . '><a href="'.$base_url . 'about/other">'.$feedback_feedback.' non classés</a></li>';
$sidebar .= '</ul>';
$sidebar .= '</div>';


// Titre de la page
$title = elgg_echo('feedback:admin:title');
if (!empty($status_filter)) $title .= ' ' . elgg_echo('feedback:status:'.$status_filter);
if (!empty($about_filter)) $title .= ' ' . elgg_echo('feedback:about') . ' &laquo;&nbsp;' . elgg_echo('feedback:about:'.$about_filter) . '&nbsp;&raquo;';


$body = elgg_view_layout('content', array('content' => $content, 'sidebar' => $sidebar, 'title' => $title, 'filter' => ''));

echo elgg_view_page(strip_tags($title), $body);

