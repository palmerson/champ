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
    var qty = $(this).parent().parent().find('.qty').text();
      var stock = $(this).parent().parent().find('.cal_so').val();
      var amount = qty-stock;
    // console.log('qty'+ qty + 'stock'+ stock + 'amount'+ amount);
      if(amount<0){
        alert('ใส่จำนวนตัดสินค้าไม่ถูกต้อง');
        $(this).val(0);
        return false;
      }
      else{
        $(this).parent().parent().find('.total').val(amount);
      }
    //update_amounts(this);
    });
  });
  
  
  
  $(".target").change(function() {
	var Selected = $(this).find("option:selected");
	var rel = $(this).find("option:selected").attr('rel');
     //$('#product_name').val(rel);
	$.get("api_so.php",
    {
        po_id: Selected.val(),
    },
    function(data, status){
		var info = JSON.parse(data);
		//$('#tg-0YX8L tr').html('');
		$('.code').val(info.detail.po_code);
		$('#cut_stock').attr('action','action_so.php?po_id='+info.detail.po_id);
		$("#tg-0YX8L tr:not(:first)").remove();
		$.each(info.lists, function(key,value) {
		   key = key + 1;
		   product_id = value.product_id;
		   product_name = value.name;
       qty = value.qty;
       total = value.qty;
       stock = 0;
       if(value.total != undefined){
        total = value.total;
       }
       if(value.stock != undefined){
        stock = value.stock;
       }
       // total = value.total;
		   // stock = value.stock;
		   
		   if($('#tg-0YX8L tr').length % 2 == 0){
			   $html = '<tr><td class=tg-vn4c>'+key+'</td>';
               $html += '<td class=tg-vn4c><input type=hidden name=product_id[] value='+product_id+'>'+product_id+'</td>';
               $html += '<td class=tg-vn4c>'+product_name+'</td>';
			   $html += '<td class="tg-vn4c qty"><input type=hidden name=qty[] value='+qty+'><input class=tt type=hidden name=tt[] value='+total+'>'+qty+'</td>';
			   $html += '<td class=tg-vn4c><input style="text-align:right;" class="total" name=total[] type="text" readonly value='+total+'></td>';
			   $html += '<td class=tg-vn4c><input style="text-align:right;" class="cal_so" name=stock[] type="text" value=0></td></tr>';
		   }else{
			   $html = '<tr><td class=tg-031e>'+key+'</td>';
               $html += '<td class=tg-031e><input type=hidden name=product_id[] value='+product_id+'>'+product_id+'</td>';
               $html += '<td class=tg-031e>'+product_name+'</td>';
			   $html += '<td class="tg-031e qty"><input type=hidden name=qty[] value='+qty+'><input class=tt type=hidden name=tt[] value='+total+'>'+qty+'</td>';
			   $html += '<td class=tg-031e><input style="text-align:right;" class="total" name=total[] type="text" readonly value='+total+'></td>';
			   $html += '<td class=tg-031e><input style="text-align:right;" class="cal_so" name=stock[] type="text" value=0></td></tr>';
		   }
		   $('#tg-0YX8L tbody').append($html);
		   
        }); 
        //console.log(info.lists[0]);
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