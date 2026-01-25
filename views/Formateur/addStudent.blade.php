<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Enroll Student | SHAIMEURCoders</title>
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
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
  <style>
    .paper-texture {
      background-color: #fdfdfb;
      background-image: radial-gradient(#d1d5db 0.5px, transparent 0.5px);
      background-size: 20px 20px;
    }

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

    .vintage-input {
      background: transparent !important;
      border: none !important;
      border-bottom: 2px solid #dcded4 !important;
      border-radius: 0 !important;
      padding: 8px 0 !important;
      color: #1c2111 !important;
      font-weight: 600;
    }

    .vintage-input:focus {
      border-bottom-color: #a1e619 !important;
      box-shadow: none !important;
    }
  </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 paper-texture">
  <div class="flex h-screen flex-col">
    <!-- Top Navigation Bar -->
    <header
      class="flex items-center justify-between border-b border-paper-border bg-white/80 backdrop-blur-md px-8 py-3 dark:bg-background-dark dark:border-slate-800">
      <div class="flex items-center gap-8">
        <div class="flex items-center gap-3">
          <div class="flex items-center justify-center size-10 bg-primary rounded-lg text-background-dark">
            <span class="material-symbols-outlined text-2xl font-bold">school</span>
          </div>
          <h2 class="text-2xl font-black leading-tight tracking-tight brand-shimmer">SHAIMEURCoders</h2>
        </div>
        <nav class="hidden md:flex items-center gap-6">
          <a class="text-sm font-medium text-slate-500 hover:text-academic-olive transition-colors"
            href="/Formateur">Dashboard</a>
          <a class="text-sm font-medium text-slate-500 hover:text-academic-olive transition-colors"
            href="#">Curriculum</a>
          <a class="text-sm font-medium text-slate-500 hover:text-academic-olive transition-colors"
            href="#">Students</a>
        </nav>
      </div>
      <div class="flex items-center gap-3">
        <div class="text-right hidden lg:block">
          <p class="text-xs font-bold text-slate-900 dark:text-white leading-none">
            {{ $_SESSION['user']['first_name'] }} {{ $_SESSION['user']['last_name'] }}
          </p>
          <p class="text-[10px] uppercase tracking-wider text-slate-500">{{ $_SESSION['user']['role'] }}</p>
        </div>
        <div class="size-10 rounded-full border-2 border-primary bg-cover bg-center"
          style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCxC2ck1maNlAJUrh7-1iAbTuXvx6CKVK65dYYqBr8T_C9GQqfDsWqMR85uEMQ7a-oLjWEuTcPj1lidPoL72ALuYLkIlFAp8V4y8Vt0gvGKHBiK6zrDV6wx10X2Vawt7eOzWI3pp7RItcCctLtQqlsQGxfAZYjE6Byojk5Ck7DMecozMrSigkU_iVJhRce7Nz1AR1xX6j0fav-aSC3f598ZyWQU-5gsMrpoLSetIrs41sueJ74bD_JVJc3qMn0fyIjphrixZ4BCNJ4')">
        </div>
      </div>
    </header>

    <div class="flex flex-1 overflow-hidden">
      <!-- Side Navigation Bar -->
      <aside
        class="w-64 border-r border-paper-border bg-white dark:bg-background-dark dark:border-slate-800 p-6 flex flex-col gap-8">
        <div>
          <h3 class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-4">Academic Registry</h3>
          <div class="flex flex-col gap-1">
            <a class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-slate-500 hover:bg-slate-50 hover:text-academic-olive transition-all"
              href="/Formateur">
              <span class="material-symbols-outlined text-xl">dashboard</span>
              <span class="text-sm font-medium">Overview</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg bg-primary/10 px-4 py-2.5 text-academic-olive transition-all"
              href="/Formateur/addStudent">
              <span class="material-symbols-outlined text-xl">group_add</span>
              <span class="text-sm font-bold">Add Student</span>
            </a>
          </div>
        </div>
      </aside>

      <!-- Main Content Area -->
      <main class="flex-1 overflow-y-auto p-12 flex justify-center items-start">
        <div
          class="w-full max-w-4xl bg-white dark:bg-slate-900 border border-paper-border rounded-xl shadow-2xl p-12 md:p-20 relative overflow-hidden">
          <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full"></div>

          <div class="mb-12 border-b border-paper-border pb-8">
            <p class="text-[10px] font-black uppercase tracking-[0.5em] text-academic-blue mb-2">Pedagogical Enrollment
              Dossier</p>
            <h1 class="text-4xl font-black text-academic-olive dark:text-white uppercase tracking-tighter">New Student
              Registration</h1>
          </div>

          <form action="/Formateur/submitStudent" method="POST" class="space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
              <div class="space-y-8">
                <div class="grid grid-cols-2 gap-8">
                  <div class="space-y-1">
                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">First Name</label>
                    <input type="text" name="first_name" required placeholder="e.g. Sarah"
                      class="vintage-input w-full text-lg">
                  </div>
                  <div class="space-y-1">
                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Last Name</label>
                    <input type="text" name="last_name" required placeholder="e.g. Parker"
                      class="vintage-input w-full text-lg">
                  </div>
                </div>

                <div class="space-y-1">
                  <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Institutional
                    Email</label>
                  <input type="email" name="email" required placeholder="student@shaimeurcoders.edu"
                    class="vintage-input w-full text-lg">
                </div>

                <div class="space-y-1">
                  <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Temporary Access
                    Key</label>
                  <input type="password" name="password" required placeholder="••••••••"
                    class="vintage-input w-full text-lg">
                </div>
              </div>

              <div class="flex flex-col items-center justify-center space-y-4">
                <div
                  class="w-48 h-56 border-2 border-dashed border-paper-border rounded-lg flex items-center justify-center bg-slate-50 grayscale transition-all hover:grayscale-0">
                  <span class="material-symbols-outlined text-4xl text-slate-300">add_a_photo</span>
                </div>
                <p class="text-[9px] text-slate-400 uppercase tracking-widest font-bold">Student Identification Portrait
                </p>
              </div>
            </div>

            <div class="pt-12 border-t border-paper-border flex items-center justify-between">
              <div class="flex items-center gap-2 text-academic-blue italic text-xs">
                <span class="material-symbols-outlined text-base">verified_user</span>
                <span>I authorize the enrollment of this student into the pedagogical program.</span>
              </div>
              <div class="flex items-center gap-6">
                <button type="button" onclick="window.history.back()"
                  class="text-xs font-black text-slate-400 hover:text-slate-600 transition-colors uppercase tracking-widest">Cancel</button>
                <button type="submit"
                  class="bg-primary px-8 py-3 rounded-lg text-sm font-black text-background-dark shadow-lg shadow-primary/20 hover:shadow-xl hover:-translate-y-0.5 transition-all uppercase tracking-widest">
                  Enroll Student
                </button>
              </div>
            </div>
          </form>
        </div>
      </main>
    </div>
  </div>
</body>

</html>