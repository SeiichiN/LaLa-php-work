<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>年齢</th>
      <th>性別</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($result as $row) : ?>
      <tr>
        <td><?php echo h($row['id']); ?></td>
        <td><?php echo h($row['name']); ?></td>
        <td><?php echo h($row['age']); ?></td>
        <td><?php echo h($row['sex']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>