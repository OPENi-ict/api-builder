
    <?php
    	$main_path = 'main/';
        $title = 'Configure fields of method GetPhoto';
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
<fieldset>
                <legend>Give a name for the new method</legend>
                        <input type="text" name="newMethodName" /><br />
						<br/><br/><br/>
                        
                        
        </fieldset>
		<fieldset>
	    <legend>Initial method fields</legend>
		<strong>id &nbsp; from.user.id&nbsp; from.user.name&nbsp; from.user.address.street&nbsp; url&nbsp; name</strong>
		<br/><br/><br/>
		
		<legend>New method fields</legend>
		<input type="text" name="fields[]" value="id" /><br />
		<input type="text" name="fields[]" value="from.user.id"/><br />
		<input type="text" name="fields[]" value="from.user.name"/><br />
		<input type="text" name="fields[]" value="from.user.address.street"/><br />
		<input type="text" name="fields[]" value="url"/><br />
		<input type="text" name="fields[]" value="name"/><br /><br/>
		<div class="text-center">
		<input type="button" value="Add field">
		</div>

		</fieldset>
		</div>
		<div class="form-group"> 
		
	 	 </div>

	 <div class="form-group"> 
				<div class="text-right">
				<h4>
				<br/>
				<a href="#"><b>View sample response &nbsp;&nbsp;&nbsp;</b></a></li>
				<a href="#"><b>Save &nbsp;&nbsp;&nbsp;</b></a></li>
				<a href="#"><b>Discard</b></a></li>
				</h4>
				</div>

        </div>
		</div>
        <div class="col-lg-2">
            <h3>General information</h3>
            <p><strong>Documentation: </strong><a>link</a></p>
            <p><strong>Created: </strong>12/12/1013</p>
			<p><strong>Creator: </strong>romdim</p>
            <p><strong>up votes: </strong>30</p>
			<p><strong>down votes: </strong>3</p>
        </div>
    </div>
<br/>

