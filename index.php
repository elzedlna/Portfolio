<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Retro TV UI</title>
  <link href="css/output.css" rel="stylesheet">
  <style>
    body {
      background-color: #FFF8DC;
    }

    .scanlines {
      background: url('assets/scanlines.png');
      mix-blend-mode: overlay;
      opacity: 0.08;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="flex items-center justify-center min-h-screen">

    <!-- TV Box + Box -->
    <div class="relative w-[450px] h-[420px] flex items-center justify-center">
      <!-- TV Box image -->
      <img src="assets/tv-box.png" alt="TV Box" class="absolute inset-0 w-full h-full z-10 pointer-events-none">

      <!-- Screen inside the TV -->
      <div id="tv-box"
        class="absolute top-[130px] left-[60px] w-[300px] h-[190px] mr-8 pr-9 -translate-x-1 bg-black overflow-hidden rounded-[12px] flex items-center justify-center cursor-pointer z-0">
        
        <!-- Static video -->
        <video id="tv-static" class="absolute inset-0 w-full h-full object-cover hidden" autoplay muted></video>

        <!-- Content Wrapper -->
        <div class="relative z-20 flex flex-col items-center justify-center text-center ml-4 w-full h-full">

          <!-- Click instruction -->
          <span id="tv-instruction" class="text-green-400 text-sm">Click Here </span>

          <!-- Scanlines effect -->
          <div class="absolute inset-0 scanlines z-30 pointer-events-none"></div>

          <!-- TV Content (menu) -->
          <div id="tv-content" class="hidden text-green-400 text-xs p-3 font-mono -translate-x-1">
            <h2 class="mb-2">Welcome to Elle's Portfolio</h2>
            <a href="landing.php" class="block hover:underline">🏠 Home</a>
            <a href="#" class="block hover:underline">📁 Projects</a>
            <a href="#" class="block hover:underline">ℹ️ About</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Optional Audio -->
  <!-- <audio id="tv-sound" src="assets/tv-on.mp3"></audio> -->

  <!-- Script -->
  <script>
    const tvBox = document.getElementById('tv-box');
    const tvContent = document.getElementById('tv-content');
    const tvInstruction = document.getElementById('tv-instruction');
    const tvSound = document.getElementById('tv-sound');
    const tvStatic = document.getElementById('tv-static');

    tvBox.addEventListener('click', () => {
      // tvSound.play();
      tvStatic.src = 'assets/tv.mp4';
      tvStatic.classList.remove('hidden');
      tvStatic.currentTime = 0;
      tvStatic.play();

      // Hide instruction text
      tvInstruction.classList.add('hidden');

      setTimeout(() => {
        tvStatic.classList.add('hidden');
        tvContent.classList.remove('hidden');
      }, 1500);
    });
  </script>
</body>
</html>
