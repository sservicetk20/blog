<?php $__env->startSection('content'); ?>
	<?php echo Form::open(['route' => 'articles.store','method' => 'POST', 'files' => true]); ?>


	<div class="form-group">
		<?php echo Form::label('title','Titulo'); ?>

		<?php echo Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo ...', 'required']); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('category_id', 'Categoria'); ?>

		<?php echo Form::select('category_id', $categories, null, ['class' => 'form-control select-category' ,'required']); ?>

	</div>

	<div class="form-group-">
		<?php echo Form::label('content', 'Contenido'); ?>

		<?php echo Form::textarea('content','Ingresa el Contenido del Articulo', ['class' => 'form-control textarea-content']); ?>

	</div>

	<div class="form-group">
		<?php echo Form::label('tags', 'Tags'); ?>

		<?php echo Form::select('tags[]', $tags, null, ['tags' => 'id', 'class' => 'form-control select-tag','multiple','required']); ?>

	</div>

	<div class="form-group">
		<?php echo Form::label('image', 'Imagen'); ?>

		<?php echo Form::file('image', null, ['class' => 'fileImage']); ?>

	</div>

	<div class="form-group">
		<?php echo Form::submit('Agregar articulos', ['class'=>'btn btn-raised btn-info']); ?>

	</div>
	
	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
 <script>
	$('.select-tag').chosen({
		placeholder_text_multiple: 'Selecione Maximo Tres Tags',
		max_selected_options: 3,
		search_constains: true,
		no_results_txt: 'No Se Encontranron Estos Tags'

	});

	$('.select-category').chosen({
		placeholder_text_single: 'Selecione Una Categoria',
	});

	$('.textarea-content').trumbowyg();
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>