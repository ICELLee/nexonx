<div id="stats" class="py-24 relative isolate overflow-hidden">
    <!-- Glowing background elements -->
    <div class="absolute -top-32 left-1/4 w-96 h-96 bg-purple-600/20 rounded-full filter blur-3xl animate-float-slow"></div>
    <div class="absolute bottom-0 right-20 w-80 h-80 bg-indigo-600/20 rounded-full filter blur-3xl animate-float-slow animation-delay-4000"></div>

    <!-- Grid pattern -->
    <div class="absolute inset-0 -z-10 opacity-10 [mask-image:radial-gradient(ellipse_at_center,white,transparent)]">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#4f46e566_1px,transparent_1px),linear-gradient(to_bottom,#4f46e566_1px,transparent_1px)] bg-[size:24px_24px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="bg-gradient-to-br from-indigo-700 via-purple-700 to-indigo-800 rounded-3xl shadow-2xl overflow-hidden transition-all duration-700 hover:shadow-purple-500/20 group/container">
            <!-- Animated border -->

            <!-- Floating particles -->
            <div class="particles absolute inset-0 overflow-hidden">
                <div class="particle absolute w-1 h-1 bg-purple-300 rounded-full opacity-0 group-hover/container:opacity-100"></div>
            </div>

            <div class="px-8 py-16 sm:px-12 sm:py-20 lg:py-24">
                <div class="text-center max-w-4xl mx-auto">
                    <h2 class="text-4xl font-bold text-white mb-6 tracking-tight animate-glitch">
            <span class="inline-block relative">
              <span class="absolute inset-0 text-purple-300 animate-pulse-slow opacity-0 group-hover/container:opacity-100">{{ __('Our Community in Numbers') }}</span>
              {{ __('Our Community in Numbers') }}
            </span>
                    </h2>
                    <p class="text-indigo-200/90 text-lg max-w-3xl mx-auto transition-all duration-500 group-hover/container:text-purple-200/95 group-hover/container:translate-y-1">
                        {{ __('Join thousands of satisfied users who trust our services daily.') }}
                    </p>
                </div>

                <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    <!-- Stat 1 -->
                    <div class="bg-white/5 backdrop-blur-lg rounded-2xl p-8 border border-white/10 hover:border-purple-400/30 transition-all duration-500 transform hover:-translate-y-2 hover:scale-[1.02] active:scale-95 group/stat animate-stat-in">
                        <div class="relative overflow-hidden h-20">
                            <div class="text-5xl font-bold text-white mb-2 tracking-tight stat-number" id="stat-users" data-target="12543">0</div>
                            <div class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-transparent via-purple-400 to-transparent opacity-0 group-hover/stat:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="text-indigo-200 font-medium text-lg mt-4 transition-all duration-300 group-hover/stat:text-purple-300 group-hover/stat:translate-y-1">
                            {{ __('Registered Users') }}
                        </div>
                        <div class="mt-6">
                            <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-purple-500/20 group-hover/stat:bg-purple-500/30 transition-all duration-500">
                                <i class="fas fa-users text-2xl text-purple-300 group-hover/stat:text-white group-hover/stat:animate-float-fast"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="bg-white/5 backdrop-blur-lg rounded-2xl p-8 border border-white/10 hover:border-purple-400/30 transition-all duration-500 transform hover:-translate-y-2 hover:scale-[1.02] active:scale-95 group/stat animate-stat-in animation-delay-200">
                        <div class="relative overflow-hidden h-20">
                            <div class="text-5xl font-bold text-white mb-2 tracking-tight stat-number" id="stat-online" data-target="842">0</div>
                            <div class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-transparent via-purple-400 to-transparent opacity-0 group-hover/stat:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="text-indigo-200 font-medium text-lg mt-4 transition-all duration-300 group-hover/stat:text-purple-300 group-hover/stat:translate-y-1">
                            {{ __('Online Now') }}
                        </div>
                        <div class="mt-6">
                            <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-purple-500/20 group-hover/stat:bg-purple-500/30 transition-all duration-500">
                                <i class="fas fa-signal text-2xl text-purple-300 group-hover/stat:text-white group-hover/stat:animate-pulse"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="bg-white/5 backdrop-blur-lg rounded-2xl p-8 border border-white/10 hover:border-purple-400/30 transition-all duration-500 transform hover:-translate-y-2 hover:scale-[1.02] active:scale-95 group/stat animate-stat-in animation-delay-400">
                        <div class="relative overflow-hidden h-20">
                            <div class="text-5xl font-bold text-white mb-2 tracking-tight stat-number" id="stat-trades" data-target="5678">0</div>
                            <div class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-transparent via-purple-400 to-transparent opacity-0 group-hover/stat:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="text-indigo-200 font-medium text-lg mt-4 transition-all duration-300 group-hover/stat:text-purple-300 group-hover/stat:translate-y-1">
                            {{ __('Successful Trades') }}
                        </div>
                        <div class="mt-6">
                            <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-purple-500/20 group-hover/stat:bg-purple-500/30 transition-all duration-500">
                                <i class="fas fa-handshake text-2xl text-purple-300 group-hover/stat:text-white group-hover/stat:animate-wiggle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Keyframes */
    @keyframes float-slow {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-20px) translateX(10px); }
    }

    @keyframes float-slower {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(10px) translateX(-15px); }
    }

    @keyframes float-fast {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }

    @keyframes pulse-slow {
        0%, 100% { opacity: 0.7; }
        50% { opacity: 1; }
    }

    @keyframes wiggle {
        0%, 100% { transform: rotate(-5deg); }
        50% { transform: rotate(5deg); }
    }

    @keyframes stat-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes glitch {
        0% { clip-path: polygon(0 0, 100% 0, 100% 95%, 0 95%); }
        25% { clip-path: polygon(0 5%, 100% 5%, 100% 100%, 0 100%); }
        50% { clip-path: polygon(0 10%, 100% 10%, 100% 95%, 0 95%); }
        75% { clip-path: polygon(0 5%, 100% 5%, 100% 100%, 0 100%); }
        100% { clip-path: polygon(0 0, 100% 0, 100% 95%, 0 95%); }
    }

    /* Animation classes */
    .animate-float-slow {
        animation: float-slow 12s ease-in-out infinite;
    }

    .animate-float-slower {
        animation: float-slower 15s ease-in-out infinite;
    }

    .animate-float-fast {
        animation: float-fast 2s ease-in-out infinite;
    }

    .animate-pulse-slow {
        animation: pulse-slow 3s ease-in-out infinite;
    }

    .animate-wiggle {
        animation: wiggle 0.8s ease-in-out infinite;
    }

    .animate-stat-in {
        animation: stat-in 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    .animate-glitch:hover {
        animation: glitch 0.4s linear;
    }

    .animation-delay-200 {
        animation-delay: 0.2s;
    }

    .animation-delay-400 {
        animation-delay: 0.4s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    /* Particle effects */
    .particles:hover .particle {
        animation: float-slower 15s linear infinite;
    }

    .particles:hover .particle:nth-child(1) {
        top: 20%; left: 10%; animation-delay: 0s;
    }

    .particles:hover .particle:nth-child(2) {
        top: 60%; left: 80%; animation-delay: 2s;
    }

    /* Add more particles as needed */
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enhanced counter animation with formatting
        function animateCounter(element, target) {
            const duration = 2000;
            const start = 0;
            const startTime = performance.now();

            function updateCounter(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const value = Math.floor(progress * (target - start) + start);

                // Format number with commas
                element.textContent = value.toLocaleString();

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    // Add celebration effect
                    element.classList.add('animate__animated', 'animate__tada');
                    setTimeout(() => {
                        element.classList.remove('animate__animated', 'animate__tada');
                    }, 1000);
                }
            }

            requestAnimationFrame(updateCounter);
        }

        // Intersection Observer for scroll-triggered animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Animate all stat numbers
                    document.querySelectorAll('.stat-number').forEach(el => {
                        const target = parseInt(el.getAttribute('data-target'));
                        animateCounter(el, target);
                    });

                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        // Observe the stats section
        const statsSection = document.getElementById('stats');
        if (statsSection) {
            observer.observe(statsSection);
        }

        // Generate particles dynamically
        const particlesContainer = document.querySelector('.particles');
        if (particlesContainer) {
            for (let i = 0; i < 8; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle absolute w-1 h-1 bg-purple-300 rounded-full opacity-0 group-hover/container:opacity-100';
                particle.style.top = `${Math.random() * 100}%`;
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.animationDelay = `${Math.random() * 5}s`;
                particlesContainer.appendChild(particle);
            }
        }
    });
</script>
