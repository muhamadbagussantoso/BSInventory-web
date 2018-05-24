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
                                          <a href="<?php echo base_url("Goods/formGoods/". $goods->id."/detail");?>" class='action-list glyphicon glyphicon-eye-open'></a>
                                    </button>
                                    <button class="btn-action" data-tooltip title="Edit">
                                         <a href="<?php echo site_url("Goods/formGoods/". $goods->id."/edit"); ?>" class='action-list glyphicon glyphicon-edit'></a>
                                    </button>
                                    <button class="btn-action" data-tooltip title="Remove">
                                          <a  id="btn-delete" class='action-list glyphicon glyphicon-trash' data-toggle="modal"  data-id="<?php echo $goods->id; ?>" href="#modalConfirm" ></a>
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

  <!-- Modal Delete -->
  <div class="modal fade" id="modalConfirm" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Goods</h4>
        </div>
        <div class="modal-body">
            <p>some content</p>
            <input type="text" name="bookId" id="bookId" value=""/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-deleteGoods"  >Delete</button>
        </div>
      </div>
      
    </div>
  </div>
  

<script type="text/javascript">

   $(document).ready(function() {

        $(document).on("click", "#btn-delete", function () {
             var myBookId = $(this).data('id');
             $(".modal-body #bookId").val( myBookId );

             $( ".btn-deleteGoods" ).attr( "data-id", myBookId );

            $('#modalConfirm').modal('show');
        });

        $(document).on("click", ".btn-deleteGoods", function () {
             var id = $(this).data('id');

             if (id != '') {

                $('#modalConfirm').modal('hide');
                  $.ajax({
                   type: 'POST',
                   url: 'http://localhost/BSInventory-web/Goods/deleteGoods',
                   data: { id: id },
                   success: function(data) { 
                       console.log (data);  
                       $( ".alert-success " ).removeClass( "hide" );
                       setTimeout(function(){ $(".alert-success").fadeToggle("slow", "linear")}, 2000);

                     }
                 });
             }else{

             }

        });

    
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