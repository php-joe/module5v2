<form action="user.php" method="get">
  <input type="hidden" name="id" value="<?= $user->getid() ?>">
  <input type="hidden" name="action" value="save_user">

  <label>Species: </label><input type="text" name="species" value="<?= $user->getspecies() ?>"><br>
  <label>Amount: </label><input type="text" name="amount" value="<?= $user->getamount() ?>"><br>
  <label>Ideal PH: </label><input type="text" name="ph" value="<?= $user->getph() ?>"><br>
  <label>Ideal Temp: </label><input type="text" name="temp" value="<?= $user->gettemp() ?>"><br>
  <input type="submit" value="Save"  class='button'>
</form>
