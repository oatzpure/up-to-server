<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 27/4/2558
 * Time: 23:47
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
                        ?>
                    </div>
                    <button type="submit" class="btn btn-default"><img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-20.png" />
                    </button>
                </div></td>
        </tr>
    </table>
</div><!-- end user search in cake-->


<div class="row" style="margin-top:2em">

    <!-- user icon in cake-->
    <div class="col-sm-2" style="margin-top:1em">
        <div class="container-fluid text-center">

            <button type="button" class="circular_profile_user btn btn-danger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="badge " style="margin-top:7em;margin-left:5em">+</span></button>
            <div style="margin-top:1em"><span class="label label-info"><?php echo $User['User']['firstname'] ?> <?php echo $User['User']['lastname'] ?></span></div>
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

            <!--first page playing game-->
            <div class="playbutton text-center center-block" >
                <div class="gameform">
                    <h1><?php echo $deck['Deck']['name']?></h1>
                    <div class="row">
                        <div class="col-sm-4"><div class="gamepicture"><img src="../../img/cards/<?php echo $deck['Card'][0]['front']?>" class="img-thumbnail thumbnailDecor" /></div></div>
                        <div class="col-sm-4"><div class="gamepicture"><img src="../../img/cards/<?php echo $deck['Card'][0]['back']?>" class="img-thumbnail thumbnailDecor" /></div></div>
                        <div class="col-sm-4"><br><br><br><h3><?php echo $deck['Card'][0]['answer']?></h3></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6"> <div class="gamedetail text-left"><?php echo $deck['Deck']['description']?></div></div>
                        <div class="col-sm-3"></div>
                    </div>

                    <!-- ลองปุ่มสวยๆดุ ถ้าใช้ไม่ได้ก้อเปลี่ยนนะ เวลาทำ-->
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-12 "> <a href="#" class="action-button shadow animate red " style="margin-left: 20%" >Play</a> </div>
<!--                                <div class="col-sm-6"><a href="#" class="action-button shadow animate yellow">Tutorial</a></div>-->
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>