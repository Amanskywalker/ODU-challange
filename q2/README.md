# Question 2

Consider a table composed of m x n cells, where m,n>0. Each cell of the table has a certain number of
pebbles and a cell at i th row and j th column of the table is referred to as

cell-(i,j). Such a table can be represented as a 2D array  A[1..m, 1..n], where A[i,j] denotes the number of pebbles in cell-(i,j) and A[i,j] > 0 for all i,j. You start from cell-(1,1) and move towards the cell-(m,n) with a constraint that in each step you either go down or go right by one cell i.e. from cell-(i,j) you either go to cell(i+1,j) or cell-(i,j+1). Your goal is to move from cell-(1,1) to cell-(m,n) collecting the maximum number of pebbles.

For example, consider the table below with 4 x 5 cells.
  ```
8   11   7   9   3
22  13   5   8  11
9   15  23   4   7   
11   1   4  25  17  
```

The maximum number of pebbles collected when you move from cell-(1,1) to cell-(4,5) is 127 and the
path that leads to it is given by:  
(1,1) -> (2,1) -> (2,2) -> (3,2) -> (3,3) -> (4,3) -> (4,4) -> (4,5)

i) What is the length of any path from cell-(1,1) to cell-(m,n).

ii) Write an algorithm to find maximum pebbles while going from cell-(1,1) to cell -(m,n).

# Solution

  length of any path from cell(1,1) to cell(m,n) is m+n-1

### Algorithm

  Recurssive Backtracking algorithm.

  Following Algorithm is used which set the variable `max` to the maximum value found using backtracking.

```
algorithm move  
 input : integer i , j, cost

  set cost = cost + pebbles[i][j]
  if i=m & j=n           // reached the last cell
    if cost > max
      set max=cost
  else if i<m & j<n      // it in some other cell
    Move(i, j+1, cost)   // move right
    Move(i+1,j,cost);    // move down
  else if i=m & j<n)     // can't move down
    Move(i, j+1 ,cost)   // move right
  else if i<m & j=n      // can't move right
    Move(i+1, j, cost)   // move down
 end
```

### Language used
  Written in [Hack lang](http://hacklang.org/)

### Running instructions
  - Installation of hacklang can be found on [https://docs.hhvm.com/hack/getting-started/getting-started](https://docs.hhvm.com/hack/getting-started/getting-started)

  - $ hhvm index.php
