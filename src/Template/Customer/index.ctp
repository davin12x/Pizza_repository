<h1>Conestoga Pizzeria</h1>
<?= $this->Html->link('AddCustomer ', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Phone</th>
        <th>Total</th>
    </tr>
    <?php foreach ($customers as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td><?= $article->FirstName?></td><!--first name is databse column name-->
        <td><?= $article->LastName?></td>
        <td><?= $article->Address?></td>
        <td><?= $article->City?></td>
        <td><?= $article->PhoneNo?></td>
        <td><?= $article->Total?></td>
         <td><?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>
        </td>
        <td><?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>