<!DOCTYPE html>
<html lang="en">
</title>

<head>
       <link type="" href="css/releve.css" rel="stylesheet" /> 
       
    
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}"/> --}}
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/releve.css') }}"> --}}
        {{-- <style>
                 @include ('bootstraps');
        </style> --}}
 <style >
    
</style>
<style>
    
* {
    position: relative;
  }
  .bloc{
    display:inline-block;
    margin-right:20px;
  }
  .fs-2{
    color: #000000;
    font-size: 43px;
    font-weight: bold;
  }
  .default_option {
    font-size: 14px;
    margin: 0 !important;
  }
  .bold_part {
    font-size: 17px !important;
  }
  .english_subtitle {
    font-style: italic;
    font-size: 13px;
    margin-top: -5px;
  }
  .content-uy1-logo {
    height: 100px;
    width: 80px;
  }
  
  .content-state-data span:nth-child(1),
  .content-state-data span:nth-child(4) {
    font-weight: bold;
  }
  
  table {
    border-top: 3px solid #000000 !important;
    border-right: 3px solid #000000 !important;
  }
  
  table th span {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    text-transform: capitalize;
  }
  
  table th,
  table td:not(:nth-child(2)) {
    text-align: center;
  }
  
  table thead,
  table tbody {
    border: none !important;
    border-bottom: 3px solid #000000 !important;
  }
  
  table tr {
    border-bottom: 1px solid #000000 !important;
  }
  
  table tr td,
  table tr th {
    border-left: 3px solid #000000 !important;
  }
  
  .content-recap {
    max-width: 650px;
  }
  
  [rowspan] span {
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0px;
    top: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .content-recap table {
    font-size: 0.85em;
    width: 380px !important;
  }
  
  .content-recap table td,
  .content-recap table th {
    /* height: 14px !important; */
    padding: 0px !important;
    margin: 0px !important;
  }
  
  .content-recap table th span {
    height: 29px !important;
  }
  
  
</style>


</head>

<body>
   

    <div class="d-flex container-lg flex-column py-5 px-5 default_option">
        <header class="w-100 d-flex fle x-column">
            <section class="w-100 d-flex align-items-center justify-content-between">
                <div class="d-flex content-state-data flex-column align-items-center">
                    <span> REPUBLIQUE DU CAMEROUN </span>
                    <span> Paix - Travail - Patrie </span>
                    <span> ------------------------- </span>
                    <span> UNIVERSITE YAOUNDE 1 </span>
                </div>
                <div class="d-flex content-uy1-logo d-flex justify-content-center align-items-center">
                    {{-- <img src="assets/img/logo_ui.png" alt="university of yaounde 1" class="img-fluid" /> --}}
                    
                </div>
                <div class="d-flex content-state-data flex-column align-items-center">
                    <span> REPUBLIC OF CAMEROON </span>
                    <span> Peace - Work - Fatherland </span>
                    <span> ------------------------- </span>
                    <span> UNIVERSITY OF YAOUNDE 1 </span>
                </div>
            </section>
        
        </header>
        <section class="w-100 d-flex flex-column align-items-center py-4" style="padding-bottom: 0px !important">
            <span class="fs-5 fw-normal"> FACULTE DES SCIENCES </span>
            <span>
                PB/P.O. Box 812 Yaoundé CAMEROUN : Tel: 222-234-496 / Email:
                diplome@facsiences.uy1.cm
            </span>
            <span class="fs-2"> RELEVE DE NOTES/TRANSCRIPT </span>
        </section>
        <main class="w-100 d-flex flex-column align-items-center">
            <section class="w-100">
                <section class="w-100 d-flex align-items-center justify-content-between">
                    <div class="d-flex form-item">
                        <div class="d-flex flex-column">
                            <span class="fs-5 fw-bolder bold_part"> Noms et Prénoms: </span>
                            <span class="english_subtitle"> Surname and Name </span>
                        </div>
                        <div class="form-value ps-4 pt-1 text-uppercase"> </div>
                    </div>
                    <div class="d-flex form-item">
                        <div class="d-flex flex-column">
                            {{-- <div class="form-value ps-4 pt-1 text-uppercase">N° 00097/EDG/L2/Ict/20212022 &nbsp; &nbsp;</div> --}}
                            <span class="fs-5 fw-bolder bold_part"> Matricule: </span>
                            <span class="english_subtitle"> Registration N° </span>
                        </div>
                        <div class="form-value ps-4 pt-1">20U4660</div>
                    </div>
                </section>
                <section class="w-100 d-flex align-items-center justify-content-start">
                    <div class="d-flex form-item me-5 pe-5">
                        <div class="d-flex flex-column">
                            <span class="fs-5 fw-bolder bold_part"> Né(e) le: </span>
                            <span class="english_subtitle"> Born on </span>
                        </div>
                        <div class="form-value ps-4 pt-1 text-uppercase">25/04/2000</div>
                    </div>
                    &nbsp;
                    <div class="d-flex form-item ms-5 ps-5">
                        <div class="d-flex flex-column">
                            <span class="fs-5 fw-bolder bold_part"> A: </span>
                            <span class="english_subtitle"> At </span>
                        </div>
                        <div class="form-value ps-4 pt-1">DOUALA</div>
                    </div>
                </section>
                <section class="w-100 d-flex align-items-center justify-content-start">
                    <div class="d-flex form-item">
                        <div class="d-flex flex-column">
                            <span class="fs-5 fw-bolder bold_part"> Domaine: </span>
                            <span class="english_subtitle"> Domain </span>
                        </div>
                        <div class="form-value ps-4 pt-1 text-uppercase">
                            SCIENCES MATHEMATIQUES ET INFORMATIQUE
                        </div>
                    </div>
                </section>
                <section class="w-100 d-flex align-items-center justify-content-between">
                    <div class="d-flex form-item me-5 pe-5 ">
                        <div class="d-flex flex-column">
                            <span class="fs-5 fw-bolder bold_part">Niveau : &nbsp;</span>
                            <span class="english_subtitle"> Level </span>
                        </div>
                        <div class="form-value ps-4 pt-1 text-uppercase">License 1</div>
                    </div>
                  
                    <div class="d-flex form-item ms-5 ps-5">
                        <div class="d-flex flex-column">
                            <span class="fs-5 fw-bolder bold_part"> Filière :  &nbsp;</span>
                            <span class="english_subtitle"> Discipline </span>
                        </div>
                        <div class="form-value ps-4 pt-1">INFORMATIQUE</div>
                    </div>
                </section>
  
                <section class="w-100 d-flex align-items-center justify-content-between">
                    <div class="d-flex form-item">
                        <div class="d-flex flex-column">
                            <span class="fs-5 fw-bolder bold_part"> Spécialité: </span>
                            <span class="english_subtitle"> Option </span>
                        </div>
                        <div class="form-value ps-4 pt-1 text-uppercase"></div>
                    </div>
                    <div class="d-flex form-item">
                        <div class="d-flex flex-column">
                            <span class="fs-5 fw-bolder bold_part"> Année Academique: </span>
                            <span class="english_subtitle"> Academic year </span>
                        </div>
                        <div class="form-value ps-4 pt-1">2021/2022</div>
                    </div>
                </section>
            </section>
            <section class="w-100 mt-2">
                <table class="w-100 table">
                    <thead>
                        <tr>
                            <th>
                                <span> Code UE </span>
                            </th>
                            <th>
                                <span> Intitulé de l'UE / UE Title </span>
                            </th>
                            <th>
                                <span>
                                    crédit <br />
                                    credit
                                </span>
                            </th>
                            <th>
                                <span> Moy / 100 </span>
                            </th>
                            <th>
                                <span>
                                    Mention <br />
                                    Grade
                                </span>
                            </th>
                            <th>
                                <span>
                                    Semestre <br />
                                    Semester
                                </span>
                            </th>
                            <th>
                                <span>
                                    Année <br />
                                    Year
                                </span>
                            </th>
                            <th>
                                <span>
                                    Décision <br />
                                    Decision
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>INF 2026</td>
                            <td>Statistiques et analyse des données</td>
                            <td>6</td>
                            <td>74</td>
                            <td>B+</td>
                            <td>2</td>
                            <td>2022</td>
                            <td>CA</td>
                        </tr>
                        <tr>
                            <td>INF 2086</td>
                            <td>Alogithmique</td>
                            <td>6</td>
                            <td>65</td>
                            <td>A</td>
                            <td>2</td>
                            <td>2022</td>
                            <td>CA</td>
                        </tr>
                        <tr>
                            <td>INF 2245</td>
                            <td>Statistiques et analyse des données</td>
                            <td>6</td>
                            <td>85</td>
                            <td>A</td>
                            <td>2</td>
                            <td>2022</td>
                            <td>CA</td>
                        </tr>
                        <tr>
                            <td>INF 2050</td>
                            <td>Base de données</td>
                            <td>6</td>
                            <td>74</td>
                            <td>B+</td>
                            <td>2</td>
                            <td>2022</td>
                            <td>CA</td>
                        </tr>
                        <tr>
                            <td>INF 2075</td>
                            <td>Structure de données en python</td>
                            <td>6</td>
                            <td>73</td>
                            <td>B+</td>
                            <td>2</td>
                            <td>2022</td>
                            <td>CA</td>
                        </tr>
                        <tr>
                            <td>INF 2156</td>
                            <td>Programmation web</td>
                            <td>6</td>
                            <td>47</td>
                            <td>D+</td>
                            <td>2</td>
                            <td>2022</td>
                            <td>CANT</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="w-100 d-flex flex-column align-items-center">
                <span class="w-100 decision-data d-flex flex-column w-auto">
                    <span> Crédit Capitalisés: 60/60 (100.00%) </span>
                    <span> Moyenne Générale Pondérée (MGP): 3.5/4 </span>
                    <span> Decision: <b> ADMIS </b> </span>
                </span>
            </section>
            <section class="w-100 d-flex flex-column" style="font-size: 12px">
            <div class="d-flex">
                    <div><u> Légende: </u></div>

                    <div class="d-flex flex-column">
                        <br />
                        <span> CA: Capitalisé </span>
                        <span> CANT: Capitalisé Non transferable </span>
                        <span> NC: Non Capitalisé </span>
                    </div>
                </div>
                <div>
                    <div class="d-flex ">
                        
                        <div class="content-recap w-100 mt-3 bloc">
                            <table class="table w-100">
                                <thead>
                                    <th>
                                        <span> Note / 100 </span>
                                    </th>
                                    <th>
                                        <span> Cote </span>
                                    </th>
                                    <th>
                                        <span>
                                            Qualité <br />
                                            de point
                                        </span>
                                    </th>
                                    <th>
                                        <span class="px-5"> Mention </span>
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>>= 80</td>
                                        <td class="text-center">A</td>
                                        <td>4.00</td>
                                        <td>Très Bien</td>
                                    </tr>

                                    <tr>
                                        <td>75 - 79</td>
                                        <td class="text-center">A-</td>
                                        <td>3.70</td>
                                        <td rowspan="2">
                                            <span> Bien </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>70 - 74</td>
                                        <td class="text-center">B+</td>
                                        <td>3.30</td>
                                    </tr>

                                    <tr>
                                        <td>65 - 69</td>
                                        <td class="text-center">B</td>
                                        <td>3.00</td>
                                        <td rowspan="2">
                                            <span> Assez Bien </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>60 - 64</td>
                                        <td class="text-center">B-</td>
                                        <td>2.70</td>
                                    </tr>

                                    <tr>
                                        <td>55 - 59</td>
                                        <td class="text-center">C+</td>
                                        <td>2.30</td>
                                        <td rowspan="2">
                                            <span> Passable </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>50 - 54</td>
                                        <td class="text-center">C</td>
                                        <td>2.00</td>
                                    </tr>

                                    <tr>
                                        <td>45 - 49</td>
                                        <td class="text-center">A-</td>
                                        <td>1.70</td>
                                        <td rowspan="3">
                                            <span class="px-2">
                                                Crédit Capitalisé Mais non transferable
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>40 - 44</td>
                                        <td class="text-center">B+</td>
                                        <td>1.30</td>
                                    </tr>
                                    <tr>
                                        <td>35 - 39</td>
                                        <td class="text-center">D</td>
                                        <td>1.00</td>
                                    </tr>

                                    <tr>
                                        <td>30 - 35</td>
                                        <td class="text-center">E</td>
                                        <td rowspan="2">
                                            <span> 0.00 </span>
                                        </td>
                                        <td rowspan="2">
                                            <span> Passable </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            < 30</td>
                                        <td class="text-center">F</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex">
                            <title>Testing QR code</title>
                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                            <script type="text/javascript">
                                function generateBarCode() {
                                    var nric = $('hhhh').val();
                                    var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=150x150';
                                    $('#barcode').attr('src', url);
                                }
                            </script>



                        


                               {{-- <img id='barcode' 
                               src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=200x200" 
                                          alt="" 
                                           title="HELLO" 
                                          width="50" 
                                     height="50" /> --}}


                            <?php
                            $type = 'png';
                            $data = file_get_contents('https://api.qrserver.com/v1/create-qr-code/?data=20U4660&amp;size=100x100');
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                            ?>
                            <?php echo '<div class="company-logo">
                                                <img src="' .
                                $base64 .
                                '"  alt="base" />
                                            </div>';
                            ?>

                           
                            {{-- {{QrCode::size(250)->generate('Make me into a QrCode!')}} --}}

                        </div>
                        <?php
                        // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => false])->loadView('qrcode_generate')->stream();
                        ?>

                    </div>
                </div>
                {{-- <input id="text" type="text" value="" style="Width:20%"
                onblur='generateBarCode();' /> --}}
                
           

            </section>
            
        </main>
        {{-- <a class="btn btn-primary" href="{{ route('export_pdf') }}"
        wire:click="export_pdfs()">Export pdf</a> --}}

    </div>
    <form method="POST" action="{{ route('upload') }}"  enctype="multipart/form-data">
        @csrf
        <input type="file" name="name_file" id="name_file">
        <button type="submit">upload</button>  
       <!-- Code HTML du formulaire -->
    </form>
    <form method="POST" action="{{ route('webcam.capture') }}"  enctype="multipart/form-data">
        @csrf
        <button type="submit">scanner</button>  
       <!-- Code HTML du formulaire -->
    </form>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Capture Image</div>
    
                    <div class="panel-body">
                        <div id="camera-container">
                            <video id="camera-preview"></video>
                            <video id="video" width="640" height="480" autoplay></video>
                        </div>
    
                        <button id="captureButton" class="btn btn-primary">Capture</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button id="startButton">Démarrer la caméra</button>
<script>
      
    var canvas = document.createElement('canvas');
    var captureButton = document.getElementById('capture-btn');
    var cameraContainer = document.getElementById('camera-container');
    let video = document.getElementById("video");
let startButton = document.getElementById("startButton");

startButton.addEventListener("click", function() {
    // Demande à l'utilisateur l'accès à la caméra
    navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
        video.srcObject = stream;
        video.play();
    })
    .catch(function(error) {
        console.error(error);
    });
});
captureButton.addEventListener('click', function() {
    alert("capture");
        // Masquer la caméra pour éviter la confusion
        cameraContainer.style.display = 'none';

        // Définir la taille du canvas sur la taille de la vidéo
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;

        // Dessiner la vidéo sur le canvas
        var context = canvas.getContext('2d');
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        // Récupérer les données de l'image sous forme de base64
        var imageData = canvas.toDataURL('image/jpeg');
console.log(imageData);
console.log("rien");
        // Envoyer les données d'image au serveur
        axios.post('/upload',) 
    })

</script>
        

        
  
    {{-- <script>
        function Onchange(e) {
            $file = document.getElementById('file').value;
          
console.log(file);

            // console.log(document.getElementsByName("files"));

        }
        </script> --}}
</body>

</html>
