# Local WordPress Setup for Rain Tunnel Wash Theme

This guide gets your theme running locally so you can build in Cursor and view changes in the browser. The theme folder stays in Cursor; Local runs WordPress and loads the theme via a **symlink**.

---

## Option A: Local by Flywheel (Recommended)

### 1. Install Local

- Download from [localwp.com](https://localwp.com) (free).
- Install and open Local.

### 2. Create a New WordPress Site

1. Click **"+ Create a new site"**.
2. Choose **"Create a new site"** (not “Clone” or “Import”).
3. **Site name:** `raintunnelwash` (or any name).
4. **Environment:** Preferred (e.g. Preferred).
5. **WordPress setup:**
   - Set admin username, password, and email.
   - Or use “Admin” / “admin” / your email for simplicity.
6. Click **Add Site** and wait for the site to be created.

### 3. Link This Theme to the Local Site (Symlink)

You’ll add a “shortcut” (symlink) so WordPress loads your theme from the folder you edit in Cursor. Do this in two parts: **A** in Local/Finder, **B** in Terminal.

---

**Part A: Get to the themes folder in Local**

1. **In Local:** In the left sidebar, click your site name (e.g. **raintunnelwash**) so the site is selected.

2. **In Local:** Right‑click the site name (or use the **⋯** three‑dot menu next to it).  
   In the menu, look for **“Reveal in Finder”** or **“Open site folder”** or **“Go to site folder”** and click it.  
   A Finder window opens showing your site’s root folder (e.g. a folder named **raintunnelwash**).

3. **In Finder:** Double‑click into **app**.

4. **In Finder:** Double‑click into **public**.

5. **In Finder:** Double‑click into **wp-content**.

6. **In Finder:** Double‑click into **themes**.  
   You should now see folders like **twentytwentyfour**, **twentytwentythree**, etc. This is the **themes** folder. Leave this Finder window open (you’ll confirm the symlink here later).

---

**Part B: Create the symlink in Terminal**

7. **Open Terminal** (Mac: Spotlight → type “Terminal” → Enter, or use Cursor’s terminal).

8. **Go to the themes folder.** Paste this command and press Enter (replace `raintunnelwash` with your site name if it’s different):

   ```bash
   cd ~/Local\ Sites/raintunnelwash/app/public/wp-content/themes/
   ```

   You’re now “inside” the same **themes** folder you have open in Finder.

9. **Create the symlink.** Paste this entire line and press Enter:

   ```bash
   ln -s "/Users/danielferry/sites/Wordpress Sites/Custom WP Template/raintunnelwash-com" raintunnelwash
   ```

   Nothing will print if it worked. This creates a folder named **raintunnelwash** inside **themes** that points to your Cursor project folder.

10. **Confirm in Finder:** Switch back to the Finder window showing **themes**. You should see a new folder **raintunnelwash** with a small arrow on the icon (that means it’s a symlink).  
    If you see that, you’re done with Step 3. Continue to Step 4 to activate the theme in WordPress.

### 4. Start the Site and Activate the Theme

1. In Local, make sure the site is **Running** (green).
2. Click **WP Admin** (or **Open Site**) to open the site.
3. Log in if prompted.
4. Go to **Appearance → Themes**.
5. Find **Rain Tunnel Wash** and click **Activate**.

### 5. Install ACF Pro (Required for This Theme)

1. In WP Admin, go to **Plugins → Add New**.
2. Click **Upload Plugin** and choose your ACF Pro ZIP (from your license).
3. Install and **Activate**.

### 6. View the Site While Working in Cursor

- **Site URL:** Local shows it (e.g. `https://raintunnelwash.local` or `http://raintunnelwash.local`).
- **In Cursor:** `Cmd + Shift + P` → **Simple Browser: Show** → enter that URL.
- Edit theme files in Cursor → save → refresh the Simple Browser (or external browser) to see changes.

No need to copy files: the symlink means Local serves the same files you edit in Cursor.

---

## Option B: MAMP

### 1. Install MAMP

- Download [MAMP](https://www.mamp.info) (free version).
- Install and open MAMP. Start **Apache** and **MySQL**.

### 2. Install WordPress

1. Download WordPress from [wordpress.org](https://wordpress.org/download).
2. Unzip and rename the folder to `raintunnelwash` (or your choice).
3. Put it in MAMP’s web root:
   - **MAMP:** `Applications/MAMP/htdocs/raintunnelwash`
   - So the site URL is: `http://localhost:8888/raintunnelwash` (if MAMP uses port 8888).

4. Create a database:
   - Open **http://localhost:8888/phpMyAdmin**.
   - New database: `raintunnelwash`.
   - User/password: usually `root` / `root` for MAMP.

5. Run the WordPress installer:  
   `http://localhost:8888/raintunnelwash`  
   Use the database name, user, and password above.

### 3. Symlink the Theme

From Terminal:

```bash
cd /Applications/MAMP/htdocs/raintunnelwash/wp-content/themes/
ln -s "/Users/danielferry/sites/Wordpress Sites/Custom WP Template/raintunnelwash-com" raintunnelwash
```

### 4. Activate Theme and ACF Pro

- **Appearance → Themes** → Activate **Rain Tunnel Wash**.
- **Plugins → Add New → Upload** → install and activate ACF Pro.

### 5. View in Cursor

- **Simple Browser:** `http://localhost:8888/raintunnelwash`  
  (Use the port MAMP shows, often 8888.)

---

## Quick Reference: Symlink Command

If your WordPress `wp-content/themes/` path is different, use this pattern (run from `themes/`):

```bash
ln -s "/Users/danielferry/sites/Wordpress Sites/Custom WP Template/raintunnelwash-com" raintunnelwash
```

Theme slug in WordPress will be the folder name: `raintunnelwash`. The theme name “Rain Tunnel Wash” comes from `style.css`.

---

## After Setup: Pages and Menus

1. **Settings → Reading:** Set “Your homepage displays” to **A static page**, and choose a **Home** page (create it if needed).
2. Create pages: **About**, **Services**, **Contact**, **Locations**, **Programs** (slugs: `about`, `services`, `contact`, `locations`, `programs`).
3. For each page, set the correct **Template** under Page Attributes (e.g. “About Page”, “Services Page”).
4. **Appearance → Menus:** Build your main menu and assign it to **Primary Menu**.
5. **Theme Options** (in admin): Add logo, contact info, social links.

Once this is done, you can keep building the theme in Cursor and view the site in the browser at your local URL.
