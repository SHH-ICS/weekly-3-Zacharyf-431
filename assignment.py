Redo = True
a = 0
while (Redo):
  x = input("Enter: Large or Extra Large:  ")
  if x == "large" or x == "Large" or x == "l" or x == "L":
      a = 6
      break
  elif x == "extra large" or x == "extra Large" or x == "Extra large" or x == "Extra Large" or x == "XL"  or x == "xl" or x == "xL" or x == "Xl" or x == "Extra-large" or x == "extra-large" or x == "Extra-Large" or x == "extra-Large":
      a = 10
      break
  else:
      print("Please enter valid input")
      print()
      print()
      print()
      print()

while (Redo):
  y = input ("Enter: Amount of Toppings:  ")

  if y == "1":
    a = a + 1
    break
  elif y == "2":
    a = a + 1.75
    break
  elif y == "3":
    a = a + 2.50
    break
  elif y == "4":
    a = a + 3.35
    break
  elif y == "0":
    a = a + 0 
    break
  else:
    print ("Please enter valid input")
    print()
    print()
    print()
    print()


f = "Your Total is $"
g = round(float(a) * 1.13, 2)
print (f,g)