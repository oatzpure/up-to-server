<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 27/4/2558
 * Time: 15:48
 */?>
<div class="container" >

<!-- admin in cake-->

<!-- admin search in cake-->
<div class="container text-right">
  <div class="row ">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <h1 class="deepshadow">Quiz Game</h1>
    </div>
    <div class="col-sm-3" style="margin-top:4.15em">
      <!--   search in cake-->
    </div>
    <div class="col-sm-3" style="margin-top:3.5em"></div>
  </div>
</div>
<!-- end admin search in cake-->

<div class="row" style="margin-top:2em">

  <!-- admin icon in cake-->
  <div class="col-sm-2" style="margin-top:1em;margin-bottom:1em">
    <div class="container-fluid text-center">

        <button type="button" class="circular_profile btn btn-danger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="badge " style="margin-top:7em;margin-left:5em">+</span></button>
        <div style="margin-top:1em"><span class="label label-info"><?php echo $User['User']['firstname'] ?> <?php echo $User['User']['lastname'] ?></span></div>
        <div class="collapse " id="collapseExample">
        <?php echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_add btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Quiz'))?>
                    <?php echo $this->Html->link("", array('controller' => 'categorys','action'=> 'add'), array( 'class' => 'circular_add_cate btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Categories'))?>
                    <?php echo $this->Html->link("", array('controller' => 'admins','action'=> 'deck'), array( 'class' => 'circular_manage_quiz btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Manage Quiz'))?>
                    <?php echo $this->Html->link("", array('controller' => 'admins','action'=> 'account'), array( 'class' => 'circular_manage_account btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Manage Account'))?>
                    <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'logout'), array( 'class' => 'circular_logout btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Log Out'))?>
                </div>
    </div>
  </div>
  <!--end  admin icon in cake-->
  <!-- play field in cake-->
  <div class="col-sm-10" >
    <div class="container-fluid showcontent_nofixes">
    	<h2>Manage Account</h2>
    	<form action="" method="" id="deleteForm">
                <div class="decorform2">
                    <h4 class="decorform3">User Account</h4>
                    <div id="box">
                        <table class="table-striped table-bordered table-striped" style="width:100%" >
                        	<thead>
                            	<tr>
                					<col class='col-sm-1' />
                					<col class='col-sm-2' />
                					<col class='col-sm-3' />
                					<col class='col-sm-3' />
                					<col class='col-sm-2' />
                					<col class='col-sm-1' />
                					<th class='text-center'>User ID</th>
                					<th class='text-center'>Username</th>
                					<th class='text-center'>Firstname</th>
                					<th class='text-center'>Lastname</th>
                					<th class='text-center'>Date Created</th>
                					<th class='text-center'></th>
                				</tr>
                             </thead>
                             <!--loop pull here-->
                            <?php foreach ($users as $users):?>
                                <tr>
                                    <td class='text-center'><?php echo $users['User']['id']?></td>
                                    <td class='text-center' ><?php echo $users['User']['username']?></td>
                                    <td class='text-center' ><?php echo $users['User']['firstname']?></td>
                                    <td class='text-center'><?php echo $users['User']['lastname']?></td><!--pull by id-->
                                    <td class='text-center' ><?php echo $users['User']['created']?></td>
                                    <td class='text-center'><?php echo $this->Html->link('Block', array('controller' => 'admins','action'=> 'block',$users['User']['id']),
                                            array( 'class' => 'btn btn-danger'))?></td>
                                </tr>
                            <?php endforeach;?>
                        </table>

                    </div>
                </div>
        </form>

    </div>
    <!--end play field in cake-->
  </div>
</div>
<!-- end layout in cake-->