# Home Page Feedback — Client SO (26/03)

Source: `1_HOME_WebsiteFeedback_SO 2603.docx`

---

## Completed (HIGH confidence — applied autonomously)

### 1. Hero Heading & Subheading
- **Old:** "Your Future in Australia Starts Here" / "Independent education..."
- **New:** "Start Your Journey to Australia with Us Today!" / "STUDY | WORK | LIVE" / "Your trusted advisors since the 90s"
- **File:** `resources/views/pages/home.blade.php` lines 17-18
- **Status:** DONE

### 2. Logo — Keep Original
- No change needed. Already using original logo.
- **Status:** DONE (verified)

### 5. Stats Bar — Updated Numbers
- 25+ Years of service (was 28+ dynamic)
- 145+ Client countries (was 40+)
- 100+ Australian institutions (was 1,100+)
- 1,000+ Programmes (was 7 Top 100 universities)
- 24/7 Emergency support (unchanged)
- **File:** `resources/views/pages/home.blade.php` stat-block section
- **Status:** DONE

### 6. What We Do — Card Copy Updates
- Education: "...we help you choose the right institution and programme for your goals."
- Migration: "...support you through the entire application process."
- Career: "...only has value if it leads to real work opportunities."
- **File:** `resources/views/pages/home.blade.php` What We Do section
- **Status:** DONE

### 7. How We Care — Full Rewrite
- Heading: "We stand behind more than half a century of collective experience."
- Body: 3 paragraphs (honest advice + dedicated advisor, tell you when unlikely, we were international students too)
- **File:** `resources/views/pages/home.blade.php` How We Care section
- **Status:** DONE

### 8. UK Spelling — "Programs" to "Programmes"
- Section heading changed to "Featured Programmes"
- Checked all views — no other instances found
- **Status:** DONE

### 10. Universities — Added Notre Dame & Southern Cross
- Heading: "Globally recognised universities are here in Western Australia."
- Lists all 6 universities in body text
- **File:** `resources/views/pages/home.blade.php` Why WA section
- **Status:** DONE

### 16. Final CTA — Copy Tweak
- "Most people aren't." changed to "Most people don't either."
- **File:** `resources/views/pages/home.blade.php` CTA banner
- **Status:** DONE

### 17. WhatsApp Added to CTA Banner
- Added `whatsapp` prop to `<x-cta-banner>` component
- WhatsApp number: +61 411 708 899
- Displays as clickable wa.me link with WhatsApp icon
- **Files:** `resources/views/components/cta-banner.blade.php`, `resources/views/pages/home.blade.php`
- **Status:** DONE

---

## Pending — Needs Clarification (MEDIUM confidence)

### 3. WhatsApp on Book a Consultation Button
- Client wants WhatsApp option on the "Book a Consultation" CTA
- **Question:** Where exactly? Nav bar CTA? All CTA buttons? Floating widget?
- **Status:** PENDING — WhatsApp added to bottom CTA banner only so far

### 9. Featured Programmes — Card Rewrites
- Buddy Programme: badge "7D - 14D IMMERSION", new copy about experiencing school life
- SCSA card being replaced with "Holiday Programme" (1W - 4W STUDY & TOUR)
- **Question:** Where does the SCSA content go? Separate featured card? Only on subpage?
- Client also has SCSA logos/assets on Google Drive to incorporate
- **Status:** PENDING

### 13. AQF Framework Section (Replaces "One Curriculum. K to PhD.")
- Significantly more content: heading + subheading + 3 benefit blocks
- Copy is provided in full in the feedback doc
- **Question:** Keep as a card (condensed) or expand to full-width section?
- **Status:** PENDING

### 15. Partner Logos — Changes
- Remove South Metropolitan TAFE and North Metropolitan TAFE
- Replace with TIWA (TAFE International WA)
- **Question:** Need TIWA logo file. Remove grayscale filter? Add more logos from Drive?
- **Status:** PENDING

### 19. Study Pathways Table (Annex 1)
- Detailed table: study levels, durations, English proficiency, post-study work visas
- **Question:** Home page (new section) or separate page (Education Overview)?
- **Status:** PENDING

---

## Pending — Needs Assets or Decision (LOW confidence)

### 4. Hero Overlay — Blue Instead of Black
- Client: "Not too keen on black overlay — anything brighter i.e. Blue"
- Current: black gradient overlay on hero image
- **Needs:** Which shade of blue? Options: primary-900/85%, primary-700/75%, gradient
- **Status:** PENDING

### 11. Post-Study Work Card Image
- Client wants Asian engineers working image for "Your degree comes with time to use it" card
- Provided specific Freepik URL
- **Needs:** Image file downloaded/purchased from Freepik
- **Status:** PENDING

### 12. Job Market Section — Icons + Copy
- New copy provided: "Western Australia's thriving industries will continue to demand..."
- Icons from Canva link (canva.link/62a9uzrcvj5ptwr)
- **Needs:** Exported icons from Canva (can't access directly)
- **Status:** PENDING

### 14. Testimonials — Real Client Quotes
- Client: "Is this real? Can you use the ones from our current website?"
- Current testimonials are DB-driven
- **Needs:** Confirm if current DB entries are real or placeholder. If placeholder, provide real ones.
- **Status:** PENDING

### 18. Free Education Consult Mention
- "Education consult is free, visa is not"
- **Needs:** Business/legal decision on where and how to communicate this
- **Status:** PENDING
