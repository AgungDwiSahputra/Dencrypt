<?php
if (isset($_POST['mulai'])) {
    $DENCYPT = '';
    $L = 'A';
    $M = 'B';
    $N = 'C';
    $O = 'D';
    $P = 'E';
    $Q = 'F';
    $R = 'G';
    $S = 'H';
    $T = 'I';
    $U = 'J';
    $V = 'K';
    $W = 'L';
    $X = 'M';
    $Y = 'N';
    $Z = 'O';
    $A = 'P';
    $B = 'Q';
    $C = 'R';
    $D = 'S';
    $E = 'T';
    $F = 'U';
    $G = 'V';
    $H = 'W';
    $I = 'X';
    $J = 'Y';
    $K = 'Z';

    $kalimat = $_POST['encrypt'];
    $input = $kalimat;
    $jumlah = strlen($input);
    for ($i = 0; $i < $jumlah; $i++) {
        if ($input[$i] == 'A') {
            $input[$i] = $A;
        } elseif ($input[$i] == 'B') {
            $input[$i] = $B;
        } elseif ($input[$i] == 'C') {
            $input[$i] = $C;
        } elseif ($input[$i] == 'D') {
            $input[$i] = $D;
        } elseif ($input[$i] == 'E') {
            $input[$i] = $E;
        } elseif ($input[$i] == 'F') {
            $input[$i] = $F;
        } elseif ($input[$i] == 'G') {
            $input[$i] = $G;
        } elseif ($input[$i] == 'H') {
            $input[$i] = $H;
        } elseif ($input[$i] == 'I') {
            $input[$i] = $I;
        } elseif ($input[$i] == 'J') {
            $input[$i] = $J;
        } elseif ($input[$i] == 'K') {
            $input[$i] = $K;
        } elseif ($input[$i] == 'L') {
            $input[$i] = $L;
        } elseif ($input[$i] == 'M') {
            $input[$i] = $M;
        } elseif ($input[$i] == 'N') {
            $input[$i] = $N;
        } elseif ($input[$i] == 'O') {
            $input[$i] = $O;
        } elseif ($input[$i] == 'P') {
            $input[$i] = $P;
        } elseif ($input[$i] == 'Q') {
            $input[$i] = $Q;
        } elseif ($input[$i] == 'R') {
            $input[$i] = $R;
        } elseif ($input[$i] == 'S') {
            $input[$i] = $S;
        } elseif ($input[$i] == 'T') {
            $input[$i] = $T;
        } elseif ($input[$i] == 'U') {
            $input[$i] = $U;
        } elseif ($input[$i] == 'V') {
            $input[$i] = $V;
        } elseif ($input[$i] == 'W') {
            $input[$i] = $W;
        } elseif ($input[$i] == 'X') {
            $input[$i] = $X;
        } elseif ($input[$i] == 'Y') {
            $input[$i] = $Y;
        } elseif ($input[$i] == 'Z') {
            $input[$i] = $Z;
        } elseif ($input[$i] == '#') {
            $input[$i] = ' ';
        } else {
            $input[$i] = $input[$i];
        }
    }
    for ($i = 0; $i < $jumlah; $i++) {
        $DENCYPT .= $input[$i];
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DENCRYPT | With Agung & Salma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://agungdwisahputra.github.io/Ucapan-Ulang-Tahun-Salma/style.css">

</head>

<body>

    <div class="card text-center">
        <div class="card-body">
            <div id="home" class="active">
                <img src="https://agungdwisahputra.github.io/Ucapan-Ulang-Tahun-Salma/img/galeri/alma%20(3).jpg" class="rounded mx-auto d-block img-bulet" alt="Foto Salma" style="border-radius: 50% !important;border:5px solid #ffc107 !important;">
                <h4 class="card-title mt-3"><b>...::[ DENCRYPT ]::...</b></h4>
                <form action="" method="post">
                    <input name="encrypt" class="form-control w-75 mx-auto mt-4" type="text" placeholder="Masukan Encrypt.." autofocus style="display: inline-block;">
                    <button name="mulai" type="submit" class="btn btn-sm btn-success ms-2 p-2 px-4 mt-3 mt-md-0">Dencrypt</button>
                </form>
                <div class="input-group mt-3">
                    <textarea class="form-control p-3" rows="auto" readonly style="text-align: justify;"><?php if (isset($DENCYPT)) {
                                                                                                                echo $DENCYPT;
                                                                                                            } else {
                                                                                                                echo 'Kosong';
                                                                                                            } ?></textarea>
                </div>
            </div>
            <a href="https://www.instagram.com/agung.ds20/" target="_BLANK" class="btn btn-warning mt-3">@agung.ds20</a>
            <a href="https://www.instagram.com/al22_05/" target="_BLANK" class="btn btn-warning mt-3">@al22_05</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
