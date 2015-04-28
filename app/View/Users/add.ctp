
    <!-- login field   in view log-->
    <div class="container SignUpPage">
        <h1 class="deepshadow">Sign Up</h1>
        <div class="container SignUpForm">
            <?php echo $this->Form->create('User', [
                'url' => [
                    'controller' => 'users',
                    'action' => 'add'
                ],
                'class' =>'form-horizontal decorform',
                'style' => 'margin-top:2em;padding-left:2em'

            ]); ?>
<!--            <form id="add-account-form" method="" action="" class="form-horizontal decorform" style="margin-top:2em;padding-left:2em">-->
<!--                <div class="form-group">-->
<!--                    <label for="username" class="col-sm-2 control-label">Username</label>-->
<!--                    <div class="col-sm-7" >-->
<!--                        <input name="username" type="text" class="form-control" id="username" placeholder="username" required>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group">
                    <?php echo$this->Form->label('User.name', 'Username', array('class'=>'col-sm-2 control-label'));?>
                    <div class="col-sm-7" >
                        <?php echo $this->Form->input('username', [
                            'label' => false,
                            'div' => false,
                            'type' => 'text',
                            'required',
                            'placeholder' => 'username',
                            'class' => 'form-control'
                        ]);
                        ?>
                    </div>
                </div>
<!--                <div class="form-group text-left">-->
<!--                    <label for="password" class="col-sm-2 control-label">Password </label>-->
<!--                    <div class="col-sm-5" >-->
<!--                        <input name="password" id="pass1" type="password" class="form-control" id="password" placeholder="password" required>-->
<!--                    </div>-->
<!--                    <label style="color:#999">* more than 2 to 8 alphabet </label>-->
<!--                </div>-->
                <div class="form-group text-left">
                    <?php echo$this->Form->label('User.password', 'Password', array('class'=>'col-sm-2 control-label'));?>
                    <div class="col-sm-5" >
                        <?php echo $this->Form->input('password', [
                            'label' => false,
                            'div' => false,
                            'type' => 'password',
                            'required',
                            'placeholder' => 'password',
                            'class' => 'form-control',
                            'id' => 'pass1'
                        ]);
                        ?>
                    </div>
                    <label style="color:#999">* more than 2 to 8 alphabet </label>
                </div>

                <div class="form-group text-left">
                    <label for="password2" class="col-sm-2 control-label">Password </label>
                    <div class="col-sm-5" >
                        <input onkeyup="checkPass(); return false;" id="pass2" type="password" class="form-control" id="password2" placeholder="password" required>
                        <span id="confirmMessage" class="confirmMessage"></span> </div>
                    <label style="color:#999">* re-enter password</label>
                </div>
                <hr />
<!--                <div class="form-group text-left">-->
<!--                    <label for="firstname" class="col-sm-2 control-label">Firstname </label>-->
<!--                    <div class="col-sm-9" >-->
<!--                        <input name="firstname" type="text" class="form-control" id="firstname" placeholder="firstname" required>-->
<!--                    </div>-->
<!--                </div>-->
            <div class="form-group">
                <?php echo$this->Form->label('User.name', 'Firstname', array('class'=>'col-sm-2 control-label'));?>
                <div class="col-sm-9" >
                    <?php echo $this->Form->input('firstname', [
                        'label' => false,
                        'div' => false,
                        'type' => 'text',
                        'required',
                        'placeholder' => 'firstname',
                        'class' => 'form-control'
                    ]);
                    ?>
                </div>
            </div>
<!--                <div class="form-group text-left">-->
<!--                    <label for="lastname" class="col-sm-2 control-label">Lastname </label>-->
<!--                    <div class="col-sm-9" >-->
<!--                        <input name="lastname" type="text" class="form-control" id="lastname" placeholder="lastname" required>-->
<!--                    </div>-->
<!--                </div>-->
            <div class="form-group">
                <?php echo$this->Form->label('User.name', 'Lastname', array('class'=>'col-sm-2 control-label'));?>
                <div class="col-sm-9" >
                    <?php echo $this->Form->input('lastname', [
                        'label' => false,
                        'div' => false,
                        'type' => 'text',
                        'required',
                        'placeholder' => 'lastname',
                        'class' => 'form-control'
                    ]);
                    ?>
                </div>
            </div>
<!--                <div class="form-group">-->
<!--                    <label for="exampleInputEmail1" class="col-sm-2 control-label">Email</label>-->
<!--                    <div class="col-sm-7" >-->
<!--                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="email" required>-->
<!--                    </div>-->
<!--                </div>-->
            <div class="form-group">
                <?php echo$this->Form->label('User.name', 'Email', array('class'=>'col-sm-2 control-label'));?>
                <div class="col-sm-9" >
                    <?php echo $this->Form->input('email', [
                        'label' => false,
                        'div' => false,
                        'type' => 'text',
                        'required',
                        'placeholder' => 'email',
                        'class' => 'form-control'
                    ]);
                    ?>
                </div>
            </div>


            <table style="width:100%" align="center">
                <tr>
                    <td align="right">

                        <?php echo $this->Form->submit('Sign Up', [
                            'class' => 'btn btn-primary'
                        ]);?>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td align="left">
                        <?php echo $this->Html->link('Cancel', array('controller' => 'users','action'=> 'login'),
                            array( 'class' => 'btn btn-danger'))?>
                    </td>
                <tr>
            </table>
            <br>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <!--end login field   in view log-->




