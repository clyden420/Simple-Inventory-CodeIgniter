    </div>
    
    <div class="footer"><p><hr>Inventory System &copy 2020 </p></div>
    
        <script src="<?= base_url(); ?>__assets/js/jquery-3.5.1.min.js"></script>
        <script src="<?= base_url(); ?>__assets/js/bootstrap.bundle.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


                

         <script>

            $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
                $("#noRecordTR").toggle(!$("#myTable tr:visible").length);
            });
            });

        </script> 

        <script>

        $(document).ready(function() {
            $(document).on("click", ".deletebtn", function() {
            $('#deletemodal').modal('show');


                $tr = $(this).closest('tr');

                var data = $tr.children('td').map(function(){
                    return $(this).text();

                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);
                $('#name').val(data[0]);
            
            });
        });
                
        </script>

        <script>

        $(document).ready(function() {
            $(document).on("click", ".closemodal", function() {
            $('#deletemodal').modal('hide');
            
            });
        });

        </script>


      

</body>
</html>