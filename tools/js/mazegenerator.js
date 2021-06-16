/**
  generates a maze with (x,y) cells. Note that the actual maze is
  larger as the maze cells are divided by rows and cols of walls.
*/
function generateMaze(mazeSizeX, mazeSizeY) {
  // init maze double the size to have rows and cols of cells ...
  // surrounding walls are left out.
  let maze = Array(mazeSizeY*2-1).fill().map(() => Array(mazeSizeX*2-1));
  for (let r=0; r < mazeSizeY*2-1; r++) {
    for (let c=0; c < mazeSizeX*2-1; c++) {
      if (r%2 == 0 && c%2==0) maze[r][c] = 1;
      else maze[r][c] = 1;
    }
  }
  // generate maze by randomized prim's algorithm
  // remember: cells are in (r%2 == 0 && c%2==0) indexes.
  let wallList = [];
  // pick a cell ..
  let cell = {c:0, r:0};
  // mark it as part of the maze
  maze[cell.r][cell.c] = 0;
  addWallsToList(cell, wallList, maze);
  // while there are walls ..
  while (wallList.length > 0) {
    let idx = Math.floor(Math.random()*wallList.length);
    let wall = wallList[idx];
    // check if only one is connected, then remove wall between them.
    let result = checkToRemove(wall, maze);
    if (result.remWall) {
      // remove wall from maze
      maze[wall.r][wall.c] = 0;
      // make cell state visited
      let cell = result.cell;
      maze[cell.r][cell.c] = 0;
      // add walls to wall list
      addWallsToList(cell, wallList, maze);
      // console.log(wallList);
    }
    // remove the wall from the wall list ...
    wallList.splice(idx, 1);
    // console.log(wallList);
  }
  return maze;
}

function addWallsToList(cell, wallList, maze) {
  if (cell.r+1<maze.length)
    addWall(cell.r+1, cell.c, wallList, maze);
  if (cell.c+1<maze[0].length)
    addWall(cell.r, cell.c+1, wallList, maze);
  if (cell.r>0)
    addWall(cell.r-1, cell.c, wallList, maze);
  if (cell.c>0)
    addWall(cell.r, cell.c-1, wallList, maze);
}

function addWall(r, c, wallList, maze) {
  if (maze[r][c] == 1) wallList.push({r: r, c: c})
}

function checkToRemove(wall, maze) {
  let removeIt = false;
  tcell = {};
  // find the appropriate cells ... each wall connects two cells.
  if (wall.r % 2 == 1) { // it's a horizontal wall
    if (wall.c % 2 == 0) {
      if (maze[wall.r-1][wall.c] + maze[wall.r+1][wall.c] == 1) {
        removeIt = true;
        // find out which cell ...
        if (maze[wall.r-1][wall.c] == 0)
          tcell = {r:wall.r+1, c:wall.c};
        else
          tcell = {r:wall.r-1, c:wall.c};
      }
    }
  }
  else { // it's a vertical wall .. that's the easy one, cells are left and right.
    if (maze[wall.r][wall.c+1] + maze[wall.r][wall.c-1] == 1) {
      removeIt = true;
      if (maze[wall.r][wall.c+1] == 0)
        tcell = {r: wall.r, c: wall.c-1};
      else
        tcell = {r: wall.r, c: wall.c+1};
    }
  }
  return {remWall: removeIt, cell:tcell};
}

// all zeros are printed as walls, the rest is hallway.
function printMaze(maze) {
  let ch = '█';
  // console.log("Printing maze of size " + maze[0].length + "x" + maze.length);
  for (let c=0; c< maze[0].length+2; c++) process.stdout.write(ch);
  console.log();
  for (let r=0; r < maze.length; r++) {
    process.stdout.write(ch);
    for (let c=0; c< maze[0].length; c++) {
      process.stdout.write(maze[r][c]?ch:" ");
    }
    console.log(ch);
  }
  for (let c=0; c< maze[0].length+2; c++) process.stdout.write(ch);
  console.log();
}

/**
  Makes an SVG out of the maze and returns text containing the SVG.
*/
function paintMaze(maze) {
  // console.log("Writing to out.svg");
  let blockSize = 10;
  out = "";
  out += "<svg viewBox=\"0 0 " + (maze[0].length+2)*blockSize + " " + (maze.length+2)*blockSize + "\" xmlns=\"http://www.w3.org/2000/svg\">";
  let box = "<rect x=\"XXX\" y=\"YYY\" width=\"" + blockSize + "\" height=\"" + blockSize + "\" stroke-width=\"0\" fill=\"black\" />";
  for (let c=0; c< maze[0].length+2; c++)
    out += box.replace("XXX", c * blockSize + "").replace("YYY", "0");
  for (let r=0; r < maze.length; r++) {
    out += box.replace("XXX", "0").replace("YYY", (r+1) * blockSize + "");
    for (let c=0; c< maze[0].length; c++) {
      if (maze[r][c]) out += box.replace("XXX", (c+1) * blockSize + "").replace("YYY", (r+1) * blockSize + "");
    }
    out += box.replace("XXX", (maze[0].length +1)* blockSize + "").replace("YYY", (r+1) * blockSize + "");
  }
  for (let c=0; c< maze[0].length+2; c++) out += box.replace("XXX", c * blockSize + "").replace("YYY", (maze.length+1) * blockSize + "");
  out += "</svg>";
  return out;
}



// run the main function.
// let myMaze = generateMaze(mazeSizeX, mazeSizeY);
// paintMaze(myMaze); // to svg
// printMaze(myMaze); // to ASCII
