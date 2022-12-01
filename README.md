# ST×M
Start the Xerox Machine - Quick image showcase script.

### What is this?
This is a very simple script that loads all the images within a folder (via PHP) and injects them in a page.

### But why?
See, I used to have a moodboard in AMB1, an app based in Dropbox, but that's not working anymore. I used my AMB1 to collect images from around the web for inspiration, and to copy ideas (hence the "start the xerox machine"). This script does exactly that for me, and I can host it locally or quickly set up a repo with Netlify.

### How to run it
1. Clone the repo
2. ```npm install```
3. ```npm run build```

The website will be generated in the ```_site``` directory. You can open index.html in your browser.

### How to customize it
1. Edit the text in `index.php` (title, subtitle, etc).
2. Dump a bunch of image files inside the `img` folder (jpeg, jpg, png, gif and svg are supported)

### How to host it in Netlify

**The quick and easy option**

1. Clone, install and customize locally
2. Login to Netlify
3. Go to https://app.netlify.com/drop and drag & drop your ```_site``` folder.

**The permanent option (with continuous delivery)**

1. Fork the repo
2. Clone, install and customize locally
3. Push to your fork
4. Login to Netlify / Add new site / Import from GitHub / Select your fork
5. As the build command, enter ```npm run build```
6. As the output directory, enter ```_site```

Now every change you push to your repo will be deployed to your live site.

### What to use it for
- Moodboards
- Quick sharing photos
- Image curation
