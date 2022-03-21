# Interaktive Multimediasysteme B (Computer Games)

The goal of this course is to introduce students to computer game production. This is
not necessarily a technical issue especially as game production involves mostly non-technical work like
creative audio, 3D and visual design, product management and planning, story boarding &amp; writing, and
testing.
The course has already taken place in previous years, so you might take a look at the
[2021 web page](?id=courses/games-ss21.md). The lecture is given in German,
but slides and homepage are written in English. For assignments you can choose between German and English language.

## Modalities
The course aims to teach in a practical as well as in a theoretical way. Throughout the
lecture you will have (i) readings, (ii) practical assignments, (iii) a final exam and (iv) a final game project. The readings
are specific to the lecture topic and will be referenced from the web page. Make sure you read (or watch or play)
them. Questions might pop up in the final exam. The final grade is based on the (i)
assignments, (ii) the final project and a (iii) final exam.

* Readings - For the course it's mandatory to read (or view, in case of videos, or even play in case of games) the readings. They will be announced throughout the course in the schedule table.
* Practical assignment - Two practical assignments prior to the final project.
* Written exam - A final, short exam on the course topics at the end of the course.     
* Final project - Create a game in a group, more information see below - [Catalogue of Questions](https://docs.google.com/document/d/1Svj9aGtjdiXSUcBzJvNer7O8ax48z1QbaZZoVAjwXS8/edit?usp=sharing).

## Schedule

All courses start s.t. in [Klagenfurt local time](https://www.timeanddate.com/worldclock/austria/klagenfurt) if not otherwise noted. Slides are available online (see below). Due to the situation around COVID-19 lectures take place online at the beginning of the semester on [Twitch.tv](https://www.twitch.tv/dermotte_). After the online courses, lecture recordings are available on [YouTube](https://www.youtube.com/playlist?list=PLkb7TymgoWW4TlrUuubFriofC80D7yO34) as well as for [download](https://www2.itec.aau.at/owncloud/index.php/s/mIAGWSWLwn0O5FJ).

After the course you can find me in the _Lectures Q&A_ audio channel in the [GSE Discord Server](https://discord.gg/YnX6AKG).

1. Introduction and motivation ~ [slides](https://docs.google.com/presentation/d/1nY8tkk6aobcAL3SvWaHbY6qttw-rbczoS2yb2tLSNXI/edit?usp=sharing) ~ readings: [Game - AI Dungeon](https://aidungeon.io/)
2. Business of Games ~ [slides](https://docs.google.com/presentation/d/1pb9m0NaQzUFbVjVx1dAG6bQWGG-SzBldZCCXbwWaPNo/edit?usp=sharing) ~ readings: [Video - Free to Play](http://store.steampowered.com/app/245550/?snr=1_7_7_151_150_1)
3. Game Loop ~ [slides](https://docs.google.com/presentation/d/1H9aK5JD-dowjIz8qO9HvnQvzVK6REjRs_nbxuZfq9s4/edit?usp=sharing)  ~ readings: [Game - Paperclip](https://www.decisionproblem.com/paperclips/index2.html)
4. 2D Graphics ~ slides ~ readings: [Video - Postmortem Dying Light](https://youtu.be/UJgTboToOg8)
5. Game Design ~ slides  ~ readings:  [Level Design Workshop: Designing Celeste](https://www.youtube.com/watch?v=4RlpMhBKNr0)
6. Input and Sound ~ slides ~ readings:  Try 2 or more klujam games
7. Game Production and Development ~ slides ~ readings:  [Video - Juice It or Loose It](https://www.youtube.com/watch?v=Fy0aCDmgnxg)
8. Introduction to 3D Graphics ~ slides ~ readings: [Video - Audio Bootcamp: Dialogue 101](https://www.youtube.com/watch?v=W7-gIHOOues)
9. Game AI ~ slides ~ readings:  [Video - How Players Play Games: Observing the Influences of Game Mechanics](https://www.youtube.com/watch?v=dBzsG-k6-G4)
10. Game Physics ~ slides
11. History of Games ~ slides

## Game Jam
You are strongly encouraged to take part in the game jam, Apr 22-24, 2022. You can join any group there and the game developed at the game jam can be presented as final project.

## Mandatory Exercise 01 - Pong with Löve
For the first mandatory exercise you are to create a Pong clone with [Löve2D](https://love2d.org/). It does not need to be an accurate copy (graphically or otherwise), but just let two people play a game of pong and count the points. Your Pong clone should fulfil the following requirements:

1. Submit as runnable .love file
1. Use `love.graphics.rectangle(...)` to paint the bars and the ball
1. Control by keyboard

Submit your Pong clone, preferrably as a .love file on Moodle **April 10th, 2022, midnight**.

Are you not challenged enough? - Use the [Windfield physics wrapper for Löve2D](https://github.com/adnzzzzZ/windfield) to create a pong version with a physics engine in the back end. Make sure to reduce friction of the ball and set the position of the paddles in the update callback function ;)   

## Mandatory Exercise 02 - Fun with Godot
For the second mandatory exercise you are to create a game, where you land rocket on a small plateau, with [Godot](https://godotengine.org/).  Your game should fulfil the following requirements:

1. Use the built-in Godot physics engine with the rocket / space ship being a _RigidBody2D_ and the plateau being a _StaticBody2D_
1. Use the arrow keys to rotate and fire up the rocket
1. Let the game be similar to the example: [play in browser](http://www.itec.uni-klu.ac.at/~mlux/games/cg2020/) or [download for windows](http://www.itec.uni-klu.ac.at/~mlux/games/cg2020/example-game-windows.zip)
1. Submit as zipped Godot Project.

Submit your game, the zipped project folder, on Moodle until **May 8th, 2022, midnight**.

## Final Project
Your final project can be done in a group with up to three people. To finish the project you need to:
1. Hand in the project & the documentation
    1. link to the project (ie. itch.io, Github, WeTransfer, ...)
    1. game concept document (1 page)
    1. post mortem (1 page)
    1. presentation slides
1. Present the project in the lecture on June 15 or June 21, 2020 (6 minutes presentation, 4 minutes Q&A)
    1. list the group members
    1. explain the concept
    1. show the game
    1. talk about the lessons learned (post mortem)

The project can be a stand-alone game, a level for a game, or a mod for a game. If you attended the game jam, please present your game jam project and just create the documents and slides.
