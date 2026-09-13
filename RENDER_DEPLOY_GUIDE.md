# 🌐 Complete Render Deployment Guide – Grewok Hardware

This guide explains step-by-step how to host and deploy the **Grewok Hardware** website on **[Render](https://render.com/)** completely free using **Docker**.

---

## 📑 Table of Contents
1. [Why Docker on Render?](#why-docker-on-render)
2. [Database Choices on Render](#database-choices-on-render)
3. [Step 1: Push Your Latest Code to GitHub](#step-1-push-your-latest-code-to-github)
4. [Step 2: Sign Up & Connect GitHub on Render](#step-2-sign-up--connect-github-on-render)
5. [Step 3: Create a New Web Service](#step-3-create-a-new-web-service)
6. [Step 4: Configure Environment Variables](#step-4-configure-environment-variables)
7. [Step 5: Deploy & Monitor Logs](#step-5-deploy--monitor-logs)
8. [Step 6: Verify Your Live Website & Admin Panel](#step-6-verify-your-live-website--admin-panel)
9. [⚡ Alternative: Deploy via Render Blueprint (1-Click)](#-alternative-deploy-via-render-blueprint-1-click)
10. [⚠️ Render Free Tier Gotchas & Tips](#️-render-free-tier-gotchas--tips)

---

## Why Docker on Render?

The project repository already includes a production-ready **`Dockerfile`** and **`docker-entrypoint.sh`**:
- **Stage 1 (Node.js 20)**: Automatically installs NPM packages and compiles Tailwind CSS v4 and Vite assets.
- **Stage 2 (PHP 8.3 Apache)**: Sets up Apache with all required extensions (`pdo_mysql`, `pdo_pgsql`, `pdo_sqlite`, `gd`, `zip`, `mbstring`, `bcmath`).
- **Auto-Provisioning**: The container automatically links storage, optimizes production caches, runs database migrations, and **seeds all 7 categories and 65 hardware products** on launch!
- **SSL / Reverse Proxy Support**: Configured to trust Render's HTTPS reverse proxy headers so you never get mixed content or redirect loop errors.

---

## Database Choices on Render

| Database | Difficulty | Cost on Render | Recommended For |
| :--- | :--- | :--- | :--- |
| **SQLite (Default)** | ⭐ Easiest (0 config) | 100% Free | Demos, client presentations, catalog showcases |
| **Render PostgreSQL** | ⭐⭐ Easy | Free tier available | Long-term live deployments |
| **External MySQL (Aiven / TiDB)** | ⭐⭐⭐ Moderate | Free tiers available | If you specifically require MySQL |

> 💡 **Recommendation:** Start with **SQLite** first. It requires **no extra database setup**—the Docker container creates and seeds it automatically!

---

## Step 1: Push Your Latest Code to GitHub

Make sure all the latest Docker and configuration files are committed and pushed to your GitHub repository:

```bash
git add Dockerfile docker-entrypoint.sh render.yaml bootstrap/app.php README.md SETUP_GUIDE.md
git commit -m "chore: configure Docker and Render deployment setup"
git push origin main
```
*(Replace `main` with your specific working branch if different).*

---

## Step 2: Sign Up & Connect GitHub on Render

1. Go to **[https://render.com](https://render.com)**.
2. Click **"Get Started"** or **"Sign In"**.
3. Choose **"GitHub"** to log in and authorize Render to access your repositories.

---

## Step 3: Create a New Web Service

1. On your Render Dashboard, click the blue **"New +"** button in the top right.
2. Select **"Web Service"**.
3. Choose **"Build and deploy from a Git repository"** and click **Next**.
4. In the repository list, find your **`grewok`** repository and click **"Connect"**.
5. Fill out the service settings:

| Field | What to Enter |
| :--- | :--- |
| **Name** | `grewok-hardware` *(or any unique name you prefer)* |
| **Region** | Choose the closest to your users (e.g., *Singapore*, *Oregon*, or *Frankfurt*) |
| **Branch** | `main` *(or the branch you want to deploy)* |
| **Root Directory** | Leave blank *(root of repo)* |
| **Runtime** | **Docker** *(Render should automatically detect this from the Dockerfile)* |
| **Instance Type** | **Free** ($0 / month) |

---

## Step 4: Configure Environment Variables

Scroll down to the **"Environment Variables"** section on the same creation page. Click **"Add Environment Variable"** for each of the following:

| Key | Value | Description |
| :--- | :--- | :--- |
| `APP_NAME` | `Grewok Hardware` | Application Name |
| `APP_ENV` | `production` | Production Environment |
| `APP_DEBUG` | `false` | Disable debug stack traces |
| `APP_KEY` | `base64:t65u4F2uJ/U4OIKWugg9p+2dsX5cW/KxrwqVy48ZpsI=` | Encryption key *(Use yours from local `.env`)* |
| `APP_URL` | `https://grewok-hardware.onrender.com` | Replace with your actual Render URL |
| `LOG_CHANNEL` | `stderr` | Sends logs to Render's live log viewer |
| `DB_CONNECTION` | `sqlite` | Uses built-in SQLite (Zero database server setup) |
| `DB_DATABASE` | `/var/www/html/database/database.sqlite` | Absolute path to SQLite database |
| `SESSION_DRIVER` | `cookie` | Stores sessions in secure encrypted cookies |
| `CACHE_STORE` | `file` | File-based cache |
| `QUEUE_CONNECTION` | `sync` | Synchronous queue processing |

> 🔑 **Generating a fresh APP_KEY (Optional):**
> If you want a brand new key, run `php artisan key:generate --show` in your local terminal and paste the output into the `APP_KEY` value.

---

### (Optional) If You Prefer Render PostgreSQL Instead of SQLite:
1. In Render Dashboard, click **"New +"** -> **"PostgreSQL"**.
2. Give it a name (e.g. `grewok-db`) and select the Free plan.
3. Once created, copy the **Internal Database URL**.
4. In your Web Service Environment Variables, set:
   - `DB_CONNECTION` = `pgsql`
   - `DB_HOST` = `<Internal Host from Render DB>`
   - `DB_PORT` = `5432`
   - `DB_DATABASE` = `<Database Name>`
   - `DB_USERNAME` = `<User>`
   - `DB_PASSWORD` = `<Password>`

---

## Step 5: Deploy & Monitor Logs

1. Click the **"Deploy Web Service"** (or **"Create Web Service"**) button at the bottom of the page.
2. Render will begin building the Docker image. You can watch the real-time build logs:
   - Stage 1: Installing Node dependencies & running `npm run build`
   - Stage 2: Installing Composer PHP packages
   - Stage 3: Running `docker-entrypoint.sh`:
     - Running migrations (`categories`, `products`, `enquiries`)
     - Seeding 7 categories and 65 products
     - Starting Apache on port 80
3. When the build finishes, you will see:
   `==> Your service is live 🎉`

---

## Step 6: Verify Your Live Website & Admin Panel

1. Click on the URL generated by Render at the top of your service page:
   👉 `https://grewok-hardware.onrender.com`
2. Check that the homepage loads with high-contrast text, the Shop-style floating constellation, and all hardware collections.
3. Test the **Admin Panel**:
   - URL: `https://grewok-hardware.onrender.com/admin/login`
   - **Username**: `admin@grewok.com` *(or `admin`)*
   - **Password**: `grewok@admin`
4. Confirm that all 65 products and 7 categories show up in the Admin dashboard.

---

## ⚡ Alternative: Deploy via Render Blueprint (1-Click)

The repository includes a `render.yaml` file. If you prefer:
1. In Render Dashboard, click **"New +"** -> **"Blueprint"**.
2. Connect your `grewok` repository.
3. Render will read `render.yaml` and pre-fill all variables.
4. Set your `APP_KEY` and click **"Apply"**!

---

## ⚠️ Render Free Tier Gotchas & Tips

### 1. Inactivity Spindown (Cold Starts)
- Render Free tier services spin down (go to sleep) after **15 minutes of inactivity**.
- The next time someone visits the site, it will take **30–50 seconds** to wake up and respond.
- **Tip**: You can use a free pinging service like [UptimeRobot](https://uptimerobot.com) to ping your site every 10 minutes to keep it awake!

### 2. Ephemeral Filesystem on Free Tier
- On Render's Free tier, the filesystem is ephemeral (resets on container restart).
- The default 65 catalog products and images stored in `public/images/` are bundled directly into the Docker image, so they **never disappear**.
- If you upload new custom images via `/admin`, they will reset when the container restarts unless you attach a Render Persistent Disk ($0.25/month) or use external image hosting like AWS S3 / Cloudinary.

### 3. Automatic Deployments on Git Push
- Render has **Auto-Deploy** enabled by default.
- Every time you run `git push origin main`, Render will automatically rebuild and deploy your latest changes with zero downtime!
