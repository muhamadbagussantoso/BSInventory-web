
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
                <form role="form">
                        <div class="form-group col-md-6">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="supplier">Nama Supplier</label>
                            <input type="text" class="form-control" id="supplier" placeholder="Enter Supplier">
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
                    </form>
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
		   
  		  allFields = $( [] ).add( name );
  
		  $( "#btn-add" ).button().click(function() {

		  	alert('asdsa');
					$.ajax({
						 type: "POST",
						 url: "<?php echo site_url('index.php/goods/saveGood') ?>",
						 data:allFields,
						 success : function() {
						 	alert(allFields);		
						 }				
				    });
		  });

	});
</script>