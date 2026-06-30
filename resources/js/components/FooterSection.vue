<template>
    <footer class="border-t border-border py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="text-sm text-text-muted">
                    &copy; {{ new Date().getFullYear() }} OCR Receipt. All rights reserved.
                </div>
                <div class="flex items-center gap-6 text-sm text-text-muted">
                    <a href="mailto:support@ocrreceipt.com" class="hover:text-amber transition-colors">Support</a>
                    <a href="/appcast.xml" class="hover:text-amber transition-colors">Updates</a>
                    <a href="https://martinfournier.com" class="hover:text-amber transition-colors">Martin Fournier</a>
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
