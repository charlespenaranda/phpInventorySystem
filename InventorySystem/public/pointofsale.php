<link rel="stylesheet" href="./css/main.css">
<style>
      .flat-button {
    width:100%;
    background-color: #3498db;
    border: none;
    color: #fff;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 0px;
  }
</style>
<div class="col-md-12">
<h1>Point of Sale</h1>
<hr/>
<div class="col-md-8 form-group">
<input type="text" class="col-md-8 form-control" id="src">
</div>
<div class="col-md-8 form-group">
<table class="styled-table" id="tbldetails">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Min Quantity</th>
            <th>Price</th>
            <th>Selling Price</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
<div class="col-md-4 form-group">
    <table class="styled-table" id="tblitems" style="height:365px;">
    <thead>
        <tr>
            <th>Cart</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
    </table>
 
    <div style="background-color:#ebeef0;padding: 5px">
    <label for="usr">Total</label>
    <button type="button" class="flat-button">Check out</button>
    </div>

</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">   
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body col-md-12">
          <div class="col-md-6 form-group">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          </div>
          <div class="col-md-6 form-group">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          <input type="text" class="form-control" id="src">
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>

table();

function table(){

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            var result = this.responseText;
            var rows = result.split('&');

            for(x=0;x<rows.length-1;x++){
                var cols = rows[x].split('_');

                $('#tbldetails > tbody').append('<tr id="tr">'+
                '<td>'+cols[1]+'</td>'+
                '<td>'+cols[2]+'</td>'+
                '<td>'+cols[3]+'</td>'+
                '<td>'+cols[4]+'</td>'+
                '<td>'+cols[5]+'</td>'+
                '<td>'+cols[6]+'</td>'+
                '<td>'+cols[7]+'</td>'+
                '</tr>');

            }

    }
};
xmlhttp.open("GET", "./php/inventory.php", true);
xmlhttp.send();

}

$("#src").keyup(function(e) {
    var code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) {

      $('#myModal').modal({
        show: 'true'
      }); 

    }


});

</script>