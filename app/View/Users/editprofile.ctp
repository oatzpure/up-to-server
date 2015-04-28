<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 2:08
 */?>
<div class="container text-right">
    <?php echo $this->Form->create('Index', [
        'url' => [
            'controller' => 'users',
            'action' => 'index'
        ],
    ]); ?>
    <div class="pull-left" style="padding-left:13em">
        <h1 class="deepshadow">Quiz Game</h1></div>
    <table class="pull-right">
        <tr>
            <td> <!--   rank in cake-->
                <button class="btn btn-success" style="margin-top:3.5em;margin-right:1em"><img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/crown_gold.png" /> Ranking</button></td>
            <td><!--   search in cake-->
                <div class="navbar-form " role="search" style="margin-top:4em;margin-right:1em">
                    <div class="form-group">
                        <?php echo $this->Form->input('search', [
                            'label' => false,
                            'div' => false,
                            'type' => 'text',
                            'required',
                            'placeholder' => 'Search',
                            'class' => 'form-control',
                            'id' => 'search1'
                        ]);
                        ?>                    </div>
                    <button type="submit" class="btn btn-default"><img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-20.png" />
                    </button>
                </div></td>
            <?php echo $this->Form->end(); ?>

        </tr>
    </table>
</div><!-- end user search in cake-->


<div class="row" style="margin-top:2em">

    <!-- user icon in cake-->
    <div class="col-sm-2" style="margin-top:1em">
        <div class="container-fluid text-center">

            <button type="button" class="circular_profile_user btn btn-danger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="badge " style="margin-top:7em;margin-left:5em">+</span></button>
            <div class="collapse " id="collapseExample">
                 <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'profile'), array( 'class' => 'circular_profile_info_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Profile Info'))?>
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'badges'), array( 'class' => 'circular_badges_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Badges'))?>
                <?php echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_add btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Quiz'))?>
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'logout'), array( 'class' => 'circular_logout btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Log Out'))?>
            </div>
        </div>
    </div><!--end  user icon in cake-->
    <!-- user info field in cake-->
    <div class="col-sm-10" >
        <div class="container-fluid showcontent_nofixes">
            <div class="bgcontent">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 text-center">
                        <h2>Edit Profile</h2>
                    </div>
                    <div class="col-sm-4"> </div>
                </div>
                <?php echo $this->Form->create('User', array(
                    'enctype' => 'multipart/form-data',
                    'url' => [
                        'controller' => 'users',
                        'action' => 'editprofile'
                    ],
                    'class' =>'form-horizontal decorform',
                    'style' => 'margin-top:2em;padding-left:2em'

                )); ?>
                <div class="form-group text-left" ><!-- Input File-->
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 text-center" >
                        <!-- php pull pic-->
                        <div><img id="profileimg" src="../img/profile/<?php echo $User['User']['image'] ?>" class="img-circle img-thumbnail" style="width:150px;height:150px" /></div>
                        <?php echo$this->Form->label('Deck.name', 'Profile Picture input');?>
                            <?php echo $this->Form->input('image', [
                                'label' => false,
                                'div' => false,
                                'type' => 'file',
                                'value' => $User['User']['image'],
                                'onchange' => 'showprofile(this);',
                                'class' => 'form-control',
                            ]);
                            ?>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <div class="form-group text-left">
                    <?php echo$this->Form->label('Deck.name', 'Firstname', array('class'=>'col-sm-2 control-label'));?>
                    <div class="col-sm-8" >
                        <?php echo $this->Form->input('firstname', [
                            'label' => false,
                            'div' => false,
                            'type' => 'text',
                            'required',
                            'value' => $User['User']['firstname'],
                            'class' => 'form-control'
                        ]);
                        ?>
                    </div>
                </div>

                <div class="form-group text-left">
                    <?php echo$this->Form->label('Deck.name', 'Lastname', array('class'=>'col-sm-2 control-label'));?>
                    <div class="col-sm-8" >
                        <?php echo $this->Form->input('lastname', [
                            'label' => false,
                            'div' => false,
                            'type' => 'text',
                            'required',
                            'value' => $User['User']['lastname'],
                            'class' => 'form-control'
                        ]);
                        ?>
                    </div>
                </div>

                <div class="form-group text-left">
                    <?php echo$this->Form->label('Deck.name', 'Email', array('class'=>'col-sm-2 control-label'));?>
                    <div class="col-sm-8" >
                        <?php echo $this->Form->input('email', [
                            'label' => false,
                            'div' => false,
                            'type' => 'text',
                            'required',
                            'value' => $User['User']['email'],
                            'class' => 'form-control'
                        ]);
                        ?>
                    </div>
                </div>


                <div class="row"><!--this part hav to connect to form that in upper part-->
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2"><?php echo $this->Form->submit('Submit', [
                            'class' => 'btn btn-primary'
                        ]);?></div>
                    <div class="col-sm-2"><?php echo $this->Html->link('Cancel', array('controller' => 'users','action'=> 'index'),
                            array( 'class' => 'btn btn-danger'))?></div>
                    <div class="col-sm-4"></div>
                </div>
                <?php echo $this->Form->end(); ?>

                <!--                <hr />-->


                <!--            <form id="password-form" method="" action="" class="form-horizontal decorform" style="margin-top:2em;padding-left:2em;">-->
                <!--                <div class="form-group text-left">-->
                <!--                    <label for="password" class="col-sm-2 control-label">Password </label>-->
                <!--                    <div class="col-sm-5" >-->
                <!--                        <input name="password" id="pass1" type="password" class="form-control" id="password" placeholder="password" required>-->
                <!--                    </div>-->
                <!--                    <label style="color:#999">* more than 2 to 8 alphabet </label>-->
                <!--                </div>-->
                <!--                <div class="form-group text-left">-->
                <!--                    <label for="password2" class="col-sm-2 control-label">Password </label>-->
                <!--                    <div class="col-sm-5" >-->
                <!--                        <input onkeyup="checkPass(); return false;" name="password2" id="pass2" type="password" class="form-control" id="password2" placeholder="password" required>-->
                <!--                        <span id="confirmMessage" class="confirmMessage"></span> </div>-->
                <!--                    <label style="color:#999">* re-enter password</label>-->
                <!--                </div>-->
                <!--                <button class="btn btn-primary center-block" onclick="" type="button">Change Password</button>-->
                <!--                <br />-->
                <!--            </form>-->
            </div>
        </div>
    </div><!--end user info field in cake-->

    <script>
        function showprofile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#profileimg')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>