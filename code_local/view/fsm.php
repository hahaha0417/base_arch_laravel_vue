<?php

namespace hahaha\view;

use hahaha\view\layout as view_layout;
use hahaha\view\block_sidebar as view_block_sidebar;
use hahaha\parameter as parameter;
use hahaha\view\table\base\index as base_index;


/*

use hahaha\view\fsm as fsm;
use hahaha\view\fsm as view_fsm;

*/

class fsm extends base_index
{
    use \hahaha\instance;

    // ----------------------------------------- 
    //  base
    // ----------------------------------------- 
    public function view()
    {
        view_layout::instance()->view(chart::instance());

        
    }

    public function content()
    {
        $view_block_sidebar = view_block_sidebar::instance()->initial();
        return;
        ?>
        <div class="row">
        
            <div class="col-3">
                <?php $view_block_sidebar->view(); ?>
            </div>
            <div class="col-9">
                <!-- ---------------------------------------------------- -->
                <div class="row">
                    
                </div>
                <div class="row">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>



                <!-- ---------------------------------------------------- -->
            </div>
        
        </div>

        <?php
    }

    // ----------------------------------------- 
    // 
    // ----------------------------------------- 
    public function view_begin() 
    {
    }
    // ----------------------------------------- 
    // 
    // ----------------------------------------- 
    public function view_design() 
    {
    }
    // ----------------------------------------- 
    // 
    // ----------------------------------------- 
    public function view_end() 
    {
    }
    // ----------------------------------------- 
    // 
    // ----------------------------------------- 
}