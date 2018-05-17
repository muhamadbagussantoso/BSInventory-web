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
                            <th>Price </th>
                            <th>Price 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($goodsData as $goods):?>
						    <tr>
								<td><?php echo $goods->name; ?></td>
								<td><?php echo $goods->supplier; ?></td>
								<td><?php echo $goods->category; ?></td>
								<td><?php echo $goods->qty; ?></td>
								<td><?php echo 'Rp'.$goods->price; ?></td>
								<td><?php echo 'Rp'.$goods->price1; ?></td>
			            	</tr>
						<?php  endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
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
                <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>