<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-while d-inline-block">{{$nama}}</h1>
        <br>
    @foreach ($nilai as $val)
        @if($val < 50)
        @break
    @endif
        <div class="alert alert-success d-inline-block">
            {{$val}}
        </div>
    @endforeach
    </div>
</body>
</html>

<!-- perulangan forelse -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-while d-inline-block">{{$nama}}</h1>
        <br>
        @forelse($nilai as $val)
        $f(($val>=0) and($val< 50))
        <div class="alert alert-danger d-inline-block">
            {{$val}}
        </div>
        @elseif(($val>=50) anda ($val<=100))
        <div class="alert alert-success d-inline-block">
            {{$val}}
        </div>
        @endif
        @empty
        <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
        @endforelse
    </div>
</body>
</html> -->

<!-- perulangan foreach -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Mahasiswa</title>
</head>
<body>
    <div class ="container text-center mt-3 pt-3 bg white">

    <br>
    @foreach($nilai as $val)
    <div class="alert alert-info d-inline-block">
    {{$val}}
</div>
@endforeach
</div>
</body>
</html> -->

<!-- perulangan while -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Mahasiswa</title>
</head>
<body>
    <div class ="container text-center mt-3 pt-3 bg white">
    <?php $i=0;?>
    @while($i< 5)
    <div class="alert alert-info d-inline-block">
    {{$i}}
    </div>
    <?php $i++?>
    @endwhile
</div>
</body>
</html> -->

<!-- perulangan for -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Mahasiswa</title>
</head>
<body>
    <div class ="container text-center mt-3 pt-3 bg white">
    @for($i = 0; $i < 5 ; $i++)
    <div class="alert alert-info d-inline-block">
    Laravel
    </div>
    @endfor
</div>
</body>
</html> -->

<!-- Switch -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Mahasiswa</title>
</head>
<body>
    <div class ="container text-center mt-3 pt-3 bg white">
    <h1 class="bg-dark px-3 py-1 text-while d-inline-block">{{$nama}}</h1>
    <h1 class="bg-dark px-3 py-1 text-while d-inline-block">{{$nilai}}</h1>
    <br>
    @switch($nilai)
    @case(0)
    <div class="alert alert-danger d-inline-block" >Tidak Ikut Ujian</div>
    @break
    @case(75)
    <div class="alert alert-success d-inline-block" >Lumayan</div>
    @break
    @case(100)
    <div class="alert alert-success d-inline-block" >Sempurna</div>
    @break
    @default
    <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
    @endswitch
    </div>
</body>
</html> -->

<!-- elseif -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Mahasiswa</title>
</head>
<body>
    <div class ="container text-center mt-3 pt-3 bg white">
    <h1 class="bg-dark px-3 py-1 text-while d-inline-block">{{$nama}}</h1>  
    <h1 class="bg-dark px-3 py-1 text-while d-inline-block">{{$nilai}}</h1>
    <br>
    @if(($nilai>=0) and($nilai< 50))
    <div class="alert alert-danger d-inline-block" >Maaf, Anda Tidak Lulus</div>
    @elseif(($nilai<=50) and($nilai<=100))
    <div class="alert alert-success d-inline-block" >Selamat, Anda Lulus</div>
    <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
    @endif
    </div>
</body>
</html>
 -->
