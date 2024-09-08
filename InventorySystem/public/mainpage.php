
<!DOCTYPE HTML>
<html>



<head>
	<title>Main Page</title>
	<meta charset="UTF-8 (Without BOM)">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./CSS/table.css">



	<style>
		*{
			font-family: 'Century Gothic';

		}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

}

.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 95px;
  height: 95px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;

}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}

		.tile {

			width: 100%;
			display: grid;
			place-items: center;
			align-items: center;

		}

		.tile-div-header {
		
		width: 100%;
		height: 100%;
		display: flex;
		place-items: center;
		align-items: center;
		gap: 10px;

		}
		.tile-1 {

			padding: 2%;
			padding-left: 1%;
			height: 60%;
			width: 100%;
			background-color: white;
			border-radius:4px;
			display: grid;
			place-items: center;
			align-items: center;

		}
		.tile-2 {
			padding:1%;
			text-overflow: ellipsis; 
			padding-left: 1%;
			height: 100%;
			width: 98%;
			background-color: white;
			border-radius:4px;
			display: grid;
			place-items: center;
			align-items: center;

		}

 .loader-div {

display: flex;
place-items: center;
align-items: center;
gap:  35%;

width: 100%;
height: 12%;

}		

.menu-grid {

display: grid;
width: 100%;
height: 100%;
gap:  10px;

place-items: center;
align-items: center;

}


 .details-div {

display: grid;
width: 100%;
height: 50%;

}

.size-div {

display: grid;
width: 100%;
height: 100%;

place-items: center;
align-items: center;

}


.div-header {

padding-left: 1%;
display: flex;
place-items: center;
align-items: center;

}
.size-div .size-table {

  width: 90%;
  height: 90%;
  overflow-y:hidden;

}

/* width */
::-webkit-scrollbar {
width: 8px;
height: 8px;
}

/* Track */
::-webkit-scrollbar-track {
box-shadow: inset 0 0 1px grey; 
border-radius: 5px;
}

/* Handle */
::-webkit-scrollbar-thumb {
background: #7b7b7b;; 
border-radius: 5px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
background:#7b7b7b;
}

table {
  
  width: 100%;
  border-spacing: 0;
  padding: 0;
  table-layout:fixed;
  border-collapse: collapse;
  border: 1px solid rgb(200,200,200);
  font-size: 12px;

}


td, th {
  border: 1px solid rgb(190,190,190);
  padding: 10px 10px;
  overflow: hidden; 
  text-overflow: ellipsis; 
  word-wrap: break-word;
  
}

th {
  background-color: rgb(235,235,235);
}

td {
  text-align: center;
}

tr:nth-child(even) td {
  background-color: rgb(250,250,250);
}

tr:nth-child(odd) td {
  background-color: rgb(245,245,245);
}

caption {
  padding: 10px;
}

.margin-R{
  margin-right: 20%;

}
	</style>

</head>

<body style="background:#e7e7e7;">

		 <div class="modal fade" id="ModalLoading" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		 <div class="modal-dialog modal-dialog-centered" role="document" >
		    <div class="modal-content" style="background-color: white;">
		      <div class="modal-body">

		      	<div class="loader-div">
		          <div class="loader"></div>
		          <div style="height: 100%;text-align:center;">Loading data Please Wait...</div>
		        </div>
						
		   </div>
		   </div>
		</div>
		</div>

<div className="div-header">
    <h2>CATS</h2>
</div>

<div class="menu-grid">

<div class="tile-div-header">
<div class="tile-1"  style ="background-color: #DBDBDB;"> Manual Testing
	<h1 id="avail">Testing<h1>
</div>
<div class="tile-1" style ="background-color: #DBDBDB;"> Rework, 2nd Sub, Rap
	<h1  id="perform">Rework<h1>
</div>
<div class="tile-1" style ="background-color: #DBDBDB;">Lot Making, Packing
	<h1 id="quality">Packing<h1>
</div>
<div class="tile-1" style ="background-color: #DBDBDB;">Card Linking
	<h1 id="quality">Linking<h1>
</div>
</div>

<div class="tile-div-header">
	<div class="tile-1" style ="background-color: #DBDBDB;">Serial Inqury, Lot Inquiry, Masterbox Inquiry
	<h1 id="quality">Inquiry<h1>
	</div>
		<div class="tile-1" style ="background-color: #DBDBDB;">Model, ModelRoute, Station
	<h1 id="quality">Maintenance<h1>
	</div>
</div>

<div class="tile-div-header">
	<div class="tile-1" style ="background-color: #DBDBDB;">Shipment Report, Daily report
	<h1 id="quality">Reports<h1>
	</div>
</div>

</div>
</div>

	
	<script src="assets/material.min.js"></script>
	<script src="./assets/jquery-3.2.1.slim.min.js"></script>
	<script src="assets/bootstrap.min.js"></script>
  <script type="text/javascript">



	</script>

</body>
</html>
