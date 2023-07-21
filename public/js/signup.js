let uploadButton = document.getElementById
("upload-button");
let chosenImage = document.getElementById
("chosen-photo");
let fileName = document.getElementById
("file-name");
uploadButton.onchange = () => {
let reader = new FileReader();
reader.readAsDataURL (uploadButton.files[0]); 
reader.onload = () => {
chosenImage.setAttribute("src",reader.
result);
}
fileName.textContent= uploadButton.files[0].
name;}