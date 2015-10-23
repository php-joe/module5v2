<!DOCTYPE html>
<html>
  <head>
    <title>ORM/MVC</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
  </head>
  <body>
    <h2>Fish Tracker</h2>
    <?php
      require_once('../lib/db.interface.php');
      require_once('../lib/db.class.php');
      require_once('../models/user.class.php');
      require_once('../models/manager.abstract.php');
      require_once('../models/user_manager.class.php');


      $action = isset($_GET["action"])?$_GET["action"]:'';

      $target = isset($_GET["target"])?$_GET["target"]:'';


      switch ($action) {
        case 'view_user':
          $userManager = new UserManager();
          $user = $userManager->getUser($target);
          include('../views/user_view.php');
          break;

        case 'delete_user':
          $userManager = new UserManager();
          $userManager->delete($target);
          header('Location: user.php');
          break;

        case 'add_user':
          $userManager = new UserManager();
          $user = new User();
          include('../views/user_add_edit.php');
          break;

        case 'edit_user':
          $userManager = new UserManager();
          $user = $userManager->getUser($target);
          include('../views/user_add_edit.php');
          break;

        case 'save_user':
          $userManager = new UserManager();
          $arr = array();
          $arr["id"] = isset($_GET["id"])?$_GET["id"]:'';
          $arr["species"] = isset($_GET["species"])?$_GET["species"]:'';
          $arr["amount"] = isset($_GET["amount"])?$_GET["amount"]:'';
          $arr["ph"] = isset($_GET["ph"])?$_GET["ph"]:'';
          $arr["temp"] = isset($_GET["temp"])?$_GET["temp"]:'';
          $user = new User();
          $user->hydrate($arr);
          $userManager->save($user);
          header('Location: user.php');
          break;

        default:
          $userManager = new UserManager();
          $users = $userManager->getAllUsers();
          include('../views/user_view_list.php');
          break;
      }
    ?>

</body>
</html>
