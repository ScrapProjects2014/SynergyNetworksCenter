
                <!-- begin DASHBOARD CIRCLE TILES -->
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="admin/clients">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Clients
                                </div>
                                <div class="circle-tile-number text-faded">
                                    <?php echo count(Model_Client::find('all')); ?>
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="admin/clients" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>                   
                </div>
                <!-- end DASHBOARD CIRCLE TILES -->