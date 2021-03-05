<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <title>One The Git</title>
  </head>
  <body>
    <header>
      <h1>Welcome to "One The Git"</h1>
      <p>Posted by James Pinelo</p>
    </header>
    <div align="center">
      <div class="display">
        <img src="img/original.jpg" />
      </div>
      <form id="authentication" method="POST" action="validate.php">
        <p>
          Username:
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Username"
          />
        </p>
        <p>
          Password:
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
          />
        </p>
        <input type="submit" value="Submit" />
      </form>
    </div>
    <?php if ($_REQUEST['message']) { 
    ?>
    <p class="rejection"><?php echo $_REQUEST['message']; ?></p>
    <?php } ?>
    <footer>
      <p>Created by <a href="#">OneTheGitPowerful</a></p>
    </footer>
  </body>
</html>
