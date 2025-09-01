<?php
/*

***************** GIT REVERT ********************

git reset => Before commit (private file pr kiya jata hai qk yh humare local pr hota hai)
git revert => After commit (public file pr kiya jata hai bcz hum commit krchuke hote hai)

Definition :- The revert command helps you undo an existing commit
=> It does not delete any data in this process instead Rather git creates a new commit with the included files reverted to their previous state, so your version control history moves forward while the state of your file moves backward
=> Jab bhi hum revert krte hai to ek commit id renerate hoti hai git ki tarf se hi jo ki hume previous data laake deti hai

Note:- Ek baar Commit krne ke baad revert krne se hum code ko commit mai se hata nahi skte hai haa but use undo krskte hai, i.e revert command run krne se jo humara old code hota hai vahi aajata hai i.e without changes vala code haa but commit mai vo changes always rahte hai.

************ HOW TO REMOVE UNTRACKED FILE **************

git clean -n (dry run puchega delete krne se phle)
git clean -f (forcefully delete)


************* TAGS ****************

Definition :- Tag operations allows giving meaningful names to a specific version in the repository

## To apply tag :-

git tag -a <tagname> -m <message> <commit-ID>

## To see the list of tags :-

git tag

## To see particular commit content by using tag :-

git show <tagname>

## To Delete a tag :- 

git tag -d <tagname>


******************** GITHUB CLONE *********************

=> Open github website
=> Login and choose existing repository
=> Now, go to your linux Machine, and run command
=> git clone <url of github repo>
=> It creates a local repo automatically in Linux mac with the same name as in github account



*/