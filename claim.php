<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eliz Edlina - Front-end Developer</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body class="bg-amber-50 mb-10">
    
  <!-- Section 1 -->
    <section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
        <nav class="absolute top-0 left-0 w-full z-30 flex justify-between items-center px-8 py-4 text-black">
            <div class="font-semibold text-lg">Eliz Edlina</div>
            <ul class="flex space-x-6 text-sm md:text-base">
                <li><a href="landing.php" class="hover:underline">Home</a></li>
                <li><a href="landing.php#intro" class="hover:underline">Introduction</a></li>
                <li><a href="landing.php#projects" class="hover:underline">Projects</a></li>
            </ul>
        </nav>
        <div>
            <h1 class="text-5xl pb-8 text-indigo-800" style="font-family: 'Permanent Marker', cursive; opacity:0.6;">Claim Form</h1>
                <div class="relative w-full h-90 bg-gray-200 mt-4 transition-transform duration-300 ease-in-out hover:scale-105">
                    <img src="assets/claim/img-8.png" alt="Main work" class="w-full h-full object-cover rounded" />
                    <img src="/assets/claim/v-1.svg" 
                    class="absolute -top-6 -left-6 w-50 h-20 z-10" 
                    alt="corner squiggle" />

                    <img src="assets/claim/v-2.svg" 
                        alt="Bottom right squiggle" 
                        class="absolute -bottom-6 -right-6 w-50 h-20 z-10 rotate--180 pointer-events-none" />
                </div>
        </div>
        <div class = "text-indigo-800 mt-20">
            <h2 class="text-2xl font-serif pb-4 mt-2 leading-relaxed">A brief</h2>
            <p class="text-base leading-relaxed mb-6">
                A project during my internship. I was given the task to develop and design a claim form for the internal staff,
                spefically for the HR Management. 
            </p>
            <p class="text-base leading-relaxed">
                I was pretty pscyhed, because it was related in developing for the entire company.
                The design and layout are simple, but users can navigate through easily.
            </p>
        </div>
  </section>

  <!-- Section 2 -->
  <section class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10">
    <div class = "text-indigo-800">
      <h2 class="text-2xl font-serif pb-4 leading-relaxed">My work</h2>
      <p class="leading-relaxed mb-6">
       Before the claim form was developed, staffs had to use manual excel sheet to key in
       the claims, yeah I'd say thats pretty tedious.
      </p>
      <p class="text-base leading-relaxed mb-6">
       I found my inspos through pinterest, and of course, some thoughts and ideas 
       from the UI/UX developer too.
      </p>
      <p class="text-base leading-relaxed">
        It is meant to integrate with the company  employee engagement web-based application 
        that streamlines scheduling, payroll, communication, and performance feedback.
      </p>
      <div class="w-full h-50 ">
            <img src="assets/claim/img-10.png">
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div class="w-full h-60 transition-transform duration-300 ease-in-out hover:scale-105">
            <img src="assets/claim/img-2.png">
        </div>
        <div class="w-full h-70 transition-transform duration-300 ease-in-out hover:scale-105">
            <img src="assets/claim/img-4.png">
        </div>
        <div class="w-full h-60 transition-transform duration-300 ease-in-out hover:scale-105">
            <img src="assets/claim/img-3.png">
        </div>
        <div class="w-full h-70  transition-transform duration-300 ease-in-out hover:scale-105">
            <img src="assets/claim/img-6.png">
        </div>
    </div>
  </section>

</body>
</html>
