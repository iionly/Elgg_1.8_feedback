<?php
$yesno_opt = array('no' => elgg_echo('option:no'), 'yes' => elgg_echo('option:yes'));

$feedbackgroup_opt[] = elgg_echo('option:no');
$feedbackgroup_opt['grouptool'] = elgg_echo('feedback:option:grouptool');
$groups_count = elgg_get_entities(array('type' => 'group', 'count' => true));
$groups = elgg_get_entities(array('type' => 'group', 'limit' => $groups_count));
foreach ($groups as $ent) { $feedbackgroup_opt[$ent->guid] = $ent->name; }



// Publicly available?
echo '<p><label>' . elgg_echo("feedback:settings:public") . elgg_view('input/pulldown', array('internalname' => 'params[publicAvailable_feedback]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->publicAvailable_feedback)) . '</label></p>';
?>

<p>
  <?php echo elgg_echo("feedback:settings:usernames");?>
  <br>
  <?php
    echo "<label>".elgg_echo('feedback:user_1')."</label>";
    echo "<input type='text' size='60' name='params[user_1]' value='".$vars['entity']->user_1."' />";
    echo "<br />";

    echo "<label>".elgg_echo('feedback:user_2')."</label>";
    echo "<input type='text' size='60' name='params[user_2]' value='".$vars['entity']->user_2."' />";
    echo "<br />";

    echo "<label>".elgg_echo('feedback:user_3')."</label>";
    echo "<input type='text' size='60' name='params[user_3]' value='".$vars['entity']->user_3."' />";
    echo "<br />";

    echo "<label>".elgg_echo('feedback:user_4')."</label>";
    echo "<input type='text' size='60' name='params[user_4]' value='".$vars['entity']->user_4."' />";
    echo "<br />";

    echo "<label>".elgg_echo('feedback:user_5')."</label>";
    echo "<input type='text' size='60' name='params[user_5]' value='".$vars['entity']->user_5."' />";
    echo "<br />";
  ?>
</p>

<?php
// Can members read feedbacks ?
echo '<p><label>' . elgg_echo("feedback:settings:memberview") . elgg_view('input/pulldown', array('internalname' => 'params[memberview]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->memberview)) . '</label></p>';

// Are comments allowed on feedbacks ?
echo '<p><label>' . elgg_echo("feedback:settings:comment") . elgg_view('input/pulldown', array('internalname' => 'params[comment]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->comment)) . '</label></p>';

// Associate a group to feedbacks ?
echo '<p><label>' . elgg_echo("feedback:settings:feedbackgroup") . elgg_view('input/pulldown', array('internalname' => 'params[feedbackgroup]', 'options_values' => $feedbackgroup_opt, 'value' => $vars['entity']->feedbackgroup)) . '</label></p>';


