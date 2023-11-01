l=[100,200,300,400,1002]
l=list(map(lambda x:x+x*0.1 if x>100 else x+x*0.05,l))
print(l)
