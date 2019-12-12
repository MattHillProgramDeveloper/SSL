<main class="container">
<form>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="telphone">Phone Number</label>
    <input type="tel" class="form-control" id="telphone">
  </div>
  
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submissionModal">
    Submit
  </button>
  <!-- /Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="submissionModal" tabindex="-1" role="dialog" aria-labelledby="submissionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="submissionModalLabel">Confirm Contact Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
          Please confirm your contact information.
          </p>
          <p>  <!-- Popover -->
          We always respect your <span style="color: lightblue" tabindex="0" data-toggle="popover" data-trigger="focus" title="Privacy" data-content="We will never share your information with anyone.">privacy</span>.
          </p>  <!-- /Popover -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Modal -->



</form>

  <!-- Progress Bar -->
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
  </div>
  <!-- /Progress Bar -->
  
  <p>
  Needs some JS written to use a progress bar for amount of form completion.
  </p>

  

</main>