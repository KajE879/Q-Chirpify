<?php
require "database/dbconn.php";

$sql = "SELECT message.id, message.content, message.user_id, users.username 
        FROM message 
        JOIN users ON message.user_id = users.id 
        ORDER BY message.id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="background2">
    <?php require "partials/nav.php"; ?>
    <div class="mid">
        <div class="message-container">
            <?php foreach ($messages as $msg): ?>
            <div class="message">
                <strong><?php echo htmlspecialchars($msg['username']); ?>:</strong>
                <p><?php echo nl2br(htmlspecialchars($msg['content'])); ?></p>
                <?php if ($msg['user_id'] == $_SESSION['user_id']): ?>
                <form method="POST" action="backend/delete.php" style="margin-top: 5px;">
                    <input type="hidden" name="message_id" value="<?= $msg['id']; ?>">
                    <button type="submit">Verwijderen</button>
                </form>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php require "partials/right.php"; ?>
</div>
<?php require "post-button.php"; ?>