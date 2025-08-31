<?php

/*
                   -------0 (Little features)
                   |
                   |
(Start Master) o---------0------0-----------------O (Master)
                         |               |
                         |               |
                         V               ------o---o---0 (Branch with big features and 3 commits)
                       commit

Note:- Jab bhi hum branch banante hai to jaha se bhi branch ko bana rahe hai vo sara code new branch mai automatically shift hojata hai i.e parent ka code child ke pass automatically chala jaata hai

=> The diagram above visualizes a repository with two isolated lines of development, One for a little features and one for a longer-running features. By developing them is Branches, it's not only possible to work on both of both in parallel but "it also keeps the main Master Branch free from error".
=> Each task has one separate Branch (because hum sabh kuch master branch mai nahi krskte directly testing and all)
=> After done with code Merge other branches with master
=> The concept is useful for parallel development
=> You can create 'N' number of branches
=>** Changes are personal to that particular branch
=> Default branch is 'Master'
=> Files created in workspace will be visible in any of the branch workspace until you commit. Once you commit then that files belongs to that particular branch. (jab bhi hum koi file create karenge kisi bhi branch mai to vo sabhi branches mai visible rahegi but jab hum use commit krdete hai then frr vo kisi particular branch mai hi show hogi sab mai nahi)
=> When created new Branch, data of "EXISTING BRANCH" is copied to new Branch.

**************** IMPORTANT COMMANDS ******************

1). To see list of Available Branches :- git branch
2). Create a New Branch :- git branch <branch Name>
3). To Switch Branch :- git checkout <Name of the branch you want to go>
4). git log --oneline (to check all the commits)
5). git branch -d branchname (branch ko delete krne ke liye)
5). git branch -D branchname (branch ko delete krne ke liye forcefully)

*************** GIT MERGE *******************

=> You can't Merge branches of different Repositories
=> We use "Pulling Mechanism" to Merge Branches (i.e jo bhi new code mai vo automatically updte hojayga)
=> git merge <branch name>
=> git log (To verify the merge)
=> git push origin master (to push to central repo like gitHub)
=> Merge copy & paste ka kaam krta hai cut-paste ka nahi




*/