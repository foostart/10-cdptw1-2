$(document).ready(function() {
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

$star_rating.click( function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();

              // ONE
var $star_rating_one = $('.star-rating-one .fa');

var SetRatingStarOne = function() {
  return $star_rating_one.each(function() {
    if (parseInt($star_rating_one.siblings('input.rating-value-one').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating_one.click( function() {
  $star_rating_one.siblings('input.rating-value-one').val($(this).data('rating'));
  return SetRatingStarOne();
});

SetRatingStarOne();


              // TWO
var $star_rating_two = $('.star-rating-two .fa');

var SetRatingStarTwo = function() {
  return $star_rating_two.each(function() {
    if (parseInt($star_rating_two.siblings('input.rating-value-two').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating_two.click( function() {
  $star_rating_two.siblings('input.rating-value-two').val($(this).data('rating'));
  return SetRatingStarTwo();
});

SetRatingStarTwo();
});