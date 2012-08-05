<!-- Publicly available? -->
<?php echo elgg_echo("feedback:settings:public");?>
<select name="params[publicAvailable_feedback]">
        <option value="yes" <?php if ($vars['entity']->publicAvailable_feedback == 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:yes'); ?></option>
        <option value="no" <?php if ($vars['entity']->publicAvailable_feedback == 'no' || empty($vars['entity']->publicAvailable_feedback)) echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:no'); ?></option>
</select>
<br><br>

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
