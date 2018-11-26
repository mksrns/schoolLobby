<style>
   .modal-dialog {
       position:fixed;
        bottom:0px;
        right:0px;
        margin:0px;
        width:390px
    }

</style>

<template>
<div>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId" style="width:250px; position:fixed; bottom:0; right:0; border-radius: 15px 15px 0 0;">
    Contact Us
  </button>
  
  <!-- Modal -->
  <div class="modal fade" style="" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Fill Your Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="example@gmail.com">
              
            </div>
            <div class="form-group">
              <label for="">Message</label>
              <textarea class="form-control" name="" id="" rows="3"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
 $('#exampleModal').on('show.bs.modal', event => {
      var button = $(event.relatedTarget);
      var modal = $(this);
      // Use above variables to manipulate the DOM
      
    });

export default {
    
}
</script>
