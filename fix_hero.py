import sys

file_path = 'resources/js/components/HeroSection.vue'
with open(file_path, 'r') as f:
    content = f.read()

# Left Column Container
content = content.replace('bg-white/90 border border-border p-8 lg:p-10 rounded-2xl backdrop-blur-md shadow-2xl relative', 'bg-white border border-border p-8 lg:p-10 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative')

# Left Column Bullets
bullets = """                    <ul class="space-y-3 mb-8 w-full">
                        <li v-for="(bullet, index) in $tm('hero.bullets')" :key="index" class="flex items-start gap-2.5 text-sm text-text-muted">
                            <span class="flex-shrink-0 w-5 h-5 rounded-full bg-brand/10 flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-brand-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="leading-relaxed">{{ bullet }}</span>
                        </li>
                    </ul>"""

if 'v-for="(bullet, index) in $tm(\'hero.bullets\')"' not in content:
    content = content.replace('<div class="flex flex-wrap items-center gap-4 w-full sm:w-auto mb-10">', '<div class="flex flex-wrap items-center gap-4 w-full sm:w-auto mb-8">')
    content = content.replace('</a>\n                    </div>', f'</a>\n                    </div>\n\n{bullets}')

# Mac OS Top Bar
content = content.replace('bg-[#111] px-4 py-3 flex items-center justify-between border-b border-border/20 z-10', 'bg-white px-4 py-3 flex items-center justify-between border-b border-border z-10')

# Desktop simulator pill
content = content.replace('class="flex items-center justify-between px-4 py-3.5 border-b border-border/40"', 'class="flex items-center justify-between px-4 py-3 border-b border-border bg-white z-10"')
content = content.replace('class="font-mono text-[9px] text-text-muted uppercase tracking-wider ml-1.5">// DESKTOP SIMULATOR</span>', 'class="font-mono text-[10px] text-text-muted uppercase tracking-wider ml-1.5 font-medium">Desktop Simulator</span>')
content = content.replace('<div class="text-[8px] text-brand font-mono font-bold animate-pulse uppercase">\n                                    ● LOCAL_INFRASTRUCTURE\n                                </div>', '<div class="text-[9px] text-brand-dark font-mono font-bold uppercase tracking-wider bg-brand/10 px-2 py-0.5 rounded border border-brand/20">\n                                    Offline Mode\n                                </div>')

# Tabs Navigation
content = content.replace('class="flex overflow-x-auto scrollbar-none font-mono text-[8px] uppercase tracking-wider text-text-muted select-none"', 'class="flex overflow-x-auto scrollbar-none font-mono text-[10px] uppercase tracking-wider text-text-muted select-none bg-surface border-b border-border"')
content = content.replace('class="flex-1 min-w-[75px] py-3 px-1 text-center border-r border-border/30 hover:text-[#e5e5e5] transition-all relative font-bold"', 'class="flex-1 min-w-[75px] py-4 px-2 text-center border-r border-border hover:bg-white hover:text-brand-dark transition-all relative font-medium"')
content = content.replace("idx === activeTab ? 'bg-[#0a0a0a]/50 text-brand font-bold' : ''", "idx === activeTab ? 'bg-white text-brand-dark font-bold' : ''")
content = content.replace('<span v-if="idx === activeTab" class="absolute bottom-0 left-0 right-0 h-[2px] bg-brand shadow-[0_0_8px_#60A5FA]"></span>', '<span v-if="idx === activeTab" class="absolute bottom-0 left-0 right-0 h-[2px] bg-brand-dark"></span>')


# Inner elements
content = content.replace('bg-[#0a0a0a]/60', 'bg-surface')
content = content.replace('bg-[#0a0a0a]/50', 'bg-surface')
content = content.replace('bg-[#0a0a0a]', 'bg-surface-light')
content = content.replace('text-[#0a0a0a]', 'text-white')
content = content.replace('text-[#e5e5e5]', 'text-text')
content = content.replace('bg-[#111]', 'bg-surface-light')
content = content.replace('bg-[#0e0e0d]', 'bg-surface')
content = content.replace('border-border/60', 'border-border')
content = content.replace('border-border/80', 'border-border')
content = content.replace('border-border/30', 'border-border')
content = content.replace('border-[#111]', 'border-border')
content = content.replace('bg-surface/60 border-b border-border', 'border-b border-border')

# Specific fixes for parser filename
content = content.replace('text-[#27c93f]', 'text-green-600')

with open(file_path, 'w') as f:
    f.write(content)

