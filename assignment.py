import math
redo = True
while ( redo ):
  radius = input( "What is the radius of the circle? " )
  try:
    radius = float(radius)
    if ( radius >= 0 ):
      redo = False
    else:
      print('The radius must be a > or = 0 ')
  except:
    print('The radius must be a number')

area = math.pi * radius ** 2
circumference = 2 * math.pi * radius
print( "The area of the circle is", area )
print( "The circumference of the circle is", circumference )
