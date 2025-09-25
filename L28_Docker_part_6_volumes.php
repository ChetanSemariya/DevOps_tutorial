<?php

/*

Volume :- Ek kind of normal directory hoti hai jise hum as a volume declare krdete hai and iska kaam ek contianer se dusre contianer mai easily se data ko share krna hota hai

Note :- Volume ek common directory jo sabhi containers ke bich mai share hoti hai and agar isme koi kuch bhi changes krte hai to vo changes sabhi conatainers mai dikhai denge
2). container delete krte hai to vol delete nahi hota hai use manually delete krna padta hai
3). We can share volume from contianer to container or host to container

    Docker File
        |
        |
        V
      Image
        |
        |
        V
    Container (contains vol) -------------> New Container (contains same vol)



    





*/