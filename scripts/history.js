$(function() {

  // $('.po_id').prop('disabled', false);
  // $('.customer_id').prop('disabled', false);
  // $('.pdt').prop('disabled', false);
  // $('.from').prop('disabled', false);
  // $('.to').prop('disabled', false);

  db_ = $('.db').val();
  if(db_ == 'po'){
      $('.po_id').prop('disabled', false);
      $('.customer_id').prop('disabled', 'disabled');
      $(".customer_id option:selected").prop("selected", false);
      $('.pdt').prop('disabled', 'disabled');
      $(".pdt option:selected").prop("selected", false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.hd').text('ใบสั่งขาย');
       $('.head').text('รายงานใบสั่งขาย');
    }
    else if(db_ == 'mo'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $('.customer_id').prop('disabled', false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.po_id').val('');
      $('.hd').text('สั่งผลิต');
      $('.head').text('รายงานใบสั่งผลิต');
    }
    else if(db_ == 'ro'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $('.customer_id').prop('disabled', 'disabled');
      $(".customer_id option:selected").prop("selected", false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.po_id').val('');
      $('.hd').text('รับเข้าสต๊อก');
      $('.head').text('รายงานรับเข้าสต๊อก');
    }
    else if(db_ == 'so'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $('.customer_id').prop('disabled', false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.po_id').val('');
      $('.hd').text('ตัดสต๊อก');
      $('.head').text('รายงานตัดสต๊อก');
    }

  $('.db').change(function() {
    db = $(this).find(":selected").val();
    if(db == 'po'){
      $('.po_id').prop('disabled', false);
      $('.customer_id').prop('disabled', 'disabled');
      $(".customer_id option:selected").prop("selected", false);
      $('.pdt').prop('disabled', 'disabled');
      $(".pdt option:selected").prop("selected", false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.hd').text('ใบสั่งขาย');
      $('.head').text('รายงานใบสั่งขาย');
    }
    else if(db == 'mo'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $('.customer_id').prop('disabled', false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.po_id').val('');
      $('.hd').text('สั่งผลิต');
      $('.head').text('รายงานใบสั่งผลิต');
    }
    else if(db == 'ro'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $('.customer_id').prop('disabled', 'disabled');
      $(".customer_id option:selected").prop("selected", false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.po_id').val('');
      $('.hd').text('รับเข้าสต๊อก');
      $('.head').text('รายงานรับเข้าสต๊อก');
    }
    else if(db == 'so'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $('.customer_id').prop('disabled', false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.po_id').val('');
      $('.hd').text('ตัดสต๊อก');
      $('.head').text('รายงานตัดสต๊อก');
    }
  });
  // var ids= $('#tg-0YX8L > tbody  > tr').not(":first").length + 1;

  $(document).on('focus',".datepicker", function(){ //multi datepickers
    $(this).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: 'dd/mm/yy'
    });
  });

});

function printDiv() {
    $("#tg-0YX8L th:last-child, #tg-0YX8L td:last-child").remove();
    divToPrint = $("#u3828").html();
    w = window.open();
    w.document.writeln(divToPrint);
    location.reload();
    w.print();
    w.close();

    // finHtml = divToPrint.find("#tg-0YX8L th:last-child, #tg-0YX8L td:last-child").remove();
    // console.log(divToPrint.find("#tg-0YX8L th:last-child, #tg-0YX8L td:last-child").remove());
  }

