<script type="text/javascript">

// Auto closing Alert

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1000);


function confirm_delete(url){
   	$("#confirm-delete-link").attr("href", url);
    $("#confirm-delete-modal").modal("show");
}

function confirm_complete(url){
   	$("#confirm-complete-link").attr("href", url);
    $("#confirm-complete-modal").modal("show");
}
</script>


<div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
       Are you sure you want to delete?
      </div>
      <div class="modal-footer">
          <a id="confirm-delete-link" href="javascript: void(0);" class="btn btn-danger">Delete</a>
          <a data-dismiss="modal" href="javascript: void(0);" class="btn btn-info">Cancel</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirm-complete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
       Are you sure?
      </div>
      <div class="modal-footer">
          <a id="confirm-complete-link" href="javascript: void(0);" class="btn btn-danger">Completed</a>
          <a data-dismiss="modal" href="javascript: void(0);" class="btn btn-info">Cancel</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>