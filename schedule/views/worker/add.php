<div class="form_container">
	
	<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
		<label for="name">name</label>
        <input type="text" name="name" required value="<?=isset($pro) && is_object($pro) ? $pro->name : ''; ?>"/>
        
        <label for="surname">surname</label>
        <input type="text" name="surname" required value="<?=isset($pro) && is_object($pro) ? $pro->surname : ''; ?>"/>
        
        <label for="email">email</label>
        <input type="email" name="email" required value="<?=isset($pro) && is_object($pro) ? $pro->email : ''; ?>"/>
        
        <label for="image">Image</label>
		<?php if(isset($pro) && is_object($pro) && !empty($pro->image)): ?>
			<img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="thumb"/> 
		<?php endif; ?>
        <input type="file" name="image" />
        
		<input type="submit" value="Guardar" />
	</form>
</div>