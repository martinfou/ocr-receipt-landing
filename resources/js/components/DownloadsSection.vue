<template>
    <section id="download" class="py-24 lg:py-32 bg-[#0a0a0a] border-b border-border/40 relative">
        <div class="max-w-6xl mx-auto px-6">
            
            <!-- Header -->
            <div class="text-center mb-20">
                <div class="text-[10px] font-mono text-brand uppercase tracking-widest mb-3 flex items-center justify-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand"></span>
                    Local Packages
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-[#e5e5e5]" v-html="$t('downloads.title')"></h2>
                <p class="text-text-muted max-w-xl mx-auto text-sm">
                    {{ $t('downloads.subtitle') }}
                </p>
            </div>

            <!-- Platform Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto items-stretch">
                
                <!-- macOS Card -->
                <div 
                    id="download-mac" 
                    :class="['card p-8 bg-[#161615] border rounded-xl flex flex-col justify-between items-center text-center transition-all duration-300', 
                             detectedOS === 'mac' ? 'border-brand bg-brand/[0.01] shadow-[0_0_30px_rgba(96,165,250,0.06)] scale-[1.02]' : 'border-border/60 hover:border-border']"
                >
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-brand" viewBox="0 0 24 24">
                                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 4.17c.66-.81 1.11-1.93.99-3.06-1 .04-2.2.67-2.92 1.49-.62.71-1.16 1.85-1.01 2.96 1.12.09 2.27-.58 2.94-1.39z"/>
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg text-[#e5e5e5] mb-2">{{ $t('downloads.mac.platform') }}</h3>
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
                    :class="['card p-8 bg-[#161615] border rounded-xl flex flex-col justify-between items-center text-center transition-all duration-300', 
                             detectedOS === 'win' ? 'border-brand bg-brand/[0.01] shadow-[0_0_30px_rgba(96,165,250,0.06)] scale-[1.02]' : 'border-border/60 hover:border-border']"
                >
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-brand" viewBox="0 0 24 24">
                                <path d="M0 3.449L9.75 2.1v9.451H0V3.449zM0 12.45h9.75v9.451L0 20.551V12.45zM10.95 1.936L24 0v11.55H10.95V1.936zM10.95 12.45H24v11.55l-13.05-1.936V12.45z"/>
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg text-[#e5e5e5] mb-2">{{ $t('downloads.windows.platform') }}</h3>
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
                    :class="['card p-8 bg-[#161615] border rounded-xl flex flex-col justify-between items-center text-center transition-all duration-300', 
                             detectedOS === 'linux' ? 'border-brand bg-brand/[0.01] shadow-[0_0_30px_rgba(96,165,250,0.06)] scale-[1.02]' : 'border-border/60 hover:border-border']"
                >
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-none stroke-brand" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                        </div>
                        <h3 class="font-serif font-semibold text-lg text-[#e5e5e5] mb-2">{{ $t('downloads.linux.platform') }}</h3>
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
