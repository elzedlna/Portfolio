<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Elle's TV UI</title>
        <link href="css/output.css" rel="stylesheet">
        <style>
            .tv-frame {
            background: #111;
            border: 10px solid #222;
            box-shadow: 0 0 60px rgba(0, 255, 255, 0.1);
            }
        </style>
    </head>
    <body class="bg-gray-900 flex items-center justify-center min-h-screen">
        <!-- TV Frame Container -->
        <div class="relative w-[700px] h-[500px] tv-frame rounded-3xl overflow-hidden">

            <!-- Scanlines overlay -->
            <div class="absolute inset-0 bg-[url('assets/scanlines.png')] opacity-10 z-10 pointer-events-none"></div>

            <!-- TV Content -->
            <div class="relative z-20 p-8 text-white flex flex-col h-full justify-between">
            <div>
                <h2 class="text-xl font-mono mb-2">🟢 CHANNEL: HOME</h2>
                <p class="text-2xl font-bold">Hello, Elle here. Welcome to my retro-inspired portfolio.</p>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center">
                <a href="index.php" class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 transition">Back to Landing</a>
                <button onclick="switchChannel()" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600 transition">Switch Channel</button>
            </div>
            </div>
        </div>

        <script>
            function switchChannel() {
                const content = document.querySelector('.tv-frame .z-20');
                content.classList.add('opacity-0');

                setTimeout(() => {
                content.innerHTML = `
                    <div>
                    <h2 class="text-xl font-mono mb-2">🔴 CHANNEL: PROJECTS</h2>
                    <p class="text-2xl font-bold">Here are some projects I’ve worked on recently.</p>
                    </div>
                    <div class="flex justify-between items-center mt-8">
                    <a href="index.php" class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 transition">Back to Landing</a>
                    <button onclick="location.reload()" class="bg-green-500 px-4 py-2 rounded hover:bg-green-600 transition">Back to Home Channel</button>
                    </div>
                `;
                content.classList.remove('opacity-0');
                }, 400);
            }
        </script>
    </body>
</html>
