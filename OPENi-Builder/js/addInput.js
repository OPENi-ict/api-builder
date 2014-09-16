var counter = 1;
var limit = 3;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = " <div class='container'><div class='row'><div class='col-lg-6'><div class='form text-right'><input type='text' name='myInputs[]'></div></div><div class='col-lg-6'><div class='form text-left'><select class='form-control-inline'><option>-</option><option>SocialAccount</option><option>SocialToken</option><option>account</option><option>application</option><option>article</option><option>audio</option><option>badge</option><option>card</option><option>checkin</option><option>contact</option><option>context</option><option>device</option><option>event</option><option>file</option><option>game</option><option>Insect_Photo</option><option>measurement</option><option>note</option><option>nutrition</option><option>order</option><option>photo</option><option>place</option><option>product</option><option>question</option><option>registeredapplication</option><option>route</option><option>service</option><option>shop</option><option>sleep</option><option>socialapp</option><option>status</option><option>user</option><option>video</option><option>workout</option></select></div></div></div></div>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}