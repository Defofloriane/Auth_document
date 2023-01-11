<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="assets/css/style copy.css"> -->
</head>

<body>

  <div class="container col-lg-4 py-5">
    <div class="card bg-white shadow rounded-3 p-3 border-0">
      @if(session()->has('gagal'))
      <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Danger:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <div>
          {{session()->get('gagal')}}
        </div>
      </div>
      @endif
      @if(session()->has('sucess'))
      <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <div>
          {{session()->get('sucess')}}
        </div>
      </div>
      @endif
        <video class="camera" id="preview"></video>
      <form action="{{url('/store')}}" method="post" id="form">
        @csrf
        <input type="hidden" name="id_siswa" id="id_siswa">
      </form>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <tr>
          <th>nama</th>
          <th>tanga</th>
        </tr>
      </table>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <script type="text/javascript">
    var scanner = new Instascan.Scanner({
      video: document.getElementById('preview'),
      scanPeriod: 5,
      mirror: false
    });
    scanner.addListener('scan', function(content) {
      alert(content);
      //window.location.href=content;
    });
    Instascan.Camera.getCameras().then(function(cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
        $('[name="options"]').on('change', function() {
          if ($(this).val() == 1) {
            if (cameras[0] != "") {
              scanner.start(cameras[0]);
            } else {
              alert('No Front camera found!');
            }
          } else if ($(this).val() == 2) {
            if (cameras[1] != "") {
              scanner.start(cameras[1]);
            } else {
              alert('No Back camera found!');
            }
          }
        });
      } else {
        console.error('No cameras found.');
        alert('No cameras found.');
      }
    }).catch(function(e) {
      console.error(e);
      alert(e);
    });
    scanner.addListener('scan', function(c) {
      document.getElementById('id_siswa').value = c;
      document.getElementById('form').submit();
    });
  </script>
  <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
    <label class="btn btn-primary active">
      <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
    </label>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>