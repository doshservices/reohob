

<?php $__env->startSection('content'); ?>

<main id="page-wrapper">
  <div class="container-fluid">
    <div class="page-header d-flex">
      <div class="heading page-header-item">
        <h6 class="h6"><?php echo e(Route::currentRouteName()); ?></h6>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin">Reohob</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              <?php echo e(Route::currentRouteName()); ?>

            </li>
          </ol>
        </nav>
        <br>
        <div>
          <a class="btn btn-primary" href="/admin/create-product">Add Product</a>
        </div>
      </div>
    </div>
    <div class="card card-shadow p-3">
      <h6 class="h6 card-title"><?php echo e(Route::currentRouteName()); ?> List</h6>
      <table id="datatable" class="table table-striped mb-0">
        <thead>
          <tr>
            <!--<th>S/N</th>-->
            <th>SKU</th>
            <th>Name</th>
            <th>Categories</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Date</th>
            <th class="dt-bg-trans"></th>
          </tr>
        </thead>
        <tbody>

        <?php if(count($products)): ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr>
            <!--<td><b><a href="/admin/products/<?php echo e($product->sku); ?>">0</a></b></td>-->
            <td><b><a href="/admin/products/<?php echo e($product->sku); ?>">#<?php echo e($product->sku); ?></a></b></td>
            <td><?php echo e($product->name); ?></td>
            <td>
              <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($cat->name); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td><?php echo e($product->quantity); ?></td>
            <td><?php echo e($product->price); ?></td>

            <td><?php echo e(date('d  M  Y', strtotime($product->created_at))); ?> </td>

            

            <td>
                <a href="/admin/products/<?php echo e($product->sku); ?>/edit" class="mr-3"><i class="fa fa-pencil"></i></a>
                <a href="#" class="delete delete-product" data-id="<?php echo e($product->id); ?>" class="mr-3"><i class="fa fa-trash"></i></a>
            </td>
          </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
          
          
        </tbody>
      </table>
    </div>
    
  </div>
</main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>

$(document).ready(function () {

    // $(".delete-product").click(function (e) {
    $(document).on("click",".delete-product",function(e){
            
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure you want to delete this product?")) {
                $.ajax({
                    url: '/admin/product-remove',
                    method: "DELETE",
                    data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location = "/admin/products";
                    }
                });
            }
    });


        
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/h9t9pt86bnje/Reohob/resources/views/admin/store/products.blade.php ENDPATH**/ ?>