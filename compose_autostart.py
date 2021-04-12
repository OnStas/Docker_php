import os
import time
import requests
from requests.exceptions import ConnectionError


while True:
  try:
    request = requests.get('http://45.79.203.158:8000')
  except ConnectionError:
    print('Web site does not exist')
    os.system('docker system prune -y')
    os.system('docker-compose up')
  else:
    print('Web site exists')
  time.sleep(60)
