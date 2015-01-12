<h1>Index Page</h1>
<p>MySampleData Index View.</p>

<h2>Al</h2>
<table>
  <tr>
    <th>name</th>
    <th>mail</th>
    <th>tel</th>
  </tr>
<?php foreach ($datas as $data): ?>
  <tr>
    <td><?php echo $data['MySampleData']['name']; ?></td>
    <td><?php echo $data['MySampleData']['mail']; ?></td>
    <td><?php echo $data['MySampleData']['tel']; ?></td>
  </tr>
<?php endforeach; ?>
</table>

<h2>List</h2>
<table>
  <tr>
    <th>id</th>
    <th>the first elem</th>
  </tr>
<?php foreach ($list as $id=>$data): ?>
  <tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $data; ?></td>
  </tr>
<?php endforeach; ?>
</table>
