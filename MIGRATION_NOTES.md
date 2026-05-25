# Website Rebranding Migration - Loknete Appasaheb Rajale College of Pharmacy

**Migration Date:** May 25, 2026  
**Original College:** Rashtriya College of Pharmacy  
**New College:** Loknete Appasaheb Rajale College of Pharmacy  
**Previous Website:** http://www.rcph.com/  
**New Website:** https://pharmacy.dprss.in

---

## Migration Overview

Successfully migrated and rebranded the existing pharmacy college website from Rashtriya College of Pharmacy to Loknete Appasaheb Rajale College of Pharmacy while maintaining all existing design, layout, structure, and functionality.

---

## New College Details

| Field | Details |
|-------|---------|
| **College Name** | Loknete Appasaheb Rajale College of Pharmacy |
| **Trust/Sanstha** | Shri. Dadapatil Rajale Shikshan Sanstha's |
| **Address** | Adinathnagar, Tq. Pathardi, Dist. Ahilyanagar - 414505 |
| **Approvals** | DTE Mumbai, PCI New Delhi, Affiliated to DBATU Lonere & MSBTE Mumbai |
| **Website** | https://pharmacy.dprss.in |
| **Contact-Us Page** | https://pharmacy.dprss.in/contact-us/ |
| **Facebook** | https://www.facebook.com/p/Loknete-Appasaheb-Rajale-College-of-Pharmacy-61571782545648/ |
| **Instagram** | https://www.instagram.com/larcop_adinathnagar |

---

## Files Modified

### 1. **components/header_t.php** (Meta Tags & SEO)
**Changes:**
- Updated meta description for new college
- Changed keywords: `rcph` → `larcop`, updated location keywords
- Updated canonical URL: `http://www.rcph.com/` → `https://pharmacy.dprss.in`
- Updated Open Graph (OG) tags for social sharing
- Updated Twitter card meta tags
- All meta tags now reference "Loknete Appasaheb Rajale College of Pharmacy"

**Purpose:** Ensures correct SEO and social media sharing

---

### 2. **components/header_b.php** (Header & Navigation)
**Changes:**
- Trust name: "Rashtriya charitable trust's" → "Shri. Dadapatil Rajale Shikshan Sanstha's"
- College name: "Rashtriya College of Pharmacy" → "Loknete Appasaheb Rajale College of Pharmacy"
- Address: "Hatnur Tq. Kannad, Dist. Aurangabad - 431103" → "Adinathnagar, Tq. Pathardi, Dist. Ahilyanagar - 414505"
- Approval text: Removed AICTE reference (kept: DTE, PCI, DBATU, MSBTE)
- Removed AICTE & HTE approval logos (now displays 4 logos instead of 6)
- Updated social media links:
  - Facebook: New college page URL
  - Instagram: New college Instagram handle
  - Twitter/YouTube: Set to website homepage
- Updated "About Us" menu: "Institutes under Rashtriya Charitable Trust" → "Institutes under Shri. Dadapatil Rajale Shikshan Sanstha"

**Purpose:** Main website header with branding and navigation

---

### 3. **components/footer.php** (Footer & Contact)
**Changes:**
- Updated college address in "Institute Address" section
- Phone numbers: **PLACEHOLDER** - `[ADD_PHONE_1]`, `[ADD_PHONE_2]` (awaiting actual numbers)
- Email: **PLACEHOLDER** - `[ADD_EMAIL]` (awaiting actual email)
- Updated social media links:
  - Facebook: New college page URL
  - Instagram: New college Instagram handle
  - Twitter/YouTube: Set to website homepage
- Copyright: "© 2021 Rashtriya College of Pharmacy..." → "© 2024 Loknete Appasaheb Rajale College of Pharmacy..."

**Purpose:** Footer contains contact information and social links

---

### 4. **index.php** (Main Page)
**Status:** ✅ Already contains correct title
- Title: "Loknete Appasaheb Rajale College of Pharmacy" (was already updated)
- Carousel images: Verify image alt texts reference new college name
- Note: Image filename "Rashtriya clg website images-01.png" is unchanged (suggest renaming for consistency)

**Purpose:** Main landing page

---

## ⚠️ Action Items - Still Pending

### Contact Details Required
The footer contact section has placeholders that need to be filled:

**File:** `components/footer.php` (lines 15-24)

