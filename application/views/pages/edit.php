<center><h2><?= $title; ?></h2></center>
<hr>
<br>
<!-- <form method="post" action="<//?php echo base_url() . "Pages/add_product"; ?>"> FORM METHOD POST NATIVE--> 
<div class="container">
<?= validation_errors(); ?>
</div>

<div class="container">
<?php if($this->session->flashdata('product_updated')) : ?>
            <?= '<p class="alert alert-success">'.$this->session->flashdata('product_updated').'</p>' ?>
<?php endif; ?>
</div>

<div class="container-sm light">

<?= form_open('edit/'.$p_id); ?>


    <div class="row">
        
        <div class="col-md-5">
            <input class="form-control" type="file" id="formFile">
        </div>
        
        <div class="col-6 col-md-1"></div>

        <input type="hidden" name="product_id" value="<?= $p_id; ?>">

        <div class="col-6 col-md-6">
            
            <input type="text" name="product_name" value="<?= $product_name; ?>" class="form-control" placeholder="Product Name"><br>
            <input type="text" name="price" value="<?= $price; ?>" class="form-control" placeholder="Price"><br>
            <input type="text" name="quantity" value="<?= $quantity; ?>" class="form-control" placeholder="Quantity"><br>
            <input type="text" name="qr_code" value="<?= $qr_code; ?>" class="form-control" placeholder="QR Code"><br>

            <button type="submit" name="editProduct" class="btn btn-primary btn-md btn-size">Update</button>
            <a class="btn btn-secondary btn-md btn-size" href="<?= base_url(); ?>list" role="button">Back</a>
            <!-- <button type="button" class='btn btn-danger btn-md' data-toggle='modal' data-target='#exampleModal'><i class="bi bi-trash"></i></button> -->
                
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