
<?php $__env->startSection('content'); ?>


<div class="custom-product">

    <div class="col-sm-6">
        <table class="table table-striped">
            </thead>
            <tbody>
                <tr>
                    <td>Price</td>
                    <td><?php echo e($total); ?>Ruppes</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td><?php echo e($total+100); ?></td>
                </tr>
            </tbody>
        </table>
        <form action="/orderplace" method="POST">
            <div class="form-group">
                <textarea class="form-control"> </textarea>
            </div>
            <div class="form-group">
                <label for="">Payment Method</label>
                <p>
                    <input type="radio" name="payment"><span>Online Payment</span>
                </p>
                <input type="radio" name="payment"><span>EMI Payment</span></p>
                <input type="radio" name="payment"><span>Payment On Delivery</span></p>
            </div>
            <button type="submit" class="btn btn-default">Order Now</button>
        </form>

    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\eComm2\resources\views/ordernow.blade.php ENDPATH**/ ?>