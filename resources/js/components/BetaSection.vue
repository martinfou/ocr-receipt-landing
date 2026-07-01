<template>
    <section id="beta" class="py-24 lg:py-32 bg-[#0a0a0a] border-t border-border/40 relative overflow-hidden">
        <!-- Background decorative details to convey security/offline -->
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-brand/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-brand/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-stretch">
                
                <!-- Left Column: Early Access Form -->
                <div class="lg:col-span-7 bg-surface-light border border-border/80 p-8 lg:p-10 rounded-2xl shadow-2xl flex flex-col justify-between transition-all duration-300 hover:border-border/100">
                    <div>
                        <div class="text-[10px] font-mono text-brand uppercase tracking-widest mb-3 flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand animate-pulse"></span>
                            Private Release Program
                        </div>
                        <h2 class="text-3xl font-serif font-semibold mb-3 tracking-[-0.01em] text-[#e5e5e5]">
                            {{ $t('beta.title') }}
                        </h2>
                        <p class="text-sm text-text-muted mb-8 max-w-xl">{{ $t('beta.subtitle') }}</p>

                        <!-- Benefit grid - clean alignment, glowing hover border -->
                        <div class="grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center gap-3.5 p-4 rounded-xl bg-[#0a0a0a] border border-border/40 hover:border-brand/40 transition-colors duration-300">
                                <span class="text-xl w-8 h-8 rounded-lg bg-surface-light border border-border/60 flex items-center justify-center shrink-0">🎯</span>
                                <span class="text-xs text-text-muted leading-relaxed">{{ $t('beta.bullet1') }}</span>
                            </div>
                            <div class="flex items-center gap-3.5 p-4 rounded-xl bg-[#0a0a0a] border border-border/40 hover:border-brand/40 transition-colors duration-300">
                                <span class="text-xl w-8 h-8 rounded-lg bg-surface-light border border-border/60 flex items-center justify-center shrink-0">💬</span>
                                <span class="text-xs text-text-muted leading-relaxed">{{ $t('beta.bullet2') }}</span>
                            </div>
                            <div class="flex items-center gap-3.5 p-4 rounded-xl bg-[#0a0a0a] border border-border/40 hover:border-brand/40 transition-colors duration-300">
                                <span class="text-xl w-8 h-8 rounded-lg bg-surface-light border border-border/60 flex items-center justify-center shrink-0">📬</span>
                                <span class="text-xs text-text-muted leading-relaxed">{{ $t('beta.bullet3') }}</span>
                            </div>
                            <div class="flex items-center gap-3.5 p-4 rounded-xl bg-[#0a0a0a] border border-border/40 hover:border-brand/40 transition-colors duration-300">
                                <span class="text-xl w-8 h-8 rounded-lg bg-surface-light border border-border/60 flex items-center justify-center shrink-0">🎟️</span>
                                <span class="text-xs text-text-muted leading-relaxed">{{ $t('beta.bullet4') }}</span>
                            </div>
                        </div>

                        <!-- Success State -->
                        <div v-if="submitted" class="bg-green-500/10 border border-green-500/30 text-[#27c93f] p-8 rounded-xl text-center space-y-3 my-4">
                            <span class="text-4xl block select-none">🎉</span>
                            <h4 class="font-serif font-semibold text-lg">{{ $t('beta.success') }}</h4>
                        </div>

                        <!-- Form -->
                        <form v-else @submit.prevent="handleSubmit" class="space-y-6">
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstname" class="block text-xs font-mono text-text-muted uppercase tracking-wider mb-2">
                                        {{ $t('beta.firstname') }}
                                    </label>
                                    <input 
                                        type="text" 
                                        id="firstname" 
                                        v-model="form.firstname" 
                                        required
                                        class="w-full bg-[#0a0a0a] border border-border focus:border-brand focus:ring-1 focus:ring-brand focus:shadow-[0_0_15px_rgba(96,165,250,0.12)] rounded-lg px-4 py-3 text-sm text-[#e5e5e5] placeholder-text-muted/40 transition-all outline-none"
                                    />
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-mono text-text-muted uppercase tracking-wider mb-2">
                                        {{ $t('beta.email') }}
                                    </label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        v-model="form.email" 
                                        required
                                        class="w-full bg-[#0a0a0a] border border-border focus:border-brand focus:ring-1 focus:ring-brand focus:shadow-[0_0_15px_rgba(96,165,250,0.12)] rounded-lg px-4 py-3 text-sm text-[#e5e5e5] placeholder-text-muted/40 transition-all outline-none"
                                    />
                                </div>
                            </div>

                            <div>
                                <label for="profession" class="block text-xs font-mono text-text-muted uppercase tracking-wider mb-2">
                                    {{ $t('beta.profession') }}
                                </label>
                                <input 
                                    type="text" 
                                    id="profession" 
                                    v-model="form.profession"
                                    class="w-full bg-[#0a0a0a] border border-border focus:border-brand focus:ring-1 focus:ring-brand focus:shadow-[0_0_15px_rgba(96,165,250,0.12)] rounded-lg px-4 py-3 text-sm text-[#e5e5e5] placeholder-text-muted/40 transition-all outline-none"
                                />
                            </div>

                            <div v-if="errorMsg" class="text-red-400 text-xs font-mono">
                                {{ errorMsg }}
                            </div>

                            <button 
                                type="submit" 
                                :disabled="isSubmitting"
                                class="btn-brand w-full py-3.5 text-xs font-mono uppercase tracking-wider transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed shadow-lg shadow-brand-dark/15 hover:shadow-brand/25 cursor-pointer"
                            >
                                <span v-if="isSubmitting">{{ $lang.lang === 'fr' ? 'Inscription...' : 'Joining...' }}</span>
                                <span v-else>{{ $t('beta.btn') }}</span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Right Column: About the Maker -->
                <div class="lg:col-span-5 bg-surface-light border border-border/80 p-8 lg:p-10 rounded-2xl shadow-2xl flex flex-col justify-between transition-all duration-300 hover:border-border/100">
                    <div>
                        <div class="text-[10px] font-mono text-brand uppercase tracking-widest mb-6">
                            // THE AUTHOR
                        </div>
                        
                        <div class="flex items-center gap-4 mb-6">
                            <!-- Avatar representation -->
                            <div class="w-12 h-12 rounded-full border border-brand/30 bg-brand/10 flex items-center justify-center text-brand text-lg font-serif font-bold select-none">
                                MF
                            </div>
                            <div>
                                <h3 class="font-serif font-semibold text-lg text-[#e5e5e5]">{{ $t('about.title') }}</h3>
                                <span class="text-xs text-brand font-mono">{{ $t('about.location') }}</span>
                            </div>
                        </div>

                        <p class="text-sm text-text-muted leading-relaxed mb-6 font-serif italic">
                            "{{ $t('about.bio') }}"
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 text-xs font-mono border-t border-border/40 pt-6 mt-6">
                        <a href="https://martinfournier.com" target="_blank" rel="noopener" class="flex items-center justify-between text-text-muted hover:text-brand transition-colors group">
                            <span>martinfournier.com</span>
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                        <a href="https://github.com/martinfou" target="_blank" rel="noopener" class="flex items-center justify-between text-text-muted hover:text-brand transition-colors group">
                            <span>GitHub</span>
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener" class="flex items-center justify-between text-text-muted hover:text-brand transition-colors group">
                            <span>LinkedIn</span>
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'BetaSection',
    data() {
        return {
            form: {
                firstname: '',
                email: '',
                profession: ''
            },
            isSubmitting: false,
            submitted: false,
            errorMsg: ''
        };
    },
    methods: {
        handleSubmit() {
            this.isSubmitting = true;
            this.errorMsg = '';
            
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            fetch('/subscribe', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(this.form)
            })
            .then(async response => {
                const data = await response.json();
                if (!response.ok) {
                    throw new Error(data.message || (this.$lang.lang === 'fr' ? 'Erreur d\'inscription.' : 'Subscription failed.'));
                }
                return data;
            })
            .then(() => {
                this.submitted = true;
                this.form.firstname = '';
                this.form.email = '';
                this.form.profession = '';
            })
            .catch(err => {
                this.errorMsg = err.message;
            })
            .finally(() => {
                this.isSubmitting = false;
            });
        }
    }
};
</script>
