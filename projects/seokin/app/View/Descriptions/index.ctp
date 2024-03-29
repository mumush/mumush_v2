<div class="allDescriptions">

    <div class="row">

        <?php echo $this->Session->flash(); ?>

    </div>
    
    <div class="row searchRow">

        <!--START SEARCH FORM-->
        <?php echo $this->Form->create( false , array('action' => 'searchDesc') ); ?>

            <div class="col-lg-3">

            <?php
                
                echo $this->Form->input( 'searchterm', array('id' => 'searchField', 'class' => 'form-control', 'label' => false, 
                    'placeholder' => 'Search By Title or Job Number') );

            ?>

            </div>

        <?php echo $this->Form->end(); ?>
        <!--END SEARCH FORM-->

        <!--START REFINE FORM-->
        <?php echo $this->Form->create( false , array('action' => 'refine') ); ?>

            <div class="col-lg-2 col-lg-offset-6">

            <?php

                $searchOptions = array( 1 => 'Most Recent', 2 => 'By Department', 3 => 'By User', 4 => 'By Title');
                
                echo $this->Form->input(
                    'searchOption',
                    array('options' => $searchOptions, 'empty' => 'Select Filter', 'id' => 'refineSelect', 'class' => 'form-control', 'label' => false, 'onchange' => 'this.form.submit()')
                );

            ?>

            </div>

        <?php echo $this->Form->end(); ?>
        <!--END REFINE FORM-->

        <?php
            echo $this->Html->link('<i class="fa fa-plus"></i>', 
                array('controller' => 'descriptions', 'action' => 'add'), 
                array('escape' => false, 'id' => 'newDescription', 'class' => 'pull-right btn btn-info', 
                'data-original-title' => 'New Description', 'data-placement' => 'bottom', 'data-toggle' => 'tooltip') );
        ?>

    </div>



<h1 class="sectionHeading"><i class="fa fa-list"></i> Pending Descriptions</h1>

<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Department</th>
            <th>Wage</th>
            <th>User</th>
            <?php 
                if( $accessLevel == 1 ) {

                    echo '<th>Approve/Deny</th>';
                } 
            ?>
            <th>Edit</th>
        </tr>

        <?php foreach ($descriptions as $desc):

            if( $desc['Description']['status_id'] == 1 ) { ?>

                <tr>
                    <td><?php echo $desc['Description']['title']; ?></td>
                    <td><?php echo $desc['Department']['name']; ?></td>
                    <td><?php echo $desc['Description']['wage']; ?></td>
                    <td><?php echo $desc['User']['first_name'] . ' ' . $desc['User']['last_name']; ?></td>
                    <?php

                        if( $accessLevel == 1 ) {

                            echo '<td>';

                            echo $this->Html->link('Approve', array('controller' => 'descriptions', 'action' => 'assign', 
                                $desc['Description']['id']), array('class' => 'btn btn-success') ) 
                            . ' ' .
                            $this->Html->link('Deny', array('controller' => 'descriptions', 'action' => 'deny', $desc['Description']['id']), array('class' => 'btn btn-danger') );

                            echo '</td>';
                        }

                    ?>
                    <td>
                        <?php echo $this->Html->link('<i class="fa fa-pencil-square-o"></i> Edit', 
                        array('controller' => 'descriptions', 'action' => 'edit', $desc['Description']['id']), array('escape' => false, 'class' => 'btn btn-info') ); ?>
                    </td>

                </tr>

                <?php

            }

        endforeach; ?>

    </table>
</div>


<h1 class="sectionHeading"><i class="fa fa-times"></i> Denied Descriptions</h1>

<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Department</th>
            <th>Wage</th>
            <th>User</th>
            <th>Edit</th>
        </tr>

        <?php foreach ($descriptions as $desc):

            if( $desc['Description']['status_id'] == 3 ) { ?>

                <tr>
                    <td><?php echo $desc['Description']['title']; ?></td>
                    <td><?php echo $desc['Department']['name']; ?></td>
                    <td><?php echo $desc['Description']['wage']; ?></td>
                    <td><?php echo $desc['User']['first_name'] . ' ' . $desc['User']['last_name']; ?></td>
                    <td>
                        <?php echo $this->Html->link('<i class="fa fa-pencil-square-o"></i> Edit', 
                        array('controller' => 'descriptions', 'action' => 'edit', $desc['Description']['id']), array('escape' => false, 'class' => 'btn btn-info') ); ?>
                    </td>

                </tr>

                <?php

            }

        endforeach; ?>

    </table>
</div>


<h1 class="sectionHeading"><i class="fa fa-check"></i> Approved Descriptions</h1>

<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Department</th>
            <th>Job Number</th>
            <th>User</th>
            <th>Posted</th>
            <th>Edit</th>
        </tr>

        <?php foreach ($descriptions as $desc):

            if( $desc['Description']['status_id'] == 2 ) { ?>

                <tr>
                    <td><?php echo $desc['Description']['title']; ?></td>
                    <td><?php echo $desc['Department']['name']; ?></td>
                    <td><?php echo $desc['Description']['number']; ?></td>
                    <td><?php echo $desc['User']['first_name'] . ' ' . $desc['User']['last_name']; ?></td>
                    <td style="text-align: center;">
                        <?php 

                        if( $desc['Description']['is_posted'] == 1 ) {
                            echo '<i class="fa fa-check fa-2x"></i>';
                        }
                        else {
                            echo '<i class="fa fa-times fa-2x"></i>';
                        }

                        ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link('<i class="fa fa-pencil-square-o"></i> Edit', 
                        array('controller' => 'descriptions', 'action' => 'edit', $desc['Description']['id']), array('escape' => false, 'class' => 'btn btn-info') ); ?>
                    </td>

                </tr>

                <?php

            }

        endforeach; ?>

    </table>
</div>

</div>



