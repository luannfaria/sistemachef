
<!DOCTYPE html>
<html lang="en" >

<nav>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">

  <link rel="stylesheet" href="<?php echo site_url('resources/css/jquery-ui-1.10.4.min.css');?>">


<link rel="stylesheet" href="<?php echo site_url('resources/css/styledelivery.css')?>">
  <ul>
    <li><a href="#">Sales</a></li>
    <li><a href="#">+</a></li>
    <li><a href="#">Tunnel</a></li>
    <li><a href="#">Surf</a></li>
    <li><a href="#">Parties</a></li>
  </ul>

  <div class="search">
    <input type="Search" placeholder="Search..." />
  </div>
</nav>

<div class="sellables-container">
  <div class="sellables">
    <div class="cliente">
    </div>
    <div id="categories" class="categories">

      <?php foreach($categoria as $cat) {?>
    <a  data-idcat=<?php echo $cat['idcategoria']?> class="category"><?php echo $cat['nomecategoria']?></a>
    <?php } ?>

    </div>

    <div class="item-group-wrapper">
      <div id="produtolista" class="item-group">

      </div>
    </div>
  </div>

  <div class="register-wrapper">
    <div class="customer">
      <input type="text" placeholder="John Doe" />
    </div>

    <div class="register">
      <div class="products">
        <div class="product-bar selected">
          <span>Cookies</span>
          <span>$5.00</span>
        </div>

        <div class="product-bar">
          <span>Cookies</span>
          <span>$5.00</span>
        </div>

        <div class="product-bar">
          <span>Cookies</span>
          <span>$5.00</span>
        </div>
      </div>

      <div class="pay-button">
        <a href="#">Pay $50.00</a>
      </div>
    </div>
  </div>
</div>


<script  src="<?php echo site_url('resources/js/index.js')?>"></script>
<script src="<?php echo site_url('resources/js/jquery.js');?>"></script>
<script src="<?php echo site_url('resources/js/jquery-ui-1.10.4.min.js');?>"></script>
<script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>


<script>


$('#categories a').click(function(){


   $('#produtolista').empty();
    var $this = $(this);
    var idcat = $this.attr("data-idcat");

    $.ajax({
    type: "POST",
    url:"<?php echo base_url();?>produto/buscaitemporcategoria",
    data:'idcategoria='+idcat,
    dataType:'json',
    success:function(data)
    {






      var len = data.length;



      if(len>0){
      for(var i=0; i<len; i++){

        var span = document.createElement("span");
         var span2 = document.createElement("span");
         span2.className =("preco");
          span.className =("nomeprod");

         var produto = data[i].vendaproduto;
         var idpro = data[i].produto_id;
  var name = data[i].nomeproduto;

        var li = document.createElement('a');

         li.className =("item");
        document.getElementById('produtolista').appendChild(li);
  //li.setAttribute('data-nome',name);
        li.appendChild(span);
       li.appendChild(span2);

        	//		li.innerHTML += name;
         span.innerHTML+=name +'<br/>'+'R$ '+produto;
  

    //    var li = document.createElement("li");
    //  var ul = document.createElement("ul");
        var nome =document.createAttribute("data-nome");
        var venda =document.createAttribute("data-venda");
        var id =document.createAttribute("data-id");
  li.setAttribute('data-nome',name);
  li.setAttribute('data-venda',produto);
  li.setAttribute('data-id',idpro);

  //  var text = data[i].nomeproduto;

  //  nome.value= text;


    //  venda.value=produto;
    //  id.value =  idpro;

  //  span2.appendChild(produto);



  //  document.getElementById("produtolista").appendChild(li);
  //



      }




    }
  }

    });
    return false;

})
</script>
</html>
