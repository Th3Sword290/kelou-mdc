    <!-- === LOADER === -->

<div class="lloader" id="loader">
<div class="containr">
  <div class="banner">
    LOADING
    <div class="banner-left"></div>
    <div class="banner-right"></div>
  </div>
</div>
</div>

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);



.content {
  display:none;
}

.lloader
{
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  font-family: 'Open Sans';
  color: rgb(204,7,30);
  background-color: rgb(29,29,29);
}

.containr
{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.banner
{
  position: relative;
  padding: 10px 20px;
  animation: loader 1s cubic-bezier(0.5, 0.1, 0.15, 1) alternate infinite;
}

@keyframes loader
{
  0%
  {
    letter-spacing: -1px;
  }
  100%
  {
    letter-spacing: 15px;
  }
}

.banner::before
{
  content: '';
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  transform: skewX(-15deg);
  background-color: #eee;
}

.banner-left, .banner-right
{
  width: 60px;
  height: 100%;
  position: absolute;
  z-index: -2;
  bottom: -30%;
  transform: skewX(-15deg);
  background-color: #ccc;
}

.banner-left
{
  animation: sub-banner-left 1s cubic-bezier(0.5, 0.1, 0.15, 1) alternate infinite;
}

@keyframes sub-banner-left
{
  0%
  {
    right: 82%;
  }
  100%
  {
    right: 90%;
  }
}

.banner-right
{
  animation: sub-banner-right 1s cubic-bezier(0.5, 0.1, 0.15, 1) alternate infinite;
}

@keyframes sub-banner-right
{
  0%
  {
    left: 82%;
  }
  100%
  {
    left: 90%;
  }
}

.banner-left::before, .banner-right::before
{
  content: '';
  width: 0;
  height: 0;
  position: absolute;
  top: -1px;
  border: 22px solid;
  border-color: transparent;
}

.banner-left::before
{
  left: -1px;
  border-left-color: rgb(29,29,29);
}

.banner-right::before
{
  right: -1px;
  border-right-color: rgb(29,29,29);
}

.hide {
    display: none;
}
</style>

<!-- === END OF LOADER'S STYLE ===-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
        $(document).ready(function() {
          console.log("LOADED !");
	        $("#loader").fadeOut(1500);
          $(".content").removeClass('content');
          console.log("WORKS !");
        })
</script>