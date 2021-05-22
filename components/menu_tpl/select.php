<option value="<?= $category['id'] ?>"
    <?php if ($this->model->parent_id == $category['id']) echo ' selected' ?> 
    <?php if ($this->model->id == $category['id']) echo ' disabled' ?> 
    >
    <?= " {$tab} {$category['title']} " ?>
</option>
<?php if (isset($category['children'])) : ?>
    <?= $this->getMenuHtml($category['children'], $tab . '-') ?>
<?php endif; ?>