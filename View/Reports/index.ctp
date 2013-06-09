<body class="body-inner">
    <?php echo $this->Html->script('/ReportManager/js/index.js'); ?>
    <?php echo $this->Html->css('/ReportManager/css/report_manager'); ?>

    <?=$this->element('menu') ?>

<div class="retracted main-content">
  <div class="breadcrumb-container">
    <ul class="xbreadcrumbs">
      <li>
        <?php 
          echo $this->Html->link(
            '<i class="icon-photon home"></i>',
            array('controller' => 'App', 'action' => 'index'),
            array('escape' => false));
        ?>
      </li>
      <li class="current">
        <a href="javascript:;">Reports</a>
      </li>
    </ul>
  </div>           
  <header>
  <i class="icon-big-notepad"></i>
  <h2><small>Reports</small></h2>
  <h3><small>Reports Manager</small></h3>
</header>
<?php
  $error_msg = $this->Session->flash();
  if($error_msg){
 ?>
<div class="row-fluid">
  <div class="alert alert-error span12">
    <i class="icon-alert icon-alert-error"></i>
    <strong><?=$error_msg;?></strong>
  </div>
</div>
<?php } ?>

      <div class="container-fluid">
        <!--Sortable Responsive Table begin-->
        <div class="row-fluid">
          <div class="span12">
                <script type="text/javascript">
                    firstLevel = "<?php echo Router::url('/'); ?>";
                </script>
                <div class="reportManager index">
                    <h2><?php echo __d('report_manager','Report Manager',true);?></h2>
                    <?php
                        
                        echo '<div id="repoManLeftCol">';
                        echo $this->Form->create('ReportManager');
                        echo '<fieldset>';
                        echo '<legend>' . __d('report_manager','New report',true) . '</legend>';        
                        echo $this->Form->input('model',array(
                            'type'=>'select',            
                            'label'=>__d('report_manager','Model',true),
                            'options'=>$models,
                            'empty'=>__d('report_manager','--Select--',true)
                            ));
                        
                        echo '<div id="ReportManagerOneToManyOptionSelect">';
                        echo $this->Form->input('one_to_many_option',array(
                            'type'=>'select',
                            'label'=>__d('report_manager','One to many option',true),
                            'options'=>array(),
                            'empty'=>__d('report_manager','<None>',true)
                            ));
                        echo '</div>';
                        echo $this->Form->input('new',array(
                            'type'=>'hidden',
                            'value'=>'1'
                            ));        
                        echo '</fieldset><br /><br />';
                        echo $this->Form->submit(__d('report_manager','New',true),array('name'=>'new'));
                        echo $this->Form->end();
                        echo '</div>';
                        
                        echo '<div id="repoManMiddleCol">';
                        
                        echo $this->Html->tag('h2',__d('report_manager','OR',true));
                        
                        echo '</div>';
                        
                        echo '<div id="repoManRightCol">';
                        echo $this->Form->create('ReportManager');
                        echo '<fieldset>';
                        echo '<legend>' . __d('report_manager','Load report',true) . '</legend>';        
                        
                        echo '<div id="ReportManagerSavedReportOptionContainer">';
                        echo $this->Form->input('saved_report_option',array(
                            'type'=>'select',
                            'label'=>__d('report_manager','Saved reports',true),
                            'options'=>$files,
                            'empty'=>__d('report_manager','--Select--',true)
                            ));
                        echo '</div>';
                        echo $this->Form->input('load',array(
                            'type'=>'hidden',
                            'value'=>'1'
                            ));        
                        echo '<button type="button" class="deleteReport">' . __d('report_manager','Delete',true) . '</button>';
                        echo '</fieldset>';
                        echo $this->Form->submit(__d('report_manager','Load',true),array('name'=>'load'));
                        echo $this->Form->end();
                        echo '</div>';
                    ?>
                </div>
          </div>
        </div>
    </div><!-- end container -->
</div>

<!-- Original Below -->
