# Interaktive Multimediasysteme B (Computer Games) 

The goal of this course is to introduce students to computer game production. This is
not necessarily a technical issue especially as game production involves mostly non-technical work like
creative audio, 3D and visual design, product management and planning, story boarding &amp; writing, and
testing.
The course has already taken place in previous years, so you might take a look at the
[2016 web page](?id=courses/games-ss16.md). The lecture is given in German, 
but slides and homepage are written in English. For assignments you can choose between German and English language.

#### Modalities
The course aims to teach in a practical as well as in a theoretical way. Throughout the
lecture you will have (i) readings, (ii) practical assignments, and (iii) a final game project. The readings
are specific to the lecture topic and will be referenced from the web page. Make sure you read (or watch)
them. Questions might pop up in the final multiple choice test. The final grade is based on the (i)
assignments as well as the final project and a (ii) final multiple choice test.

* Readings - For the course it's mandatory to read (or view in case of videos) the readings. They will be announced throughout the course in the schedule table.
* Practical assignments - This year will feature two practical assignments prior to the final project. The tutorial will focus on bringing you up to speed to implement these projects. For more details see below.    
* Final project - Create a game in a group, more information see below.

#### Tutorial
Associated with the course is the [Tutorium zu Interaktive Multimedia-Anwendungen B (Computer Games)](https://campus.aau.at/studium/course/87507) held by Fabian Schober. While the main course as is is not necessarily about the __programming__ aspect of games, the tutorial definitely is. Fabian Schober has experience on several game development platforms including Unity, libGDX, Phaser and Unreal and is willing to share his experience. In the tutorial he will focus on bringing you up to speed for the practical assignments. Please make sure you are enrolled.

#### Schedule
All courses start c.t. if not otherwise noted.
 
| Day    | Time   | Place  | Topic | Readings |
|:------|:------|:------|:---|:---|
| Mo, 6.3.  | 12-14 | E.2.42 | Introduction and motivation [slides](/~mlux/teaching/games17/games-ss17-01-modalities-first-project.pdf) | [Video - Grounded: The Making of The Last of Us](https://www.youtube.com/watch?v=yH5MgEbBOps) |
| Mo, 13.3. | 12-14 | E.2.42 | Games Business & Age Ratings [slides](/~mlux/teaching/games17/games-ss17-02-business-ratings.pdf) | [Video - Free to Play](http://store.steampowered.com/app/245550/?snr=1_7_7_151_150_1) |
| Mo, 20.3. | 12-14 | E.2.42 | Game Project 101 [slides](/~mlux/teaching/games17/games-ss17-04-game-software-design.pdf) | [Video - GDC Use Case: Life is Strange](http://www.gdcvault.com/play/1023468/-Life-is-Strange-Case) |
| Mo, 27.3. | 12-14 | E.2.42 | Game Design 101 | [Video - 17. Psychology of Games](http://store.steampowered.com/app/534600/) |
| Mo, 3.4. | 12-14 | E.2.42 | Game Development - Game Loop and 2D Graphics | [Video - Tracery / Kate Compton (~10 minutes, leave out the rest)](https://youtu.be/W_okgL6HJX8?t=15m58s) and the [Tutorial](http://www.crystalcodepalace.com/traceryTut.html) |
| Mo, 24.4. | 12-14 | E.2.42 | Game Development - Linear Algebra and 3D Graphics |  |
| Fr, 28.4. | tba. | tba | Game Jam keynote speeches |  |
| Mo, 15.5. | 12-14 | E.2.42 | Game Development - Input, Sound &amp; Physics |  |
| Mo, 29.5. | 12-14 | E.2.42 | -- Buffer -- |  |
| Mo, 12.6. | 12-14 | E.2.42 | Computer Game History |  |
| Mo, 19.6. | 12-14 | E.2.42 | Presentations |  |
| Mo, 26.6. | 12-14 | E.2.42 | Exam & Presentations |  |


# Assignments
## Programming Assignment \#1: Pong
* **Platform**: Web 
* **Framework**: Phaser 
* **Language**: Javascript
* **Start at:** Monday 13.3. 2017
* **Deadline for submission:**  Friday 24.3. 2017

#### Code the game
Follow the tutorial on [http://www.zekechan.net/getting-started-html5-game-development-pong1](http://www.zekechan.net/getting-started-html5-game-development-pong1/) and implement a **Pong clone** using Phaser. You can use all code snippets and assets provided by this tutorial, but be sure to comprehend the individual steps.

#### Analyze and Adapt the Game
After completing the tutorial, play the game (with a friend, or implement a simple AI opponent). In respect to game mechanics, find some aspects of the game you would change (if you have not already done so) and document them. If possible, apply these changes by adjusting the code and/or assets.

#### Hand in the Assignment
Zip your whole project and send it to Fabian Schober (use schoberf@gmx.net for support of attachments) until Friday 24.3. 2017 midnight.

#### Tutorial
Due to the upcoming Easter holidays, the Tutorial for Programming Assignment \#1 takes place on **March 14th, 10:00 - 12:00** in room **E.1.42**. Apart from this, Fabian Schober can be reached anytime via mail to *fabian.schober@aau.at*.

#### Tips
* A project template with an HTML file, a Phaser package and all assets can be downloaded from [https://github.com/zekechan/phaser-html5-tutorial-pong/releases/download/1.0/1-Empty_project.zip](https://github.com/zekechan/phaser-html5-tutorial-pong/releases/download/1.0/1-Empty_project.zip).
* Javascript itself requires no dedicated IDE like IntelliJ IDEA to be coded and run. You can use any Texteditor (although one with syntax highlighting is strongly suggested :-) ). In the Tutorial, we will use **WebStorm**.
* If you use WebStorm, you already have a webserver included in the IDE. But you have to create a project:
   * Open Webstorm and create a new *Empty Project*.
   * Copy the Pong project template into your project folder.
   * Right click *index.html* and *Run* it. Your browser should open.
   * If you want to debug Javascript in Webstorm, you have to press *Debug*. You may have to additionally install a plugin for your browser (Chrome needs this). 
* If you use a text editor (and NOT WebStorm) and have no webserver (simply opening the files in your browser will not work) installed, you can use Google's **Mongoose**:
    * Download the executable file (*mongoose-5.0.exe* for Windows, etc.) from [https://code.google.com/archive/p/mongoose/downloads](https://code.google.com/archive/p/mongoose/downloads).
    * Copy the executable file to your project folder (next to *index.html*).
    * Start Mongoose. Mongoose itself has no Window GUI, but a tray icon. If it is there, Mongoose is running. You can also stop the server using this this icon.
    * Browse to [http://localhost:8080/index.html](http://localhost:8080/index.html) (or change to fit your HTML-file's name). Your game is displayed there.
    

## Programming Assignment \#2: 2D Arcade game
* **Platform**: Web 
* **Framework**: Phaser 
* **Language**: Javascript
* **Start at:** Monday 27.3. 2017
* **Deadline for submission:**  Thursday, 27.4. 2017

Your second task is to implement a **simple** 2-dimensional Arcade game. Your game should at least contain some graphics, basic movements and an additional (game) feature.