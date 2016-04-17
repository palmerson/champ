$(function() {
		   
  $(document).on('focus',".datepicker", function(){ //multi datepickers
    $(this).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: 'dd/mm/yy'
    });
  });
		   	   
  
  $(document).on('focus',".cal_so", function(){ //multi datepickers
    $(this).keyup(function() {
      //console.log($(this).parent().parent().find('.qty').text());
    var qty = $(this).parent().parent().find('.total2').val();
      var stock = $(this).parent().parent().find('.cal_so').val();
      var amount = qty-stock;
    // console.log('qty'+ qty + 'stock'+ stock + 'amount'+ amount);
      if(amount<0){
        alert('ใส่จำนวนตัดสินค้าไม่ถูกต้อง');
        $(this).val(0);
        $(this).parent().parent().find('.total').val(qty);
        return false;
      }
      else{
        $(this).parent().parent().find('.total').val(amount);
      }
      if(stock==0){
        amount = $(this).parent().parent().find('.qty').text();
        $(this).parent().parent().find('.total').val(amount);
      }
    //update_amounts(this);
    });
  });
});  

function update_amounts(value)
{
      //console.log($(value));
	  $('#tg-0YX8L > tbody  > tr').not(":first").each(function() {
      var qty = $(value).find('.qty').val();
      var stock = $(value).find('.cal_so').val();
      var amount = (qty-stock);
	  // console.log(amount);
      $(value).find('.total').val(amount);
	  });
}