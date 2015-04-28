<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 0:16
 */
?>
<!-- user in cake-->

<!-- user search in cake-->
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
                <?php if($User['User']['role']=='1'){

                }else{
                    echo '<button class="btn btn-success" style="margin-top:3.5em;margin-right:1em"><img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/crown_gold.png" /> Ranking</button></td>
';
                }?>
            <td><!--   search in cake-->
                <?php if($User['User']['role']=='1'){

                }else{
                    echo '<div class="navbar-form " role="search" style="margin-top:4em;margin-right:1em">';
                    echo '<div class="form-group">';
                    echo $this->Form->input('search', [
                        'label' => false,
                        'div' => false,
                        'type' => 'text',
                        'required',
                        'placeholder' => 'Search',
                        'class' => 'form-control',
                        'id' => 'search1'
                    ]);

                    echo ' </div>
                    <button type="submit" class="btn btn-default"><img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-20.png" />
                    </button>';
                }?>
            </td>
            <?php echo $this->Form->end(); ?>
        </tr>
    </table>
</div><!-- end user search in cake-->


<div class="row" style="margin-top:2em">

    <!-- user icon in cake-->
    <div class="col-sm-2" style="margin-top:1em">
        <div class="container-fluid text-center">

            <button type="button" class="<?php if($User['User']['role']=='1'){echo 'circular_profile';}else{echo 'circular_profile_user';}?> btn btn-danger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="badge " style="margin-top:7em;margin-left:5em">+</span></button>
            <div class="collapse " id="collapseExample">
                <?php if($User['User']['role']=='1'){
                echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_add btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Quiz'));
                echo $this->Html->link("", array('controller' => 'categorys','action'=> 'add'), array( 'class' => 'circular_add_cate btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Categories'));
                echo $this->Html->link("", array('controller' => 'admins','action'=> 'deck'), array( 'class' => 'circular_manage_quiz btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Manage Quiz'));
                echo $this->Html->link("", array('controller' => 'admins','action'=> 'account'), array( 'class' => 'circular_manage_account btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Manage Account'));
                echo $this->Html->link("", array('controller' => 'users','action'=> 'logout'), array( 'class' => 'circular_logout btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Log Out'));
                }else{
                echo $this->Html->link("", array('controller' => 'users','action'=> 'profile'), array( 'class' => 'circular_profile_info_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Profile Info'));
                echo $this->Html->link("", array('controller' => 'users','action'=> 'badges'), array( 'class' => 'circular_badges_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Badges'));
                echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_add btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Quiz'));
                echo $this->Html->link("", array('controller' => 'users','action'=> 'logout'), array( 'class' => 'circular_logout btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Log Out'));
                } ?>
            </div>
        </div>
    </div><!--end  user icon in cake-->
    <!-- user info field in cake-->

    <!-- play field in cake-->
    <div class="col-sm-10" >
        <div class="container-fluid showcontent_nofixes">
            <div class="addDeck text-center">
                <h2>Add Deck</h2>
                <div class="container-fluid">
                <?php echo $this->Form->create('Deck',array(
                    'enctype' => 'multipart/form-data',
                    'url' => [
                        'controller' => 'decks',
                        'action' => 'add'
                    ],
                    'class' =>'form-horizontal decorform',
                    'style' => 'margin-top:2em;padding-left:2em'

                )); ?>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">


                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', 'Deck Name', array('class'=>'col-sm-3 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('deckname', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'deckname',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', 'Description', array('class'=>'col-sm-3 control-label'));?>
                                <div class="col-sm-5" >
                                    <?php echo $this->Form->input('description', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'textarea',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control',
                                        'row' => '5'
                                    ]);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group text-left">


                                <?php
                                $options = array();
                                foreach ($categorys as $categorys):
                                    $options[$categorys['Category']['id']] = $categorys['Category']['name'];
                                endforeach;?>

                            	 <?php echo$this->Form->label('Deck.name', 'Categories', array('class'=>'col-sm-3 control-label'));?>
                            	 <div class="col-sm-5" >
                                     <?php echo $this->Form->input('select', array(
                                             'label' => false,
                                             'options' => $options
                                         ,
                                             'class' => 'form-control checkbox inline'
                                         )
                                     ); ?>

                                   
                                </div>
                            </div>                          
                             
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div id="cardindeck">

                        <div class="col-sm-12 badgestyle1" id='card1' style="padding-top:1em;padding-bottom:1em">

                            <form class="form-horizontal">
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '1.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans1', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img  id="cfp1" src="" class="img-thumbnail"  style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front1', [                                        
										'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf1(this);',
										'accept' => 'image/*'
										
										
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img id="cbp1" src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back1', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb1(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>




                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '2.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans2', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img id="cfp2" src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front2', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf2(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img id="cbp2" src=""  class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back2', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb2(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '3.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans3', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img id="cfp3" src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front3', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf3(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img id="cbp3" src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back3', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb3(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>





                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '4.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans4', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img id="cfp4" src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front4', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf4(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img  id="cbp4" src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back4', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb4(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>




                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '5.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans5', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img id="cfp5" src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front5', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf5(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img id="cbp5"src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back5', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb5(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <br>


                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '6.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans6', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img id="cfp6"src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front6', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf6(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img id="cbp6" src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back6', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb6(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '7.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans7', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img id="cfp7" src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front7', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf7(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img id="cbp7"src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back7', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb7(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '8.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans8', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img id="cfp8"src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front8', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf8(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img id="cbp8"src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back8', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb8(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '9.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans9', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img id="cfp9"src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front9', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf9(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img id="cbp9"src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back9', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb9(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '10.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans10', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img id="cfp10"src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front10', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cf10(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img id="cbp10"src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back10', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'cb10(this);',
										'accept' => 'image/*'
                                    ]);
                                    ?>
                                </div>
                            </div>


<!--                            <br>-->
<!--                            <div class="form-group text-left">-->
<!--                                --><?php //echo$this->Form->label('Deck.name', '11.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
<!--                                <div class="col-sm-3" >-->
<!--                                    --><?php //echo $this->Form->input('ans11', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'text',
//                                        'required',
//                                        'placeholder' => 'Description',
//                                        'class' => 'form-control'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!---->
<!---->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-2"></div>-->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Card Front');?>
<!--                                    --><?php //echo $this->Form->input('front11', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!---->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Back Front');?>
<!--                                    --><?php //echo $this->Form->input('back11', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <br>-->
<!--                            <div class="form-group text-left">-->
<!--                                --><?php //echo$this->Form->label('Deck.name', '12.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
<!--                                <div class="col-sm-3" >-->
<!--                                    --><?php //echo $this->Form->input('ans12', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'text',
//                                        'required',
//                                        'placeholder' => 'Description',
//                                        'class' => 'form-control'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!---->
<!---->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-2"></div>-->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Card Front');?>
<!--                                    --><?php //echo $this->Form->input('front12', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!---->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Back Front');?>
<!--                                    --><?php //echo $this->Form->input('back12', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <br>-->
<!--                            <div class="form-group text-left">-->
<!--                                --><?php //echo$this->Form->label('Deck.name', '13.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
<!--                                <div class="col-sm-3" >-->
<!--                                    --><?php //echo $this->Form->input('ans13', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'text',
//                                        'required',
//                                        'placeholder' => 'Description',
//                                        'class' => 'form-control'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!---->
<!---->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-2"></div>-->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Card Front');?>
<!--                                    --><?php //echo $this->Form->input('front13', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!---->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Back Front');?>
<!--                                    --><?php //echo $this->Form->input('back13', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <br>-->
<!--                            <div class="form-group text-left">-->
<!--                                --><?php //echo$this->Form->label('Deck.name', '14.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
<!--                                <div class="col-sm-3" >-->
<!--                                    --><?php //echo $this->Form->input('ans14', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'text',
//                                        'required',
//                                        'placeholder' => 'Description',
//                                        'class' => 'form-control'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!---->
<!---->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-2"></div>-->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Card Front');?>
<!--                                    --><?php //echo $this->Form->input('front14', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!---->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Back Front');?>
<!--                                    --><?php //echo $this->Form->input('back14', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!---->
<!--              <br>-->
<!--                            <div class="form-group text-left">-->
<!--                                --><?php //echo$this->Form->label('Deck.name', '15.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
<!--                                <div class="col-sm-3" >-->
<!--                                    --><?php //echo $this->Form->input('ans15', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'text',
//                                        'required',
//                                        'placeholder' => 'Description',
//                                        'class' => 'form-control'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!---->
<!---->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-2"></div>-->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Card Front');?>
<!--                                    --><?php //echo $this->Form->input('front15', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!---->
<!--                                <div class="col-sm-4 text-left" >-->
<!--                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>-->
<!--                                    --><?php //echo$this->Form->label('Deck.name', 'Back Front');?>
<!--                                    --><?php //echo $this->Form->input('back15', [
//                                        'label' => false,
//                                        'div' => false,
//                                        'type' => 'file',
//                                        'required'
//                                    ]);
//                                    ?>
<!--                                </div>-->
<!--                            </div>-->


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
                </div>
            </div>
        </div>
        <!--end play field in cake-->
    </div>

</div>
<script>
 function cf1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp1')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp1')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp2')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp2')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf3(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp3')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb3(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp3')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf4(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp4')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb4(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp4')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf5(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp5')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb5(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp5')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf6(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp6')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb6(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp6')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf7(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp7')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb7(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp7')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf8(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp8')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb8(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp8')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf9(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp9')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb9(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp9')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf10(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp10')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb10(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp10')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf11(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp11')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb11(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp11')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf12(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp12')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb12(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp12')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf13(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp13')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb13(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp13')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf14(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp14')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb14(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp14')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cf15(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cfp15')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
 function cb15(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#cbp15')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
  </script>