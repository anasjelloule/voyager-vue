@extends('pages.master') 
@section('header')
  @include('partials.head1')
@endsection
 
@section('script')
<script src="js/countUp.min.js"></script>
<script>
  $('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 2500,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});

</script>
@endsection
 
@section('content') {!! $page->body !!}
@endsection