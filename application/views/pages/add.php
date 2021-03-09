<center><h2><?= $title; ?></h2></center>
<hr>
<br>
<!-- <form method="post" action="<//?php echo base_url() . "Pages/add_product"; ?>"> FORM METHOD POST NATIVE--> 
<div class="container">
<?= validation_errors(); ?>
</div>



<div class="container-sm light">

<?= form_open('add'); ?>

    <div class="row">
        
        <div class="col-md-5">
            <input class="form-control" type="file" id="formFile"><br>
        </div>

        <div class="col-6 col-md-1"></div>
        
        <div class=" col-md-6">

            <input type="text" name="product_name" value="<?php echo set_value('product_name'); ?>" class="form-control" placeholder="Product Name"><br>
            <input type="text" name="price" value="<?php echo set_value('price'); ?>" class="form-control" placeholder="Price"><br>
            <input type="text" name="quantity" value="<?php echo set_value('quantity'); ?>" class="form-control" placeholder="Quantity"><br>
            <input type="text" name="qr_code" value="<?php echo set_value('qr_code'); ?>" class="form-control" placeholder="QR Code"><br>
            
            <button type="submit" name="addProduct" value="<?php echo set_value('product_name'); ?>"class="btn btn-success btn-md btn-size">Add</button>
            <a class="btn btn-secondary btn-md btn-size" href="list" role="button">Cancel</a>    
        </div>



    </div>

    
</div>
<!-- </form> -->








<!--<label for="formFile" class="label-upload">Choose File</label>
<span id="file-chosen">No file chosen</span>

    <script>

        const actualBtn = document.getElementById('formFile');

        const fileChosen = document.getElementById('file-chosen');

        actualBtn.addEventListener('change', function(){
        fileChosen.textContent = this.files[0].name
        })

    </script>-->