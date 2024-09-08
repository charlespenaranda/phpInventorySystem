<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/main.css">
<link rel="stylesheet" href="./css/styledtable.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
<script src="./assets/bootstrap.min.js"></script>
</head>

<body>

<div id="mySidenav" class="sidenav">
</div>

<div id="main">
  <span style="font-size:20px;cursor:pointer" id="open" onclick="openNav()">&#9776;</span>
  <span style="font-size:20px;cursor:pointer" id="close" onclick="closeNav()" hidden>&#9776;</span>
  <div id="myDiv">

  


  </div>
</div>
<script src="./assets/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/jquery.dataTables.min.css">
<script src="./assets/jquery.dataTables.min.js"></script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("open").hidden = true;
  document.getElementById("close").hidden = false;
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("open").hidden = false;
  document.getElementById("close").hidden = true;
}

window.onload = function(){

  var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {

      var result = this.responseText;
			var rows = result.split('&'); 

      const data = [];

      for (x=1;x<rows.length-1;x++){
        var cols = rows[x].split('_');
        data.push([cols[0],cols[2]+'.php']);
      }
      console.log(data);
      const list = document.getElementById("mySidenav");

      data.forEach(item => {
      const a = document.createElement("a");
      a.textContent = item[0];
      a.dataset.file = item[1];
      list.appendChild(a);

      });

    }
};
xmlhttp.open("GET", "./php/menu.php", true);
xmlhttp.send();

}
function includePhp(file) {

  $.ajax({

    url:file,
    success: function(data){

      $('#myDiv').html(data);

    },
    error: function() {

      console.log('Error');

    }
  });
  
}

$('#mySidenav').on('click','a', function(event) {

  event.preventDefault();
  var file = $(this).data('file');
  includePhp("./public/" + file);
})


</script>
   
</body>
</html> 
