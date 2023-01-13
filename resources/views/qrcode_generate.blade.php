
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>qrcode</title>
</head>
<body>
    <head>
        <title>Testing QR code</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript">
            function generateBarCode()
            {
                var nric = $('hhhh').val();
                var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=150x150';
                $('#barcode').attr('src', url);
            }
        </script>
    </head>
    <body>
        
        <input id="text" type="text" 
            value="" style="Width:20%"
            onblur='generateBarCode();' /> 
            <?php 

?>

      {{-- <img id='barcode' 
            src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=200x200" 
            alt="" 
            title="HELLO" 
            width="50" 
            height="50" /> --}}
    </body>
    <div>
        <?php 
        $type = 'png';
$data = file_get_contents('https://api.qrserver.com/v1/create-qr-code/?data=Floriane&amp;size=200x200');
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>
<?php echo '<div class="company-logo">
    <img src="'.$base64.'"  alt="base" />
</div>';
?>
    
        <h2>qrcode</h2>
        {{-- {{QrCode::size(250)->generate('Make me into a QrCode!')}} --}}
        
        <a class="btn btn-success" href="{{route("export_pdf")}}" wire:click="export_pdfs()" >Export pdf</a>
    </div>
    <?php 
        // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => false])->loadView('qrcode_generate')->stream();
    ?>
</body>
</html>
