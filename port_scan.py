import socket
def scan(port):
  s = socket.socket()
  if s.connect_ex(('localhost', port)) == 0:
      print port, 'open'
      s.close()
if __name__ == '__main__':
    ports = [80,81,88,6379,8000,8080,8088]
    map(scan,ports)
