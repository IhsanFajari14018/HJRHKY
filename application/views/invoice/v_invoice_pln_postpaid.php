<!DOCTYPE html>
<html lang="en">
<!-- JUST FOR TESTING PURPOSES -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PLN Postpaid Invoice</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('lib/img/icons/Logo_NURa_transparent.png') ?>" />

  <style type="text/css">

  .tg {
    border-collapse:collapse;
    border-spacing:0;
  }
  .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 10px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:black;}
  .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 10px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:black;}
  .tg .tg-r3w3{
    font-family:"Courier New", Courier, monospace !important;;
    border-color:#000000;
    text-align:left;
    vertical-align:top;
    padding-top: 0px;
    padding-bottom: 0px;
  }
  .tg .tg-72jf{
    font-family:"Courier New", Courier, monospace !important;;
    border-color:#000000;
    text-align:center;
    vertical-align:top;
    padding-top: 0px;
    padding-bottom: 0px;
  }

  .right {
    text-align: right !important;;
  }

  <?php
  $data = file_get_contents(base_url('lib/img/icon/arindo_logo.png'));
  $type = "png";
  $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
  ?>

  body {
    /* background-color: gray; */
    background-image: url(<?php echo $base64 ?>);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: 50% 10%;
    opacity: 0.2;
  }

  <?php $spacing= "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ?>

  </style>
</head>

<body>
  <main>

    <!-- Data Invoice -->
    <?php
      $di = $this->session->data_invoice;
      $data_db = $this->session->data_invoice_db;
    ?>

    <table border="0" class="tg" style="undefined;table-layout: fixed; width: 100%">
      <tr>
        <?php $tag = $data_db->platform.$data_db->id_invoice."/"."CU"."/".$data_db->agen."/".$data_db->idpel; ?>
        <th class="tg-8q56" colspan="7"><?php echo $tag ?></th>
      </tr>
      <tr>
        <!-- empty line spacing -->
        <td></td>
      </tr>
      <tr>
        <th class="tg-r3w3" colspan="4" style="width:10%">PT. BANK NEGARA INDONESIA</th>
        <th class="tg-r3w3" colspan="2" style="width:5%">TGL BYR</th>
        <th class="tg-r3w3">: <?php echo date('d/m/Y') ?></th>
      </tr>
      <tr>
        <td class="tg-r3w3" style="width:13%"></td>
        <td class="tg-r3w3" style="width:2%"></td>
        <td class="tg-r3w3" colspan="5">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; STRUK PEMBAYARAN TAGIHAN LISTRIK</td>
      </tr>
      <tr>
        <td class="tg-r3w3" style="width:13%">IDPEL</td>
        <td class="tg-r3w3" style="width:2%">:</td>
        <td class="tg-r3w3" style="width:17%"><?php echo $di->subid ?></td>

        <!-- Force righten the column -->
        <td class="tg-r3w3" style="width:26%"></td>

        <td class="tg-r3w3" style="width:15%">BL/TH</td>
        <td class="tg-r3w3" style="width:2%">:</td>
        <td class="tg-r3w3"><?php echo $di->billperiode ?></td>
      </tr>
      <tr>
        <td class="tg-r3w3">NAMA</td>
        <td class="tg-r3w3">:</td>
        <td class="tg-r3w3" colspan="2"><?php echo $di->subname ?></td>

        <td class="tg-r3w3">STAND METER</td>

        <!-- <td class="tg-r3w3"></td> -->
        <td class="tg-r3w3">:</td>
        <td class="tg-r3w3"><?php echo $di->Stand ?></td>
      </tr>

      <tr>
        <td class="tg-r3w3">TARIF / DAYA</td>
        <td class="tg-r3w3">:</td>
        <td class="tg-r3w3"><?php echo $di->tarifdaya ?></td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
      </tr>
      <tr>
        <td class="tg-r3w3">RP TAG PLN</td>
        <td class="tg-r3w3">:</td>
        <td class="tg-r3w3">Rp.</td>
        <td class="tg-r3w3 right">
          <?php echo rupiah($di->rptagpln)  ?>
          <?php echo $spacing; ?>
        </td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
      </tr>
      <tr>
        <td class="tg-r3w3">NO REF</td>
        <td class="tg-r3w3">:</td>
        <td class="tg-r3w3" colspan="3"><?php echo $di->KodeReff ?></td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
      </tr>
      <tr>
        <td class="tg-72jf" colspan="7">PLN menyatakan struk ini sebagai bukti pembayaran yang sah.</td>
      </tr>
      <tr>
        <td class="tg-r3w3">ADMIN BANK</td>
        <td class="tg-r3w3">:</td>
        <td class="tg-r3w3">Rp.</td>
        <td class="tg-r3w3 right"><?php echo rupiah($di->admin) ?> <?php echo $spacing; ?></td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
      </tr>
      <tr>
        <td class="tg-r3w3">TOTAL BAYAR</td>
        <td class="tg-r3w3">: </td>
        <td class="tg-r3w3">Rp.</td>
        <td class="tg-r3w3 right"><?php echo rupiah($di->totalbayar) ?> <?php echo $spacing; ?></td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
        <td class="tg-r3w3"></td>
      </tr>
      <tr>
        <td class="tg-72jf" colspan="7"><?php echo $di->Footer1 ?></td>
      </tr>
      <tr>
        <td class="tg-72jf" colspan="7">"<?php echo $di->Footer2 ?>"</td>
      </tr>
    </table>

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
