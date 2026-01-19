<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Simplon Login Page</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#a1e619",
                        "background-light": "#f4f1ea",
                        "background-dark": "#1c2111",
                        "sepia-paper": "#faf8f2",
                        "academic-ink": "#3d3a33",
                        "border-muted": "#d1ccc0"
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
        .vintage-grain {
            background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuAUpXRvOXd7t2p1_EO4UpG0vl-zP28GZLjJmQq9CZ6NdSiG1pruz7-tytYuvN9-xIxBMYS2rX6aYTDKHVcqrSu9NKr_b3szBj1Twfln1S_b4c0BaZuWFbOzCiyJtsV2iTtvtOc5Xw_oOtutNkx8FKnisE6BjxtZtG4PQpBXBzGNOM_yKKDpRjc8JRN7cxBpJXF-XcGdzb-49u9SbJjnPOYAeLV-SqCZtHq1e44QJxhr1nZ4Kq_lwzm5b8hScVSiIB4xzZMv_pdTUTo)
        }

        .stamp-shadow {
            box-shadow: 4px 4px 0 0 rgba(61, 58, 51, 0.1)
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display min-h-screen flex flex-col vintage-grain">
    <!-- Top Navigation Container -->
    <div class="w-full flex justify-center py-5">
        <div class="max-w-[1200px] w-full px-6 lg:px-40">
            <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border-muted/50 pb-3">
                <div class="flex items-center gap-4 text-academic-ink dark:text-white">
                    <div class="size-6 text-primary">
                        <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z"></path>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold leading-tight tracking-tight">SIMPLON ACADEMIC</h2>
                </div>
                <div class="flex flex-1 justify-end gap-8">
                    <div class="hidden md:flex items-center gap-9">
                        <a class="text-academic-ink/70 dark:text-white/70 hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Portal</a>
                        <a class="text-academic-ink/70 dark:text-white/70 hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Archive</a>
                        <a class="text-academic-ink/70 dark:text-white/70 hover:text-primary transition-colors text-sm font-medium leading-normal" href="#">Support</a>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <!-- Main Content Area -->
    <main class="flex-1 flex items-center justify-center p-6">
        <div class="w-full max-w-[500px] bg-sepia-paper dark:bg-background-dark/80 border border-border-muted rounded-lg stamp-shadow p-8 md:p-12 relative overflow-hidden">
            <!-- Academic Header Decoration -->
            <div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
            <div class="text-center mb-10">
                <h1 class="text-academic-ink dark:text-white tracking-widest text-2xl md:text-3xl font-bold leading-tight uppercase mb-2">
                    SIMPLON ACADEMIC PORTAL
                </h1>
                <div class="w-16 h-px bg-border-muted mx-auto mb-4"></div>
                <p class="text-academic-ink/60 dark:text-white/60 text-sm font-light italic leading-normal">
                    Pedagogical Management System — Est. 2013
                </p>
            </div>
            <!-- Login Form -->
            <form class="flex flex-col gap-6">
                <!-- Username Field -->
                <div class="flex flex-col gap-2">
                    <label class="flex flex-col w-full">
                        <span class="text-academic-ink/80 dark:text-white/80 text-xs font-bold uppercase tracking-widest pb-2">Credential Identifier (Email)</span>
                        <div class="relative">
                            <input class="form-input w-full rounded-lg text-academic-ink dark:text-white border border-border-muted bg-white/50 dark:bg-black/20 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary h-14 placeholder:text-academic-ink/30 p-[15px] text-base font-normal transition-all" placeholder="e.g. scholar@simplon.edu" required="" type="email" />
                            <span class="material-symbols-outlined absolute right-4 top-4 text-academic-ink/30">alternate_email</span>
                        </div>
                    </label>
                </div>
                <!-- Password Field -->
                <div class="flex flex-col gap-2">
                    <label class="flex flex-col w-full">
                        <div class="flex justify-between items-end pb-2">
                            <span class="text-academic-ink/80 dark:text-white/80 text-xs font-bold uppercase tracking-widest">Security Key (Password)</span>
                            <a class="text-[10px] text-academic-ink/50 hover:text-primary uppercase tracking-tighter" href="#">Request Recovery</a>
                        </div>
                        <div class="relative">
                            <input class="form-input w-full rounded-lg text-academic-ink dark:text-white border border-border-muted bg-white/50 dark:bg-black/20 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary h-14 placeholder:text-academic-ink/30 p-[15px] text-base font-normal transition-all" placeholder="••••••••" required="" type="password" />
                            <span class="material-symbols-outlined absolute right-4 top-4 text-academic-ink/30">lock</span>
                        </div>
                    </label>
                </div>
                <!-- Login Action -->
                <div class="pt-4">
                    <button class="w-full bg-primary hover:bg-primary/90 text-academic-ink font-bold py-4 rounded-lg uppercase tracking-widest transition-all stamp-shadow active:translate-y-0.5 active:shadow-none" type="submit">
                        Authorize Access
                    </button>
                </div>
                <div class="mt-6 text-center border-t border-border-muted/30 pt-6">
                    <p class="text-academic-ink/40 dark:text-white/40 text-[11px] uppercase tracking-widest">
                        Official Use Only. Unauthorised access is prohibited by institutional policy.
                    </p>
                </div>
            </form>
            <!-- Decorative Elements -->
            <div class="absolute -bottom-10 -right-10 size-32 opacity-5 pointer-events-none">
                <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z"></path>
                </svg>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="py-8 text-center">
        <div class="flex flex-col items-center gap-4">
            <div class="flex gap-6">
                <a class="text-academic-ink/40 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined text-lg">help_center</span></a>
                <a class="text-academic-ink/40 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined text-lg">policy</span></a>
                <a class="text-academic-ink/40 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined text-lg">language</span></a>
            </div>
            <p class="text-academic-ink/30 dark:text-white/30 text-[10px] tracking-widest uppercase">
                © 2024 SIMPLON ACADEMIC INFRASTRUCTURE. ALL RIGHTS RESERVED.
            </p>
        </div>
    </footer>
    <!-- Background Images / Texture placeholders -->
    <div class="fixed top-0 left-0 w-full h-full pointer-events-none z-[-1] opacity-20">
        <div class="absolute top-10 left-10 w-64 h-64 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 rounded-full bg-academic-ink/5 blur-3xl"></div>
    </div>
</body>

</html>