<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
						<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-hdd"></i><span> Pengelolaan</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li ><a href="<?php echo base_url('Staff');?>" class="glyphicon glyphicon-user"> aa</a></li>
                                <li><a href="#" class="glyphicon glyphicon-list-alt"> Permintaan</a></li>
                                <li><a href="<?php echo base_url('Report');?>" class="glyphicon glyphicon-book"> Laporan</a></li>
                            </ul>
                        </li>
						<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-wrench"></i><span> Pangaturan</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li ><a href="#" class="glyphicon glyphicon-user"> Karyawan</a></li>
                                <li><a href="#" class="glyphicon glyphicon-list-alt"> Permintaan</a></li>
                            </ul>
                        </li>
						<li class="accordion"><a class="ajax-link" href="<?php echo base_url('Report');?>"><i class="glyphicon glyphicon-book"></i><span> Laporan</span></a>
							<ul class="nav nav-pills nav-stacked">
                                <li ><a href="<?php echo base_url('Report/attendance');?>" class="glyphicon glyphicon-user"> Absensi</a></li>
                                <li><a href="#" class="glyphicon glyphicon-list-alt"> Permintaan</a></li>
                            </ul>
                        </li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
				<ul class="breadcrumb">
					<li>
						<a href="#"><?php echo $modules;?></a>
					</li>
					<li>
						<a href="#"><?php echo $page ;?></a>
					</li>
				</ul>
			</div>