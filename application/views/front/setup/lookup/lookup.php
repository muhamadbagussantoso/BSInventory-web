<div class="row">
    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i>Lookup Value</h2>
            <div class="box-icon">
                <a href="<?php echo base_url("Goods/formGoods/add");?>" class="btn btn-round btn-default"><i class="glyphicon glyphicon-plus"></i></a>
                <a href="#" class="btn btn-minimize btn-round btn-default"><i class="glyphicon glyphicon-chevron-up"></i></a>
            </div>
            </div>
            <div class="box-content">
                <table id="tableData" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Position</th>
                            <th>Office</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Position</th>
                            <th>Office</th>
                        </tr>
                    </tfoot>
                </table
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function() {

       $('#tableData').DataTable( {
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
        "zeroRecords": "Tidak ada data yang tersedia",
        "loadingRecords": "Please wait - loading...",
        "infoEmpty": "Tidak ada data yang tersedia",
        "emptyTable": "Tidak ada data yang tersedia",
        "paginate": {
            "next": "Selanjutnnya",
            "previous": "Sebelumnnya",
            "first": "Halaman pertama"
            }
        },
    "order": [[1, 'asc']]
} );

    });
</script>   