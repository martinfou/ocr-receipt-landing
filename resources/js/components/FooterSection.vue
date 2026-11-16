<template>
    <footer class="on-inverse bg-inverse-surface text-inverse-body">
        <div class="lp-wrap py-10 flex flex-col desk:flex-row flex-wrap desk:justify-between gap-4 lp-caption">
            <p :lang="$t('footer.madeInLang') || null">{{ $t('footer.madeIn') }}</p>
            <nav :aria-label="$t('footer.linksLabel')" class="flex flex-wrap items-center gap-x-5 gap-y-1">
                <a href="mailto:support@ocrreceipt.com" class="inline-flex items-center min-h-[44px] font-mono font-bold text-inverse-accent">support@ocrreceipt.com</a>
                <a :href="$t('footer.blogHref')" class="inline-flex items-center min-h-[44px] text-inverse-body">{{ $t('footer.blog') }}</a>
                <a href="/vs/dext" class="inline-flex items-center min-h-[44px] text-inverse-body">vs Dext</a>
                <a href="/vs/neat" class="inline-flex items-center min-h-[44px] text-inverse-body">vs NeatReceipts</a>
                <a href="/alternative-hubdoc" class="inline-flex items-center min-h-[44px] text-inverse-body">vs Hubdoc</a>
            </nav>
            <p class="text-inverse-muted">{{ $t('footer.noPopup') }}</p>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'FooterSection'
};
</script>
