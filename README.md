# Create local directory for PSH environment. Best way to do this is by using the PSH CLI to pull the fresh empty project
    platform get <PROJECT_ID>


# Pull repot, take files out of PlatformSH-WP-Starter-Pack directory and move to root
    git clone git@github.com:gbdineen/PlatformSH-WP-Starter-Pack.git && mv -f PlatformSH-WP-Starter-Pack/{.,}* . && rm -r PlatformSH-WP-Starter-Pack && mkdir uploads && mkdir themes && mkdir plugins

# Change the git origin URL to PSH repo URL
    git remote set-url origin <PSH REPO URL>



# PUSH
    git add <WHATEVER IS IN THE LOCAL REPOT IF ANYTHING>
    git commit -m "first commit"
    git branch -M main
    git remote add origin <PSH REPO URL>
    git push -u origin main
