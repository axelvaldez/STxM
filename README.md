# ST×M
Start the Xerox Machine - Quick image showcase script.

### What is this?
This is a very simple script that loads all the images within a folder (via PHP) and injects them in a page.

### But why?
See, I used to have a moodboard in AMB1, an app based in Dropbox, but that's not working anymore. I used my AMB1 to collect images from around the web for inspiration, and to copy ideas (hence the "start the xerox machine"). This script does exactly that for me, and I can host it locally or quickly set up a repo with Netlify.

### How to use it
1. Edit the text in `index.php` (title, subtitle, etc).
2. Dump a bunch of image files inside the `img` folder (jpeg, jpg, png, gif and svg are supported)
3. Run it in a web server with php support and open it in your browser.

The easiest way to run it locally is by installing php (```brew install php```) and running a server on the project's directory (```php -S localhost:9000```).

### What to use it for
- Moodboards
- Quick sharing photos
- Image curation
