import socket
import sys
import time
s = socket.socket()
host = input(str("Please enter the host name:"))
port = 1235
s.connect((host,port))
print("connected to first peer")
while 1:
    
    incoming_message = s.recv(1024)
    incoming_message = incoming_message.decode()
    print("First Peer:>>",incoming_message)
    message = input(str("You:>>"))
    message = message.encode()
    s.send(message)

             
 
