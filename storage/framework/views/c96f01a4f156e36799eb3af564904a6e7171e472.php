


<?php if($message = session('success')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <?php echo e($message); ?>

</div>
<?php endif; ?>


<?php if($message = session('error')): ?>
<div class="alert alert-danger fade show">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <?php echo e($message); ?>

</div>

<?php endif; ?>


<?php if($message = session('warning')): ?>
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<?php echo e($message); ?>

</div>
<?php endif; ?>


<?php if($message = Session::get('info')): ?>
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<?php echo e($message); ?>

</div>
<?php endif; ?>


<?php if($errors->any()): ?>
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
<?php endif; ?><?php /**PATH /Users/temitope/Documents/GitHub/reohob/resources/views/inc/messages.blade.php ENDPATH**/ ?>