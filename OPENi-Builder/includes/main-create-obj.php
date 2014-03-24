
    <?php
    	$main_path = 'main/';
        $title = 'Fill in the information below to create your object';
    	require_once($main_path.'navbar.php');
    ?>

    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <?php
                require_once($main_path.'title.php');
            ?>
            <form class="form text-center" role="form">
                <div class="form-group">
                    <p>Please select a <u>name</u> for the new object <input type="text" placeholder="New Object" class="form-control-static"></p>
                </div>
                <div class="form-group">
                    I want my object to inherit from the following object:
                    <select class="form-control-inline">
                        <option>None</option>
                        <option>Account</option>
                        <option>Place</option>
                        <option>Event</option>
                        <option>Photo</option>
                    </select>
                </div>
                <div class="form-group">
                    <p>Please provide some <u>information</u> about the proposed usage of the new object</p>
                    <textarea class="form-control" rows="5"></textarea>
                </div>

                <div class="row">
                    <div class="col-lg-2">
                        <h3><u>Privacy</u></h3>
                    </div>
                    <div class="col-lg-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="Privacy" id="Private" value="Private" checked>
                                private - nobody except you can view/use the object
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="Privacy" id="Restricted" value="Restricted">
                                public - view/use only - every OPENi developer can view and use the object, but cannot edit it
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="Privacy" id="Public" value="Public">
                                public - all access granted - every OPENi developer can view/use/edit the object
                            </label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-lg-4">
            <h3>Other objects that inherit from Photo</h3>
            <p><strong>Insect_Photo</strong></p>
            <p>used in: 5 services</p>
            <p>up votes: 35</p>
            <p>down votes: 2</p>
        </div>
      </div>
    </div>