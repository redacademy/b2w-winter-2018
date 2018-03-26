<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen( trim( $email ) )>0): ?>

<p class="email-text">
  <?php echo $email; ?>
</p>

<?php endif; ?>

<?php if(strlen( trim( $location ) )>0): ?>
 
<p class="location-text">
   <?php echo $location; ?>
</p>

<?php endif; ?>

<?php if(strlen( trim( $phone_number ) )>0): ?>

<p class= "phone-num-text">
  <?php echo $phone_number; ?>
</p>
<?php endif; ?>