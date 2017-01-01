<?php
    $cdata=$this->cart->contents();
    /*echo '<pre>';
    print_r($cdata);
    exit();*/
?>
<h2><a href="<?php echo base_url();?>"><< Continue Shopping </a> </h2>
<table cellpadding="6" cellspacing="10"  style="width:100%; background-color: white;color:black;" border="1">

<tr>
  <th>QTY</th>
  <th>Image</th>
  <th>Item Name</th>
  <th style="text-align:right">Item Price</th>
  <th style="text-align:right">Sub-Total</th>
</tr>



<?php foreach ($cdata as $items): ?>

	

	<tr>
	  <td>
              <form action="<?php echo base_url();?>cart/update_cart" method="post">
                  <input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
                  <input type="text" name="qty" value="<?php echo $items['qty']; ?>" >
                  <input type="submit" name="btn" value="Update">
              </form>
              <a href="<?php echo base_url();?>cart/delete_item/<?php echo $items['rowid']; ?>">
                  <input type="button" name="btn" value="Remove">
              </a>
          </td>
          <td>
              <img src="<?php echo $items['image']; ?>" width="50" height="50">
          </td>
          <td>
		<?php echo $items['name']; ?>

			

	  </td>
	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">BDT <?php echo $this->cart->format_number($items['subtotal']); ?></td>
	</tr>



<?php endforeach; ?>

<tr>
  <td colspan="2"> </td>
  <td class="right"><strong></strong></td>
  <td>Total</td>
  <td class="right">BDT <?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>
<h2><a href="#">Checkout >></a></h2>
