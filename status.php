<?php if (isset($_COOKIE['connected'])): ?>
<div style="position: fixed; bottom: 5px; right: 5px; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; background: white; font-size: 2rem; border-radius: 100px">
    <?php if ($_COOKIE['connected'] == 'false') : ?>
        <i class="fas fa-times-circle" style="color: red"></i>
    <?php endif; ?>
    <?php if ($_COOKIE['connected'] == 'true') : ?>
        <i class="fas fa-check-circle" style="color: green"></i>
    <?php endif; ?>
</div>
<?php endif; ?>