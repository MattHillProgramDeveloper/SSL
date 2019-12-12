<main class="container">

    <div class="row">

        <div class="col-lg-12">

            <form action="/register/registerAction" method="post">
            
                <div class="form-group input-group">
                
                    <div class="input-group-prepend">
                    
                        <span class="input-group-text">ICON</span>
                        <input name="firstname" type="text" class="form-control" placeholder="First Name"/>

                    </div>
                </div>


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        
                        <span class="input-group-text">ICON</span>
                        <input name="lastname" type="text" class="form-control" placeholder="Last Name"/>

                    </div>
                </div>


                <div class="form-group input-group">
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-primary btn-block" value="Submit"/>
                    
                    </div>
                </div>

            </form>
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