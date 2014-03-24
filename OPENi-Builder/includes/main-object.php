
    <?php
        require_once('db-connect.php');
        $json_decoded_object = json_decode($cb->get("object_place"),true);
        require_once('json-object.php');
        $json_object = new JsonObject($json_decoded_object);

    	$main_path = 'main/';
        $title = ucfirst($json_object->returnJsonField('name')).' Object';
    	require_once($main_path.'navbar.php');
        require_once($main_path.'title.php');    ?>

    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#info" data-toggle="tab">Information</a></li>
        <li><a href="#methods" data-toggle="tab">Methods</a></li>
        <li><a href="#fields" data-toggle="tab">Fields</a></li>
        <!-- <li><a href="#use" data-toggle="tab">Use</a></li>
        <li><a href="#change" data-toggle="tab">Change</a></li> -->
    </ul>

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="info">
            <?php require_once($main_path.'object-info.php'); ?>
        </div>
        <div class="tab-pane fade" id="methods">
            <?php require_once($main_path.'object-methods.php'); ?>
        </div>
        <div class="tab-pane fade" id="fields">
            <?php require_once($main_path.'object-fields.php'); ?>
        </div>
      <!-- <div class="tab-pane fade" id="use">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
      </div>
      <div class="tab-pane fade" id="change">
        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
      </div> -->
    </div>

    