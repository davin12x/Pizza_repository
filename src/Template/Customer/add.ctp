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
echo $this->Form->input('Pepperoni', array('type' => 'checkbox','value'=>0.50,'name'=>'pepperoni'));
echo $this->Form->input('Chicken', array('type' => 'checkbox','value'=>0.50,'name'=>'chicken'));
echo $this->Form->checkbox('done', ['value' =>'checkbox']);
?>
</div>
<?php
echo $this->Form->button(__('Save'));
echo $this->Form->end();
?>