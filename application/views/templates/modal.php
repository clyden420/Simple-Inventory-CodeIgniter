
<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
        <button type="button" class="btn-close closemodal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body text-center">

        <?= form_open('delete'); ?>

          <input type="hidden" name="delete_id" id="delete_id">

          <p>Are you sure you want to delete this product?</p>
          <b>Product no.&nbsp;<input class="text-center" type="text" name="name" id="name" disabled></b>
          

      </div>
      <div class="modal-footer">
        <div class="btn-group"></div>
            <button type="button" class="btn btn-secondary closemodal" data-dismiss="modal">Close</button>
            <button type="submit" name="delete_product" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
</div>

