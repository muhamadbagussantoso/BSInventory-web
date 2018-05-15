
<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('assets/charisma/index.html') ?>" > <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('assets/charisma/#') ?>" > Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('assets/charisma/login.html') ?>" > Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="<?php echo base_url('assets/charisma/#') ?>" > <i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="<?php echo base_url('assets/charisma/#') ?>" > <i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="<?php echo base_url('assets/charisma/#') ?>" > <i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="<?php echo base_url('assets/charisma/#') ?>" > <i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="<?php echo base_url('assets/charisma/#') ?>" > <i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="<?php echo base_url('assets/charisma/#') ?>" > <i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="<?php echo base_url('assets/charisma/#') ?>" > <i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="<?php echo base_url('assets/charisma/#') ?>" > <i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="<?php echo base_url('assets/charisma/#') ?>" > <i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="<?php echo base_url('assets/charisma/#') ?>" > <i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="<?php echo base_url('assets/charisma/#') ?>" > data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url('assets/charisma/#') ?>" > Action</a></li>
                        <li><a href="<?php echo base_url('assets/charisma/#') ?>" > Another action</a></li>
                        <li><a href="<?php echo base_url('assets/charisma/#') ?>" > Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('assets/charisma/#') ?>" > Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('assets/charisma/#') ?>" > One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/index.html') ?>" > <i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/ui.html') ?>" > <i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/form.html') ?>" > <i
                                    class="glyphicon glyphicon-edit"></i><span> Forms</span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/chart.html') ?>" > <i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/typography.html')?>" > <i class="glyphicon glyphicon-font"></i><span> Typography</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/gallery.html') ?>" > <i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                        </li>
                        <li class="nav-header hidden-md">Sample Section</li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/table.html') ?>"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a></li>
                        <li class="accordion">
                            <a href="<?php echo base_url('assets/charisma/#') ?>" > <i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url('assets/charisma/#') ?>" > Child Menu 1</a></li>
                                <li><a href="<?php echo base_url('assets/charisma/#') ?>" > Child Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/calendar.html') ?>"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/grid.html') ?>"><i
                                    class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
                        <li><a href="<?php echo base_url('assets/charisma/tour.html') ?>"><i class="glyphicon glyphicon-globe"></i><span> Tour</span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url('assets/charisma/icon.html') ?>"><i
                                    class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
                        <li><a href="<?php echo base_url('assets/charisma/error.html') ?>"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a>
                        </li>
                        <li><a href="<?php echo base_url('assets/charisma/login.html') ?>"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
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

                <p>You need to have <a href="<?php echo base_url('assets/charisma/http://en.wikipedia.org/wiki/JavaScript') ?>" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>
