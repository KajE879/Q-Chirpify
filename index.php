<?php require "backend/post.php";?>
<div class="background2">
    <?php require "partials/nav.php"; ?>
    <div class="mid">
        <div class="message-container">
            <?php foreach ($messages as $msg): ?>
            <div class="message">
                <strong><?php echo $msg['username']; ?>:</strong>
                <p><?php echo nl2br($msg['content']); ?></p>
                <?php if ($msg['user_id'] == $_SESSION['user_id']): ?>
                <form method="POST" action="backend/delete.php">
                    <input type="hidden" name="message_id" value="<?php echo $msg['id']; ?>">
                    <button class="delete" type="submit">Delete</button>
                </form>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php require "partials/right.php"; ?>
</div>
<?php require "post-button.php"; ?>