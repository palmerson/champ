$(function() {
		   
  $(document).on('focus',".datepicker", function(){ //multi datepickers
    $(this).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: 'dd/mm/yy'
    });
  });
		   
		   

  $(".target").change(function() {
	var optionSelected = $(this).find("option:selected");
	var rel = $(this).find("option:selected").attr('rel');
     $('#product_name').val(rel);
  });
 
});