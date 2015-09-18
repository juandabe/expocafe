<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array('controller' => 'users', 'login')); ?>
    <fieldset>
        <legend><?php echo __('Ingreso al sistema con sus datos de accesos'); ?></legend>
        <?php echo $this->Form->input('nit');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<?php
 echo $this->Html->link( "Add A New User",   array('action'=>'add') ); 
?>