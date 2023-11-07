<?php
function affineEncrypt($text, $a, $b) {
    $result = '';
    $m = 26;  // Panjang alfabet Inggris
    $a %= $m;  // Pastikan nilai a dalam rentang 0 hingga m - 1
    $b %= $m;  // Pastikan nilai b dalam rentang 0 hingga m - 1

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];

        if (ctype_alpha($char)) {
            $isLower = ctype_lower($char);
            $charOffset = $isLower ? ord('a') : ord('A');
            $x = ord($char) - $charOffset;

            $encryptedChar = chr((($a * $x + $b) % $m) + $charOffset);
        } else {
            $encryptedChar = $char;
        }

        $result .= $encryptedChar;
    }

    return $result;
}


// Fungsi dekripsi juga dapat ditambahkan di sini jika diperlukan.
?>
