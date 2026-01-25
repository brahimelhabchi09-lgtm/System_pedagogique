<!DOCTYPE html>
<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Pedagogical Assessment | SHAIMEURCoders</title>
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
          <h3 class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-4">Academic Review</h3>
          <div class="flex flex-col gap-1">
            <a class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-slate-500 hover:bg-slate-50 hover:text-academic-olive transition-all"
              href="/Formateur">
              <span class="material-symbols-outlined text-xl">dashboard</span>
              <span class="text-sm font-medium">Overview</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg bg-primary/10 px-4 py-2.5 text-academic-olive transition-all"
              href="/Formateur/evaluate">
              <span class="material-symbols-outlined text-xl">edit_document</span>
              <span class="text-sm font-bold">Assessment</span>
            </a>
          </div>
        </div>
      </aside>

      <!-- Main Content Area -->
      <main class="flex-1 overflow-y-auto p-12 flex justify-center items-start">
        <div
          class="w-full max-w-4xl bg-white dark:bg-slate-900 border border-paper-border rounded-xl shadow-2xl overflow-hidden">
          <div class="bg-academic-olive dark:bg-slate-800 p-10 border-b border-paper-border">
            <h1 class="text-4xl font-black text-primary tracking-tighter uppercase mb-2">Pedagogical Debriefing</h1>
            <p class="text-slate-300 text-sm font-medium italic">Record of student competency achievement cycles.</p>
          </div>

          <form action="/Formateur/submitEvaluation" method="POST" class="p-10 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <div class="space-y-1">
                <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Target Student</label>
                <select name="student_id"
                  class="w-full bg-slate-50 dark:bg-slate-800 border-paper-border rounded-lg py-3 px-4 text-sm font-bold focus:ring-primary focus:border-primary transition-all">
                  <option value="">-- Select Student --</option>
                  <?php foreach ($students as $student): ?>
                  <option value="<?= $student->getId() ?>" <?= (isset($selectedStudentId) && $selectedStudentId == $student->getId()) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($student->getFirstName() . ' ' . $student->getLastName()) ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="space-y-1">
                <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Mission Brief</label>
                <select name="brief_id" id="briefSelect" onchange="loadSkills()"
                  class="w-full bg-slate-50 dark:bg-slate-800 border-paper-border rounded-lg py-3 px-4 text-sm font-bold focus:ring-primary focus:border-primary transition-all">
                  <option value="">-- Select Brief --</option>
                  <?php foreach ($briefs as $brief): ?>
                  <option value="<?= $brief['id'] ?>"><?= htmlspecialchars($brief['title']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <!-- Skills Container -->
            <div id="skillsContainer" class="space-y-6">
              <div
                class="flex flex-col items-center justify-center p-12 border-2 border-dashed border-paper-border rounded-xl opacity-40">
                <span class="material-symbols-outlined text-4xl mb-2">find_in_page</span>
                <p class="text-sm font-bold italic tracking-tighter">Select a Brief to load associated competency
                  skills.</p>
              </div>
            </div>

            <div class="pt-8 border-t border-paper-border flex items-center justify-between">
              <a href="/Formateur"
                class="text-xs font-black text-slate-400 hover:text-slate-600 transition-colors uppercase tracking-widest">Discard
                Entry</a>
              <button type="submit"
                class="bg-primary px-10 py-3 rounded-lg text-sm font-black text-background-dark shadow-lg shadow-primary/20 hover:shadow-xl hover:-translate-y-0.5 transition-all uppercase tracking-widest flex items-center gap-2">
                Validate Assessment
                <span class="material-symbols-outlined text-lg">verified</span>
              </button>
            </div>
          </form>
        </div>
      </main>
    </div>
  </div>

  <script>
    async function loadSkills() {
      const briefId = document.getElementById('briefSelect').value;
      const container = document.getElementById('skillsContainer');

      if (!briefId) {
        container.innerHTML = `
                    <div class="flex flex-col items-center justify-center p-12 border-2 border-dashed border-paper-border rounded-xl opacity-40">
                        <span class="material-symbols-outlined text-4xl mb-2">find_in_page</span>
                        <p class="text-sm font-bold italic tracking-tighter">Select a Brief to load associated competency skills.</p>
                    </div>`;
        return;
      }

      container.innerHTML = '<div class="text-center p-8"><span class="material-symbols-outlined animate-spin text-primary text-4xl">sync</span><p class="text-xs font-black mt-2 tracking-widest uppercase text-slate-400">Decrypting Skills...</p></div>';

      try {
        const response = await fetch(`/api/skills?brief_id=${briefId}`);
        const skills = await response.json();

        if (skills.length === 0) {
          container.innerHTML = '<p class="text-red-400 text-sm font-bold p-8 border border-red-100 rounded-lg text-center">No skills found for this brief dossier.</p>';
          return;
        }

        let html = '<div class="space-y-6">';

        skills.forEach(skill => {
          html += `
                        <div class="bg-slate-50 dark:bg-slate-800/50 p-6 rounded-xl border border-paper-border hover:border-primary transition-all">
                            <div class="flex justify-between items-start mb-4">
                                <div class="flex gap-4">
                                    <div class="w-10 h-10 bg-primary/20 rounded flex items-center justify-center text-primary font-black text-xs">${skill.code}</div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 dark:text-white uppercase tracking-tighter">${skill.title}</h4>
                                        <p class="text-[10px] text-slate-400 font-medium">${skill.description || 'No description provided.'}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-paper-border/50">
                                <div class="space-y-1">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Mastery Level</label>
                                    <select name="evaluations[${skill.id}][level]" class="w-full bg-white dark:bg-slate-900 border-paper-border rounded-lg py-2 text-sm font-bold focus:ring-primary focus:border-primary">
                                        <option value="IMITER">IMITER (Initiation)</option>
                                        <option value="S_ADAPTER">S'ADAPTER (Autonomy)</option>
                                        <option value="TRANSPOSER">TRANSPOSER (Mastery)</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Pedagogical Observation</label>
                                    <input type="text" name="evaluations[${skill.id}][comment]" class="w-full bg-white dark:bg-slate-900 border-paper-border rounded-lg py-2 text-sm font-medium focus:ring-primary focus:border-primary" placeholder="Enter findings...">
                                </div>
                            </div>
                        </div>
                    `;
        });

        html += '</div>';
        container.innerHTML = html;

      } catch (error) {
        console.error('Error:', error);
        container.innerHTML = '<p class="text-red-500 font-bold p-8 text-center uppercase text-xs tracking-widest">Protocol Error: Skill Decryption Failed.</p>';
      }
    }
  </script>
</body>

</html>