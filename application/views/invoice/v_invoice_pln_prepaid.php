<!DOCTYPE html>
<html lang="en">
<!-- JUST FOR TESTING PURPOSES -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Invoice PLN Prepaid</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('lib/img/icons/Logo_NURa_transparent.png') ?>" />

  <style type="text/css">

  .tg  {border-collapse:collapse;border-spacing:0;}
  .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:black;}
  .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:black;}
  .tg .tg-8q56{font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif !important;;border-color:#000000;text-align:left;vertical-align:top; padding-top: 0px; padding-bottom: 0px;}
  .tg .tg-mxtm{font-family:"Courier New", Courier, monospace !important;;border-color:inherit;text-align:right;vertical-align:top; padding-top: 0px; padding-bottom: 0px;}
  .tg .tg-jgey{font-size:18px;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif !important;;border-color:inherit;text-align:left;vertical-align:top; padding-top: 0px; padding-bottom: 0px;}
  .tg .tg-83kc{font-size:18px;font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif !important;;border-color:inherit;text-align:center;vertical-align:top; padding-top: 0px; padding-bottom: 0px;}
  .tg .tg-fux9{font-family:"Courier New", Courier, monospace !important;;border-color:#000000;text-align:left;vertical-align:top; padding-top: 0px; padding-bottom: 0px;}
  .tg .tg-iwrf{font-family:"Courier New", Courier, monospace !important;;border-color:#000000;text-align:center;vertical-align:top; padding-top: 0px; padding-bottom: 0px;}
  .tg .tg-z9em{font-family:"Courier New", Courier, monospace !important;;border-color:#000000;text-align:right;vertical-align:top; padding-top: 0px; padding-bottom: 0px;}
  .tg .tg-9gth{font-family:"Courier New", Courier, monospace !important;;border-color:inherit;text-align:left;vertical-align:top; padding-top: 0px; padding-bottom: 0px;}
  .tg .tg-0lax{text-align:left;vertical-align:top}
  .tg .tg-r5us{font-family:"Courier New", Courier, monospace !important;;text-align:center;vertical-align:top ; padding-top: 0px; padding-bottom: 0px;}

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

  </style>
</head>

<body>
  <main>

    <?php
      $data = $this->session->data_invoice;
      $data_db = $this->session->data_invoice_db;
    ?>

    <table class="tg" style="undefined;table-layout: fixed; width: 100%">
      <tr>
        <?php $tag = $data_db->platform.$data_db->id_invoice."/"."CU"."/".$data_db->agen."/".$data_db->idpel; ?>
        <th class="tg-8q56" colspan="7"><?php echo $tag ?></th>
      </tr>
      <tr>
        <!-- Configuring Table Spacing -->
        <td width="11%"></td>
        <td width="2%"></td>
        <td width="25%"></td>
        <td width="25%"></td>
        <td></td>
        <td width="7%"></td>
        <td></td>
      </tr>
      <tr>
        <td class="tg-fux9" colspan="3">PT. BANK NEGARA INDONESIA</td>
        <td class="tg-fux9">/PPOB DEVELOPMENT</td>
        <td class="tg-z9em" colspan="2">TGL PEMBELIAN:</td>
        <td class="tg-fux9"><?php echo date("d/m/Y") ?></td>
      </tr>
      <tr>
        <td class="tg-83kc" colspan="7">STRUK PEMBELIAN LISTRIK PRABAYAR</td>
      </tr>
      <tr>
        <td class="tg-fux9">NO METER</td>
        <td class="tg-fux9">:</td>
        <td class="tg-fux9"><?php echo $data->subid; ?></td>
        <td class="tg-fux9"></td>
        <td class="tg-fux9">MATERAI</td>
        <td class="tg-fux9">: Rp.</td>
        <td class="tg-z9em"><?php echo rupiah($data->materai/100); ?></td>
      </tr>
      <tr>
        <td class="tg-fux9">IDPEL</td>
        <td class="tg-fux9">:</td>
        <td class="tg-fux9"><?php echo $data->idpel; ?></td>
        <td class="tg-fux9"></td>
        <td class="tg-fux9">PPN</td>
        <td class="tg-fux9">: Rp.</td>
        <td class="tg-z9em"><?php echo rupiah($data->ppn/100); ?></td>
      </tr>
      <tr>
        <td class="tg-fux9">NAMA</td>
        <td class="tg-fux9">:</td>
        <td class="tg-fux9"><?php echo $data->subname; ?></td>
        <td class="tg-fux9"></td>
        <td class="tg-fux9">PPJ</td>
        <td class="tg-fux9">: Rp.</td>
        <td class="tg-z9em"><?php echo rupiah($data->ppj/100); ?></td>
      </tr>
      <tr>
        <td class="tg-fux9">TARIF/DAYA</td>
        <td class="tg-fux9">:</td>
        <td class="tg-fux9"><?php echo $data->tarifdaya; ?></td>
        <td class="tg-fux9"></td>
        <td class="tg-fux9">ANGSURAN</td>
        <td class="tg-fux9">: Rp.</td>
        <td class="tg-z9em"><?php echo rupiah($data->angsuran/100); ?></td>
      </tr>
      <tr>
        <td class="tg-9gth">NO REF</td>
        <td class="tg-9gth">:</td>
        <td class="tg-9gth" colspan="2"><?php echo $data->KodeReff; ?></td>
        <td class="tg-9gth">RP STROOM/TOKEN</td>
        <td class="tg-9gth">: Rp.</td>
        <td class="tg-mxtm"><?php echo rupiah($data->rptoken/100); ?></td>
      </tr>
      <tr>
        <td class="tg-9gth">RP BAYAR</td>
        <td class="tg-9gth">:</td>
        <td class="tg-9gth">Rp. <?php echo rupiahNoDecimal($data->totalbayar/100); ?></td>
        <td class="tg-9gth"></td>
        <td class="tg-9gth">JML KWH</td>
        <td class="tg-9gth">: Rp.</td>
        <td class="tg-mxtm"><?php echo rupiahKWH($data->jmlkwh/100)."&nbsp;"; ?>  </td>
      </tr>
      <tr>
        <td class="tg-9gth"></td>
        <td class="tg-9gth"></td>
        <td class="tg-9gth"></td>
        <td class="tg-9gth"></td>
        <td class="tg-9gth">ADMIN BANK</td>
        <td class="tg-9gth">: Rp.</td>
        <td class="tg-mxtm"><?php echo rupiahNoDecimal($data->admin/100); ?></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td class="tg-jgey" colspan="7">STROOM/TOKEN : <?php echo space($data->token); ?></td>
      </tr>
      <tr>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
        <td class="tg-0lax"></td>
      </tr>
      <tr>
        <td class="tg-r5us" colspan="7"><?php echo $data->Footer1." ".$data->telppln; ?></td>
      </tr>
    </table>

  </main>
  <!--Main layout-->

</body>

</html>


<?php
function rupiah($angka){
  $hasil_rupiah = number_format($angka,2,',','.');
  return $hasil_rupiah;
}

function rupiahNoDecimal($angka){
  $hasil_rupiah = number_format($angka,0,',','.');
  return $hasil_rupiah;
}

function rupiahKWH($angka){
  $hasil_rupiah = number_format($angka,1,',','.');
  return $hasil_rupiah;
}

function space($token){
  $token = substr_replace($token, ' ', 4, 0);
  $token = substr_replace($token, ' ', 9, 0);
  $token = substr_replace($token, ' ', 14, 0);
  $token = substr_replace($token, ' ', 19, 0);
  return $token;
}
?>
