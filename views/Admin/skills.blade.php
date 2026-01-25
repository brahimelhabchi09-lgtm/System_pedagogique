<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Manage Skills | SHAIMEURCoders</title>
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
          <h3 class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-4">Academic Records</h3>
          <div class="flex flex-col gap-1">
            <a class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-slate-500 hover:bg-slate-50 hover:text-academic-olive transition-all"
              href="/admin/classes">
              <span class="material-symbols-outlined text-xl">meeting_room</span>
              <span class="text-sm font-medium">Classes</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-slate-500 hover:bg-slate-50 hover:text-academic-olive transition-all"
              href="/admin/createSprint">
              <span class="material-symbols-outlined text-xl">bolt</span>
              <span class="text-sm font-medium">Sprints</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg bg-primary/10 px-4 py-2.5 text-academic-olive transition-all"
              href="/admin/skills">
              <span class="material-symbols-outlined text-xl">military_tech</span>
              <span class="text-sm font-bold">Skills</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-slate-500 hover:bg-slate-50 hover:text-academic-olive transition-all"
              href="/admin/briefs">
              <span class="material-symbols-outlined text-xl">description</span>
              <span class="text-sm font-medium">Briefs</span>
            </a>
          </div>
        </div>
      </aside>

      <!-- Main Content Area -->
      <main class="flex-1 overflow-y-auto p-8">
        <div class="mb-8 flex justify-between items-center">
          <h1 class="text-4xl font-black tracking-tight text-academic-olive dark:text-white">Skills Library</h1>
          <a href="/admin/createSkill"
            class="flex items-center gap-2 rounded-lg bg-primary px-6 py-2.5 text-sm font-black text-background-dark shadow-lg shadow-primary/20 hover:shadow-xl hover:-translate-y-0.5 transition-all">
            <span class="material-symbols-outlined text-lg">military_tech</span>
            NEW SKILL
          </a>
        </div>

        <div class="bg-white dark:bg-slate-900 border border-paper-border rounded-xl shadow-sm overflow-hidden">
          <table class="min-w-full leading-normal">
            <thead>
              <tr>
                <th
                  class="px-6 py-4 border-b border-paper-border bg-slate-50 dark:bg-slate-800 text-left text-xs font-black text-slate-500 uppercase tracking-widest">
                  Code</th>
                <th
                  class="px-6 py-4 border-b border-paper-border bg-slate-50 dark:bg-slate-800 text-left text-xs font-black text-slate-500 uppercase tracking-widest">
                  Title</th>
                <th
                  class="px-6 py-4 border-b border-paper-border bg-slate-50 dark:bg-slate-800 text-left text-xs font-black text-slate-500 uppercase tracking-widest">
                  Description</th>
                <th
                  class="px-6 py-4 border-b border-paper-border bg-slate-50 dark:bg-slate-800 text-left text-xs font-black text-slate-500 uppercase tracking-widest">
                  Linked Brief</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-paper-border">
              <?php foreach ($skills as $skill): ?>
              <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                <td class="px-6 py-4 text-sm">
                  <span class="font-mono bg-academic-blue/10 px-2 py-1 rounded text-xs font-bold text-academic-blue">
                    <?= htmlspecialchars($skill->getCode()) ?>
                  </span>
                </td>
                <td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white">
                  <?= htmlspecialchars($skill->getTitle()) ?></td>
                <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400 font-medium">
                  <p class="truncate max-w-xs"><?= htmlspecialchars($skill->getDescription()) ?></p>
                </td>
                <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400 font-medium">
                  <span
                    class="text-primary font-bold tracking-tighter italic">#<?= htmlspecialchars($skill->getBriefId() ?? 'General') ?></span>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
</body>

</html>