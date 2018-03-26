<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen( trim( $email ) )>0): ?>
<p>
  <span class="email-span"></span>
  <?php echo $email; ?>
</p>
<?php endif; ?>

<?php if(strlen( trim( $location ) )>0): ?>
<p>
  <span class="location-span"></span>
  <?php echo $location; ?>
</p>
<?php endif; ?>

<?php if(strlen( trim( $phone_number ) )>0): ?>
<p>
  <span class="phone-number-span"></span>
  <?php echo $phone_number; ?>
</p>
<?php endif; ?>