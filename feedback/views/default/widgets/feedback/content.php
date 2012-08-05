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

$list = elgg_list_entities(array(
        'types' => 'object',
        'subtypes' => 'feedback',
        'limit' => $vars['entity']->num_display,
        'pagination' => false
));
if (!$list) {
    $list = '<p class="mtm">' . elgg_echo('feedback:list:nofeedback') . '</p>';
}

echo $list;
