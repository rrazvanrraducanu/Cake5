<?php
echo $this->Form->create();
/*
//output: <form method="post" accept-charset="utf-8" action="/Cake2/form">
//pt a specifica metoda get: echo $this->Form->create('flower', ['type' => 'get']);
//Pentru a defini un action din controller-ul curent:
echo $this->Form->create($article, ['url' => ['action' => 'blabla']]);
//Pentru a defini un action din alt controller, numit Autori:
echo $this->Form->create(null, [
    'url' => ['controller' => 'Autori', 'action' => 'baubau']
]);
*/
// Text
echo $this->Form->input('nume', ['label' => 'NUME', 'default'=>'Popescu']);
 // Text
echo $this->Form->input('prenume', ['label' => 'PRENUME']);
// Password
echo $this->Form->input('password');
// Textarea
echo $this->Form->input('Blabla', ['type' => 'textarea']);
//Textarea
echo $this->Form->label('Textarea');
echo $this->Form->textarea('textarea', ['rows' => '3', 'cols' => '4', 'id'=>'Textarea']);
//checkbox
echo $this->Form->input('Matematica', ['type' => 'checkbox']);
echo $this->Form->input('Informatica', ['type' => 'checkbox']);
//checkbox
echo $this->Form->label('Elev');
echo $this->Form->checkbox('Elev', ['value' => 'elev', 'id'=>'Elev']);
echo "<br>";
echo $this->Form->label('Student');
echo $this->Form->checkbox('Student', ['value' => 'student','id'=>'Student']);
//radio buttons
echo $this->Form->radio(
    'evaluare',
    [
        ['value' => 'buni', 'text' => 'Buni'],
        ['value' => 'fbuni', 'text' => 'Foarte buni'],
        ['value' => 'excelenti', 'text' => 'Excelenti'],
    ]
);
//combo box
$options = ['M' => 'Male', 'F' => 'Female'];
echo $this->Form->select('gender', $options);
//alt combo box
echo $this->Form->select('Student', [
    'Value 1' => 'Label 1',
    'Value 2' => 'Label 2',
    'Value 3' => 'Label 3'
]);
//list box
$options = [
    'Value 1' => 'Label 1',
    'Value 2' => 'Label 2'
];
echo $this->Form->select('field', $options, [
    'multiple' => 'checkbox'
]);


echo $this->Form->button('Reset ', ['type' => 'reset']);
echo $this->Form->button('Submit Form', ['type' => 'submit']);
echo $this->Form->end();
?>

