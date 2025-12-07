# 🧾 Changelog
All notable changes to this project will be documented in this file.  

## [1.0.0] - 2025-10-05
### 🎉 Initial Release
- 🚀 First stable public release of **Fresh Reminder**.  
- Added automatic freshness indicator (🟢 Fresh, 🔴 Stale) on each post.  
- Introduced admin dashboard page showing all posts with freshness status and last updated date.  
- Included lightweight and performance-focused architecture.  
- Added plugin initialization, constants, and basic security checks (`ABSPATH` protection).  

---

## [1.1.0] - 2025-10-31
### ✨ Major Feature Update
- Added Content Freshness Tracking enhancements with improved accuracy.
- Introduced status-based filtering.
- Added category-based filtering for easy content management by topic.
- Implemented search functionality to quickly find posts by title or tag.
- Added “Pin to CheckBucket” feature — temporarily store posts needing manual review.
- Introduced CheckBucket dashboard section, allowing easy review and management of pinned posts.
- Added plugin Settings Page for customizing freshness thresholds (e.g., 15/60/120 days).
- Improved dashboard with AJAX for smoother updates and no page reloads.
- Optimized caching layer for faster freshness calculations.
- UI improvements for dashboard and widget consistency.
- Code refactoring and security improvements for better maintainability. 

---

## [1.1.1] - 2025-11-07
### ✨ Wordpress Standard Code update
- Fixed responsive layout issues on dashboard and widget interfaces.
- Resolved core function errors affecting freshness status calculations.
- Added a custom admin menu icon for better WordPress integration.
- Improved admin navbar display with modern styling and adaptive design.
- Fixed misaligned dashboard elements on smaller viewports.
- Fixed caching issue causing delayed freshness updates.
- Fixed admin icon not showing in some themes.
- Minor CSS and JS refactoring to ensure consistent UI behavior.

---

## [1.1.2] – 2025-11-09
### ✨ WordPress Standard Code Update
- Added manual library integration for plugin standards compliance.
- Introduced `FR_Logger` class for structured logging (active only when `WP_DEBUG` is enabled).
- Added Font Awesome v4 compatibility with local WOFF2 font file.

---

## [1.1.4] – 2025-12-06
- Added proper plugin prefix to all functions, classes, options, scripts, and AJAX actions.
- Added `ABSPATH` protection to all PHP files for improved security.
- Updated outdated Bootstrap JavaScript file to the latest stable version.
- Fixed license mismatch — readme.txt and LICENSE now both correctly declare GPLv2 or later.
- Added plugin author to the Contributors list in readme.txt.
- Replaced inline `<script>` and `<style>` tags in admin pages with properly enqueued files following WordPress standards.
- Updated logger system — logs are now stored safely inside the uploads directory instead of the root/content folder.

---

## [1.2.0] - _Upcoming_
### ✨ Planned Enhancements 
- Add daily cron job to email admin about stale posts.  
- Add admin notifications for posts nearing “stale” threshold.  
- Add translation support (`.pot` file).  
- Add Gutenberg sidebar block for real-time freshness info.
- Add in search give a dropdown to search by options like posts/products/auther/ keyword

---

## [Future Roadmap]
- [ ] Integration with OpenAI API to suggest automatic post updates for stale content.  
- [ ] Option to auto-refresh content by fetching recent data sources.  
- [ ] REST API endpoints for freshness data.  
- [ ] Admin analytics chart for freshness over time.  

---

## 🧑‍💻 Contributors
- **Hasun Akash Bandara** — Creator & Lead Developer  
- Open for community contributions ❤️  

---

