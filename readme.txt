=== Fresh Reminder ===
Contributors: hasunbandara
Donate link: https://www.buymeacoffee.com/hasunbandara
Tags: seo, post updates, content management, posts reminder, stale posts
Requires at least: 5.5
Tested up to: 6.9
Requires PHP: 7.4
Stable tag: 1.1.4
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Tracks how fresh your WordPress posts are and highlights stale content in both frontend and admin dashboard.

== Description ==
**Fresh Reminder** helps you monitor how fresh your posts are and when they need updating.  
It automatically calculates the age of your posts based on the last modified date and marks them as:

– ✅ **Reviewed** – Manually confirmed as up to date.  
– ⚠️ **Unreviewed** – Not updated for a long time and requires attention.  

The plugin adds a dashboard page showing all your posts sorted by freshness, so you can easily identify which content needs updates.

Ideal for **bloggers, SEO specialists, and content managers** who want to maintain up-to-date content and improve their website’s search performance.

== Features ==
* Automatic content freshness indicator on posts.
* Custom admin dashboard listing all posts with freshness status.
* Filter posts by category, status, or keyword.
* Built-in search for quick access to specific posts.
* “Pin to CheckBucket” — temporarily save posts that need manual review.
* CheckBucket section to manage pinned posts.
* Plugin Settings Page to customize freshness thresholds (e.g., 15/60/120 days).
* AJAX-powered dashboard for smooth interactions without page reloads.
* Optimized caching for improved performance.
* Lightweight and secure — no external API calls.
* Works immediately after activation.

== Screenshots ==
1. Home page
2. Check bucket page
3. Settings page

== Installation ==

= Automatic Installation =
Automatic installation is the easiest option — WordPress will handle the file transfer and you won’t need to leave your browser.  
To install **Fresh Reminder** automatically:

1. Log in to your WordPress Admin dashboard.
2. Navigate to **Plugins → Add New**.
3. In the search bar, type **“Fresh Reminder”**.
4. Locate the plugin in the search results and click **Install Now**.
5. After installation, click **Activate**.

WordPress will take care of the rest.

= Manual Installation =
If you prefer to install the plugin manually:

1. Download the plugin ZIP file or clone from GitHub:  
   `git clone https://github.com/hasunB/fresh-reminder.git`
2. Upload the folder `fresh-reminder` to your WordPress `/wp-content/plugins/` directory.
3. Activate **Fresh Reminder** from your WordPress Admin.
4. Go to **Fresh Reminder** in the WordPress Admin sidebar to view all post freshness data.

For detailed instructions, refer to the WordPress Plugin Handbook or the WordPress Codex on manual plugin installation.

= Updating =
Automatic updates should work without any issues.  
However, it is always recommended to **back up your website** before performing any plugin update—especially on production sites.

Fresh Reminder follows WordPress coding standards and versioning, so updates are safe and tested with the latest WordPress releases.

== Frequently Asked Questions ==

= Can I change the freshness thresholds? =
Yes! Starting from version **1.1.0**, you can customize thresholds from the plugin settings page.

= Does it affect website speed? =
No. It’s extremely lightweight and optimized with internal caching and AJAX for smooth performance.

= Will it work with custom post types? =
Currently supports `post`. Support for custom post types is planned for a future update.

= Is this plugin SEO-friendly? =
Yes! Keeping your content fresh can improve SEO and user engagement.

== Changelog ==

= 1.2.0 – Upcoming =
* Add daily cron job to email admin about stale posts.
* Add admin notifications for posts nearing “stale” threshold.
* Add translation support (`.pot` file).
* Add Gutenberg sidebar block for real-time freshness info.
* Add dropdown in search to filter by posts/products/author/keyword.

= 1.1.4 - 2025-12-06 =
* Added proper plugin prefix to all functions, classes, options, scripts, and AJAX actions.
* Added `ABSPATH` protection to all PHP files for improved security.
* Updated outdated Bootstrap JavaScript file to the latest stable version.
* Fixed license mismatch — readme.txt and LICENSE now both correctly declare GPLv2 or later.
* Added plugin author to the Contributors list in readme.txt.
* Replaced inline `<script>` and `<style>` tags in admin pages with properly enqueued files following WordPress standards.
* Updated logger system — logs are now stored safely inside the uploads directory instead of the root/content folder.

= 1.1.2 – 2025-11-09 =
* **WordPress Standard Code Update**
* Added manual library integration for plugin standards compliance.
* Introduced `FR_Logger` class for structured logging (active only when `WP_DEBUG` is enabled).
* Added Font Awesome v4 compatibility with local WOFF2 font file.

= 1.1.1 – 2025-11-07 =
* Fixed responsive layout issues on dashboard and widget interfaces.
* Resolved core function errors affecting freshness status calculations.
* Added a custom admin menu icon for better WordPress integration.
* Improved admin navbar display with modern styling and adaptive design.
* Fixed misaligned dashboard elements on smaller viewports.
* Fixed caching issue causing delayed freshness updates.
* Fixed admin icon not showing in some themes.
* Minor CSS and JS refactoring to ensure consistent UI behavior.

= 1.1.0 – 2025-10-31 =
* **Major Feature Update**
* Enhanced content freshness tracking accuracy.
* Added status-based and category-based filtering.
* Implemented search for posts by title or tag.
* Introduced “Pin to CheckBucket” for manual review management.
* Added CheckBucket dashboard for pinned posts.
* Introduced settings page to customize freshness thresholds.
* Improved dashboard with AJAX (no reloads).
* Optimized caching for faster freshness calculations.
* UI/UX and security improvements.

= 1.0.0 – 2025-10-05 =
* **Initial Release**
* Added automatic freshness indicator (Reviewed, Stale) on each post.
* Introduced admin dashboard listing all posts with freshness status and last updated date.
* Added plugin initialization, constants, and `ABSPATH` protection.

== Upgrade Notice ==

= 1.2.0 =
Introduces cron jobs for email notifications, admin alerts, translation support, and Gutenberg block integration.
Adds filters, search, CheckBucket, and customizable thresholds for easier content management.

== Roadmap ==
* Integration with OpenAI API to suggest automatic post updates.
* REST API endpoints for freshness data.
* Admin analytics chart to visualize content freshness over time.

== License ==
This plugin is free software; you can redistribute it and/or modify it under the terms of the **GNU General Public License version 3 or later**.

== Author ==
Developed by **Hasun Akash Bandara**  
GitHub: https://github.com/hasunB  
Email: hasunbandara17@gmail.com