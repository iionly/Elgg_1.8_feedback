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

$controls = elgg_view("output/confirmlink",array('href' => elgg_get_site_url() . "action/feedback/delete?guid=" . $vars['entity']->guid, 'confirm' => elgg_echo('deleteconfirm'), 'class' => 'elgg-icon elgg-icon-delete'));

$mood = elgg_echo ( "feedback:mood:" . $vars['entity']->mood );
$about = elgg_echo ( "feedback:about:" . $vars['entity']->about );

$page = "Unknown";
if ( !empty($vars['entity']->page) ) {
    $page = $vars['entity']->page;
    $page = "<a href='" . $page . "'>" . $page . "</a>";
}

$info = "<div style='float:left;width:25%'><b>".elgg_echo('feedback:list:mood').": </b>" . $mood . "</div>";
$info .= "<div style='float:left;width:25%'><b>".elgg_echo('feedback:list:about').": </b>" . $about . "</div>";
$info .= "<br />";
$info .= "<b>".elgg_echo('feedback:list:page').": </b>" . $page . "<br />";
$info .= "<b>".elgg_echo('feedback:list:from').": </b>" . $vars['entity']->id . "<br />";
$info .= nl2br($vars['entity']->txt);

echo elgg_view('page/components/image_block', array('image' => $controls, 'body' => $info, 'class' => 'submitted-feedback'));
