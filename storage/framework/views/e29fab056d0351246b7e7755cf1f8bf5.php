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
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <table>
                    <tr style="background-color: grey;">
                        <td style="padding: 20px;">Customer name</td>
                        <td style="padding: 20px;">Number</td>
                        <td style="padding: 20px;">Address</td>
                        <td style="padding: 20px;">Product Name</td>
                        <td style="padding: 20px;">Price</td>
                        <td style="padding: 20px;">Quantity</td>
                        <td style="padding: 20px;">Status</td>
                        <td style="padding: 20px;">Action</td>
                    </tr>

                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr align="center" style="background-color: black;">
                        <td style="padding: 20px;"><?php echo e($orders->name); ?></td>
                        <td style="padding: 20px;"><?php echo e($orders->phone); ?></td>
                        <td style="padding: 20px;"><?php echo e($orders->address); ?></td>
                        <td style="padding: 20px;"><?php echo e($orders->product_name); ?></td>
                        <td style="padding: 20px;"><?php echo e($orders->price); ?></td>
                        <td style="padding: 20px;"><?php echo e($orders->quantity); ?></td>
                        <td style="padding: 20px;"><?php echo e($orders->status); ?></td>
                        <td style="padding: 20px;">
                            <a class="btn btn-success" href="<?php echo e(url('updatestatus', $orders->id)); ?>">Delivered</a>
                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>
            </div>
        </div>
          <!-- partial -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH /Users/stephan/Documents/Ecommerce/resources/views/admin/showorder.blade.php ENDPATH**/ ?>