<main class="container">
    

    <div class="row">
    <h2> Login </h2>
    </div>
    <div class="row">
    <h3>Use this portal to view your proofs.</h3>
    </div>
    <div class="row">

        <div class="col-lg-12">

    
            <div class="form-group input-group">
            
                <div class="input-group-prepend">
                
                    <input id="email" name="email" type="text" class="form-control" placeholder="Email"/>

                </div>
            </div>


            <div class="form-group input-group">
                <div class="input-group-prepend">
                    
                    <input id="password" name="Password" type="text" class="form-control" placeholder="Password"/>

                </div>
            </div>


            <div class="form-group input-group">
                <div class="form-group">
                
                    <a href="javascript:void(0)" onclick="submitAjax()" class="btn btn-primary btn-block">Login</a>
                
                </div>
            </div>
        </div>
    </div>

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