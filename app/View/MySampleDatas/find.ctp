<h1>Index Page</h1>
<p>MySampleData Find View.</p>
<form method="post" action="./find">
  ID:<input type="text" name="id" />
  <input type="submit" />
</form>
 
<table>
<?php if (isset($data)): ?>
  <tr>
    <th>Name:</th>
    <td><?php echo $data['MySampleData']['name']; ?></td>
  </tr>
  <tr>
    <th>Mail:</th>
    <td><?php echo $data['MySampleData']['mail']; ?></td>
  </tr>
  <tr>
    <th>Tel:</th>
    <td><?php echo $data['MySampleData']['tel']; ?></td>
  </tr>
<?php endif; ?>
</table>
