<template>
    <footer class="border-t border-border py-12 bg-surface">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="text-sm text-text-muted">
                    {{ $t('footer.rights') }}
                </div>
                <div class="flex items-center gap-6 text-sm text-text-muted">
                    <span class="text-xs">{{ $t('footer.developedBy') }}</span>
                    <span class="text-border">|</span>
                    <a href="#features" class="hover:text-brand transition-colors">{{ $t('footer.links.product') }}</a>
                    <a href="https://github.com/martinfou" target="_blank" rel="noopener" class="hover:text-brand transition-colors">{{ $t('footer.links.github') }}</a>
                    <a href="#beta" class="hover:text-brand transition-colors">{{ $t('footer.links.contact') }}</a>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'FooterSection'
};
</script>
