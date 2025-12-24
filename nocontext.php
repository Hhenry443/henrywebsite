<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>NO CONTEXT</title>

<style>
html, body {
  margin: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background: #f1f1ed;
}

/* base layer */
.canvas {
  position: fixed;
  inset: 0;
  background:
    linear-gradient(90deg,
      #f1f1ed 0%,
      #f1f1ed 47%,
      #ff0033 47%,
      #ff0033 49%,
      #0b0b12 49%,
      #0b0b12 100%);
}

/* large intrusive block */
.block-a {
  position: absolute;
  top: 8%;
  left: 12%;
  width: 38%;
  height: 54%;
  background: #00ff66;
  mix-blend-mode: multiply;
}

/* wrong overlay */
.block-b {
  position: absolute;
  top: 42%;
  left: 4%;
  width: 62%;
  height: 22%;
  background: #5c5cff;
  opacity: .85;
}

/* thin violent line */
.line {
  position: absolute;
  top: 0;
  right: 18%;
  width: 3px;
  height: 100%;
  background: #0b0b12;
}

/* organic glitch mass */
.noise {
  position: absolute;
  inset: -20%;
  background:
    repeating-radial-gradient(
      circle at 30% 60%,
      rgba(0,0,0,.08) 0 1px,
      rgba(0,0,0,0) 1px 6px
    );
  mix-blend-mode: multiply;
  animation: drift 18s linear infinite;
}

/* subtle motion — never settles */
@keyframes drift {
  0% { transform: translate(0,0); }
  50% { transform: translate(-2%,1%); }
  100% { transform: translate(0,0); }
}

/* accidental text fragment */
.fragment {
  position: absolute;
  bottom: 6%;
  left: 3%;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 11px;
  letter-spacing: 1px;
  color: #0b0b12;
  opacity: .55;
  user-select: none;
}

/* second fragment, feels unrelated */
.fragment.right {
  left: auto;
  right: 6%;
  top: 9%;
  color: #fff;
  font-size: 10px;
  transform: rotate(-90deg);
}
</style>
</head>

<body>

<div class="canvas"></div>
<div class="block-a"></div>
<div class="block-b"></div>
<div class="line"></div>
<div class="noise"></div>

<div class="fragment">REV_03 / NO CONTEXT</div>
<a class="fragment right" href="/art.php">ART</a>

</body>
</html>
