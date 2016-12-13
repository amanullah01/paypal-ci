<div class="row">
    <?php if(!empty($products)): foreach($products as $product): ?>
    <div class="thumbnail">
        <img src="<?php echo base_url().'assets/images/'.$product['image']; ?>" alt="">
        <div class="caption">
            <h4 class="pull-right">$<?php echo $product['price']; ?> USD</h4>
            <h4><a href="javascript:void(0);"><?php echo $product['name']; ?></a></h4>
        </div>
        <a href="<?php echo base_url().'products/buy/'.$product['id']; ?>"><img src="<?php echo base_url(); ?>assets/images/x-click-but01.gif" style="width: 70px;"></a>
    </div>
    <?php endforeach; endif; ?>
    <strong>Test</strong>
</div>