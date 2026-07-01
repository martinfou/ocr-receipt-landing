<template>
    <section id="beta" class="py-24 lg:py-32 bg-surface-light/20 border-t border-border/40">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Column: Early Access Form -->
                <div class="lg:col-span-7 bg-surface-light/45 p-8 rounded-2xl border border-border/80 shadow-2xl relative">
                    <div class="absolute -top-12 -left-12 w-48 h-48 bg-brand/5 rounded-full blur-3xl pointer-events-none"></div>

                    <h2 class="text-2xl lg:text-3xl font-serif font-semibold mb-2 tracking-[-0.01em] text-[#e5e5e5]">
                        {{ $t('beta.title') }}
                    </h2>
                    <p class="text-sm text-text-muted mb-8">{{ $t('beta.subtitle') }}</p>

                    <div class="grid sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center gap-3 p-3 rounded-lg bg-surface border border-border/50">
                            <span class="text-lg">🎯</span>
                            <span class="text-xs text-text-muted leading-snug">{{ $t('beta.bullet1') }}</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-lg bg-surface border border-border/50">
                            <span class="text-lg">💬</span>
                            <span class="text-xs text-text-muted leading-snug">{{ $t('beta.bullet2') }}</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-lg bg-surface border border-border/50">
                            <span class="text-lg">📬</span>
                            <span class="text-xs text-text-muted leading-snug">{{ $t('beta.bullet3') }}</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-lg bg-surface border border-border/50">
                            <span class="text-lg">🎟️</span>
                            <span class="text-xs text-text-muted leading-snug">{{ $t('beta.bullet4') }}</span>
                        </div>
                    </div>

                    <!-- Success State -->
                    <div v-if="submitted" class="bg-green-500/10 border border-green-500/30 text-[#27c93f] p-6 rounded-xl text-center space-y-2">
                        <span class="text-3xl">🎉</span>
                        <h4 class="font-serif font-semibold text-lg">{{ $t('beta.success') }}</h4>
                    </div>

                    <!-- Form -->
                    <form v-else @submit.prevent="handleSubmit" class="space-y-5">
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label for="firstname" class="block text-xs font-mono text-text-muted uppercase tracking-wider mb-2">
                                    {{ $t('beta.firstname') }}
                                </label>
                                <input 
                                    type="text" 
                                    id="firstname" 
                                    v-model="form.firstname" 
                                    required
                                    class="w-full bg-[#0a0a0a] border border-border focus:border-brand focus:ring-1 focus:ring-brand rounded-lg px-4 py-2.5 text-sm text-[#e5e5e5] placeholder-text-muted/40 transition-all outline-none"
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
                                    class="w-full bg-[#0a0a0a] border border-border focus:border-brand focus:ring-1 focus:ring-brand rounded-lg px-4 py-2.5 text-sm text-[#e5e5e5] placeholder-text-muted/40 transition-all outline-none"
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
                                class="w-full bg-[#0a0a0a] border border-border focus:border-brand focus:ring-1 focus:ring-brand rounded-lg px-4 py-2.5 text-sm text-[#e5e5e5] placeholder-text-muted/40 transition-all outline-none"
                            />
                        </div>

                        <div v-if="errorMsg" class="text-red-400 text-xs font-mono">
                            {{ errorMsg }}
                        </div>

                        <button 
                            type="submit" 
                            :disabled="isSubmitting"
                            class="btn-brand w-full py-3 text-sm font-semibold tracking-wider uppercase transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed shadow-lg shadow-brand-dark/15 hover:shadow-brand/25"
                        >
                            <span v-if="isSubmitting">{{ $lang.lang === 'fr' ? 'Inscription...' : 'Joining...' }}</span>
                            <span v-else>{{ $t('beta.btn') }}</span>
                        </button>
                    </form>
                </div>

                <!-- Right Column: About the Maker -->
                <div class="lg:col-span-5 space-y-6 lg:pl-4">
                    <div class="border border-border/60 bg-[#161615]/30 p-8 rounded-2xl">
                        <div class="flex items-center gap-4 mb-6">
                            <!-- Avatar representation -->
                            <div class="w-12 h-12 rounded-full border border-brand/30 bg-brand/10 flex items-center justify-center text-brand text-lg font-bold select-none">
                                MF
                            </div>
                            <div>
                                <h3 class="font-serif font-semibold text-lg text-[#e5e5e5]">{{ $t('about.title') }}</h3>
                                <span class="text-xs text-text-muted font-mono">{{ $t('about.location') }}</span>
                            </div>
                        </div>

                        <p class="text-sm text-text-muted leading-relaxed mb-6">
                            {{ $t('about.bio') }}
                        </p>

                        <div class="flex flex-wrap items-center gap-4 text-xs font-mono border-t border-border/40 pt-6">
                            <a href="https://martinfournier.com" target="_blank" rel="noopener" class="text-text-muted hover:text-brand transition-colors">
                                martinfournier.com
                            </a>
                            <span class="text-border">•</span>
                            <a href="https://github.com/martinfou" target="_blank" rel="noopener" class="text-text-muted hover:text-brand transition-colors">
                                GitHub
                            </a>
                            <span class="text-border">•</span>
                            <a href="https://linkedin.com" target="_blank" rel="noopener" class="text-text-muted hover:text-brand transition-colors">
                                LinkedIn
                            </a>
                        </div>
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
