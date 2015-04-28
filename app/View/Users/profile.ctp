<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 15:16
 */ ?>
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

    <div class="col-sm-10" >
        <div class="container-fluid showcontent_nofixes">
            <div class="bgcontent">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 text-center">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-4"> </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 text-center" ><div><img src="../img/profile/<?php echo $User['User']['image'] ?>" class="img-circle img-thumbnail img-responsive" style="width:150px;height:150px" /></div></div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form id="add-account-form" method="" action="" class="form-horizontal decorform" style="margin-top:2em;padding-left:2em">
                        <div class="form-group text-left">
                            <label for="firstname" class="col-sm-3 control-label">Firstname </label>
                            <div class="col-sm-9" >
                                <p style="margin-top:0.5em"><?php echo $User['User']['firstname'] ?></p>
                            </div>
                        </div>
                        <div class="form-group text-left">
                            <label for="firstname" class="col-sm-3 control-label">Last name </label>
                            <div class="col-sm-9" >
                                <p style="margin-top:0.5em"><?php echo $User['User']['lastname'] ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-7" >
                                <p style="margin-top:0.5em"><?php echo $User['User']['email'] ?></p>
                            </div>
                        </div>
                        <table style="width:100%" align="center">
                            <tr>
                                <td align="right">

                                    <?php echo $this->Html->link('Edit Profile', array('controller' => 'users','action'=> 'editprofile'),
                                        array( 'class' => 'btn btn-primary'))?>
                                </td>
                                <td>&nbsp;&nbsp;</td>
                                <td align="left">
                                    <?php echo $this->Html->link('Edit Password', array('controller' => 'users','action'=> 'editpass'),
                                        array( 'class' => 'btn btn-primary'))?>
                                </td>

                                <td align="left">
                                    <?php echo $this->Html->link('Back', array('controller' => 'users','action'=> 'index'),
                                        array( 'class' => 'btn btn-success'))?>
                                </td>
                            <tr>
                        </table>
                        <br />
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>

        </div>
    </div>
</div>
<!--end admin info field in cake-->
