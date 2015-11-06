<h1>Edit Customer Order</h1>
<?php
echo $this->Form->create($customers);
echo $this->Form->input('FirstName');
echo $this->Form->input('LastName');
echo $this->Form->input('Address');
echo $this->Form->input('City');
echo $this->Form->input('Pin');
echo $this->Form->input('Email');
echo $this->Form->input('PhoneNo');
echo $this->Form->input('Toppings', array('type' => 'select', 'multiple' => 'checkbox','options' => array(
                'greenolives' => 'GreenOlives',
                'blackolives' => 'BlackOlives',
                'chicken' => 'Chicken',
                'pineapple' => 'PineApple',
                'pepperoni' => 'Pepperoni',
                'orange' => 'Orange',
                'feta' => 'Feta',
                'bacon' => 'Bacon'
            )
         ));
echo $this->Form->button(__('Save'));
echo $this->Form->end();
?>