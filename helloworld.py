import requests
import base64
link= requests.get('https://panel1.nimplus.space/api/user/account/subscribe/9e0132ca39b4cfe9dde5be32eab967c2?type=android&ip=0&flow=1')

code=link.text
##encode= base64.b64encode(b'code')
print(code)
