<h1>Add Customer Order</h1>
<?php
echo $this->Form->create($customers);
echo $this->Form->input('FirstName');
echo $this->Form->input('LastName');
echo $this->Form->input('Address');
echo $this->Form->input('City');
echo $this->Form->input('Pin');
echo $this->Form->input('Email');
echo $this->Form->input('PhoneNo');
echo $this->Form->input('Pizza_Size',['options'=>['small'=>'Small    $5','medium'=>'Medium $10','large'=>'Large $15','xlarge'=>'Xlarge $20']]);
echo $this->Form->input('Crust_Type',['options'=>['handtossed'=>'HandTossed','pan'=>'Pan','stuffed'=>'Stuffed $2','thin'=>'Thin']]);?>
<div>
<?php 

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

/*$activities = ['name'=>'pep','name'=>'fgyey','value'=>'pesefwefp'];

echo $this->Form->input('activity.sports', 
                        array('options' => $activities,
    'div' => 'input checkboxes',
    'multiple' => 'checkbox',
    'label' => false
));*/


?>
</div>
<?php
echo $this->Form->button(__('Save'));
echo $this->Form->end();
?>