<!DOCTYPE html>
<html>
<head>
  <title>Modal Upload File Progress Bar</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Modal Upload File Progress Bar</h1>
  <button id="openModalBtn">Open Modal</button>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Upload File Progress</h2>
      <input type="file" id="fileInput">
      <button id="uploadBtn">Upload</button>
      <div id="progressBar">
        <div id="progress"></div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>



<html>
<head>
  <title>Upload File Progress Bar</title>
  <style>
 .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 300px;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

#progressBar {
  width: 100%;
  height: 20px;
  border: 1px solid #ccc;
  margin-top: 10px;
}

#progress {
  width: 0%;
  height: 100%;
  background-color: #4CAF50;
}

  </style>
</head>

<script>

var modal = document.getElementById('myModal');
var closeButton = document.getElementsByClassName('close')[0];
var uploadButton = document.getElementById('uploadBtn');
var fileInput = document.getElementById('fileInput');
var progressBar = document.getElementById('progress');

openModalBtn.addEventListener('click', function() {
  modal.style.display = 'block';
});

closeButton.addEventListener('click', function() {
  modal.style.display = 'none';
});

window.addEventListener('click', function(event) {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
});

uploadButton.addEventListener('click', function() {
  // Perform file upload and progress tracking logic here
  // You can use JavaScript's File API or AJAX requests to handle the file upload and track progress
});


</script>