
    <?php
    	$main_path = 'main/';
        $title = 'Object Name';
    	require_once($main_path.'navbar.php');
        require_once($main_path.'title.php');
        require_once('db-connect.php');
        $json_path = "C:\Users\Romanos-Dimokritos\Desktop\generalInfo.json";
        $json_string = file_get_contents($json_path);
        $json_object = json_decode($cb->get("object_account"),true);
    ?>

    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#info" data-toggle="tab">Information</a></li>
        <li><a href="#methods" data-toggle="tab">Methods</a></li>
        <li><a href="#fields" data-toggle="tab">Fields</a></li>
        <li><a href="#use" data-toggle="tab">Use</a></li>
        <li><a href="#change" data-toggle="tab">Change</a></li>
    </ul>

    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="info">
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2><u><?php echo strtoupper($json_object['name']); ?></u></h2>
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
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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
                            <li><?php echo $json_object['type']; ?></li>
                            <li><?php echo $json_object['used_in']; ?> OPENi applications (<a href="#">list</a>)</li>
                            <li><?php echo $json_object['up_votes']; ?></li>
                            <li><?php echo $json_object['down_votes']; ?></li>
                            <li><?php echo $json_object['created_at']; ?></li>
                            <li><?php echo $json_object['privacy']['description']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <h3>Supporting Developers</h3>

            <?php foreach($json_object['developers'] as $dev)
                echo "<p><a href='".$dev["uri"]."'>".$dev["name"]."</a> (".$dev["role"].")</p>";
            ?>

      </div>
      <div class="tab-pane fade" id="methods">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
      </div>
      <div class="tab-pane fade" id="fields">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
      </div>
      <div class="tab-pane fade" id="use">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
      </div>
      <div class="tab-pane fade" id="change">
        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
      </div>
    </div>

    