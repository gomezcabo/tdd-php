#!/bin/bash
PREVIOUS=""
while true
do
    CURRENT=`find tests/unit src | xargs stat -c=%Y | md5sum`
    if [ "$PREVIOUS" != "$CURRENT" ]
    then
        PREVIOUS=$CURRENT
        clear
        uptime
        ./vendor/bin/codecept run
    fi

    sleep 1
done
