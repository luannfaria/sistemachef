<?php   require __DIR__ .'/../../third_party/mpdf/mpdf.php';


$mpdf = new mpdf();



	// Insere o conteúdo na nova página do arquivo PDF
	$mpdf->WriteHTML('<!DOCTYPE html>
  <html lang="ar">

  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



      <title>Express Wash Customer Invoice</title>
      <style>
          @media print {
              @page {
                  margin: 0 auto; /* imprtant to logo margin */
                  sheet-size: 300px 250mm; /* imprtant to set paper size */
              }
              html {
                  direction: rtl;
              }
              html,body{margin:0;padding:0}
              #printContainer {
                  width: 250px;
                  margin: auto;
                  padding: 20px;
                  border-style: solid;
                     border-width: 0px 0px 2px 0px;
                     border-color:#000;
                  text-align: justify;

              }







             .text-center{text-align: center;}
          }
      </style>
  </head><body>

  <div id="printContainer">
    <h3 id="slogan" style="margin-top:0" class="text-center">'. $empresa['razaosocial'].'</h3>

    <table>
        <tr>
            <td>MESA: <strong>'.$pedidomesa['numeromesa'].'</strong></td>

        </tr>
        <tr>
            <td>Pedido:  <strong>'.$pedidomesa['idpedidomesa'].'</strong></td>

        </tr>

        <tr>
            <td>Data: <strong>'.$pedidomesa['data'].'</strong></td>

        </tr>
    </table>


  </div>

  <table>

  <tr>
  <td>
  Qtdd
  </td>
  <td>
  Item
  </td>
  <td>
  Subtotal
  </td>
  </tr><tr>
      <td><strong>$item[horapedidoitem]<strong></td>
  <td><strong>$item[quantidade]<strong></td>

  <td><strong>$item[nomeitem]</strong></td>
  <td><strong></strong></td>



</table>
    </body></html>

    ');
	// Gera o arquivo PDF
	$mpdf->Output();
