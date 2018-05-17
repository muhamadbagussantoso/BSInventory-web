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
								<td><?php echo 'Rp'.$goods->price; ?></td>
								<td><?php echo 'Rp'.$goods->price1; ?></td>
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