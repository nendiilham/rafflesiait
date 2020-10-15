<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <p><?php echo $title ?></p>
    <table>
      <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Akses Level</th>
        <th>Email</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        <?php $no=1; foreach ($user as $user) { ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $user->user_nama ?></td>
            <td><?php echo $user->akses_level ?></td>
            <td><?php echo $user->email ?></td>
            <td>
              <a href="#">Hapus</a>
              <a href="#">Edit</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </body>
</html>
