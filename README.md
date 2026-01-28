# Mathias Lux - Academic Website

This is the source code repository for [Mathias Lux's academic website](http://www.itec.uni-klu.ac.at/~mlux/). The site showcases his research, teaching activities, and professional background as an Associate Professor at the Institute for Information Technology (ITEC), University of Klagenfurt, Austria.

## 📋 Project Overview

This website serves as a comprehensive academic portfolio featuring:
- Professional biography and research focus
- Complete teaching history with course details
- Interactive tools for students and researchers
- Dynamic content management using Markdown files
- Responsive design for optimal viewing on all devices

## 🚀 Getting Started

### Prerequisites

The website is a static HTML site that requires only a web browser to view. For development:

- Web browser (Chrome, Firefox, Safari, Edge)
- Text editor (VS Code, Sublime Text, etc.)
- Optional: Local web server for testing

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/dermotte/itec-webpage-mlux.git
   cd itec-webpage-mlux
   ```

2. Open `index.html` in your web browser, or use a local server:
   ```bash
   # Using Python (if available)
   python -m http.server 8000
   ```
   Then visit `http://localhost:8000` in your browser.

## 🏗️ Technical Architecture

### Core Components

1. **index.html** - Main entry point with dynamic content loading
2. **Markdown Files** - Content stored in `.md` format (index.md, courses.md, etc.)
3. **Showdown.js** - Markdown to HTML converter
4. **Bootstrap 5.3** - Responsive CSS framework
5. **Font Awesome** - Icon library

### Dynamic Content Loading

The site uses a unique URL parameter system to load different content:

- **URL Format**: `?data=filename.md`
- **Default**: Loads `index.md` (home page)
- **Courses**: `?data=courses.md` shows teaching history
- **Specific Courses**: `?data=courses/games-ss26.md` shows individual course details

### JavaScript Implementation

The `index.html` file contains embedded JavaScript that:
1. Parses URL parameters to determine which content to load
2. Fetches the specified Markdown file via AJAX
3. Converts Markdown to HTML using Showdown.js
4. Displays loading spinner during content retrieval
5. Handles errors gracefully with user-friendly messages

## 📁 File Structure

```
itec-webpage-mlux/
├── index.html                # Main HTML file with dynamic loading
├── index.md                  # Home page content (Markdown)
├── courses.md                # Teaching history overview
├── README.md                 # This file
├── .gitignore                # Git ignore rules
├── bootstrap/                # Bootstrap CSS/JS files
├── css/                      # Custom CSS styles
│   └── style.css             # Custom styling
├── fontawesome/              # Font Awesome icons
├── images/                   # Website images and assets
├── js/                       # JavaScript libraries
│   └── showdown.min.js       # Markdown converter
└── courses/                  # Individual course files
    ├── games-ss26.md         # Current game course
    ├── intro-cg-ss26.md      # Current computer graphics course
    ├── gameengineering-ws2526.md  # Game engineering lecture
    └── ...                   # Historical course files
└── tools/                    # Interactive web tools
    ├── groups.html           # Student group management
    ├── timer.html            # Presentation timer
    ├── survey.html           # Survey tool
    └── ...                   # Various teaching utilities
```

## 📚 Content Management

### Adding New Content

1. **Create a new Markdown file** in the appropriate directory
2. **Use standard Markdown syntax** with optional HTML for advanced formatting
3. **Reference the file** using the `?data=filename.md` URL parameter

### Course Organization

Courses are organized by semester and year:
- **Summer Semester**: `games-ss26.md` (SS = SommerSemester)
- **Winter Semester**: `gameengineering-ws2526.md` (WS = WinterSemester)

The naming convention is: `coursename-season-year.md`

### Markdown Features Used

- Headers (`#`, `##`, `###`)
- Lists (`*`, `-`, `1.`)
- Links (`[text](url)`)
- Images (`![alt](url)`)
- HTML embedding for advanced styling
- Font Awesome icons (`<i class="fa-icon"></i>`)

## 🛠️ Tools Directory

The `tools/` directory contains various interactive web utilities:

- **groups.html**: Student group management tool
- **timer.html**: Presentation timer with visual countdown
- **survey.html**: Survey creation and results tool
- **maze.html**: Maze generation and solving tool
- **gamepad.html**: Game controller testing utility
- **hexmaze/**: Hexagonal maze generator
- **sudoku/**: Sudoku puzzle generator

These tools are used for teaching purposes and student projects.

## 🎨 Design and Styling

### Bootstrap Theme

The site uses Bootstrap 5.3 with a dark navbar and responsive grid system. Key design elements:

- **Navigation**: Dark theme navbar with Font Awesome icons
- **Layout**: Container-based responsive design
- **Typography**: Clean, readable fonts with proper hierarchy
- **Loading States**: Animated spinner during content loading

### Custom CSS

Additional styling is provided in `css/style.css` for:
- Image formatting and responsiveness
- Spacing and layout adjustments
- Custom color schemes
- Print media queries

## 🔧 Development Workflow

### Making Changes

1. Edit Markdown files for content changes
2. Modify `index.html` for structural changes
3. Update CSS files for styling adjustments
4. Test changes locally before deployment

### Testing

- **Cross-browser testing**: Chrome, Firefox, Safari, Edge
- **Mobile responsiveness**: Test on various screen sizes
- **Link validation**: Ensure all internal links work
- **Markdown rendering**: Verify proper HTML conversion

## 🚀 Deployment

The site is deployed to the University of Klagenfurt's web server:

1. **Server Location**: `http://www.itec.uni-klu.ac.at/~mlux/`
2. **Update Process**: Push changes to GitHub, then deploy to server
3. **No Build Step**: Static files can be directly copied to server

### Deployment Checklist

- [ ] Test all links and navigation
- [ ] Verify responsive design on mobile devices
- [ ] Check Markdown rendering for all pages according to [Showdown syntax](https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax)
- [ ] Ensure images load correctly
- [ ] Test all interactive tools
- [ ] Update any version references if needed

## 🤝 Contributing

Contributions are welcome! Please follow these guidelines:

1. **Fork the repository** and create your branch
2. **Use clear commit messages** describing your changes
3. **Follow existing code style** and conventions
4. **Test thoroughly** before submitting pull requests
5. **Document new features** in this README

### Reporting Issues

If you find bugs or have suggestions:
1. Check existing issues to avoid duplicates
2. Provide clear reproduction steps
3. Include browser and device information
4. Suggest potential solutions if possible

## 📝 License

This project is maintained by Mathias Lux for academic purposes. The content is licensed under standard academic use policies. For specific usage rights, please contact the author.

## 🔗 Technologies Used

- **[Bootstrap 5.3](https://getbootstrap.com/)** - Responsive CSS framework
- **[Font Awesome](https://fontawesome.com/)** - Icon library
- **[Showdown.js](https://github.com/showdownjs/showdown)** - Markdown to HTML converter
- **[jQuery](https://jquery.com/)** (in tools) - JavaScript library
- **[Three.js](https://threejs.org/)** (in tools) - 3D graphics library
- **[Howler.js](https://howlerjs.com/)** (in tools) - Audio library

## 📬 Contact

For questions about this website or its content:
- **Mathias Lux**: [mlux@itec.aau.at](mailto:mlux@itec.aau.at)
- **Website**: [http://www.itec.uni-klu.ac.at/~mlux/](http://www.itec.uni-klu.ac.at/~mlux/)
- **GitHub**: [https://github.com/dermotte/itec-webpage-mlux](https://github.com/dermotte/itec-webpage-mlux)

## 🎓 About Mathias Lux

Mathias Lux is an Associate Professor at the Institute for Information Technology (ITEC), University of Klagenfurt, Austria. His research focuses on multimedia retrieval, social multimedia semantics, and interactive systems with a current emphasis on video games. He is known for developing open-source tools like Caliph & Emir and LIRE (Lucene Image Retrieval), and has contributed to Apache Solr.

This website serves as his academic portfolio, showcasing his teaching activities, research interests, and professional background.