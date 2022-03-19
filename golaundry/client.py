import socket

#deklarasi variable
UDP_IP = "127.0.0.1"
UDP_PORT = 7878
PESAN = "testing...Hello world"

#output program
print("target IP:", UDP_IP)
print("target port:", UDP_PORT)
print("pesan:", PESAN)

#membuat objek socket baru
sock = socket.socket(socket.AF_INET,socket.SOCK_DGRAM)#UDP
sock.sendto(PESAN.encode(), (UDP_IP, UDP_PORT))
