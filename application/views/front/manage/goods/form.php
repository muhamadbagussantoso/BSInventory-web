<div class="row">
    <div class="box col-md-12">
       <span class="alert alert-success hide">data berhasil di simpan </span>
    </div>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> <?=$modules;?></h2>
            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
            </div>
            </div>
           

            <div class="box-content">
                    <?php foreach ($goodsData as $goods):?>
                        <div class="form-group col-md-6">
                          <input type="text" hidden id="id" name="id" placeholder="Enter name" value="<?=$goods->id;?>">
                          
                          <label for="name">Nama Barang</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama barang " value="<?=$goods->name;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Nama Supplier</label>
                          <input type="text" class="form-control" id="supplier" name="supplier" placeholder="Masukan nama supplier " value="<?=$goods->supplier;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Nama Category</label>
                          <input type="numeric" class="form-control" id="category" name="category" placeholder="Masukan nama kategori " value="<?=$goods->category;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Type</label>
                          <input type="text" class="form-control" id="type" name="type" placeholder="Masukan tipe " value="<?= $goods->type;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Qty</label>
                          <input type="text" class="form-control" id="qty" name="qty" placeholder="Masukan jumlah " value="<?= $goods->qty;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Unit</label>
                          <input type="text" class="form-control" id="unit" name="unit" placeholder="Masukan jumlah " value="<?=$goods->unit;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Purchase Price</label>
                          <input type="text" class="form-control" id="purchase_price" name="purchase_price" placeholder="Masukan Harga Beli " value="<?=$goods->purchase_price;?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="name">Selling Price</label>
                          <input type="text" class="form-control" id="selling_price" name="selling_price" placeholder="Masukan Harga Jual " value="<?=$goods->selling_price;?>">
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

      }else if(action == 'add'){

        $( "#btn-edit" ).hide();

      }else{
        $( ".form-control" ).attr( "disabled","disabled");
        $( "#btn-add" ).attr( "disabled","disabled");
      }

      $( "#btn-edit" ).button().click(function() {
        $( ".form-control" ).removeAttr( "disabled","disabled");
        $( "#btn-edit" ).attr( "disabled","disabled");
        $( "#btn-add" ).removeAttr( "disabled","disabled");
      });
  
      $( "#btn-add" ).button().click(function() {

          var id = $( "#id" ),
          name = $( "#name" ),
          supplier = $( "#supplier" ),
          category = $( "#category" ),
          type = $( "#type" ),
          qty = $( "#qty" ),
          unit = $( "#unit" ),
          purchase_price = $( "#purchase_price" ),
          selling_price = $( "#selling_price" ),
       
          allFields = $( [] ).add(id).add(name).add(supplier).add(category).add(type).add(qty).add(unit).add(purchase_price).add(selling_price);

          if (allFields.length > 0){

              data= [];

              for(i=0; i < allFields.length;i++){
                key = allFields[i].id;
                value = allFields[i].value;
                data.push(value);
              }

              console.log(data);
              $.ajax({
               type: 'POST',
               url: 'http://localhost/BSInventory-web/Goods/insertGoods',
               data: { ids: data },
               success: function(data) { 
                   console.log (data);  
                   $( ".alert-success " ).removeClass( "hide" );
                   setTimeout(function(){ $(".alert-success").fadeToggle("slow", "linear")}, 2000);
                   $( ".form-control" ).attr( "disabled","disabled");
                   $( "#btn-add" ).attr( "disabled","disabled");
                   $( "#btn-edit" ).removeAttr( "disabled","disabled");

                 }
             });

          }else{
              console.log('data tidak boleh kosong');
          }          
      });
  });
</script>