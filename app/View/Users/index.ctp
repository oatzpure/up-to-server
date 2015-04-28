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
    <!-- user info field in cake-->
    <div class="col-sm-10" >
        <div class="container-fluid showcontent_nofixes">
            <div class="col-sm-12 text-center"><h2>Deck List</h2></div>
            <div class="col-sm-12 row">
                <div class="form-group text-left">

                    <?php
                    $options = array();
                    $options[0] = 'All';
                    foreach ($categorys as $categorys):
                        $options[$categorys['Category']['id']] = $categorys['Category']['name'];
                    endforeach;?>

                    <?php echo$this->Form->label('Deck.name', 'Categories', array('class'=>'col-sm-2','style' => 'margin-top:1em'));?>
                    <div class="col-sm-3" >
                        <?php echo $this->Form->input('select', array(
                                'label' => false,
                                'options' => $options
                            ,
                                'class' => 'form-control checkbox inline',
                                'onchange' => 'this.form.submit()',
                                'id' => 'select1'
                            )
                        ); ?>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>


            <!--this part pull deck to show all by 6 newest deck-->
            <div class="deckshow container-fluid">
                <div class="row" style="margin-left: 3em">
                    <!-- this part is forn of deck that show-->
                    <?php foreach ($decks as $decks):?>
                    <div class="col-sm-3 badgestyle1 marginlr text-center">
                        <h4><strong><?php echo $decks['Deck']['name']?></strong></h4><!-- deck name-->
                        <div><img src="<?php echo "img/cards/".$decks['Card'][0]['back'] ?>" class="img-circle img-thumbnail img-responsive" style="width:150px;height:150px" /></div>
<!--                        <div class="col-sm-10">--><?php //echo $decks['Deck']['description']?><!--</div>-->
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                                <?php echo $this->Html->link('View', array('controller' => 'decks','action'=> 'index',$decks['Deck']['id']),
                                    array( 'class' => 'btn btn-info'))?>
                            </div>
                            <div class="col-sm-5">
                                <button class="btn btn-primary">Play</button>
                            </div>
                            <div class="col-sm-1"></div>

                        </div>
                        <br>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div><!--end admin info field in cake-->


    <script>
        clearform();
        function clearform() {
            document.getElementById("search1").value = "";

        }
    </script>