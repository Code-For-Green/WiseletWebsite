# water-resources-website
https://code-for-green.github.io/water-resources-website/public/index.html

Website about Earth's water resources and ways to use it wisely. Using tailwindcss, autoprefixer, postcss.

Do not change node_modules, src and package.json files.

# Workflow

After creating SSH key and pulling the repo, create new branch. After you're done working push and pull request.

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

