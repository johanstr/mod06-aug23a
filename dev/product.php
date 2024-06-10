<?php
require_once './src/auth/helper.php';

if(!isset($_GET['product_id'])) {
   header('location: index.php');
   exit();
}

$product_id = intval($_GET['product_id']);
if($product_id <= 0) {
   header('location: index.php');
   exit();
}

require_once './src/Database/Database.php';

$sql = 'SELECT * FROM products WHERE id = :id';
$placeholders = ['id' => $product_id];

Database::query($sql, $placeholders);
$product = Database::get();


require_once './templates/head.inc.php';
?>

   <main class="uk-container uk-padding">
      <div class="uk-grid">
         <section class="uk-width-1">
            <div class="uk-grid uk-card uk-card-default">
               <section class="uk-width-1-2 uk-card-media-left">
                  <img
                     src="<?= $product['image'] ?>"
                     class=""
                     alt=""
                     title="" />
               </section>
               <section class="uk-width-1-2 uk-card-body uk-flex uk-flex-column uk-flex-between">
                  <div class="">
                     <h1>
                        <?= $product['name'] ?>
                     </h1>
                     <p class="">
                        <?= $product['description'] ?>
                     </p>
                  </div>
                  <div class="uk-flex uk-flex-between uk-flex-middle">
                     <div class="price-block">
                        <p class="product-view__price uk-text-bold uk-text-danger uk-text-left uk-text-bolder">
                           &euro; <?= $product['price'] ?>
                        </p>
                     </div>
                     <div>
                        <button class="uk-button uk-button-primary">
                           <span uk-icon="icon: cart"></span>
                           In winkelwagen
                        </button>
                     </div>
                  </div>
               </section>
            </div>
         </section>
      </div>
   </main>

<?php
require_once './templates/foot.inc.php';
