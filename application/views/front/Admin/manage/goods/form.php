<div class="row">
    <div class="box col-md-12">
       <span class="alert alert-success hide">data berhasil di simpan </span>
    </div>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> Input Barang</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
            </div>
            </div>
           

            <div class="box-content">
                  <?php if ( $goodsData === 'NULL' ) : ?>
                      NULL
                  <?php else : ?>
                    <?php foreach ($goodsData as $goods):?>
                        <div class="form-group col-md-6">
                          <input type="text" hidden id="id" name="id" placeholder="Enter name" value="<?=$goods->id;?>">
                          
                          <label for="name">Nama Barang</label>
                          <input type="text" hidden id="name" name="name" placeholder="Enter name" value="<?=$goods->name;?>"> 
                          <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama barang " value="<?=$goods->name;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Nama Supplier</label>
                          <input type="text" class="form-control" id="name" name="supplier" placeholder="Masukan nama supplier " value="<?=$goods->supplier;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Nama Category</label>
                          <input type="text" class="form-control" id="name" name="category" placeholder="Masukan nama kategori " value="<?=$goods->supplier;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Type</label>
                          <input type="text" class="form-control" id="name" name="type" placeholder="Masukan tipe " value="<?= $goods->type;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Qty</label>
                          <input type="text" class="form-control" id="name" name="qty" placeholder="Masukan jumlah " value="<?= $goods->supplier;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Unit</label>
                          <input type="text" class="form-control" id="name" name="unit" placeholder="Masukan jumlah " value="<?=$goods->unit;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Purchase Price</label>
                          <input type="text" class="form-control" id="name" name="purchase_price" placeholder="Masukan Harga Beli " value="<?=$goods->purchase_price;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Selling Price</label>
                          <input type="text" class="form-control" id="name" name="selling_price" placeholder="Masukan Harga Jual " value="<?=$goods->selling_price;?>">
                        </div>
                    <?php  endforeach?>
                    <div class="btn-actions">
                      
                      <button class="btn btn-default" id="btn-add">
                        <i class="glyphicon glyphicon-floppy-disk icon-white"></i>
                      </button>
                      <button class="btn btn-default" id="btn-edit">
                        <i class="glyphicon glyphicon-edit icon-white"></i>
                      </button>
                    </div>
                  <?php endif ;?>

            </div>
         
        </div>
    </div>
</div>

<script type="text/javascript">

   $(document).ready(function() {


      var url = window.location.pathname;
      var urlsplit = url.split("/");
      var action = urlsplit[urlsplit.length-1];


      if (action == 'edit') {

      }else{
        console.log('detail');

        $( ".form-control" ).attr( "disabled","disabled");
        $( "#btn-add" ).attr( "disabled","disabled");
      }

      var id = $( "#id" ),
        name = $( "#name" ),
        supplier = $( "#supplier" ),
        category = $( "#category" ),
        qty = $( "#qty" ),
        price = $( "#price" ),
        price1 = $( "#price1" ),
     
        allFields = $( [] ).add(id).add(name).add(supplier);

      $( "#btn-edit" ).button().click(function() {
        $( ".form-control" ).removeAttr( "disabled","disabled");
        $( "#btn-edit" ).attr( "disabled","disabled");
        $( "#btn-add" ).removeAttr( "disabled","disabled");
      });
  
      $( "#btn-add" ).button().click(function() {
              
              if (allFields.length > 0){
                  data= [];
                  for(i=0; i < allFields.length;i++){
                    key = allFields[i].id;
                    value = allFields[i].value;
                    data.push(value);
                  }

                  $.ajax({
                   type: 'POST',
                   url: 'http://localhost/BSInventory-web/Goods/insertGoods',
                   data: { ids: data },
                   success: function(data) { 
                       console.log (data);  
                       $( ".alert-success " ).removeClass( "hide" );
                       setTimeout(function(){ $(".alert-success").fadeToggle("slow", "linear")}, 2000);

                     }
                 });

              }else{
                  console.log('data tidak boleh kosong');
              }

              
      });
  
      // $( "#btn-edit" ).button().click(function() {
              
    //           if (allFields.length > 0){
    //               data= [];
    //               for(i=0; i < allFields.length;i++){
    //                 key = allFields[i].id;
    //                 value = allFields[i].value;
    //                 data.push(value);
    //               }

    //               $.ajax({
    //                type: 'POST',
    //                url: 'http://localhost/BSInventory-web/Goods/editGoods',
    //                data: { id: data },
    //                success: function(data) { 
    //                    console.log (data);  
    //                    $( ".alert-success " ).removeClass( "hide" );
    //                    setTimeout(function(){ $(".alert-success").fadeToggle("slow", "linear")}, 2000);

    //                  }
    //              });

    //           }else{
    //               console.log('data tidak boleh kosong');
    //           }

              
      // });


  });
</script>