<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>SHAIMEURCoders | Pedagogical Excellence</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#a1e619",
            "background-light": "#fdfdfb",
            "background-dark": "#1c2111",
            "paper-border": "#dcded4",
            "academic-blue": "#7a98a6",
            "academic-olive": "#5b6b3e",
          },
          fontFamily: {
            "display": ["Lexend", "sans-serif"]
          },
        },
      },
    }
  </script>
  <style>
    @keyframes shimmer {
      0% {
        background-position: -200% 0;
      }

      100% {
        background-position: 200% 0;
      }
    }

    .brand-shimmer {
      background: linear-gradient(90deg, #5b6b3e 0%, #a1e619 25%, #5b6b3e 50%, #a1e619 75%, #5b6b3e 100%);
      background-size: 200% auto;
      color: transparent;
      -webkit-background-clip: text;
      background-clip: text;
      animation: shimmer 5s infinite linear;
      display: inline-block;
    }

    .glass-panel {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(161, 230, 25, 0.2);
    }

    @keyframes float {
      0% {
        transform: translateY(0px) rotate(0deg);
      }

      50% {
        transform: translateY(-20px) rotate(2deg);
      }

      100% {
        transform: translateY(0px) rotate(0deg);
      }
    }

    .float-element {
      animation: float 6s ease-in-out infinite;
    }
  </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 overflow-hidden">
  <!-- Hero Background Decorations -->
  <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-20">
    <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary rounded-full blur-[120px]"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-academic-blue rounded-full blur-[120px]"></div>
  </div>

  <!-- Main Landing Container -->
  <div class="relative h-screen flex flex-col items-center justify-center p-8">
    <!-- Brand identity -->
    <div class="flex items-center gap-4 mb-2 float-element">
      <div class="size-16 bg-primary rounded-2xl flex items-center justify-center shadow-2xl shadow-primary/40">
        <span class="material-symbols-outlined text-4xl font-black text-background-dark">school</span>
      </div>
    </div>

    <h1 class="text-7xl md:text-8xl font-black tracking-tighter text-center leading-[0.9] mb-6">
      <span class="brand-shimmer">SHAIMEUR</span><br />
      <span class="text-slate-900 dark:text-white">Coders</span>
    </h1>

    <p class="text-xl md:text-2xl text-slate-500 font-medium tracking-tight mb-12 text-center max-w-xl">
      The next generation of <span class="bg-primary/20 text-academic-olive px-2 rounded">pedagogical management</span>.
      Track, evaluate, and excel in the art of software craftsmanship.
    </p>

    <div class="flex flex-col md:flex-row gap-6">
      <?php if (isset($_SESSION['user'])): ?>
      <div class="glass-panel p-2 rounded-2xl shadow-xl flex items-center gap-4">
        <div class="pl-6">
          <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400">Active Session</p>
          <p class="text-lg font-bold">Welcome back, {{ $_SESSION['user']['first_name'] }}</p>
        </div>
        <?php  if ($_SESSION['user']['role'] === 'ADMIN'): ?>
        <a href="/admin"
          class="bg-primary px-8 py-4 rounded-xl font-black text-background-dark shadow-lg shadow-primary/20 hover:shadow-xl hover:-translate-y-1 transition-all">Go
          to Admin Console</a>
        <?php  elseif ($_SESSION['user']['role'] === 'TEACHER'): ?>
        <a href="/Formateur"
          class="bg-primary px-8 py-4 rounded-xl font-black text-background-dark shadow-lg shadow-primary/20 hover:shadow-xl hover:-translate-y-1 transition-all">Enter
          Instructor Desk</a>
        <?php  else: ?>
        <a href="/Student"
          class="bg-primary px-8 py-4 rounded-xl font-black text-background-dark shadow-lg shadow-primary/20 hover:shadow-xl hover:-translate-y-1 transition-all">Open
          Study Dashboard</a>
        <?php  endif; ?>
        <a href="/logout" class="text-slate-400 hover:text-red-500 p-4 transition-colors">
          <span class="material-symbols-outlined">logout</span>
        </a>
      </div>
      <?php else: ?>
      <a href="/login"
        class="bg-primary px-12 py-5 rounded-2xl font-black text-background-dark text-xl shadow-2xl shadow-primary/30 hover:shadow-primary/40 hover:-translate-y-2 transition-all flex items-center gap-3 group">
        Authentication Required
        <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span>
      </a>
      <?php endif; ?>
    </div>

    <!-- System Tags -->
    <div class="absolute bottom-12 flex gap-12 border-t border-paper-border pt-8 opacity-40">
      <div class="flex flex-col items-center">
        <p class="text-[10px] font-black tracking-widest uppercase">Version</p>
        <p class="text-sm font-bold">v4.0.0-PRO</p>
      </div>
      <div class="flex flex-col items-center">
        <p class="text-[10px] font-black tracking-widest uppercase">Security</p>
        <p class="text-sm font-bold">SSL Encrypted</p>
      </div>
      <div class="flex flex-col items-center">
        <p class="text-[10px] font-black tracking-widest uppercase">Nodes</p>
        <p class="text-sm font-bold">128.0.0.1</p>
      </div>
    </div>
  </div>
</body>

</html>