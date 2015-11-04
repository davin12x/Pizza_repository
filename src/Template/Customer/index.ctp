<h1>Conestoga Pizzeria</h1>
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>City</th>
        <th>PinCode</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Total</th>
    </tr>
    <?php foreach ($customers as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td><?= $article->firstName?></td>
        <td><?= $article->lastName?></td>
        <td><?= $article->Address?></td>
        <td><?= $article->city?></td>
        <td><?= $article->emai?></td>
        <td><?= $article->pin?></td>
        <td><?= $article->phone?></td>
        <td><?= $article->total?></td>
        
    </tr>
    <?php endforeach; ?>
</table>