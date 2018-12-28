# silnia rekurencyjnie

def factorial(n):
  if n > 1:
    return n * factorial(n - 1)
  elif n in (0, 1):
    return 1
