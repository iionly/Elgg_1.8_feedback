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

$about = $vars['entity']->about; if (empty($about)) { $about = "feedback"; }
$status = $vars['entity']->status; if (empty($status)) $status = "open";
$mood = $vars['entity']->mood; if (empty($mood)) $mood = "neutral";

$access_mark = elgg_view('output/access', array('entity' => $vars['entity']));
$status_mark = elgg_echo ( "feedback:status:" . $status );
$mood_mark = elgg_echo ( "feedback:mood:" . $mood );
$about_mark = elgg_echo ( "feedback:about:" . $about );

if ($vars['full'] === true) $full = true; else $full = false;


$icon = elgg_view('icon/default', array('entity' => $vars['entity'], 'size' => 'small'));

$controls = $access_mark;
if ($status != 'closed') {
  $controls .= elgg_view("output/confirmlink",array('href' => $vars['url'] . "action/feedback/close?guid=" . $vars['entity']->guid, 'confirm' => elgg_echo('feedback:closeconfirm'), 'class' => 'elgg-icon elgg-icon-checkmark'));
} else {
  $controls .= '<span class="elgg-icon elgg-icon-round-checkmark" title="' . $status_mark . '"></span>';
}
$controls .= elgg_view("output/confirmlink",array('href' => $vars['url'] . "action/feedback/delete?guid=" . $vars['entity']->guid, 'confirm' => elgg_echo('deleteconfirm'), 'class' => 'elgg-icon elgg-icon-delete'));

$class = 'feedback-mood-' . $vars['entity']->mood . ' feedback-about-' . $vars['entity']->about . ' feedback-status-' . $status;

$page = elgg_echo('feedback:page:unknown');
if ( !empty($vars['entity']->page) ) {
  $page = $vars['entity']->page;
  $page = "<a href='" . $page . "'>" . $page . "</a>";
}


// Render view
$info .= "<div style='float:left;width:25%'><strong>".elgg_echo('feedback:list:mood').": </strong>" . $mood_mark . "</div>";
$info .= "<div style='float:left;width:40%'><strong>".elgg_echo('feedback:list:about').": </strong>" . $about_mark . "</div>";
$info .= '<div style="float:right;">' . $controls . "</div>";
$info .= '<div class="clearfloat"></div>';
$info .= "<strong>".elgg_echo('feedback:list:page').": </strong>" . $page . "<br />";
$info .= "<strong>".elgg_echo('feedback:list:from').": </strong>" . $vars['entity']->id . "<br />";
$info .= '<br /><blockquote>' . nl2br($vars['entity']->txt) . '</blockquote>';

$comment = elgg_get_plugin_setting("comment", "feedback");
if ($comment == 'yes') {
  if (!$full) {
    $num_comments_feedback = $vars['entity']->countComments();
    $info .= '<div class="clearfloat"></div>';
    $info .= '<a href="' . $vars['entity']->getURL() . '">Afficher la discusion en pleine page</a>';
    $info .= ' &nbsp; <a href="javascript:void(0);" onClick="javascript:$(\'#feedback_'.$vars['entity']->getGUID().'\').toggle()">&raquo;&nbsp;Répondre - Afficher/masquer les '.$num_comments_feedback.' commentaire(s)</a>';
  }
  $info .= '<div id="feedback_' . $vars['entity']->guid . '"';
  if (!$full) $info .= ' style="display:none;"';
  $info .= '>' . elgg_view_comments($vars['entity']) . '</div>';
}

echo elgg_view('page/components/image_block', array('image' => $icon, 'body' => $info, 'class' => 'submitted-feedback ' . $class));


if (!elgg_in_context('search')) {
} else {
}
// @TODO : revoir tout ce qui suit
/*
// Search listing view
$feedbacklink = '<a href="'.$vars['entity']->getURL().'" title="Afficher ce feedback et la discussion associée en pleine page">';
$icon = '<img src="'.$CONFIG->wwwroot.'mod/feedback/graphics/'.$section.'.png" />';
$icon = $feedbacklink . $icon . '</a>';

if (!empty($vars['entity']->section)) {
  $section = elgg_echo("feedback:section:" . $vars['entity']->section);
}
if (!empty($vars['entity']->categorie)) {
  $categorie 	= elgg_echo ( "feedback:categorie:" . $vars['entity']->categorie ); // Formavia 20120129 : more generic
}

// URL de la page concernée par le feedback
$feedbackurl = elgg_echo('unknown');
if (!empty($vars['entity']->page) ) {
  $www_root = $_SERVER["HTTP_HOST"];  // Facyla : handle subdirectory install
  // Suppression du slash final s'il y en a un
  if (substr($www_root, -1) == '/') { $www_root = substr($www_root, 0, -1); }
  $feedbackurl = 'http://' . $vars['entity']->page; // Facyla : correct URL (absolute)
  $page = '<a href="' . $feedbackurl . '">' . $feedbackurl . '</a>';
}

// Bloc d'informations
$info .= "$section concernant $page&nbsp;: ";
//$info .= "<div style='float:left;width:30%'><strong>".elgg_echo('feedback:list:categorie').": </strong>" . $categorie . "</div>";; // Formavia 20111122 : Unused
$txt = cut_string($vars['entity']->txt, 50, $needle = " ", true, true);
$info .= '&laquo;&nbsp;' . parse_urls(trim($txt[0])) . '...&nbsp;&raquo;';
$info .= '<p class="owner_timestamp">' . friendly_time($vars['entity']->time_created);
if ($vars['entity']->state == 'closed') $info .= '<span style="float:right; font-weight:bold;">' . elgg_echo('feedback:closed') . '</span>';
else $info .= '<span style="float:right; font-weight:bold;">' . elgg_echo('feedback:open') . '</span>';
$info .= '</p>';

// Affichage du feedback
echo elgg_view_listing($icon,$info);
*/


