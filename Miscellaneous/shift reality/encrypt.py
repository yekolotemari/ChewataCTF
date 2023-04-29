print("----------------ሚስተር ሮቦት----------------")
print ("በአንድ ወቅት ጠላፊ ይኖር ነበር። እዚያ ምርጡን የኢንክሪፕሽን መሳሪያ መፍጠር እንደሚችል አምኗል።")
print("ግን ስህተት መሆኑን ማረጋገጥ ይችላሉ?")  
try:
    f=open('message.txt')
    f2=open('encrypted','w')
    for line in f:
        first_shift=(int(line,base=16)^16)
        second_shift=first_shift^2
        f2.write(str(second_shift)+' ')
except IOError:
    print("File IO Error")
