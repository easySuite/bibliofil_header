<?php

/**
 * @file
 * Bibliofil header actions wrapper.
 *
 * @var array $actions
 */
?>
<?php print "["; ?>
<?php foreach ($actions as $action): ?>
<?php print "{"; ?>
<?php if (!empty($action['uid'])): ?>
uid: "<?php print $action['uid']; ?>",
<?php endif; ?>
<?php if (!empty($action['icon'])): ?>
icon: "<?php print $action['icon']; ?>",
<?php endif; ?>
<?php if (!empty($action['title'])): ?>
title: "<?php print $action['title']; ?>",
<?php endif; ?>
<?php if (!empty($action['href'])): ?>
href: "<?php print $action['href']; ?>",
<?php endif; ?>
<?php if (!empty($action['on_click'])): ?>
onClick: function() { <?php print $action['on_click']; ?> },
<?php endif; ?>
<?php if (!empty($action['on_mount'])): ?>
onMount: function() { <?php print $action['on_mount']; ?> },
<?php endif; ?>
<?php print "},"; ?>
<?php endforeach; ?>
<?php print "]"; ?>
