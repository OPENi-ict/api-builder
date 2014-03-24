
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2><u><?php $json_object->echoJsonField('name', true); ?> Info</u></h2>
                    </div>
                    <div class="col-lg-2">
                        <br />
                        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> UpVote</button>
                    </div>
                    <div class="col-lg-2">
                        <br />
                        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-down"></span> DownVote</button>
                    </div>
                </div>
            </div>
            <p><?php $json_object->echoJsonField('description'); ?></p>

            <h3>Basic Information</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <ul class="list-unstyled">
                            <li>Type</li>
                            <li>Used in</li>
                            <li>Up Votes</li>
                            <li>Down Votes</li>
                            <li>Created</li>
                            <li>Privacy</li>
                        </ul>
                    </div>
                    <div class="col-lg-1">
                        <ul class="list-unstyled">
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                            <li>:</li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <ul class="list-unstyled">
                            <li><?php $json_object->echoJsonField('type'); ?></li>
                            <li><?php $json_object->echoJsonField('used_in'); ?> OPENi applications (<a href="#">list</a>)</li>
                            <li><?php $json_object->echoJsonField('up_votes'); ?></li>
                            <li><?php $json_object->echoJsonField('down_votes'); ?></li>
                            <li><?php $json_object->echoJsonField('created_at'); ?></li>
                            <li><?php $json_object_privacy = new JsonObject($json_object->returnJsonField('privacy'));
                                      $json_object_privacy->echoJsonField('description'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <h3>Supporting Developers</h3>

            <?php

            foreach($json_object->returnJsonField('developers') as $dev)
                echo "<p><a href='".$dev["uri"]."'>".$dev["name"]."</a> (".$dev["role"].")</p>";
            ?>