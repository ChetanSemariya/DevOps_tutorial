<?php
/*

Local Version Control System (work on our local system we can custom made version on our local system)
    |
    |
    V
Centralized Version Control System
    |
    |
    V
Distributed Version Control System (EX:- Git, Mercurial)

Git = Software
Github = Service provide storage
GitLab = Service provide storage

****************** WorfFlow or Stages of Git ******************

Step-1 :- Run git init command (To initialize the git)

=> Jese hi yhh command chalate hai to ek humare local system pr ek file ban jaati hai .git jo ki hidden rehti hai and jo bhi humari directory rahti hai vo ek git repository mai convert hojaati hai local pr and isme 3 spaces create hojaate hai :-

1). WorkSpace or working directory (Jaha pr bhi maine code likha hai i.e jaha hum kaam krte hai)
2). Staging Area (code commit from working directory i.e code finalize and ready for upload the server)
3). Local Repo (staging area se code ko local repo tak bhejna with the help of commit)

Now we push our code from Local Repo to the remote server in that case GitHub is comes in picture.
GitHub is a central repository or we can say that it provide storage

Note:-

ADD => Agr hum working directory se code ko staging pr bhejte hai to uss process ko add kaha jaata hai
commit => Staging area se code ko local repo pr bhejna use hi commit kahte hai or we can say snapshot
(Jab bhi hum code commit krte hai to uski ek commit id generate hoti hai (40 alphanumeric characters ki) jiske behalf pr hum kisi bhi din ka snapshot le skte hai i.e kitna bhi purana code nikal skte hai)

***** Now let say kisi person ne kaam kara and kaam krne ke baad jo bhi usne code kara hai use git pr upload kardiya, now ab jo bhi dusra person hai agar vo ispe kaam krna chahta hai to vo phle git pull command run karega jisse git ki teeeno stages uske system pr bhi ban jaygi and sara code bhi uske pass aajayga and then frr vo aage ka kaam start krskta hai and wrk finish hone ke baad yhh banda push karega and first vala pull karega jisse sara updated code uske pass aajaye

********* What is incremental Snapshot ****************

=> Let's say humne koi code upload kiya hai github pr jiska size 1 gb hai and kuch time baad humne usme kuch changes krdiye hai jo 500 mb ke hai and agar ab mai iss code ko github pr upload karu to iska total size 1.5 GB hoga i.e old code jo hum upload krchuke hai vo dobara se upload hoga jisse meri memory jyada space occupied hogi to isi problem ke solution ke liye incremental snapshot aaya 
=> Incremental snapshot mai agar maine 500 mb ke changes kiye hai to only vahi update honge jo bhi latest changes hai old code vahi ka vahi rahega


************** SOME IMPORTANT DEFINATIONS ****************

REPOSITORY :-

=> Repository is a place where you have all your codes or kind of folder on server.
=> It is a kind of folder related to one product
=> Changes are personal to that particular repository

SERVER :-

=> It stores all Repositories
=> It contains metadata also

WORKING DIRECTORY :-

=> Where you see files physically and do modifications
=> At a time, you can work on particular branch-


// ----------------- Work on 15 Aug 2025 ------------------ //

REPOSITORY or STORAGE :- 
=> Repository is a place where you have all your codes or kind of folder on server
=> It is a kind of folder related to one product
=> Changes are personal to that particular repository

SERVER :-
=> It stores all repositories (including local)
=> It contains metadata also

WORKING DIRECTORY OR WORKSPACE :-
=> Where you see files physically and do modification
=> At a time, you can work on particular branch

Note :- In Other CVCS, developers generally makes modifications and commit their changes directly to the repository. But git users a different strategy. 
=> Git does not trach each and every modified file whenever you commit an operation.
=> Git looks for the files present in the staging area. Only those files present in the staging area are considered for commit and not all the modified files.
=> Git does not look working directory files. It look only the staging area because these are the one files who are ready to commit

Working Directory
        |  
        |  add
        |
        V
Staging Area (finalize code which are ready to commit)
        |
        |  Commit
        |   
        V
Local Repository
        |
        |
        V
      GitHub

COMMIT :- Code ko staging area se leke local repository mai save krna

=> Store changes in repository you will get one commit-ID. (commit id ka purpose yhh hai ki isse hum pichla record track krskte hai)
=> Commit-ID is 40 alpha-numeric characters.
=> It uses SHA-1 checksum concept. (means ek value generate hojati hai jise hum humare checksum value kahte hai)
=> Even if you change one dot, commit id will get change as a result checksum value change and git knows there is a change in code (i.e we can say git also provides integrity)
=> It actually helps you to track the changes
=> Commit is also named as SHA-1 Hash

COMMIT-ID / VERSION- ID / VERSION :-

=> Reference to identify each change
=> To identify who changed the file

TAGS :-

=> commit id se hum easily smj nahi paate hai ki humne kya changes kiye hai isly hum use ek tag provide krdete hai jisse jab bhi hum commit id ko check krte hai to tag ki help se easily se smj aajata hai ki humne kya changes kiya tha
=> Tag assign a meaningful name with a specific version in the repository once a tAG is created for a particular save, even if you create a new commit , it will not be updated

SNAPSHOTS :-

=> Har baar ek incremented snapshot banta hai jisme sirf or sirf changes add hote hai
=> Represents some data of particular time 
=> It is always incremential i.e it stores the changes (appended data) only
NOT ENTIRE COPY

PUSH :-

=> Local machine se remote server pr code ko daalna push krna kahlata hai
=> Push Operations copies changes from a local repository instance or server to a Remote or Central repo. This is used to store the changes permanently into the git repository.

PULL :-

=> Server se code ko local machine pr laana pull operations kahlata hai
=> Pull operations copies the changes from a Remote repository to a local machine. The pull operation is used for synchronisation between two repo i.e new code humare pass aajata hai pull krne se mean upto date rahte hai

BRANCH :-

NOTE:- jab bhi hum first time branch banate hai to phle ka sara code copy hoke usme aajata hai jaha se branch create kr rahe hai only vahi vala data copy hoga and frr hum usme apne changes krke commit krskte hai

=> Iski help se sabhi log apna-apna kaam krskte hai and at the end sabhi kaam ko merge krke final output tayyar krskte hai
=> Product is same, so one repository but different task
=> Easy task has one separate Branch
=> Finally merges (code) all Branches
=> It is useful when you want to work parallely bca we can assign multiple branch with multiple persons
=> Can create one branch on the basis of another branch
=> Changes are personal to that particular branch
=> Default branch is 'MASTER'
=> File created in workspace will be visible in any of the branch workspace until you commit. Once you commit then that file belongs to that particular branch.

/------------ ADVANTAGES OF GIT ------------------ //

=> Free and open source
=> Fast and small -> As most of the operations are performed locally therefore it is fast
=> Security -> Git uses a common cryptographic hash function called secure hash function (SHA-1) to name and identify objects within its database
=> NO need of powerful hardware bcz sab apne apne local machine pr kaam krte hai isly server pr load nahi aata
=> Easier Branching -> if we create a new branch, it will copy all the codes to the new branch


// ------------------- TYPES OF REPOSITORIES ----------------- //

Bare Repositories (Central Repository) 

=> Store and share only
=> All Central Repositories are bare repo

Non- Bare Repositories (Local Repo)

=> Where you can modify the files
=> All local repositories are non-bare repositories

*/