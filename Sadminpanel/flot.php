<!DOCTYPE html>
<html>

 <?php

    include 'layout/headp.php';

 ?>

<body>

    <div id="wrapper">

        <?php

        include 'layout/header.php';

     ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Flot</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Line Chart Example
                        </div>
                
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pie Chart Example
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-bar-chart"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Flot Charts Usage
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <p>Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks, and interactive features. In SB Admin, we are using the most recent version of Flot along with a few plugins to enhance the user experience. The Flot plugins being used are the tooltip plugin for hoverable tooltips, and the resize plugin for fully responsive charts. The documentation for Flot Charts is available on their website, <a target="_blank" href="http://www.flotcharts.org/">http://www.flotcharts.org/</a>.</p>
                            <a target="_blank" class="btn btn-default btn-lg btn-block" href="http://www.flotcharts.org/">View Flot Charts Documentation</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="design/js/jquery-1.10.2.js"></script>
    <script src="design/js/bootstrap.min.js"></script>
    <script src="design/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Flot -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="design/js/plugins/flot/jquery.flot.js"></script>
    <script src="design/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="design/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="design/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="design/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Flot - Use for reference -->
    <script src="design/js/demo/flot-demo.js"></script>

</body>

</html>
