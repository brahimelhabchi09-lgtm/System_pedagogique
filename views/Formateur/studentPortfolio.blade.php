<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Student Portfolio | SHAIMEURCoders</title>
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
            href="/Formateur">Dashboard</a>
          <a class="text-sm font-medium text-slate-500 hover:text-academic-olive transition-colors"
            href="#">Curriculum</a>
          <a class="text-sm font-medium text-slate-500 hover:text-academic-olive transition-colors"
            href="/Formateur/students">Students</a>
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
            <a class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-slate-500 hover:bg-slate-50 hover:text-academic-olive transition-all"
              href="/Formateur/students">
              <span class="material-symbols-outlined text-xl">group</span>
              <span class="text-sm font-medium">My Students</span>
            </a>
          </div>
        </div>
      </aside>

      <!-- Main Content Area -->
      <main class="flex-1 overflow-y-auto p-12">
        <div class="mb-12 flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
          <div>
            <div class="flex items-center gap-2 text-academic-blue mb-2">
              <a href="/Formateur/students"
                class="text-xs font-black uppercase tracking-widest hover:underline">Registry</a>
              <span class="material-symbols-outlined text-sm">chevron_right</span>
              <span class="text-xs font-black uppercase tracking-widest">Portfolio</span>
            </div>
            <h1 class="text-6xl font-black text-slate-900 dark:text-white uppercase tracking-tighter">
              <?= htmlspecialchars($student->getFirstName() . ' ' . $student->getLastName()) ?></h1>
            <p class="text-slate-500 font-medium italic mt-2">Professional Skill Validation Ledger</p>
          </div>
          <div class="flex gap-4">
            <a href="/Formateur/evaluate?student_id=<?= $student->getId() ?>"
              class="bg-primary px-8 py-3 rounded-lg text-sm font-black text-background-dark shadow-lg shadow-primary/20 hover:shadow-xl transition-all uppercase tracking-widest">
              New Assessment
            </a>
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
          <!-- Left Column: Summary Info -->
          <div class="lg:col-span-1 space-y-12">
            <div class="bg-white dark:bg-slate-900 border border-paper-border rounded-xl p-8 shadow-sm">
              <h3 class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-6">Student Dossier</h3>
              <div class="space-y-6">
                <div class="flex flex-col">
                  <span class="text-[10px] font-black uppercase text-academic-blue">Full Institutional Name</span>
                  <span
                    class="font-bold text-lg"><?= htmlspecialchars($student->getFirstName() . ' ' . $student->getLastName()) ?></span>
                </div>
                <div class="flex flex-col">
                  <span class="text-[10px] font-black uppercase text-academic-blue">Communication Endpoint</span>
                  <span class="font-bold text-sm"><?= htmlspecialchars($student->getEmail()) ?></span>
                </div>
                <div class="flex flex-col">
                  <span class="text-[10px] font-black uppercase text-academic-blue">Academic Role</span>
                  <span
                    class="font-bold text-sm tracking-widest uppercase text-primary bg-slate-900 inline-block px-2 py-1 rounded mt-1">Learner</span>
                </div>
              </div>
            </div>

            <!-- Skill Progress Summary -->
            <div class="bg-academic-olive text-white rounded-xl p-8 shadow-xl">
              <h3 class="text-[10px] font-black uppercase tracking-[0.3em] text-primary mb-6">Mastery Distribution</h3>
              <div class="space-y-6">
                <div class="space-y-2">
                  <div class="flex justify-between text-xs font-black uppercase tracking-widest">
                    <span>Imiter</span>
                    <span>75%</span>
                  </div>
                  <div class="h-1.5 bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-primary w-[75%]"></div>
                  </div>
                </div>
                <div class="space-y-2">
                  <div class="flex justify-between text-xs font-black uppercase tracking-widest">
                    <span>S'adapter</span>
                    <span>40%</span>
                  </div>
                  <div class="h-1.5 bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-primary w-[40%]"></div>
                  </div>
                </div>
                <div class="space-y-2">
                  <div class="flex justify-between text-xs font-black uppercase tracking-widest">
                    <span>Transposer</span>
                    <span>15%</span>
                  </div>
                  <div class="h-1.5 bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-primary w-[15%]"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column: Validation Ledger -->
          <div class="lg:col-span-2">
            <div class="bg-white dark:bg-slate-900 border border-paper-border rounded-xl shadow-2xl overflow-hidden">
              <div
                class="bg-slate-50 dark:bg-slate-800 p-8 border-b border-paper-border flex justify-between items-center">
                <h3 class="text-xl font-black text-slate-900 dark:text-white uppercase tracking-tighter">Competency
                  Validation Ledger</h3>
                <span
                  class="bg-primary text-background-dark py-1 px-3 rounded-full text-[10px] font-black"><?= count($evaluations) ?>
                  RECORDS</span>
              </div>

              <div class="p-0">
                <table class="w-full text-left">
                  <thead>
                    <tr
                      class="text-[10px] font-black uppercase tracking-widest text-slate-400 border-b border-paper-border">
                      <th class="px-8 py-4">Skill Dossier</th>
                      <th class="px-8 py-4">Project Context</th>
                      <th class="px-8 py-4">Status</th>
                      <th class="px-8 py-4 text-right">Administrative</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-paper-border">
                    <?php foreach ($evaluations as $eval): ?>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                      <td class="px-8 py-6">
                        <div class="flex flex-col">
                          <span
                            class="text-xs font-black text-slate-400 mb-1"><?= htmlspecialchars($eval['skill_code']) ?></span>
                          <span
                            class="font-bold text-slate-900 dark:text-white"><?= htmlspecialchars($eval['skill_title']) ?></span>
                        </div>
                      </td>
                      <td class="px-8 py-6 text-sm italic text-slate-500">
                        <?= htmlspecialchars($eval['brief_title']) ?>
                      </td>
                      <td class="px-8 py-6">
                        <span
                          class="px-3 py-1 bg-primary/10 text-academic-olive text-[10px] font-black uppercase tracking-widest rounded-lg border border-primary/20">
                          <?= htmlspecialchars($eval['level']) ?>
                        </span>
                      </td>
                      <td class="px-8 py-6 text-right">
                        <div class="flex justify-end gap-2">
                          <button class="p-2 text-slate-300 hover:text-academic-blue transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                          </button>
                          <a href="/Formateur/invalidateEvaluation?id=<?= $eval['id'] ?>"
                            onclick="return confirm('WARNING: Are you sure you want to invalidate this pedagogical recognition?')"
                            class="p-2 text-slate-300 hover:text-red-500 transition-colors">
                            <span class="material-symbols-outlined text-lg">tab_unselected</span>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <?php endforeach; ?>

                    <?php if (empty($evaluations)): ?>
                    <tr>
                      <td colspan="4" class="px-8 py-20 text-center opacity-40">
                        <span class="material-symbols-outlined text-4xl mb-2">history_edu</span>
                        <p class="text-xs font-black uppercase tracking-widest">No validation records in archive.</p>
                      </td>
                    </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>