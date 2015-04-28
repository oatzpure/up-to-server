<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 14:41
 */?>
<div class="container" >

	<!-- admin in cake-->

    <!-- admin search in cake-->
    <div class="container text-right">
    	<div class="pull-left" style="padding-left:13em">
    	  <h1 class="deepshadow">Quiz Game</h1></div>
    		<table class="pull-right">
            	<tr>
        			<td> <!--   rank in cake-->
       				<td><!--   search in cake-->
    				</td>
        		</tr>
        	</table>
    </div><!-- end admin search in cake-->

    <div class="row" style="margin-top:2em">

         <!-- admin icon in cake-->
    	<div class="col-sm-2" style="margin-top:1em">
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
        </div><!--end  admin icon in cake-->
        <!-- admin info field in cake-->
        <div class="col-sm-10" >
        	<div class="container-fluid showcontent">
            </div>
        </div><!--end admin info field in cake-->
    </div>

</div>