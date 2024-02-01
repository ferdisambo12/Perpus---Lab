<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Home extends BaseController
{
    public function index()
    {
        
        if(session()->get('id')>0 ) {
            return redirect()->to('/home/dashboard');
        }else{

            $model=new M_model();
            echo view('login');
        }
    }

    public function aksi_login()
    {
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');
        $model= new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>md5($p)
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {

            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');

    //     }else {
    //     return redirect()->to('/');
    // }
        }
    }
    public function log_out()
    {
        // if(session()->get('id')>0) {

     session()->destroy();
     return redirect()->to('/');

    //  }else{
    //     return redirect()->to('/home/dashboard');
    // }
 }
 public function dashboard()
 {
        // if(session()->get('id')>0) {

    $model= new M_model();

    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where); 

    echo view ('header', $kui);
    echo view ('menu');
    echo view ('dashboard');
    echo view ('footer');
    //      }else{
    //     return redirect()->to('/');
    // }
}
public function pengguna()
{
    // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

    $model = new M_model();
    $on='pengguna.id_user_user=user.id_user';
    $kui['ferdi'] = $model->fusionleft('pengguna', 'user', $on, );

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where); 

    // $id = session()->get('id');
    // $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('pengguna');
    echo view('footer');
    // }else{
    // return redirect()->to('/home/dashboard');
    // }
}
public function hapus_pengguna($id)
{
    // if(session()->get('level')== 1) {

    $model=new M_model();
    $where2=array('id_user'=>$id);
    $where=array('id_user_user'=>$id);
    $model->hapus('pengguna',$where);
    $model->hapus('user',$where2);
    return redirect()->to('/home/pengguna');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function tambah_pengguna()
{
        // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

    $model=new M_model();
    $on='pengguna.id_user_user=user.id_user';
    $kui['duar']=$model->fusionleft('pengguna',  'user', $on, );

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    $where=array('id_user' => session()->get('id'));
        // $kui['user']=$model->getRow('user',$where);

    echo view('header',$kui);
    echo view('menu');
    echo view('tambah_pengguna');
    echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function aksi_tambah_pengguna()
{
    $model=new M_model();

    $nama=$this->request->getPost('nama');
    $nik=$this->request->getPost('nik');    
    $ttl=$this->request->getPost('ttl');
    $jk=$this->request->getPost('jk');
    $alamat=$this->request->getPost('alamat');
    $username=$this->request->getPost('username');
    $password=$this->request->getPost('password');
    $level=$this->request->getPost('level');
    $id_user=session()->get('id');
    
    $user=array(
        'username'=>$username,
        'password'=>md5($password),
        'level'=>$level,
    );

    $model=new M_model();
    $model->simpan('user', $user);
    $where=array('username'=>$username);
    $id=$model->getarray('user', $where);
    $iduser = $id['id_user'];

    $pengguna=array(
        'nama'=>$nama,
        'nik'=>$nik,
        'ttl'=>$ttl,
        'jk'=>$jk,
        'alamat'=>$alamat,

        'id_user_user'=>$iduser,
        // 'tanggal_pgu'=>date('Y-m-d')
    );
    // print_r($pengguna);
    $model->simpan('pengguna', $pengguna);
    return redirect()->to('/home/pengguna');
}
public function edit_pengguna($id)
{
        // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

    $model=new M_model();
    $where2=array('pengguna.id_user_user'=>$id);
    $on=('pengguna.id_user_user=user.id_user');
    $kui['duar']=$model->fusion_Row('pengguna', 'user',$on,$where2);

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    echo view('header',$kui);
    echo view('menu');
    echo view('edit_pengguna');
    echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function aksi_edit_pengguna()
{
    $id= $this->request->getPost('id');
    $nama=$this->request->getPost('nama');
    $nik=$this->request->getPost('nik');
    $ttl=$this->request->getPost('ttl');
    $jk=$this->request->getPost('jk');
    $alamat=$this->request->getPost('alamat');
    $username=$this->request->getPost('username');
    $level=$this->request->getPost('level');
    // $iduser=session()->get('id');

    $where=array('id_user'=>$id); 
    $where2=array('id_user_user'=>$id);   
    if ($password !='') {
        $user=array(
            'username'=>$username,
            'level'=>$level,
        );
    }else{
        $user=array(
            'username'=>$username,
            'level'=>$level,
        );
    }
    
    $model=new M_model();
    $model->edit('user', $user,$where);

    $pengguna=array(
        'nama'=>$nama,
        'nik'=>$nik,
        'ttl'=>$ttl,
        'jk'=>$jk,
        'alamat'=>$alamat,
        // 'id_user_user'=>$iduser
    );
    // print_r($user);
    // print_r($pengguna);
    $model->edit('pengguna', $pengguna, $where2);
    return redirect()->to('/home/pengguna');
    }
    // -----------------------------------------------------------------------------------------------------------
    public function buku()
    {
 // if(session()->get('level')== 1 || session()->get('level')== 3) {

    $model = new M_model();
    $kui['ferdi'] = $model->tampil('buku');

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    echo view('header', $kui);
    echo view('menu');
    echo view('buku');
    echo view('footer');
    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function hapus_buku($id)
    {
    // if(session()->get('level')== 1) {

    $model=new M_model();
    $where=array('id_buku'=>$id);
    $model->hapus('buku',$where);
    return redirect()->to('/home/buku');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function tambah_buku()
{
        // if(session()->get('level')== 4) {

    $model=new M_model();
    $kui['ferdi']=$model->tampil('buku');

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    echo view('header',$kui);
    echo view('menu',$kui);
    echo view('tambah_buku',$kui);
    echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function aksi_tambah_buku()
{
    $model=new M_model();
    $judul_buku=$this->request->getPost('judul_buku');
    $cover_buku=$this->request->getPost('cover_buku');
    $kategori_buku=$this->request->getPost('kategori_buku');
    $tanggal=$this->request->getPost('tanggal');
    $data=array(
       
        'judul_buku'=>$judul_buku,
        'cover_buku'=>$cover_buku,
        'kategori_buku'=>$kategori_buku,
        'tanggal'=>$tanggal,
    );
        $model = new M_model();
        $model->simpan('buku',$data);
        return redirect()->to('/home/buku');
}

public function edit_buku($id)
{
        // if(session()->get('level')== 4) {

    $model=new M_model();
    $where=array('id_buku'=>$id);
    $kui['ferdi']=$model->getRow('buku', $where);

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

        // $where=array('id_user' => session()->get('id'));

    echo view('header',$kui);
    echo view('menu',$kui);
    echo view('edit_buku',$kui);
    echo view('footer');

//     }else{
//         return redirect()->to('/home/dashboard');
//     }
}
public function aksi_edit_buku()
{
    $model=new M_model();
    $id=$this->request->getPost('id');
    $judul_buku=$this->request->getPost('judul_buku');
    $cover_buku=$this->request->getPost('cover_buku');
    $kategori_buku=$this->request->getPost('kategori_buku');
    $tanggal=$this->request->getPost('tanggal');
    $data=array(
        'judul_buku'=>$judul_buku,
        'cover_buku'=>$cover_buku,
        'kategori_buku'=>$kategori_buku,
        'tanggal'=>$tanggal,
    );

    

        $where=array('id_buku'=>$id);
        $model->edit('buku',$data,$where);
        return redirect()->to('/home/buku');
        
    }

// ----------------------------------------------------------------------------------------------------------------------------
    public function kategori()
    {
 // if(session()->get('level')== 1 || session()->get('level')== 3) {

        $model = new M_model();
    // $on='nilai.id_sekolah=sekolah.id_sekolah';
        $kui['ferdi'] = $model->tampil('kategori_buku');

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        echo view('header', $kui);
        echo view('menu');
        echo view('kategori');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }
    public function hapus_kategori($id)
    {
    // if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_kategori'=>$id);
        $model->hapus('kategori_buku',$where);
        return redirect()->to('/home/kategori');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function tambah_kategori()
    {
        // if(session()->get('level')== 4) {

        $model=new M_model();
        $kui['ferdi']=$model->tampil('kategori_buku');

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_kategori',$kui);
        echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function aksi_tambah_kategori()
    {
        $model=new M_model();
        $nama_kategori=$this->request->getPost('nama_kategori');
        $deskripsi_kategori=$this->request->getPost('deskripsi_kategori');
        $tanggal=$this->request->getPost('tanggal');
        $data=array(
            'nama_kategori'=>$nama_kategori,
            'deskripsi_kategori'=>$deskripsi_kategori,
            'tanggal'=>$tanggal,
        );
        $model->simpan('kategori_buku',$data);
        return redirect()->to('/home/kategori');
    }
    public function edit_kategori($id)
    {
        // if(session()->get('level')== 4) {

        $model=new M_model();
        $where=array('id_kategori'=>$id);
        $kui['ferdi']=$model->getRow('kategori_buku', $where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        // $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_kategori',$kui);
        echo view('footer');

//     }else{
//         return redirect()->to('/home/dashboard');
//     }
    }
    public function aksi_edit_kategori()
    {
        $model=new M_model();
        $id=$this->request->getPost('id');
        $nama_kategori=$this->request->getPost('nama_kategori');
        $deskripsi_kategori=$this->request->getPost('deskripsi_kategori');
        $tanggal=$this->request->getPost('tanggal');
        $data=array(
            'nama_kategori'=>$nama_kategori,
            'deskripsi_kategori'=>$deskripsi_kategori,
            'tanggal'=>$tanggal,
        );
        $where=array('id_kategori'=>$id);
        $model->edit('kategori_buku',$data,$where);
        return redirect()->to('/home/kategori');
    }
    public function laporan_transaksi()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $kui['kunci']='view_transaksi';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);
        // $kui['user']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function cari_transaksi()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter('transaksi',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['user'] = base64_encode($img);

        echo view('c_transaksi',$kui);
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function pdf_transaksi()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter('transaksi',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['user'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->setPaper('A4','landscape');
        $dompdf->loadHtml(view('c_transaksi',$kui));
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function excel_transaksi()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data=$model->filter('transaksi',$awal,$akhir);

        $spreadsheet=new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'No Meja')
        ->setCellValue('B1', 'Pembayaran')
        ->setCellValue('C1', 'Total Harga')
        ->setCellValue('D1', 'Dibayar')
        ->setCellValue('E1', 'Tanggal');


        $column=2;

        foreach($data as $data){
            $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A'. $column, $data->no_meja)
            ->setCellValue('B'. $column, $data->pembayaran)
            ->setCellValue('C'. $column, $data->total_harga)
            ->setCellValue('D'. $column, $data->dibayar)
            ->setCellValue('E'. $column, $data->Tanggal);

            $column++;
        }
        $writer = new XLsx($spreadsheet);
        $fileName = 'Laporan transaksi';

        header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment;filename='.$fileName.'.xls');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
}
