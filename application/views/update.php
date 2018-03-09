<?php require_once('header.php'); ?>
<div class="container">
	<?php echo form_open('welcome/change/'.$post->id);?>
	<fieldset>
		<legend>Update Post</legend>
		<div class="form-group">
			<label for="exampleInputEmail1">Title</label>
			<?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control', 'value'=>set_value('Title',$post->title)]);?>
			<?php echo form_error('title','<div class="text-danger">', '</div>');?>
		</div>
		<div class="form-group">
			<label for="exampleTextarea">Description</label>
			<?php echo form_textarea(['name'=>'description','placeholder'=>'Description','class'=>'form-control', 'value'=>set_value('Description',$post->description)]);?>
			<?php echo form_error('description','<div class="text-danger">', '</div>');?>
		</div>

		<?php echo form_submit(['name'=>'submit','value'=>'Update', 'class'=>'btn btn-primary']);?>
		<?php echo anchor('welcome','Back',['class'=>'btn btn-default']);?>
	</fieldset>
	<?php echo form_close();?>
</div>
<br>
<?php require_once('footer.php'); ?>
