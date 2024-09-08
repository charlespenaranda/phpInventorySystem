<link rel="stylesheet" href="./css/main.css">
<div class="col-md-12">
<h1>Inventory</h1>
<hr/>
    <div class="col-md-12 form-group text-right">
    <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
    </div>
<div class="col-md-12">
<table class="styled-table" id="tbldetails">
    <thead>
        <tr>
            <th  scope="col">No</th>
            <th>Product ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Min Quantity</th>
            <th>Price</th>
            <th>Selling Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
</div>

<script>

table();

function table(){

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            var result = this.responseText;
            var rows = result.split('&');

            tblcount = 1;

            for(x=0;x<rows.length-1;x++){
                var cols = rows[x].split('_');

                $('#tbldetails > tbody').append('<tr id="tr">'+
                '<td class="nr"><input type="hidden" id = "number'+tblcount+'[]"  name="number[]" value="'+ tblcount +'">' + tblcount + '</td>' +
                '<td class="nr"><input type="hidden" id = "product_id'+tblcount+'[]"  name="product_id[]" value="'+cols[1]+'">'+cols[1]+ '</td>' + 
                '<td class="nr">'+cols[2]+'</td>'+
                '<td class="nr">'+cols[3]+'</td>'+
                '<td class="nr">'+cols[4]+'</td>'+
                '<td class="nr">'+cols[5]+'</td>'+
                '<td class="nr">'+cols[6]+'</td>'+
                '<td class="nr">'+cols[7]+'</td>'+
                '<td class="nr"> <button type="button" class="Edit" style="background-color:#009879; border-radius: 5px; border: 0px; padding: 8px;"><i class="fas fa-pencil-alt"></i> Edit</button></td>'+
                '</tr>');

                tblcount++;

            }
        
            $('#tbldetails').DataTable({
                "pageLength": 10,
                "searching": true,
                "ordering": false
            });

    }
};
xmlhttp.open("GET", "./php/inventory.php", true);
xmlhttp.send();

}

$(document).on("click", ".Edit", function(){

        var $row = $(this).closest("tr");   
        var $text = $row.find(".nr").text();

        var splits = $text.split(".");


        var mothercode = $('input[name="number[]"]').map(function () {
        return this.value; }).get();

        var _product = $('input[name="product_id[]"]').map(function () {
        return this.value; }).get();

        includePhp("./public/menus/modifprd.php");



});


</script>