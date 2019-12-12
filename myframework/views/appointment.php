<main class="container">
 <!-- Form Request -->
<h5>

Leave us your information and we will contact you to set up an appointment.

</h4>
<form action="/appointment/schedule" method="post">
  <div class="form-group input-group">
                
    <input name="firstname" type="text" class="form-control" placeholder="First Name"/>

  </div>
  <div class="form-group input-group">
                
    <input name="email" type="email" class="form-control" placeholder="Email Address"/>

  </div>
  <div class="form-group input-group">
    
      <input name="phone" type="tel" class="form-control" placeholder="Phone Number"/>
  </div>    
  <div class="form-group input-group">     

    <label for="textable" class="form-control">It is okay to text this number.</label>
    <input type="checkbox" id="textable" name="textable" class="form-control"/>
    
  </div>
  <div class="form-group">
    <select class="form-control" id="session" name="session" >
      <option value=" " disabled selected hidden>Photo Session Type</option>
      <option value="engagement">Engagement</option>
      <option value="wedding">Wedding</option>
      <option value="head">Head Shot</option>
      <option value="senior">Senior Picture</option>
      <option value="other">Other</option>
    </select>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="location" id="location1" value="studio">
    <label class="form-check-label" for="location1">In Studio</label>
  </div>
  <div class="form-check form-check-inline">

    <input class="form-check-input" type="radio" name="location" id="location2" value="onsite">
    <label class="form-check-label" for="location2">On Site</label>
  
  </div>
  <div class="form-check form-check-inline">

    <input class="form-check-input" type="radio" name="location" id="location3" value="undecided">
    <label class="form-check-label" for="location3">Undecided</label>

  </div>
  <div class="form-group input-group">
      <!-- Form Submit Button -->
    <input type="submit" class="btn btn-primary btn-block" value="Submit"/>
      
  </div>
  <p>  <!-- Popover -->
    We always respect your <span style="color: lightblue" tabindex="0" data-toggle="popover" data-trigger="focus" title="Privacy" data-content="We will never share your information with anyone.">privacy</span>.
  </p>  <!-- /Popover -->


</form>

<!-- Modal for Errors -->
<div class="modal" tabindex="-1" role="dialog" id="errorModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><?echo @$_GET["msg"];?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</main>

<? if(@$_GET["msg"]){ ?>
    <script type="text/javascript"> 
        document.addEventListener("DOMContentLoaded", function(){
            $('#errorModal').modal('show')
    })
    </script>
<? } ?>