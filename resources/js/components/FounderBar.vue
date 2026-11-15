<template>
    <!-- Counter hidden state: no number, no progress bar. -->
    <div class="on-inverse bg-inverse-surface text-inverse-ink">
        <div class="lp-wrap py-2.5 flex flex-wrap justify-center items-center gap-x-4 gap-y-2 lp-caption text-center">
            <p><strong class="text-inverse-accent">{{ $t('founderBar.label') }}</strong> {{ $t('founderBar.text') }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'FounderBar'
};
</script>
