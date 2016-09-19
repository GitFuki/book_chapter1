<h2><?php echo __('Products'); ?></h2>
<table>
    <tr>
        <th><?php echo $this->Pagenator->sort('id'); ?></th>
        <th><?php echo $this->Pagenator->sort('name'); ?></th>
        <th><?php echo $this->Pagenator->sort('created'); ?></th>
    </tr>
    <?php foreach ($products as $product) ; ?>
    <tr>
        <td><?php echo $product['Product']['id']; ?></td>
        <td><?php
            echo $this->Html->link($product['Product']['name'],
                array('controller' => 'products', 'action' => 'view',
                    $product['Product']['id']));
            ?>
        </td>
        <td><?php echo $this->Time->nice($product['Product']['created']); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


