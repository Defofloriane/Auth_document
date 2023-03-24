<!DOCTYPE html>
<html>
<head>
<title>Demo - Capture Photo From Webcam Using Javascript</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<style type="text/css">

button {
    width: 120px;
    padding: 10px;
    display: block;
    margin: 20px auto;
    border: 2px solid #111111;
    cursor: pointer;
    background-color: white;
}

#start-camera {
    margin-top: 50px;
}

#video {
    display: none;
    margin: 50px auto 0 auto;
}

#click-photo {
    display: none;
}

#dataurl-container {
    display: none;
}

#canvas {
    display: block;
    margin: 0 auto 20px auto;
}

#dataurl-header {
    text-align: center;
    font-size: 15px;
}

#dataurl {
    display: block;
    height: 100px;
    width: 320px;
    margin: 10px auto;
    resize: none;
    outline: none;
    border: 1px solid #111111;
    padding: 5px;
    font-size: 13px;
    box-sizing: border-box;
}

</style>
</head>

<body>
    {{-- <p>{{$dataUrl}}</p> --}}
    <button id="start-camera">Start Camera</button>
<video id="video" width="320" height="240" autoplay></video>
<button id="click-photo" type="submit">Click Photo</button>
<div id="dataurl-container">
    <canvas id="canvas" width="320" height="240"></canvas>
    <div id="dataurl-header">Image Data URL</div>
    <textarea id="dataurl" name="dataurl" readonly></textarea>
</div>

<form action="" method="post" id="form">
    @csrf
    <input type="file" name="name_file" id="file">
    <input type="file" id="dataurl" name="dataurl" readonly>

</form>

<script>

let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");
let dataurl = document.querySelector("#dataurl");
let dataurl_container = document.querySelector("#dataurl-container");

camera_button.addEventListener('click', async function() {
   	let stream = null;

    try {
    	stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
    }
    catch(error) {
    	alert(error.message);
    	return;
    }

    video.srcObject = stream;

    video.style.display = 'block';
    camera_button.style.display = 'none';
    click_button.style.display = 'block';
});


click_button.addEventListener('click', function() {
  // Récupère le contexte 2D du canevas
  const context = canvas.getContext('2d');
  
  // Dessine l'image de la vidéo sur le canevas
  context.drawImage(video, 0, 0, canvas.width, canvas.height);
  
  // Convertit le canevas en une URL de données au format JPEG
  const image_data_url = canvas.toDataURL('image/jpeg');

  // Affiche l'URL de données dans un conteneur HTML pour que l'utilisateur puisse la voir
  dataurl_container.style.display = 'block';
  dataurl_container.href = image_data_url;
  alert(image_data_url);
  // Retourne l'URL de données de l'image capturée
  return image_data_url;
});


// click_button.addEventListener('click', function() {
//         //   var dataURI = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUA..."

//     canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
//    	let image_data_url = canvas.toDataURL('images/jpeg');
//        dataurl.value = image_data_url;
//        dataurl_container.style.display = 'block';   
//        // Data URI de l'image

//       document.getElementById("hidden").value=image_data_url;
//       document.getElementById("name_file").src=image_data_url,
//       document.getElementById("form").submit();


      
// });

// // Extraire le type de contenu et l'encodage
// var type = dataURI.split(':')[1].split(';')[0];
// var encoding = dataURI.split(':')[1].split(';')[1].split(',')[0];

// // Extraire les données de l'image
// var data = dataURI.split(',')[1];

// // Convertir les données en binaire si elles sont encodées en base64
// if (encoding == 'base64') {
//     data = atob(data);
//     alert(data);
// }

// // Créer un lien vers l'image
// var blob = new Blob([data], {type: type});
// var url = URL.createObjectURL(blob);
// alert(url);
// console.log(url);
// alert("hhh");

</script>

</body>
</html>