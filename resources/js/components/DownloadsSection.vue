<template>
    <section id="download" class="py-24 lg:py-32 bg-surface border-b border-border relative">
        <div class="max-w-6xl mx-auto px-6">
            
            <!-- Header -->
            <div class="text-center mb-20">
                <div class="text-[10px] font-mono text-brand uppercase tracking-widest mb-3 flex items-center justify-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand"></span>
                    Local Packages
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-text" v-html="$t('downloads.title')"></h2>
                <p class="text-text-muted max-w-xl mx-auto text-sm">
                    {{ $t('downloads.subtitle') }}
                </p>
            </div>

            <!-- Platform Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto items-stretch">
                
                <!-- macOS Card -->
                <div 
                    id="download-mac" 
                    :class="['card p-8 bg-surface-light border rounded-xl flex flex-col justify-between items-center text-center transition-all duration-300', 
                             detectedOS === 'mac' ? 'border-brand bg-brand/[0.01] shadow-[0_0_30px_rgba(34,197,94,0.06)] scale-[1.02]' : 'border-border hover:border-border']"
                >
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center mb-6">
                            <!-- Laptop Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-none stroke-brand" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="12" rx="2" />
                                <path d="M2 20h20M12 16v4" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg text-text mb-2">{{ $t('downloads.mac.platform') }}</h3>
                        <p class="text-xs text-text-muted mb-6 leading-relaxed">{{ $t('downloads.mac.desc') }}</p>
                    </div>
                    <div class="w-full">
                        <div v-if="detectedOS === 'mac'" class="inline-block text-[9px] font-mono text-brand uppercase tracking-wider mb-3">
                            ✓ RECOMMENDED FOR YOUR SYSTEM
                        </div>
                        <a href="/download-file/OCR-Receipt-1.0.0.dmg" class="btn-brand w-full py-3 text-xs font-mono uppercase tracking-wider block text-center cursor-pointer">
                            {{ $t('downloads.mac.btn') }}
                        </a>
                    </div>
                </div>

                <!-- Windows Card -->
                <div 
                    id="download-win" 
                    :class="['card p-8 bg-surface-light border rounded-xl flex flex-col justify-between items-center text-center transition-all duration-300', 
                             detectedOS === 'win' ? 'border-brand bg-brand/[0.01] shadow-[0_0_30px_rgba(34,197,94,0.06)] scale-[1.02]' : 'border-border hover:border-border']"
                >
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center mb-6">
                            <!-- Window Pane / Grid Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-none stroke-brand" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M3 12h18M12 3v18" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg text-text mb-2">{{ $t('downloads.windows.platform') }}</h3>
                        <p class="text-xs text-text-muted mb-6 leading-relaxed">{{ $t('downloads.windows.desc') }}</p>
                    </div>
                    <div class="w-full">
                        <div v-if="detectedOS === 'win'" class="inline-block text-[9px] font-mono text-brand uppercase tracking-wider mb-3">
                            ✓ RECOMMENDED FOR YOUR SYSTEM
                        </div>
                        <a href="/download-file/OCR-Receipt-1.0.0-Setup.exe" class="btn-brand w-full py-3 text-xs font-mono uppercase tracking-wider block text-center cursor-pointer">
                            {{ $t('downloads.windows.btn') }}
                        </a>
                    </div>
                </div>

                <!-- Linux Card -->
                <div 
                    id="download-linux" 
                    :class="['card p-8 bg-surface-light border rounded-xl flex flex-col justify-between items-center text-center transition-all duration-300', 
                             detectedOS === 'linux' ? 'border-brand bg-brand/[0.01] shadow-[0_0_30px_rgba(34,197,94,0.06)] scale-[1.02]' : 'border-border hover:border-border']"
                >
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-none stroke-brand" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg text-text mb-2">{{ $t('downloads.linux.platform') }}</h3>
                        <p class="text-xs text-text-muted mb-6 leading-relaxed">{{ $t('downloads.linux.desc') }}</p>
                    </div>
                    <div class="w-full">
                        <div v-if="detectedOS === 'linux'" class="inline-block text-[9px] font-mono text-brand uppercase tracking-wider mb-3">
                            ✓ RECOMMENDED FOR YOUR SYSTEM
                        </div>
                        <a href="/download-file/OCR-Receipt-1.0.0-linux.tar.gz" class="btn-brand w-full py-3 text-xs font-mono uppercase tracking-wider block text-center cursor-pointer">
                            {{ $t('downloads.linux.btn') }}
                        </a>
                    </div>
                </div>

            </div>

            <!-- License Note -->
            <div class="text-center mt-12 text-xs text-text-muted">
                💡 {{ $t('downloads.licenseNote') }}
            </div>

        </div>
    </section>
</template>

<script>
export default {
    name: 'DownloadsSection',
    data() {
        return {
            detectedOS: null
        };
    },
    mounted() {
        this.detectOS();
    },
    methods: {
        detectOS() {
            const ua = navigator.userAgent.toLowerCase();
            if (ua.indexOf('mac') !== -1) {
                this.detectedOS = 'mac';
            } else if (ua.indexOf('win') !== -1) {
                this.detectedOS = 'win';
            } else if (ua.indexOf('linux') !== -1 || ua.indexOf('x11') !== -1) {
                this.detectedOS = 'linux';
            }
        }
    }
};
</script>