```php
<!-- CURRENT PLACEHOLDER - UPDATE NEEDED -->
<a href="tel:[ADD_PHONE_1]"><i class="icon ion-md-call icon-small"></i>[ADD_PHONE_1]</a>
<a href="tel:[ADD_PHONE_2]"><i class="icon ion-md-call icon-small"></i>[ADD_PHONE_2]</a>
<a href="mailto:[ADD_EMAIL]"><i class="icon ion-ios-mail icon-small"></i>[ADD_EMAIL]</a>
```

**Required Information:**
1. College phone number(s) - 2 numbers (replace `[ADD_PHONE_1]` and `[ADD_PHONE_2]`)
2. College email address - (replace `[ADD_EMAIL]`)

---

## Image & Branding Notes

### Logo Files
| File | Status | Notes |
|------|--------|-------|
| `/img/logo_tr.png` | Keep | Used in header |
| `/img/trust.jpeg` | Verify | Trust image in header - confirm if matches new trust |

### Slider Images
| File | Current Name | Suggested Name | Action |
|------|-------------|-----------------|--------|
| Slider image | `Rashtriya clg website images-01.png` | `larcop_slide_01.png` | Optional rename for consistency |

### Approval Logos
**Updated from 6 to 4 logos:**
- ✅ Kept: DTE.png, DBATU.jpg, MSBTE.png, PCI.png
- ❌ Removed: AICTE.png, HTE.png

**File:** `/img/approvel/` directory

---

## Preserved Structure

The following were **NOT changed** (as per requirements):
- ✅ All PHP include structure and functionality
- ✅ Bootstrap compatibility (Bootstrap 4.5.2)
- ✅ CSS files and styling
- ✅ JavaScript functionality
- ✅ Page layout and responsiveness
- ✅ Navigation menu structure
- ✅ Enquiry form functionality
- ✅ Quick enquiry form at bottom

---

## SEO & Meta Tags Summary

### Meta Description
**Old:** "The college offers Diploma in Pharmacy (D. pharm.) And Bachelor of Pharmacy (B. Pharm.) courses."

**New:** "Loknete Appasaheb Rajale College of Pharmacy offers Diploma in Pharmacy (D. Pharm.) and Bachelor of Pharmacy (B. Pharm.) courses. Approved by DTE Mumbai, PCI New Delhi, Affiliated to DBATU and MSBTE."

### Keywords Updated
- Removed: rcph, Hatnur, Aurangabad
- Added: larcop, Adinathnagar, Pathardi, Ahilyanagar

### Canonical URL
- Old: `http://www.rcph.com/`
- New: `https://pharmacy.dprss.in`

---

## Testing Checklist

- [ ] Verify all social media links open to correct pages
- [ ] Test header display on mobile and desktop
- [ ] Verify footer contact section displays correctly
- [ ] Check carousel images load properly
- [ ] Test enquiry form submission
- [ ] Verify approval logos display (4 logos now)
- [ ] Check navigation menu functionality
- [ ] Verify meta tags in page source (F12 Developer Tools)

---

## Future Maintenance

### When updating college information:
1. **Header changes**: Edit `components/header_b.php`
2. **Footer changes**: Edit `components/footer.php`
3. **Meta tags/SEO**: Edit `components/header_t.php`
4. **Social links**: Update in BOTH header_b.php AND footer.php

### Consistency checklist:
- College name appears consistently across all files
- Address format matches everywhere
- Social media links updated in both locations
- Email and phone numbers match in footer

---

## Original College Details (For Reference)

| Old Field | Old Value |
|-----------|-----------|
| College Name | Rashtriya College of Pharmacy |
| Trust | Rashtriya charitable trust's |
| Address | Hatnur, Tq. Kannad, Dist. Aurangabad - 431103 |
| Approvals | AICTE, DTE, PCI, DBATU, MSBTE, HTE |
| Website | http://www.rcph.com/ |
| Email | rashtriyacollege2009@gmail.com |
| Social | Facebook/Twitter/Instagram/YouTube links |

---

## Version History

| Date | Version | Changes | Status |
|------|---------|---------|--------|
| May 25, 2026 | 1.0 | Complete rebranding from Rashtriya to LARCOP | ✅ Complete |
| TBD | 1.1 | Add actual contact details | ⏳ Pending |

---

## Support & Questions

For questions about the migration or to make updates, refer to:
- **Header changes:** `components/header_b.php`
- **Footer updates:** `components/footer.php`
- **SEO/Meta:** `components/header_t.php`
- **Main page:** `index.php`

**Last Updated:** May 25, 2026  
**Migrated By:** GitHub Copilot  
**Original Developer:** Shankar Langote
