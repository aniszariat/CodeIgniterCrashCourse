<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
<script>
  $(document).ready(
    function () {
      $('.confirm-delete').click(
        function(e){
          e.preventDefault();
          confDialog = confirm("Are you sure ?")
          if (confDialog) {
            var id = $(this).val()
            // alert(id)
            $.ajax({
              type:"DELETE" ,
              url:"employee/confirmDelete/"+id,
              success:function (response) {
                alert("successfully deleted employee")
                window.location.reload()
              }
            }
            )
          }
        }
      )
    }
  )
</script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>