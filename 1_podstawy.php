<?php
    $firstName = "Natalie";
    $nickname = "NatalieJoan";
    echo "Name and nickname: $firstName $nickname <br>";
    echo 'Name and nickname: $firstName $nickname <br>';

// heredoc
    $data = <<< DATA
        Name: $firstName<br>
        Nickname: $nickname<br>
    DATA;

    echo <<< DATA
    $firstName<br>
    $nickname<br>
DATA;

echo $data;

$bin = 0b1011;
echo "Binarny: $bin <br>";
$oct = 011;
echo "$oct <br>";
$hex = 0xA1;
echo "Hexalny: $hex <br>";
?>