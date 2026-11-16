<template>
    <!-- Real screenshots of the desktop app (demo data), played as a short crossfade.
         One sequence per step (under 5 s), then it rests on the last frame. Timers stop
         off-screen; under prefers-reduced-motion only the last frame is shown. -->
    <div ref="root" class="relative w-full aspect-[16/10] bg-surface-raised">
        <img
            v-for="(src, i) in frames"
            :key="src"
            :src="src"
            :alt="i === frames.length - 1 ? alt : ''"
            :aria-hidden="i === frames.length - 1 ? null : 'true'"
            width="1440"
            height="900"
            class="lp-tour-frame absolute inset-0 block w-full h-full object-cover object-top"
            :class="i === current ? 'opacity-100' : 'opacity-0'"
            :loading="i === frames.length - 1 ? 'eager' : 'lazy'"
        >
    </div>
</template>

<script>
const FRAME_MS = 1400;

export default {
    name: 'TourAnimation',
    props: {
        // Image URLs in play order; the last one is the resting frame and carries the alt text.
        frames: { type: Array, required: true },
        alt: { type: String, required: true }
    },
    data() {
        return {
            current: this.frames.length - 1,
            visible: false,
            pending: true
        };
    },
    watch: {
        // A theme switch swaps the frame set in place without replaying; a different step replays.
        frames(next, prev) {
            if (!prev || next.length !== prev.length) this.restart();
        }
    },
    mounted() {
        this.motionQuery = window.matchMedia ? window.matchMedia('(prefers-reduced-motion: reduce)') : null;
        if ('IntersectionObserver' in window) {
            this.observer = new IntersectionObserver((entries) => {
                this.visible = entries[entries.length - 1].isIntersecting;
                if (this.visible && this.pending) this.play();
                else if (!this.visible) this.finish();
            }, { threshold: 0.25 });
            this.observer.observe(this.$refs.root);
        } else {
            this.visible = true;
            this.play();
        }
    },
    beforeUnmount() {
        this.stop();
        if (this.observer) this.observer.disconnect();
    },
    methods: {
        reducedMotion() {
            return !!(this.motionQuery && this.motionQuery.matches);
        },
        stop() {
            clearInterval(this.timer);
            this.timer = null;
        },
        // Jump to the resting frame.
        finish() {
            this.stop();
            this.current = this.frames.length - 1;
        },
        restart() {
            this.pending = true;
            this.finish();
            if (this.visible) this.play();
        },
        play() {
            this.pending = false;
            this.stop();
            if (this.reducedMotion() || this.frames.length < 2) {
                this.current = this.frames.length - 1;
                return;
            }
            this.current = 0;
            this.timer = setInterval(() => {
                if (this.current >= this.frames.length - 1) {
                    this.stop();
                    return;
                }
                this.current += 1;
            }, FRAME_MS);
        }
    }
};
</script>

<style scoped>
@media (prefers-reduced-motion: no-preference) {
    .lp-tour-frame { transition: opacity 0.4s ease; }
}
</style>
