# Advanced Topics in Computer Graphics

This course will dive into specific topics in the broad area of computer graphics. We will focus on (i) procedurally generated content (PCG) and (ii) AR/VR. The course will require a significant amount of practical work, so programming knowledge is required. We will implement standard algorithms for PCG in computer games and put them to use in a VR environment. The web page will be updated continuously. Grading is based on (i) mandatory assignments and (ii) a final project including a video demo and a written report.

Find the lecture schedule at [the AAU Campus System](https://campus.aau.at/studium/course/116873). All courses start s.t. in [Klagenfurt local time](https://www.timeanddate.com/worldclock/austria/klagenfurt) if not otherwise noted. Slides are available online (see below).

## Topics

* Introduction to procedurally generated content ~ [slides](https://docs.google.com/presentation/d/1bwo2eBRb8VrX92GyHj-pf_3VkwxG3FIPoAjBs6327GY/edit?usp=sharing)
* Overview on PCG algorithms and pseudo-random number generators ~ [slides](https://docs.google.com/presentation/d/1QfIcH9HjNRTTW1RSVa1OrXHfXk43WumJWeAqRyalOFg/edit?usp=sharing)
* Noise functions 
* Labyrinths 
* L-Systems & Erosion 
* Puzzles: Sudoku 
* Wave Function Collapse
* Introduction to VR 
* Introduction to WebXR 

Find the source code used in the lecture on Github: https://github.com/dermotte/AdvancedTopicsCG-ST2022

## Exercises (Mandatory Assignments)

Please upload the exercises (no .exe please, stick to .js, or export to the web) to Moodle until the end of the announced day. Note that missing the deadline will impact your grade, and you have to submit all assignments.

| ID | Title           | Slide                                                                                                       | Deadline |
|:---|:----------------|-------|:---------|
| 01 | 3D Game of Life | [slides](https://docs.google.com/presentation/d/1bwo2eBRb8VrX92GyHj-pf_3VkwxG3FIPoAjBs6327GY/edit?usp=sharing)| Nov 5, 2023     |
| 02 | Gaussian RNG | [slides](https://docs.google.com/presentation/d/1QfIcH9HjNRTTW1RSVa1OrXHfXk43WumJWeAqRyalOFg/edit?usp=sharing) | Nov 12, 2023     |
| 03 | Perlin Noise Shader | | Nov 19, 2023     |
| 04 | 3D Maze |  | Nov 26, 2023  |
| 05 | Wave Function Collapse |  | Dec 10, 2023 |

## Final Project

The final project needs to include (i) procedurally generated content based on your own implementation of an algorithm your choice and (ii) needs to be runnable on a VR headset. A good choice is to prepare a WebXR export or use of a framework with WebXR support. For submission, you need to upload the following files in a single ZIP file. Note that you have to present your final project in the course. 

1. Your work as source code or a link to Github, Bitbucket, etc.
2. Your result as executable and for the web (test before upload!)
3. Your PDF presentation slides showing your work and summarizing the report.
4. A formatted PDF work report of ~ 1000 words detailing (i) what you did, (ii) how you did it and (iii) the lessons learned and obstacles encountered.

Please note term paper format, code of conduct, AI use, and plagiarism policies apply as detailed below. Not following the required format and policies will impact your grade.  

### Paper Format
- Orderly fulfillment of formal requirements:
    * A paper follows the [Chicago Manual of Style](https://www.chicagomanualofstyle.org/) - use the [Overleaf template](https://www.overleaf.com/latex/examples/the-chicago-citation-style-with-biblatex/pdqqrmwtdqpc) if you want a strict implementation.
    * A paper is coherently formatted and has been checked for typos and grammatical errors (you can use Grammarly for instance to do that) 
    * A paper has a bibliography referencing all employed sources, including but not limited to online videos, web pages, and code repositories
- Adequate reliance on research literature:
    * Selection of citations
    * Provision of a well-formatted bibliography
-	Reliance on theoretical resources
-	Self-made observations on the discussed primary resource
-	Critical reflection on self-made observations


### AI Use in this Course
While students are encouraged to use any tools you can find as a sparring partner for coding or resource for learning, the course goal is to be able to program the exercises and the final project individually. If there is a suspicion that parts of the source code or texts were written by an AI tool, you will be invited to a clarifying discussion, which can also influence the grade. In addition, the rules for plagiarism (with "another person" being the AI model) also apply.

### Code of Conduct and Plagiarism Policies

The [University of California Berkely](https://sa.berkeley.edu/conduct/integrity/definition) offers the following definition:

```md
Plagiarism is defined as use of intellectual material produced by another person without acknowledging its source, for example:
* Wholesale copying of passages from works of others into your homework, essay, term paper, or dissertation without acknowledgment.
* Use of the views, opinions, or insights of another without acknowledgment.
* Paraphrasing of another person’s characteristic or original phraseology, metaphor, or other literary device without acknowledgment.
```

For computer science classes this includes source code, video tutorials, and web pages used to create software for the course. It is mandatory to check for license compatibility, like (i) can it be used, (ii) how to attribute, and (iii) what license is implied by including this source. It is also mandatory to cite the sources in the report. Failing to do that counts as plagiarism.

Note that the [Code of Conduct of the AAU](https://www.aau.at/en/research/research-profile/good-academic-practice/) applies. Students caught plagiarising or violation of the code of conduct will be removed from class immediately.

## Links

* [p5js](https://p5js.org/) - Simple JavaScript framework with an online editor, used in the course for examples
* [Babylon.js](https://www.babylonjs.com/) - Extensive Javascript 3D library with VR support
* [A-Frame](https://aframe.io/) - High Level WebXR Framework