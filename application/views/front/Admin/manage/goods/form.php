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
                        <div class="form-group col-md-6">
                            <label for="name">name Barang</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="supplier">name Supplier</label>
                            <input type="text" class="form-control" id="supplier" name="supplier" placeholder="Enter Supplier">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="category">Categories</label>
                            <input type="text" class="form-control" id="category" placeholder="Enter category">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qty">Qty</label>
                            <input type="text" class="form-control" id="qty" placeholder="Enter Qty">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" placeholder="Enter Price">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price1">Price1</label>
                            <input type="text" class="form-control" id="price1" placeholder="Enter Price1">
                        </div>
                        <button  class="btn btn-default" id="btn-add">Submit</button>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

   $(document).ready(function() {
       var name = $( "#name" ),
           supplier = $( "#supplier" ),
           category = $( "#category" ),
    		   qty = $( "#qty" ),
    		   price = $( "#price" ),
    		   price1 = $( "#price1" ),
		   
  		  allFields = $( [] ).add(name).add(supplier);

  
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
                   url: 'http://localhost/BSInventory-web/Goods/insertGood',
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


	});
</script>