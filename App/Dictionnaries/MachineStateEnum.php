<?php


enum MachineStateEnum {

    case StateCommandWaiting;
    case StateCommandPending;
    case StateCommandPayment;
    case StateCommandDelivering;
    case StateCommandFinished;

}