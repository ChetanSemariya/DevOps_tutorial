<?php

/*

********* HOW TO COMMIT, PUSH & PULL FROM GITHUB *********** 

=> Login into mumbai ec2 instance
=> Create one directory and go inside it
=> git init (jab bhi hum yhh command run krte hai to folder ke andar ka sabhi data humari local repository mai save hojaata hai .git name ke folder mai)
=> touch myfile (put some data)
=> git status (working directory ka status)
=> git add . (here the dot add all the files from working space to staging area)
=> git commit -m "1st commit from mumbai"
=> git status
=> git log (yhh batata hai ki commit kisne kiya hai i.e it gives all the details)
=> git log -1 (To show the latest commit)
=> git log -2 (To show the last two commit)
=> git log --oneline (sare commit ek hi line mai aajayenge)
=> git log --grep "ignore" (jaha pr bhi ignore hoga commit mai vo sare commit aajayenge)
=> git show <comment-id> (Agar mai dekhna chahta hun ki kisi person ne kya code kiya hai)
=> git remote add Origin <central git url>
=> git push -u Origin Master
=> git pull origin master (central repository se code ko pull krne ke liye)

Authentication Perform :- enter username and password

Note:- Now we check our working directory it is blank bcz all code push to the remote server , now ab koi bhi iss code ko dekh skta hai read krskta hai and pull krskta hai

***************** GIT IGNORE COMMAND ************************

Note => To ignore files while committing

// ------- How it works ----------- //

STEP-1 :-
create one hidden file .gitignore and enter file format which you want to ignore

for eg:- cat .ignore
enter *.css (jisme bhi .css extention hai uss file ko ignore krdo)
      *.java

STEP-2 :- git add .gitignore
STEP-3 :- git commit -m "latest update exclude .css"
STEP-4 :- git status

Now, create some text, java and css files and add then by running "git add" and now you will see that .ignore file is not added in the local repository or staging area

*/