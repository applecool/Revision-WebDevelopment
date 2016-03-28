/*Using Jquery*/
/*$(':checkbox').on('change', function() {
  $(this).closest('tr').find(':checkbox').prop('checked', this.checked);
});*/

/*Using class*/
$('.checking').on('change', function() {
  $(this).closest('tr').find('.checking').prop('checked', this.checked);
});


/*Using JavaScript*/
/*
var checkboxes = document.querySelectorAll('[type="checkbox"]');
[].forEach.call(checkboxes, function(checkbox) {
  checkbox.onchange = function() {
    var currentRow = this.parentNode.parentNode;
    var cbElems = currentRow.querySelectorAll('[type="checkbox"]');
    [].forEach.call(cbElems, function(cb) {
      cb.checked = this.checked;
    }.bind(this))
  };
}); */