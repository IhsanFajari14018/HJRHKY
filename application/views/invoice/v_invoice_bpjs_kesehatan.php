<!DOCTYPE html>
<html lang="en">
<!-- JUST FOR TESTING PURPOSES -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BPJS Kesehatan Invoice</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('lib/img/icons/Logo_NURa_transparent.png') ?>" />

  <style type="text/css">
  .tg  {
    border-collapse:collapse;border-spacing:0;
  }

  .tg td{
    font-family:Arial, sans-serif;
    font-size:14px;
    padding:10px 5px;
    border-style:solid;
    border-width:0px;
    overflow:hidden;
    word-break:normal;
    border-color:black;

  }

  .tg th{
    font-family:Arial, sans-serif;
    font-size:14px;
    font-weight:normal;
    padding:10px 5px;
    border-style:solid;
    border-width:0px;
    overflow:hidden;
    word-break:normal;
    border-color:black;
  }

  .tg .tg-c3ow{
    border-color:inherit;
    text-align:center;
    vertical-align:top;
    padding-top:0px;
    padding-bottom: 0px;
  }

  .tg .tg-0pky{
    border-color:inherit;
    text-align:left;
    vertical-align:top;
    padding-top:0px;
    padding-bottom: 0px;
  }

  .spacing{
     padding-top:20px;
  }

  </style>

  <?php
  $data = file_get_contents(base_url('lib/img/icon/arindo_logo.png'));
  $type = "jpg";
  $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
  ?>

  <style>
  body {
    /* background-color: gray; */
    background-image: url(<?php echo $base64 ?>);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: 50% 10%;
    opacity: 0.2;
  }

  <?php //$spacing= "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ?>

  </style>
</head>

<body>
  <main>


    <table class="tg" style="undefined;table-layout: fixed; width: 490px; margin-left:0px">
      <colgroup>
        <!-- <col style="width: 128px">
        <col style="width: 130px">
        <col style="width: 40px">
        <col style="width: 255px"> -->
      </colgroup>
      <tr>
        <th class="tg-c3ow" colspan="4">WEB</th>
      </tr>
      <tr>
        <td class="tg-0pky" style="padding-top:20px;"></td>
        <td class="tg-0pky"></td>
        <td class="tg-c3ow"></td>
        <td class="tg-0pky"></td>
      </tr>
      <tr>
        <td class="tg-c3ow" colspan="4">TES8888</td>
      </tr>
      <tr>
        <td class="tg-c3ow" colspan="4">PPOB ARINDO PRATAMA</td>
      </tr>
      <tr>
        <td class="tg-c3ow" colspan="4">JL. MATRAMAN NO.11 BANDUNG</td>
      </tr>
      <tr>
        <td class="tg-c3ow" colspan="4">STRUK PEMBAYARAN BPJS KESEHATAN</td>
      </tr>
      <tr>
        <td class="tg-0pky" style="padding-top:30px;"></td>
        <td class="tg-0pky"></td>
        <td class="tg-c3ow"></td>
        <td class="tg-0pky"></td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2" style="width:50%">ID TRANS</td>
        <td class="tg-c3ow" style="width:5%">:</td>
        <td class="tg-0pky">XXYYZZ</td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2">TANGGAL</td>
        <td class="tg-c3ow">:</td>
        <td class="tg-0pky">2020-01-09 10:59:47</td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2">NOKA</td>
        <td class="tg-c3ow">:</td>
        <td class="tg-0pky">000111222333</td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2">NAMA</td>
        <td class="tg-c3ow">:</td>
        <td class="tg-0pky">AKMA</td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2">JUMLAH PESERTA</td>
        <td class="tg-c3ow">:</td>
        <td class="tg-0pky">02</td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2">SISA SEBELUMNYA</td>
        <td class="tg-c3ow">:</td>
        <td class="tg-0pky">Rp 0,00</td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2">PERIODE</td>
        <td class="tg-c3ow">:</td>
        <td class="tg-0pky">01 bulan</td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2">JUMLAH TAGIHAN</td>
        <td class="tg-c3ow">:</td>
        <td class="tg-0pky">Rp 204.000,00</td>
      </tr>
      <tr>
        <td class="tg-0pky" style="padding-top:30px;"></td>
        <td class="tg-0pky"></td>
        <td class="tg-c3ow"></td>
        <td class="tg-0pky"></td>
      </tr>
      <tr>
        <td class="tg-c3ow" colspan="4">BPJS KESEHATAN MENYATAKAN STRUK</td>
      </tr>
      <tr>
        <td class="tg-c3ow" colspan="4">INI SEBAGAI BUKTI PEMBAYARAN YANG SAH</td>
      </tr>
      <tr>
        <td class="tg-0pky" style="padding-top:30px;"></td>
        <td class="tg-0pky"></td>
        <td class="tg-c3ow"></td>
        <td class="tg-0pky"></td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2">BIAYA ADMIN</td>
        <td class="tg-c3ow">:</td>
        <td class="tg-0pky">Rp 2.000,00</td>
      </tr>
      <tr>
        <td class="tg-0pky" colspan="2">TOTAL BAYAR</td>
        <td class="tg-c3ow">:</td>
        <td class="tg-0pky">Rp 123.000,00</td>
      </tr>
      <tr>
        <td class="tg-0pky" style="padding-top:30px;"></td>
        <td class="tg-0pky"></td>
        <td class="tg-c3ow"></td>
        <td class="tg-0pky"></td>
      </tr>
      <tr>
        <td class="tg-c3ow" colspan="4">RINCIAN TAGIHAN DAPAT DIAKSES PADA</td>
      </tr>
      <tr>
        <td class="tg-c3ow" colspan="4">www.bpjs-kesehatan.go.id</td>
      </tr>
    </table>

  </main>
  <!--Main layout-->

</body>

</html>


<?php
function rupiah($angka){
  $hasil_rupiah = number_format($angka,0,',','.');
  return $hasil_rupiah;
}
?>
