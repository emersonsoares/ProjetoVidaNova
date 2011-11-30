<!--Start Main Content-->
<div class="main-content">
    <a href="#" class="heading"><h1>Contate-nos!</h1></a>
    <p><?php echo $contact['Contact']['content']; ?></p>
    <div class="grid-5">
        <div class="form-message">
            <div class="form-wrapper">
                <?php
                echo $this->Form->create('Contact', array(
                    'method' => 'post',
                    'class' => 'form-layout',
                    'inputDefaults' => array(
                        'div' => false,
                        'label' => false
                        )));
                ?>
                <p><?php echo $this->Form->text('name', array('value' => 'Nome', 'id' => 'Name', 'class' => '2col', 'size' => '50')); ?></p>
                <p><?php echo $this->Form->text('email', array('value' => 'Email', 'id' => 'Email', 'class' => '2col', 'size' => '50')); ?></p>
                <p><?php echo $this->Form->text('phone', array('value' => 'Telefone', 'id' => 'Phone', 'class' => '2col', 'size' => '50')); ?></p>
                <p><?php echo $this->Form->text('subject', array('value' => 'Assunto', 'id' => 'Subject', 'class' => '2col', 'size' => '50')); ?></p>
                <p><?php echo $this->Form->textarea('message', array('id' => 'Message', 'class' => '2col', 'cols' => '80', 'rows' => '8')); ?></p>
                <p><?php echo $this->Form->submit('Send', array('class' => 'submit-button', 'div' => false)); ?></p>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>
<!--End Main Content-->