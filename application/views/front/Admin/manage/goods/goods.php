<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> Daftar Barang</h2>
            <div class="box-icon">
                <a href="<?php echo base_url("Goods/formGoods/add");?>" class="btn btn-round btn-default"><i class="glyphicon glyphicon-plus"></i></a>
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
                            
                            <tr id="<?php echo $goods->id; ?>">
                                <td><?php echo $goods->name; ?></td>
                                <td><?php echo $goods->supplier; ?></td>
                                <td><?php echo $goods->category; ?></td>
                                <td><?php echo $goods->qty; ?></td>
                                <td><?php echo 'Rp'.$goods->purchase_price; ?></td>
                                <td><?php echo 'Rp'.$goods->selling_price; ?></td>
                                <td>
                                    <button class="btn-action" data-tooltip title="Detail">
                                          <a href="<?php echo base_url("Goods/formGoods/detail/". $goods->id);?>" class='action-list glyphicon glyphicon-eye-open'></a>
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
            <p>Are you sure. !!!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-deleteGoods" data-dismiss="modal" >Delete</button>
        </div>
      </div>
      
    </div>
</div>
  

<script type="text/javascript">
   $(document).ready(function() {

        var idGoods;

        $(document).on("click", "#btn-delete", function () {
            
            idGoods = $(this).data('id');
            localStorage.setItem("idGoods", idGoods);

            $(".modal-body #bookId").val( idGoods );

            $( ".btn-deleteGoods" ).attr( "data-id", idGoods );

            $('#modalConfirm').modal('show');

        });

        $(document).on("click", ".btn-deleteGoods", function () {

             var id = localStorage.getItem("idGoods");

             if (id != '') {
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/BSInventory-web/Goods/deleteGoods',
                    data: { id: id }
                }).done(function() {
                    $('#'+id).remove();
                }).fail(function() {
                    alert( "error" );
                });
             }else{

             }

        });
    });
</script>   