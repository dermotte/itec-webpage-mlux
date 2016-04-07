# Interaktive Multimediasysteme B (Computer Games) 

The goal of this course is to introduce students to computer game production. This is
not necessarily a technical issue especially as game production involves mostly non-technical work like
creative audio, 3D and visual design, product management and planning, story boarding &amp; writing, and
testing.
The course has already taken place in previous years, so you might take a look at the
[2015 web page](?id=courses/gamesss15) or the [2014 web page](?id=courses/gamesss14). The lecture is given in German, 
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
Associated with the course is the [Tutorium zu Interaktive Multimedia-Anwendungen B (Computer Games)](https://campus.aau.at/studien/lvkarte.jsp?sprache_nr=35&rlvkey=86382) 
held by Fabian Schober. While the main course as is is not necessarily about the __programming__ aspect of games, the 
tutorial definitely is. Fabian Schober has experience on several game development platforms including Unity, libGDX, Phaser 
and Unreal and is willing to share his experience. In the tutorial he will focus on bringing you up to speed for the 
practical assignments. Please make sure you are enrolled.    

#### Schedule
All courses start c.t. if not otherwise noted. Slides can be found [in the slides repository on Google Drive](https://drive.google.com/folderview?id=0B8x2stWZlk6US0dmbW5MaTJNUTg&usp=sharing).

| Day    | Time   | Place  | Topic | Reading |
|:------|:------|:------|:---|:---|
| Mo, 7.3.  | 12-14 | E.2.42 | Introduction and motivation  | [Video - Grounded: The Making of The Last of Us](https://www.youtube.com/watch?v=yH5MgEbBOps) |
| Mo, 14.3. | 12-14 | E.2.42 | Games Business & Age Ratings | [Text - The Ups And Downs Of The Casual Gaming Market](http://www.thesixthaxis.com/2013/08/22/the-ups-and-downs-of-the-casual-gaming-market/) |
| Mo, 4.4.  | 12-14 | E.2.42 | History of Computer Games    | [Video - Free to Play](http://store.steampowered.com/app/245550/) |
| Mo, 11.4. | 12-14 | E.2.42 | Game Project 101             | [Text - Postmortem Shadow of Mordor](http://www.gamasutra.com/view/news/234421/Postmortem_Monolith_Productions_Middleearth_Shadow_of_Mordor.php) |
| Fr, 15.4. | 15-16:30 s.t. | HS C | Game Jam Keynote Presentations    | [FYI: 3rd Klagenfurt Game Jam](http://itec.aau.at/gamejam/) |
| ~~Mo, 18.4.~~ | ~~12-14~~ | ~~E.2.42~~ | Canceled    |  |
| tba. | | | | |


# Assignments

## Programming Assignment \#1: Pong
* **Platform**: Web 
* **Framework**: Phaser 
* **Language**: Javascript

#### Code the game
Follow the tutorial on [http://www.zekechan.net/getting-started-html5-game-development-pong1](http://www.zekechan.net/getting-started-html5-game-development-pong1/) and implement a **Pong clone** using Phaser. You can use all code snippets and assets provided by this tutorial, but be sure to comprehend the individual steps.

#### Analyze and Adapt the Game
After completing the tutorial, play the game (with a friend, or implement a simple AI opponent). In respect to game mechanics, find some aspects of the game you would change (if you have not already done so) and document them. If possible, apply these changes by adjusting the code and/or assets.

#### Hand in the Assignment
Zip your whole project and upload it to the [submission survey](http://www.semanticmetadata.net/surveys/index.php/841746) until end of Fr., April 8, 2016.

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

Your task is to implement a **simple** 2-dimensional Arcade game. Your game should at least contain some graphics, basic movements and an additional (game) feature.

####Game types
You can decide on the type of your game. You may create a Platformer (e.g. [Commander Keen](https://www.youtube.com/watch?v=oP1sV_MLHRI)), a Shoot 'em up (e.g. [1942](https://www.youtube.com/watch?v=AlXf77Hheeo)), a Side-Scroller (e.g. [Jump Bug](https://www.youtube.com/watch?v=yB4vuzMi578)) or any other game the like.

####Detailed Information
Keep it simple! Use simple art and implement the basic movements (left, right, jump,... depending on the type of your game). No menus, only one level. You can use any tutorial as a starting point. But do not only follow the tutorial, **extend** it by at least one additional feature. Like:

* Enemies
* Additional movement
* Shooting
* Moving platforms
* Traps, Pits
* Animation(s)
* etc.

You may use other tutorials and examples on how to implement the additional feature, but note that it may not be a part of the original tutorial.

####Examples
* [This tutorial](https://software.intel.com/en-us/html5/hub/blogs/how-to-make-a-sidescroller-game-with-html5) can be used to start with. The additional feature may be a double-jump mechanic.
* [Another tutorial](http://www.emanueleferonato.com/2015/03/16/html5-prototype-of-an-endless-runner-game-like-spring-ninja/) to start with, which may be extended by bouncy platforms or some graphics.

####Tips and Resources
* Just google for Phaser tutorials. There are plenty of them. :-)
* The [Phaser Examples page](http://phaser.io/examples) is a good place to look for guidance and ideas for features.
* You can use the [Tiled Map Editor](http://www.mapeditor.org/) to create a level. Otherwise, hardcode it.
* The [OpenGameArt page](http://opengameart.org/) and the [assets of Kenney](http://kenney.nl/assets) are  great sources for all kinds of graphics.

####Tutorial
* On the Programming Assignment \#2: Tuesday, **April 12<sup>th</sup>, 10:00 - 12:00** in room **E.2.69**.
* On [Git](https://git-scm.com/), [Github](https://github.com/) and additional help on your game: Wednesday, **April 13th, 13:00 - 15:00** in room **E.2.37**
* Additional questions? Send a mail to *fabian.schober@aau.at*
    
## Final Project
For the final project you have to create a game including 

1. a game concept document, 
2. the actual game implementation ready to test,
3. a post mortem discussing the pitfalls, lessons learned and process of making the game, and
4. a final presentation.

You are free to choose the platform for making the game. Games should be made in groups of three to four people.  

Like last year, you can do your final project as part of the [3rd Klagenfurt Game Jam](http://itec.aau.at/gamejam/). 
This is the recommended way and a great opportunity to learn __a lot__ about actually making games and most of the work 
is done within one single weekend. 