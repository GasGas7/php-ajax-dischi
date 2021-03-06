        <!-- Site_Main -->
        <main>
            <!-- Albums -->
            <div class="Playlist d-flex justify-content-center flex-wrap">
                <!-- Single_Album -->
                <?php
                foreach ($database as $carta) { ?>

                        <div class="d-flex m-1 flex-column col-2 justify-content-around text-center carta">

                            <!-- Album_image -->
                            <div class="contenitore_copertina">
                                <img class="img-fluid align-self-center copertina" src="<?php echo $carta["poster"];?>" alt="">
                            </div> 
                            <!-- /Album_image -->

                            <!-- Album_title -->
                            <div class="titolo">
                                <h6>
                                    <?php echo $carta['title'];?>
                                </h6>
                            </div>
                            <!-- /Album_title -->

                            <!-- Album_description -->
                            <div class="author_year_p">
                                <p>
                                    <?php echo $carta['author'];?> 
                                </p>
                                <p>
                                <?php echo $carta['year'];?>
                                </p>
                            </div>
                            <!-- /Album_description -->
                        </div>
                        <!-- /Single_Album -->
                <?php     
                    }
                ?>
            </div>
            <!-- /Albums -->
        </main>
        <!-- /Site_Main -->
        </div>
        <!-- /container [No bootstrap] + callVueJS -->