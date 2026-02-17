# Rain Tunnel Wash - WordPress Theme

Custom WordPress theme for Rain Tunnel Wash car wash service. Built with ACF Pro for client-editable content.

## Requirements

- WordPress 6.0+
- PHP 8.0+
- Advanced Custom Fields Pro (plugin must be installed separately)

## Installation

### Local Development (Theme + Cursor)

**Full step-by-step:** See **[SETUP-LOCAL.md](SETUP-LOCAL.md)** for instructions to run WordPress locally while keeping this theme in Cursor and viewing changes in the browser (using a symlink).

**Quick summary:**

1. Set up a local WordPress installation (using Local by Flywheel, MAMP, Docker, etc.)
2. **Symlink this theme** into the site’s `wp-content/themes/` folder so you keep editing in Cursor:
   ```bash
   cd /path/to/your/local/site/wp-content/themes/
   ln -s "/Users/danielferry/sites/Wordpress Sites/Custom WP Template/raintunnelwash-com" raintunnelwash
   ```
3. Activate the theme and ACF Pro in WordPress admin.

**Or** clone/copy into `wp-content/themes/`:
   ```bash
   cd /path/to/wordpress/wp-content/themes/
   git clone <repository-url> raintunnelwash
   ```
3. Install and activate ACF Pro plugin
4. Activate the Rain Tunnel Wash theme in Appearance > Themes

### Forge Deployment

This theme is designed to be deployed via Laravel Forge:

1. On Forge, create a new WordPress site
2. Connect your Git repository
3. Set deploy path to: `wp-content/themes/raintunnelwash`
4. Deploy the theme
5. SSH into server and install ACF Pro plugin manually
6. Activate theme in WordPress admin

## Theme Structure

```
raintunnelwash/
├── style.css                 # Theme declaration
├── functions.php             # Theme setup
├── header.php / footer.php   # Global header/footer
├── front-page.php            # Homepage
├── page-about.php            # About page
├── page-services.php         # Services page
├── page-contact.php          # Contact page
├── page-locations.php        # Locations page
├── page-programs.php         # Programs/Membership page
├── page.php                  # Default page fallback
├── single.php                # Blog post template
├── 404.php                   # 404 error page
├── assets/
│   ├── css/main.css          # Compiled styles
│   └── js/main.js            # JavaScript
├── inc/
│   ├── theme-setup.php       # Theme supports, menus
│   ├── customizer.php        # Theme customizer
│   ├── acf-*.php             # ACF field definitions
│   └── acf-options.php       # Global options page
├── template-parts/           # Reusable template parts
│   ├── home/
│   ├── about/
│   ├── services/
│   ├── contact/
│   ├── locations/
│   └── programs/
└── acf-json/                 # ACF field sync (auto-generated)
```

## Page Templates

| Page | Template File | Slug |
|------|--------------|------|
| Home | front-page.php | (Set as Front Page in Settings > Reading) |
| About | page-about.php | `/about` |
| Services | page-services.php | `/services` |
| Contact | page-contact.php | `/contact` |
| Locations | page-locations.php | `/locations` |
| Programs | page-programs.php | `/programs` |

### Creating Pages

1. Go to Pages > Add New
2. Set the page title (e.g., "About")
3. Set the page slug (e.g., "about")
4. The template will auto-apply based on slug, or manually select the template in Page Attributes

## Client Editing Guide

### Editing Page Content

1. Go to **Pages** in WordPress admin
2. Click on the page you want to edit (e.g., Home, About, Services)
3. Scroll down to see the ACF fields organized in tabs
4. Edit text, upload images, add/remove repeater items
5. Click **Update** to save

### Editing Global Settings

1. Go to **Theme Options** in the admin sidebar
2. Edit site-wide settings:
   - **Main Options**: Logo, footer logo, tagline
   - **Contact Info**: Phone, email, address, business hours
   - **Social Media**: Facebook, Instagram, Twitter, YouTube links

### Managing Menus

1. Go to **Appearance > Menus**
2. Create/edit menus:
   - **Primary Menu**: Main navigation in header
   - **Footer Menu**: Links in footer
   - **Footer Services Menu**: Services links in footer

### Updating Images

1. Click on any image field to open the media library
2. Upload new images or select existing ones
3. Recommended image sizes:
   - Hero backgrounds: 1920x1080px
   - Service/program cards: 600x400px
   - Team photos: 400x400px
   - Logos: 300x100px (PNG with transparency)

## ACF Field Groups

### Home Page
- **Hero Section**: Headline, subheadline, background image/video, CTA buttons
- **Services Preview**: Featured services with icons and descriptions
- **About Preview**: Intro text, image, features list
- **Testimonials**: Customer reviews with ratings
- **CTA Section**: Call-to-action with background

### About Page
- **Hero Section**: Page title, subtitle, background
- **Story Section**: Company story, image, stats
- **Team Section**: Team members with photos and bios
- **Mission Section**: Mission statement, core values

### Services Page
- **Hero Section**: Page title, subtitle, background
- **Services**: Service cards with name, price, features, images
- **Add-ons**: Additional upsell services
- **CTA Section**: Call-to-action

### Contact Page
- **Hero Section**: Page title, subtitle, background
- **Contact Info**: Phone, email, address (can use global settings)
- **Hours**: Business hours
- **Map**: Google Maps embed code
- **Form**: Contact form shortcode

### Locations Page
- **Hero Section**: Page title, subtitle, background
- **Locations**: Multiple locations with address, hours, map, features

### Programs Page
- **Hero Section**: Page title, subtitle, background
- **Programs**: Membership/subscription plans with pricing
- **Benefits**: Member benefits
- **FAQ**: Frequently asked questions

## Theme Customizer

Access via **Appearance > Customize**:

- **Brand Colors**: Primary, secondary, accent colors
- Colors are applied site-wide via CSS variables

## Development Notes

### CSS Architecture
- CSS uses custom properties (variables) for easy theming
- Mobile-first responsive design
- BEM-style class naming

### JavaScript
- Vanilla JavaScript (no jQuery dependency)
- Features: Mobile menu, smooth scroll, scroll animations, FAQ accordion, testimonials slider

### Adding New Pages

1. Create new template file: `page-newpage.php`
2. Create ACF fields file: `inc/acf-fields-newpage.php`
3. Include the fields file in `inc/acf-fields.php`
4. Create template parts in `template-parts/newpage/`
5. Style in `assets/css/main.css`

## Troubleshooting

### ACF Fields Not Showing
- Ensure ACF Pro is installed and activated
- Check that the page slug matches the field group location rule

### Styles Not Loading
- Clear browser cache
- Check that files exist in `assets/css/` and `assets/js/`

### Template Not Applied
- Check page slug matches template file name (e.g., `about` for `page-about.php`)
- Or manually select template in Page Attributes

## Support

For theme updates or modifications, edit files in Cursor and deploy via Git.

---

Version: 1.0.0
