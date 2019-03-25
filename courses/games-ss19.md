# Interaktive Multimediasysteme B (Computer Games) 

The goal of this course is to introduce students to computer game production. This is
not necessarily a technical issue especially as game production involves mostly non-technical work like
creative audio, 3D and visual design, product management and planning, story boarding &amp; writing, and
testing.
The course has already taken place in previous years, so you might take a look at the
[2018 web page](?id=courses/games-ss18.md). The lecture is given in German, 
but slides and homepage are written in English. For assignments you can choose between German and English language.

## Modalities
The course aims to teach in a practical as well as in a theoretical way. Throughout the
lecture you will have (i) readings, (ii) practical assignments, and (iii) a final game project. The readings
are specific to the lecture topic and will be referenced from the web page. Make sure you read (or watch)
them. Questions might pop up in the final multiple choice test. The final grade is based on the (i)
assignments as well as the final project and a (ii) final multiple choice test.

* Readings - For the course it's mandatory to read (or view, in case of videos) the readings. They will be announced throughout the course in the schedule table.
* Practical assignments - This year will feature two practical assignments prior to the final project. The tutorial will focus on bringing you up to speed to implement these projects. For more details see below.    
* Final project - Create a game in a group, more information see below.

## Schedule

All courses start c.t. if not otherwise noted. Slides are [available online](https://www2.itec.aau.at/owncloud/index.php/s/2Ce6HaxZROFL2W7).
 
| Day    | Time   | Place  | Topic | Readings |
|:------|:------|:------|:---|:---|
| Mo, 04.3.  | 12-14 | S.2.69 | Introduction and motivation | [Video - Free to Play](http://store.steampowered.com/app/245550/?snr=1_7_7_151_150_1) |
| Mo, 11.3. | 12-14 | S.2.69 | Games Business & Age Ratings | [Video - Grounded: The Making of The Last of Us](https://www.youtube.com/watch?v=yH5MgEbBOps) |
| Mo, 18.3. | 12-14 | S.2.69 | History of Video Games | none |
| Mo, 25.3. | 12-14 | S.2.69 | Software Engineering in Game Development | [4.5 Million Players in 100 Days: Lessons from Dying Light](https://youtu.be/UJgTboToOg8) |
| Mo, 01.4. | 12-14 | S.2.69 | Game Design | [Level Design Workshop: Designing Celeste](https://www.youtube.com/watch?v=4RlpMhBKNr0) |
| Mo, 08.4. | 12-14 | S.2.69 | Game Loop | none |
| Fr, 26.4. | tba. | tba. | Game Jam Keynotes | none |
| Mo, 06.5. | 12-14 | S.2.69 | 2D Computer Graphics| none |
| Mo, 13.5. | 12-14 | S.2.69 | Input & Sound | none |
| Mo, 20.5. | 12-14 | S.2.69 | Intro to 3D | [Intro to WebGL and Three.js](https://www.youtube.com/watch?v=6eLl8yQnxHQ&feature=youtu.be) |
| Mo, 27.5. | 12-14 | S.2.69 | Game AI | none |
| Mo, 03.6. | 12-14 | S.2.69 | Game Physics | [Math for Game Programmers: Fast and Funky 1D Nonlinear Transformations](https://www.youtube.com/watch?v=mr5xkf6zSzk) |
| Mo, 17.6. | 12-14 | S.2.69 | Exam & student presentations | none |
| Mo, 24.6. | 12-14 | S.2.69 | (buffer, might not be needed) | none |

## Tutorial
Associated with the course is the [Tutorium zu Interaktive Multimedia-Anwendungen B (Computer Games)](https://campus.aau.at/studium/course/97460) held by Natascha Rauscher. 
While the main course as is is not necessarily about the __programming__ aspect of games, the tutorial definitely is. Natascha Rauscher has experience on several game development platforms including Unity, 
libGDX, and Phaser and is willing to share her experience. In the tutorial she will focus on bringing you up to speed for the practical assignments. Please make sure you are enrolled.

# Assignments
## Programming Assignment \#1: Space Shooter
* **Platform**: Web 
* **Framework**: Phaser 
* **Language**: Javascript
* **Start at:** Monday 18.03. 2019
* **Deadline for submission:**  Sunday 07.04. 2019

#### Code the game
Follow the tutorial on [https://yorkcs.com/2019/02/06/build-a-space-shooter-with-phaser-3/](https://yorkcs.com/2019/02/06/build-a-space-shooter-with-phaser-3/) and implement a **Space Shooter** using Phaser. You can use all code snippets and assets provided by this tutorial, but be sure to comprehend the individual steps.

#### Analyze and Adapt the Game
After completing the tutorial, play the game. In respect to game mechanics, find some aspects of the game you would change (if you have not already done so) and document them. If possible, apply these changes by adjusting the code and/or assets.

#### Hand in the Assignment
Zip your whole project and send it to Natascha Rauscher (use computergames_SS19@gmx.at for support of attachments) until Friday 07.04. 2019 midnight.

#### Tutorial
The 2-hour Tutorial for the Programming Assignment \#1 will take place sometime between 25-29.03, the exact date and location are TBA this week. Apart from this, Natascha Rauscher can be reached anytime via mail to *natascha.rauscher@aau.at*.

#### Tips
* Javascript itself requires no dedicated IDE like IntelliJ IDEA to be coded and run. You can use any text editor (although one with syntax highlighting is is strongly suggested, like [Atom](https://atom.io/) or [Visual Studio Code](https://code.visualstudio.com/)). In the Tutorial, we will use [WebStorm](https://www.jetbrains.com/webstorm/), which can be installed by AAU students using an educational license. 
* If you use WebStorm, you already have a web server included in the IDE. But you have to create a project:
   * Open Webstorm and create a new *Empty Project*.
   * Copy the Space Shooter Files & the Phaser.js into your project folder (as instructed in the Space Shooter Tutorial).
   * Right click *index.html* and *Run* it. Your browser should open.
   * If you want to debug Javascript in Webstorm, you have to press *Debug*. You may have to additionally install a plugin for your browser (Chrome needs this). 
* If you use a text editor (and NOT WebStorm) and have no web server (simply opening the files in your browser will not work) installed, you can use Google's **Mongoose**:
    * Download the executable file (*mongoose-5.0.exe* for Windows, etc.) from [https://code.google.com/archive/p/mongoose/downloads](https://code.google.com/archive/p/mongoose/downloads).
    * Copy the executable file to your project folder (next to *index.html*).
    * Start Mongoose. Mongoose itself has no Window GUI, but a tray icon. If it is there, Mongoose is running. You can also stop the server using this this icon.
    * Browse to [http://localhost:8080/index.html](http://localhost:8080/index.html) (or change to fit your HTML-file's name). Your game is displayed there.