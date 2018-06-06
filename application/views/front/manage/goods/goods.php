<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> Daftar Barang</h2>
            <div class="box-icon">
                <a href="<?php echo base_url("Goods/formGoods/add");?>" class="btn btn-round btn-default" data-toggle="tooltip" title="Tambah Barang"><i class="glyphicon glyphicon-plus"></i></a>
                <a href="#" class="btn refresh btn-round btn-default" data-toggle="tooltip" title="Refresh"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" class="btn btn-minimize btn-round btn-default" data-toggle="tooltip" title=""><i class="glyphicon glyphicon-chevron-up"></i></a>
            </div>
            </div>
            <div class="box-content">
                <table id="tableData" class="display table table-bordered" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Supplier</th>
                            <th>Category</th>
                            <th>Qty</th>
                            <th>Purchase Price </th>
                            <th>Selling Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                     <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Supplier</th>
                            <th>Category</th>
                            <th>Qty</th>
                            <th>Purchase Price </th>
                            <th>Selling Price</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
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


        function format ( d ) {
            id = d.id;
            controllerDetail  = 'Goods/formGoods/detail/'+id;
            href = '<?php echo base_url();?>'+controllerDetail;

            return  "<div class='col-md-10'>a</div>"+
                    "<div class='col-md-2 btn-action'>"+
                    '<a href='+href+' class="action-list glyphicon glyphicon-eye-open"></a>'+
                    '<a  id="btn-delete" class="action-list glyphicon glyphicon-trash" data-toggle="modal" data-id="'+id+'" href="#modalConfirm" ></a>'+
                    "</div>";
        }   
        

        dt = $('#tableData').DataTable( {
            "ajax": "<?php echo site_url("Goods/getDetailGoods");?>",
            "columns": [
                { "data": "name" },
                { "data": "supplier" },
                { "data": "category" },
                { "data": "qty" },
                { "data": "purchase_price" },
                { "data": "selling_price" },
                {
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           {"data" : "id"},
                    "defaultContent": ""

                },
            ],
            "language": {     
                "lengthMenu": "Tampikan <select>"+
                "<option value=5>5</option>"+
                "<option value=10>10</option>"+
                "<option value=20>20</option>"+
                "<option value=30>30</option>"+
                "<option value=40>40</option>"+
                "<option value=50>50</option>"+
                "<option value=100>100</option>"+
                "<option value=-1>--Semua--</option>"+
                "</select> Data",
                "search": "Cari:",
                "info": "Tampilan halaman _PAGE_ dari _PAGES_",
                "loadingRecords": "Please wait - loading...",
                "infoFiltered": " - Penyaringan dari _MAX_ data",
                "info": "Tampilan halaman _PAGE_ dari _PAGES_",
                "zeroRecords": "Data tidak tersedia",
                "loadingRecords": "Please wait - loading...",
                "infoEmpty": "Data tidak tersedia",
                "emptyTable": "Data tidak tersedia",
                "paginate": {
                    "next": "Selanjutnnya",
                    "previous": "Sebelumnnya",
                    "first": "Halaman pertama"
                    }
                },
            "order": [[1, 'asc']]
        } );

        // On each draw, loop over the `detailRows` array and show any child rows
        dt.on( 'draw', function () {
            $.each( detailRows, function ( i, id ) {
                console.log(id)
                // $('#'+id+' td.details-control').trigger( 'click' );
            } );
        } );
        

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
                    url: '<?php echo site_url("Goods/deleteGoods");?>',
                    data: { id: id }
                }).done(function() {
                    dt.ajax.reload();
                }).fail(function() {
                    alert( "error" );
                });
             }else{

             }

        });

        $(document).on("click",".refresh",function(){
            dt.ajax.reload();
        })
        
         var detailRows = [];
 
        $('#tableData tbody').on( 'click', 'tr td.details-control', function () {

            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );
     
            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );

                row.child.hide();
     
                // Remove from the 'open' array
                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );
                row.child( format( row.data() ) ).show();
     
                // Add to the 'open' array
                if ( idx === -1 ) {
                    detailRows.push( tr.attr('id') );
                }
            }
        } );

        $('[data-toggle="tooltip"]').tooltip();  
     
    });
</script>   