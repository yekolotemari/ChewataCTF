import hashlib
password= "0192023a7bbd73250516f069df18b500"
print("Dwight Schrute : [the power shut off; cold opening]  Uh-oh. Ok, ok, nobody panic! Listen up, listen up!")
print("[Dwight uses a flashlight close to his face]")
print("Dwight Schrute : Everyone, follow me to the shelter. We've got enough food for fourteen days. After that, we have a difficult conversation.")
print("Michael Scott : [the power went back on]  My bad. Space Heater and Fan were both on high, plugged into the same outlet. So...")
print("Jim Halpert : Um... it's saying the server went down? Does anybody know that password? 'Cause otherwise, we can't do any work.")
print("Michael Scott : Uh... try password.")
print("Jim Halpert : Nope.")

def check():
    while True:
        try:
            password_in=input()
            result = hashlib.md5(password_in.encode())
            if(result.hexdigest() == password):
                return 0
            else:
                raise("")
        except: 
            print("Jim Halpert : Nope.")

check()
print("------------------------------")
print("Jim Halpert : the password. We're in.")
print("[the crew cheered]") 
print("Michael Scott : The important thing is, this kept us secure, people. ")