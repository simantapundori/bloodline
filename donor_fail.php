<?php include 'header.php'; ?>
<div class="container">
    <h2>Registration Failed ❌</h2>
    <?php if ($_GET['reason'] === 'cooldown'): ?>
        <p>You have donated blood recently. You can register again after 3 months.</p>
    <?php else: ?>
        <p>Something went wrong. Please try again later.</p>
    <?php endif; ?>
    <a href="register_donor.php" class="btn">Go Back</a>
</div>
<?php include 'footer.php'; ?>
