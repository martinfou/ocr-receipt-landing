---
name: OCR Receipt Design System
description: Light, Zen-inspired design system focusing on clarity, minimalist desktop setups, and high-fidelity paper textures.
colors:
  brand: "#4ade80"
  brand-dark: "#22c55e"
  brand-deep: "#16a34a"
  surface: "#fafaf9"
  surface-light: "#ffffff"
  text: "#1c1917"
  text-muted: "#78716c"
  border: "#e7e5e4"
typography:
  display:
    fontFamily: "Playfair Display, Georgia, serif"
    fontSize: "clamp(2.5rem, 6vw, 5rem)"
    fontWeight: 400
    lineHeight: 1.1
    letterSpacing: "-0.02em"
  headline:
    fontFamily: "Playfair Display, Georgia, serif"
    fontSize: "clamp(1.75rem, 4vw, 2.5rem)"
    fontWeight: 500
    lineHeight: 1.2
    letterSpacing: "-0.01em"
  body:
    fontFamily: "Inter, ui-sans-serif, system-ui, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.6
  label:
    fontFamily: "JetBrains Mono, ui-monospace, monospace"
    fontSize: "0.875rem"
    fontWeight: 500
    letterSpacing: "0.05em"
rounded:
  sm: "6px"
  md: "12px"
components:
  button-primary:
    backgroundColor: "{colors.brand-dark}"
    textColor: "#ffffff"
    rounded: "{rounded.sm}"
    padding: "12px 24px"
  card:
    backgroundColor: "{colors.surface-light}"
    rounded: "{rounded.md}"
    padding: "24px"
    shadow: "0 10px 40px -10px rgba(0,0,0,0.05)"
---

# Design System: OCR Receipt

## 1. Overview

**Creative North Star: "The Zen Desktop"**

"The Zen Desktop" represents the calm, uncluttered peace of mind that comes from having your finances perfectly organized locally. Rather than a dark, high-tech hacker interface, this design language evokes a peaceful Sunday morning: bright natural light, clean white oak surfaces, a single green plant, and perfectly crisp paper receipts being elegantly digitized.

**Key Characteristics:**
- Bright, airy, off-white backdrops (#fafaf9).
- Clean, structured surfaces with very subtle, elegant drop shadows.
- Natural, calming green accents representing growth, finances, and nature.
- High-fidelity physical paper textures combined with sharp digital overlays.

## 2. Colors

A calming, high-contrast light theme centered around organic tones and clear paper aesthetics.

### Primary
- **Organic Green** (#22c55e): The active primary color used for buttons and progress states. Represents money, growth, and calm.
- **Brand Glow** (#4ade80): Lighter accent for hover states and subtle scan highlighting.
- **Brand Deep** (#16a34a): Darker hue for pressed states or critical emphasis.

### Neutral
- **Zen Stone** (#fafaf9): The default page background. A very subtle warm off-white (stone/alabaster).
- **Crisp Paper** (#ffffff): Bright white for active cards and the core receipt component.
- **Subtle Border** (#e7e5e4): Extremely light borders for separation without visual noise.
- **Deep Ink** (#1c1917): Near-black body text for exceptional legibility and contrast on light backgrounds.
- **Muted Ink** (#78716c): Mid-gray for secondary text and placeholders.

## 3. Typography

**Display Font:** Playfair Display (serif)
**Body Font:** Inter (sans-serif)
**Label/Mono Font:** JetBrains Mono (monospace)

The typographic system contrasts a classic, high-craft editorial serif heading with a modern, high-legibility sans-serif body, giving the brand a premium desktop tool personality.

### Hierarchy
- **Display** (400, clamp(2.5rem, 6vw, 5rem), 1.1): Used exclusively for the hero headline. Max letter-spacing is capped at -0.02em.
- **Headline** (500, clamp(1.75rem, 4vw, 2.5rem), 1.2): Section headings (H2/H3). Sets a structured, confident hierarchy.
- **Title** (500, 1.25rem, 1.3): Cards and secondary details headings.
- **Body** (400, 1rem, 1.6): Standard paragraphs and user copy. Max line length is restricted to 65–75ch for optimal reading.
- **Label** (500, 0.875rem, 0.05em letter-spacing): Monospace labeling for data fields, code blocks, or file paths.

### Named Rules
**The Balance Rule.** All Display and Headline headings must use `text-wrap: balance` to prevent awkward orphaned words and uneven line wrapping.

## 4. Elevation

The system uses very soft, wide, translucent shadows to separate crisp white paper surfaces from the slightly warm stone background.

### Shadow Vocabulary
- **Paper Float** (`box-shadow: 0 10px 40px -10px rgba(0,0,0,0.05)`): Used on cards and the central receipt demo to give them a tangible, physical presence above the desk.
- **Scan Highlight** (`background-color: rgba(74, 222, 128, 0.2)`): A translucent green marker-like highlight over text being extracted.

## 5. Components

### Buttons
- **Shape:** Soft-cornered (6px radius).
- **Primary:** Filled Organic Green (#22c55e) with white text, padding: `12px 24px`.
- **Hover / Focus:** Transitions to Brand Glow (#4ade80) on hover, with a subtle focus ring.
- **Secondary / Outline:** Background transparent, border `1px solid var(--color-border)`, text `var(--color-text)`. Hovers to text and border color `var(--color-brand)`.

### Cards / Containers
- **Corner Style:** Medium-radius (12px radius).
- **Background:** Crisp Paper (#ffffff).
- **Shadow Strategy:** Paper Float shadow by default.
- **Border:** `1px solid var(--color-border)` (#e7e5e4).
- **Internal Padding:** `24px` (`1.5rem`).

### The Receipt Demo
- **Surface:** White (#ffffff) with a subtle paper texture overlay or slight crinkle shadow.
- **Typography:** JetBrains Mono for the actual receipt items, imitating a dot-matrix or thermal printer.
- **Extraction UI:** Floating pill-shaped tooltips pointing to extracted fields (Total, Date, Vendor) using the Organic Green brand color.

## 6. Do's and Don'ts

### Do:
- **Do** wrap all headings with `text-wrap: balance` or `text-wrap: pretty`.
- **Do** use `JetBrains Mono` for metadata details such as file sizes, dates, and JSON tags.
- **Do** preserve body text contrast against the light background.
- **Do** use the `generate_image` tool's desk image as an edge-to-edge background behind the receipt demo.

### Don't:
- **Don't** use dark mode backgrounds or harsh neon glows.
- **Don't** use gradient text headers.
- **Don't** use heavy, muddy shadows; shadows must be wide, soft, and extremely transparent.
