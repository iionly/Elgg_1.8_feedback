<?php
/**
 * Elgg Feedback plugin
 * Feedback interface for Elgg sites
 *
 * for Elgg 1.8 by iionly
 * iionly@gmx.de
 *
 * List the latest feedback entries
 */

$limit = $vars['entity']->num_display;
if (!$limit) {
    $limit = 4;
}
 
$list = elgg_list_entities(array(
        'type' => 'object',
        'subtype' => 'feedback',
        'limit' => $limit,
        'pagination' => false
));
if (!$list) {
    $list = '<p class="mtm">' . elgg_echo('feedback:list:nofeedback') . '</p>';
}

echo $list;
