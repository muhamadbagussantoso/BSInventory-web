<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> Daftar Barang</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
            </div>
            </div>
            <div class="box-content">
                <table id="goodsData" class="table table-striped table-bordered bootstrap-datatable datatable responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Supplier</th>
                            <th>Category</th>
                            <th>Qty</th>
                            <th>Purchase Price </th>
                            <th>Selling Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($goodsData as $goods):?>
						    <tr>
								<td><?php echo $goods->name; ?></td>
								<td><?php echo $goods->supplier; ?></td>
								<td><?php echo $goods->category; ?></td>
								<td><?php echo $goods->qty; ?></td>
								<td><?php echo 'Rp'.$goods->purchase_price; ?></td>
								<td><?php echo 'Rp'.$goods->selling_price; ?></td>
								<td>
                                    <button class="btn-action" data-tooltip title="Detail">
                                          <a href="<?php echo base_url('Goods/detail');?>" class='action-list glyphicon glyphicon-eye-open'></a>
                                    </button>
                                    <button class="btn-action" data-tooltip title="Edit">
                                         <a href="" class='action-list glyphicon glyphicon-edit'></a>
                                    </button>
                                    <button class="btn-action" data-tooltip title="Remove">
                                          <a href="" class='action-list glyphicon glyphicon-trash'></a>
                                    </button>
                                      
                                </td>
			            	</tr>
						<?php  endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

   $(document).ready(function() {
       $('#goodsData tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );
     
            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );


       function format ( d ) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                '<tr>'+
                    '<td>Full name:</td>'+
                    '<td>'+d.name+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Extension number:</td>'+
                    '<td>'+d.extn+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Extra info:</td>'+
                    '<td>And any further details here (images etc)...</td>'+
                '</tr>'+
            '</table>';
        }

    });
</script>