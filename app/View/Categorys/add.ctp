<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 27/4/2558
 * Time: 10:29
 */?>
<!-- user search in cake-->
<div class="container text-right">
    <div class="pull-left" style="padding-left:13em">
        <h1 class="deepshadow">Quiz Game</h1></div>
    <table class="pull-right">
        <tr>
            <td> <!--   rank in cake-->
                <button class="btn btn-default" style="margin-top:3.5em;margin-right:1em"><img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/crown_gold.png" />Ranking</button></td>
            <td><!--   search in cake-->
                <form class="navbar-form " role="search" style="margin-top:4em;margin-right:1em">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" required="required">
                    </div>
                    <button type="submit" class="btn btn-default"><img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-20.png" />
                    </button>
                </form></td>
        </tr>
    </table>
</div><!-- end user search in cake-->



    <div class="row" style="margin-top:2em">

        <!-- admin icon in cake-->
        <div class="col-sm-2" style="margin-top:1em">
            <div class="container-fluid text-center">

                <button type="button" class="circular_profile btn btn-danger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="badge " style="margin-top:7em;margin-left:5em">+</span></button>
                <div style="margin-top:1em"><span class="label label-info">Sumetee Kerdduaythong</span></div>
                <div class="collapse " id="collapseExample">
                    <button type="button" class="circular_add btn btn-danger" data-placement="right" data-toggle="tooltip" data-original-title="Add Quiz"></button>
                    <button type="button" class="circular_add_cate btn btn-danger" data-placement="right" data-toggle="tooltip" data-original-title="Add Categories"></button>
                    <button type="button" class="circular_manage_quiz btn btn-danger" data-placement="right" data-toggle="tooltip" data-original-title="Manage Quiz"></button>
                    <button type="button" class="circular_manage_account btn btn-danger" data-placement="right" data-toggle="tooltip" data-original-title="Manage Account"></button>
                    <button type="button" class="circular_logout btn-danger" data-placement="right" data-toggle="tooltip" data-original-title="Log Out"></button>
                </div>
            </div>
        </div><!--end  admin icon in cake-->
        <!-- admin info field in cake-->
        <div class="col-sm-10" >
            <div class="container-fluid showcontent_nofixes">
                <div class="col-sm-12 text-center"><h2>Add Categories</h2></div>

                    <?php echo $this->Form->create('Category',array(
                        'enctype' => 'multipart/form-data',
                        'url' => [
                            'controller' => 'categorys',
                            'action' => 'add'
                        ],
                        'class' =>'form-horizontal ',


                    )); ?>
                <div class="form-group text-left">
                    <?php echo$this->Form->label('Deck.name', 'Categories', array('class'=>'col-sm-4 control-label'));?>
                    <div class="col-sm-5" >
                        <?php echo $this->Form->input('name', [
                            'label' => false,
                            'div' => false,
                            'type' => 'text',
                            'required',
                            'placeholder' => 'category name',
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

            </div>

        </div><!--end admin info field in cake-->
    </div>