import socket
import sys
s = socket.socket()
host = socket.gethostname()
print("First Peer will start on host:",host)
port = 1235
s.bind((host,port))
print("First Peer is bound successfully")
s.listen(1)
conn,addr = s.accept()
print(addr,"has connected")
while 1:
    message = input(str("You:>>"))
    message = message.encode()
    conn.send(message)
    incoming_message = conn.recv(1024)
    incoming_message = incoming_message.decode()
    print("Second Peer:>>",incoming_message)
    
