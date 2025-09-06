<?php

/*

VIRTUALIZATION :- It is the technique of Splitting a Physical Resource into as many logical resource as we want Eg:- CPU, MEMORY
                    OR
Virtualization is a technology that transform hardware into software


CONCEPT :- Let say humare pass ek computer hai jiski configuration bahut high hai 16GB ram, i7 & 2TB Hard-disk but hume uspe koi minimal sa kaam krna hai that means uske resources ka proper utilization nahi horaha hai to hum iss case mai 2 virtual machine create karenge jisme hum humare main system ke resources ko allocate krdenge so now ab ek hi system se 3 system create krskte hai with the help of virtualization and each system do their own work accordingly.

Example :- Virtualization is used in our mobile as well let say humare mobile ki internal RAM hai 16 GB and ab hum usme memory card lagate hai 8 GB to vo puchta hai ki use as external memory or as an internal memory Now jese hi hum internal memory select krte hai to vo dono memory ko add krke dikhata hai that mean in that case virtualization is adding the resources not splitting 

Note:- Hum virtualization ki help se 50+50+50 GB ki memory ko add krke ek new Logical Storage create krskte hai 150 GB ka



VM-1           VM-2              VM-3
|               |                 |
|               |                 |
| 4GB           | 4GB             | 4GB
| 100gb         | 100gb           | 100gb
|_______________|_________________|      
                |
                |
            Hypervisor
                |
                |
        Physical Hardware
         [2TB,32GB RAM]

Key Points :-  
1). Hum apne hardware ki configuration ke according multiple virtual maachine create krskte hai
2).***** Har virtual machine apne aap mai isolated hoti hai i.e aapas mai vm's ka koi link nahi hota hai, yhh ek individual entity hoti hai and na vo data share krti hai (Har vm ko yahi lagta hai ki vahi bss Hypervisor se connected hai i.e hardware se)

Benifits :-
=> High Availablitiy
=> Fault Tolerance
=> Reduced cost
=> Less capex and opex

*/