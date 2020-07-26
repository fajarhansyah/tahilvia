<footer id="footer" class="footer">
  <div class=" text-center">
    ©2016 Mentor Theme. All rights reserved
  </div>
</footer>
<!--/ Footer-->

<script src="<?php echo base_url() ?>assets2/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets2/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>assets2/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets2/js/custom.js"></script>
<script src="<?php echo base_url() ?>assets2/contactform/contactform.js"></script>
  <script>
     var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});
  </script>
</body>

</html>
