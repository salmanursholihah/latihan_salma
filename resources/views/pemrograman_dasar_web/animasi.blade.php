<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animasi</title>
<style>
@keyframes slide {
  0% {
    left: 0;
    top: 0;
  }
  50% {
    left: 244px;
    top: 100px;
  }
  100% {
    left: 488px;
    top: 0;
  }
}
.stage {
  background: #eaeaed;
  border-radius: 6px;
  height: 150px;
  position: relative;
  min-width: 538px;
}
.stage:hover .ball {
  animation-name: slide;
  animation-duration: 2s;
  animation-timing-function: ease-in-out;
  animation-delay: .5s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}
.ball {
  background: #2db34a;
  border-radius: 50%;
  height: 50px;
  position: absolute;
  width: 50px;
}
</style>
</head>
<body>
<div class="stage">
  <figure class="ball"></figure>
    </div>
</body>
</html>
