<!DOCTYPE html>
<html lang="ar">

<head>
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
#invoice-POS{
  width: 250px;
  margin: auto;
  padding: 10px;
  border-style: solid;
     border-width: 0px 0px 2px 0px;
     border-color:#000;


}
  ::selection {
    background: #f31544;
    color: #fff;
  }
  ::moz-selection {
    background: #f31544;
    color: #fff;
  }
  h1 {
    font-size: 1.5em;
    color: #222;
  }
  h2 {
    font-size: 0.9em;
  }
  h3 {
    font-size: 1.3em;
    font-weight: 300;
    line-height: 2.4em;
  }
  h4{
    font-size: 0.6em;
  }
  }
  p {
    font-size: 0.7em;
    color: #666;
    line-height: 1.2em;
  }

  #top,
  #mid,
  #bot {
    /* Targets all id with 'col-' */
    border-bottom: 1px solid #eee;
  }

  #top {
    min-height: 40px;
  }
  #mid {
    min-height: 80px;
  }
  #bot {
    min-height: 50px;
  }

  #top .logo {
    //float: left;
    height: 40px;
    width: 40px;
    background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
    background-size: 60px 60px;
  }
  .clientlogo {
    float: left;
    height: 60px;
    width:100%;
    background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
    background-size: 60px 60px;
    border-radius: 50px;
  }
  .info {
    text-align: center;

    margin-left: 0;
  }
  .title {

   }
  .title p {
    text-align: right;
  }
  table {
    width: 100%;
    border-collapse: collapse;

  }
.cabecalho span{
  font-size: 0.9em;
  color: #000;
  font-weight:bold;
  font-family: "Roboto", sans-serif;
}
  td {
    //padding: 5px 0 5px 15px;
    //border: 1px solid #EEE
  }
  .tabletitle {
    //padding: 5px;
    font-size: 0.6em;
  color: #000;
  font-weight:bold;
  text-transform:uppercase;
  border-width: 1px 0px 1px;

  border-style: solid;


  border-color:#000;
  }
  .grid{
text-align: right;
    border-width: 1px 0px 0px;

    border-style: solid;


    border-color:#000;

margin-top:1.5em;
margin-bottom:1.5em;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;

  }
  .grid2{


text-align: right;
margin-top:1.5em;
margin-bottom:1.5em;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;

  }
  .grid span{



    align-items: center;
    justify-content: center;
    height: 1.4em;
    color: #000;
    text-decoration: none;
    font-size: 0.8em;
  }
  .service {
    border-bottom: 1px solid #eee;
    padding: 4px;

  }
  .item {
    width: 34mm;
font-size: 0.7em;
  }
  .hours{
      width: 12mm;
    font-size: 0.7em;
text-align: left;
  }
  .rate{
      width: 16mm;
font-size: 0.7em;
text-align: center;

  }
  .itemtext {
    font-size: 0.8em;
    color: #000;
    font-weight:bold;
    font-family: "Roboto", sans-serif;
    text-align: center;
  }

  #legalcopy {
    margin-top: 5mm;
  }

}

</style>
</head>

<body>



  <div id="invoice-POS">

    <center id="top">

      <div class="info">
        <h4>**** DOCUMENTO NÃO FISCAL ****</h4>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->

    <div id="mid">
        <div class="logo"></div>
      <div class="info">
        <h2> <?php echo  $empresa['razaosocial'] ?></h2>




      </div>
      <div class="cabecalho">
          <span>MESA: <?php echo  $pedidomesa['numeromesa'] ?></span><br/>


          <span>Pedido : <?php echo  $pedidomesa['idpedidomesa'] ?></span>

      </div>
    </div><!--End Invoice Mid-->

    <div id="bot">

					<div id="table">
						<table>



							<tr class="tabletitle">
								<td class="item"><h3>Item</h3></td>
								<td class="hours"><h3>Qtde</h3></td>
								<td class="rate"><h3>Total</h3></td>
							</tr>

    <?php foreach($itenspedidomesa as $item){ ?>
							<tr class="service">
								<td class="tableitem"><p class="itemtext"><?php echo $item['nomeitem']; ?></p></td>
								<td class="tableitem"><p class="itemtext"><?php echo $item['quantidade']; ?></p></td>
								<td class="tableitem"><p class="itemtext">R$ <?php echo number_format((float)$item['preco'],2,'.',''); ?></p></td>
							</tr>
<?php } ?>
<?php
    $idpedido =$pedidomesa['idpedidomesa'];
 $this->load->helper("funcoes");
 $troco =0;

 $desconto=0;
$total = subtotal($idpedido);
$valortaxa = valortaxa($idpedido);
$valorpago = pago($idpedido);
$desconto = valordescontomesa($idpedido);
?>



						</table>

					</div><!--End Table-->
<div class="grid">

  <span>Serviço</span>
  <span>R$ <?php echo $valortaxa?></span><br/>


  <span></span>
  <span>Desconto</span>
  <span>R$ <?php echo $desconto?></span><br/>


  <span></span>
  <span><strong>Total</strong></span>
  <span><strong>R$ <?php echo $total?></strong></span>

</div>

<div class="grid2">
  <span></span>
  <span>Pago</span>
  <span>R$ <?php echo $valorpago?></span>
  <span></span>
  <span>A pagar</span>
  <span>R$ <?php echo $desconto?></span>


</div>
					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
</body>
