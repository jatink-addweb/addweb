import math as mt

def minimumSets(s, y,l):

	cnt = 0
	num = 0

	f = 0
	for i in range(l):
		num = num * 10 + (ord(s[i]) - ord('0'))
		if (num <= y):
			f = 1
		else: 


			if (f):
				cnt += 1
			num = ord(s[i]) - ord('0')
			f = 0
			if (num <= y):
				f = 1
			else:
				num = 0
		

	if (f):
		cnt += 1

	return cnt

s = input("enter ")

y = int(input())
l=int(input())
print(minimumSets(s, y,l))


