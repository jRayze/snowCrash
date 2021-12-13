import string


with open('/home/user/level09/token') as f:
    content = f.read()
    value = content.rstrip("\n")
    txt = ''
    for nb in range(len(value)):
            txt = txt + chr(ord(value[nb]) - nb)
    print(txt)