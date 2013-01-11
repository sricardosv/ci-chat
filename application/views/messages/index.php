<html>
<head>
  <title><?php echo $title ?></title>
</head>
<body>
  <h1>Chat</h1>
  <div id="messages">
    <?php foreach ($messages as $message): ?>
      <div class="message">
          <span class="author"><?php print $message['author']; ?></span>
          <span class="created"><?php print $message['created_at']; ?></span>
          <span class="text"><?php print $message['message']; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
  <h2>Post message</h2>
  <?php echo validation_errors(); ?>
  <?php echo form_open('messages/create') ?>
    <input type="input" name="msg"/><br />
    <input type="submit" name="submit" value="Send"/>
  </form>
</body>
</html>