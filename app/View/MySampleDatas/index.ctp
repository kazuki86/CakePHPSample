<h1>Index Page</h1>
<p>MySampleData Index View.</p>
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
