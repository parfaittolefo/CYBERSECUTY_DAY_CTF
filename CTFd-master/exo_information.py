from math import log10
a='Les étudiants de la SI2-IFRI sont studieux.'
b=[]
c=1
H=0
for i in a:
	if i not in b:
		print(i +" -->"+ str(a.count(i))+"--> P("+i+") = "+ str(a.count(i)) +"/"+str(len(a)))
		b.append(i)
		c*=(a.count(i))/43
		H+=(a.count(i))/43*log10((a.count(i))/43)
print("\nP(E) = "+str(c)+"\n")
print("I(E) = -log("+str(c)+") = " +str(log10(c)*(-1))+"\n")
print("H(E) = "+str(H*(-1)))
