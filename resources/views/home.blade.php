@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kampung Susu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <h1>Home</h1>
                <center><img src=https://3.bp.blogspot.com/-Npk7PQK0xc0/WtBtfr5FF6I/AAAAAAAAChM/jNVtdzXNmcYUd1Sm6SuFO8XWxOj1aAX2gCLcBGAs/s1600/DSC_0231.JPG width="400" height="250" style="border:0;"></center>
                <br>
                <p>Kabupaten Tulungagung terkenal memproduksi marmer terbesar di Indonesia, sebenarnya memiliki beragam wisata menarik, sebab letak geografis wilayahnya berada di dataran tinggi
                dan dekat laut pantai selatan, sehingga kabupaten Tulungagung memiliki berabgai jenis destinasi wisata alam menakjubkan. Tidak hanya wisata alam saja yang membuat pengunjung 
                merasa puas ketika berwisata di Tulungagung, pasalnya wisata edukasi seperti kampoeng susu dinasti tak boleh terlewatkan mengisi liburan keluarga.</p>
                Masyarakat Tulungagung lebih mengenal istilah wisata ini dengan sebutan KSD Tulungagung. Disana pengunjung akan lebih mengenal dekat serta memberikan wawasan kepada anak-anak 
                mengenai alam, selain itu pengunjung bisa mempelajari secara langsung bagaimana sih cara ternak sapi perah yang benar?, memerah susu sapi perah yang benar?. Satu diantara maksud di dirikan peternakan ini merupakan bentuk keprihatinan terhadap anak-anak jaman modern lebih menyukai bermain teknologi ketimbang 
                bermain bersama alam, istilahnya back to nature(kembali ke alam).
                <br> 

                <br><h1>Visitor Data</h1>
                <table>
                    <tr>
                        <th>Name</th>
                        <th></th>
                        <th>Ticket</th>
                        <th></th>
                        <th>Handphone</th>
                        <th></th>
                        <th>Golongan</th>
                    </tr>
                    <tr>
                        <td>Faradila Wahyu W.</td>
                        <td></td>
                        <td>JSYE7GDT</td>
                        <td></td>
                        <td>081332355638</td>
                        <td></td>
                        <td>Dewasa</td>
                    </tr>
                    <tr>
                        <td>Aliyu Khalifatun</td>
                        <th></th>
                        <td>JSU636FG</td>
                        <th></th>
                        <td>081325367584</td>
                        <td></td>
                        <td>Dewasa</td>
                    </tr>
                    <tr>
                        <td>Ian kookiejeon</td>
                        <th></th>
                        <td>JSABYWI8</td>
                        <th></th>
                        <td>082435261784</td>
                        <td></td>
                        <td>Anak-anak</td>
                    </tr>
                    <tr>
                        <td>Tata Brian Steven</td>
                        <th></th>
                        <td>JDEYU83Y</td>
                        <th></th>
                        <td>081647289473</td>
                        <td></td>
                        <td>Anak-anak</td>
                    </tr>
                    <tr>
                        <td>Khoiri Lailatul</td>
                        <th></th>
                        <td>JSEYGTS9</td>
                        <th></th>
                        <td>085435267382</td>
                        <td></td>
                        <td>Dewasa</td>
                    </tr>
                </table>
                <br>
                <h1>Milk Available</h1>
                <br>
                <head>
                    <title>Hitung otomatis menggunakan javacript</title>
                    <style type="text/css">
                        body {
                            font-family:Arial;
                        }
                        #canvas {
                            width:600px;
                            background-color:grey;
                            padding:20px;
                            margin: auto;
                        }
                        H2 {
                            text-align : center;
                            color:white;
                        }
                    </style>
                    </head>
                    <body>
                    <div id="canvas">
                    <h2>Milk For Sale</h2>
                    <form>
                    <table border="1" width="100%" style="background-color:black;color:white;border-collapse:collapse">
                    <tr style="text-align:left" style="cellpadding:10">
                    <thead>
                    <th>No</th><th>Nama Barang</th><th>Harga Satuan</th><th>Qty</th>
                    </tr>
                    </thead>
                    <tr>
                    <td>1</td><td>Bootle Milk</td><td><input type="text" id="bm"  value="10000" onchange="total()"></td><td><input type="text" value="50" onchange="total()">
                    </tr>
                    <tr>
                    <td>2</td><td>Cup Milk</td><td><input type="text" id="cm"  value="2500" onchange="total()"></td><td><input type="text" value="45" onchange="total()">
                    </tr>
                    </tr>
                    </table>
                    </form>
                    </div>
                    </body>
                <br>
                
                <h1>Notes</h1>
                <center><img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiXdJcO4UaO_Isy_4Q-IXCzHeFT1tBOYIn3A&usqp=CAU width="300" height="300" style="border:0;"></center>
                <br>
                <head>
                <meta charset="utf-8" />
                </head>
                    <body>
                    <div id="container">
                        <form action="" method="post">
                        
                        <li>
                        <label for="carrier">Name</label>
                        <input type="text" name="carrier" id="carrier" placeholder="Joph Vancoc" />
                        </li>
                        <li>
                        <label for="smsMessage">Text</label><br>
                        <textarea name="smsMessage" id="smsMessage" cols="45" rows="15"></textarea>
                        </li>
                    </form>
                    </div>
                    </body>
                <br> 

                <h1>Google Map</h1>
                <br> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.2878285395573!2d111.80614931425664!3d-8.07209768291218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ce1ce0c679d%3A0x9b2c13f2fc48f329!2sKampung%20Susu%20Dinasty%20Tulungagung!5e0!3m2!1sid!2sid!4v1635257720001!5m2!1sid!2sid" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
