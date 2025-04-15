    <div class="right">
        <div class="username">
        <?php
            if (isset($_SESSION['username'])) {
                echo '<p>Username: ' . $_SESSION['username'] . '</p>';
            } else {
                echo '<a href="inlog-form.php">Log nu in!</a>';
            }
            ?>
        </div>
    </div>
    </body>

    </html>