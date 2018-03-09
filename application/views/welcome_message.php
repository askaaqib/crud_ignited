	<?php require_once('header.php'); ?>
	<div class="container">
		<?php if($msg = $this->session->flashdata('msg')):?>
			<?php echo $msg;?>
		<?php endif;?>
		<br>
		<h3>View All Posts</h3>
		<?php echo anchor('welcome/create', 'Add Post', ['class'=> 'btn btn-primary']);?>
		<table class="table table-hover">
			<thead>
			<tr>
				<th scope="col">Title</th>
				<th scope="col">Description</th>
				<th scope="col">Creation Date</th>
				<th scope="col">Action</th>
			</tr>
			</thead>
			<tbody>
			<?php if(count($posts)):?>
			<?php foreach($posts as $post): ?>
			<tr class="table-active">
				<td><?php echo $post->title;?></td>
				<td><?php echo $post->description;?></td>
				<td><?php echo $post->date_created;?></td>
				<td>
					<a class="badge badge-primary" href="<?php echo base_url('welcome/view/'.$post->id);?>">View</a>
					<a class="badge badge-success" href="<?php echo base_url('welcome/update/'.$post->id);?>">Update</a>
					<a class="badge badge-danger" href="<?php echo base_url('welcome/delete/'.$post->id);?>">Delete</a>
				</td>
			</tr>
			<?php endforeach;?>
			<?php else:?>
				<tr>
					<td>No Records Found!</td>
				</tr>
			<?php endif;?>
			</tbody>
		</table>
	</div>

	<?php require_once('footer.php'); ?>
