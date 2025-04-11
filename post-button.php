<div id="overlay"></div>
<div id="popup">
    <div class="form-container">
        <form class="form" method="POST" action="backend/create-message.php">
            <div class="form-group">
                <label for="content">Post content:</label>
                <textarea id="content" name="content" placeholder="Type your message"></textarea>
            </div>
            <button type="submit" class="form-submit-btn">Submit</button>
            <button type="button" class="close-btn" onclick="closePopup()">Close</button>
        </form>
    </div>
</div>