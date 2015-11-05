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
echo $this->Form->input('Crust_Type',['options'=>['handtossed'=>'HandTossed','pan'=>'Pan','stuffed'=>'Stuffed $2','thin'=>'Thin']]);
echo $this->Form->checkbox('Pepperoni', ['value' =>0.50]);
echo $this->Form->checkbox('Chicken', ['value' =>0.50]);
echo $this->Form->button(__('Save'));
echo $this->Form->end();
?>