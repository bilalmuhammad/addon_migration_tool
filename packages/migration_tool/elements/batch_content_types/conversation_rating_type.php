<table class="migration-table table table-bordered table-striped">
    <thead>
    <tr>
        <th><?=t('Handle')?></th>
        <th><?=t('Name')?></th>
        <th><?=t('Points')?></th>
        <th width="1"><input type="checkbox" data-checkbox="toggle-all"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($collection->getTypes() as $type) {
    $validator = $type->getPublisherValidator();
    ?>
        <tr <?php if ($validator->skipItem()) {
    ?>class="migration-item-skipped"<?php 
}
    ?>>
            <td><?=$type->getHandle()?></td>
            <td><?=$type->getName()?></td>
            <td><?=$type->getPoints()?></td>
            <td><input data-checkbox="select-item" type="checkbox" name="item[conversation_rating_type][]" value="<?=$type->getID()?>"></td>
        </tr>
    <?php 
} ?>
    </tbody>
</table>
