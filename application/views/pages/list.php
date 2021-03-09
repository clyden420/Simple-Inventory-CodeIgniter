<?php if($this->session->logged_in == true){ ?>


<div class="container">
<div class="table-responsive-sm">
    <div class="row">
        <div class="col-8"><h2><?= $title; ?><div class="float-end"></h2></div>
        <div class="col-4"><input class="form-control" id="myInput" type="text" placeholder="Search.."></div>
       
    </div>
    <hr>

    <div class="row">
        
        <div class="col-6 col-md-2">
            <a class="btn btn-success btn-lg" href="add" role="button">Add Product</a>
            
        </div>

        <div class="col-md-10">
        
        <?php if($this->session->flashdata('product_added')) : ?>
            <?= '<p class="alert alert-success">'.$this->session->flashdata('product_added').'</p>' ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('product_deleted')) : ?>
            <?= '<p class="alert alert-success">'.$this->session->flashdata('product_deleted').'</p>' ?>
        <?php endif; ?>
            
            <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                <th scope="col"></th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">QR Code</th>
                <th colspan="2" scope="col"></th>
                </tr>
            </thead>
            <tbody id='myTable'>

            <?php
                if($fetch_data->num_rows() > 0){

                    foreach($fetch_data->result() as $data){
                        $product_id = $data->product_id;
                        $db_image = $data->image;
                        $db_product_name = $data->product_name;
                        $db_price = $data->price;
                        $db_quantity = $data->quantity;
                        $db_qr_code = $data->qr_code;

                        echo "
                            <tr>
                                <td scope='row'>$product_id</td>
                                <td>$db_product_name</td>
                                <td>$db_price</td>
                                <td>$db_quantity</td>
                                <td>$db_qr_code</td>
                                <td width='30px'>
                                    <a class='btn btn-primary btn-sm' href='edit/$product_id' role='button'>Details</a>
                                </td>
                                <td width='30px'>
                                    <button class='btn btn-danger btn-sm deletebtn'><i class='bi bi-trash'></i></button>
                                </td>
                                
                            </tr>

                            ";
                    }
                }
            ?>
                            <tr id='noRecordTR' class='notfound'>
                                <td colspan='7'>No record(s) found</td>
                            </tr>
            </tbody>    
            </table>
        </div>


    </div>
</div>

<?php } else {
    echo "Access Denied!";
} ?>
