<?php
Class Generatepdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        redirect(base_url('home/v_invoice'));
    }

    function invoice(){        
        $pdf = new FPDF('p','mm','A4');
        $myImage = "images/logos/mylogo.jpg";  
        $image = base_url('assets/dashboard/')."logo.jpg";
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image($image,10,10,-300);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B', 16);
        // mencetak string 
        $pdf->Cell(190,7,'HOMESCHOOLING PRIMAGAMA',0,1,'C');
        $pdf->Cell(190,7,'JAKARTA SELATAN',0,1,'C');

        $pdf->SetFont('Times','',12);
        $pdf->Cell(190,7,'Alamat: Jl Tebet Timur III I No 1 Jakarta Selatan / Email: info@homeschoolingjaksel.com',0,1,'C');
        $pdf->Cell(190,7,'Website: www.homeschoolingjaksel.com / Telp: 087777447160; 081319857574',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Line(10, 40, 198, 40);

        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(45,6,'Kepada Yth,',0,0);
        $nama = 'FERIAL FAHLEVI';
        // $pdf->Cell(95,6,$nama,0,0);
        $pdf->Cell(27,6,'',0,0);
        $pdf->Cell(20,6,'',0,1);
        $pdf->Cell(45,6, 'Bpk/Ibu Orang Tua/Wali   '. $nama,0,1);

        // $pdf->Cell(200,6, 'FERIAL' ,0,1);
        $pdf->Cell(45,6, 'Di Tempat' ,0,1);
        $pdf->Cell(45,6, '' ,0,1);

        $pdf->SetFont('Times','',12);
        $pdf->Cell(45,6, 'Berikut ini kami sampaikan biaya administrasi di Homeschooling Primagama Jakarta Selatan' ,0,0);

        $pdf->Cell(27,6, '',0,0);
        $pdf->Cell(20,6, '',0,1); 

        $pdf->Cell(45,6, '',0,0);
        $pdf->Cell(95,6, '',0,0);
        $pdf->Cell(27,6, '',0,0);
        $pdf->Cell(20,6, '',0,1); 

        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Times','B',12);
        $pdf->Cell(20,6,' NO ',1,0, 'C');
        $pdf->Cell(87,6,'                        RINCIAN                        ',1,0, 'C');
        $pdf->Cell(49,6,'JUMLAH',1,0, 'C');
        $pdf->Cell(32,6,'JATUH TEMPO',1,1, 'C');
        $pdf->SetFont('Times','',12);

        $pdf->Cell(20,6, '1.',1, 0,'C');
        $pdf->Cell(87,6, 'RINCIANNNN',1,0);
        $pdf->Cell(49,6, 'JUMLAAHHHH',1,0);
        $pdf->Cell(32,6, '10 DES 2010',1,1);
        $pdf->Cell(20,6, '2.',1, 0,'C');
        $pdf->Cell(87,6, 'RINCIANNNN',1,0);
        $pdf->Cell(49,6, 'JUMLAAHHHH',1,0);
        $pdf->Cell(32,6, '',1,1);

        $pdf->Cell(20,6, '',1, 0);
        $pdf->Cell(87,6, 'TOTAL',1,0);
        $pdf->Cell(49,6, 'Rp. SSEKIAN',1,0);
        $pdf->Cell(32,6, '',1,1); //
        $pdf->Cell(20,6, '',1, 0);
        $pdf->Cell(87,6, '',1,0);
        $pdf->Cell(49,6, '',1,0);
        $pdf->Cell(32,6, '',1,1); //
        $pdf->Cell(20,6, '',1, 0);
        $pdf->Cell(87,6, '',1,0);
        $pdf->Cell(49,6, '',1,0);
        $pdf->Cell(32,6, '',1,1); //
        $pdf->Cell(20,6, '',1, 0);
        $pdf->Cell(87,6, '',1,0);
        $pdf->Cell(49,6, '',1,0);
        $pdf->Cell(32,6, '',1,1); //

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Times','',12);
        $pdf->Cell(45,6, 'Untuk pembayaran dapat melalui cash atau transfer ke Bank BCA dengan nomor rekening 6290297212',0,1);
        $pdf->Cell(45,6, 'a/n Nurul Isyana atau Bank BNI dengan nomor rekening 852239958 a/n PT. Arrahman Harapan Agung.',0,1);
        $pdf->Cell(45,6, 'Mohon melakukan konfirmasi atau mengirimkan bukti transfer setelah transfer via wa / telefon',0,1);
        $pdf->Cell(45,6, 'ke nomor 081319857574 / 087777447160 atau via email ke info@homeschoolingjaksel.com.',0,1);


        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(45,6, '          Jakarta, 30 Desember 2019          ',0,1);
        $pdf->Cell(45,6, 'School Principal HSPG Jakarta Selatan    ',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(45,6, '                 NURUL ISYANA',0,1);
        $pdf->Output();
    }
}