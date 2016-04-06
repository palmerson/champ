$(function() {

  var ids= $('#tg-0YX8L > tbody  > tr').not(":first").length + 1;

  $(document).on('focus',".datepicker", function(){ //multi datepickers
    $(this).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: 'dd/mm/yy'
    });
  });

  $(document).on('focus',".qty", function(){ //multi datepickers
    $(this).keyup(function() {
      update_amounts();
    });
  });



  $('.myButton').click(function(){
    var pid = $('.pdt').val();
    $.get( "api_product.php", { pid: pid } )
      .done(function( data ) {
        data = JSON.parse(data);
        pid = data[0];
        p_name = data[1];
        price = data[2];
        if($('#tg-0YX8L tr').length % 2 == 0){
          $html = '<tr><td class=tg-vn4c><input class=inp type=hidden name=pid[] value='+pid+'>'+pid+'</td>';
          $html += '<td class=tg-vn4c><input class=inp type=hidden name=p_name[] value='+p_name+'>'+p_name+'</td>';
          $html += '<td class=tg-vn4c><input style="text-align:right;" class="inp qty" type=text name=qty[] ></td>';
          $html += '<td class=tg-vn4c><input class="inp price" type=hidden name=price[] value='+price+'>'+price+'</td>';
          $html += '<td class=tg-vn4c><input id="'+ids+'" class="inp datepicker" type=text name=duedate[] ></td>';
          $html += '<td class=tg-vn4c><input class="inp pdm" type=hidden name=pd_amount[] ><span class="pd_amount">0</td></td></tr>';
        } else{
          $html = '<tr><td class=tg-031e><input class=inp type=hidden name=pid[] value='+pid+'>'+pid+'</td>';
          $html += '<td class=tg-031e><input class=inp type=hidden name=p_name[] value='+p_name+'>'+p_name+'</td>';
          $html += '<td class=tg-031e><input style="text-align:right;" class="inp qty" type=text name=qty[] ></td>';
          $html += '<td class=tg-031e><input class="inp price" type=hidden name=price[] value='+price+'>'+price+'</td>';
          $html += '<td class=tg-031e><input id="'+ids+'" class="inp datepicker" type=text name=duedate[] ></td>';
          $html += '<td class=tg-031e><input class="inp pdm" type=hidden name=pd_amount[] ><span class="pd_amount">0</td></tr>';
        }
        $('#tg-0YX8L tbody').append($html);
        ids++;
      });
  });

});

function update_amounts()
{
    var sum = 0.0;

    $('#tg-0YX8L > tbody  > tr').not(":first").each(function() {
      // console.log($(this));
      var qty = $(this).find('.qty').val();
      var price = $(this).find('.price').val();
      var amount = (qty*price);
      sum+=amount;
      $(this).find('.pd_amount').text(''+amount.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
      $(this).find('.pdm').val(amount.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
    });
    //just update the total to sum  
    var vat = sum*0.07;
    var total_vat = sum*1.07;
    $('.total').val(sum.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
    $('.vat').val(vat.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
    $('.total_vat').val(total_vat.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
}