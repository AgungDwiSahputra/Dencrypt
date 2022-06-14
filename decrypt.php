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
