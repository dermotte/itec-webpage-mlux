# Multimedia Information Systems

The course multimedia information aims to give an overview on multimedia information retrieval, multimedia databases and multimedia metadata. The course also took place in summer semester 2011, 2010, 2009, 2008 and 2007. You can find a page and all the slides of the former courses [here](/~mlux/wiki/doku.php?id=courses:mmisss07 "courses:mmisss07"), [here](/~mlux/wiki/doku.php?id=courses:mmisss08 "courses:mmisss08"), [here](/~mlux/wiki/doku.php?id=courses:mmisss09 "courses:mmisss09"), [here](/~mlux/wiki/doku.php?id=courses:mmisss10 "courses:mmisss10"), and [here](/~mlux/wiki/doku.php?id=courses:mmisss11 "courses:mmisss11").

## Slides & Exercises

* 06.03. - Introduction

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/01_introduction.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/01_introduction.pdf") (PDF, 1.8M)
  + exercise 01 - [readings](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis10/readings/Rijsbergen_IR_Introduction.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis10/readings/Rijsbergen_IR_Introduction.pdf") (PDF, 133K)
* 13.03. - Information Retrieval I

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/02_information_retrieval_01.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/02_information_retrieval_01.pdf") (PDF, 926K)
* 20.03. - Information Retrieval II

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/03_information_retrieval_02.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/03_information_retrieval_02.pdf") (PDF, 1.2M)
  + mmis-ex01.xls - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/files/mmis-ex01.xls "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/files/mmis-ex01.xls") (XLS, 23K)
  + mmis-ex02.txt - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/files/mmis-ex02.txt "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/files/mmis-ex02.txt") (TXT, R-code, <1K), [R project](http://www.r-project.org/ "http://www.r-project.org/")
* 27.03. - Retrieval Evaluation

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/04_retrieval_evaluation.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/04_retrieval_evaluation.pdf") (PDF, 770K)
  + mmis-ex03.xls - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/files/mmis-ex03.xls "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/files/mmis-ex03.xls") (XLS, 31K)
* 17.04. - Image Retrieval: Global Features I
* 24.04. - Image Retrieval: Global Features II

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/05_image_retrieval_01.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/05_image_retrieval_01.pdf") (PDF, 1.9M)
* 08.05. - Image Retrieval: Local Features

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/06_image_retrieval_02.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/06_image_retrieval_02.pdf") (PDF, 888K)
* 15.05. - Clustering

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/07_clustering.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/07_clustering.pdf") (PDF, 1.6M)
* ~~22.05. - entfällt~~
* 05.06. - Indexing

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/08_indexing.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/08_indexing.pdf") (PDF, 1.2M)
* 12.06. - Audio

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/09_audio.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/09_audio.pdf") (PDF, 939K)
* 19.06. - Web Retrieval

  + slides - [download](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/10_web_retrieval.pdf "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/slides/10_web_retrieval.pdf") (PDF, 1.2M)
* 26.06. - Project presentations

## Grading & Project Modalities

Grading is based on 3 main factors with a 1/3 weighting each.

1. Exercises: Do the exercises handed out through the course and finish the exercises with getting a average precision at 10 (p@10) on the Wang data set for your descriptor (see below)
2. Project: Choose a project in the contex of (visual) information retrieval, multimedia analysis or multimedia information system and implement a solution.
3. Project Presentation: Present your project including motivation, approach and results.

### Exercises 4 + 5

Your task for exercise 4 is to implement a global image descriptor. Focus is on fuzzy color, but you can choose color space (RGB, HSV, etc.) and optional extensions (joint histogram etc.).

Exercise 5 then is to test your global image descriptor on the [Wang Simplicity 1,000 data set](http://wang.ist.psu.edu/docs/related/ "http://wang.ist.psu.edu/docs/related/"). It's composed of 10 categories with 100 images each. Pick images from different categories and do a linear search with your global image descriptor. Evaluate its performance based on precision at 10 (p@10). Send me the final averaged value.

## Course Materials

* Test data set on Ferraris including images and metadata: [ferrari.zip](http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/files/ferrari.zip "http://www.itec.uni-klu.ac.at/~mlux/teaching/mmis12/files/ferrari.zip") (ZIP, 43M)

## Projects

* Posterize filter for Java, see e.g. [here](http://en.wikipedia.org/wiki/Posterize "http://en.wikipedia.org/wiki/Posterize")
* Canny edge detector, see e.g. [here](http://en.wikipedia.org/wiki/Canny_edge_detector "http://en.wikipedia.org/wiki/Canny_edge_detector")