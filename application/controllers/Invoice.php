<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model("M_PPOB");
    $this->load->model("M_transaction");
  }

  /*
  * Choose invoice based on the product
  */
  public function download($kode, $id_transaction, $produk){
    if ($produk == "bpjskes") {
      $this->getInvoiceBPJSKes($id_transaction, $kode);
    }else if($produk == "plnpostpaid"){
      $this->getInvoicePLNPostpaid($id_transaction, $kode);
    }else if($produk == "plnprepaid"){
      $this->getInvoicePLNPrepaid($id_transaction, $kode);
    }
  }

  public function index(){
    // set to finisih last Invoice first:
    // $this->session->end_invoice = FALSE;

    // The Array have to be reversed, because the previous submit is using array_push
    // which is causing the array is not as the same order as ppob,
    // the order changing into stack.
    // So the array have to be reversed using array_reverse().
    $data['invoice'] = array_reverse($this->session->invoice);
    $data['ppob'] = $this->session->ppob;
    $data['saldo'] = $this->M_PPOB->cekSaldo();

    // print_r($data['invoice']); echo "<br><br>";
    // print_r($data['ppob']); echo "<br><br>";
    // print_r($data['saldo']); echo "<br><br>";

    $this->load->view('pembayaran/invoice/v_invoice', $data);
  }

  /*
  * Method to create .pdf for BPJSKes Invoice
  */
  private function getInvoiceBPJSKes($id_transaction, $kode){
    require_once(APPPATH.'libraries/fpdf181/fpdf.php');

    $paidFrom = "WEB";
    $full_data = $this->M_transaction->get($id_transaction, $kode);
    $data = json_decode($full_data->value);

    $pdf = new FPDF('P','mm',array(148,210));
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(45);
    $pdf->MultiCell(100,1,$paidFrom);

    $pdf->MultiCell(20,10,'');
    $pdf->Cell(44);
    $pdf->MultiCell(100,8,$data->kodeAgent);
    $pdf->Cell(35);
    $pdf->MultiCell(100,1,'(PPOB ARINDO PRATAMA)');
    $pdf->Cell(28);
    $pdf->MultiCell(100,8,'(JL. MATRAMAN NO.11 BANDUNG)');
    $pdf->Cell(20);
    $pdf->MultiCell(160,1,'(STRUK PEMBAYARAN '.$this->getProductCode($data->productcode).')');

    $pdf->Cell(15);
    $pdf->Cell(60,20,'ID TRANS');
    $pdf->MultiCell(150,20,': '.$data->referensi);
    $pdf->Cell(15);
    $pdf->Cell(60,-10,'TANGGAL');
    $pdf->MultiCell(150,-10,': '.$data->tglbayar);
    $pdf->Cell(15);
    $pdf->Cell(60,20,'NOKA');
    $pdf->MultiCell(150,20,': '.$data->subid);
    $pdf->Cell(15);
    $pdf->Cell(60,-10,'NAMA');
    $pdf->MultiCell(150,-10,': '.$data->subname);
    $pdf->Cell(15);
    $pdf->Cell(60,20,'JUMLAH PESERTA');
    $pdf->MultiCell(150,20,': '.$data->jumlahpeserta);
    $pdf->Cell(15);
    $pdf->Cell(60,-10,'SISA SEBELUMNYA');
    $pdf->MultiCell(150,-10,': '.$this->rupiah($data->sisasebelumnya));
    $pdf->Cell(15);
    $pdf->Cell(60,20,'PERIODE');
    $pdf->MultiCell(150,20,': '.$data->jumlahbulan.' bulan');
    $pdf->Cell(15);
    $pdf->Cell(60,-10,'JUMLAH TAGIHAN');
    $pdf->MultiCell(150,-10,': '.$this->rupiah($data->jmltagih));

    $pdf->Cell(22);
    $pdf->MultiCell(160,35,'BPJS KESEHATAN MENYATAKAN STRUK');
    $pdf->Cell(17);
    $pdf->MultiCell(160,-25,'INI SEBAGAI BUKTI PEMBAYARAN YANG SAH');

    $pdf->Cell(15);
    $pdf->Cell(60,45,'BIAYA ADMIN');
    $pdf->MultiCell(150,45,': '.$this->rupiah($data->adminbank));
    $pdf->Cell(15);
    $pdf->Cell(60,-35,'TOTAL BAYAR');
    $pdf->MultiCell(150,-35,': '.$this->rupiah($data->jmltotalbayar));

    $pdf->Cell(25);
    $pdf->Cell(10,55,'Rincian tagihan dapat diakses pada');
    $pdf->MultiCell(160,65,'www.bpjs-kesehatan.go.id');

    // $pdf->Output();
    $pdf->Output('BPJS-Invoice-'.$data->referensi.'.pdf','D');
    sleep(4);

    // $this->session->paid = FALSE; //No longer used
  }

  /*
  * Method to create .pdf for PLN Postpaid
  */
  private function getInvoicePLNPostpaid($id_transaction, $kode){
    $full_data = $this->M_transaction->get($id_transaction, $kode);
    $data = json_decode($full_data->value);

    //setup data for invoice
    $tag = (object) array(
      'platform'      => "WEB",
      'id_invoice'    => $kode.$id_transaction,
      'agen'          => $this->session->user['kodeAgent'],
      'idpel'         => $data->subid
    );
    $this->session->data_invoice_db = $tag;
    $this->session->data_invoice = $data;

    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'landscape');
    $this->pdf->filename = 'PLN-Postpaid-Invoice-'.$data->KodeReff.'.pdf';
    $this->pdf->load_view('invoice/v_invoice_pln_postpaid');
  }

  /*
  * Method to create .pdf for PLN Prepaid
  */
  private function getInvoicePLNPrepaid($id_transaction, $kode){
    $full_data = $this->M_transaction->get($id_transaction, $kode);
    $data = json_decode($full_data->value);

    //setup data for invoice
    $tag = (object) array(
      'platform'      => "WEB",
      'id_invoice'    => $kode.$id_transaction,
      'agen'          => $this->session->user['kodeAgent'],
      'idpel'         => $data->subid
    );
    $this->session->data_invoice_db = $tag;
    $this->session->data_invoice = $data;

    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'landscape');
    $this->pdf->filename = 'PLN-Prepaid-Invoice-'.$data->KodeReff.'.pdf';
    $this->pdf->load_view('invoice/v_invoice_pln_prepaid');
  }

  /*
  * Formating integer to currency format rupiah
  */
  private function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
  }

  /*
  * Method to get the full name of code from invoice code
  * Later, just add another code and full name.
  */
  private function getProductCode($code){
    $result = "";
    $code = strtolower($code);

    switch ($code) {
      case "bpjskes":
      $result = "BPJS KESEHATAN";
      break;
      default:
      echo "The Current Code: ".$code;
    }

    return $result;
  }

  public function template(){
    // $full_data = $this->M_transaction->get($id_transaction, $kode);
    // $data = json_decode($full_data->value);
    //
    // //setup data for invoice
    // $tag = (object) array(
    //   'platform'      => "WEB",
    //   'id_invoice'    => $kode.$id_transaction,
    //   'agen'          => $this->session->user['kodeAgent'],
    //   'idpel'         => $data->subid
    // );
    // $this->session->data_invoice_db = $tag;
    // $this->session->data_invoice = $data;

    // $full_data = $this->M_transaction->get($id_transaction, $kode);
    // $data = json_decode($full_data->value);

    $this->load->library('pdf');
    $this->pdf->setPaper('A5', 'portrait');
    $this->pdf->filename = 'BPJS-Kesehatan-Invoice-xxyyzz.pdf';
    $this->pdf->load_view('invoice/v_invoice_bpjs_kesehatan');
  }

  public function template2(){
    $this->load->view('invoice/v_invoice_bpjs_kesehatan');

  }
}

?>
