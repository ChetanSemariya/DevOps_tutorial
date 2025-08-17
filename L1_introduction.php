<?php
/*

Important Terms :- 

=> on-site :- jaha pr humara client betha hua hai jisne hume project diya hai
=> off-shore :- jaha pr developers bethe rahte hai uss place ko offshore kahte hai

************** Why Organisation Needs devops specialist ? *******************

=> Fast Delivery (otherwise traditional way mai chalenge to time bahut consume hoga i.e need abhi hai pr outcome kuch time baad milega)
=> Higher Quality
=> Less capex(capital expenditure) + opex(operational expenditure)
=> Reduced outages (i.e user experience or we can say user response acha hona chahiye jabhi log jyada se jyada use karenge)

# capital expenditure = Kaam start hone se phle jo kharcha hota hai use capex kahte hai.
# operational expenditure = Kaam start hone ke baad use chalane mai jo kharcha hota hai use opex kahte hai.

BASIC WORKING ARCHITECTURE OF PROJECT DEPLOYMENT : This cycle is known as SDLC

**********  SOFTWARE DEVELOPMENT LIFE CYCLE (SDLC) ****************

    Developers (write a code for the project)
        |
        V
    Build (.exe file i.e executable file jise hum download krke check krske ki everthing is working or not) => git se code nikalne ke liye jenkin ka use kiya jaata hai and maven ka bhi (this is tool)
        |
        V
    Test ( Code ki testing krna galat entries fill krke ki sahi chal raha hai ya nahi) => testing ke -liye selinium use kiya jaata hai
        |
        V
    Quality Assurance (QA check karenge ki app user friendly hai yaa nahi, interface acha hai ya nahi)
        |
        V
    Deploy (now we ready to deploy on-site i.e client ke server pr live krdenge application ko) =>
        |
        V
    Maintainance + employee Training
        |
        V
    Monitoring (company ke pass hi vapas aate hai agar koi bhi issue ya bug aata hai to and uske liye company charge krti hai)

******* ------------ Important Tool which we use for Devops --------------- *******

Developer => Code git pr upload krdete hai
Build => Developer ne jo code kiya hai use git se nikalne ke liye "Jenkin" ka use krte hai and agar code mai kuch bhi error hai to jenkin use identify krke developer ko email ya notification bhej deta hai jisse developer uspe kaam krske and frr vo vapas updated work git pr upload krta hai and jenkin use check krke build bana deta hai . This all work is done by Automation with the help of Jenkin tool so it save lot of time.
Maven => Iska use build banane ke liye hota haii
Testing => Selenium ka use krte hai
Deploy(Server Administrator) => Deploy krne ke liye hum chef ya phir ansible or docker ya kubernetes or pupet ka use bhi krskte hai. 

Note:- Yhh sare deployment ke kaam phle server administrator ke hote the like as server pr kuch chije upgrade krna ya upload krna but with the help of chef hum ek sath 100 server pr data upgrade krskte hai (automation ke aane ke baad unki requirement nahi rahi)
Monitoring => Monitoring ke liye Nagos ya phir AWS ka cloudwatch ka use krte hai

Limitation of SDLC Model :-

=> Sdlc is a "WaterFall Model" or "Step by Step" Model that means isme sequential wise kaam hota hai like developer phle code karega then build banegi then frr vo testing ke liye jayga and then after we will deploy now ab agar humari requirements change hojaati hai yaa humare need kuch or hai to uske liye dobara se mehnat krni padti thi SDLC model mai
=> Iss Model mai piche jana possible nahi hai

Solution :- Iss problem ke solution ke liye hum "Agile Methodology" ka use krte hai yaa phir Scrum ka use krte hai

*************** AWS DEVOPS TOOLS ****************

NOTE:- Jo AWs ke khud ke tools hai isme hum jenkins ya phir chef ka use nahi krte hai

1). CodeCommit
2). CodeDeploy
3). CodePipeline
4). CodeStar

*************** AZURE DEVOPS TOOLS ****************

1). Repos
2). Artifact

** NOTE :- DevOps / AWS DevOps / Azure DevOps Teeno alag alag chize hai, working principle same hai but the difference is that aws and azure apne khud ke tools ka use krte hai jo ki ek dependent tool hai and paid bhi hai and DevOps ke jo tool hai vo Open source hai and usme transparency bhi hai isliye market mai DevOps jyada popular hai because these are open source isme hum kisi pr bhi kaam krskte hai cloud pr
*/