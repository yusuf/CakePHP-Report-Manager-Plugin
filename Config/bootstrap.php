<?php
Configure::write('ReportManager.displayForeignKeys', 0);

// List of Fields to ignore Glabally
Configure::write('ReportManager.globalFieldIgnoreList', array(
    'id',
    'created',
    'modified'
));

// List of Models to ignore Glabally
Configure::write('ReportManager.modelIgnoreList',array(
    'User',
    'AppModel',
    'Role',
    'Sqlreport'
));

// List of Model Fields to ignore
// Configure::write('ReportManager.modelFieldIgnoreList',array(
//     'MyModel' => array(
//         'field1'=>'field1',
//         'field2'=>'field2',
//         'field3'=>'field3'
//     )
// ));

// Report store path
Configure::write('ReportManager.reportPath', 'tmp'.DS.'reports'.DS);

// List of Model Field Name to overright in Display
// Configure::write('ReportManager.labelFieldList',array(
//     '*' => array(
//         'field1'=>'my field 1 label description',
//         'field2'=>'my field 2 label description',
//         'field3'=>'my field 3 label description'
//     ),
//     'MyModel' => array(
//         'field1' => 'my MyModel field 1 label description'
//     )
// ));
?>