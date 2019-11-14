#!/usr/bin/python

from imutils.video import VideoStream
from pyzbar import pyzbar
import argparse
import datetime
import imutils
import time
import cv2
from picamera import PiCamera
from picamera.array import PiRGBArray
import RPi.GPIO as gp
import os
import sys
import requests

gp.setwarnings(False)
gp.setmode(gp.BOARD)
gp.setup(7,gp.OUT)
gp.setup(11,gp.OUT)
gp.setup(12,gp.OUT)

scanData = set()

WIDTH, HEIGH = 1280, 720
FRAME = 60
URL = 'http://1.245.186.98/update.php'

print("scanner start")

def camera_set():

    i2c = "i2cset -y 1 0x70 0x00 0x04"
    os.system(i2c)
    gp.output(7, False)
    gp.output(11, False)
    gp.output(12, True)

    camera = PiCamera()
    camera.resolution = (WIDTH, HEIGH)
    camera.framerate = FRAME
    camera.brightness = 50
    camera.contrast = 0
    camera.rotation = 90

    time.sleep(0.2)

    return camera

def scan_barcode(camera):
    cam = 3
    rawCapture = PiRGBArray(camera, size=(WIDTH, HEIGH))

    while True:
        for frame in camera.capture_continuous(rawCapture, format='bgr', use_video_port=True):

            
            if cam == 3:  #A
                i2c = "i2cset -y 1 0x70 0x00 0x04"
                os.system(i2c)
                gp.output(7, False)
                gp.output(11, False)
                gp.output(12, True)
            elif cam == 2: #B
                i2c = "i2cset -y 1 0x70 0x00 0x05"
                os.system(i2c)
                gp.output(7, True)
                gp.output(11, False)
                gp.output(12, True)
            elif cam == 1: #D
                i2c = "i2cset -y 1 0x70 0x00 0x07"
                os.system(i2c)
                gp.output(7, True)
    	        gp.output(11, True)
    	        gp.output(12, False)

            image = frame.array
            scanData.clear()
            barcodes = pyzbar.decode(image)

            for barcode in barcodes:
                (x,y,w,h) = barcode.rect
                cv2.rectangle(image, (x,y), (x+w, y+h), (0,0,255), 2)

                barcodeData = barcode.data.decode("utf-8")
                cv2.putText(image, barcodeData, (x, y-10), cv2.FONT_HERSHEY_SIMPLEX, 2, (0,0,255),2)

                scanData.add(barcodeData)

                #print("scan [%s]" %(barcodeData))

            _resize = cv2.resize(image, dsize=(640, 480), interpolation=cv2.INTER_AREA)
            
            if cam == 3:    #Camera D
                #sendToServ('01F001', scanData)
                cv2.imshow("Barcode Scanner"+str(cam), _resize)
                time.sleep(0.2)
                cam = 2
            elif cam == 2:  #Camera A
                #sendToServ('03F001', scanData)
                cv2.imshow("Barcode Scanner"+str(cam), _resize)
                time.sleep(0.2)
                cam = 1
            elif cam == 1:  #Camera B
                #sendToServ('02F001', scanData)
                cv2.imshow("Barcode Scanner"+str(cam), _resize)
                time.sleep(0.2)
                cam = 3

            key = cv2.waitKey(1) & 0xFF
            if key == ord("q"):
                break
            rawCapture.truncate(0)
    print("BREAK")    
    cv2.destroyAllWindows()


def sendToServ(floor, scanData):
    #print("[%s] send: %s" %(floor,scanData))
    send = ','.join(scanData)
    d = {floor : send}
    print(d)
    requests.post(URL, data=d)
    
if __name__ == "__main__":
    
    scan_barcode(camera_set())

        
