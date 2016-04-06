$(function() {

  var ids= $('#tg-0YX8L > tbody  > tr').not(":first").length + 1;

  $(document).on('focus',".datepicker", function(){ //multi datepickers
    $(this).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: 'dd/mm/yy'
    });
  });

  $(document).on('change',".po_id", function(){ 
  	var pid = $(this).val();
    $.get( "api_po.php", { pid: pid } )
      .done(function( data ) {
        data = JSON.parse(data);
        $('.customer_name').val(data.detail.name);
        $('.po_code').val(data.detail.code);
        $('.production_id').val(data.production_id);
        $('.customer_id').val(data.detail.customer_id);
        $("#tg-0YX8L tr:not(:first)").remove();
        $.each(data.lists, function(i, item) {
          // console.log(data.lists[i]);
          code = data.lists[i].code;
          product_id = data.lists[i].product_id;
          qty = data.lists[i].qty;
          duedate = data.lists[i].duedate;
          name = data.lists[i].name;


          var today = new Date(duedate);
          var dd = today.getDate();
          var mm = today.getMonth()+1; //January is 0!

          var yyyy = today.getFullYear();
          if(dd<10){
              dd='0'+dd
          } 
          if(mm<10){
              mm='0'+mm
          } 
          var duedate = dd+'/'+mm+'/'+yyyy;

        if($('#tg-0YX8L tr').length % 2 == 0){
          $html = '<tr><td class=tg-vn4c><input class=inp type=hidden name=pid[] value='+product_id+'>'+ids+'</td>';
          $html += '<td class=tg-vn4c>'+product_id+'</td>';
          $html += '<td class=tg-vn4c>'+name+'</td>';
          $html += '<td class=tg-vn4c><input style="text-align:right;" class="inp qty" type=text name=qty[] readonly value='+qty+'></td>';
          $html += '<td class=tg-vn4c><input id="'+ids+'s" class="inp" readonly type=text name=senddate[] value='+duedate+'></td>';
          $html += '<td class=tg-vn4c><input id="'+ids+'" class="inp datepicker" readonly type=text name=duedate[] value=></td>';
        } else{
          $html = '<tr><td class=tg-031e><input class=inp type=hidden name=pid[] value='+product_id+'>'+ids+'</td>';
          $html += '<td class=tg-031e>'+product_id+'</td>';
          $html += '<td class=tg-031e>'+name+'</td>';
          $html += '<td class=tg-031e><input style="text-align:right;" class="inp qty" type=text name=qty[] readonly value='+qty+'></td>';
          $html += '<td class=tg-031e><input id="'+ids+'s" class="inp " readonly type=text name=senddate[] value='+duedate+'></td>';
          $html += '<td class=tg-031e><input id="'+ids+'" class="inp datepicker" readonly type=text name=duedate[] value=></td>';
        }
        $('#tg-0YX8L tbody').append($html);
        ids++;
        })
      });
  });

});

