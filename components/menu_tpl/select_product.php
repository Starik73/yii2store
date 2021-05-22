<option value="<?= $category['id'] ?>"
    <?php if ($this->model->category_id == $category['id']) echo ' selected' ?> 
    >
    <?= " {$tab} {$category['title']} " ?>
</option>
<?php if (isset($category['children'])) : ?>
    <?= $this->getMenuHtml($category['children'], $tab . '-') ?>
<?php endif; ?>