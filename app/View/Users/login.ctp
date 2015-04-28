

<div class="users form">
    <?php echo $this->Session->flash('auth'); ?>
    <!-- login field   in view log-->
    <div class="container logInPage">
        <h1 class="deepshadow">Quiz Up</h1>
        <div class="container logInForm">
            <?php echo $this->Form->create('User', [
                'url' => [
                    'controller' => 'users',
                    'action' => 'login'
                ],
                'class' =>'form-horizontal'
            ]); ?>
            <div class="form-group">
            <?php echo$this->Form->label('User.name', 'Username', array('class'=>'col-sm-2 control-label'));?>
                <div class="col-sm-9" style="margin-left:1em">
                    <?php echo $this->Form->input('username', [
                        'label' => false,
                        'div' => false,
                        'type' => 'text',
                        'required',
                        'placeholder' => 'Username',
                        'class' => 'form-control'
                    ]);
                    ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo$this->Form->label('User.password', 'Password', array('class'=>'col-sm-2 control-label'));?>
                <div class="col-sm-9" style="margin-left:1em">
                    <?php echo $this->Form->input('password', [
                        'label' => false,
                        'div' => false,
                        'type' => 'password',
                        'required',
                        'placeholder' => 'Password',
                        'class' => 'form-control'
                    ]);
                    ?>
                </div>
            </div>



                    <table style="width:100%" align="center">
                        <tr>
                            <td align="right">

                        <?php echo $this->Form->submit('Sign In', [
                            'class' => 'btn btn-default'
                        ]);?>
                            </td>
                            <td>&nbsp;&nbsp;</td>
                            <td align="left">
                                <?php echo $this->Html->link('Sign Up', array('controller' => 'users','action'=> 'add'),
                                    array( 'class' => 'btn btn-default'))?>


                            </td>
                        <tr>
                   </table>
               <br>

        </div>
    </div>
    <!--end login field   in view log-->
<!--    --><?php //echo $this->Session->flash('auth'); ?>
<!--    --><?php //echo $this->Form->create('User'); ?>
<!--    <fieldset>-->
<!--        <legend>-->
<!--            --><?php //echo __('Please enter your username and password'); ?>
<!--        </legend>-->
<!--        --><?php //echo $this->Form->input('username');
//        echo $this->Form->input('password');
//        ?>
<!--    </fieldset>-->
<!--    --><?php //echo $this->Form->end(__('Login')); ?>
    <?php echo $this->Form->end(); ?>
</div>