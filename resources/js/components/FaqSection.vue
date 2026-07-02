<template>
    <section id="faq" class="py-24 lg:py-32">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl lg:text-4xl font-serif font-semibold text-center mb-16 tracking-[-0.01em] text-text">
                {{ $t('faq.title') }}
            </h2>

            <div class="space-y-4">
                <div v-for="(item, i) in $t('faq.items')" :key="i"
                     class="card cursor-pointer select-none transition-all duration-300"
                     :class="openIndex === i ? 'border-brand/40 bg-surface-light' : 'hover:border-border'"
                     @click="toggle(i)">
                    
                    <!-- Question Header -->
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-medium text-base text-text">{{ item.q }}</h3>
                        <span class="text-brand text-xl font-light shrink-0 transition-transform duration-300" 
                              :class="openIndex === i ? 'rotate-45 text-brand' : 'text-text-muted'">
                            +
                        </span>
                    </div>
                    
                    <!-- Answer Section with Grid Height Transition -->
                    <div class="accordion-transition" :class="{ 'is-open': openIndex === i }">
                        <div class="accordion-inner">
                            <div class="pt-4 text-sm text-text-muted leading-relaxed">
                                {{ item.a }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'FaqSection',
    data() {
        return {
            openIndex: null
        };
    },
    methods: {
        toggle(i) {
            this.openIndex = this.openIndex === i ? null : i;
        }
    }
};
</script>
