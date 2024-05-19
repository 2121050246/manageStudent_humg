




$('.btn').on('click', function() {
    $(this).find('ul').toggleClass('d-none');
    $(this).find('[aria-expanded]').attr('aria-expanded', function(i, attr) {
      return attr == 'true' ? 'false' : 'true';
    });
  });


