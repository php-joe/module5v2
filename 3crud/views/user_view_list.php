
<table>
  <?php foreach($users as $user){ ?>
  <tr>
    <td><?= $user->getspecies() ?></td>
    <td><?= $user->getamount() ?></td>
    <td><?= $user->gettemp() ?></td>
    <td><?= $user->getph() ?></td>
    <td><?= $user->getCreated() ?></td>
    <td><a href='user.php?action=view_user&target=<?= $user->getid() ?>' class='button'>view</a></td></td>
  </tr>
  <?php } ?>
</table>
<br><br>
<a href='user.php?action=add_user' class='button'>Add New Fish</a>
