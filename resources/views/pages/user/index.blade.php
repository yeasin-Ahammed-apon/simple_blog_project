@extends('users')
@section('content')
@include('parts.alert_success')
<style>
    .ml2 {
  font-weight: 900;
  font-size: 5em;
  text-align: center;
  padding-top: 10%;
}

.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}
.user_home{
    background: linear-gradient(to bottom, #66ffff 0%, #6699ff 100%);
    height:100%;
    width: 100%t;
    padding:16%;
}
</style>
<div class="user_home">
    <h1 class="ml2">Welcome</h1>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
    // Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [6,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
@endsection