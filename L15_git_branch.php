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
=> git merge <branch name jise merge karna chahte hai>
=> git log (To verify the merge)
=> git push origin master (to push to central repo like gitHub)
=> Merge copy & paste ka kaam krta hai cut-paste ka nahi

************** GIT CONFLICT *******************

Definition :- When same name file having different content in different branches, if you do merge, conflict occurs (Resolve conflict then add and commit) i.e git confuse hojata hai ki kis file ko phle rakhna hai and kise baad mai jisse conflict arise hojata hai
=> Conflict occurs when you merge Branches

************** GIT STASH **********************

Definition :- Kind of temporary storage jaha pr hum humara code rakh skte hai and humari working directory ko free krkste hai kisi or work ke liye

=> Suppose you are implementing a new feature for your product. Your code is in progress and suddenly a Customer escalation comes Because of this, you have to keep aside your new feature work for few hours, you cannot commit your partial code and also cannot throw away your changes. So you need some temporary storage, when you can store your partial changes and later on commit it.
=>**** To Stash an item (only applies to modifies files not new files)

// ------ STASH COMMANDS ------------ //

git stash (to stash an item)
git stash list (to see stashed items list)
git stash apply stash@{0} => stash se file ko vapas laane ke liye iska use hota hai here {0} represent latest file

Note:- Jab bhi hum stash se data ko leke aate hai to uski ek copy vaha pr bhi rahti hai i.e data copy paste hota hai cut-paste nahi to use delete krne ke liye hum iss command ka use krte hai

git stash clear (to clear the stash)

**************** GIT RESET ********************

Definition :- git reset is a powerful command that is used to undo local changes to the state of a git repo.
=> jAB bhi code local repository se staging area pr pahuch jaata hai and hum abhi bhi code mai changes krna chahte hai to git reset ka use krke use staging area se hata skte hai

To reset staging area :-

git reset <filename>
git reset . (staging area mai jo bhi hai use reset krdo)

=> **** To reset the changes from both staging area and working directory at a time i.e file dono jagah se delete hojaygi

git reset --hard


*/