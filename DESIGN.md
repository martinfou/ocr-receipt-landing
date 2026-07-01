---
name: OCR Receipt Design System
description: Dark-mode design system with secure glows and clean serif headlines.
colors:
  brand: "#60A5FA"
  brand-dark: "#3B82F6"
  brand-deep: "#2563EB"
  surface: "#0a0a0a"
  surface-light: "#161615"
  text: "#e5e5e5"
  text-muted: "#a1a09a"
  border: "#3e3e3a"
typography:
  display:
    fontFamily: "Playfair Display, Georgia, serif"
    fontSize: "clamp(2.5rem, 6vw, 5rem)"
    fontWeight: 600
    lineHeight: 1.1
    letterSpacing: "-0.02em"
  headline:
    fontFamily: "Playfair Display, Georgia, serif"
    fontSize: "clamp(1.75rem, 4vw, 2.5rem)"
    fontWeight: 600
    lineHeight: 1.2
    letterSpacing: "-0.01em"
  body:
    fontFamily: "Inter, ui-sans-serif, system-ui, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.5
  label:
    fontFamily: "JetBrains Mono, ui-monospace, monospace"
    fontSize: "0.875rem"
    fontWeight: 500
    letterSpacing: "0.05em"
rounded:
  sm: "8px"
  md: "12px"
components:
  button-primary:
    backgroundColor: "{colors.brand-dark}"
    textColor: "#ffffff"
    rounded: "{rounded.sm}"
    padding: "12px 24px"
  button-primary-hover:
    backgroundColor: "{colors.brand}"
  card:
    backgroundColor: "{colors.surface-light}"
    rounded: "{rounded.md}"
    padding: "24px"
---

# Design System: OCR Receipt

## 1. Overview

**Creative North Star: "The Local Enclave"**

"The Local Enclave" is a secure, dark-themed digital sanctuary focusing on isolated local processing, sleek lines, and high-performance receipt data extraction. It reflects the core brand promise of privacy: financial data never leaves the user's computer. The design language avoids generic, soft SaaS pastel palettes and warm, saturating AI-beige default tones in favor of deep obsidian black backgrounds, structured grids, and striking blue scan glows.

Typography pairs a refined, intellectual editorial serif font for primary headings with a highly legible geometric sans font for body copy. Subtle, high-accuracy monospace labeling highlights technical elements, mimicking the output of local terminal processors.

**Key Characteristics:**
- Deep obsidian backdrop for visual focus and battery-saving efficiency.
- Flat surfaces structured by dark colors and crisp borders.
- Glowing active scan cues in high-contrast cyan/blue.
- Crisp, restrained transitions for high-performance interactive feedback.

## 2. Colors

A premium, high-contrast dark theme centered around scanning clarity and structural confinement.

### Primary
- **Secure Scan Blue** (#3B82F6): The active highlight color used for files, text extractions, progress cues, and primary conversion CTAs.
- **Brand Glow** (#60A5FA): High-light accent color for scan animations and hover state states.
- **Brand Deep** (#2563EB): Darker blue hue for pressed or deep-focus buttons.

### Neutral
- **Obsidian Black** (#0a0a0a): The default page background. A solid dark canvas that anchors the product.
- **Enclave Gray** (#161615): Lightened surface background for structured panels, cards, and input fields.
- **Solid Gray Border** (#3e3e3a): Restrained borders for inputs, buttons, and section dividers.
- **Active Ink** (#e5e5e5): High-contrast light gray body text ensuring WCAG AA contrast.
- **Muted Ink** (#a1a09a): Lower contrast text for secondary descriptions and placeholders.

### Named Rules
**The Rarity Rule.** Secure Scan Blue is reserved strictly for interactive components, status indicators, and active scan highlights. It must cover less than 10% of any screen layout to preserve visual impact.

## 3. Typography

**Display Font:** Playfair Display (serif)
**Body Font:** Inter (sans-serif)
**Label/Mono Font:** JetBrains Mono (monospace)

The typographic system contrasts a classic, high-craft editorial serif heading with a modern, high-legibility sans-serif body, giving the brand a premium desktop tool personality.

### Hierarchy
- **Display** (600, clamp(2.5rem, 6vw, 5rem), 1.1): Used exclusively for the hero headline. Max letter-spacing is capped at -0.02em.
- **Headline** (600, clamp(1.75rem, 4vw, 2.5rem), 1.2): Section headings (H2/H3). Sets a structured, confident hierarchy.
- **Title** (600, 1.25rem, 1.3): Cards and secondary details headings.
- **Body** (400, 1rem, 1.5): Standard paragraphs and user copy. Max line length is restricted to 65–75ch for optimal reading.
- **Label** (500, 0.875rem, 0.05em letter-spacing): Monospace labeling for data fields, code blocks, or file paths.

### Named Rules
**The Balance Rule.** All Display and Headline headings must use `text-wrap: balance` to prevent awkward orphaned words and uneven line wrapping.

## 4. Elevation

The system is flat by default, avoiding floating box shadows. Depth is conveyed strictly via tonal layering (e.g. Enclave Gray containers on Obsidian Black backgrounds) and thin borders.

### Shadow Vocabulary
- **Scan Glow** (`box-shadow: 0 0 40px rgba(59, 130, 246, 0.15)`): Used exclusively to highlight the receipt image active scanning beam or active focus areas.

### Named Rules
**The Flat-By-Default Rule.** Elements do not float. Card containers remain flush with the background, using `#3e3e3a` borders for containment. Soft shadows are prohibited unless signifying an active, state-triggered scan glow.

## 5. Components

Components are refined and restrained, relying on crisp outlines and smooth transitions rather than heavy colors.

### Buttons
- **Shape:** Soft-cornered (8px radius).
- **Primary:** Filled Secure Scan Blue with white text, using `var(--color-brand-dark)` padding: `12px 24px`.
- **Hover / Focus:** Transitions to `var(--color-brand)` on hover, with a subtle focus ring.
- **Secondary / Outline:** Background transparent, border `1px solid var(--color-border)`, text `var(--color-text)`. Hovers to text and border color `var(--color-brand)`.

### Cards / Containers
- **Corner Style:** Medium-radius (12px radius).
- **Background:** `var(--color-surface-light)` (#161615).
- **Shadow Strategy:** Flat by default, optional `.glow` on hover.
- **Border:** `1px solid var(--color-border)` (#3e3e3a).
- **Internal Padding:** `24px` (`1.5rem`).

### Inputs / Fields
- **Style:** Clean solid stroke (#3e3e3a), Enclave Gray background, 8px radius.
- **Focus:** Transitions border to Secure Scan Blue (#3B82F6) with a subtle glowing aura.

### Navigation
- **Style:** Top bar layout. Semi-transparent `#0a0a0a` background with `backdrop-filter: blur(12px)` and a bottom border. Text links transition to Secure Scan Blue on hover.

## 6. Do's and Don'ts

### Do:
- **Do** wrap all headings with `text-wrap: balance` or `text-wrap: pretty`.
- **Do** use `JetBrains Mono` for metadata details such as file sizes, dates, and JSON tags.
- **Do** preserve body text contrast of at least 4.5:1 against the dark background.
- **Do** implement standard ease-out transitions (`transition: all 0.15s ease`) for hover states.

### Don't:
- **Don't** use warm cream, sand, paper, or beige background colors.
- **Don't** use gradient text headers (`background-clip: text` with a gradient backdrop).
- **Don't** use card side-stripe borders as accents.
- **Don't** add arbitrary shadows to card components; rely on flat tonal layering instead.
