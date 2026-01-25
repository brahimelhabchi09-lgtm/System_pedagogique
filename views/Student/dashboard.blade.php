<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>SHAIMEURCoders | Student Dashboard</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;family=Noto+Sans:wght@400;500;600&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#a1e619",
            "background-light": "#f7f8f6",
            "background-dark": "#1c2111",
            "vintage-sepia": "#4a3b2c",
            "vintage-gold": "#d4af37",
            "vintage-silver": "#c0c0c0",
            "vintage-bronze": "#cd7f32"
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
    .vintage-border {
      border: 1px solid rgba(74, 59, 44, 0.15);
    }

    .vintage-paper {
      background-image: linear-gradient(to bottom right, #fdfcf9, #f7f8f2);
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
      background: linear-gradient(90deg, #4a3b2c 0%, #a1e619 25%, #4a3b2c 50%, #a1e619 75%, #4a3b2c 100%);
      background-size: 200% auto;
      color: transparent;
      -webkit-background-clip: text;
      background-clip: text;
      animation: shimmer 5s infinite linear;
      display: inline-block;
    }
  </style>
</head>

<body
  class="bg-background-light dark:bg-background-dark font-display text-vintage-sepia transition-colors duration-200">
  <div class="flex h-screen overflow-hidden">
    <!-- Side Navigation -->
    <aside class="w-64 flex flex-col border-r border-vintage-sepia/10 bg-white dark:bg-background-dark">
      <div class="p-6">
        <div class="flex items-center gap-3 mb-8">
          <div class="size-10 bg-primary flex items-center justify-center rounded-lg shadow-sm">
            <span class="material-symbols-outlined text-background-dark font-bold">menu_book</span>
          </div>
          <div class="flex flex-col">
            <h1 class="brand-shimmer text-base font-bold leading-none">SHAIMEURCoders</h1>
            <p class="text-vintage-sepia/60 dark:text-white/60 text-xs font-medium uppercase tracking-widest mt-1">
              Vintage Edition</p>
          </div>
        </div>
        <nav class="flex flex-col gap-2">
          <a class="flex items-center gap-3 px-4 py-2.5 rounded-lg bg-primary/20 text-vintage-sepia font-bold"
            href="/Student">
            <span class="material-symbols-outlined text-[20px]">dashboard</span>
            <span class="text-sm">Dashboard</span>
          </a>
          <a class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-primary/10 transition-colors text-vintage-sepia/70 dark:text-white/70"
            href="#">
            <span class="material-symbols-outlined text-[20px]">edit_note</span>
            <span class="text-sm font-medium">My Briefs</span>
          </a>
          <a class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-primary/10 transition-colors text-vintage-sepia/70 dark:text-white/70"
            href="#">
            <span class="material-symbols-outlined text-[20px]">school</span>
            <span class="text-sm font-medium">Resources</span>
          </a>
          <a class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-primary/10 transition-colors text-vintage-sepia/70 dark:text-white/70"
            href="#">
            <span class="material-symbols-outlined text-[20px]">groups</span>
            <span class="text-sm font-medium">Community</span>
          </a>
          <a class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-primary/10 transition-colors text-vintage-sepia/70 dark:text-white/70"
            href="#">
            <span class="material-symbols-outlined text-[20px]">workspace_premium</span>
            <span class="text-sm font-medium">Certificates</span>
          </a>
        </nav>
      </div>
      <div class="mt-auto p-6 flex flex-col gap-4">
        <button
          class="flex items-center justify-center gap-2 bg-primary text-background-dark py-3 px-4 rounded-lg font-bold text-sm shadow-md hover:brightness-105 transition-all">
          <span class="material-symbols-outlined text-[18px]">add_circle</span>
          <span>New Study Session</span>
        </button>
        <div class="flex items-center gap-3 pt-4 border-t border-vintage-sepia/10">
          <div class="size-10 rounded-full border-2 border-primary overflow-hidden">
            <img class="w-full h-full object-cover" data-alt="Profile photo of the student"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_tWLurkeIsEhWJeTXEGW-Tlz6oJ0Xca2u7nhw8BXl63Gw-sruigU3QHD4e5S7m4-on7UgR8kCPJuhlYuXym_Un_Q_TjDt2MKvKle3sGww4NuJJXj6PrK7XY0T80_ZceuXXr9DtE_tIQ7Uj_CABM3-Wph4WM7laFED0bgwLcp95UerJe1BFx4sNdtOGkywNXQFHTc_ZQqkQ3VV-8GoMbcDCOS3HXk6_HybdnY10GTtuqszpt5DTmrfVMHAI1u6qWC_YxS9tDoPEQU" />
          </div>
          <div>
            <p class="text-sm font-bold dark:text-white">{{ $_SESSION['user']['first_name'] }}
              {{ $_SESSION['user']['last_name'] }}
            </p>
            <p class="text-xs text-vintage-sepia/60 dark:text-white/60">{{ $_SESSION['user']['role'] }}</p>
          </div>
        </div>
      </div>
    </aside>
    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto vintage-paper dark:bg-background-dark/50">
      <!-- Header -->
      <header
        class="flex items-center justify-between px-10 py-6 border-b border-vintage-sepia/10 sticky top-0 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md z-10">
        <div class="flex items-center gap-8">
          <h2 class="text-xl font-black tracking-tight text-vintage-sepia dark:text-white uppercase">Curriculum Overview
          </h2>
          <div class="flex gap-6">
            <a class="text-sm font-bold text-primary border-b-2 border-primary" href="/Student">Classroom</a>
            <a class="text-sm font-medium text-vintage-sepia/50 dark:text-white/50 hover:text-vintage-sepia"
              href="#">Grades</a>
            <a class="text-sm font-medium text-vintage-sepia/50 dark:text-white/50 hover:text-vintage-sepia"
              href="#">Schedule</a>
          </div>
        </div>
        <div class="flex items-center gap-4">
          <div class="relative">
            <span
              class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-vintage-sepia/40 text-[20px]">search</span>
            <input
              class="pl-10 pr-4 py-2 bg-background-light dark:bg-white/5 border-none rounded-lg text-sm w-64 focus:ring-1 focus:ring-primary"
              placeholder="Search archive..." type="text" />
          </div>
          <button
            class="size-10 flex items-center justify-center rounded-lg bg-background-light dark:bg-white/5 text-vintage-sepia dark:text-white">
            <span class="material-symbols-outlined text-[22px]">notifications</span>
          </button>
        </div>
      </header>
      <div class="px-10 py-8 max-w-7xl mx-auto">
        <!-- Welcome Title -->
        <div class="mb-10">
          <p class="text-4xl font-black text-vintage-sepia dark:text-white tracking-tighter">Bienvenue,
            {{ $_SESSION['user']['first_name'] }}.
          </p>
          <p class="text-vintage-sepia/60 dark:text-white/60 mt-1 font-medium">Track your briefs, master your craft, and
            earn your credentials.</p>
        </div>
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
          <div
            class="bg-white dark:bg-white/5 p-6 rounded-xl border border-vintage-sepia/10 shadow-sm relative overflow-hidden">
            <div class="absolute -right-4 -bottom-4 opacity-5 rotate-12">
              <span class="material-symbols-outlined text-[100px]">assignment</span>
            </div>
            <p class="text-sm font-bold text-vintage-sepia/60 dark:text-white/60 uppercase tracking-widest">Briefs
              Completed</p>
            <p class="text-3xl font-black text-vintage-sepia dark:text-white mt-2">12 <span
                class="text-lg font-medium text-vintage-sepia/40">/ 15</span></p>
            <div class="w-full bg-background-light dark:bg-white/10 h-1.5 mt-4 rounded-full overflow-hidden">
              <div class="bg-primary h-full w-[80%] rounded-full"></div>
            </div>
          </div>
          <div
            class="bg-white dark:bg-white/5 p-6 rounded-xl border border-vintage-sepia/10 shadow-sm relative overflow-hidden">
            <div class="absolute -right-4 -bottom-4 opacity-5 rotate-12">
              <span class="material-symbols-outlined text-[100px]">auto_stories</span>
            </div>
            <p class="text-sm font-bold text-vintage-sepia/60 dark:text-white/60 uppercase tracking-widest">Knowledge
              Points</p>
            <p class="text-3xl font-black text-vintage-sepia dark:text-white mt-2">2,450</p>
            <p class="text-xs text-primary font-bold mt-4">+120 this week</p>
          </div>
          <div
            class="bg-white dark:bg-white/5 p-6 rounded-xl border border-vintage-sepia/10 shadow-sm relative overflow-hidden">
            <div class="absolute -right-4 -bottom-4 opacity-5 rotate-12">
              <span class="material-symbols-outlined text-[100px]">military_tech</span>
            </div>
            <p class="text-sm font-bold text-vintage-sepia/60 dark:text-white/60 uppercase tracking-widest">Mastery
              Level</p>
            <p class="text-3xl font-black text-vintage-sepia dark:text-white mt-2">Senior</p>
            <p class="text-xs text-vintage-sepia/40 dark:text-white/40 mt-4">Level 8 of 10</p>
          </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- My Briefs (Active Projects) -->
          <div class="lg:col-span-2">
            <div class="flex items-center justify-between mb-6">
              <h2 class="text-xl font-black text-vintage-sepia dark:text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">history_edu</span>
                Active Briefs
              </h2>
              <button class="text-xs font-bold text-primary uppercase tracking-widest">View All Projects</button>
            </div>
            <div class="space-y-4">
              @foreach($briefs as $brief)
                <div
                  class="bg-white dark:bg-white/5 p-5 rounded-xl border border-vintage-sepia/10 flex flex-col gap-5 group hover:border-primary/50 transition-all">
                  <div class="flex gap-5">
                    <div
                      class="w-32 h-32 rounded-lg bg-background-light dark:bg-white/5 flex-shrink-0 flex items-center justify-center overflow-hidden border border-vintage-sepia/5">
                      <span class="material-symbols-outlined text-[64px] text-primary/40">description</span>
                    </div>
                    <div class="flex-1 flex flex-col justify-between py-1">
                      <div>
                        <div class="flex justify-between items-start">
                          <h3 class="text-lg font-bold text-vintage-sepia dark:text-white leading-tight">
                            {{ $brief->getTitle() }}</h3>
                          <span
                            class="px-2 py-1 bg-primary/20 text-background-dark text-[10px] font-bold rounded uppercase tracking-tighter">Active</span>
                        </div>
                        <p class="text-sm text-vintage-sepia/60 dark:text-white/60 mt-1 line-clamp-2">
                          {{ $brief->getDescription() }}
                        </p>
                      </div>
                      <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center gap-2">
                          <span class="material-symbols-outlined text-[16px] text-vintage-sepia/40">timer</span>
                          <span class="text-xs font-bold text-vintage-sepia/40">Due: {{ $brief->getDateDue() }}</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Submission Form -->
                  <form action="/Student/submitWalkthrough" method="POST"
                    class="mt-2 pt-4 border-t border-vintage-sepia/5 flex gap-4 items-end">
                    <input type="hidden" name="brief_id" value="{{ $brief->getId() }}">
                    <div class="flex-1">
                      <label
                        class="block text-[10px] font-bold uppercase tracking-widest text-vintage-sepia/60 mb-1">Walkthrough
                        Link (Repo/Video)</label>
                      <input type="url" name="repository_link" required placeholder="https://github.com/..."
                        class="w-full bg-background-light dark:bg-white/5 border-vintage-sepia/10 rounded-lg text-sm px-4 py-2 focus:ring-1 focus:ring-primary focus:border-primary">
                    </div>
                    <button type="submit"
                      class="bg-primary text-background-dark font-bold text-xs uppercase tracking-widest px-6 py-2.5 rounded-lg hover:brightness-105 transition-all">
                      Submit
                    </button>
                  </form>
                </div>
              @endforeach
            </div>
          </div>
          <!-- My Progression (Skills & Badges) -->
          <div class="lg:col-span-1">
            <div class="flex items-center justify-between mb-6">
              <h2 class="text-xl font-black text-vintage-sepia dark:text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-vintage-gold">military_tech</span>
                Achievement Gallery
              </h2>
            </div>
            <div class="bg-white dark:bg-white/5 p-6 rounded-xl border border-vintage-sepia/10 shadow-sm space-y-8">
              <!-- Skill Badges -->
              <div>
                <p class="text-xs font-bold text-vintage-sepia/40 dark:text-white/40 uppercase tracking-widest mb-4">
                  Core Competencies</p>
                <div class="grid grid-cols-2 gap-4">
                  <div
                    class="flex flex-col items-center p-3 border border-vintage-sepia/10 rounded-lg group hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                    <div
                      class="size-16 rounded-full bg-gradient-to-tr from-[#d4af37] to-[#ffd700] shadow-lg flex items-center justify-center mb-2 ring-4 ring-vintage-gold/10">
                      <span class="material-symbols-outlined text-white text-[32px]">html</span>
                    </div>
                    <p class="text-xs font-black uppercase text-vintage-gold">Gold Seal</p>
                    <p class="text-[10px] font-medium text-vintage-sepia/60 mt-1">HTML Mastery</p>
                  </div>
                  <div
                    class="flex flex-col items-center p-3 border border-vintage-sepia/10 rounded-lg group hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                    <div
                      class="size-16 rounded-full bg-gradient-to-tr from-[#c0c0c0] to-[#e8e8e8] shadow-lg flex items-center justify-center mb-2 ring-4 ring-vintage-silver/10">
                      <span class="material-symbols-outlined text-white text-[32px]">css</span>
                    </div>
                    <p class="text-xs font-black uppercase text-vintage-sepia/50">Silver Medal</p>
                    <p class="text-[10px] font-medium text-vintage-sepia/60 mt-1">CSS Architecture</p>
                  </div>
                  <div
                    class="flex flex-col items-center p-3 border border-vintage-sepia/10 rounded-lg group hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                    <div
                      class="size-16 rounded-full bg-gradient-to-tr from-[#cd7f32] to-[#de9a5a] shadow-lg flex items-center justify-center mb-2 ring-4 ring-vintage-bronze/10">
                      <span class="material-symbols-outlined text-white text-[32px]">javascript</span>
                    </div>
                    <p class="text-xs font-black uppercase text-vintage-bronze">Bronze Medal</p>
                    <p class="text-[10px] font-medium text-vintage-sepia/60 mt-1">Logic Fundamentals</p>
                  </div>
                  <div class="flex flex-col items-center p-3 border border-vintage-sepia/10 rounded-lg opacity-40">
                    <div class="size-16 rounded-full bg-gray-200 flex items-center justify-center mb-2 grayscale">
                      <span class="material-symbols-outlined text-gray-400 text-[32px]">database</span>
                    </div>
                    <p class="text-xs font-black uppercase text-gray-400">Locked</p>
                    <p class="text-[10px] font-medium text-gray-400 mt-1">Database Pro</p>
                  </div>
                </div>
              </div>
              <!-- Progression List -->
              <div>
                <p class="text-xs font-bold text-vintage-sepia/40 dark:text-white/40 uppercase tracking-widest mb-4">
                  Progression Log</p>
                <div class="space-y-4">
                  <div class="flex items-start gap-3">
                    <div class="size-2 rounded-full bg-primary mt-1.5 flex-shrink-0"></div>
                    <div>
                      <p class="text-xs font-bold text-vintage-sepia dark:text-white">Validation: Landing Page Project
                      </p>
                      <p class="text-[10px] text-vintage-sepia/50 dark:text-white/50">Awarded by Mentor J. Smith • 2
                        days ago</p>
                    </div>
                  </div>
                  <div class="flex items-start gap-3">
                    <div class="size-2 rounded-full bg-vintage-gold mt-1.5 flex-shrink-0"></div>
                    <div>
                      <p class="text-xs font-bold text-vintage-sepia dark:text-white">Earned "Clean Coder" Badge</p>
                      <p class="text-[10px] text-vintage-sepia/50 dark:text-white/50">System Achievement • 4 days ago
                      </p>
                    </div>
                  </div>
                  <div class="flex items-start gap-3">
                    <div class="size-2 rounded-full bg-primary/30 mt-1.5 flex-shrink-0"></div>
                    <div>
                      <p class="text-xs font-bold text-vintage-sepia dark:text-white">10 Day Coding Streak reached</p>
                      <p class="text-[10px] text-vintage-sepia/50 dark:text-white/50">Personal Milestone • 1 week ago
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>