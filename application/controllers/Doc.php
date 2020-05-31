<?php
Class Doc extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('Data_model');
    }
    
    /*function index(){
        redirect(base_url('home/v_invoice'));
    }*/
    function form_registrasi($id_siswa){
        $data_siswa = $this->Data_model->show_siswa($id_siswa);

        foreach($data_siswa->result() as $row ):

        $nama_siswa = $row->nama_siswa;
        $pdf = new FPDF('p','mm','A4');
        /*$myImage = "images/logos/mylogo.jpg";  */
        $image = base_url('')."assets/dist/img/logohd.png";
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image($image,30,10,-300);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B', 16);
        // mencetak string 
        $pdf->Cell(170,7,'FORMULIR REGISTRASI',0,1,'C');
        $pdf->Cell(194,7,'HOMESCHOOLING PRIMAGAMA',0,1,'C');

        $pdf->SetFont('Times','',12);
        $pdf->Cell(173,7,'Jl Tebet Timur III I No 1 Jakarta Selatan',0,1,'C');
        $pdf->Cell(146,7,'Tahun Ajaran 2020/2021',0,1,'C');

        $pdf->SetFont('Times','B', 30);
        $pdf->Cell(350,7, $row->jenjang,0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Line(30, 40, 150, 40);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(90,6,'A. BIODATA SISWA',0,1,'C');
        $nama = 'FERIAL FAHLEVI';
        // $pdf->Cell(95,6,$nama,0,0);
        $pdf->SetFont('Times','',12);

        // $pdf->Cell(20,6, '1.',0, 0);
        $pdf->Cell(30,6, '', 0, 0,'C');
        $pdf->Cell(50,6, 'Nama Lengkap ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->nama_siswa, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Nama Panggilan ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->nama_panggilan, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Jenis Kelamin ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->jk_siswa, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Tempat Tanggal Lahir ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->tempat_lahir.', '.date('d F Y', strtotime($row->tanggal_lahir)), 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Agama ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->nama_agama, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'No. Telp / HP ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->telp, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Golongan Darah ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->gol_darah, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Hobi ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->hobi, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Cita-cita ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->cita_cita, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Alamat ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->alamat_siswa, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, '', 0, 0);
        $pdf->Cell(2,6, '', 0, 0);
        $pdf->Cell(80,6, ' ', 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);
        $pdf->Cell(45,6, '' ,0,1);//SPASI
        endforeach;

        $wali_ayah = $this->Data_model->show_wali1($id_siswa, '2');

        foreach($wali_ayah->result() as $row ):

        $pdf->SetFont('Times','B',12);
        $pdf->Cell(117,6,'B. BIODATA ORANG TUA SISWA',0,1,'C');

        $pdf->SetFont('Times','',12);

        // $pdf->Cell(20,6, '1.',0, 0);
        $pdf->Cell(30,6, '', 0, 0,'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Nama Ayah', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->nama_wali, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Pekerjaan ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->pekerjaan_wali, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Pendidikan Terakhir ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->pend_terakhir, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Penghasilan Per Bulan ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->penghasilan, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'No. Telp / HP ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->no_hp_wali, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Alamat Email ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->email_wali, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);
        endforeach;

        //IBU
        $wali_ibu = $this->Data_model->show_wali1($id_siswa, '1');

        foreach($wali_ibu->result() as $row ):

        $pdf->Cell(30,6, '', 0, 0,'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Nama Ibu ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->nama_wali, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Pekerjaan ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->pekerjaan_wali, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Pendidikan Terakhir ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->pend_terakhir, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Penghasilan Per Bulan ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->penghasilan, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'No. Telp / HP ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->no_hp_wali, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Alamat Email ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->email_wali, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, 'Alamat Orang Tua ', 0, 0);
        $pdf->Cell(2,6, ': ', 0, 0);
        $pdf->Cell(80,6, ' '.$row->alamat_wali, 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(30,6, '', 0, 0, 'C');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6, '', 0, 0);
        $pdf->Cell(2,6, '', 0, 0);
        $pdf->Cell(80,6, ' ', 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);
        $pdf->Cell(32,6, '', 0, 1);
        endforeach;

        $pdf->SetFont('Times','B',12);
        $pdf->Cell(20,6,'',0,0, 'C');
        $pdf->Cell(110,6,'',0,0, 'C');
        $pdf->Cell(20,6,'Jakarta,',0,0, 'C');
        $pdf->Cell(32,6, date('d F Y'), 'B', 0, 'L');
        $pdf->Cell(32,6, '', 0, 1);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(32,6, '',0,1);
        $pdf->Cell(32,6, '',0,1);

        $pdf->Cell(20,6,'',0,0, 'C');
        $pdf->Cell(125,6,'',0,0, 'C');
        $pdf->Cell(20,6,'(Orang Tua Siswa)',0,0, 'C');
        $pdf->Cell(32,6, '', 0, 1);

        $pdf->Cell(10,7,'Catatan: ',0,1);

        $pdf->SetFont('Times','',9);
        $pdf->Cell(45,6, '1. Uang Pendaftaran, Uang Pangkal dan biaya lainnya tidak dapat dikembalikan atau dipindakan ke orang lain dengan alasan apapun.',0,1);
        $pdf->Cell(45,6, '2. Melengkapi syarat pendaftaran berupa: Fotocopy akta kelahiran, Fotcopy ijazah terakhir, Fotocopy kartu keluarga, Fotocopy',0,1);
        $pdf->Cell(45,6, '   SKHUN terakhir, Fotocopy raport, pas photo 4x6, 3x4, 2x3: 12 lembar, serta bukti pembayaran',0,1);
        $pdf->Cell(20,6,'',0,0, 'R');
        $pdf->Cell(125,6,'',0,0, 'R');
        $pdf->Cell(50,6,'Printed By: '.$_SESSION['logged_in']['nama_user'],0,0, 'R');

        $pdf->Output('D','PENDAFTARAN'.$nama_siswa.'.pdf');
    }

    function invoice(){
        $pdf = new FPDF('p','mm','A4');
        /*$myImage = "images/logos/mylogo.jpg";  */
        $image = base_url('assets/dist/img/')."logohd.png";
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image($image,10,10,-300);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B', 16);
        // mencetak string 
        $pdf->Cell(190,7,'HOMESCHOOLING PRIMAGAMA',0,1,'C');
        $pdf->Cell(190,7,'JAKARTA SELATAN',0,1,'C');

        $pdf->SetFont('Times','',12);
        $pdf->Cell(190,7,'Alamat: Jl Tebet Timur III I No 1 Jakarta Selatan',0,1,'C');
        $pdf->Cell(190,7,'Email: info@homeschoolingjaksel.com / Telp: 087777447160; 081319857574',0,1,'C');
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