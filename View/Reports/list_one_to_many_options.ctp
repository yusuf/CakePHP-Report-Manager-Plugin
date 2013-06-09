<?php
echo $this->Form->input('ReportManager.one_to_many_option',array(
    'type'=>'select',    
    'label'=>__d('report_manager','One to many option',true),
    'options'=>$associatedModels,
    'empty'=>__d('report_manager','--Select--',true)
    ));

?>