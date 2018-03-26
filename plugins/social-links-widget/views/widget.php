<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen( trim( $facebook ) )>0): ?>

<p class="facebook-text">
  <?php echo $facebook; ?>
</p>

<?php endif; ?>

<?php if(strlen( trim( $twitter ) )>0): ?>
 
<p class="twitter-text">
   <?php echo $twitter; ?>
</p>

<?php endif; ?>

<?php if(strlen( trim( $instagram ) )>0): ?>

<p class= "instagram-text">
  <?php echo $instagram; ?>
</p>
<?php endif; ?>