<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $weekdays )) > 0 ) :?>
<p>
    <span class ="business_hours_items">Weekdays:</span><?php echo $weekdays ?>
</p>
<?php endif; ?>

<?php if ( strlen( trim( $saturday )) > 0 ) :?>
<p>
    <span class ="business_hours_items">Saturday:</span><?php echo $saturday ?>
</p>
<?php endif; ?>

<?php if ( strlen( trim( $sunday )) > 0 ) :?>
<p>
    <span class ="business_hours_items">Sunday:</span><?php echo $sunday ?>
</p>
<?php endif; ?>
