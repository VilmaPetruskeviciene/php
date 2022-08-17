<?php
if (isset($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<?php if (isset($msg)): ?>
    <div style="background:<?= $msg['type'] ?>">
        <?= $msg['text'] ?>
    </div>
<?php endif ?>