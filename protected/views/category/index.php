<?php
/* @var $this CategoryController */

$this->breadcrumbs = array(
    _('Category'),
);
?>
<h1><?php echo _("Category Manager"); ?></h1>


<!-- full width -->
<div class="widget">
    <div class="header">
        <div class="dataTables_filter" id="DataTables_Table_filter"><label><input type="text" placeholder="Search" aria-controls="DataTables_Table_0"></label></div>
        
    </div><!-- End header -->	
    <div class="content" >

        <table class="display static " id="static">
            <thead>
                <tr>
                    <th width="35" ><input type="checkbox" id="checkAll1"  class="checkAll"/></th>
                    <th width="352" align="left">Name</th>
                    <th width="174" >Type</th>
                    <th width="246" >Show ID</th>
                    <th width="199" >Management</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td  width="35" ><input type="checkbox" name="checkbox[]" class="chkbox"  id="check1"/></td>
                    <td  align="left">A ring</td>
                    <td >ring A</td>
                    <td >RD115599</td>
                    <td >
                        <span class="tip" >
                            <a  title="Edit" >
                                <img src="images/icon/icon_edit.png" >
                            </a>
                        </span> 
                        <span class="tip" >
                            <a id="1" class="Delete"  name="Band ring" title="Delete"  >
                                <img src="images/icon/icon_delete.png" >
                            </a>
                        </span> 
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="pagination" >
        <div class="dataTables_info" id="DataTables_Table_info">Showing 1 to 10 of 57 entries</div>
        <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_paginate">
            <a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_0_first">First</a>
            <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_0_previous">Previous</a>
            <span><a tabindex="0" class="paginate_active">1</a>
                <a tabindex="0" class="paginate_button">2</a>
                <a tabindex="0" class="paginate_button">3</a>
                <a tabindex="0" class="paginate_button">4</a>
                <a tabindex="0" class="paginate_button">5</a>
            </span>
            <a tabindex="0" class="next paginate_button" id="DataTables_Table_0_next">Next</a>
            <a tabindex="0" class="last paginate_button" id="DataTables_Table_0_last">Last</a>
        </div>
        </div>
    </div>
</div>