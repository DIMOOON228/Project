<option
    value="<?= $category['id'] ?>"
    <?php if($category['id']==$this->model->category_id) echo 'selected' ?>
><?= $tab.$category['name'] ?>
</option>
<?php  if( isset($category['childs']) ):?>
    <ul>
        <?= $this->getMenuHtml($category['childs'],$tab.'_')?>
    </ul>
<?php endif;  ?>
