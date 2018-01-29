#!/bin/bash
bool=1
i=0
j=1
while [[ $bool == 1 ]];
do
if [ $(( $i % 2 ))  -eq 0 ]
then
curl  http://192.168.111.102:9811/inserttable.php?meal=Doener
i=$(( i +1 ))
else

curl http://192.168.111.102:9811/inserttable.php?meal=Full+Burger

i=$(( i +1 ))
fi
done

