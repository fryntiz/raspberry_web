#!/usr/bin/python
# -*- encoding: utf-8 -*-

#Importar libreria GPIO
import RPi.GPIO as GPIO

#Definir modo de trabajo para la placa BCM 
GPIO.setmode(GPIO.BCM)

#Desactivo Errores
GPIO.setwarnings(False)

#Importamos la libreria time
import time

#Importamos la libreria para comandos de la consola/shell
import os

#Creamos variable para pausar
sleep = time.sleep

#Definir GPIO como Salida
GPIO.setup(18, GPIO.OUT)

#Asigno valor alto para que tenga corriente la salida de 3,3v por GPIO
GPIO.output(18, GPIO.HIGH)

#Pausar 1 segundo
sleep(1)

#Detener salida
GPIO.output(18, GPIO.LOW)

#Pausar 1 segundo
sleep(1)

#Limpiar GPIO
GPIO.cleanup()
