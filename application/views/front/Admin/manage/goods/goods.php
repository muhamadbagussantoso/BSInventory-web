
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
                <table id="goodsData" class="display" style="width:100%">

                    <thead>
                            <tr>
                                <th></th>
                                <th>name</th>
                                <th>Supplier</th>
                                <th>Category</th>
                                <th>Qty</th>
                                <th>Qty</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>name</th>
                                <th>Supplier</th>
                                <th>Category</th>
                                <th>Qty</th>
                                <th>Qty</th>
                            </tr>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

   $(document).ready(function() {



         var table = $('#goodsData').DataTable( {
             paging:false,
searching:false,
                "ajax": "<?php echo site_url('Goods/getDetailGoods') ?>",
                "columns": [
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ''
                    },
                    { "data": "name" },
                    { "data": "supplier" },
                    { "data": "category" },
                    { "data": "qty" },
                    { "data": "purchase_price" },
                ],
                "order": [[1, 'asc']]
            } );
             
            // Add event listener for opening and closing details
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
                        '<td>'+d.supplier+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extra info:</td>'+
                        '<td>'+d.purchase_price+'</td>'+
                    '</tr>'+
                '</table>';
            }
        

          $( "#btn-actionn" ).button().click(function() {

                  data= [];
                  for(i=0; i < allFields.length;i++){
                    key = allFields[i].id;
                    value = allFields[i].value;
                    data.push(value);
                  }

                  $.ajax({
                   type: 'POST',
                   url: site_url('/Goods/insertGood'),
                   data: { ids: data },
                   success: function(data) { 
                       console.log (data);  
                       $( ".alert-success " ).removeClass( "hide" );
                       setTimeout(function(){ $(".alert-success").fadeToggle("slow", "linear")}, 2000);

                     }
                 });

              
          });
    });
</script>