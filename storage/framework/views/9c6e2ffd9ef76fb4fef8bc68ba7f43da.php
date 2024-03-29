<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- partial -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <!-- partial -->

        <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            <?php if(session()->has('message')): ?>

<div class="alert alert-success">

  <button align="center" style="float: right;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;

    </span>
  </button>

  <?php echo e(session()->get('message')); ?>


</div>

<?php endif; ?>
                <table>
                    <tr style="background-color: grey;">
                        <td style="padding: 20px;">Title</td>
                        <td style="padding: 20px;">Description</td>
                        <td style="padding: 20px;">Quantity</td>
                        <td style="padding: 20px;">Price</td>
                        <td style="padding: 20px;">Image</td>
                        <td style="padding: 20px;">Update</td>
                        <td style="padding: 20px;">Delete</td>
                    </tr>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr align="center" style="background-color: black;">
                        <td><?php echo e($product->title); ?></td>
                        <td><?php echo e($product->description); ?></td>
                        <td><?php echo e($product->quantity); ?></td>
                        <td>$<?php echo e($product->price); ?></td>
                        <td>
                            <img height="100px" width="100px" src="/productimage/<?php echo e($product->image); ?>">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo e(url('updateview', $product->id)); ?>">Update</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo e(url('deleteproduct', $product->id)); ?>">Delete</a>
                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>
            </div>
        </div>
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH /Users/stephan/Documents/Ecommerce/resources/views/admin/showproduct.blade.php ENDPATH**/ ?>