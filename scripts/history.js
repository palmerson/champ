$(function() {

  db_ = $('.db').val();
  if(db_ == 'po'){
      $('.po_id').prop('disabled', false);
      $('.po_id').show();
      $('.customer_id').prop('disabled', false);
      // $(".customer_id option:selected").prop("selected", false);
      $('.pdt').prop('disabled', 'disabled');
      $(".pdt option:selected").prop("selected", false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.hd').text('ใบสั่งขาย');
      $('.head').text('รายงานใบสั่งขาย');
      $('.lc').text('เลขที่ใบ P/O - LC');
      $('.mo_id').prop('disabled', 'disabled');
      $(".mo_id option:selected").prop("selected", false);
      $(".mo_id").hide();
    }
    else if(db_ == 'mo'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $('.po_id').hide();
      $('.customer_id').prop('disabled', false);
      // $('.customer_id').prop('disabled', 'disabled');
      // $('.customer_id option:selected').prop('selected', false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.po_id').val('');
      $('.hd').text('สั่งผลิต');
      $('.head').text('รายงานใบสั่งผลิต');
      $('.lc').text('เลขที่ใบสั่งผลิต');
      $('.mo_id').prop('disabled', false);
      $('.mo_id').show();
    }
    else if(db_ == 'ro'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $('.po_id').show();
      $('.customer_id').prop('disabled', 'disabled');
      $(".customer_id option:selected").prop("selected", false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.po_id').val('');
      $('.hd').text('รับเข้าสต๊อก');
      $('.head').text('รายงานรับเข้าสต๊อก');
      $('.lc').text('เลขที่ใบ P/O - LC');
      $('.mo_id').prop('disabled', 'disabled');
      $(".mo_id option:selected").prop("selected", false);
      $(".mo_id").hide();
    }
    else if(db_ == 'so'){
      $('.po_id').prop('disabled', false);
      $(".po_id option:selected").prop("selected", false);
      $('.po_id').show();
      $('.customer_id').prop('disabled', false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.datepicker').val('');
      $('.po_id').val('');
      $('.hd').text('ตัดสต๊อก');
      $('.head').text('รายงานตัดสต๊อก');
      $('.lc').text('เลขที่ใบ P/O - LC');
      $('.mo_id').prop('disabled', 'disabled');
      $(".mo_id option:selected").prop("selected", false);
      $(".mo_id").hide();
      // $("#tg-0YX8L").remove();
    }

  $('.db').change(function() {
    db = $(this).find(":selected").val();
    if(db == 'po'){
      $('.po_id').prop('disabled', false);
      $('.po_id').show();
      $('.customer_id').prop('disabled', false);
      // $(".customer_id option:selected").prop("selected", false);
      $('.pdt').prop('disabled', 'disabled');
      $(".pdt option:selected").prop("selected", false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.datepicker').val('');
      $('.hd').text('ใบสั่งขาย');
      $('.head').text('รายงานใบสั่งขาย');
      $('.lc').text('เลขที่ใบ P/O - LC');
      $('.mo_id').prop('disabled', 'disabled');
      $(".mo_id option:selected").prop("selected", false);
      $(".mo_id").hide();
      $("#tg-0YX8L").remove();
    }
    else if(db == 'mo'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $(".po_id").hide();
      $('.customer_id').prop('disabled', false);
      // $('.customer_id').prop('disabled', 'disabled');
      // $('.customer_id option:selected').prop('selected', false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.datepicker').val('');
      $('.po_id').val('');
      $('.hd').text('สั่งผลิต');
      $('.head').text('รายงานใบสั่งผลิต');
      $('.lc').text('เลขที่ใบสั่งผลิต');
      $('.mo_id').prop('disabled', false);
      $('.mo_id').show();
      $("#tg-0YX8L").remove();
    }
    else if(db == 'ro'){
      $('.po_id').prop('disabled', 'disabled');
      $(".po_id option:selected").prop("selected", false);
      $('.po_id').show();
      $('.customer_id').prop('disabled', 'disabled');
      $(".customer_id option:selected").prop("selected", false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.datepicker').val('');
      $('.po_id').val('');
      $('.hd').text('รับเข้าสต๊อก');
      $('.head').text('รายงานรับเข้าสต๊อก');
      $('.lc').text('เลขที่ใบ P/O - LC');
      $('.mo_id').prop('disabled', 'disabled');
      $(".mo_id option:selected").prop("selected", false);
      $(".mo_id").hide();
      $("#tg-0YX8L").remove();
    }
    else if(db == 'so'){
      $('.po_id').prop('disabled', false);
      $(".po_id option:selected").prop("selected", false);
      $('.po_id').show();
      $('.customer_id').prop('disabled', false);
      $('.pdt').prop('disabled', false);
      $('.from').prop('disabled', false);
      $('.to').prop('disabled', false);
      $('.datepicker').val('');
      $('.po_id').val('');
      $('.hd').text('ตัดสต๊อก');
      $('.head').text('รายงานตัดสต๊อก');
      $('.lc').text('เลขที่ใบ P/O - LC');
      $('.mo_id').prop('disabled', 'disabled');
      $(".mo_id option:selected").prop("selected", false);
      $(".mo_id").hide();
      $("#tg-0YX8L").remove();
    }
  });

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
    $('.head').css('color','#000');
    divToPrint = $("#u3828").html();
    w = window.open();
    w.document.writeln(divToPrint);
    location.reload();
    w.print();
    w.close();
  }

