
<ul>
  <li><?= $user->getid() ?></li>
  <li><?= $user->getspecies() ?></li>
  <li><?= $user->getamount() ?></li>
  <li><?= $user->gettemp() ?></li>
  <li><?= $user->getph() ?></li>
  <li><?= $user->getCreated() ?></li>
</ul>

<a href='user.php' class='button'>View All Fish</a>
<a href='user.php?action=delete_user&target=<?= $user->getid() ?>' class='button'>Delete This Fish</a>
<a href='user.php?action=edit_user&target=<?= $user->getid() ?>' class='button'>Edit This Fish</a>
