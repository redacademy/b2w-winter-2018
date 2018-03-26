<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen( trim( $facebook ) )>0): ?>

<p class="facebook-text">
  <a class="facebook-link" href="<?php echo $facebook?>" >Facebook </a>
</p>

<?php endif; ?>

<?php if(strlen( trim( $twitter ) )>0): ?>
 
<p class="twitter-text">
<a class="twitter-link" href="<?php echo $twitter?>" >Twitter</a>
</p>

<?php endif; ?>

<?php if(strlen( trim( $instagram ) )>0): ?>

<p class="instagram-text">
<a class="instagram-link" href="<?php echo $instagram?>" >Instagram</a>
</p>
<?php endif; ?>