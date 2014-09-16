
    <?php
    	$main_path = 'main/';
        $title = 'Select fields for the new object';
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
				<div class="col-lg-4"></div>
				<form class="form text-left">
<fieldset>
                <legend>Inherited Fields</legend>
                        <input type="checkbox" name="object_field" value="field 1" /> <span title="Required for methods GetPhoto, GetVideo">profile</span><br />
                        <input type="checkbox" name="object_field" value="field 2" /> <span title="Required for methods GetPhoto, GetVideo">from</span><br />
                        <input type="checkbox" name="object_field" value="field 3" /> <span title="Required for methods GetPhoto, GetVideo">service</span><br />
						<input type="checkbox" name="object_field" value="field 4" /> <span title="Required for methods GetPhoto, GetVideo">tags</span><br />
						<input type="checkbox" name="object_field" value="field 5" /> <span title="Required for methods GetPhoto, GetVideo">url</span><br />
						<input type="checkbox" name="object_field" value="field 6" /> <span title="Required for methods GetPhoto, GetVideo">object_type</span><br />
						<input type="checkbox" name="object_field" value="field 7" /> <span title="Required for methods GetPhoto, GetVideo">height</span><br />
                        <input type="checkbox" name="object_field" value="field 4" /> <span title="Required for methods GetPhoto, GetVideo">width</span><br />
						<input type="checkbox" name="object_field" value="field 5" /> <span title="Required for methods GetPhoto, GetVideo">location</span><br />
						<input type="checkbox" name="object_field" value="field 6" /> <span title="Required for methods GetPhoto, GetVideo">context</span><br />
						<input type="checkbox" name="object_field" value="field 7" /> <span title="Required for methods GetPhoto, GetVideo">time</span><br />
                        <input type="checkbox" name="object_field" value="field 6" /> <span title="Required for methods GetPhoto, GetVideo">id</span><br />
						<input type="checkbox" name="object_field" value="field 7" /> <span title="Required for methods GetPhoto, GetVideo">resource_uri</span><br />
                        
        </fieldset>
		</div>
		<div class="form-group"> 
		<fieldset>
		<legend>New Fields</legend>
     <div id="dynamicInput">
	 <div class="container">
      <div class="row">
	  
        <div class="col-lg-5">
		<div class="form text-right">
          <h5><b>Name</b></h5>
		  </div>
		  </div>
		  <div class="col-lg-4">
		  <div class="form text-center">
		  <h5><b>Type</b></h5>
		  </div>
	 </div>
	 </div>
	 </div>
	 <div class="container">
      <div class="row">
	  
        <div class="col-lg-6">
		<div class="form text-right">
          <input type="text" name="myInputs[]">
		  </div>
		  </div>
		  <div class="col-lg-6">
		  <div class="form text-left">
		  <select class='form-control-inline'>                       <option>-</option><option>SocialAccount</option><option>SocialToken</option><option>account</option><option>application</option><option>article</option><option>audio</option><option>badge</option><option>card</option><option>checkin</option><option>contact</option><option>context</option><option>device</option><option>event</option><option>file</option><option>game</option><option>Insect_Photo</option><option>measurement</option><option>note</option><option>nutrition</option><option>order</option><option>photo</option><option>place</option><option>product</option><option>question</option><option>registeredapplication</option><option>route</option><option>service</option><option>shop</option><option>sleep</option><option>socialapp</option><option>status</option><option>user</option><option>video</option><option>workout</option>
</select>
     </div>
	 </div>
	 </div>
	 </div>
	 </div>
     <input type="button" value="Add field" onClick="addInput('dynamicInput');">
	 </fieldset>
	 	 </div>

	 <div class="form-group"> 
				<div class="text-right">
				<h4>
				
				<a href="create-object-2"><b>Continue &raquo;</b></a></li>
				</h4>
				</div>

        </div>
		</div>
        <div class="col-lg-2">
            <h3>Similar Objects</h3>
            <p><strong>Insect_Photo</strong></p>
            <p>used in: 5 services</p>
            <p>up votes: 35</p>
            <p>down votes: 1</p>
            <p><strong>NewPhoto</strong></p>
            <p>used in: 12 services</p>
            <p>up votes: 30</p>
            <p>down votes: 2</p>
            <p><strong>Piczz</strong></p>
            <p>used in: 1 services</p>
            <p>up votes: 3</p>
            <p>down votes: 2</p>
        </div>
    </div>
<br/>

