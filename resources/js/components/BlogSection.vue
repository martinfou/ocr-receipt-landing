<template>
    <section id="blog" class="py-24 lg:py-32 border-t border-border bg-surface relative overflow-hidden">
        <!-- Background decorative mesh -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(34,197,94,0.03),transparent_50%)]"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="text-[10px] font-mono text-brand uppercase tracking-widest mb-3 flex items-center justify-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand"></span>
                    // BLOG
                </div>
                <h2 class="text-3xl lg:text-4xl font-serif font-semibold mb-4 tracking-[-0.01em] text-text">
                    {{ $t('blog.title') }}
                </h2>
                <p class="text-text-muted max-w-xl mx-auto text-sm leading-relaxed">
                    {{ $t('blog.subtitle') }}
                </p>
                <div class="h-0.5 w-10 bg-brand/50 mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- Blog Post Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article 
                    v-for="(post, index) in $t('blog.posts')" 
                    :key="index"
                    class="card flex flex-col justify-between p-6 bg-surface-light border border-border hover:border-brand/40 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.02)] dark:shadow-none hover:shadow-[0_12px_30px_-10px_rgba(34,197,94,0.08)] transition-all duration-300 group rounded-xl"
                >
                    <div>
                        <!-- Tag & Date -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[9px] font-mono text-brand uppercase tracking-wider border border-brand/20 px-2 py-0.5 rounded bg-brand/5">
                                {{ post.tag }}
                            </span>
                            <span class="text-[10px] font-mono text-text-muted">
                                {{ post.date }}
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="font-serif font-semibold text-lg mb-3 text-text group-hover:text-brand-dark dark:group-hover:text-brand transition-colors duration-200 line-clamp-2">
                            {{ post.title }}
                        </h3>

                        <!-- Excerpt -->
                        <p class="text-sm text-text-muted leading-relaxed mb-6 line-clamp-3">
                            {{ post.excerpt }}
                        </p>
                    </div>

                    <!-- Footer / Read Time / Action -->
                    <div class="pt-4 border-t border-border/60 flex items-center justify-between text-xs font-mono">
                        <span class="text-text-muted flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            {{ post.readTime }}
                        </span>
                        
                        <a href="#beta" class="text-brand-dark dark:text-brand font-semibold flex items-center gap-1 group-hover:gap-2 transition-all duration-200">
                            {{ post.readMore || $t('blog.readMore') }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'BlogSection'
};
</script>

<style scoped>
/* Scoped styles */
</style>
