# Interaktive Multimediasysteme B (Computer Games)

The goal of this course is to introduce students to computer game production. This is
not necessarily a technical issue especially as game production involves mostly non-technical work like
creative audio, 3D and visual design, product management and planning, story boarding &amp; writing, and
testing.
The course has already taken place in previous years, so you might take a look at the
[2023 web page](?id=courses/games-ss23.md). The lecture is given in German,
but slides and homepage are written in English. For assignments, you can choose between German and English language.

## Modalities
The course aims to teach in a practical as well as in a theoretical way. Throughout the lecture you will have (i) readings, (ii) practical assignments, (iii) a final exam and (iv) a final game project. The readings are specific to the lecture topic and will be referenced from the web page. Make sure you read (or watch or play) them. Questions might pop up in the final exam. The final grade is based on the (i) assignments, (ii) the final project and a (iii) final exam.

* Readings - For the course it's mandatory to read (or view, in case of videos, or even play in case of games) the readings. They will be announced throughout the course in the schedule table.
* Practical assignment - Two practical assignments prior to the final project.
* Written exam - A final, short exam on the course topics on June 24, 2024, in the first 30 minutes of the course. [Catalogue of Questions](https://docs.google.com/document/d/1yNdsC9UoJUaKBskKzgA7Zw-z6bd81pMxrL2XxLX7FDU/edit?usp=sharing).     
* Final project - Create a game in a group, more information see below 

## Schedule

All courses start s.t. in [Klagenfurt local time](https://www.timeanddate.com/worldclock/austria/klagenfurt) if not otherwise noted. Slides are available online (see below).

1. Introduction and motivation 
2. Business of Games 
3. Game Loop 
4. 2D Graphics 
5. Game Design 
6. Input and Sound 
7. Game Production and Development 
8. Introduction to 3D Graphics 
9. Game AI 
10. Game Physics 

## Mandatory Exercise 01 - Pong with Löve
For the first mandatory exercise you are to create a Pong clone with [Löve2D](https://love2d.org/). It does not need to be an accurate copy (graphically or otherwise), but just let two people play a game of pong and count the points. Your Pong clone should fulfil the following requirements:

1. Submit as runnable .love file
1. Use `love.graphics.rectangle(...)` to paint the bars and the ball
1. Control by keyboard

Submit your Pong clone on Moodle as a .love file on Moodle **April 12th, 2024, midnight**.

Are you not challenged enough? - Use the [Windfield physics wrapper for Löve2D](https://github.com/adnzzzzZ/windfield) to create a pong version with a physics engine in the back end. Make sure to reduce friction of the ball and set the position of the paddles in the update callback function ;)   

## Mandatory Exercise 02 - Fun with Godot
For the second mandatory exercise you are to create a game, where you land rocket on a small plateau, with [Godot](https://godotengine.org/).  Your game should fulfil the following requirements:

1. Use the built-in Godot physics engine with the rocket / spaceship being a _RigidBody2D_ and the plateau being a _StaticBody2D_
1. Use the arrow keys to rotate and fire up the rocket
1. Let the game be similar to the example: [play in browser](http://www.itec.uni-klu.ac.at/~mlux/games/cg2020/) or [download for windows](http://www.itec.uni-klu.ac.at/~mlux/games/cg2020/example-game-windows.zip) - the Godot 4.0 version is available at [itch.io](https://dermotte.itch.io/lunar-lander-clone)
1. Submit as zipped Godot Project.

Submit your game, the zipped project folder, on Moodle until **May 26th, 2024, midnight**.

## Final Project
Your final project can be done in a group with up to three people. To finish the project you need to:
1. Hand in the project & the documentation
    1. link to the project (ie. itch.io, Github, WeTransfer, ...)
    1. game concept document (1 page)
    1. post mortem (1 page)
    1. presentation slides
1. Present the project in the lecture on June 20 or June 27, 2022 (4 minutes presentation, 2 minutes Q&A)
    1. list the group members
    1. explain the concept
    1. show the game
    1. talk about the lessons learned (post mortem)

The project can be a stand-alone game, a level for a game, or a mod for a game. If you attended the game jam, please present your game jam project and just create the documents and slides.

Please note term paper format, code of conduct, and plagiarism policies apply as detailed below.

### Paper Format
- Orderly fulfillment of formal requirements:
   * A paper follows the [Chicago Manual of Style](https://www.chicagomanualofstyle.org/) - use the [Overleaf template](https://www.overleaf.com/latex/examples/the-chicago-citation-style-with-biblatex/pdqqrmwtdqpc) if you want a strict implementation.
   * A paper is coherently formatted
   * A paper has a bibliography referencing all employed sources, including but not limited to online videos, web pages, and code repositories
- Adequate reliance on research literature:
   * Selection of citations
   * Provision of a well-formatted bibliography
-	Reliance on theoretical resources
-	Self-made observations on the discussed primary resource
-	Critical reflection on self-made observations


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
