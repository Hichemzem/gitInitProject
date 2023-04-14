<?php include("model/database.php") ?>
<?php include("model/product.php") ?>
<?php include("layout/header.php") ?>
<?php include("layout/nav.php") ?>

<?php 
    //traitement et récupération de données

    $db = db_connect();  //connexion a la base de données
    $products=product_get_all($db);

    $product = product_get_one($db,1);
    var_dump($product);

    product_delete($db,2);
    

    

    
?>
  
    <?php foreach ($products as $product) { var_dump($product) ?>
    <div class="content">
        <div class="article" id="testdiv1" >
            <h2><?php echo $product['product_name']?></h2>
            <img src="public/img/280.jpg">            
            <p><?php echo $product['product_detail'] ?></p> 
            <button>Voir plus</button>
            <a href="art_info.html">Detailss</a>
        </div>  
        
        <?php }?>
    
        

            
    </div>

    <?php include("layout/footer.php") ?>


