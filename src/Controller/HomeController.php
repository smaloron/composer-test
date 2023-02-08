<?php

namespace Smaloron\Test\Controller;

use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output\Png;



class HomeController
{

    public function hello()
    {
        echo "Hello from HomeController";


        $qrCode = new QrCode('Lorem ipsum sit dolor');

        // Save black on white PNG image 100 px wide to filename.png. Colors are RGB arrays.
        $output = new Png();
        $data = $output->output($qrCode, 400, [250, 255, 200], [60, 0, 80]);
        file_put_contents('qrcode.png', $data);

        echo "<img src='qrcode.png'>";
    }
}