<style>
tr, td{
  padding:2px
}
.form-control{
  border: 1px solid #7BC113;
  padding:1px;
  font-size: 12px;
}

</style>

<table class='table'>

<?php  for($i=1; $i<=$data['dimension']; $i++){   ?>

  <tr>
    <td><input type='text' class='form-control' placeholder="Dimension" ></td>
    <td><input type='text' class='form-control' placeholder="Price" ></td>
    <td><input type='text' class='form-control' placeholder="Quantity" ></td>
  </tr>

<?php }   ?>


  <tr>
    <td></td>
    <td></td>
    <td><button class='btn btn-danger pull-right' style="font-size:12px">Save</button></td>
  </tr>

</table>
