# Interaktive Multimediasysteme B (Computer Games) 

The goal of this course is to introduce students to computer game production. This is
not necessarily a technical issue especially as game production involves mostly non-technical work like
creative audio, 3D and visual design, product management and planning, story boarding &amp; writing, and
testing.
The course has already taken place in previous years, so you might take a look at the
[2017 web page](?id=courses/games-ss17.md). The lecture is given in German, 
but slides and homepage are written in English. For assignments you can choose between German and English language.

## Modalities
The course aims to teach in a practical as well as in a theoretical way. Throughout the
lecture you will have (i) readings, (ii) practical assignments, and (iii) a final game project. The readings
are specific to the lecture topic and will be referenced from the web page. Make sure you read (or watch)
them. Questions might pop up in the final multiple choice test. The final grade is based on the (i)
assignments as well as the final project and a (ii) final multiple choice test.

* Readings - For the course it's mandatory to read (or view in case of videos) the readings. They will be announced throughout the course in the schedule table.
* Practical assignments - This year will feature two practical assignments prior to the final project. The tutorial will focus on bringing you up to speed to implement these projects. For more details see below.    
* Final project - Create a game in a group, more information see below.

## Schedule

All courses start c.t. if not otherwise noted. Slides are [available online](https://www-itec.uni-klu.ac.at/owncloud/index.php/s/wiLj6Ede8yuwXgk).
 
| Day    | Time   | Place  | Topic | Readings |
|:------|:------|:------|:---|:---|
| Mo, 5.3.  | 12-14 | E.2.42 | Introduction and motivation | [Video - Free to Play](http://store.steampowered.com/app/245550/?snr=1_7_7_151_150_1) |
| Mo, 12.3. | 12-14 | E.2.42 | Games Business & Age Ratings | [Video - Grounded: The Making of The Last of Us](https://www.youtube.com/watch?v=yH5MgEbBOps) |
| Mo, 09.4. | 12-14 | E.2.42 | History of Video Games | none |
| Mo, 16.4. | 12-14 | E.2.42 | Software Engineering in Game Development | none |
| Mo, 23.4. | 12-14 | E.2.42 | Game Design | [Level Design Workshop: Designing Celeste](https://www.youtube.com/watch?v=4RlpMhBKNr0) |
| Fr, 27.4. | tba. | tba. | Game Jam Keynotes | none |
| ~~Mo, 30.4.~~ | ~~12-14~~ | ~~E.2.42~~ | skipped | none |
| Mo, 07.5. | 12-14 | E.2.42 | Game Loop | tba. |
| Mo, 14.5. | 12-14 | E.2.42 | 2D Computer Graphics| tba. |
| Mo, 28.5. | 12-14 | E.2.42 | Input & Sound | tba. |
| Mo, 04.6. | 12-14 | E.2.42 | Intro to 3D | tba. |
| Mo, 04.6. | 12-14 | E.2.42 | Game Physics | tba. |
| Mo, 11.6. | 12-14 | E.2.42 | (Buffer) | tba. |
| Mo, 18.6. | 12-14 | E.2.42 | Student presentations | none |
| Mo, 25.6. | 12-14 | E.2.42 | Exam & student presentations | none |

more to come ..

## Tutorial
Associated with the course is the [Tutorium zu Interaktive Multimedia-Anwendungen B (Computer Games)](https://campus.aau.at/studium/course/90777) held by Stefan Jost. 
While the main course as is is not necessarily about the __programming__ aspect of games, the tutorial definitely is. Stefan Jost has experience on several game development platforms including Unity, 
libGDX, Phaser and Unreal and is willing to share his experience. In the tutorial he will focus on bringing you up to speed for the practical assignments. Please make sure you are enrolled.
|

# Assignments
## Programming Assignment \#1: Pong
* **Platform**: Web 
* **Framework**: Phaser 
* **Language**: Javascript
* **Start at:** Monday 5.3. 2018
* **Deadline for submission:**  Friday 23.3. 2018

#### Code the game
Follow the tutorial on [http://www.zekechan.net/getting-started-html5-game-development-pong1](http://www.zekechan.net/getting-started-html5-game-development-pong1/) and implement a **Pong clone** using Phaser. You can use all code snippets and assets provided by this tutorial, but be sure to comprehend the individual steps.

#### Analyze and Adapt the Game
After completing the tutorial, play the game (with a friend, or implement a simple AI opponent). In respect to game mechanics, find some aspects of the game you would change (if you have not already done so) and document them. If possible, apply these changes by adjusting the code and/or assets.

#### Hand in the Assignment
Zip your whole project and send it to Stefan Jost (use computergames_SS18@gmx.at for support of attachments) until Friday 23.3. 2018 midnight.

#### Tutorial
Due to the upcoming Easter holidays, the Tutorial for Programming Assignment \#1 takes place on **March 14th, 18:00 - 20:00** in room **E.1.42**. Apart from this, Stefan Jost can be reached anytime via mail to *stefan.jost@aau.at*.

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
* **Start at:** Friday 23.3. 2018
* **Deadline for submission:**  Monday, 16.4. 2018

Your second task is to implement a **simple** 2-dimensional Arcade game. Your game should at least contain some graphics, basic movements and an additional (game) feature.

#### Game types
You can decide on the type of your game. You may create a Platformer (e.g. [Commander Keen](https://www.youtube.com/watch?v=oP1sV_MLHRI)), a Shoot 'em up (e.g. [1942](https://www.youtube.com/watch?v=AlXf77Hheeo)), a Side-Scroller (e.g. [Jump Bug](https://www.youtube.com/watch?v=yB4vuzMi578)) or any other game you like.

#### Detailed Information
Keep it simple! Use simple art and implement the basic movements (left, right, jump,... depending on the type of your game). No menus, only one level. You can use any tutorial as a starting point. But do not only follow the tutorial, **extend** it by at least one additional feature. Like:

* Enemies
* Additional movement
* Shooting
* Moving platforms
* Traps, Pits
* Animation(s)
* etc.

You may use other tutorials and examples on how to implement the additional feature, but note that it may not be a part of the original tutorial.

#### Example
* [This tutorial](http://www.emanueleferonato.com/2015/03/16/html5-prototype-of-an-endless-runner-game-like-spring-ninja/) to start with, which may be extended by bouncy platforms or some graphics.

#### Tips and Resources
* Just google for Phaser tutorials. There are plenty of them. :-)
* The [Phaser Examples page](http://phaser.io/examples) is a good place to look for guidance and ideas for features.
* You can use the [Tiled Map Editor](http://www.mapeditor.org/) to create a level. Otherwise, hardcode it.
* The [OpenGameArt page](http://opengameart.org/) and the [assets of Kenney](http://kenney.nl/assets) are  great sources for all kinds of graphics.

#### Hand in the Assignment
Zip your whole project and send it to Stefan Jost (use computergames_SS18@gmx.at for support of attachments) until end of Monday, 16.4. 2017.

#### Tutorial
The Tutorial for Programming Assignment \#2 takes place on **April 11th, 18:00 - 20:00** in room **E.1.42**. Apart from this, Stefan Jost can be reached anytime via mail to *stefan.jost@aau.at*.


#Additional Tutorials

There will be some aditional Tutorials as preperation for the GameJam. The topic of this two Tutorails will be the Phaser game engine. This Tutorials take place on **April 18th, 18:00 - 20:00** and **April 25th, 18:00-20:00** in room **E.1.42**.