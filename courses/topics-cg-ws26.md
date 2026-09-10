# Advanced Topics in Computer Graphics

This course dives into specialized topics within computer graphics, with a primary focus on procedurally generated content (PCG). The course involves a significant practical component; programming proficiency is required. Throughout the term, we will implement standard PCG algorithms used in computer games. 

Grading is based on:
1. Mandatory assignments
2. A final project (including a presentation, live demo, and written report)

Find the complete lecture schedule on the AAU Campus System. Unless stated otherwise, all lectures start *sine tempore* (s.t., on the dot) in [Klagenfurt local time](https://www.timeanddate.com/worldclock/austria/klagenfurt). Lecture slides are / will be linked below.

## Topics

*Note: This course webpage will be updated continuously.*

* Introduction to Procedurally Generated Content ~ [slides](https://docs.google.com/presentation/d/1UbFoitqbf66L44Aht5CdiZ17pyO-CcCGPAJUYUFX_5U/edit?usp=sharing)
* Large Language Models in Video Games
* Overview of PCG Algorithms and Pseudo-Random Number Generators (PRNGs)
* Noise Functions
* Labyrinths and Maze Generation
* L-Systems & Terrain Erosion
* Fractals & Procedural Solvers (Sudoku)
* Wave Function Collapse
* LLMs for PCG

The source code used in lectures is available on GitHub: <https://github.com/dermotte/AdvancedTopicsCG>

## Individual Exercises (Mandatory Assignments)

Please submit your exercise files to Moodle by the end of the announced day. Do not submit `.exe` files; stick to `.js` files or web exports with an accessible link. Ensure your submission can be downloaded and viewed directly. 

*Submitting all assignments is mandatory; missing a deadline will negatively affect your grade.*

| ID | Title | Slides | Deadline |
|:---|:---|:---:|:---:|
| 01 | 3D Game of Life | TBA | 30.11. |
| 02 | Gaussian RNG | TBA | 07.12 |
| 03 | Perlin Noise Shader | TBA | 14.12. |
| 04 | 3D Maze | TBA | 11.01 |
| 05 | Wave Function Collapse | TBA | 18.01 |

## Group Projects

### Project 1: Local LLM NPC Dialogue
Build an interactive NPC dialogue system running on a local LLM until **November 23rd**.

* **Core Requirements:**
  1. Set up a local inference server (e.g., LM Studio, `llama.cpp`).
  2. Select an appropriate open-weight dialogue model.
  3. Design a system prompt defining the NPC's persona and behavior.
  4. Build a user frontend using Gradio.
* **Extra Credit (Up to +25 Points):** Add advanced features such as RAG for world lore, tool/function calling, or agentic output validation.

### Project 2: PCG Mini-Game
Build a playable mini-game centered on procedural content generation until **January 25th**

* **Core Requirements:** Implement either an algorithm from the lecture (e.g., WFC, Noise, L-Systems) or a self-researched PCG algorithm integrated into a game loop.


> 🚀 **Bonus Points (+25 Points for each project):** Publish either project on **GitHub**, **HuggingFace**, or **Itch.io** with instructions for public use or further development.

### Paper Format

**Fulfillment of Formal Requirements:**
  - Papers must follow the [Chicago Manual of Style](https://www.chicagomanualofstyle.org/). An [Overleaf LaTeX template](https://www.overleaf.com/latex/examples/the-chicago-citation-style-with-biblatex/pdqqrmwtdqpc) is available for strict compliance.
  - Papers must be consistently formatted and proofread for typos and grammatical errors (e.g., using tools like Grammarly).
  - Papers must include a comprehensive bibliography citing all referenced sources (including online videos, web pages, and code repositories).

**Reliance on Research Literature:**
  - Careful selection of relevant primary and secondary citations.
  - Provision of a well-formatted bibliography.

**Academic Analysis:**
  - Effective application of theoretical frameworks.
  - Original observations on the discussed primary resource.
  - Critical reflection on analytical findings.

### AI Policy
While students are encouraged to use digital tools as coding assistants or learning resources, the goal of the course is for students to develop code and complete project deliverables independently. If AI-generated text or source code is suspected in a submission, you may be called to an oral examination, which can affect your final grade. Standard plagiarism rules apply to AI-generated content (with the AI model categorized as "another author").

### Code of Conduct and Plagiarism Policies

The [University of California, Berkeley](https://writing.berkeley.edu/academic-honesty) defines plagiarism as follows:

> Plagiarism is defined as use of intellectual material produced by another person without acknowledging its source, for example:
> * Wholesale copying of passages from works of others into your homework, essay, term paper, or dissertation without acknowledgment.
> * Use of the views, opinions, or insights of another without acknowledgment.
> * Paraphrasing of another person’s characteristic or original phraseology, metaphor, or other literary device without acknowledgment.

For computer science courses, this policy extends to source code, video tutorials, and web pages used to develop course software. Students must verify software license compatibility (usage permissions, attribution requirements, and license obligations) and cite all external sources in their reports. Failure to cite sources constitutes academic plagiarism.

The [AAU Code of Conduct](https://www.aau.at/en/research/research-profile/good-academic-practice/) applies to all course activities. Students caught plagiarizing or violating the code of conduct will be removed from the course immediately.

## Links

* [p5.js](https://p5js.org/) - A beginner-friendly JavaScript framework with an online editor, used for course examples.
* [Babylon.js](https://www.babylonjs.com/) - A robust 3D JavaScript framework with WebXR/VR support.