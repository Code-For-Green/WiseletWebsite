# water-resources-website
https://code-for-green.github.io/water-resources-website/public/index.html

Website about Earth's water resources and ways to use it wisely. Using tailwindcss, autoprefixer, postcss.

Do not change node_modules, src and package.json files.

## TODO LIST
- [x] Database connect.
- [x] Login system.
- [ ] CSS for incorrect login and password.
- [ ] Database connection error in user.php.
- [ ] CSS for database connection error.
- [ ] Chart in user.php.
- [ ] Error page.

# Workflow

After creating SSH key and pulling the repo, create new branch. After you're done working push and pull request.

# GitHub Pages - images not working
Attaching images to website while using GitHub Pages: https://www.elharony.com/images-not-displaying-in-github-pages/

# Using tailwind 
This is simple guide. All of tailwind classes and guides are available here https://tailwindcss.com/

## Extending Default Color Pallete

```javascript
//tailwind.config.js
module.exports = {
  theme: {
    extend: {
      colors: {
        'regal-blue': '#243c5a',
      }
    }
  }
}
```
This will generate classes like `<bg-regal-blue>` in addition to all of Tailwind's default colors.

## Pulling specific branch

git checkout --track origin/%branchname%

## Pushing specific branch

git push --set-upstream origin %branchname%

## Deleting branches
// delete branch locally

git branch -d localBranchName

// delete branch remotely

git push origin --delete remoteBranchName

# Setting up your machine.

## Installing nvm

To **install** or **update** nvm, you should run scripts below:
```sh
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.37.2/install.sh | bash
```
```sh
wget -qO- https://raw.githubusercontent.com/nvm-sh/nvm/v0.37.2/install.sh | bash
```

Running either of the above commands downloads a script and runs it. The script clones the nvm repository to `~/.nvm`, and attempts to add the source lines from the snippet below to the correct profile file (`~/.bash_profile`, `~/.zshrc`, `~/.profile`, or `~/.bashrc`).

<a id="profile_snippet"></a>
```sh
export NVM_DIR="$([ -z "${XDG_CONFIG_HOME-}" ] && printf %s "${HOME}/.nvm" || printf %s "${XDG_CONFIG_HOME}/nvm")"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh" # This loads nvm
```
