# liczby pierwsze

def is_prime(x):
  if x < 2:
    return False
  else:
    for n in range(2, x-1):
      if x % n == 0:
        return False
    return True
  
i = 0    
while 1 == 1:
  i += 1
  if is_prime(i):
    print(i)
