<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Faculty Assignment | SHAIMEURCoders</title>
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
            href="/admin">Dashboard</a>
          <a class="text-sm font-medium text-slate-500 hover:text-academic-olive transition-colors"
            href="#">Curriculum</a>
          <a class="text-sm font-medium text-slate-500 hover:text-academic-olive transition-colors"
            href="/admin/addFormateur">Staff</a>
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
          style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCRXKphd9BLmhCwF3OvXGX7Kp7zv1Rm1Kk79h3PhsKFmjSBnbfEzhSe9Z2DEg1fCvKfIGXkxLszU6pWG9RHKmYOEr47kN5IjSgcpSHeTBjxNSp_2WFa4rbJv32xAysvISLmaWdeasCSDgPMYOeQT0lf_fVv842DosvL7kMgMS1oyI9Y2_nAes11txJwyi7OaddlveVXkmkUBKPzx-wIlAOGVD_Tb-jm6m_OVh0LpZVN7IU4nW2bnXGxkoWjq-y3U1oJIoqYYnlf-0Y')">
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
            <a class="flex items-center gap-3 rounded-lg px-4 py-2.5 bg-primary/10 text-academic-olive transition-all"
              href="/admin/classes">
              <span class="material-symbols-outlined text-xl">meeting_room</span>
              <span class="text-sm font-bold">Classes</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-slate-500 hover:bg-slate-50 hover:text-academic-olive transition-all"
              href="/admin/createSprint">
              <span class="material-symbols-outlined text-xl">bolt</span>
              <span class="text-sm font-medium">Sprints</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-slate-500 hover:bg-slate-50 hover:text-academic-olive transition-all"
              href="/admin/skills">
              <span class="material-symbols-outlined text-xl">military_tech</span>
              <span class="text-sm font-medium">Skills</span>
            </a>
          </div>
        </div>
      </aside>

      <!-- Main Content Area -->
      <main class="flex-1 overflow-y-auto p-12">
        <div class="mb-12">
          <p class="text-[10px] font-black uppercase tracking-[0.5em] text-academic-blue mb-2">Faculty Assignment Portal
          </p>
          <h1 class="text-5xl font-black text-academic-olive dark:text-white tracking-tighter">Assign Faculty to Class
          </h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_80px_1fr] gap-8 items-start">
          <!-- Available Faculty -->
          <div class="bg-white dark:bg-slate-900 border border-paper-border rounded-xl shadow-sm overflow-hidden">
            <div class="bg-slate-50 dark:bg-slate-800 px-6 py-4 border-b border-paper-border">
              <h3 class="text-xs font-black uppercase tracking-widest text-slate-500 flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">person_search</span>
                Available Instructors
              </h3>
            </div>
            <div class="divide-y divide-paper-border max-h-[500px] overflow-y-auto">
              <div
                class="p-6 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all group flex justify-between items-center cursor-pointer">
                <div>
                  <p class="text-sm font-bold text-slate-900 dark:text-white">Prof. Alistair Vance</p>
                  <p class="text-[10px] text-slate-400 font-medium uppercase tracking-widest">Fullstack Development</p>
                </div>
                <span
                  class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">add_circle</span>
              </div>
              <!-- More items... -->
            </div>
          </div>

          <!-- Transfer Controls -->
          <div class="flex flex-col gap-4 items-center justify-center py-12">
            <button
              class="w-12 h-12 rounded-full bg-primary text-background-dark flex items-center justify-center shadow-lg shadow-primary/20 hover:-translate-y-1 transition-all">
              <span class="material-symbols-outlined font-black">chevron_right</span>
            </button>
            <button
              class="w-12 h-12 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition-all">
              <span class="material-symbols-outlined font-black">chevron_left</span>
            </button>
          </div>

          <!-- Assigned Faculty -->
          <div class="bg-white dark:bg-slate-900 border border-paper-border rounded-xl shadow-sm overflow-hidden">
            <div class="bg-primary/10 px-6 py-4 border-b border-paper-border">
              <h3 class="text-xs font-black uppercase tracking-widest text-academic-olive flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">assignment_ind</span>
                Assigned to Class
              </h3>
            </div>
            <div class="divide-y divide-paper-border max-h-[500px] overflow-y-auto">
              <div class="p-6 bg-primary/5 group flex justify-between items-center cursor-pointer">
                <div>
                  <p class="text-sm font-bold text-slate-900 dark:text-white">Dr. Helena Thorne</p>
                  <p class="text-[10px] text-academic-olive font-bold uppercase tracking-widest">Lead Instructor</p>
                </div>
                <span
                  class="material-symbols-outlined text-red-400 opacity-0 group-hover:opacity-100 transition-opacity">remove_circle</span>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-12 pt-8 border-t border-paper-border flex justify-between items-center">
          <p class="text-xs text-slate-400 italic font-medium">All assignments are recorded in the permanent academic
            registry.</p>
          <div class="flex gap-4">
            <button
              class="text-xs font-black text-slate-400 hover:text-slate-600 transition-colors uppercase tracking-widest">Discard
              Changes</button>
            <button
              class="bg-primary px-10 py-3 rounded-lg text-sm font-black text-background-dark shadow-lg shadow-primary/20 hover:shadow-xl hover:-translate-y-0.5 transition-all uppercase tracking-widest flex items-center gap-2">
              Confirm Assignments
              <span class="material-symbols-outlined text-lg">verified</span>
            </button>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>